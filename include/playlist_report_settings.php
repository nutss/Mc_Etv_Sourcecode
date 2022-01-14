<?php
$tdataplaylist_report = array();
$tdataplaylist_report[".searchableFields"] = array();
$tdataplaylist_report[".ShortName"] = "playlist_report";
$tdataplaylist_report[".OwnerID"] = "";
$tdataplaylist_report[".OriginalTable"] = "playlistMain";


$tdataplaylist_report[".pagesByType"] = my_json_decode( "{\"report\":[\"report\"],\"rprint\":[\"rprint\"],\"search\":[\"search\"]}" );
$tdataplaylist_report[".originalPagesByType"] = $tdataplaylist_report[".pagesByType"];
$tdataplaylist_report[".pages"] = types2pages( my_json_decode( "{\"report\":[\"report\"],\"rprint\":[\"rprint\"],\"search\":[\"search\"]}" ) );
$tdataplaylist_report[".originalPages"] = $tdataplaylist_report[".pages"];
$tdataplaylist_report[".defaultPages"] = my_json_decode( "{\"report\":\"report\",\"rprint\":\"rprint\",\"search\":\"search\"}" );
$tdataplaylist_report[".originalDefaultPages"] = $tdataplaylist_report[".defaultPages"];

//	field labels
$fieldLabelsplaylist_report = array();
$fieldToolTipsplaylist_report = array();
$pageTitlesplaylist_report = array();
$placeHoldersplaylist_report = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsplaylist_report["English"] = array();
	$fieldToolTipsplaylist_report["English"] = array();
	$placeHoldersplaylist_report["English"] = array();
	$pageTitlesplaylist_report["English"] = array();
	$fieldLabelsplaylist_report["English"]["id"] = "ID";
	$fieldToolTipsplaylist_report["English"]["id"] = "";
	$placeHoldersplaylist_report["English"]["id"] = "";
	$fieldLabelsplaylist_report["English"]["playlistDescription"] = "Description";
	$fieldToolTipsplaylist_report["English"]["playlistDescription"] = "";
	$placeHoldersplaylist_report["English"]["playlistDescription"] = "";
	$fieldLabelsplaylist_report["English"]["playlistSubject"] = "Subject";
	$fieldToolTipsplaylist_report["English"]["playlistSubject"] = "";
	$placeHoldersplaylist_report["English"]["playlistSubject"] = "";
	$fieldLabelsplaylist_report["English"]["playlistClassLevel"] = "Class Level";
	$fieldToolTipsplaylist_report["English"]["playlistClassLevel"] = "";
	$placeHoldersplaylist_report["English"]["playlistClassLevel"] = "";
	$fieldLabelsplaylist_report["English"]["fileNo"] = "File No";
	$fieldToolTipsplaylist_report["English"]["fileNo"] = "";
	$placeHoldersplaylist_report["English"]["fileNo"] = "";
	$fieldLabelsplaylist_report["English"]["fileName"] = "File Name";
	$fieldToolTipsplaylist_report["English"]["fileName"] = "";
	$placeHoldersplaylist_report["English"]["fileName"] = "";
	$fieldLabelsplaylist_report["English"]["fileType"] = "File Type";
	$fieldToolTipsplaylist_report["English"]["fileType"] = "";
	$placeHoldersplaylist_report["English"]["fileType"] = "";
	$fieldLabelsplaylist_report["English"]["fileDuration"] = "File Duration";
	$fieldToolTipsplaylist_report["English"]["fileDuration"] = "";
	$placeHoldersplaylist_report["English"]["fileDuration"] = "";
	$fieldLabelsplaylist_report["English"]["fileTitle"] = "File Title";
	$fieldToolTipsplaylist_report["English"]["fileTitle"] = "";
	$placeHoldersplaylist_report["English"]["fileTitle"] = "";
	$fieldLabelsplaylist_report["English"]["fileTeacherName"] = "Teacher Name";
	$fieldToolTipsplaylist_report["English"]["fileTeacherName"] = "";
	$placeHoldersplaylist_report["English"]["fileTeacherName"] = "";
	$fieldLabelsplaylist_report["English"]["fileTeacherInfo"] = "Teacher Info";
	$fieldToolTipsplaylist_report["English"]["fileTeacherInfo"] = "";
	$placeHoldersplaylist_report["English"]["fileTeacherInfo"] = "";
	$fieldLabelsplaylist_report["English"]["fileMD5"] = "File MD5";
	$fieldToolTipsplaylist_report["English"]["fileMD5"] = "";
	$placeHoldersplaylist_report["English"]["fileMD5"] = "";
	$fieldLabelsplaylist_report["English"]["censorApproveTime"] = "Censor Approve Time";
	$fieldToolTipsplaylist_report["English"]["censorApproveTime"] = "";
	$placeHoldersplaylist_report["English"]["censorApproveTime"] = "";
	$fieldLabelsplaylist_report["English"]["censorUsername"] = "Censor Username";
	$fieldToolTipsplaylist_report["English"]["censorUsername"] = "";
	$placeHoldersplaylist_report["English"]["censorUsername"] = "";
	$fieldLabelsplaylist_report["English"]["censoReson"] = "Censor Reson";
	$fieldToolTipsplaylist_report["English"]["censoReson"] = "";
	$placeHoldersplaylist_report["English"]["censoReson"] = "";
	$fieldLabelsplaylist_report["English"]["censorStatus"] = "Censor Status";
	$fieldToolTipsplaylist_report["English"]["censorStatus"] = "";
	$placeHoldersplaylist_report["English"]["censorStatus"] = "";
	$fieldLabelsplaylist_report["English"]["mediaInfoID"] = "Media Info ID";
	$fieldToolTipsplaylist_report["English"]["mediaInfoID"] = "";
	$placeHoldersplaylist_report["English"]["mediaInfoID"] = "";
	$fieldLabelsplaylist_report["English"]["playlistID"] = "Playlist ID";
	$fieldToolTipsplaylist_report["English"]["playlistID"] = "";
	$placeHoldersplaylist_report["English"]["playlistID"] = "";
	$fieldLabelsplaylist_report["English"]["playlistTitle"] = "Playlist Title";
	$fieldToolTipsplaylist_report["English"]["playlistTitle"] = "";
	$placeHoldersplaylist_report["English"]["playlistTitle"] = "";
	$fieldLabelsplaylist_report["English"]["filedate"] = "File Date";
	$fieldToolTipsplaylist_report["English"]["filedate"] = "";
	$placeHoldersplaylist_report["English"]["filedate"] = "";
	$fieldLabelsplaylist_report["English"]["playlistOnairDate"] = "Playlist Onair Date";
	$fieldToolTipsplaylist_report["English"]["playlistOnairDate"] = "";
	$placeHoldersplaylist_report["English"]["playlistOnairDate"] = "";
	$fieldLabelsplaylist_report["English"]["playlistOnairTime1"] = "Playlist Onair Time1";
	$fieldToolTipsplaylist_report["English"]["playlistOnairTime1"] = "";
	$placeHoldersplaylist_report["English"]["playlistOnairTime1"] = "";
	$fieldLabelsplaylist_report["English"]["palylistOnairTime2"] = "Palylist Onair Time2";
	$fieldToolTipsplaylist_report["English"]["palylistOnairTime2"] = "";
	$placeHoldersplaylist_report["English"]["palylistOnairTime2"] = "";
	if (count($fieldToolTipsplaylist_report["English"]))
		$tdataplaylist_report[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelsplaylist_report["Thai"] = array();
	$fieldToolTipsplaylist_report["Thai"] = array();
	$placeHoldersplaylist_report["Thai"] = array();
	$pageTitlesplaylist_report["Thai"] = array();
	$fieldLabelsplaylist_report["Thai"]["id"] = "ID";
	$fieldToolTipsplaylist_report["Thai"]["id"] = "";
	$placeHoldersplaylist_report["Thai"]["id"] = "";
	$fieldLabelsplaylist_report["Thai"]["playlistDescription"] = "รายละเอียด";
	$fieldToolTipsplaylist_report["Thai"]["playlistDescription"] = "";
	$placeHoldersplaylist_report["Thai"]["playlistDescription"] = "";
	$fieldLabelsplaylist_report["Thai"]["playlistSubject"] = "ชื่อวิชา";
	$fieldToolTipsplaylist_report["Thai"]["playlistSubject"] = "";
	$placeHoldersplaylist_report["Thai"]["playlistSubject"] = "";
	$fieldLabelsplaylist_report["Thai"]["playlistClassLevel"] = "ระดับการศึกษา";
	$fieldToolTipsplaylist_report["Thai"]["playlistClassLevel"] = "";
	$placeHoldersplaylist_report["Thai"]["playlistClassLevel"] = "";
	$fieldLabelsplaylist_report["Thai"]["fileNo"] = "หมายเลขไฟล์";
	$fieldToolTipsplaylist_report["Thai"]["fileNo"] = "";
	$placeHoldersplaylist_report["Thai"]["fileNo"] = "";
	$fieldLabelsplaylist_report["Thai"]["fileName"] = "ชื่อไพล์";
	$fieldToolTipsplaylist_report["Thai"]["fileName"] = "";
	$placeHoldersplaylist_report["Thai"]["fileName"] = "";
	$fieldLabelsplaylist_report["Thai"]["fileType"] = "ประเภทไฟล์";
	$fieldToolTipsplaylist_report["Thai"]["fileType"] = "";
	$placeHoldersplaylist_report["Thai"]["fileType"] = "";
	$fieldLabelsplaylist_report["Thai"]["fileDuration"] = "ระยะเวลาไฟล์";
	$fieldToolTipsplaylist_report["Thai"]["fileDuration"] = "";
	$placeHoldersplaylist_report["Thai"]["fileDuration"] = "";
	$fieldLabelsplaylist_report["Thai"]["fileTitle"] = "หัวข้อวิชาไฟล์";
	$fieldToolTipsplaylist_report["Thai"]["fileTitle"] = "";
	$placeHoldersplaylist_report["Thai"]["fileTitle"] = "";
	$fieldLabelsplaylist_report["Thai"]["fileTeacherName"] = "อาจารย์ผู้สอน";
	$fieldToolTipsplaylist_report["Thai"]["fileTeacherName"] = "";
	$placeHoldersplaylist_report["Thai"]["fileTeacherName"] = "";
	$fieldLabelsplaylist_report["Thai"]["fileTeacherInfo"] = "รายละเอียดผู้สอน";
	$fieldToolTipsplaylist_report["Thai"]["fileTeacherInfo"] = "";
	$placeHoldersplaylist_report["Thai"]["fileTeacherInfo"] = "";
	$fieldLabelsplaylist_report["Thai"]["fileMD5"] = "Finger Print (MD5)";
	$fieldToolTipsplaylist_report["Thai"]["fileMD5"] = "";
	$placeHoldersplaylist_report["Thai"]["fileMD5"] = "";
	$fieldLabelsplaylist_report["Thai"]["censorApproveTime"] = "วันที่/เวลาแก้ไขอนุมัติเซ็นเซอร์";
	$fieldToolTipsplaylist_report["Thai"]["censorApproveTime"] = "";
	$placeHoldersplaylist_report["Thai"]["censorApproveTime"] = "";
	$fieldLabelsplaylist_report["Thai"]["censorUsername"] = "ผู้อนุมัติเซ็นเซอร์";
	$fieldToolTipsplaylist_report["Thai"]["censorUsername"] = "";
	$placeHoldersplaylist_report["Thai"]["censorUsername"] = "";
	$fieldLabelsplaylist_report["Thai"]["censoReson"] = "เหตุผลเซ็นเซอร์";
	$fieldToolTipsplaylist_report["Thai"]["censoReson"] = "";
	$placeHoldersplaylist_report["Thai"]["censoReson"] = "";
	$fieldLabelsplaylist_report["Thai"]["censorStatus"] = "สถานะเซ็นเซอร์";
	$fieldToolTipsplaylist_report["Thai"]["censorStatus"] = "";
	$placeHoldersplaylist_report["Thai"]["censorStatus"] = "";
	$fieldLabelsplaylist_report["Thai"]["mediaInfoID"] = "Media Info ID";
	$fieldToolTipsplaylist_report["Thai"]["mediaInfoID"] = "";
	$placeHoldersplaylist_report["Thai"]["mediaInfoID"] = "";
	$fieldLabelsplaylist_report["Thai"]["playlistID"] = "Playlist ID";
	$fieldToolTipsplaylist_report["Thai"]["playlistID"] = "";
	$placeHoldersplaylist_report["Thai"]["playlistID"] = "";
	$fieldLabelsplaylist_report["Thai"]["playlistTitle"] = "รายการ";
	$fieldToolTipsplaylist_report["Thai"]["playlistTitle"] = "";
	$placeHoldersplaylist_report["Thai"]["playlistTitle"] = "";
	$fieldLabelsplaylist_report["Thai"]["filedate"] = "วันที่ไฟล์";
	$fieldToolTipsplaylist_report["Thai"]["filedate"] = "";
	$placeHoldersplaylist_report["Thai"]["filedate"] = "";
	$fieldLabelsplaylist_report["Thai"]["playlistOnairDate"] = "วันที่ออกอากาศ";
	$fieldToolTipsplaylist_report["Thai"]["playlistOnairDate"] = "";
	$placeHoldersplaylist_report["Thai"]["playlistOnairDate"] = "";
	$fieldLabelsplaylist_report["Thai"]["playlistOnairTime1"] = "เวลาออกอากาศ";
	$fieldToolTipsplaylist_report["Thai"]["playlistOnairTime1"] = "";
	$placeHoldersplaylist_report["Thai"]["playlistOnairTime1"] = "";
	$fieldLabelsplaylist_report["Thai"]["palylistOnairTime2"] = "เวลาสิ้นสุดออกอากาศ";
	$fieldToolTipsplaylist_report["Thai"]["palylistOnairTime2"] = "";
	$placeHoldersplaylist_report["Thai"]["palylistOnairTime2"] = "";
	if (count($fieldToolTipsplaylist_report["Thai"]))
		$tdataplaylist_report[".isUseToolTips"] = true;
}


	$tdataplaylist_report[".NCSearch"] = true;



