<?php
/** Cornish (kernowek)
 *
 * See MessagesQqq.php for message documentation incl. usage of parameters
 * To improve a translation please visit http://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 * @author Kernoweger
 * @author Kw-Moon
 * @author MF-Warburg
 * @author Malafaya
 * @author Mongvras
 * @author Nicky.ker
 * @author Nrowe
 * @author Scryfer
 */

$namespaceNames = array(
	NS_MEDIA            => 'Media',
	NS_SPECIAL          => 'Arbednek',
	NS_TALK             => 'Keskows',
	NS_USER             => 'Devnydhyer',
	NS_USER_TALK        => 'Keskows_Devnydhyer',
	NS_PROJECT_TALK     => 'Keskows_$1',
	NS_FILE             => 'Restren',
	NS_FILE_TALK        => 'Keskows_Restren',
	NS_MEDIAWIKI        => 'MediaWiki',
	NS_MEDIAWIKI_TALK   => 'Keskows_MediaWiki',
	NS_TEMPLATE         => 'Skantlyn',
	NS_TEMPLATE_TALK    => 'Keskows_Skantlyn',
	NS_HELP             => 'Gweres',
	NS_HELP_TALK        => 'Keskows_Gweres',
	NS_CATEGORY         => 'Klass',
	NS_CATEGORY_TALK    => 'Keskows_Klass',
);

$namespaceAliases = array(
	'Arbennek'           => NS_SPECIAL,
	'Cows'               => NS_TALK,
	'Kescows'            => NS_TALK,
	'Cows_Devnydhyer'    => NS_USER_TALK,
	'Kescows_Devnydhyer' => NS_USER_TALK,
	'Cows_$1'            => NS_PROJECT_TALK,
	'Kescows_$1'         => NS_PROJECT_TALK,
	'Cows_Restren'       => NS_FILE_TALK,
	'Kescows_Restren'    => NS_FILE_TALK,
	'Cows_MediaWiki'     => NS_MEDIAWIKI_TALK,
	'Kescows_MediaWiki'  => NS_MEDIAWIKI_TALK,
	'Cows_Scantlyn'      => NS_TEMPLATE_TALK,
	'Scantlyn'           => NS_TEMPLATE,
	'Kescows_Skantlyn'   => NS_TEMPLATE_TALK,
	'Cows_Gweres'        => NS_HELP_TALK,
	'Kescows_Gweres'     => NS_HELP_TALK,
	'Cows_Class'         => NS_CATEGORY_TALK,
	'Class'              => NS_CATEGORY,
	'Kescows_Class'      => NS_CATEGORY_TALK,
);

$specialPageAliases = array(
	'Allmessages'               => array( 'OllMessajow' ),
	'Allpages'                  => array( 'OllFolednow' ),
	'Ancientpages'              => array( 'FolednowKoth' ),
	'Badtitle'                  => array( 'TitelDrog' ),
	'Blankpage'                 => array( 'FolenWag' ),
	'Block'                     => array( 'Lettya' ),
	'Booksources'               => array( 'PednfentynyowLyver' ),
	'Categories'                => array( 'Klassys' ),
	'ChangeEmail'               => array( 'ChanjyaEbost' ),
	'ChangePassword'            => array( 'ChanjyaGerTremena' ),
	'Contributions'             => array( 'Kevrohow' ),
	'CreateAccount'             => array( 'FormyaAkont' ),
	'DeletedContributions'      => array( 'KevrohowDiles' ),
	'EditWatchlist'             => array( 'ChanjyaRolGolyas' ),
	'Emailuser'                 => array( 'EbostyaDevnydhyer' ),
	'Export'                    => array( 'Esperthi' ),
	'Import'                    => array( 'Ymperthi' ),
	'MIMEsearch'                => array( 'HwilansMIME' ),
	'Movepage'                  => array( 'GwayaFolen' ),
	'Mycontributions'           => array( 'OwHevrohow' ),
	'Mypage'                    => array( 'OwFolen' ),
	'Mytalk'                    => array( 'OwHows' ),
	'Myuploads'                 => array( 'OwUghkargansow' ),
	'Newimages'                 => array( 'RestrednowNowyth' ),
	'Newpages'                  => array( 'FolednowNowyth' ),
	'PasswordReset'             => array( 'DassetyaGerTremena' ),
	'Preferences'               => array( 'Dowisyansow' ),
	'Randompage'                => array( 'FolenDreJons' ),
	'Recentchanges'             => array( 'Chanjyow_a-dhiwedhes' ),
	'Search'                    => array( 'Hwilas' ),
	'Specialpages'              => array( 'FolednowArbednek' ),
	'Uncategorizedcategories'   => array( 'KlassysHebKlass' ),
	'Uncategorizedimages'       => array( 'RestrednowHebKlass' ),
	'Uncategorizedpages'        => array( 'FolednowHebKlass' ),
	'Uncategorizedtemplates'    => array( 'SkantlynsHebKlass' ),
	'Upload'                    => array( 'Ughkarga' ),
	'Userlogin'                 => array( 'Omgelmi' ),
	'Userlogout'                => array( 'Digelmi' ),
	'Userrights'                => array( 'GwiryowDevnydhyer' ),
	'Version'                   => array( 'Versyon' ),
	'Wantedcategories'          => array( 'KlassysHwansus' ),
	'Wantedfiles'               => array( 'RestrednowHwansus' ),
	'Wantedpages'               => array( 'FolednowHwansus' ),
	'Wantedtemplates'           => array( 'SkantlynsHwansus' ),
	'Watchlist'                 => array( 'Rol_golyas' ),
	'Whatlinkshere'             => array( 'OwKevrednaObma' ),
);

