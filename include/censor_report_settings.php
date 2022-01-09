<?php
$tdatacensor_report = array();
$tdatacensor_report[".searchableFields"] = array();
$tdatacensor_report[".ShortName"] = "censor_report";
$tdatacensor_report[".OwnerID"] = "";
$tdatacensor_report[".OriginalTable"] = "mediaInfo";


$tdatacensor_report[".pagesByType"] = my_json_decode( "{\"report\":[\"report\"],\"rprint\":[\"rprint\"],\"search\":[\"search\"]}" );
$tdatacensor_report[".originalPagesByType"] = $tdatacensor_report[".pagesByType"];
$tdatacensor_report[".pages"] = types2pages( my_json_decode( "{\"report\":[\"report\"],\"rprint\":[\"rprint\"],\"search\":[\"search\"]}" ) );
$tdatacensor_report[".originalPages"] = $tdatacensor_report[".pages"];
$tdatacensor_report[".defaultPages"] = my_json_decode( "{\"report\":\"report\",\"rprint\":\"rprint\",\"search\":\"search\"}" );
$tdatacensor_report[".originalDefaultPages"] = $tdatacensor_report[".defaultPages"];

//	field labels
$fieldLabelscensor_report = array();
$fieldToolTipscensor_report = array();
$pageTitlescensor_report = array();
$placeHolderscensor_report = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscensor_report["English"] = array();
	$fieldToolTipscensor_report["English"] = array();
	$placeHolderscensor_report["English"] = array();
	$pageTitlescensor_report["English"] = array();
	$fieldLabelscensor_report["English"]["id"] = "ID";
	$fieldToolTipscensor_report["English"]["id"] = "";
	$placeHolderscensor_report["English"]["id"] = "";
	$fieldLabelscensor_report["English"]["fileNo"] = "File No";
	$fieldToolTipscensor_report["English"]["fileNo"] = "";
	$placeHolderscensor_report["English"]["fileNo"] = "";
	$fieldLabelscensor_report["English"]["fileName"] = "File Name";
	$fieldToolTipscensor_report["English"]["fileName"] = "";
	$placeHolderscensor_report["English"]["fileName"] = "";
	$fieldLabelscensor_report["English"]["fileType"] = "File Type";
	$fieldToolTipscensor_report["English"]["fileType"] = "";
	$placeHolderscensor_report["English"]["fileType"] = "";
	$fieldLabelscensor_report["English"]["fileDuration"] = "File Duration";
	$fieldToolTipscensor_report["English"]["fileDuration"] = "";
	$placeHolderscensor_report["English"]["fileDuration"] = "";
	$fieldLabelscensor_report["English"]["fileSubject"] = "Subject";
	$fieldToolTipscensor_report["English"]["fileSubject"] = "";
	$placeHolderscensor_report["English"]["fileSubject"] = "";
	$fieldLabelscensor_report["English"]["fileTitle"] = "Title";
	$fieldToolTipscensor_report["English"]["fileTitle"] = "";
	$placeHolderscensor_report["English"]["fileTitle"] = "";
	$fieldLabelscensor_report["English"]["fileClassLevel"] = "Class Level";
	$fieldToolTipscensor_report["English"]["fileClassLevel"] = "";
	$placeHolderscensor_report["English"]["fileClassLevel"] = "";
	$fieldLabelscensor_report["English"]["fileTeacherName"] = "Teacher Name";
	$fieldToolTipscensor_report["English"]["fileTeacherName"] = "";
	$placeHolderscensor_report["English"]["fileTeacherName"] = "";
	$fieldLabelscensor_report["English"]["fileTeacherInfo"] = "Teacher Info";
	$fieldToolTipscensor_report["English"]["fileTeacherInfo"] = "";
	$placeHolderscensor_report["English"]["fileTeacherInfo"] = "";
	$fieldLabelscensor_report["English"]["fileRaw"] = "File Raw";
	$fieldToolTipscensor_report["English"]["fileRaw"] = "";
	$placeHolderscensor_report["English"]["fileRaw"] = "";
	$fieldLabelscensor_report["English"]["fileMD5"] = "MD5";
	$fieldToolTipscensor_report["English"]["fileMD5"] = "";
	$placeHolderscensor_report["English"]["fileMD5"] = "";
	$fieldLabelscensor_report["English"]["censorApproveTime"] = "Censor Approve Time";
	$fieldToolTipscensor_report["English"]["censorApproveTime"] = "";
	$placeHolderscensor_report["English"]["censorApproveTime"] = "";
	$fieldLabelscensor_report["English"]["censorUsername"] = "Censor Username";
	$fieldToolTipscensor_report["English"]["censorUsername"] = "";
	$placeHolderscensor_report["English"]["censorUsername"] = "";
	$fieldLabelscensor_report["English"]["censoReson"] = "Censo Reson";
	$fieldToolTipscensor_report["English"]["censoReson"] = "";
	$placeHolderscensor_report["English"]["censoReson"] = "";
	$fieldLabelscensor_report["English"]["censorStatus"] = "Censor Status";
	$fieldToolTipscensor_report["English"]["censorStatus"] = "";
	$placeHolderscensor_report["English"]["censorStatus"] = "";
	$fieldLabelscensor_report["English"]["entryUserName"] = "Entry User Name";
	$fieldToolTipscensor_report["English"]["entryUserName"] = "";
	$placeHolderscensor_report["English"]["entryUserName"] = "";
	$fieldLabelscensor_report["English"]["entryTime"] = "Entry Time";
	$fieldToolTipscensor_report["English"]["entryTime"] = "";
	$placeHolderscensor_report["English"]["entryTime"] = "";
	$fieldLabelscensor_report["English"]["filedate"] = "Filedate";
	$fieldToolTipscensor_report["English"]["filedate"] = "";
	$placeHolderscensor_report["English"]["filedate"] = "";
	$fieldLabelscensor_report["English"]["filePath"] = "File Path";
	$fieldToolTipscensor_report["English"]["filePath"] = "";
	$placeHolderscensor_report["English"]["filePath"] = "";
	$fieldLabelscensor_report["English"]["fileStatus"] = "File Status";
	$fieldToolTipscensor_report["English"]["fileStatus"] = "";
	$placeHolderscensor_report["English"]["fileStatus"] = "";
	$fieldLabelscensor_report["English"]["playlistID"] = "Playlist ID";
	$fieldToolTipscensor_report["English"]["playlistID"] = "";
	$placeHolderscensor_report["English"]["playlistID"] = "";
	if (count($fieldToolTipscensor_report["English"]))
		$tdatacensor_report[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelscensor_report["Thai"] = array();
	$fieldToolTipscensor_report["Thai"] = array();
	$placeHolderscensor_report["Thai"] = array();
	$pageTitlescensor_report["Thai"] = array();
	$fieldLabelscensor_report["Thai"]["id"] = "ID";
	$fieldToolTipscensor_report["Thai"]["id"] = "";
	$placeHolderscensor_report["Thai"]["id"] = "";
	$fieldLabelscensor_report["Thai"]["fileNo"] = "หมายเลขไฟล์";
	$fieldToolTipscensor_report["Thai"]["fileNo"] = "";
	$placeHolderscensor_report["Thai"]["fileNo"] = "";
	$fieldLabelscensor_report["Thai"]["fileName"] = "ชื่อไพล์";
	$fieldToolTipscensor_report["Thai"]["fileName"] = "";
	$placeHolderscensor_report["Thai"]["fileName"] = "";
	$fieldLabelscensor_report["Thai"]["fileType"] = "ประเภทไฟล์";
	$fieldToolTipscensor_report["Thai"]["fileType"] = "";
	$placeHolderscensor_report["Thai"]["fileType"] = "";
	$fieldLabelscensor_report["Thai"]["fileDuration"] = "ระยะเวลาไฟล์";
	$fieldToolTipscensor_report["Thai"]["fileDuration"] = "";
	$placeHolderscensor_report["Thai"]["fileDuration"] = "";
	$fieldLabelscensor_report["Thai"]["fileSubject"] = "ชื่อวิชา";
	$fieldToolTipscensor_report["Thai"]["fileSubject"] = "";
	$placeHolderscensor_report["Thai"]["fileSubject"] = "";
	$fieldLabelscensor_report["Thai"]["fileTitle"] = "หัวข้อวิชา";
	$fieldToolTipscensor_report["Thai"]["fileTitle"] = "";
	$placeHolderscensor_report["Thai"]["fileTitle"] = "";
	$fieldLabelscensor_report["Thai"]["fileClassLevel"] = "ระดับการศึกษา";
	$fieldToolTipscensor_report["Thai"]["fileClassLevel"] = "";
	$placeHolderscensor_report["Thai"]["fileClassLevel"] = "";
	$fieldLabelscensor_report["Thai"]["fileTeacherName"] = "อาจารย์ผู้สอน";
	$fieldToolTipscensor_report["Thai"]["fileTeacherName"] = "";
	$placeHolderscensor_report["Thai"]["fileTeacherName"] = "";
	$fieldLabelscensor_report["Thai"]["fileTeacherInfo"] = "รายละเอียดผู้สอน";
	$fieldToolTipscensor_report["Thai"]["fileTeacherInfo"] = "";
	$placeHolderscensor_report["Thai"]["fileTeacherInfo"] = "";
	$fieldLabelscensor_report["Thai"]["fileRaw"] = "ไฟล์";
	$fieldToolTipscensor_report["Thai"]["fileRaw"] = "";
	$placeHolderscensor_report["Thai"]["fileRaw"] = "";
	$fieldLabelscensor_report["Thai"]["fileMD5"] = "MD5";
	$fieldToolTipscensor_report["Thai"]["fileMD5"] = "";
	$placeHolderscensor_report["Thai"]["fileMD5"] = "";
	$fieldLabelscensor_report["Thai"]["censorApproveTime"] = "วันที่/เวลาแก้ไขอนุมัติเซ็นเซอร์";
	$fieldToolTipscensor_report["Thai"]["censorApproveTime"] = "";
	$placeHolderscensor_report["Thai"]["censorApproveTime"] = "";
	$fieldLabelscensor_report["Thai"]["censorUsername"] = "ผู้อนุมัติเซ็นเซอร์";
	$fieldToolTipscensor_report["Thai"]["censorUsername"] = "";
	$placeHolderscensor_report["Thai"]["censorUsername"] = "";
	$fieldLabelscensor_report["Thai"]["censoReson"] = "เหตุผลเซ็นเซอร์";
	$fieldToolTipscensor_report["Thai"]["censoReson"] = "";
	$placeHolderscensor_report["Thai"]["censoReson"] = "";
	$fieldLabelscensor_report["Thai"]["censorStatus"] = "สถานะเซ็นเซอร์";
	$fieldToolTipscensor_report["Thai"]["censorStatus"] = "";
	$placeHolderscensor_report["Thai"]["censorStatus"] = "";
	$fieldLabelscensor_report["Thai"]["entryUserName"] = "ผู้บันทึกรายการ";
	$fieldToolTipscensor_report["Thai"]["entryUserName"] = "";
	$placeHolderscensor_report["Thai"]["entryUserName"] = "";
	$fieldLabelscensor_report["Thai"]["entryTime"] = "วันที่/เวลาบันทึกรายการ";
	$fieldToolTipscensor_report["Thai"]["entryTime"] = "";
	$placeHolderscensor_report["Thai"]["entryTime"] = "";
	$fieldLabelscensor_report["Thai"]["filedate"] = "Filedate";
	$fieldToolTipscensor_report["Thai"]["filedate"] = "";
	$placeHolderscensor_report["Thai"]["filedate"] = "";
	$fieldLabelscensor_report["Thai"]["filePath"] = "File Path";
	$fieldToolTipscensor_report["Thai"]["filePath"] = "";
	$placeHolderscensor_report["Thai"]["filePath"] = "";
	$fieldLabelscensor_report["Thai"]["fileStatus"] = "File Status";
	$fieldToolTipscensor_report["Thai"]["fileStatus"] = "";
	$placeHolderscensor_report["Thai"]["fileStatus"] = "";
	$fieldLabelscensor_report["Thai"]["playlistID"] = "Playlist ID";
	$fieldToolTipscensor_report["Thai"]["playlistID"] = "";
	$placeHolderscensor_report["Thai"]["playlistID"] = "";
	if (count($fieldToolTipscensor_report["Thai"]))
		$tdatacensor_report[".isUseToolTips"] = true;
}


	$tdatacensor_report[".NCSearch"] = true;