$tdataplaylist_report[".shortTableName"] = "playlist_report";
$tdataplaylist_report[".nSecOptions"] = 0;

$tdataplaylist_report[".mainTableOwnerID"] = "";
$tdataplaylist_report[".entityType"] = 2;
$tdataplaylist_report[".connId"] = "mc_at_192_168_1_111";


$tdataplaylist_report[".strOriginalTableName"] = "playlistMain";

	



$tdataplaylist_report[".showAddInPopup"] = false;

$tdataplaylist_report[".showEditInPopup"] = false;

$tdataplaylist_report[".showViewInPopup"] = false;

$tdataplaylist_report[".listAjax"] = false;
//	temporary
//$tdataplaylist_report[".listAjax"] = false;

	$tdataplaylist_report[".audit"] = false;

	$tdataplaylist_report[".locking"] = false;


$pages = $tdataplaylist_report[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataplaylist_report[".edit"] = true;
	$tdataplaylist_report[".afterEditAction"] = 1;
	$tdataplaylist_report[".closePopupAfterEdit"] = 1;
	$tdataplaylist_report[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataplaylist_report[".add"] = true;
$tdataplaylist_report[".afterAddAction"] = 1;
$tdataplaylist_report[".closePopupAfterAdd"] = 1;
$tdataplaylist_report[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataplaylist_report[".list"] = true;
}



$tdataplaylist_report[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataplaylist_report[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataplaylist_report[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataplaylist_report[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataplaylist_report[".printFriendly"] = true;
}



$tdataplaylist_report[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataplaylist_report[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataplaylist_report[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataplaylist_report[".isUseAjaxSuggest"] = true;




			

$tdataplaylist_report[".ajaxCodeSnippetAdded"] = false;

$tdataplaylist_report[".buttonsAdded"] = false;

$tdataplaylist_report[".addPageEvents"] = false;

// use timepicker for search panel
$tdataplaylist_report[".isUseTimeForSearch"] = false;


$tdataplaylist_report[".badgeColor"] = "3CB371";


$tdataplaylist_report[".allSearchFields"] = array();
$tdataplaylist_report[".filterFields"] = array();
$tdataplaylist_report[".requiredSearchFields"] = array();

$tdataplaylist_report[".googleLikeFields"] = array();
$tdataplaylist_report[".googleLikeFields"][] = "playlistDescription";
$tdataplaylist_report[".googleLikeFields"][] = "playlistSubject";
$tdataplaylist_report[".googleLikeFields"][] = "playlistClassLevel";
$tdataplaylist_report[".googleLikeFields"][] = "playlistOnairDate";
$tdataplaylist_report[".googleLikeFields"][] = "playlistOnairTime1";
$tdataplaylist_report[".googleLikeFields"][] = "palylistOnairTime2";
$tdataplaylist_report[".googleLikeFields"][] = "fileNo";
$tdataplaylist_report[".googleLikeFields"][] = "fileName";
$tdataplaylist_report[".googleLikeFields"][] = "fileType";
$tdataplaylist_report[".googleLikeFields"][] = "fileDuration";
$tdataplaylist_report[".googleLikeFields"][] = "fileTitle";
$tdataplaylist_report[".googleLikeFields"][] = "fileTeacherName";
$tdataplaylist_report[".googleLikeFields"][] = "fileTeacherInfo";
$tdataplaylist_report[".googleLikeFields"][] = "fileMD5";
$tdataplaylist_report[".googleLikeFields"][] = "censorApproveTime";
$tdataplaylist_report[".googleLikeFields"][] = "censorUsername";
$tdataplaylist_report[".googleLikeFields"][] = "censoReson";
$tdataplaylist_report[".googleLikeFields"][] = "censorStatus";
$tdataplaylist_report[".googleLikeFields"][] = "mediaInfoID";
$tdataplaylist_report[".googleLikeFields"][] = "playlistID";
$tdataplaylist_report[".googleLikeFields"][] = "playlistTitle";



$tdataplaylist_report[".tableType"] = "report";

$tdataplaylist_report[".printerPageOrientation"] = 0;
$tdataplaylist_report[".nPrinterPageScale"] = 100;

$tdataplaylist_report[".nPrinterSplitRecords"] = 40;

$tdataplaylist_report[".geocodingEnabled"] = false;

//report settings

$tdataplaylist_report[".reportPrintGroupsPerPage"] = 1;
$tdataplaylist_report[".reportPrintRecordsPerPage"] = 40;

$tdataplaylist_report[".pageSizeGroups"] = 5;
$tdataplaylist_report[".pageSizeRecords"] = 20;


//end of report settings










$tstrOrderBy = "ORDER BY playlistMain.playlistOnairDate";
$tdataplaylist_report[".strOrderBy"] = $tstrOrderBy;

$tdataplaylist_report[".orderindexes"] = array();
	$tdataplaylist_report[".orderindexes"][] = array(5, (1 ? "ASC" : "DESC"), "playlistMain.playlistOnairDate");



$tdataplaylist_report[".sqlHead"] = "SELECT playlistMain.id,  playlistMain.playlistDescription,  playlistMain.playlistSubject,  playlistMain.playlistClassLevel,  playlistMain.playlistOnairDate,  playlistMain.playlistOnairTime1,  playlistMain.palylistOnairTime2,  mediaInfo.fileNo,  mediaInfo.fileName,  mediaInfo.fileType,  mediaInfo.fileDuration,  mediaInfo.fileTitle,  mediaInfo.fileTeacherName,  mediaInfo.fileTeacherInfo,  mediaInfo.fileMD5,  mediaInfo.censorApproveTime,  mediaInfo.censorUsername,  mediaInfo.censoReson,  mediaInfo.censorStatus,  playlistSub.mediaInfoID,  playlistSub.playlistID,  playlistMain.playlistTitle,  mediaInfo.filedate";
$tdataplaylist_report[".sqlFrom"] = "FROM playlistMain  INNER JOIN playlistSub ON playlistMain.id = playlistSub.playlistID  INNER JOIN mediaInfo ON playlistSub.mediaInfoID = mediaInfo.id";
$tdataplaylist_report[".sqlWhereExpr"] = "";
$tdataplaylist_report[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataplaylist_report[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataplaylist_report[".arrGroupsPerPage"] = $arrGPP;

$tdataplaylist_report[".highlightSearchResults"] = true;

$tableKeysplaylist_report = array();
$tableKeysplaylist_report[] = "id";
$tdataplaylist_report[".Keys"] = $tableKeysplaylist_report;


$tdataplaylist_report[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "playlistMain";
	$fdata["Label"] = GetFieldLabel("playlist_Report","id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "playlistMain.id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataplaylist_report["id"] = $fdata;
		$tdataplaylist_report[".searchableFields"][] = "id";
//	playlistDescription
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "playlistDescription";
	$fdata["GoodName"] = "playlistDescription";
	$fdata["ownerTable"] = "playlistMain";
	$fdata["Label"] = GetFieldLabel("playlist_Report","playlistDescription");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "playlistDescription";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "playlistMain.playlistDescription";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
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
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataplaylist_report["playlistDescription"] = $fdata;
		$tdataplaylist_report[".searchableFields"][] = "playlistDescription";
//	playlistSubject
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "playlistSubject";
	$fdata["GoodName"] = "playlistSubject";
	$fdata["ownerTable"] = "playlistMain";
	$fdata["Label"] = GetFieldLabel("playlist_Report","playlistSubject");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "playlistSubject";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "playlistMain.playlistSubject";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Contains";
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


	$tdataplaylist_report["playlistSubject"] = $fdata;
		$tdataplaylist_report[".searchableFields"][] = "playlistSubject";
//	playlistClassLevel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "playlistClassLevel";
	$fdata["GoodName"] = "playlistClassLevel";
	$fdata["ownerTable"] = "playlistMain";
	$fdata["Label"] = GetFieldLabel("playlist_Report","playlistClassLevel");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "playlistClassLevel";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "playlistMain.playlistClassLevel";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataplaylist_report["playlistClassLevel"] = $fdata;
		$tdataplaylist_report[".searchableFields"][] = "playlistClassLevel";
//	playlistOnairDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "playlistOnairDate";
	$fdata["GoodName"] = "playlistOnairDate";
	$fdata["ownerTable"] = "playlistMain";
	$fdata["Label"] = GetFieldLabel("playlist_Report","playlistOnairDate");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "playlistOnairDate";

		$fdata["sourceSingle"] = "playlistOnairDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "playlistMain.playlistOnairDate";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Between";

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


	$tdataplaylist_report["playlistOnairDate"] = $fdata;
		$tdataplaylist_report[".searchableFields"][] = "playlistOnairDate";
//	playlistOnairTime1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "playlistOnairTime1";
	$fdata["GoodName"] = "playlistOnairTime1";
	$fdata["ownerTable"] = "playlistMain";
	$fdata["Label"] = GetFieldLabel("playlist_Report","playlistOnairTime1");
	$fdata["FieldType"] = 134;


	
	
			

		$fdata["strField"] = "playlistOnairTime1";

		$fdata["sourceSingle"] = "playlistOnairTime1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "playlistMain.playlistOnairTime1";

	
	
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

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Time");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
	
				$hours = 24;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 0,
									  "hours" => $hours,
									  "minutes" => 1,
									  "showSeconds" => 0);

	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataplaylist_report["playlistOnairTime1"] = $fdata;
		$tdataplaylist_report[".searchableFields"][] = "playlistOnairTime1";
//	palylistOnairTime2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "palylistOnairTime2";
	$fdata["GoodName"] = "palylistOnairTime2";
	$fdata["ownerTable"] = "playlistMain";
	$fdata["Label"] = GetFieldLabel("playlist_Report","palylistOnairTime2");
	$fdata["FieldType"] = 134;


	
	
			

		$fdata["strField"] = "palylistOnairTime2";

		$fdata["sourceSingle"] = "palylistOnairTime2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "playlistMain.palylistOnairTime2";

	
	
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

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Time");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
	
				$hours = 24;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 0,
									  "hours" => $hours,
									  "minutes" => 1,
									  "showSeconds" => 0);

	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataplaylist_report["palylistOnairTime2"] = $fdata;
		$tdataplaylist_report[".searchableFields"][] = "palylistOnairTime2";
//	fileNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "fileNo";
	$fdata["GoodName"] = "fileNo";
	$fdata["ownerTable"] = "mediaInfo";
	$fdata["Label"] = GetFieldLabel("playlist_Report","fileNo");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataplaylist_report["fileNo"] = $fdata;
		$tdataplaylist_report[".searchableFields"][] = "fileNo";
//	fileName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "fileName";
	$fdata["GoodName"] = "fileName";
	$fdata["ownerTable"] = "mediaInfo";
	$fdata["Label"] = GetFieldLabel("playlist_Report","fileName");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataplaylist_report["fileName"] = $fdata;
		$tdataplaylist_report[".searchableFields"][] = "fileName";
//	fileType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "fileType";
	$fdata["GoodName"] = "fileType";
	$fdata["ownerTable"] = "mediaInfo";
	$fdata["Label"] = GetFieldLabel("playlist_Report","fileType");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataplaylist_report["fileType"] = $fdata;
		$tdataplaylist_report[".searchableFields"][] = "fileType";
//	fileDuration
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "fileDuration";
	$fdata["GoodName"] = "fileDuration";
	$fdata["ownerTable"] = "mediaInfo";
	$fdata["Label"] = GetFieldLabel("playlist_Report","fileDuration");
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

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Time");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
				$hours = 24;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 0,
									  "hours" => $hours,
									  "minutes" => 1,
									  "showSeconds" => 0);

	
	
	$fdata["EditFormats"]["search"] = $edata;
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
		$fdata["filterTotalFields"] = "id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataplaylist_report["fileDuration"] = $fdata;
		$tdataplaylist_report[".searchableFields"][] = "fileDuration";
//	fileTitle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "fileTitle";
	$fdata["GoodName"] = "fileTitle";
	$fdata["ownerTable"] = "mediaInfo";
	$fdata["Label"] = GetFieldLabel("playlist_Report","fileTitle");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataplaylist_report["fileTitle"] = $fdata;
		$tdataplaylist_report[".searchableFields"][] = "fileTitle";
//	fileTeacherName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "fileTeacherName";
	$fdata["GoodName"] = "fileTeacherName";
	$fdata["ownerTable"] = "mediaInfo";
	$fdata["Label"] = GetFieldLabel("playlist_Report","fileTeacherName");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataplaylist_report["fileTeacherName"] = $fdata;
		$tdataplaylist_report[".searchableFields"][] = "fileTeacherName";
//	fileTeacherInfo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "fileTeacherInfo";
	$fdata["GoodName"] = "fileTeacherInfo";
	$fdata["ownerTable"] = "mediaInfo";
	$fdata["Label"] = GetFieldLabel("playlist_Report","fileTeacherInfo");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataplaylist_report["fileTeacherInfo"] = $fdata;
		$tdataplaylist_report[".searchableFields"][] = "fileTeacherInfo";
//	fileMD5
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "fileMD5";
	$fdata["GoodName"] = "fileMD5";
	$fdata["ownerTable"] = "mediaInfo";
	$fdata["Label"] = GetFieldLabel("playlist_Report","fileMD5");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataplaylist_report["fileMD5"] = $fdata;
		$tdataplaylist_report[".searchableFields"][] = "fileMD5";
//	censorApproveTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "censorApproveTime";
	$fdata["GoodName"] = "censorApproveTime";
	$fdata["ownerTable"] = "mediaInfo";
	$fdata["Label"] = GetFieldLabel("playlist_Report","censorApproveTime");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataplaylist_report["censorApproveTime"] = $fdata;
		$tdataplaylist_report[".searchableFields"][] = "censorApproveTime";
//	censorUsername
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "censorUsername";
	$fdata["GoodName"] = "censorUsername";
	$fdata["ownerTable"] = "mediaInfo";
	$fdata["Label"] = GetFieldLabel("playlist_Report","censorUsername");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataplaylist_report["censorUsername"] = $fdata;
		$tdataplaylist_report[".searchableFields"][] = "censorUsername";
//	censoReson
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "censoReson";
	$fdata["GoodName"] = "censoReson";
	$fdata["ownerTable"] = "mediaInfo";
	$fdata["Label"] = GetFieldLabel("playlist_Report","censoReson");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataplaylist_report["censoReson"] = $fdata;
		$tdataplaylist_report[".searchableFields"][] = "censoReson";
//	censorStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "censorStatus";
	$fdata["GoodName"] = "censorStatus";
	$fdata["ownerTable"] = "mediaInfo";
	$fdata["Label"] = GetFieldLabel("playlist_Report","censorStatus");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataplaylist_report["censorStatus"] = $fdata;
		$tdataplaylist_report[".searchableFields"][] = "censorStatus";
//	mediaInfoID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "mediaInfoID";
	$fdata["GoodName"] = "mediaInfoID";
	$fdata["ownerTable"] = "playlistSub";
	$fdata["Label"] = GetFieldLabel("playlist_Report","mediaInfoID");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataplaylist_report["mediaInfoID"] = $fdata;
		$tdataplaylist_report[".searchableFields"][] = "mediaInfoID";
//	playlistID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "playlistID";
	$fdata["GoodName"] = "playlistID";
	$fdata["ownerTable"] = "playlistSub";
	$fdata["Label"] = GetFieldLabel("playlist_Report","playlistID");
	$fdata["FieldType"] = 13;


	
	
			

		$fdata["strField"] = "playlistID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "playlistSub.playlistID";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataplaylist_report["playlistID"] = $fdata;
		$tdataplaylist_report[".searchableFields"][] = "playlistID";
//	playlistTitle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "playlistTitle";
	$fdata["GoodName"] = "playlistTitle";
	$fdata["ownerTable"] = "playlistMain";
	$fdata["Label"] = GetFieldLabel("playlist_Report","playlistTitle");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "playlistTitle";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "playlistMain.playlistTitle";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
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
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataplaylist_report["playlistTitle"] = $fdata;
		$tdataplaylist_report[".searchableFields"][] = "playlistTitle";
//	filedate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "filedate";
	$fdata["GoodName"] = "filedate";
	$fdata["ownerTable"] = "mediaInfo";
	$fdata["Label"] = GetFieldLabel("playlist_Report","filedate");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataplaylist_report["filedate"] = $fdata;
		$tdataplaylist_report[".searchableFields"][] = "filedate";


$tables_data["playlist Report"]=&$tdataplaylist_report;
$field_labels["playlist_Report"] = &$fieldLabelsplaylist_report;
$fieldToolTips["playlist_Report"] = &$fieldToolTipsplaylist_report;
$placeHolders["playlist_Report"] = &$placeHoldersplaylist_report;
$page_titles["playlist_Report"] = &$pageTitlesplaylist_report;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["playlist Report"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["playlist Report"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_playlist_report()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "playlistMain.id,  playlistMain.playlistDescription,  playlistMain.playlistSubject,  playlistMain.playlistClassLevel,  playlistMain.playlistOnairDate,  playlistMain.playlistOnairTime1,  playlistMain.palylistOnairTime2,  mediaInfo.fileNo,  mediaInfo.fileName,  mediaInfo.fileType,  mediaInfo.fileDuration,  mediaInfo.fileTitle,  mediaInfo.fileTeacherName,  mediaInfo.fileTeacherInfo,  mediaInfo.fileMD5,  mediaInfo.censorApproveTime,  mediaInfo.censorUsername,  mediaInfo.censoReson,  mediaInfo.censorStatus,  playlistSub.mediaInfoID,  playlistSub.playlistID,  playlistMain.playlistTitle,  mediaInfo.filedate";
$proto0["m_strFrom"] = "FROM playlistMain  INNER JOIN playlistSub ON playlistMain.id = playlistSub.playlistID  INNER JOIN mediaInfo ON playlistSub.mediaInfoID = mediaInfo.id";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY playlistMain.playlistOnairDate";
	
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
	"m_strTable" => "playlistMain",
	"m_srcTableName" => "playlist Report"
));

$proto6["m_sql"] = "playlistMain.id";
$proto6["m_srcTableName"] = "playlist Report";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "playlistDescription",
	"m_strTable" => "playlistMain",
	"m_srcTableName" => "playlist Report"
));

$proto8["m_sql"] = "playlistMain.playlistDescription";
$proto8["m_srcTableName"] = "playlist Report";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "playlistSubject",
	"m_strTable" => "playlistMain",
	"m_srcTableName" => "playlist Report"
));

$proto10["m_sql"] = "playlistMain.playlistSubject";
$proto10["m_srcTableName"] = "playlist Report";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "playlistClassLevel",
	"m_strTable" => "playlistMain",
	"m_srcTableName" => "playlist Report"
));

$proto12["m_sql"] = "playlistMain.playlistClassLevel";
$proto12["m_srcTableName"] = "playlist Report";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "playlistOnairDate",
	"m_strTable" => "playlistMain",
	"m_srcTableName" => "playlist Report"
));

$proto14["m_sql"] = "playlistMain.playlistOnairDate";
$proto14["m_srcTableName"] = "playlist Report";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "playlistOnairTime1",
	"m_strTable" => "playlistMain",
	"m_srcTableName" => "playlist Report"
));