$messages = array(
# User preference toggles
'tog-hideminor' => 'Cudha chanjyow bian yn chanjyow a-dhiwedhes',
'tog-watchcreations' => "Keworra folennow gwruthys genev ha restrennow ughkergys genev dhe'm rol golyas",
'tog-watchdefault' => "Keworra folennow ha restrennow chanjys genev dhe'm rol golyas",
'tog-watchmoves' => "Keworra folennow ha restrennow gwayys genev dhe'm rol golyas",
'tog-watchdeletion' => "Keworra folednow dileys genev dhe'm rol golyas",

'underline-always' => 'Puppres',
'underline-never' => 'Jammes',
'underline-default' => 'Defowt an beurel po an grohen',

# Font style option in Special:Preferences
'editfont-default' => 'Defowt an beurel',

# Dates
'sunday' => "De'Sul",
'monday' => "De'Lun",
'tuesday' => "De'Meurth",
'wednesday' => "De'Merher",
'thursday' => "De'Yow",
'friday' => "De'Gwener",
'saturday' => "De'Sadorn",
'sun' => 'Sul',
'mon' => 'Lun',
'tue' => 'Meu',
'wed' => 'Mer',
'thu' => 'Yow',
'fri' => 'Gwe',
'sat' => 'Sad',
'january' => 'Genver',
'february' => 'Hwevrel',
'march' => 'Meurth',
'april' => 'Ebrel',
'may_long' => 'Me',
'june' => 'Metheven',
'july' => 'Gortheren',
'august' => 'Est',
'september' => 'Gwynngala',
'october' => 'Hedra',
'november' => 'Du',
'december' => 'Kevardhu',
'january-gen' => 'Genver',
'february-gen' => 'Hwevrel',
'march-gen' => 'Meurth',
'april-gen' => 'Ebrel',
'may-gen' => 'Me',
'june-gen' => 'Metheven',
'july-gen' => 'Gortheren',
'august-gen' => 'Est',
'september-gen' => 'Gwynngala',
'october-gen' => 'Hedra',
'november-gen' => 'Du',
'december-gen' => 'Kevardhu',
'jan' => 'Gen',
'feb' => 'Hwe',
'mar' => 'Meu',
'apr' => 'Ebr',
'may' => 'Me',
'jun' => 'Met',
'jul' => 'Gor',
'aug' => 'Est',
'sep' => 'Gwy',
'oct' => 'Hed',
'nov' => 'Du',
'dec' => 'Kev',

# Categories related messages
'pagecategories' => '{{PLURAL:$1|Klass|Klassys}}',
'category_header' => 'Folennow y\'n klass "$1"',
'subcategories' => 'Isglassys',
'category-media-header' => 'Media y\'n klass "$1"',
'category-empty' => "''Nyns eus na folennow na media y'n klass-ma.''",
'hidden-categories' => '{{PLURAL:$1|Klass kudhys|Klassys kudhys}}',
'hidden-category-category' => 'Classys cudhys',
'category-subcat-count' => "{{PLURAL:$2|Nyns eus dhe'n class-ma marnas an isglass a sew.|Yma dhe'n class-ma an {{PLURAL:$1|isglass|$1 isglass}} a sew, dhyworth somm a $2.}}",
'category-subcat-count-limited' => "Yma dhe'n class-ma an {{PLURAL:$1|isglass|$1 isglass}} a sew.",
'category-article-count' => "{{PLURAL:$2|Nyns eus dhe'n klass-ma marnas an folen a sew.|Yma'n {{PLURAL:$1|folen|$1 folennow}} a sew y'n klass-ma, dhyworth somm a $2.}}",
'category-article-count-limited' => "Yma'n {{PLURAL:$1|folen|$1 folen}} a sew y'n class-ma.",
'category-file-count' => "{{PLURAL:$2|Nyns eus dhe'n klass-ma an folen a sew.|Yma'n  {{PLURAL:$1|folen|$1 folen}} a sew y'n klass-ma, dhyworth somm a $2.}}",
'category-file-count-limited' => "Yma'n {{PLURAL:$1|folen|$1 folen}} a sew y'n class-ma.",
'listingcontinuesabbrev' => 'pes.',

'about' => 'A-dro dhe',
'newwindow' => '(y hwra egeri yn fenester nowyth)',
'cancel' => 'Hedhi',
'moredotdotdot' => 'Moy...',
'mypage' => 'Folen',
'mytalk' => 'Keskows',
'anontalk' => 'Kescows rag an drigva IP-ma',
'navigation' => 'Lewyans',
'and' => '&#32;ha(g)',

# Cologne Blue skin
'qbfind' => 'Cavos',
'qbbrowse' => 'Peury',
'qbedit' => 'Chanjya',
'qbpageoptions' => 'An folen-ma',
'qbmyoptions' => 'Ow folennow',
'qbspecialpages' => 'Folennow arbennek',
'faq' => 'FAQ',

# Vector skin
'vector-action-addsection' => 'Keworra testen',
'vector-action-delete' => 'Dilea',
'vector-action-move' => 'Gwaya',
'vector-action-protect' => 'Difres',
'vector-action-undelete' => 'Disdhilea',
'vector-action-unprotect' => 'Chanjya difresans',
'vector-view-create' => 'Gwruthyl',
'vector-view-edit' => 'Chanjya',
'vector-view-history' => 'Gweles an istori',
'vector-view-view' => 'Redya',
'vector-view-viewsource' => 'Gweles an bennfenten',
'actions' => 'Gwriansow',
'namespaces' => 'Spasys hanow',

'errorpagetitle' => 'Gwall',
'returnto' => 'Dehweles dhe $1.',
'tagline' => 'Dhyworth {{SITENAME}}',
'help' => 'Gweres',
'search' => 'Hwilas',
'searchbutton' => 'Hwilas',
'go' => 'Ke',
'searcharticle' => 'Mos',
'history' => 'Istori an folen',
'history_short' => 'Istori',
'printableversion' => 'Versyon pryntyadow',
'permalink' => 'Kevren fast',
'print' => 'Pryntya',
'view' => 'Gweles',
'edit' => 'Chanjya',
'create' => 'Gwruthyl',
'editthispage' => 'Chanjya an folen-ma',
'create-this-page' => 'Gwruthyl an folen-ma',
'delete' => 'Dilea',
'deletethispage' => 'Dilea an folen-ma',
'undelete_short' => 'Disdhilea {{PLURAL:$1|unn janj|$1 chanj}}',
'viewdeleted_short' => 'Gweles {{PLURAL:$1|unn janj diles|$1 chanj diles}}',
'protect' => 'Difres',
'protect_change' => 'chanjya',
'protectthispage' => 'Difres an folen-ma',
'unprotect' => 'Chanjya difresans',
'unprotectthispage' => 'Chanjya difresans an folen-ma',
'newpage' => 'Folen nowyth',
'talkpage' => "Dadhelva a-dro dhe'n folen-ma",
'talkpagelinktext' => 'Keskows',
'specialpage' => 'Folen arbennek',
'personaltools' => 'Toulys personel',
'postcomment' => 'Rann noweth',
'talk' => 'Kescows',
'views' => 'Gwelow',
'toolbox' => 'Box toulys',
'userpage' => 'Folen devnydhyer',
'projectpage' => 'Folen meta',
'imagepage' => 'Gweles folen an restren',
'mediawikipage' => 'Gweles folen an messajys',
'templatepage' => 'Gweles folen an scantlyn',
'viewhelppage' => 'Gweles an folen gweres',
'categorypage' => 'Gweles folen an class',
'viewtalkpage' => 'Gweles an kescows',
'otherlanguages' => 'Yn yethow erel',
'redirectedfrom' => '(Daswedyes dhyworth $1)',
'redirectpagesub' => 'Folen daswedyans',
'lastmodifiedat' => 'An folen-ma a veu chanjys an $1, dhe $2.',
'jumpto' => 'Lamma dhe:',
'jumptonavigation' => 'lewyans',
'jumptosearch' => 'hwilas',

# All link text and link target definitions of links into project namespace that get used by other message strings, with the exception of user group pages (see grouppage) and the disambiguation template definition (see disambiguations).
'aboutsite' => 'A-dro dhe {{SITENAME}}',
'aboutpage' => 'Project:Kedhlow',
'copyright' => 'Cavadow yw an dalgh yn-dann $1.',
'copyrightpage' => '{{ns:project}}:Gwirbryntyansow',
'currentevents' => 'Darvosow a-lemmyn',
'currentevents-url' => 'Project:Darvosow a-lemmyn',
'disclaimers' => 'Avisyansow',
'disclaimerpage' => 'Project:Avisyans ollgemmyn',
'edithelp' => 'Gweres gans chanjya',
'edithelppage' => 'Help:Chanjya',
'helppage' => 'Help:Gweres',
'mainpage' => 'Folen dre',
'mainpage-description' => 'Folen dre',
'policy-url' => 'Project:Policy',
'portal' => 'Porth an gemeneth',
'portal-url' => 'Project:Porth an gemeneth',
'privacy' => 'Polici privetter',
'privacypage' => 'Project:Policy privetter',

'badaccess' => 'Gwall cummyes',

'ok' => 'Sur',
'retrievedfrom' => 'Daskevys dhyworth "$1"',
'youhavenewmessages' => 'Yma $1 genowgh ($2).',
'newmessageslink' => 'messajys nowyth',
'newmessagesdifflink' => 'chanj diwettha',
'youhavenewmessagesmulti' => 'Yma messajys noweth genowgh war $1',
'editsection' => 'chanjya',
'editold' => 'chanjya',
'viewsourceold' => 'gweles an bennfenten',
'editlink' => 'chanjya',
'viewsourcelink' => 'gweles an bennfenten',
'editsectionhint' => 'Chanjya an rann: $1',
'toc' => 'Rol an folen',
'showtoc' => 'disqwedhes',
'hidetoc' => 'cudha',
'collapsible-expand' => 'Efany',
'thisisdeleted' => 'Gweles po restorya $1?',
'viewdeleted' => 'Gweles $1?',
'restorelink' => '{{PLURAL:$1|unn janj diles|$1 chanj diles}}',
'feedlinks' => 'Feed:',
'site-rss-feed' => '$1 RSS feed',
'site-atom-feed' => '$1 Atom feed',
'page-rss-feed' => '"$1" feed RSS',
'page-atom-feed' => '"$1" feed Atom',
'red-link-title' => '$1 (nyns eus folen henwys yndelma)',

# Short words for each namespace, by default used in the namespace tab in monobook
'nstab-main' => 'Erthygel',
'nstab-user' => 'Folen devnydhyer',
'nstab-media' => 'Folen media',
'nstab-special' => 'Folen arbennek',
'nstab-project' => 'Folen ragdres',
'nstab-image' => 'Restren',
'nstab-mediawiki' => 'Messach',
'nstab-template' => 'Skantlyn',
'nstab-help' => 'Gweres',
'nstab-category' => 'Klass',

# General errors
'error' => 'Gwall',
'databaseerror' => 'Gwall database',
'readonly' => 'Alwhedhys yw an database',
'missingarticle-rev' => '(amendyans#: $1)',
'missingarticle-diff' => '(Dyffrans: $1, $2)',
'internalerror' => 'Gwall a-bervedh',
'internalerror_info' => 'Gwall a-bervedh: $1',
'filecopyerror' => 'Ny veu possybyl copia an restren "$1" dhe "$2".',
'filerenameerror' => 'Ny veu possybyl dashenwel an restren "$1" dhe "$2".',
'filedeleteerror' => 'Ny veu possybyl dilea an restren "$1".',
'filenotfound' => 'Ny veu kevys an restren "$1".',
'badtitle' => 'Titel drog',
'viewsource' => 'Gweles an bennfenten',

# Login and logout pages
'welcomecreation' => '== Dynnargh, $1! ==
Gwruthys yw agas acont.
Na wrewgh ankevy dhe janjya agas [[Special:Preferences|dowisyansow {{SITENAME}}]].',
'yourname' => 'Hanow usyer:',
'yourpassword' => 'Ger tremena:',
'yourpasswordagain' => 'Jynnskrifowgh agas ger tremena arta:',
'remembermypassword' => "Perthi kov a'm omgelmi war'n jynn amontya-ma (rag $1 {{PLURAL:$1|dedh}} dhe'n moyha)",
'securelogin-stick-https' => 'Gwitha junyes gans HTTPS wosa omgelmy',
'yourdomainname' => 'Agas tiredh:',
'login' => 'Omgelmi',
'nav-login-createaccount' => 'Omgelmi / Formya akont nowyth',
'loginprompt' => 'Res yw dhywgh galosegi cookies rag omgelmi orth {{SITENAME}}.',
'userlogin' => 'Omgelmi / formya akont nowyth',
'userloginnocreate' => 'Omgelmy',
'logout' => 'Digelmy',
'userlogout' => 'Digelmi',
'notloggedin' => 'Digelmys',
'nologin' => "A nyns eus akont dhywgh? '''$1'''.",
'nologinlink' => 'Formyowgh akont',
'createaccount' => 'Formya akont nowyth',
'gotaccount' => "Eus akont dhis seulabres? '''$1'''.",
'gotaccountlink' => 'Omgelmi',
'userlogin-resetlink' => 'Eus ankevys genowgh agas manylyon omgelmi?',
'createaccountmail' => 'der e-bost',
'createaccountreason' => 'Acheson:',
'badretype' => 'Ny wra omdhesedhes an geryow-tremena entrys genowgh.',
'userexists' => "Yma'n hanow usyer entrys genowgh ow pos usys seulabres.
Dowisowgh hanow aral mar pleg.",
'loginerror' => 'Gwall omgelmy',
'createaccounterror' => 'Ny veu possybyl formya an acont: $1',
'nocookiesnew' => 'Formys yw an acont, mes nyns owgh why omgelmys.
Yma {{SITENAME}} owth usya cookies rag omgelmy devnydhyoryon.
Dialosegys yw cookies war agas jynn amontya.
Gwrewgh aga galosegy, hag omgelmowgh dre usya agas hanow usyer ha ger tremena noweth.',
'nocookieslogin' => 'Yma {{SITENAME}} owth usya cookies rag omgelmi devnydhyoryon.
Dialosegys yw cookies war agas jynn amontya.
Gwrewgh aga galosegi hag assaya arta.',
'noname' => 'Ny wrussowgh why ry hanow usyer da.',
'loginsuccess' => "'''Omgelmys owgh why lemmyn orth {{SITENAME}} avel \"\$1\".'''",
'nouserspecified' => 'Res yw dhywgh ry hanow usyer.',
'wrongpassword' => 'Camm o an ger tremena.
Assayowgh arta mar pleg.',
'wrongpasswordempty' => 'Gwag o an ger-tremena res. Assayowgh arta mar pleg.',
'mailmypassword' => 'E-bostya ger tremena nowyth',
'noemailcreate' => 'Res yw dhewgh ry trigva ebost da',
'accountcreated' => 'Acont formys',
'accountcreatedtext' => 'Formys re beu an acont rag $1.',
'loginlanguagelabel' => 'Yeth: $1',

# Change password dialog
'resetpass' => 'Chanjya ger-tremena',
'resetpass_header' => 'Chanjya ger tremena an acont',
'oldpassword' => 'Ger tremena coth:',
'newpassword' => 'Ger tremena noweth:',
'resetpass-submit-loggedin' => 'Chanjya an ger-tremena',
'resetpass-submit-cancel' => 'Hedhi',

# Special:PasswordReset
'passwordreset-username' => 'Hanow usyer:',
'passwordreset-email' => 'Trigva ebost:',

# Edit page toolbar
'bold_sample' => 'Text tew',
'bold_tip' => 'Text tew',
'italic_sample' => 'Text italek',
'italic_tip' => 'Text italek',
'link_sample' => 'Titel an gevren',
'link_tip' => 'Kevren bervedhel',
'extlink_sample' => 'http://www.example.com titel an gevren',
'extlink_tip' => 'Kevren a-ves (na ankevowgh an rager http://)',
'headline_sample' => 'Text an titel',
'headline_tip' => 'Pennlinen nivel 2',
'nowiki_sample' => 'Keworrowgh text heb furvyans omma',
'nowiki_tip' => 'Skonya aswon furvyans wiki',
'image_tip' => 'Restren neythys',
'media_tip' => 'Kevren restren',
'sig_tip' => 'Agas sinans gans stampa-termyn',

# Edit pages
'summary' => 'Derivas kot:',
'subject' => 'Testen/Pennlinen:',
'minoredit' => 'Chanj bian yw hemma',
'watchthis' => 'Golyas an folen-ma',
'savearticle' => 'Gwitha',
'preview' => 'Ragwel',
'showpreview' => 'Ragweles',
'showdiff' => 'Diskwedhes an chanjyow',
'anoneditwarning' => "'''Gwarnyans:''' Nyns owgh hwi omgelmys.
Rekordys a vedh agas trigva IP yn istori an folen-ma.",
'summary-preview' => "Ragwel a'n derivas kot:",
'loginreqlink' => 'omgelmy',
'accmailtitle' => 'Danvenys yw an ger-tremena.',
'newarticle' => '(Nowyth)',
'noarticletext' => 'Nyns eus text y\'n folen-ma.
Hwi a yll [[Special:Search/{{PAGENAME}}|hwilas titel an folen-ma]] yn folennow erel,
<span class="plainlinks">[{{fullurl:{{#Special:Log}}|page={{FULLPAGENAMEE}}}} hwilas y\'n kovnotennow kelmys],
po [{{fullurl:{{FULLPAGENAME}}|action=edit}} chanjya an folen-ma]</span>.',
'updated' => '(Nowedhys)',
'note' => "'''Noten:'''",
'previewnote' => "Gwrewgh perthi kov, nyns yw hemma marnas ragwel.''' Nyns yw gwithys agas chanjyow hwath!",
'editing' => 'Ow chanjya $1',
'editingsection' => 'ow chanjya $1 (rann)',
'editingcomment' => 'ow chanjya $1 (rann noweth)',
'yourtext' => 'Agas text',
'yourdiff' => 'Dyffransow',
'templatesused' => '{{PLURAL:$1|Skantlyn|Skantlyns}} usys war an folen-ma:',
'templatesusedpreview' => "{{PLURAL:$1|Scantlyn|Scantlyns}} usys y'n ragwel-ma:",
'template-protected' => '(gwithys)',
'template-semiprotected' => '(hanter-difresys)',
'hiddencategories' => 'Esel a {{PLURAL:$1|1 glass kudhys|$1 klass kudhys}} yw an folen-ma:',
'permissionserrorstext-withaction' => 'Nyns eus kummyes dhywgh dhe $2, rag an {{PLURAL:$1|acheson|achesonys}} a sew:',
'log-fulllog' => 'Gweles an govnoten dien',

# "Undo" feature
'undo-summary' => 'Diswul amendyans $1 gans [[Special:Contributions/$2|$2]] ([[User talk:$2|kescows]])',

# Account creation failure
'cantcreateaccounttitle' => 'Nyns yw possybyl formya an acont',

# History pages
'viewpagelogs' => 'Gweles kovnotennow an folen-ma',
'currentrev' => 'Amendyans diwettha',
'currentrev-asof' => 'An chanj diwettha a-ban $1',
'revisionasof' => 'Versyon an folen a-ban $1',
'revision-info' => 'Amendyans a-ban $1 gans $2',
'previousrevision' => '← Amendyans kottha',
'nextrevision' => 'Amendyans nowyttha →',
'currentrevisionlink' => 'An amendyans diwettha',
'cur' => 'lemmyn',
'next' => 'nessa',
'last' => 'kens',
'page_first' => 'kensa',
'page_last' => 'kens',
'histlegend' => "Dowis dyffransow: Merkyowgh kistennow radyo a'n amendyansow dhe geheveli, ha gwaskowgh 'entra' po an boton orth goles an folen.<br />
Alhwedh: '''({{int:cur}})''' = an dyffrans dhyworth an amendyans diwettha, '''({{int:last}})''' = dyffrans dhyworth an amendyans kens, '''{{int:minoreditletter}}''' = chanj bian.",
'history-fieldset-title' => 'Peuri an istori',
'history-show-deleted' => 'Re diles yn unnik',
'histfirst' => 'An moyha a-varr',
'histlast' => 'An diwettha',
'historyempty' => '(gwag)',

# Revision feed
'history-feed-item-nocomment' => '$1 dhe $2',

# Revision deletion
'rev-delundel' => 'diskwedhes/kudha',
'revdel-restore' => 'chanjya an hewelder',
'revdel-restore-deleted' => 'amendyansow diles',
'revdel-restore-visible' => 'amendyansow gweladow',
'pagehist' => 'Istory an folen',

# History merging
'mergehistory-reason' => 'Cheson:',

# Merge log
'revertmerge' => 'Disworunya',

# Diffs
'history-title' => 'Istori an folen "$1"',
'difference-multipage' => '(Dyffrans ynter an folennow)',
'lineno' => 'Linen $1:',
'compareselectedversions' => 'Keheveli an amendyansow dowisyes',
'showhideselectedversions' => 'Disqwedhes/cudha amendyansow dowisyes',
'editundo' => 'diswul',

# Search results
'searchresults' => 'Sewyansow hwilas',
'searchresults-title' => 'Sewyansow hwilas rag "$1"',
'searchresulttext' => 'Rag moy kedhlow a-dro dhe whilas yn {{SITENAME}}, gwelowgh [[{{MediaWiki:Helppage}}|{{int:help}}]].',
'searchsubtitle' => 'Why a wrug whilas \'\'\'[[:$1]]\'\'\' ([[Special:Prefixindex/$1|keniver folen ow talleth gans "$1"]]{{int:pipe-separator}}[[Special:WhatLinksHere/$1|keniver folen ow kevrenna dhe "$1"]])',
'searchsubtitleinvalid' => "Why a wrug whilas '''$1'''",
'notitlematches' => 'Nyns eus titel folen ow machya',
'notextmatches' => 'Nyns eus text folen ow machya',
'prevn' => 'kens {{PLURAL:$1|$1}}',
'nextn' => 'nessa {{PLURAL:$1|$1}}',
'prevn-title' => '$1 {{PLURAL:$1|sewyans|sewyans}} kens',
'nextn-title' => '$1 {{PLURAL:$1|sewyans|sewyans}} nessa',
'viewprevnext' => 'Gweles ($1 {{int:pipe-separator}} $2) ($3)',
'searchmenu-legend' => 'Etholyow whilans',
'searchmenu-exists' => "''Yma folen henwys \"[[:\$1]]\" war an wiki-ma'''",
'searchmenu-new' => "'''Gwruthyl an folen \"[[:\$1]]\" war an wiki-ma!'''",
'searchhelp-url' => 'Help:Gweres',
'searchprofile-articles' => 'Folennow dhalhen',
'searchprofile-project' => 'Folennow gweres ha ragdres',
'searchprofile-images' => 'Liesmedia',
'searchprofile-everything' => 'Puptra',
'searchprofile-advanced' => 'Avonsys',
'searchprofile-articles-tooltip' => 'Hwilas yn $1',
'searchprofile-project-tooltip' => 'Hwilas yn $1',
'searchprofile-images-tooltip' => 'Hwilas restrennow',
'searchprofile-everything-tooltip' => 'Hwilas yn pub teller (yn folennow keskows ynwedh)',
'search-result-size' => '$1 ({{PLURAL:$2|1 ger|$2 ger}})',
'search-result-category-size' => '{{PLURAL:$1|1 esel|$1 esel}} ({{PLURAL:$2|1 isglass|$2 isglass}}, {{PLURAL:$3|1 restren|$3 restren}})',
'search-redirect' => '(daswedyans $1)',
'search-section' => '(rann $1)',
'search-suggest' => 'A wrussowgh hwi menya: $1',
'search-interwiki-caption' => 'Ragdresow whor',
'search-interwiki-default' => '$1 sewyansow:',
'search-interwiki-more' => '(moy)',
'search-relatedarticle' => 'Kelmys',
'mwsuggest-disable' => 'Dialosegy profyansow AJAX',
'searcheverything-enable' => 'Whilas yn keniver spas-hanow',
'searchrelated' => 'kelmys',
'searchall' => 'oll',
'showingresultsheader' => "{{PLURAL:$5|Sewyans '''$1''' dhyworth '''$3'''|Sewyansow '''$1 - $2''' dhyworth '''$3'''}} rag '''$4'''",
'nonefound' => "'''Noten''': Nyns yw marnas rann a'n spasys-hanow whilys dre dhefowt.
Gwrewgh assaya rag-gorra agas govyn gans ''all:'' rag whilas yn pub teller (ynnans an folennow kescows, scantlyns, etc), po usyowgh an spas-hanow whensys avel rag-gorrans.",
'search-nonefound' => 'Nyns esa sewyansow ow machya an govyn.',
'powersearch' => 'Whilans avonsys',
'powersearch-legend' => 'Whilans avonsys',
'powersearch-ns' => 'Whilas yn spasys-hanow:',
'powersearch-redir' => 'Gorra an daswedyansow yn rol',
'powersearch-field' => 'Whilas',
'powersearch-togglelabel' => 'Dowis:',
'powersearch-toggleall' => 'Oll',
'powersearch-togglenone' => 'Nagonen',
'search-external' => 'Whilans a-ves',

# Preferences page
'preferences' => 'Dowisyansow',
'mypreferences' => 'Dowisyansow',
'changepassword' => 'Chanjya an ger-tremena',
'prefs-skin' => 'Crohen',
'prefs-datetime' => 'Dedhyans hag eur',
'prefs-rc' => 'Chanjyow a-dhiwedhes',
'prefs-watchlist' => 'Rol golyas',
'prefs-resetpass' => 'Chanjya ger-tremena',
'prefs-email' => 'Etholyow e-bost',
'saveprefs' => 'Gwitha',
'searchresultshead' => 'Whilas',
'timezoneregion-africa' => 'Afrika',
'timezoneregion-america' => 'Amerika',
'timezoneregion-antarctica' => 'Antarktika',
'timezoneregion-arctic' => 'Arktek',
'timezoneregion-asia' => 'Asi',
'timezoneregion-atlantic' => 'Mor Atlantek',
'timezoneregion-australia' => 'Ostrali',
'timezoneregion-europe' => 'Europa',
'timezoneregion-indian' => 'Mor Eyndek',
'timezoneregion-pacific' => 'Mor Kosel',
'prefs-searchoptions' => 'Etholyow hwilas',
'prefs-files' => 'Restrednow',
'youremail' => 'E-bost:',
'username' => 'Hanow-usyer:',
'uid' => 'ID devnydhyer:',
'prefs-memberingroups' => "Esel a'n {{PLURAL:$1|bagas|bagasow}}:",
'yourrealname' => 'Hanow gwir:',
'yourlanguage' => 'Yeth:',
'yournick' => 'Sinans nowyth:',
'yourgender' => 'Reyth:',
'gender-male' => 'Gorow',
'gender-female' => 'Benow',
'email' => 'E-bost',
'prefs-signature' => 'Sinans',
'prefs-advancedediting' => 'Etholyow avoncys',
'prefs-advancedrc' => 'Etholyow avoncys',
'prefs-advancedrendering' => 'Etholyow avoncys',
'prefs-advancedsearchoptions' => 'Etholyow avoncys',
'prefs-advancedwatchlist' => 'Etholyow avoncys',

# User rights
'userrights-groupsmember' => 'Esel a:',
'userrights-reason' => 'Cheson:',

# Groups
'group' => 'Bagas:',
'group-user' => 'Devnydhyoryon',
'group-bot' => 'Botow',
'group-sysop' => 'Menystoryon',
'group-all' => '(oll)',

'group-user-member' => '{{GENDER:$1|Devnydhyer}}',
'group-bot-member' => '{{GENDER:$1|bot}}',
'group-sysop-member' => '{{GENDER:$1|menyster}}',

'grouppage-user' => '{{ns:project}}:Devnydhyoryon',
'grouppage-bot' => '{{ns:project}}:Botow',
'grouppage-sysop' => '{{ns:project}}:Menystoryon',

# Rights
'right-read' => 'Redya folednow',
'right-edit' => 'Chanjya folednow',
'right-createtalk' => 'Gwruthyl folednow keskows',
'right-createaccount' => 'Formya akontow devnydhyer nowyth',
'right-move' => 'Gwaya folednow',
'right-movefile' => 'Gwaya restrednow',
'right-upload' => 'Ughkarga restrednow',
'right-delete' => 'Dilea folednow',

# User rights log
'rightslog' => 'Kovnoten gwiryow an devnydhyer',

# Associated actions - in the sentence "You do not have permission to X"
'action-edit' => 'chanjya an folen-ma',
'action-move' => 'gwaya an folen ma',
'action-movefile' => 'gwaya an restren ma',
'action-upload' => 'ughkarga an restren-ma',
'action-delete' => 'dilea an folen-ma',

# Recent changes
'nchanges' => '$1 {{PLURAL:$1|chanj|chanj}}',
'recentchanges' => 'Chanjyow a-dhiwedhes',
'recentchanges-legend' => 'Etholyow an chanjyow a-dhiwedhes',
'recentchanges-summary' => "Sewya an chanjyow diwettha eus dhe'n wiki war'n folen-ma.",
'recentchanges-feed-description' => "Helghya an chanjyow diwettha dhe'n wiki y'n feed-ma.",
'recentchanges-label-newpage' => 'Y feu gwres folen nowyth gans an chanj-ma',
'recentchanges-label-minor' => 'Chanj bian yw hemma',
'recentchanges-label-bot' => 'An chanj-ma a veu gwres gans bot',
'rclistfrom' => 'Diskwedhes chanjyow nowyth ow talleth a-ban $1.',
'rcshowhideminor' => '$1 chanjyow bian',
'rcshowhidebots' => '$1 botow',
'rcshowhideliu' => '$1 devnydhoryon omgelmys',
'rcshowhideanons' => '$1 devnydhyoryon dihanow',
'rcshowhidemine' => '$1 ow chanjyow',
'rclinks' => "Diskwedhes an $1 chanj diwettha gwres y'n $2 dedh diwettha<br />$3",
'diff' => 'dyffrans',
'hist' => 'istori',
'hide' => 'Kudha',
'show' => 'Diskwedhes',
'minoreditletter' => 'B',
'newpageletter' => 'N',
'boteditletter' => 'bot',
'newsectionsummary' => '/* $1 */ radn nowyth',
'rc-enhanced-expand' => 'Diskwedhes an manylyon (res yw JavaScript)',
'rc-enhanced-hide' => 'Kudha manylyon',

# Recent changes linked
'recentchangeslinked' => 'Chanjyow kelmys',
'recentchangeslinked-feed' => 'Chanjyow kelmys',
'recentchangeslinked-toolbox' => 'Chanjyow kelmys',
'recentchangeslinked-title' => 'Chanjyow kelmys dhe "$1"',
'recentchangeslinked-summary' => "Hemm yw rol a janjyow a-dhiwedhes gwres dhe folennow yw kevrennys dhyworth folen res (po dhe eseli a glass res).
'''Tew''' yw folennow eus war agas [[Special:Watchlist|rol golyas]].",
'recentchangeslinked-page' => 'Hanow an folen:',

# Upload
'upload' => 'Ughkarga restren',
'uploadbtn' => 'Ughkarga restren',
'uploadlogpage' => 'Kovnoten ughkarga',
'filename' => 'Hanow-restren',
'filedesc' => 'Derivas kot',
'filesource' => 'Pednfenten:',
'savefile' => 'Gwitha restren',
'uploadedimage' => '"[[$1]]" ughkergys',
'watchthisupload' => 'Golya an folen-ma',

# Special:ListFiles
'imgfile' => 'restren',
'listfiles_date' => 'Dedhyas',
'listfiles_name' => 'Hanow',
'listfiles_user' => 'Devnydhyer',

# File description page
'file-anchor-link' => 'Restren',
'filehist' => 'Istori an restren',
'filehist-help' => 'Klyckyowgh war dedhyans/eur rag gweles an folen del veu nena.',
'filehist-deleteall' => 'dilea oll',
'filehist-deleteone' => 'dilea',
'filehist-current' => 'a-lemmyn',
'filehist-datetime' => 'Dedhyans/Eur',
'filehist-thumb' => 'Skeusennik',
'filehist-thumbtext' => 'Skeusennik rag an versyon a-ban $1',
'filehist-user' => 'Devnydhyer',
'filehist-dimensions' => 'Mensow',
'filehist-comment' => 'Ger',
'imagelinks' => 'Devnydh an restren',
'linkstoimage' => "Yma'n {{PLURAL:$1|folen|$1 folen}} a sew ow kevrenna dhe'n restren-ma:",
'nolinkstoimage' => "Nyns eus folen ow kevrenna dhe'n restren-ma.",
'sharedupload' => 'Yma an folen-ma ow tos dhyworth $1 ha hi a ell bos usys gans ragdresow erel.',
'uploadnewversion-linktext' => "Ughkarga versyon nowyth a'n restren-ma",

# File deletion
'filedelete' => 'Dilea $1',
'filedelete-legend' => 'Dilea an restren',
'filedelete-submit' => 'Dilea',

# MIME search
'download' => 'iskarga',

# Unwatched pages
'unwatchedpages' => 'Folednow nag eus ow pos golyes',

# List redirects
'listredirects' => 'Rol an daswedyansow',

# Unused templates
'unusedtemplates' => 'Skantlyns heb devnydh',
'unusedtemplateswlh' => 'kevrednow erel',

# Random page
'randompage' => 'Folen dre jons',

# Statistics
'statistics-pages' => 'Folednow',

'brokenredirects-edit' => 'chanjya',
'brokenredirects-delete' => 'dilea',

'withoutinterwiki' => 'Folednow heb kevrednow yeth',
'withoutinterwiki-submit' => 'Diskwedhes',

# Miscellaneous special pages
'nbytes' => '$1 {{PLURAL:$1|bayt|bayt}}',
'nmembers' => '$1 {{PLURAL:$1|esel|esel}}',
'uncategorizedpages' => 'Folednow heb klass',
'uncategorizedcategories' => 'Klassys heb klass',
'uncategorizedimages' => 'Restrednow heb klass',
'uncategorizedtemplates' => 'Skantlyns heb klass',
'unusedcategories' => 'Klassys gwag',
'unusedimages' => 'Restrednow heb devnydh',
'shortpages' => 'Folednow berr',
'longpages' => 'Folednow hir',
'protectedpages' => 'Folednow difresys',
'protectedtitles' => 'Titlys difresys',
'usercreated' => '{{GENDER:$3|Formyes}} an $1 dhe $2',
'newpages' => 'Folennow nowyth',
'newpages-username' => 'Hanow-usyer:',
'ancientpages' => 'Folednow kottha',
'move' => 'Gwaya',
'movethispage' => 'Gwaya an folen-ma',
'pager-newer-n' => '{{PLURAL:$1|1 nowyttha|$1 nowyttha}}',
'pager-older-n' => '{{PLURAL:$1|1 kottha|$1 kottha}}',

# Book sources
'booksources' => 'Pennfentynyow lyver',
'booksources-search-legend' => 'Hwilas pennfentynyow lyver',
'booksources-go' => 'Mos',

# Special:Log
'specialloguserlabel' => 'Devnydhyer:',
'speciallogtitlelabel' => 'Titel:',
'log' => 'Kovnotennow',

# Special:AllPages
'allpages' => 'Keniver folen',
'alphaindexline' => '$1 dhe $2',
'prevpage' => 'Folen gens ($1)',
'allpagesfrom' => 'Diskwedhes folednow ow talleth orth:',
'allpagesto' => 'Diskwedhes folednow ow tiwedha orth:',
'allarticles' => 'Keniver folen',
'allpagesprev' => 'Kens',
'allpagesnext' => 'Nessa',
'allpagessubmit' => 'Mos',

# Special:Categories
'categories' => 'Klassys',

# Special:DeletedContributions
'sp-deletedcontributions-contribs' => 'kevrohow',

# Special:LinkSearch
'linksearch' => 'Hwilas kevrednow a-ves',
'linksearch-ok' => 'Hwilas',
'linksearch-line' => '$1 yw kevrennys dhyworth $2',

# Special:ListUsers
'listusers-submit' => 'Diskwedhes',

# Special:Log/newusers
'newuserlogpage' => 'Kovnoten formya akontow devnydhyer',

# Special:ListGroupRights
'listgrouprights-members' => '(rol eseli)',

# E-mail user
'emailuser' => 'E-bostya an devnydhyer-ma',
'emailpage' => 'E-bostya devnydhyer',
'defemailsubject' => 'Ebost danvenys dre {{SITENAME}} gans an devnydhyer "$1"',
'emailfrom' => 'Dhyworth:',
'emailto' => 'Dhe:',
'emailmessage' => 'Messach:',
'emailsend' => 'Danvon',

# Watchlist
'watchlist' => 'Ow rol golyas',
'mywatchlist' => 'Ow rol golyas',
'watchlistfor2' => 'Rag $1 ($2)',
'watch' => 'Golyas',
'watchthispage' => 'Golyas an folen-ma',
'unwatch' => 'Diswolyas',
'watchlist-details' => 'Yma {{PLURAL:$1|$1 folen}} war agas rol golyas, marnas folennow keskows.',
'watchlist-options' => 'Etholyow an rol golyas',

# Displayed when you click the "watch" button and it is in the process of watching
'watching' => 'Ow kolyas...',
'unwatching' => 'Ow tisgolyas...',

# Delete
'deletepage' => 'Dilea an folen',
'delete-confirm' => 'Dilea "$1"',
'delete-legend' => 'Dilea',
'actioncomplete' => 'Kowlwres yw an gwrians',
'actionfailed' => 'An gwrians a fyllas',
'deletedtext' => '"$1" yw dileys.
Gwelowgh $2 rag kovadh a dhileansow a-dhiwedhes.',
'dellogpage' => 'Kovnoten dhilea',
'deletecomment' => 'Cheson:',
'deleteotherreason' => 'Cheson aral/keworansel:',
'deletereasonotherlist' => 'Cheson aral',

# Rollback
'rollbacklink' => 'restorya',

# Protect
'protectlogpage' => 'Kovnoten dhifres',
'protectedarticle' => 'a dhifresas "[[$1]]"',
'protectcomment' => 'Cheson:',
'protectexpiry' => 'Ow tiwedha:',
'protect_expiry_invalid' => 'Drog yw termyn an diwedh.',
'protect_expiry_old' => "Yma'n termyn diwedh e'n termyn eus passyes.",
'protect-level-sysop' => 'Menystroryon hepken',
'protect-summary-cascade' => 'ow froslabma',
'protect-expiring' => 'y hwra diwedha $1 (UTC)',
'restriction-type' => 'Kubmyas:',
'pagesize' => '(bayt)',

# Restrictions (nouns)
'restriction-edit' => 'Chanjya',
'restriction-move' => 'Gwaya',
'restriction-create' => 'Gwruthyl',
'restriction-upload' => 'Ughkarga',

# Undelete
'undeletelink' => 'gweles/restorya',
'undeleteviewlink' => 'gweles',
'undelete-search-submit' => 'Hwilas',
'undelete-show-file-submit' => 'Ya',

# Namespace form on various pages
'namespace' => 'Spas-hanow:',
'invert' => 'Trebuchya an dowisyans',
'blanknamespace' => '(Penn)',

# Contributions
'contributions' => 'Kevrohow an devnydhyer',
'contributions-title' => 'Kevrohow $1',
'mycontris' => 'Kevrohow',
'contribsub2' => 'Rag $1 ($2)',
'uctop' => '(gwartha)',
'month' => 'Dhyworth an mis (ha moy a-varr):',
'year' => 'Dhyworth an vledhen (ha moy a-varr):',

'sp-contributions-newbies' => 'Diskwedhes yn unnik kevrohow akontow nowyth',
'sp-contributions-blocklog' => 'kovnoten lettya',
'sp-contributions-uploads' => 'ughkargansow',
'sp-contributions-logs' => 'kovnotennow',
'sp-contributions-talk' => 'keskows',
'sp-contributions-search' => 'Hwilas kevrohow',
'sp-contributions-username' => 'Trigva IP po hanow-usyer:',
'sp-contributions-submit' => 'Hwilas',

# What links here
'whatlinkshere' => "Pandr'eus ow kevrenna omma",
'whatlinkshere-title' => 'Folennow ow kevrenna dhe "$1"',
'whatlinkshere-page' => 'Folen:',
'linkshere' => "Yma'n folennow a sew ow kevrenna dhe '''[[:$1]]''':",
'nolinkshere' => "Nyns eus folen ow kevrenna dhe '''[[:$1]]'''.",
'isredirect' => 'folen daswedyans',
'istemplate' => 'treuskludyans',
'isimage' => 'kevren an restren',
'whatlinkshere-prev' => '{{PLURAL:$1|kens|kens $1}}',
'whatlinkshere-next' => '{{PLURAL:$1|nessa|nessa $1}}',
'whatlinkshere-links' => '← kevrennow',
'whatlinkshere-hideredirs' => '$1 daswedyansow',
'whatlinkshere-hidetrans' => '$1 treuskludyans',
'whatlinkshere-hidelinks' => '$1 kevrennow',
'whatlinkshere-hideimages' => '$1 kevrennow restren',
'whatlinkshere-filters' => 'Sidhlow',

# Block/unblock
'blockip' => 'Lettya devnydhyer',
'ipadressorusername' => 'Trigva IP po hanow-usyer:',
'ipbreason' => 'Cheson:',
'ipbreasonotherlist' => 'Cheson aral',
'ipb-blocklist-contribs' => 'Kevrohow rag $1',
'ipblocklist' => 'Devnydhyoryon lettyes',
'ipblocklist-submit' => 'Hwilas',
'blocklink' => 'lettya',
'unblocklink' => 'dislettya',
'change-blocklink' => 'chanjya an lettyans',
'contribslink' => 'kevrohow',
'blocklogpage' => 'Kovnoten lettya',
'blocklogentry' => 'a lettyas [[$1]], bys dhe $2 $3',
'unblocklogentry' => 'dislettyas $1',
'block-log-flags-anononly' => 'devnydhyoryon dihanow hepken',
'block-log-flags-nocreate' => 'dialosegys yw formya akontow',
'block-log-flags-hiddenname' => 'hanow-usyer kovys',

# Move page
'move-page' => 'Gwaya $1',
'move-page-legend' => 'Gwaya folen',
'movearticle' => 'Gwaya an folen:',
'newtitle' => 'Dhe ditel nowyth:',
'move-watch' => 'Golya an folen-ma',
'movepagebtn' => 'Gwaya an folen',
'pagemovedsub' => 'An gwarnyans a sowenas',
'movepage-moved' => '\'\'\'Gwayes yw "$1" war-tu "$2"\'\'\'',
'movedto' => 'gwayes war-tu',
'movelogpage' => 'Kovnoten waya',
'movereason' => 'Cheson:',
'revertmove' => 'trebuchya',

# Export
'export' => 'Esperthi folennow',
'export-addcat' => 'Keworra',
'export-addns' => 'Keworra',

# Namespace 8 related
'allmessagesname' => 'Hanow',

# Thumbnails
'thumbnail-more' => 'Brashe',
'thumbnail_error' => 'Gwall ow formya skeusennik: $1',

# Special:Import
'import' => 'Ymperthi folednow',
'import-interwiki-submit' => 'Ymperthi',
'import-upload-filename' => 'Hanow-restren:',
'importstart' => 'Owth ymperthi folednow...',
'import-noarticle' => 'Nyns eus folen veth dhe ymperthi!',

# Tooltip help for the actions
'tooltip-pt-userpage' => 'Agas folen dhevnydhyer',
'tooltip-pt-mytalk' => 'Agas folen gows',
'tooltip-pt-preferences' => 'Agas dowisyansow',
'tooltip-pt-watchlist' => 'Rol a folennow esowgh hwi ow kolyas rag chanjyow',
'tooltip-pt-mycontris' => "Rol a'gas kevrohow",
'tooltip-pt-login' => 'Gwell via dhywgh mar tewgh hwi hag omgelmi, mes nyns yw besi',
'tooltip-pt-logout' => 'Digelmi',
'tooltip-ca-talk' => "Dadhel a-dro dhe'n folen",
'tooltip-ca-edit' => 'Hwi a yll chanjya an folen-ma. Gwrewgh usya an boton Ragweles kens gwitha mar pleg.',
'tooltip-ca-addsection' => 'Dalleth rann nowyth',
'tooltip-ca-viewsource' => 'Alhwedhys yw an folen-ma.
Hwi a yll gweles hy fennfenten.',
'tooltip-ca-history' => "Amendyansow koth a'n folen-ma",
'tooltip-ca-protect' => 'Difres an folen-ma',
'tooltip-ca-delete' => 'Dilea an folen-ma',
'tooltip-ca-move' => 'Gwaya an folen-ma',
'tooltip-ca-watch' => "Keworra an folen-ma dhe'gas rol golyas",
'tooltip-ca-unwatch' => 'Dilea an folen-ma dhyworth agas rol golyas',
'tooltip-search' => 'Hwilas yn {{SITENAME}}',
'tooltip-search-go' => 'Mos dhe folen gans an keth hanow-ma, mars eus',
'tooltip-search-fulltext' => "Hwilas an text-ma y'n folennow",
'tooltip-p-logo' => "Mos dhe'n folen dre",
'tooltip-n-mainpage' => "Mos dhe'n folen dre",
'tooltip-n-mainpage-description' => "Mos dhe'n folen dre",
'tooltip-n-portal' => "A-dro dhe'n ragdres, an peth a yllowgh hwi gwul, ple dhe gavos taklow",
'tooltip-n-currentevents' => 'Kavos kedhlow a-dro dhe dharvosow a-lemmyn',
'tooltip-n-recentchanges' => "Rol a janjyow a-dhiwedhes y'n wiki",
'tooltip-n-randompage' => 'Karga folen dre jons',
'tooltip-n-help' => 'Gweres',
'tooltip-t-whatlinkshere' => 'Rol a bub folen wiki ow kevrenna dhe omma',
'tooltip-t-recentchangeslinked' => 'Chanjyow a-dhiwedhes yn folennow eus kevrennys dhyworth an folen-ma',
'tooltip-feed-rss' => 'Feed RSS rag an folen-ma',
'tooltip-feed-atom' => 'Feed Atom rag an folen-ma',
'tooltip-t-contributions' => 'Gweles rol a gevrohow an devnydhyer-ma',
'tooltip-t-emailuser' => "Danvon e-bost dhe'n devnydhyer-ma",
'tooltip-t-upload' => 'Ughkarga restrennow',
'tooltip-t-specialpages' => 'Rol a geniver folen arbennek',
'tooltip-t-print' => "Versyon pryntyadow a'n folen-ma",
'tooltip-t-permalink' => "Kevren fast dhe'n amendyans-ma a'n folen",
'tooltip-ca-nstab-main' => 'Gweles an folen',
'tooltip-ca-nstab-user' => 'Gweles an folen devnydhyer',
'tooltip-ca-nstab-special' => 'Folen arbennek yw hemma; ny yllowgh hwi chanjya an folen hy honan.',
'tooltip-ca-nstab-project' => 'Gweles folen an wiki',
'tooltip-ca-nstab-image' => 'Gweles folen an restren',
'tooltip-ca-nstab-template' => 'Gweles an skantlyn',
'tooltip-ca-nstab-category' => 'Gweles folen an klass',
'tooltip-minoredit' => 'Merkya hemma avel chanj bian',
'tooltip-save' => 'Gwitha agas chanjyow',
'tooltip-preview' => 'Ragweles agas chanjyow; gwrewgh usya hemma kens gwitha mar pleg!',
'tooltip-diff' => "Diskwedhes an chanjyow eus gwres genowgh dhe'n text",
'tooltip-compareselectedversions' => "Gweles an dyffransow ynter an dhew janjyow dowisyes a'n folen-ma",
'tooltip-watch' => "Keworra an folen-ma dhe'gas rol golyas",
'tooltip-rollback' => '"Restorya" a wra trebuchya chanjyow gwres dhe\'n folen-ma gans an diwettha devnydhyer yn unn glyck',
'tooltip-undo' => '"Diswul" a wra trebuchya an chanj-ma hag egeri an furvlen janjya y\'n modh ragweles. Y hyllir keworra acheson y\'n derivas kot.',
'tooltip-summary' => 'Entrowgh derivas kot',

# Attribution
'siteuser' => 'devnydhyer {{SITENAME}} $1',
'lastmodifiedatby' => 'An folen-ma a veu kens chanjys dhe $2, $1 gans $3.',
'siteusers' => '{{PLURAL:$2|devnydhyer|devnydhyoryon}} {{SITENAME}} $1',

# Browsing diffs
'previousdiff' => '← Chanj kottha',
'nextdiff' => 'Chanj nowyttha →',

# Media information
'file-info-size' => '$1 × $2 pixel, mens an restren: $3, sort MIME: $4',
'file-nohires' => 'Nyns eus klerder uhella kavadow.',
'svg-long-desc' => 'Restren SVG, $1 × $2 pixel yn hanow, mens an restren: $3',
'show-big-image' => 'Klerder leun',

# Special:NewFiles
'ilsubmit' => 'Hwilas',

# Metadata
'metadata' => 'Metadata',
'metadata-help' => "Yma dhe'n restren-ma kedhlow keworansel, dres lycklod keworrys dhyworth an kamera besyel po an skanyer usys rag hy gwruthyl po hy besya. Mars yw chanjys an restren dhyworth hy studh gwredhek, possybyl yw na veu nebes manylyon nowedhys.",
'metadata-expand' => 'Diskwedhes manylyon ystydnys',
'metadata-collapse' => 'Kudha manylyon ystydnys',

# EXIF tags
'exif-imagewidth' => 'Les',
'exif-imagelength' => 'Uhelder',
'exif-artist' => 'Awtour',

'exif-meteringmode-255' => 'Aral',

'exif-contrast-1' => 'Medhel',
'exif-contrast-2' => 'Kales',

# External editor support
'edit-externally' => 'Chanjya an restren-ma dre dowlen a-ves',

# 'all' in various places, this might be different for inflected languages
'watchlistall2' => 'oll',
'namespacesall' => 'oll',
'monthsall' => 'oll',

# Multipage image navigation
'imgmultipageprev' => '← folen kens',
'imgmultipagenext' => 'folen nessa →',
'imgmultigo' => 'Ke!',

# Table pager
'table_pager_limit_submit' => 'Mos',

# Auto-summaries
'autoredircomment' => 'Daswedyas an folen war-tu [[$1]]',
'autosumm-new' => "Folen formyes gans: '$1'",

# Watchlist editing tools
'watchlisttools-view' => 'Gweles chanjyow longus',
'watchlisttools-edit' => 'Gweles ha chanjya an rol golyas',
'watchlisttools-raw' => 'Chanjya restren an rol golyas',

# Special:Version
'version' => 'Versyon',
'version-other' => 'Aral',
'version-version' => '(Versyon $1)',

# Special:FilePath
'filepath-page' => 'Restren:',

# Special:FileDuplicateSearch
'fileduplicatesearch-filename' => 'Hanow-restren:',
'fileduplicatesearch-submit' => 'Hwilas',

# Special:SpecialPages
'specialpages' => 'Folennow arbennek',

# Special:Tags
'tags-edit' => 'chanjya',

# Search suggestions
'searchsuggest-search' => 'Hwilas',
'searchsuggest-containing' => 'ow senji...',

);