$tdatacensor_report[".shortTableName"] = "censor_report";
$tdatacensor_report[".nSecOptions"] = 0;

$tdatacensor_report[".mainTableOwnerID"] = "";
$tdatacensor_report[".entityType"] = 2;
$tdatacensor_report[".connId"] = "mc_at_192_168_1_111";


$tdatacensor_report[".strOriginalTableName"] = "mediaInfo";

	



$tdatacensor_report[".showAddInPopup"] = false;

$tdatacensor_report[".showEditInPopup"] = false;

$tdatacensor_report[".showViewInPopup"] = false;

$tdatacensor_report[".listAjax"] = false;
//	temporary
//$tdatacensor_report[".listAjax"] = false;

	$tdatacensor_report[".audit"] = false;

	$tdatacensor_report[".locking"] = false;


$pages = $tdatacensor_report[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacensor_report[".edit"] = true;
	$tdatacensor_report[".afterEditAction"] = 1;
	$tdatacensor_report[".closePopupAfterEdit"] = 1;
	$tdatacensor_report[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacensor_report[".add"] = true;
$tdatacensor_report[".afterAddAction"] = 1;
$tdatacensor_report[".closePopupAfterAdd"] = 1;
$tdatacensor_report[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacensor_report[".list"] = true;
}



$tdatacensor_report[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacensor_report[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacensor_report[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacensor_report[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacensor_report[".printFriendly"] = true;
}



$tdatacensor_report[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacensor_report[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacensor_report[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacensor_report[".isUseAjaxSuggest"] = true;




			

$tdatacensor_report[".ajaxCodeSnippetAdded"] = false;

$tdatacensor_report[".buttonsAdded"] = false;

$tdatacensor_report[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacensor_report[".isUseTimeForSearch"] = false;


$tdatacensor_report[".badgeColor"] = "E8926F";


$tdatacensor_report[".allSearchFields"] = array();
$tdatacensor_report[".filterFields"] = array();
$tdatacensor_report[".requiredSearchFields"] = array();

$tdatacensor_report[".googleLikeFields"] = array();
$tdatacensor_report[".googleLikeFields"][] = "censorApproveTime";
$tdatacensor_report[".googleLikeFields"][] = "censoReson";
$tdatacensor_report[".googleLikeFields"][] = "censorStatus";
$tdatacensor_report[".googleLikeFields"][] = "censorUsername";
$tdatacensor_report[".googleLikeFields"][] = "entryTime";
$tdatacensor_report[".googleLikeFields"][] = "entryUserName";
$tdatacensor_report[".googleLikeFields"][] = "fileClassLevel";
$tdatacensor_report[".googleLikeFields"][] = "filedate";
$tdatacensor_report[".googleLikeFields"][] = "fileDuration";
$tdatacensor_report[".googleLikeFields"][] = "fileMD5";
$tdatacensor_report[".googleLikeFields"][] = "fileName";
$tdatacensor_report[".googleLikeFields"][] = "fileNo";
$tdatacensor_report[".googleLikeFields"][] = "filePath";
$tdatacensor_report[".googleLikeFields"][] = "fileRaw";
$tdatacensor_report[".googleLikeFields"][] = "fileStatus";
$tdatacensor_report[".googleLikeFields"][] = "fileSubject";
$tdatacensor_report[".googleLikeFields"][] = "fileTeacherInfo";
$tdatacensor_report[".googleLikeFields"][] = "fileTeacherName";
$tdatacensor_report[".googleLikeFields"][] = "fileTitle";
$tdatacensor_report[".googleLikeFields"][] = "fileType";
$tdatacensor_report[".googleLikeFields"][] = "id";
$tdatacensor_report[".googleLikeFields"][] = "playlistID";



$tdatacensor_report[".tableType"] = "report";

$tdatacensor_report[".printerPageOrientation"] = 0;
$tdatacensor_report[".nPrinterPageScale"] = 100;

$tdatacensor_report[".nPrinterSplitRecords"] = 40;

$tdatacensor_report[".geocodingEnabled"] = false;

//report settings

$tdatacensor_report[".reportPrintGroupsPerPage"] = 3;
$tdatacensor_report[".reportPrintRecordsPerPage"] = 40;

$tdatacensor_report[".pageSizeGroups"] = 5;
$tdatacensor_report[".pageSizeRecords"] = 20;


//end of report settings










$tstrOrderBy = "";
$tdatacensor_report[".strOrderBy"] = $tstrOrderBy;

$tdatacensor_report[".orderindexes"] = array();


$tdatacensor_report[".sqlHead"] = "SELECT censorApproveTime,  	censoReson,  	censorStatus,  	censorUsername,  	entryTime,  	entryUserName,  	fileClassLevel,  	filedate,  	fileDuration,  	fileMD5,  	fileName,  	fileNo,  	filePath,  	fileRaw,  	fileStatus,  	fileSubject,  	fileTeacherInfo,  	fileTeacherName,  	fileTitle,  	fileType,  	id,  	playlistID";
$tdatacensor_report[".sqlFrom"] = "FROM mediaInfo";
$tdatacensor_report[".sqlWhereExpr"] = "";
$tdatacensor_report[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacensor_report[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacensor_report[".arrGroupsPerPage"] = $arrGPP;

$tdatacensor_report[".highlightSearchResults"] = true;

$tableKeyscensor_report = array();
$tableKeyscensor_report[] = "id";
$tdatacensor_report[".Keys"] = $tableKeyscensor_report;


$tdatacensor_report[".hideMobileList"] = array();




//	censorApproveTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "censorApproveTime";
	$fdata["GoodName"] = "censorApproveTime";
	$fdata["ownerTable"] = "mediaInfo";
	$fdata["Label"] = GetFieldLabel("Censor_Report","censorApproveTime");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "censorApproveTime";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "censorApproveTime";

	
	
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

		$edata["ShowTime"] = true;

		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 100;

	
	
	
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


	$tdatacensor_report["censorApproveTime"] = $fdata;
		$tdatacensor_report[".searchableFields"][] = "censorApproveTime";
//	censoReson
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "censoReson";
	$fdata["GoodName"] = "censoReson";
	$fdata["ownerTable"] = "mediaInfo";
	$fdata["Label"] = GetFieldLabel("Censor_Report","censoReson");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "censoReson";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "censoReson";

	
	
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


	$tdatacensor_report["censoReson"] = $fdata;
		$tdatacensor_report[".searchableFields"][] = "censoReson";
//	censorStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "censorStatus";
	$fdata["GoodName"] = "censorStatus";
	$fdata["ownerTable"] = "mediaInfo";
	$fdata["Label"] = GetFieldLabel("Censor_Report","censorStatus");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "censorStatus";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "censorStatus";

	
	
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
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "PASS";
	$edata["LookupValues"][] = "REJECT";
	$edata["LookupValues"][] = "UNCENSOR";

	
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


	$tdatacensor_report["censorStatus"] = $fdata;
		$tdatacensor_report[".searchableFields"][] = "censorStatus";
//	censorUsername
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "censorUsername";
	$fdata["GoodName"] = "censorUsername";
	$fdata["ownerTable"] = "mediaInfo";
	$fdata["Label"] = GetFieldLabel("Censor_Report","censorUsername");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "censorUsername";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "censorUsername";

	
	
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


	$tdatacensor_report["censorUsername"] = $fdata;
		$tdatacensor_report[".searchableFields"][] = "censorUsername";
//	entryTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "entryTime";
	$fdata["GoodName"] = "entryTime";
	$fdata["ownerTable"] = "mediaInfo";
	$fdata["Label"] = GetFieldLabel("Censor_Report","entryTime");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "entryTime";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "entryTime";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Datetime");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
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


	$tdatacensor_report["entryTime"] = $fdata;
		$tdatacensor_report[".searchableFields"][] = "entryTime";
//	entryUserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "entryUserName";
	$fdata["GoodName"] = "entryUserName";
	$fdata["ownerTable"] = "mediaInfo";
	$fdata["Label"] = GetFieldLabel("Censor_Report","entryUserName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "entryUserName";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "entryUserName";

	
	
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


	$tdatacensor_report["entryUserName"] = $fdata;
		$tdatacensor_report[".searchableFields"][] = "entryUserName";
//	fileClassLevel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "fileClassLevel";
	$fdata["GoodName"] = "fileClassLevel";
	$fdata["ownerTable"] = "mediaInfo";
	$fdata["Label"] = GetFieldLabel("Censor_Report","fileClassLevel");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "fileClassLevel";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fileClassLevel";

	
	
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
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "levelName";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "levelName";

	

	
	$edata["LookupOrderBy"] = "levelName";

		$edata["LookupDesc"] = true;

	
	
	

	
	
	
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


	$tdatacensor_report["fileClassLevel"] = $fdata;
		$tdatacensor_report[".searchableFields"][] = "fileClassLevel";
//	filedate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "filedate";
	$fdata["GoodName"] = "filedate";
	$fdata["ownerTable"] = "mediaInfo";
	$fdata["Label"] = GetFieldLabel("Censor_Report","filedate");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "filedate";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "filedate";

	
	
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


	$tdatacensor_report["filedate"] = $fdata;
		$tdatacensor_report[".searchableFields"][] = "filedate";
//	fileDuration
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "fileDuration";
	$fdata["GoodName"] = "fileDuration";
	$fdata["ownerTable"] = "mediaInfo";
	$fdata["Label"] = GetFieldLabel("Censor_Report","fileDuration");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "fileDuration";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fileDuration";

	
	
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


	$tdatacensor_report["fileDuration"] = $fdata;
		$tdatacensor_report[".searchableFields"][] = "fileDuration";
//	fileMD5
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "fileMD5";
	$fdata["GoodName"] = "fileMD5";
	$fdata["ownerTable"] = "mediaInfo";
	$fdata["Label"] = GetFieldLabel("Censor_Report","fileMD5");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "fileMD5";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fileMD5";

	
	
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


	$tdatacensor_report["fileMD5"] = $fdata;
		$tdatacensor_report[".searchableFields"][] = "fileMD5";
//	fileName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "fileName";
	$fdata["GoodName"] = "fileName";
	$fdata["ownerTable"] = "mediaInfo";
	$fdata["Label"] = GetFieldLabel("Censor_Report","fileName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "fileName";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fileName";

	
	
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


	$tdatacensor_report["fileName"] = $fdata;
		$tdatacensor_report[".searchableFields"][] = "fileName";
//	fileNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "fileNo";
	$fdata["GoodName"] = "fileNo";
	$fdata["ownerTable"] = "mediaInfo";
	$fdata["Label"] = GetFieldLabel("Censor_Report","fileNo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "fileNo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fileNo";

	
	
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


	$tdatacensor_report["fileNo"] = $fdata;
		$tdatacensor_report[".searchableFields"][] = "fileNo";
//	filePath
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "filePath";
	$fdata["GoodName"] = "filePath";
	$fdata["ownerTable"] = "mediaInfo";
	$fdata["Label"] = GetFieldLabel("Censor_Report","filePath");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "filePath";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "filePath";

	
	
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


	$tdatacensor_report["filePath"] = $fdata;
		$tdatacensor_report[".searchableFields"][] = "filePath";
//	fileRaw
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "fileRaw";
	$fdata["GoodName"] = "fileRaw";
	$fdata["ownerTable"] = "mediaInfo";
	$fdata["Label"] = GetFieldLabel("Censor_Report","fileRaw");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "fileRaw";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fileRaw";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Document Download");

	
	
	
						$vdata["ShowFileSize"] = true;
			$vdata["ShowIcon"] = true;
		
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Document upload");

	
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


	$tdatacensor_report["fileRaw"] = $fdata;
		$tdatacensor_report[".searchableFields"][] = "fileRaw";
//	fileStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "fileStatus";
	$fdata["GoodName"] = "fileStatus";
	$fdata["ownerTable"] = "mediaInfo";
	$fdata["Label"] = GetFieldLabel("Censor_Report","fileStatus");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "fileStatus";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fileStatus";

	
	
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


	$tdatacensor_report["fileStatus"] = $fdata;
		$tdatacensor_report[".searchableFields"][] = "fileStatus";
//	fileSubject
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "fileSubject";
	$fdata["GoodName"] = "fileSubject";
	$fdata["ownerTable"] = "mediaInfo";
	$fdata["Label"] = GetFieldLabel("Censor_Report","fileSubject");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "fileSubject";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fileSubject";

	
	
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


	$tdatacensor_report["fileSubject"] = $fdata;
		$tdatacensor_report[".searchableFields"][] = "fileSubject";
//	fileTeacherInfo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "fileTeacherInfo";
	$fdata["GoodName"] = "fileTeacherInfo";
	$fdata["ownerTable"] = "mediaInfo";
	$fdata["Label"] = GetFieldLabel("Censor_Report","fileTeacherInfo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "fileTeacherInfo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fileTeacherInfo";

	
	
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


	$tdatacensor_report["fileTeacherInfo"] = $fdata;
		$tdatacensor_report[".searchableFields"][] = "fileTeacherInfo";
//	fileTeacherName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "fileTeacherName";
	$fdata["GoodName"] = "fileTeacherName";
	$fdata["ownerTable"] = "mediaInfo";
	$fdata["Label"] = GetFieldLabel("Censor_Report","fileTeacherName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "fileTeacherName";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fileTeacherName";

	
	
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
	$edata["LookupTable"] = "teacher";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "teacherName";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "teacherName";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
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


	$tdatacensor_report["fileTeacherName"] = $fdata;
		$tdatacensor_report[".searchableFields"][] = "fileTeacherName";
//	fileTitle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "fileTitle";
	$fdata["GoodName"] = "fileTitle";
	$fdata["ownerTable"] = "mediaInfo";
	$fdata["Label"] = GetFieldLabel("Censor_Report","fileTitle");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "fileTitle";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fileTitle";

	
	
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


	$tdatacensor_report["fileTitle"] = $fdata;
		$tdatacensor_report[".searchableFields"][] = "fileTitle";
//	fileType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "fileType";
	$fdata["GoodName"] = "fileType";
	$fdata["ownerTable"] = "mediaInfo";
	$fdata["Label"] = GetFieldLabel("Censor_Report","fileType");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "fileType";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fileType";

	
	
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


	$tdatacensor_report["fileType"] = $fdata;
		$tdatacensor_report[".searchableFields"][] = "fileType";
//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mediaInfo";
	$fdata["Label"] = GetFieldLabel("Censor_Report","id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
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


	$tdatacensor_report["id"] = $fdata;
		$tdatacensor_report[".searchableFields"][] = "id";
//	playlistID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "playlistID";
	$fdata["GoodName"] = "playlistID";
	$fdata["ownerTable"] = "mediaInfo";
	$fdata["Label"] = GetFieldLabel("Censor_Report","playlistID");
	$fdata["FieldType"] = 13;


	
	
			

		$fdata["strField"] = "playlistID";

		$fdata["sourceSingle"] = "playlistID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "playlistID";

	
	
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


	$tdatacensor_report["playlistID"] = $fdata;
		$tdatacensor_report[".searchableFields"][] = "playlistID";


$tables_data["Censor Report"]=&$tdatacensor_report;
$field_labels["Censor_Report"] = &$fieldLabelscensor_report;
$fieldToolTips["Censor_Report"] = &$fieldToolTipscensor_report;
$placeHolders["Censor_Report"] = &$placeHolderscensor_report;
$page_titles["Censor_Report"] = &$pageTitlescensor_report;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Censor Report"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Censor Report"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_censor_report()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "censorApproveTime,  	censoReson,  	censorStatus,  	censorUsername,  	entryTime,  	entryUserName,  	fileClassLevel,  	filedate,  	fileDuration,  	fileMD5,  	fileName,  	fileNo,  	filePath,  	fileRaw,  	fileStatus,  	fileSubject,  	fileTeacherInfo,  	fileTeacherName,  	fileTitle,  	fileType,  	id,  	playlistID";
$proto0["m_strFrom"] = "FROM mediaInfo";
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
	"m_strName" => "censorApproveTime",
	"m_strTable" => "mediaInfo",
	"m_srcTableName" => "Censor Report"
));

$proto6["m_sql"] = "censorApproveTime";
$proto6["m_srcTableName"] = "Censor Report";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "censoReson",
	"m_strTable" => "mediaInfo",
	"m_srcTableName" => "Censor Report"
));

$proto8["m_sql"] = "censoReson";
$proto8["m_srcTableName"] = "Censor Report";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "censorStatus",
	"m_strTable" => "mediaInfo",
	"m_srcTableName" => "Censor Report"
));

$proto10["m_sql"] = "censorStatus";
$proto10["m_srcTableName"] = "Censor Report";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "censorUsername",
	"m_strTable" => "mediaInfo",
	"m_srcTableName" => "Censor Report"
));

$proto12["m_sql"] = "censorUsername";
$proto12["m_srcTableName"] = "Censor Report";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "entryTime",
	"m_strTable" => "mediaInfo",
	"m_srcTableName" => "Censor Report"
));

$proto14["m_sql"] = "entryTime";
$proto14["m_srcTableName"] = "Censor Report";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "entryUserName",
	"m_strTable" => "mediaInfo",
	"m_srcTableName" => "Censor Report"
));

$proto16["m_sql"] = "entryUserName";
$proto16["m_srcTableName"] = "Censor Report";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "fileClassLevel",
	"m_strTable" => "mediaInfo",
	"m_srcTableName" => "Censor Report"
));

$proto18["m_sql"] = "fileClassLevel";
$proto18["m_srcTableName"] = "Censor Report";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "filedate",
	"m_strTable" => "mediaInfo",
	"m_srcTableName" => "Censor Report"
));

