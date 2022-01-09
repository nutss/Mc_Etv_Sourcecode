<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");


require_once("include/dbcommon.php");
require_once('classes/menupage.php');


Security::processLogoutRequest();
if( !isLogged() || Security::isGuest() ) 
{
	Security::tryRelogin();
}

if( !isLogged() )
{
	HeaderRedirect("login");
	return;
}


if (($_SESSION["MyURL"] == "") || (!Security::isGuest())) {
	Security::saveRedirectURL();
}


require_once('include/xtempl.php');
require_once(getabspath("classes/cipherer.php"));

include_once(getabspath("include/playlistsub_events.php"));
$tableEvents["playlistSub"] = new eventclass_playlistsub;
include_once(getabspath("include/mediainfo_events.php"));
$tableEvents["mediaInfo"] = new eventclass_mediainfo;
include_once(getabspath("include/fileadmin_events.php"));
$tableEvents["FileAdmin"] = new eventclass_fileadmin;
include_once(getabspath("include/censorpass_events.php"));
$tableEvents["censorPass"] = new eventclass_censorpass;
include_once(getabspath("include/censorreject_events.php"));
$tableEvents["censorReject"] = new eventclass_censorreject;
include_once(getabspath("include/censoruncensor_events.php"));
$tableEvents["censorUncensor"] = new eventclass_censoruncensor;
include_once(getabspath("include/ingestinfo_events.php"));
$tableEvents["IngestInfo"] = new eventclass_ingestinfo;
include_once(getabspath("include/downloadinfo_events.php"));
$tableEvents["downloadInfo"] = new eventclass_downloadinfo;
include_once(getabspath("include/deleteinfo_events.php"));
$tableEvents["deleteInfo"] = new eventclass_deleteinfo;

$xt = new Xtempl();

//array of params for classes
$params = array();
$params["id"] = postvalue_number("id"); 
$params["xt"] = &$xt;
$params["tName"] = GLOBAL_PAGES;
$params["pageType"] = PAGE_MENU;
$params["isGroupSecurity"] = $isGroupSecurity;
$params["needSearchClauseObj"] = false;
$params["pageName"] = postvalue("page"); 

$pageObject = new MenuPage($params);
$pageObject->init();

$pageObject->process();
?>