$proto16["m_sql"] = "playlistMain.playlistOnairTime1";
$proto16["m_srcTableName"] = "playlist Report";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "palylistOnairTime2",
	"m_strTable" => "playlistMain",
	"m_srcTableName" => "playlist Report"
));

$proto18["m_sql"] = "playlistMain.palylistOnairTime2";
$proto18["m_srcTableName"] = "playlist Report";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "fileNo",
	"m_strTable" => "mediaInfo",
	"m_srcTableName" => "playlist Report"
));

$proto20["m_sql"] = "mediaInfo.fileNo";
$proto20["m_srcTableName"] = "playlist Report";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "fileName",
	"m_strTable" => "mediaInfo",
	"m_srcTableName" => "playlist Report"
));

$proto22["m_sql"] = "mediaInfo.fileName";
$proto22["m_srcTableName"] = "playlist Report";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "fileType",
	"m_strTable" => "mediaInfo",
	"m_srcTableName" => "playlist Report"
));

$proto24["m_sql"] = "mediaInfo.fileType";
$proto24["m_srcTableName"] = "playlist Report";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "fileDuration",
	"m_strTable" => "mediaInfo",
	"m_srcTableName" => "playlist Report"
));

$proto26["m_sql"] = "mediaInfo.fileDuration";
$proto26["m_srcTableName"] = "playlist Report";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "fileTitle",
	"m_strTable" => "mediaInfo",
	"m_srcTableName" => "playlist Report"
));

