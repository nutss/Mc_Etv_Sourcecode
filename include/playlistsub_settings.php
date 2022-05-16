<?php
$tdataplaylistsub = array();
$tdataplaylistsub[".searchableFields"] = array();
$tdataplaylistsub[".ShortName"] = "playlistsub";
$tdataplaylistsub[".OwnerID"] = "";
$tdataplaylistsub[".OriginalTable"] = "playlistSub";


$tdataplaylistsub[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataplaylistsub[".originalPagesByType"] = $tdataplaylistsub[".pagesByType"];
$tdataplaylistsub[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataplaylistsub[".originalPages"] = $tdataplaylistsub[".pages"];
$tdataplaylistsub[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataplaylistsub[".originalDefaultPages"] = $tdataplaylistsub[".defaultPages"];

//	field labels
$fieldLabelsplaylistsub = array();
$fieldToolTipsplaylistsub = array();
$pageTitlesplaylistsub = array();
$placeHoldersplaylistsub = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsplaylistsub["English"] = array();
	$fieldToolTipsplaylistsub["English"] = array();
	$placeHoldersplaylistsub["English"] = array();
	$pageTitlesplaylistsub["English"] = array();
	$fieldLabelsplaylistsub["English"]["id"] = "ID";
	$fieldToolTipsplaylistsub["English"]["id"] = "";
	$placeHoldersplaylistsub["English"]["id"] = "";
	$fieldLabelsplaylistsub["English"]["mediaInfoID"] = "Media Info ID";
	$fieldToolTipsplaylistsub["English"]["mediaInfoID"] = "";
	$placeHoldersplaylistsub["English"]["mediaInfoID"] = "";
	$fieldLabelsplaylistsub["English"]["fileNo"] = "File No";
	$fieldToolTipsplaylistsub["English"]["fileNo"] = "";
	$placeHoldersplaylistsub["English"]["fileNo"] = "";
	$fieldLabelsplaylistsub["English"]["filedate"] = "Filedate";
	$fieldToolTipsplaylistsub["English"]["filedate"] = "";
	$placeHoldersplaylistsub["English"]["filedate"] = "";
	$fieldLabelsplaylistsub["English"]["fileName"] = "File Name";
	$fieldToolTipsplaylistsub["English"]["fileName"] = "";
	$placeHoldersplaylistsub["English"]["fileName"] = "";
	$fieldLabelsplaylistsub["English"]["fileType"] = "Type";
	$fieldToolTipsplaylistsub["English"]["fileType"] = "";
	$placeHoldersplaylistsub["English"]["fileType"] = "";
	$fieldLabelsplaylistsub["English"]["fileDuration"] = "File Duration";
	$fieldToolTipsplaylistsub["English"]["fileDuration"] = "";
	$placeHoldersplaylistsub["English"]["fileDuration"] = "";
	$fieldLabelsplaylistsub["English"]["fileSubject"] = "Subject";
	$fieldToolTipsplaylistsub["English"]["fileSubject"] = "";
	$placeHoldersplaylistsub["English"]["fileSubject"] = "";
	$fieldLabelsplaylistsub["English"]["fileTitle"] = "Title";
	$fieldToolTipsplaylistsub["English"]["fileTitle"] = "";
	$placeHoldersplaylistsub["English"]["fileTitle"] = "";
	$fieldLabelsplaylistsub["English"]["fileClassLevel"] = "Class Level";
	$fieldToolTipsplaylistsub["English"]["fileClassLevel"] = "";
	$placeHoldersplaylistsub["English"]["fileClassLevel"] = "";
	$fieldLabelsplaylistsub["English"]["fileTeacherName"] = "Teacher Name";
	$fieldToolTipsplaylistsub["English"]["fileTeacherName"] = "";
	$placeHoldersplaylistsub["English"]["fileTeacherName"] = "";
	$fieldLabelsplaylistsub["English"]["fileTeacherInfo"] = "Teacher Info";
	$fieldToolTipsplaylistsub["English"]["fileTeacherInfo"] = "";
	$placeHoldersplaylistsub["English"]["fileTeacherInfo"] = "";
	$fieldLabelsplaylistsub["English"]["fileRaw"] = "File Raw";
	$fieldToolTipsplaylistsub["English"]["fileRaw"] = "";
	$placeHoldersplaylistsub["English"]["fileRaw"] = "";
	$fieldLabelsplaylistsub["English"]["fileMD5"] = "Finger Print (MD5)";
	$fieldToolTipsplaylistsub["English"]["fileMD5"] = "";
	$placeHoldersplaylistsub["English"]["fileMD5"] = "";
	$fieldLabelsplaylistsub["English"]["censorApproveTime"] = "Censor Approve Time";
	$fieldToolTipsplaylistsub["English"]["censorApproveTime"] = "";
	$placeHoldersplaylistsub["English"]["censorApproveTime"] = "";
	$fieldLabelsplaylistsub["English"]["censorUsername"] = "Censor Username";
	$fieldToolTipsplaylistsub["English"]["censorUsername"] = "";
	$placeHoldersplaylistsub["English"]["censorUsername"] = "";
	$fieldLabelsplaylistsub["English"]["censoReson"] = "Censo Reson";
	$fieldToolTipsplaylistsub["English"]["censoReson"] = "";
	$placeHoldersplaylistsub["English"]["censoReson"] = "";
	$fieldLabelsplaylistsub["English"]["censorStatus"] = "Censor Status";
	$fieldToolTipsplaylistsub["English"]["censorStatus"] = "";
	$placeHoldersplaylistsub["English"]["censorStatus"] = "";
	$fieldLabelsplaylistsub["English"]["fileStatus"] = "File Status";
	$fieldToolTipsplaylistsub["English"]["fileStatus"] = "";
	$placeHoldersplaylistsub["English"]["fileStatus"] = "";
	$fieldLabelsplaylistsub["English"]["filePath"] = "File Path";
	$fieldToolTipsplaylistsub["English"]["filePath"] = "";
	$placeHoldersplaylistsub["English"]["filePath"] = "";
	$fieldLabelsplaylistsub["English"]["entryUserName"] = "Ownwer";
	$fieldToolTipsplaylistsub["English"]["entryUserName"] = "";
	$placeHoldersplaylistsub["English"]["entryUserName"] = "";
	$fieldLabelsplaylistsub["English"]["entryTime"] = "Entry Time";
	$fieldToolTipsplaylistsub["English"]["entryTime"] = "";
	$placeHoldersplaylistsub["English"]["entryTime"] = "";
	$fieldLabelsplaylistsub["English"]["playlistID"] = "Playlist ID";
	$fieldToolTipsplaylistsub["English"]["playlistID"] = "";
	$placeHoldersplaylistsub["English"]["playlistID"] = "";
	if (count($fieldToolTipsplaylistsub["English"]))
		$tdataplaylistsub[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelsplaylistsub["Thai"] = array();
	$fieldToolTipsplaylistsub["Thai"] = array();
	$placeHoldersplaylistsub["Thai"] = array();
	$pageTitlesplaylistsub["Thai"] = array();
	$fieldLabelsplaylistsub["Thai"]["id"] = "ID";
	$fieldToolTipsplaylistsub["Thai"]["id"] = "";
	$placeHoldersplaylistsub["Thai"]["id"] = "";
	$fieldLabelsplaylistsub["Thai"]["mediaInfoID"] = "ID (หมายเลขไฟล์)";
	$fieldToolTipsplaylistsub["Thai"]["mediaInfoID"] = "";
	$placeHoldersplaylistsub["Thai"]["mediaInfoID"] = "";
	$fieldLabelsplaylistsub["Thai"]["fileNo"] = "ID (หมายเลขไฟล์)";
	$fieldToolTipsplaylistsub["Thai"]["fileNo"] = "";
	$placeHoldersplaylistsub["Thai"]["fileNo"] = "";
	$fieldLabelsplaylistsub["Thai"]["filedate"] = "วันที่ไฟล์";
	$fieldToolTipsplaylistsub["Thai"]["filedate"] = "";
	$placeHoldersplaylistsub["Thai"]["filedate"] = "";
	$fieldLabelsplaylistsub["Thai"]["fileName"] = "ชื่อไพล์";
	$fieldToolTipsplaylistsub["Thai"]["fileName"] = "";
	$placeHoldersplaylistsub["Thai"]["fileName"] = "";
	$fieldLabelsplaylistsub["Thai"]["fileType"] = "ประเภทไฟล์";
	$fieldToolTipsplaylistsub["Thai"]["fileType"] = "";
	$placeHoldersplaylistsub["Thai"]["fileType"] = "";
	$fieldLabelsplaylistsub["Thai"]["fileDuration"] = "DURATION";
	$fieldToolTipsplaylistsub["Thai"]["fileDuration"] = "";
	$placeHoldersplaylistsub["Thai"]["fileDuration"] = "";
	$fieldLabelsplaylistsub["Thai"]["fileSubject"] = "ชื่อรายการ";
	$fieldToolTipsplaylistsub["Thai"]["fileSubject"] = "";
	$placeHoldersplaylistsub["Thai"]["fileSubject"] = "";
	$fieldLabelsplaylistsub["Thai"]["fileTitle"] = "ประเภทรายการ";
	$fieldToolTipsplaylistsub["Thai"]["fileTitle"] = "";
	$placeHoldersplaylistsub["Thai"]["fileTitle"] = "";
	$fieldLabelsplaylistsub["Thai"]["fileClassLevel"] = "อัธยาศัย/หลักสูตร";
	$fieldToolTipsplaylistsub["Thai"]["fileClassLevel"] = "";
	$placeHoldersplaylistsub["Thai"]["fileClassLevel"] = "";
	$fieldLabelsplaylistsub["Thai"]["fileTeacherName"] = "วิทยากร";
	$fieldToolTipsplaylistsub["Thai"]["fileTeacherName"] = "";
	$placeHoldersplaylistsub["Thai"]["fileTeacherName"] = "";
	$fieldLabelsplaylistsub["Thai"]["fileTeacherInfo"] = "รายละเอียดวิทยากร";
	$fieldToolTipsplaylistsub["Thai"]["fileTeacherInfo"] = "";
	$placeHoldersplaylistsub["Thai"]["fileTeacherInfo"] = "";
	$fieldLabelsplaylistsub["Thai"]["fileRaw"] = "ไฟล์";
	$fieldToolTipsplaylistsub["Thai"]["fileRaw"] = "";
	$placeHoldersplaylistsub["Thai"]["fileRaw"] = "";
	$fieldLabelsplaylistsub["Thai"]["fileMD5"] = "Finger Print (MD5)";
	$fieldToolTipsplaylistsub["Thai"]["fileMD5"] = "";
	$placeHoldersplaylistsub["Thai"]["fileMD5"] = "";
	$fieldLabelsplaylistsub["Thai"]["censorApproveTime"] = "วันที่/เวลาแก้ไขอนุมัติเซ็นเซอร์";
	$fieldToolTipsplaylistsub["Thai"]["censorApproveTime"] = "";
	$placeHoldersplaylistsub["Thai"]["censorApproveTime"] = "";
	$fieldLabelsplaylistsub["Thai"]["censorUsername"] = "ผู้อนุมัติเซ็นเซอร์";
	$fieldToolTipsplaylistsub["Thai"]["censorUsername"] = "";
	$placeHoldersplaylistsub["Thai"]["censorUsername"] = "";
	$fieldLabelsplaylistsub["Thai"]["censoReson"] = "เหตุผลเซ็นเซอร์";
	$fieldToolTipsplaylistsub["Thai"]["censoReson"] = "";
	$placeHoldersplaylistsub["Thai"]["censoReson"] = "";
	$fieldLabelsplaylistsub["Thai"]["censorStatus"] = "CODE";
	$fieldToolTipsplaylistsub["Thai"]["censorStatus"] = "";
	$placeHoldersplaylistsub["Thai"]["censorStatus"] = "";
	$fieldLabelsplaylistsub["Thai"]["fileStatus"] = "สถานะไฟล์";
	$fieldToolTipsplaylistsub["Thai"]["fileStatus"] = "";
	$placeHoldersplaylistsub["Thai"]["fileStatus"] = "";
	$fieldLabelsplaylistsub["Thai"]["filePath"] = "ที่อยู่ไฟล์";
	$fieldToolTipsplaylistsub["Thai"]["filePath"] = "";
	$placeHoldersplaylistsub["Thai"]["filePath"] = "";
	$fieldLabelsplaylistsub["Thai"]["entryUserName"] = "ผู้บันทึกรายการ";
	$fieldToolTipsplaylistsub["Thai"]["entryUserName"] = "";
	$placeHoldersplaylistsub["Thai"]["entryUserName"] = "";
	$fieldLabelsplaylistsub["Thai"]["entryTime"] = "วันที่/เวลาบันทึกรายการ";
	$fieldToolTipsplaylistsub["Thai"]["entryTime"] = "";
	$placeHoldersplaylistsub["Thai"]["entryTime"] = "";
	$fieldLabelsplaylistsub["Thai"]["playlistID"] = "Playlist ID";
	$fieldToolTipsplaylistsub["Thai"]["playlistID"] = "";
	$placeHoldersplaylistsub["Thai"]["playlistID"] = "";
	if (count($fieldToolTipsplaylistsub["Thai"]))
		$tdataplaylistsub[".isUseToolTips"] = true;
}


	$tdataplaylistsub[".NCSearch"] = true;



$tdataplaylistsub[".shortTableName"] = "playlistsub";
$tdataplaylistsub[".nSecOptions"] = 0;

$tdataplaylistsub[".mainTableOwnerID"] = "";
$tdataplaylistsub[".entityType"] = 0;
$tdataplaylistsub[".connId"] = "mc_at_192_168_1_111";


$tdataplaylistsub[".strOriginalTableName"] = "playlistSub";

	



$tdataplaylistsub[".showAddInPopup"] = false;

$tdataplaylistsub[".showEditInPopup"] = false;

$tdataplaylistsub[".showViewInPopup"] = false;

$tdataplaylistsub[".listAjax"] = false;
//	temporary
//$tdataplaylistsub[".listAjax"] = false;

	$tdataplaylistsub[".audit"] = true;

	$tdataplaylistsub[".locking"] = false;


$pages = $tdataplaylistsub[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataplaylistsub[".edit"] = true;
	$tdataplaylistsub[".afterEditAction"] = 1;
	$tdataplaylistsub[".closePopupAfterEdit"] = 1;
	$tdataplaylistsub[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataplaylistsub[".add"] = true;
$tdataplaylistsub[".afterAddAction"] = 1;
$tdataplaylistsub[".closePopupAfterAdd"] = 1;
$tdataplaylistsub[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataplaylistsub[".list"] = true;
}



$tdataplaylistsub[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataplaylistsub[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataplaylistsub[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataplaylistsub[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataplaylistsub[".printFriendly"] = true;
}



$tdataplaylistsub[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataplaylistsub[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataplaylistsub[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataplaylistsub[".isUseAjaxSuggest"] = true;

$tdataplaylistsub[".rowHighlite"] = true;



												

$tdataplaylistsub[".ajaxCodeSnippetAdded"] = false;

$tdataplaylistsub[".buttonsAdded"] = false;

$tdataplaylistsub[".addPageEvents"] = false;

// use timepicker for search panel
$tdataplaylistsub[".isUseTimeForSearch"] = false;


$tdataplaylistsub[".badgeColor"] = "b22222";


$tdataplaylistsub[".allSearchFields"] = array();
$tdataplaylistsub[".filterFields"] = array();
$tdataplaylistsub[".requiredSearchFields"] = array();

$tdataplaylistsub[".googleLikeFields"] = array();
$tdataplaylistsub[".googleLikeFields"][] = "id";
$tdataplaylistsub[".googleLikeFields"][] = "mediaInfoID";
$tdataplaylistsub[".googleLikeFields"][] = "playlistID";
$tdataplaylistsub[".googleLikeFields"][] = "fileNo";
$tdataplaylistsub[".googleLikeFields"][] = "filedate";
$tdataplaylistsub[".googleLikeFields"][] = "fileName";
$tdataplaylistsub[".googleLikeFields"][] = "fileType";
$tdataplaylistsub[".googleLikeFields"][] = "fileDuration";
$tdataplaylistsub[".googleLikeFields"][] = "fileSubject";
$tdataplaylistsub[".googleLikeFields"][] = "fileTitle";
$tdataplaylistsub[".googleLikeFields"][] = "fileClassLevel";
$tdataplaylistsub[".googleLikeFields"][] = "fileTeacherName";
$tdataplaylistsub[".googleLikeFields"][] = "fileTeacherInfo";
$tdataplaylistsub[".googleLikeFields"][] = "fileRaw";
$tdataplaylistsub[".googleLikeFields"][] = "fileMD5";
$tdataplaylistsub[".googleLikeFields"][] = "censorApproveTime";
$tdataplaylistsub[".googleLikeFields"][] = "censorUsername";
$tdataplaylistsub[".googleLikeFields"][] = "censoReson";
$tdataplaylistsub[".googleLikeFields"][] = "censorStatus";
$tdataplaylistsub[".googleLikeFields"][] = "fileStatus";
$tdataplaylistsub[".googleLikeFields"][] = "filePath";
$tdataplaylistsub[".googleLikeFields"][] = "entryUserName";
$tdataplaylistsub[".googleLikeFields"][] = "entryTime";



$tdataplaylistsub[".tableType"] = "list";

$tdataplaylistsub[".printerPageOrientation"] = 0;
$tdataplaylistsub[".nPrinterPageScale"] = 100;

$tdataplaylistsub[".nPrinterSplitRecords"] = 40;

$tdataplaylistsub[".geocodingEnabled"] = false;










$tdataplaylistsub[".pageSize"] = 20;

$tdataplaylistsub[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataplaylistsub[".strOrderBy"] = $tstrOrderBy;

$tdataplaylistsub[".orderindexes"] = array();


$tdataplaylistsub[".sqlHead"] = "SELECT playlistSub.id, playlistSub.mediaInfoID, playlistSub.playlistID, mediaInfo.fileNo, mediaInfo.filedate, mediaInfo.fileName, mediaInfo.fileType, mediaInfo.fileDuration, mediaInfo.fileSubject, mediaInfo.fileTitle, mediaInfo.fileClassLevel, mediaInfo.fileTeacherName, mediaInfo.fileTeacherInfo, mediaInfo.fileRaw, mediaInfo.fileMD5, mediaInfo.censorApproveTime, mediaInfo.censorUsername, mediaInfo.censoReson, mediaInfo.censorStatus, mediaInfo.fileStatus, mediaInfo.filePath, mediaInfo.entryUserName, mediaInfo.entryTime";
$tdataplaylistsub[".sqlFrom"] = "FROM playlistSub INNER JOIN mediaInfo ON playlistSub.mediaInfoID = mediaInfo.id";
$tdataplaylistsub[".sqlWhereExpr"] = "";
$tdataplaylistsub[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataplaylistsub[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataplaylistsub[".arrGroupsPerPage"] = $arrGPP;

$tdataplaylistsub[".highlightSearchResults"] = true;

$tableKeysplaylistsub = array();
$tableKeysplaylistsub[] = "id";
$tdataplaylistsub[".Keys"] = $tableKeysplaylistsub;


$tdataplaylistsub[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "playlistSub";
	$fdata["Label"] = GetFieldLabel("playlistSub","id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "playlistSub.id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataplaylistsub["id"] = $fdata;
		$tdataplaylistsub[".searchableFields"][] = "id";
//	mediaInfoID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "mediaInfoID";
	$fdata["GoodName"] = "mediaInfoID";
	$fdata["ownerTable"] = "playlistSub";
	$fdata["Label"] = GetFieldLabel("playlistSub","mediaInfoID");
	$fdata["FieldType"] = 13;


	
	
			

		$fdata["strField"] = "mediaInfoID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "playlistSub.mediaInfoID";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "mediaInfo";
		$edata["listPageId"] = "MediaInfo_popup";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "fileNo";

				$edata["LookupWhere"] = "(censorStatus = \"PASS\") OR (censorStatus = \"PLAYLIST\")";


	
	$edata["LookupOrderBy"] = "fileNo";

	
	
	
	

	
	
	
// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataplaylistsub["mediaInfoID"] = $fdata;
		$tdataplaylistsub[".searchableFields"][] = "mediaInfoID";
//	playlistID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "playlistID";
	$fdata["GoodName"] = "playlistID";
	$fdata["ownerTable"] = "playlistSub";
	$fdata["Label"] = GetFieldLabel("playlistSub","playlistID");
	$fdata["FieldType"] = 13;


	
	
			

		$fdata["strField"] = "playlistID";

		$fdata["sourceSingle"] = "playlistID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "playlistSub.playlistID";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataplaylistsub["playlistID"] = $fdata;
		$tdataplaylistsub[".searchableFields"][] = "playlistID";
//	fileNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "fileNo";
	$fdata["GoodName"] = "fileNo";
	$fdata["ownerTable"] = "mediaInfo";
	$fdata["Label"] = GetFieldLabel("playlistSub","fileNo");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "fileNo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mediaInfo.fileNo";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=11";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataplaylistsub["fileNo"] = $fdata;
		$tdataplaylistsub[".searchableFields"][] = "fileNo";
//	filedate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "filedate";
	$fdata["GoodName"] = "filedate";
	$fdata["ownerTable"] = "mediaInfo";
	$fdata["Label"] = GetFieldLabel("playlistSub","filedate");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "filedate";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mediaInfo.filedate";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 100;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataplaylistsub["filedate"] = $fdata;
		$tdataplaylistsub[".searchableFields"][] = "filedate";
//	fileName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "fileName";
	$fdata["GoodName"] = "fileName";
	$fdata["ownerTable"] = "mediaInfo";
	$fdata["Label"] = GetFieldLabel("playlistSub","fileName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "fileName";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mediaInfo.fileName";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataplaylistsub["fileName"] = $fdata;
		$tdataplaylistsub[".searchableFields"][] = "fileName";
//	fileType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "fileType";
	$fdata["GoodName"] = "fileType";
	$fdata["ownerTable"] = "mediaInfo";
	$fdata["Label"] = GetFieldLabel("playlistSub","fileType");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "fileType";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mediaInfo.fileType";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataplaylistsub["fileType"] = $fdata;
		$tdataplaylistsub[".searchableFields"][] = "fileType";
//	fileDuration
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "fileDuration";
	$fdata["GoodName"] = "fileDuration";
	$fdata["ownerTable"] = "mediaInfo";
	$fdata["Label"] = GetFieldLabel("playlistSub","fileDuration");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "fileDuration";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mediaInfo.fileDuration";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Time");

	
	
	
	
	
	
	
	
	
	
	
		
		$vdata["timeFormatData"] = array(
		"showSeconds" => false,
		"showDaysInTotals" => false,
		"timeFormat" => 0
	);
	$vdata["timeFormatData"]["showSeconds"] = true;
	$vdata["timeFormatData"]["showDaysInTotals"] = true;

		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataplaylistsub["fileDuration"] = $fdata;
		$tdataplaylistsub[".searchableFields"][] = "fileDuration";
//	fileSubject
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "fileSubject";
	$fdata["GoodName"] = "fileSubject";
	$fdata["ownerTable"] = "mediaInfo";
	$fdata["Label"] = GetFieldLabel("playlistSub","fileSubject");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "fileSubject";

		$fdata["sourceSingle"] = "fileSubject";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mediaInfo.fileSubject";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "subject";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "subjectName";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "subjectName";

	

	
	$edata["LookupOrderBy"] = "subjectName";

		$edata["LookupDesc"] = true;

	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataplaylistsub["fileSubject"] = $fdata;
		$tdataplaylistsub[".searchableFields"][] = "fileSubject";
//	fileTitle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "fileTitle";
	$fdata["GoodName"] = "fileTitle";
	$fdata["ownerTable"] = "mediaInfo";
	$fdata["Label"] = GetFieldLabel("playlistSub","fileTitle");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "fileTitle";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mediaInfo.fileTitle";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataplaylistsub["fileTitle"] = $fdata;
		$tdataplaylistsub[".searchableFields"][] = "fileTitle";
//	fileClassLevel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "fileClassLevel";
	$fdata["GoodName"] = "fileClassLevel";
	$fdata["ownerTable"] = "mediaInfo";
	$fdata["Label"] = GetFieldLabel("playlistSub","fileClassLevel");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "fileClassLevel";

		$fdata["sourceSingle"] = "fileClassLevel";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mediaInfo.fileClassLevel";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "educationLevel";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "levelName";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "levelName";

	

	
	$edata["LookupOrderBy"] = "levelName";

		$edata["LookupDesc"] = true;

	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataplaylistsub["fileClassLevel"] = $fdata;
		$tdataplaylistsub[".searchableFields"][] = "fileClassLevel";
//	fileTeacherName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "fileTeacherName";
	$fdata["GoodName"] = "fileTeacherName";
	$fdata["ownerTable"] = "mediaInfo";
	$fdata["Label"] = GetFieldLabel("playlistSub","fileTeacherName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "fileTeacherName";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mediaInfo.fileTeacherName";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataplaylistsub["fileTeacherName"] = $fdata;
		$tdataplaylistsub[".searchableFields"][] = "fileTeacherName";
//	fileTeacherInfo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "fileTeacherInfo";
	$fdata["GoodName"] = "fileTeacherInfo";
	$fdata["ownerTable"] = "mediaInfo";
	$fdata["Label"] = GetFieldLabel("playlistSub","fileTeacherInfo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "fileTeacherInfo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mediaInfo.fileTeacherInfo";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataplaylistsub["fileTeacherInfo"] = $fdata;
		$tdataplaylistsub[".searchableFields"][] = "fileTeacherInfo";
//	fileRaw
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "fileRaw";
	$fdata["GoodName"] = "fileRaw";
	$fdata["ownerTable"] = "mediaInfo";
	$fdata["Label"] = GetFieldLabel("playlistSub","fileRaw");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "fileRaw";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mediaInfo.fileRaw";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Document Download");

	
	
	
						$vdata["ShowFileSize"] = true;
			$vdata["ShowIcon"] = true;
			$vdata["ShowCustomExpr"] = true;

	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataplaylistsub["fileRaw"] = $fdata;
		$tdataplaylistsub[".searchableFields"][] = "fileRaw";
//	fileMD5
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "fileMD5";
	$fdata["GoodName"] = "fileMD5";
	$fdata["ownerTable"] = "mediaInfo";
	$fdata["Label"] = GetFieldLabel("playlistSub","fileMD5");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "fileMD5";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mediaInfo.fileMD5";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataplaylistsub["fileMD5"] = $fdata;
		$tdataplaylistsub[".searchableFields"][] = "fileMD5";
//	censorApproveTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "censorApproveTime";
	$fdata["GoodName"] = "censorApproveTime";
	$fdata["ownerTable"] = "mediaInfo";
	$fdata["Label"] = GetFieldLabel("playlistSub","censorApproveTime");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "censorApproveTime";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mediaInfo.censorApproveTime";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 100;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataplaylistsub["censorApproveTime"] = $fdata;
		$tdataplaylistsub[".searchableFields"][] = "censorApproveTime";
//	censorUsername
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "censorUsername";
	$fdata["GoodName"] = "censorUsername";
	$fdata["ownerTable"] = "mediaInfo";
	$fdata["Label"] = GetFieldLabel("playlistSub","censorUsername");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "censorUsername";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mediaInfo.censorUsername";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataplaylistsub["censorUsername"] = $fdata;
		$tdataplaylistsub[".searchableFields"][] = "censorUsername";
//	censoReson
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "censoReson";
	$fdata["GoodName"] = "censoReson";
	$fdata["ownerTable"] = "mediaInfo";
	$fdata["Label"] = GetFieldLabel("playlistSub","censoReson");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "censoReson";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mediaInfo.censoReson";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataplaylistsub["censoReson"] = $fdata;
		$tdataplaylistsub[".searchableFields"][] = "censoReson";
//	censorStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "censorStatus";
	$fdata["GoodName"] = "censorStatus";
	$fdata["ownerTable"] = "mediaInfo";
	$fdata["Label"] = GetFieldLabel("playlistSub","censorStatus");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "censorStatus";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mediaInfo.censorStatus";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataplaylistsub["censorStatus"] = $fdata;
		$tdataplaylistsub[".searchableFields"][] = "censorStatus";
//	fileStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "fileStatus";
	$fdata["GoodName"] = "fileStatus";
	$fdata["ownerTable"] = "mediaInfo";
	$fdata["Label"] = GetFieldLabel("playlistSub","fileStatus");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "fileStatus";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mediaInfo.fileStatus";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataplaylistsub["fileStatus"] = $fdata;
		$tdataplaylistsub[".searchableFields"][] = "fileStatus";
//	filePath
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "filePath";
	$fdata["GoodName"] = "filePath";
	$fdata["ownerTable"] = "mediaInfo";
	$fdata["Label"] = GetFieldLabel("playlistSub","filePath");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "filePath";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mediaInfo.filePath";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataplaylistsub["filePath"] = $fdata;
		$tdataplaylistsub[".searchableFields"][] = "filePath";
//	entryUserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "entryUserName";
	$fdata["GoodName"] = "entryUserName";
	$fdata["ownerTable"] = "mediaInfo";
	$fdata["Label"] = GetFieldLabel("playlistSub","entryUserName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "entryUserName";

		$fdata["sourceSingle"] = "entryUserName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mediaInfo.entryUserName";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
		$edata["autoUpdatable"] = true;

	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataplaylistsub["entryUserName"] = $fdata;
		$tdataplaylistsub[".searchableFields"][] = "entryUserName";
//	entryTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "entryTime";
	$fdata["GoodName"] = "entryTime";
	$fdata["ownerTable"] = "mediaInfo";
	$fdata["Label"] = GetFieldLabel("playlistSub","entryTime");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "entryTime";

		$fdata["sourceSingle"] = "entryTime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mediaInfo.entryTime";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Datetime");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
		$edata["autoUpdatable"] = true;

	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataplaylistsub["entryTime"] = $fdata;
		$tdataplaylistsub[".searchableFields"][] = "entryTime";


$tables_data["playlistSub"]=&$tdataplaylistsub;
$field_labels["playlistSub"] = &$fieldLabelsplaylistsub;
$fieldToolTips["playlistSub"] = &$fieldToolTipsplaylistsub;
$placeHolders["playlistSub"] = &$placeHoldersplaylistsub;
$page_titles["playlistSub"] = &$pageTitlesplaylistsub;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["playlistSub"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["playlistSub"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="playlistMain";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="playlistMain";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "playlistmain";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["playlistSub"][0] = $masterParams;
				$masterTablesData["playlistSub"][0]["masterKeys"] = array();
	$masterTablesData["playlistSub"][0]["masterKeys"][]="id";
				$masterTablesData["playlistSub"][0]["detailKeys"] = array();
	$masterTablesData["playlistSub"][0]["detailKeys"][]="playlistID";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_playlistsub()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "playlistSub.id, playlistSub.mediaInfoID, playlistSub.playlistID, mediaInfo.fileNo, mediaInfo.filedate, mediaInfo.fileName, mediaInfo.fileType, mediaInfo.fileDuration, mediaInfo.fileSubject, mediaInfo.fileTitle, mediaInfo.fileClassLevel, mediaInfo.fileTeacherName, mediaInfo.fileTeacherInfo, mediaInfo.fileRaw, mediaInfo.fileMD5, mediaInfo.censorApproveTime, mediaInfo.censorUsername, mediaInfo.censoReson, mediaInfo.censorStatus, mediaInfo.fileStatus, mediaInfo.filePath, mediaInfo.entryUserName, mediaInfo.entryTime";
$proto0["m_strFrom"] = "FROM playlistSub INNER JOIN mediaInfo ON playlistSub.mediaInfoID = mediaInfo.id";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "playlistSub",
	"m_srcTableName" => "playlistSub"
));

$proto6["m_sql"] = "playlistSub.id";
$proto6["m_srcTableName"] = "playlistSub";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "mediaInfoID",
	"m_strTable" => "playlistSub",
	"m_srcTableName" => "playlistSub"
));

$proto8["m_sql"] = "playlistSub.mediaInfoID";
$proto8["m_srcTableName"] = "playlistSub";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "playlistID",
	"m_strTable" => "playlistSub",
	"m_srcTableName" => "playlistSub"
));

$proto10["m_sql"] = "playlistSub.playlistID";
$proto10["m_srcTableName"] = "playlistSub";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "fileNo",
	"m_strTable" => "mediaInfo",
	"m_srcTableName" => "playlistSub"
));

$proto12["m_sql"] = "mediaInfo.fileNo";
$proto12["m_srcTableName"] = "playlistSub";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "filedate",
	"m_strTable" => "mediaInfo",
	"m_srcTableName" => "playlistSub"
));

$proto14["m_sql"] = "mediaInfo.filedate";
$proto14["m_srcTableName"] = "playlistSub";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "fileName",
	"m_strTable" => "mediaInfo",
	"m_srcTableName" => "playlistSub"
));

$proto16["m_sql"] = "mediaInfo.fileName";
$proto16["m_srcTableName"] = "playlistSub";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "fileType",
	"m_strTable" => "mediaInfo",
	"m_srcTableName" => "playlistSub"
));

$proto18["m_sql"] = "mediaInfo.fileType";
$proto18["m_srcTableName"] = "playlistSub";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "fileDuration",
	"m_strTable" => "mediaInfo",
	"m_srcTableName" => "playlistSub"
));

$proto20["m_sql"] = "mediaInfo.fileDuration";
$proto20["m_srcTableName"] = "playlistSub";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "fileSubject",
	"m_strTable" => "mediaInfo",
	"m_srcTableName" => "playlistSub"
));

$proto22["m_sql"] = "mediaInfo.fileSubject";
$proto22["m_srcTableName"] = "playlistSub";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "fileTitle",
	"m_strTable" => "mediaInfo",
	"m_srcTableName" => "playlistSub"
));