$proto20["m_sql"] = "filedate";
$proto20["m_srcTableName"] = "Censor Report";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "fileDuration",
	"m_strTable" => "mediaInfo",
	"m_srcTableName" => "Censor Report"
));

$proto22["m_sql"] = "fileDuration";
$proto22["m_srcTableName"] = "Censor Report";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "fileMD5",
	"m_strTable" => "mediaInfo",
	"m_srcTableName" => "Censor Report"
));

$proto24["m_sql"] = "fileMD5";
$proto24["m_srcTableName"] = "Censor Report";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "fileName",
	"m_strTable" => "mediaInfo",
	"m_srcTableName" => "Censor Report"
));

$proto26["m_sql"] = "fileName";
$proto26["m_srcTableName"] = "Censor Report";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "fileNo",
	"m_strTable" => "mediaInfo",
	"m_srcTableName" => "Censor Report"
));

$proto28["m_sql"] = "fileNo";
$proto28["m_srcTableName"] = "Censor Report";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "filePath",
	"m_strTable" => "mediaInfo",
	"m_srcTableName" => "Censor Report"
));

$proto30["m_sql"] = "filePath";
$proto30["m_srcTableName"] = "Censor Report";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "fileRaw",
	"m_strTable" => "mediaInfo",
	"m_srcTableName" => "Censor Report"
));