$proto28["m_sql"] = "mediaInfo.fileTitle";
$proto28["m_srcTableName"] = "playlist Report";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "fileTeacherName",
	"m_strTable" => "mediaInfo",
	"m_srcTableName" => "playlist Report"
));

$proto30["m_sql"] = "mediaInfo.fileTeacherName";
$proto30["m_srcTableName"] = "playlist Report";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "fileTeacherInfo",
	"m_strTable" => "mediaInfo",
	"m_srcTableName" => "playlist Report"
));

$proto32["m_sql"] = "mediaInfo.fileTeacherInfo";
$proto32["m_srcTableName"] = "playlist Report";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "fileMD5",
	"m_strTable" => "mediaInfo",
	"m_srcTableName" => "playlist Report"
));

$proto34["m_sql"] = "mediaInfo.fileMD5";
$proto34["m_srcTableName"] = "playlist Report";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "censorApproveTime",
	"m_strTable" => "mediaInfo",
	"m_srcTableName" => "playlist Report"
));

$proto36["m_sql"] = "mediaInfo.censorApproveTime";
$proto36["m_srcTableName"] = "playlist Report";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "censorUsername",
	"m_strTable" => "mediaInfo",
	"m_srcTableName" => "playlist Report"
));

$proto38["m_sql"] = "mediaInfo.censorUsername";
$proto38["m_srcTableName"] = "playlist Report";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "censoReson",
	"m_strTable" => "mediaInfo",
	"m_srcTableName" => "playlist Report"
));