$proto24["m_sql"] = "mediaInfo.fileTitle";
$proto24["m_srcTableName"] = "playlistSub";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "fileClassLevel",
	"m_strTable" => "mediaInfo",
	"m_srcTableName" => "playlistSub"
));

$proto26["m_sql"] = "mediaInfo.fileClassLevel";
$proto26["m_srcTableName"] = "playlistSub";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "fileTeacherName",
	"m_strTable" => "mediaInfo",
	"m_srcTableName" => "playlistSub"
));

$proto28["m_sql"] = "mediaInfo.fileTeacherName";
$proto28["m_srcTableName"] = "playlistSub";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "fileTeacherInfo",
	"m_strTable" => "mediaInfo",
	"m_srcTableName" => "playlistSub"
));

$proto30["m_sql"] = "mediaInfo.fileTeacherInfo";
$proto30["m_srcTableName"] = "playlistSub";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "fileRaw",
	"m_strTable" => "mediaInfo",
	"m_srcTableName" => "playlistSub"
));

$proto32["m_sql"] = "mediaInfo.fileRaw";
$proto32["m_srcTableName"] = "playlistSub";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "fileMD5",
	"m_strTable" => "mediaInfo",
	"m_srcTableName" => "playlistSub"
));

$proto34["m_sql"] = "mediaInfo.fileMD5";
$proto34["m_srcTableName"] = "playlistSub";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "censorApproveTime",
	"m_strTable" => "mediaInfo",
	"m_srcTableName" => "playlistSub"
));

