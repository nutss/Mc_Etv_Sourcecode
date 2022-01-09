<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT");

require_once("include/admin_rights_variables.php");

if( !Security::processAdminPageSecurity( false ) )
	return;


$tables = array();
$pageMask = array();
$table = "playlistMain";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("playlistmain", " " . GetTableCaption("playlistMain"));
$table = "playlistSub";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("playlistsub", " " . GetTableCaption("playlistSub"));
$table = "mediaInfo";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("mediainfo", " " . GetTableCaption("mediaInfo"));
$table = "staffUsers";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("staffusers", " " . GetTableCaption("staffUsers"));
$table = "FileAdmin";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("fileadmin", " " . GetTableCaption("FileAdmin"));
$table = "censorPass";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("censorpass", " " . GetTableCaption("censorPass"));
$table = "censorReject";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("censorreject", " " . GetTableCaption("censorReject"));
$table = "teacher";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("teacher", " " . GetTableCaption("teacher"));
$table = "subject";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("subject", " " . GetTableCaption("subject"));
$table = "educationLevel";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("educationlevel", " " . GetTableCaption("educationLevel"));
$table = "mc_audit";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("mc_audit", " " . GetTableCaption("mc_audit"));
$table = "MediaInfo Report";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("mediainfo_report", " " . GetTableCaption("MediaInfo_Report"));
$table = "Censor Report";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("censor_report", " " . GetTableCaption("Censor_Report"));
$table = "censorUncensor";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("censoruncensor", " " . GetTableCaption("censorUncensor"));
$table = "playlist Report";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("playlist_report", " " . GetTableCaption("playlist_Report"));
$table = "IngestInfo";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("ingestinfo", " " . GetTableCaption("IngestInfo"));
$table = "downloadInfo";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("downloadinfo", " " . GetTableCaption("downloadInfo"));
$table = "deleteInfo";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("deleteinfo", " " . GetTableCaption("deleteInfo"));

require_once('include/xtempl.php');
require_once('classes/listpage.php');
require_once('classes/rightspage.php');

$xt = new Xtempl();

$options = array();
$options["pageType"] = "admin_rights_list";
$options["pageTable"] = GLOBAL_PAGES;
$options["id"] = postvalue_number("id") ? postvalue_number("id") : 1;
$options["mode"] = RIGHTS_PAGE;
$options['xt'] = &$xt;
$options["requestGoto"] = postvalue_number("goto");


$options["tables"] = $tables;
$options["pageMasks"] = $pageMask;

$pageObject = ListPage::createListPage($strTableName, $options);

if( postvalue("a") == "saveRights" )
{
	//	CSRF protection
	if( !isPostRequest() )
		return;
	$modifiedRights = my_json_decode(postvalue('data'));
	$pageObject->saveRights( $modifiedRights );
	return;
}


// add buttons if exist

// prepare code for build page
$pageObject->prepareForBuildPage();

// show page depends of mode
$pageObject->showPage();



?>