$proto40["m_sql"] = "mediaInfo.censoReson";
$proto40["m_srcTableName"] = "playlist Report";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "censorStatus",
	"m_strTable" => "mediaInfo",
	"m_srcTableName" => "playlist Report"
));

$proto42["m_sql"] = "mediaInfo.censorStatus";
$proto42["m_srcTableName"] = "playlist Report";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "mediaInfoID",
	"m_strTable" => "playlistSub",
	"m_srcTableName" => "playlist Report"
));

$proto44["m_sql"] = "playlistSub.mediaInfoID";
$proto44["m_srcTableName"] = "playlist Report";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "playlistID",
	"m_strTable" => "playlistSub",
	"m_srcTableName" => "playlist Report"
));

$proto46["m_sql"] = "playlistSub.playlistID";
$proto46["m_srcTableName"] = "playlist Report";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "playlistTitle",
	"m_strTable" => "playlistMain",
	"m_srcTableName" => "playlist Report"
));

$proto48["m_sql"] = "playlistMain.playlistTitle";
$proto48["m_srcTableName"] = "playlist Report";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "filedate",
	"m_strTable" => "mediaInfo",
	"m_srcTableName" => "playlist Report"
));

$proto50["m_sql"] = "mediaInfo.filedate";
$proto50["m_srcTableName"] = "playlist Report";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto52=array();
$proto52["m_link"] = "SQLL_MAIN";
			$proto53=array();