$proto32["m_sql"] = "fileRaw";
$proto32["m_srcTableName"] = "Censor Report";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "fileStatus",
	"m_strTable" => "mediaInfo",
	"m_srcTableName" => "Censor Report"
));

$proto34["m_sql"] = "fileStatus";
$proto34["m_srcTableName"] = "Censor Report";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "fileSubject",
	"m_strTable" => "mediaInfo",
	"m_srcTableName" => "Censor Report"
));

$proto36["m_sql"] = "fileSubject";
$proto36["m_srcTableName"] = "Censor Report";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "fileTeacherInfo",
	"m_strTable" => "mediaInfo",
	"m_srcTableName" => "Censor Report"
));

$proto38["m_sql"] = "fileTeacherInfo";
$proto38["m_srcTableName"] = "Censor Report";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "fileTeacherName",
	"m_strTable" => "mediaInfo",
	"m_srcTableName" => "Censor Report"
));

$proto40["m_sql"] = "fileTeacherName";
$proto40["m_srcTableName"] = "Censor Report";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "fileTitle",
	"m_strTable" => "mediaInfo",
	"m_srcTableName" => "Censor Report"
));

$proto42["m_sql"] = "fileTitle";
$proto42["m_srcTableName"] = "Censor Report";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "fileType",
	"m_strTable" => "mediaInfo",
	"m_srcTableName" => "Censor Report"
));