$proto36["m_sql"] = "mediaInfo.censorApproveTime";
$proto36["m_srcTableName"] = "playlistSub";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "censorUsername",
	"m_strTable" => "mediaInfo",
	"m_srcTableName" => "playlistSub"
));

$proto38["m_sql"] = "mediaInfo.censorUsername";
$proto38["m_srcTableName"] = "playlistSub";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "censoReson",
	"m_strTable" => "mediaInfo",
	"m_srcTableName" => "playlistSub"
));

$proto40["m_sql"] = "mediaInfo.censoReson";
$proto40["m_srcTableName"] = "playlistSub";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "censorStatus",
	"m_strTable" => "mediaInfo",
	"m_srcTableName" => "playlistSub"
));

$proto42["m_sql"] = "mediaInfo.censorStatus";
$proto42["m_srcTableName"] = "playlistSub";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "fileStatus",
	"m_strTable" => "mediaInfo",
	"m_srcTableName" => "playlistSub"
));

$proto44["m_sql"] = "mediaInfo.fileStatus";
$proto44["m_srcTableName"] = "playlistSub";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "filePath",
	"m_strTable" => "mediaInfo",
	"m_srcTableName" => "playlistSub"
));

$proto46["m_sql"] = "mediaInfo.filePath";
$proto46["m_srcTableName"] = "playlistSub";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "entryUserName",
	"m_strTable" => "mediaInfo",
	"m_srcTableName" => "playlistSub"
));