$proto53["m_strName"] = "playlistMain";
$proto53["m_srcTableName"] = "playlist Report";
$proto53["m_columns"] = array();
$proto53["m_columns"][] = "entryTime";
$proto53["m_columns"][] = "entryUserName";
$proto53["m_columns"][] = "id";
$proto53["m_columns"][] = "palylistOnairTime2";
$proto53["m_columns"][] = "playlistClassLevel";
$proto53["m_columns"][] = "playlistDescription";
$proto53["m_columns"][] = "playlistOnairDate";
$proto53["m_columns"][] = "playlistOnairTime1";
$proto53["m_columns"][] = "playlistSubject";
$proto53["m_columns"][] = "playlistTitle";
$obj = new SQLTable($proto53);

$proto52["m_table"] = $obj;
$proto52["m_sql"] = "playlistMain";
$proto52["m_alias"] = "";
$proto52["m_srcTableName"] = "playlist Report";
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
$proto57["m_strName"] = "playlistSub";
$proto57["m_srcTableName"] = "playlist Report";
$proto57["m_columns"] = array();
$proto57["m_columns"][] = "entryTime";
$proto57["m_columns"][] = "entryUserName";
$proto57["m_columns"][] = "id";
$proto57["m_columns"][] = "mediaInfoID";
$proto57["m_columns"][] = "playlistID";
$obj = new SQLTable($proto57);