$proto44["m_sql"] = "fileType";
$proto44["m_srcTableName"] = "Censor Report";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "mediaInfo",
	"m_srcTableName" => "Censor Report"
));

$proto46["m_sql"] = "id";
$proto46["m_srcTableName"] = "Censor Report";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "playlistID",
	"m_strTable" => "mediaInfo",
	"m_srcTableName" => "Censor Report"
));

$proto48["m_sql"] = "playlistID";
$proto48["m_srcTableName"] = "Censor Report";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto50=array();
$proto50["m_link"] = "SQLL_MAIN";
			$proto51=array();
$proto51["m_strName"] = "mediaInfo";
$proto51["m_srcTableName"] = "Censor Report";
$proto51["m_columns"] = array();
$proto51["m_columns"][] = "censorApproveTime";
$proto51["m_columns"][] = "censoReson";
$proto51["m_columns"][] = "censorStatus";
$proto51["m_columns"][] = "censorUsername";
$proto51["m_columns"][] = "entryTime";
$proto51["m_columns"][] = "entryUserName";
$proto51["m_columns"][] = "fileClassLevel";
$proto51["m_columns"][] = "filedate";
$proto51["m_columns"][] = "fileDuration";
$proto51["m_columns"][] = "fileMD5";
$proto51["m_columns"][] = "fileName";
$proto51["m_columns"][] = "fileNo";
$proto51["m_columns"][] = "filePath";
$proto51["m_columns"][] = "fileRaw";
$proto51["m_columns"][] = "fileStatus";
$proto51["m_columns"][] = "fileSubject";
$proto51["m_columns"][] = "fileTeacherInfo";
$proto51["m_columns"][] = "fileTeacherName";
$proto51["m_columns"][] = "fileTitle";
$proto51["m_columns"][] = "fileType";
$proto51["m_columns"][] = "id";
$proto51["m_columns"][] = "playlistID";
$obj = new SQLTable($proto51);

$proto50["m_table"] = $obj;
$proto50["m_sql"] = "mediaInfo";
$proto50["m_alias"] = "";
$proto50["m_srcTableName"] = "Censor Report";
$proto52=array();
$proto52["m_sql"] = "";
$proto52["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto52["m_column"]=$obj;
$proto52["m_contained"] = array();
$proto52["m_strCase"] = "";
$proto52["m_havingmode"] = false;
$proto52["m_inBrackets"] = false;
$proto52["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto52);

$proto50["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto50);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Censor Report";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_censor_report = createSqlQuery_censor_report();


	
		;

																						

$tdatacensor_report[".sqlquery"] = $queryData_censor_report;



$tableEvents["Censor Report"] = new eventsBase;
$tdatacensor_report[".hasEvents"] = false;

?>