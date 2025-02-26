<?php

use MediaWiki\Block\DatabaseBlock;
use MediaWiki\Block\Restriction\PageRestriction;
use MediaWiki\Block\Restriction\NamespaceRestriction;

/**
 * @group API
 * @group Database
 * @group medium
 *
 * @covers ApiBlock
 */
class ApiBlockTest extends ApiTestCase {
	protected $mUser = null;

	protected function setUp() {
		parent::setUp();
		$this->tablesUsed = array_merge(
			$this->tablesUsed,
			[ 'ipblocks', 'change_tag', 'change_tag_def', 'logging' ]
		);

		$this->mUser = $this->getMutableTestUser()->getUser();
		$this->setMwGlobals( 'wgBlockCIDRLimit', [
			'IPv4' => 16,
			'IPv6' => 19,
		] );
	}

	protected function getTokens() {
		return $this->getTokenList( self::$users['sysop'] );
	}

	/**
	 * @param array $extraParams Extra API parameters to pass to doApiRequest
	 * @param User  $blocker     User to do the blocking, null to pick
	 *                           arbitrarily
	 */
	private function doBlock( array $extraParams = [], User $blocker = null ) {
		if ( $blocker === null ) {
			$blocker = self::$users['sysop']->getUser();
		}

		$tokens = $this->getTokens();

		$this->assertNotNull( $this->mUser, 'Sanity check' );

		$this->assertArrayHasKey( 'blocktoken', $tokens, 'Sanity check' );

		$params = [
			'action' => 'block',
			'user' => $this->mUser->getName(),
			'reason' => 'Some reason',
			'token' => $tokens['blocktoken'],
		];
		if ( array_key_exists( 'userid', $extraParams ) ) {
			// Make sure we don't have both user and userid
			unset( $params['user'] );
		}
		$ret = $this->doApiRequest( array_merge( $params, $extraParams ), null,
			false, $blocker );

		$block = DatabaseBlock::newFromTarget( $this->mUser->getName() );

		$this->assertTrue( !is_null( $block ), 'Block is valid' );

		$this->assertSame( $this->mUser->getName(), (string)$block->getTarget() );
		$this->assertSame( 'Some reason', $block->getReason() );

		return $ret;
	}

	/**
	 * Block by username
	 */
	public function testNormalBlock() {
		$this->doBlock();
	}

	/**
	 * Block by user ID
	 */
	public function testBlockById() {
		$this->doBlock( [ 'userid' => $this->mUser->getId() ] );
	}

	/**
	 * A blocked user can't block
	 */
	public function testBlockByBlockedUser() {
		$this->setExpectedException( ApiUsageException::class,
			'You cannot block or unblock other users because you are yourself blocked.' );

		$blocked = $this->getMutableTestUser( [ 'sysop' ] )->getUser();
		$block = new DatabaseBlock( [
			'address' => $blocked->getName(),
			'by' => self::$users['sysop']->getUser()->getId(),
			'reason' => 'Capriciousness',
			'timestamp' => '19370101000000',
			'expiry' => 'infinity',
		] );
		$block->insert();

		$this->doBlock( [], $blocked );
	}

	public function testBlockOfNonexistentUser() {
		$this->setExpectedException( ApiUsageException::class,
			'There is no user by the name "Nonexistent". Check your spelling.' );

		$this->doBlock( [ 'user' => 'Nonexistent' ] );
	}

	public function testBlockOfNonexistentUserId() {
		$id = 948206325;
		$this->setExpectedException( ApiUsageException::class,
			"There is no user with ID $id." );

		$this->assertFalse( User::whoIs( $id ), 'Sanity check' );

		$this->doBlock( [ 'userid' => $id ] );
	}

	public function testBlockWithTag() {
		ChangeTags::defineTag( 'custom tag' );

		$this->doBlock( [ 'tags' => 'custom tag' ] );

		$dbw = wfGetDB( DB_MASTER );
		$this->assertSame( 1, (int)$dbw->selectField(
			[ 'change_tag', 'logging', 'change_tag_def' ],
			'COUNT(*)',
			[ 'log_type' => 'block', 'ctd_name' => 'custom tag' ],
			__METHOD__,
			[],
			[
				'change_tag' => [ 'JOIN', 'ct_log_id = log_id' ],
				'change_tag_def' => [ 'JOIN', 'ctd_id = ct_tag_id' ],
			]
		) );
	}

	public function testBlockWithProhibitedTag() {
		$this->setExpectedException( ApiUsageException::class,
			'You do not have permission to apply change tags along with your changes.' );

		ChangeTags::defineTag( 'custom tag' );

		$this->setMwGlobals( 'wgRevokePermissions',
			[ 'user' => [ 'applychangetags' => true ] ] );

		$this->resetServices();

		$this->doBlock( [ 'tags' => 'custom tag' ] );
	}

	public function testBlockWithHide() {
		global $wgGroupPermissions;
		$newPermissions = $wgGroupPermissions['sysop'];
		$newPermissions['hideuser'] = true;
		$this->mergeMwGlobalArrayValue( 'wgGroupPermissions',
			[ 'sysop' => $newPermissions ] );

		$this->resetServices();
		$res = $this->doBlock( [ 'hidename' => '' ] );

		$dbw = wfGetDB( DB_MASTER );
		$this->assertSame( '1', $dbw->selectField(
			'ipblocks',
			'ipb_deleted',
			[ 'ipb_id' => $res[0]['block']['id'] ],
			__METHOD__
		) );
	}