$proto56["m_table"] = $obj;
$proto56["m_sql"] = "INNER JOIN playlistSub ON playlistMain.id = playlistSub.playlistID";
$proto56["m_alias"] = "";
$proto56["m_srcTableName"] = "playlist Report";
$proto58=array();
$proto58["m_sql"] = "playlistMain.id = playlistSub.playlistID";
$proto58["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "playlistMain",
	"m_srcTableName" => "playlist Report"
));

$proto58["m_column"]=$obj;
$proto58["m_contained"] = array();
$proto58["m_strCase"] = "= playlistSub.playlistID";
$proto58["m_havingmode"] = false;
$proto58["m_inBrackets"] = false;
$proto58["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto58);

$proto56["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto56);

$proto0["m_fromlist"][]=$obj;
												$proto60=array();
$proto60["m_link"] = "SQLL_INNERJOIN";
			$proto61=array();
$proto61["m_strName"] = "mediaInfo";
$proto61["m_srcTableName"] = "playlist Report";
$proto61["m_columns"] = array();
$proto61["m_columns"][] = "censorApproveTime";
$proto61["m_columns"][] = "censoReson";
$proto61["m_columns"][] = "censorStatus";
$proto61["m_columns"][] = "censorUsername";
$proto61["m_columns"][] = "entryTime";
$proto61["m_columns"][] = "entryUserName";
$proto61["m_columns"][] = "fileClassLevel";
$proto61["m_columns"][] = "filedate";
$proto61["m_columns"][] = "fileDuration";
$proto61["m_columns"][] = "fileMD5";
$proto61["m_columns"][] = "fileName";
$proto61["m_columns"][] = "fileNo";
$proto61["m_columns"][] = "filePath";
$proto61["m_columns"][] = "fileRaw";
$proto61["m_columns"][] = "fileStatus";
$proto61["m_columns"][] = "fileSubject";
$proto61["m_columns"][] = "fileTeacherInfo";
$proto61["m_columns"][] = "fileTeacherName";
$proto61["m_columns"][] = "fileTitle";
$proto61["m_columns"][] = "fileType";
$proto61["m_columns"][] = "id";
$proto61["m_columns"][] = "producerName";
$obj = new SQLTable($proto61);

$proto60["m_table"] = $obj;
$proto60["m_sql"] = "INNER JOIN mediaInfo ON playlistSub.mediaInfoID = mediaInfo.id";
$proto60["m_alias"] = "";
$proto60["m_srcTableName"] = "playlist Report";
$proto62=array();
$proto62["m_sql"] = "playlistSub.mediaInfoID = mediaInfo.id";
$proto62["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "mediaInfoID",
	"m_strTable" => "playlistSub",
	"m_srcTableName" => "playlist Report"
));

$proto62["m_column"]=$obj;
$proto62["m_contained"] = array();
$proto62["m_strCase"] = "= mediaInfo.id";
$proto62["m_havingmode"] = false;
$proto62["m_inBrackets"] = false;
$proto62["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto62);

$proto60["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto60);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto64=array();
						$obj = new SQLField(array(
	"m_strName" => "playlistOnairDate",
	"m_strTable" => "playlistMain",
	"m_srcTableName" => "playlist Report"
));

$proto64["m_column"]=$obj;
$proto64["m_bAsc"] = 1;
$proto64["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto64);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="playlist Report";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_playlist_report = createSqlQuery_playlist_report();


	
		;

																							

$tdataplaylist_report[".sqlquery"] = $queryData_playlist_report;



$tableEvents["playlist Report"] = new eventsBase;
$tdataplaylist_report[".hasEvents"] = false;

?>