$proto48["m_sql"] = "mediaInfo.entryUserName";
$proto48["m_srcTableName"] = "playlistSub";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "entryTime",
	"m_strTable" => "mediaInfo",
	"m_srcTableName" => "playlistSub"
));

$proto50["m_sql"] = "mediaInfo.entryTime";
$proto50["m_srcTableName"] = "playlistSub";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto52=array();
$proto52["m_link"] = "SQLL_MAIN";
			$proto53=array();
$proto53["m_strName"] = "playlistSub";
$proto53["m_srcTableName"] = "playlistSub";
$proto53["m_columns"] = array();
$proto53["m_columns"][] = "id";
$proto53["m_columns"][] = "mediaInfoID";
$proto53["m_columns"][] = "playlistID";
$proto53["m_columns"][] = "entryUserName";
$proto53["m_columns"][] = "entryTime";
$obj = new SQLTable($proto53);

$proto52["m_table"] = $obj;
$proto52["m_sql"] = "playlistSub";
$proto52["m_alias"] = "";
$proto52["m_srcTableName"] = "playlistSub";
$proto54=array();
$proto54["m_sql"] = "";
$proto54["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto54["m_column"]=$obj;
$proto54["m_contained"] = array();
$proto54["m_strCase"] = "";
$proto54["m_havingmode"] = false;
$proto54["m_inBrackets"] = false;
$proto54["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto54);

$proto52["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto52);

$proto0["m_fromlist"][]=$obj;
												$proto56=array();
$proto56["m_link"] = "SQLL_INNERJOIN";
			$proto57=array();
$proto57["m_strName"] = "mediaInfo";
$proto57["m_srcTableName"] = "playlistSub";
$proto57["m_columns"] = array();
$proto57["m_columns"][] = "id";
$proto57["m_columns"][] = "fileNo";
$proto57["m_columns"][] = "filedate";
$proto57["m_columns"][] = "fileName";
$proto57["m_columns"][] = "fileType";
$proto57["m_columns"][] = "fileDuration";
$proto57["m_columns"][] = "fileSubject";
$proto57["m_columns"][] = "fileTitle";
$proto57["m_columns"][] = "fileClassLevel";
$proto57["m_columns"][] = "fileTeacherName";
$proto57["m_columns"][] = "fileTeacherInfo";
$proto57["m_columns"][] = "fileRaw";
$proto57["m_columns"][] = "fileMD5";
$proto57["m_columns"][] = "producerName";
$proto57["m_columns"][] = "censorApproveTime";
$proto57["m_columns"][] = "censorUsername";
$proto57["m_columns"][] = "censoReson";
$proto57["m_columns"][] = "censorStatus";
$proto57["m_columns"][] = "fileStatus";
$proto57["m_columns"][] = "filePath";
$proto57["m_columns"][] = "entryUserName";
$proto57["m_columns"][] = "entryTime";
$obj = new SQLTable($proto57);

$proto56["m_table"] = $obj;
$proto56["m_sql"] = "INNER JOIN mediaInfo ON playlistSub.mediaInfoID = mediaInfo.id";
$proto56["m_alias"] = "";
$proto56["m_srcTableName"] = "playlistSub";
$proto58=array();
$proto58["m_sql"] = "playlistSub.mediaInfoID = mediaInfo.id";
$proto58["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "mediaInfoID",
	"m_strTable" => "playlistSub",
	"m_srcTableName" => "playlistSub"
));

$proto58["m_column"]=$obj;
$proto58["m_contained"] = array();
$proto58["m_strCase"] = "= mediaInfo.id";
$proto58["m_havingmode"] = false;
$proto58["m_inBrackets"] = false;
$proto58["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto58);

$proto56["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto56);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="playlistSub";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_playlistsub = createSqlQuery_playlistsub();


	
		;

																							

$tdataplaylistsub[".sqlquery"] = $queryData_playlistsub;



include_once(getabspath("include/playlistsub_events.php"));
$tableEvents["playlistSub"] = new eventclass_playlistsub;
$tdataplaylistsub[".hasEvents"] = true;

?>