	public function testBlockWithProhibitedHide() {
		$this->setExpectedException( ApiUsageException::class,
			"You don't have permission to hide user names from the block log." );

		$this->doBlock( [ 'hidename' => '' ] );
	}

	public function testBlockWithEmailBlock() {
		$this->setMwGlobals( [
			'wgEnableEmail' => true,
			'wgEnableUserEmail' => true,
			'wgSysopEmailBans' => true,
		] );

		$res = $this->doBlock( [ 'noemail' => '' ] );

		$dbw = wfGetDB( DB_MASTER );
		$this->assertSame( '1', $dbw->selectField(
			'ipblocks',
			'ipb_block_email',
			[ 'ipb_id' => $res[0]['block']['id'] ],
			__METHOD__
		) );
	}

	public function testBlockWithProhibitedEmailBlock() {
		$this->setMwGlobals( [
			'wgEnableEmail' => true,
			'wgEnableUserEmail' => true,
			'wgSysopEmailBans' => true,
		] );

		$this->setExpectedException( ApiUsageException::class,
			"You don't have permission to block users from sending email through the wiki." );

		$this->setMwGlobals( 'wgRevokePermissions',
			[ 'sysop' => [ 'blockemail' => true ] ] );

		$this->resetServices();

		$this->doBlock( [ 'noemail' => '' ] );
	}

	public function testBlockWithExpiry() {
		$res = $this->doBlock( [ 'expiry' => '1 day' ] );

		$dbw = wfGetDB( DB_MASTER );
		$expiry = $dbw->selectField(
			'ipblocks',
			'ipb_expiry',
			[ 'ipb_id' => $res[0]['block']['id'] ],
			__METHOD__
		);

		// Allow flakiness up to one second
		$this->assertLessThanOrEqual( 1,
			abs( wfTimestamp( TS_UNIX, $expiry ) - ( time() + 86400 ) ) );
	}

	public function testBlockWithInvalidExpiry() {
		$this->setExpectedException( ApiUsageException::class, "Expiry time invalid." );

		$this->doBlock( [ 'expiry' => '' ] );
	}

	public function testBlockWithoutRestrictions() {
		$this->setMwGlobals( [
			'wgEnablePartialBlocks' => true,
		] );

		$this->doBlock();

		$block = DatabaseBlock::newFromTarget( $this->mUser->getName() );

		$this->assertTrue( $block->isSitewide() );
		$this->assertCount( 0, $block->getRestrictions() );
	}

	public function testBlockWithRestrictions() {
		$this->setMwGlobals( [
			'wgEnablePartialBlocks' => true,
		] );

		$title = 'Foo';
		$page = $this->getExistingTestPage( $title );
		$namespace = NS_TALK;

		$this->doBlock( [
			'partial' => true,
			'pagerestrictions' => $title,
			'namespacerestrictions' => $namespace,
		] );

		$block = DatabaseBlock::newFromTarget( $this->mUser->getName() );

		$this->assertFalse( $block->isSitewide() );
		$this->assertCount( 2, $block->getRestrictions() );
		$this->assertInstanceOf( PageRestriction::class, $block->getRestrictions()[0] );
		$this->assertEquals( $title, $block->getRestrictions()[0]->getTitle()->getText() );
		$this->assertInstanceOf( NamespaceRestriction::class, $block->getRestrictions()[1] );
		$this->assertEquals( $namespace, $block->getRestrictions()[1]->getValue() );
	}

	/**
	 * @expectedException ApiUsageException
	 * @expectedExceptionMessage The "token" parameter must be set
	 */
	public function testBlockingActionWithNoToken() {
		$this->doApiRequest(
			[
				'action' => 'block',
				'user' => $this->mUser->getName(),
				'reason' => 'Some reason',
			],
			null,
			false,
			self::$users['sysop']->getUser()
		);
	}

	/**
	 * @expectedException ApiUsageException
	 * @expectedExceptionMessage Invalid value "127.0.0.1/64" for user parameter "user".
	 */
	public function testBlockWithLargeRange() {
		$tokens = $this->getTokens();

		$this->doApiRequest(
			[
				'action' => 'block',
				'user' => '127.0.0.1/64',
				'reason' => 'Some reason',
				'token' => $tokens['blocktoken'],
			],
			null,
			false,
			self::$users['sysop']->getUser()
		);
	}

	/**
	 * @expectedException ApiUsageException
	 * @expectedExceptionMessage Too many values supplied for parameter "pagerestrictions". The
	 * limit is 10.
	 */
	public function testBlockingTooManyPageRestrictions() {
		$this->setMwGlobals( [
			'wgEnablePartialBlocks' => true,
		] );

		$tokens = $this->getTokens();

		$this->doApiRequest(
			[
				'action' => 'block',
				'user' => $this->mUser->getName(),
				'reason' => 'Some reason',
				'partial' => true,
				'pagerestrictions' => 'One|Two|Three|Four|Five|Six|Seven|Eight|Nine|Ten|Eleven',
				'token' => $tokens['blocktoken'],
			],
			null,
			false,
			self::$users['sysop']->getUser()
		);
	}

	public function testRangeBlock() {
		$this->mUser = User::newFromName( '128.0.0.0/16', false );
		$this->doBlock();
	}

	/**
	 * @expectedException ApiUsageException
	 * @expectedExceptionMessage Range blocks larger than /16 are not allowed.
	 */
	public function testVeryLargeRangeBlock() {
		$this->mUser = User::newFromName( '128.0.0.0/1', false );
		$this->doBlock();
	}
}
