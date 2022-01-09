<?php
$tdatamediainfo = array();
$tdatamediainfo[".searchableFields"] = array();
$tdatamediainfo[".ShortName"] = "mediainfo";
$tdatamediainfo[".OwnerID"] = "";
$tdatamediainfo[".OriginalTable"] = "mediaInfo";


$tdatamediainfo[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"MediaInfo\",\"MediaInfo_popup\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatamediainfo[".originalPagesByType"] = $tdatamediainfo[".pagesByType"];
$tdatamediainfo[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"MediaInfo\",\"MediaInfo_popup\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatamediainfo[".originalPages"] = $tdatamediainfo[".pages"];
$tdatamediainfo[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"MediaInfo\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatamediainfo[".originalDefaultPages"] = $tdatamediainfo[".defaultPages"];

//	field labels
$fieldLabelsmediainfo = array();
$fieldToolTipsmediainfo = array();
$pageTitlesmediainfo = array();
$placeHoldersmediainfo = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmediainfo["English"] = array();
	$fieldToolTipsmediainfo["English"] = array();
	$placeHoldersmediainfo["English"] = array();
	$pageTitlesmediainfo["English"] = array();
	$fieldLabelsmediainfo["English"]["id"] = "ID";
	$fieldToolTipsmediainfo["English"]["id"] = "";
	$placeHoldersmediainfo["English"]["id"] = "";
	$fieldLabelsmediainfo["English"]["fileNo"] = "File No";
	$fieldToolTipsmediainfo["English"]["fileNo"] = "";
	$placeHoldersmediainfo["English"]["fileNo"] = "";
	$fieldLabelsmediainfo["English"]["fileName"] = "File Name";
	$fieldToolTipsmediainfo["English"]["fileName"] = "";
	$placeHoldersmediainfo["English"]["fileName"] = "";
	$fieldLabelsmediainfo["English"]["fileType"] = "Type";
	$fieldToolTipsmediainfo["English"]["fileType"] = "";
	$placeHoldersmediainfo["English"]["fileType"] = "";
	$fieldLabelsmediainfo["English"]["fileSubject"] = "Subject";
	$fieldToolTipsmediainfo["English"]["fileSubject"] = "";
	$placeHoldersmediainfo["English"]["fileSubject"] = "";
	$fieldLabelsmediainfo["English"]["fileTitle"] = "Title";
	$fieldToolTipsmediainfo["English"]["fileTitle"] = "";
	$placeHoldersmediainfo["English"]["fileTitle"] = "";
	$fieldLabelsmediainfo["English"]["fileClassLevel"] = "Class Level";
	$fieldToolTipsmediainfo["English"]["fileClassLevel"] = "";
	$placeHoldersmediainfo["English"]["fileClassLevel"] = "";
	$fieldLabelsmediainfo["English"]["fileTeacherName"] = "Teacher Name";
	$fieldToolTipsmediainfo["English"]["fileTeacherName"] = "";
	$placeHoldersmediainfo["English"]["fileTeacherName"] = "";
	$fieldLabelsmediainfo["English"]["censorApproveTime"] = "Censor Approve Time";
	$fieldToolTipsmediainfo["English"]["censorApproveTime"] = "";
	$placeHoldersmediainfo["English"]["censorApproveTime"] = "";
	$fieldLabelsmediainfo["English"]["censorUsername"] = "Censor Username";
	$fieldToolTipsmediainfo["English"]["censorUsername"] = "";
	$placeHoldersmediainfo["English"]["censorUsername"] = "";
	$fieldLabelsmediainfo["English"]["censoReson"] = "Censo Reson";
	$fieldToolTipsmediainfo["English"]["censoReson"] = "";
	$placeHoldersmediainfo["English"]["censoReson"] = "";
	$fieldLabelsmediainfo["English"]["censorStatus"] = "Censor Status";
	$fieldToolTipsmediainfo["English"]["censorStatus"] = "";
	$placeHoldersmediainfo["English"]["censorStatus"] = "";
	$fieldLabelsmediainfo["English"]["entryUserName"] = "Ownwer";
	$fieldToolTipsmediainfo["English"]["entryUserName"] = "";
	$placeHoldersmediainfo["English"]["entryUserName"] = "";
	$fieldLabelsmediainfo["English"]["entryTime"] = "Entry Time";
	$fieldToolTipsmediainfo["English"]["entryTime"] = "";
	$placeHoldersmediainfo["English"]["entryTime"] = "";
	$fieldLabelsmediainfo["English"]["fileRaw"] = "File Raw";
	$fieldToolTipsmediainfo["English"]["fileRaw"] = "";
	$placeHoldersmediainfo["English"]["fileRaw"] = "";
	$fieldLabelsmediainfo["English"]["fileDuration"] = "File Duration";
	$fieldToolTipsmediainfo["English"]["fileDuration"] = "";
	$placeHoldersmediainfo["English"]["fileDuration"] = "";
	$fieldLabelsmediainfo["English"]["fileMD5"] = "Finger Print (MD5)";
	$fieldToolTipsmediainfo["English"]["fileMD5"] = "";
	$placeHoldersmediainfo["English"]["fileMD5"] = "";
	$fieldLabelsmediainfo["English"]["fileTeacherInfo"] = "Teacher Info";
	$fieldToolTipsmediainfo["English"]["fileTeacherInfo"] = "";
	$placeHoldersmediainfo["English"]["fileTeacherInfo"] = "";
	$fieldLabelsmediainfo["English"]["filedate"] = "Filedate";
	$fieldToolTipsmediainfo["English"]["filedate"] = "";
	$placeHoldersmediainfo["English"]["filedate"] = "";
	$fieldLabelsmediainfo["English"]["filePath"] = "File Path";
	$fieldToolTipsmediainfo["English"]["filePath"] = "";
	$placeHoldersmediainfo["English"]["filePath"] = "";
	$fieldLabelsmediainfo["English"]["fileStatus"] = "File Status";
	$fieldToolTipsmediainfo["English"]["fileStatus"] = "";
	$placeHoldersmediainfo["English"]["fileStatus"] = "";
	if (count($fieldToolTipsmediainfo["English"]))
		$tdatamediainfo[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelsmediainfo["Thai"] = array();
	$fieldToolTipsmediainfo["Thai"] = array();
	$placeHoldersmediainfo["Thai"] = array();
	$pageTitlesmediainfo["Thai"] = array();
	$fieldLabelsmediainfo["Thai"]["id"] = "ID";
	$fieldToolTipsmediainfo["Thai"]["id"] = "";
	$placeHoldersmediainfo["Thai"]["id"] = "";
	$fieldLabelsmediainfo["Thai"]["fileNo"] = "หมายเลขไฟล์";
	$fieldToolTipsmediainfo["Thai"]["fileNo"] = "";
	$placeHoldersmediainfo["Thai"]["fileNo"] = "";
	$fieldLabelsmediainfo["Thai"]["fileName"] = "ชื่อไพล์";
	$fieldToolTipsmediainfo["Thai"]["fileName"] = "";
	$placeHoldersmediainfo["Thai"]["fileName"] = "";
	$fieldLabelsmediainfo["Thai"]["fileType"] = "ประเภทไฟล์";
	$fieldToolTipsmediainfo["Thai"]["fileType"] = "";
	$placeHoldersmediainfo["Thai"]["fileType"] = "";
	$fieldLabelsmediainfo["Thai"]["fileSubject"] = "ชื่อวิชา";
	$fieldToolTipsmediainfo["Thai"]["fileSubject"] = "";
	$placeHoldersmediainfo["Thai"]["fileSubject"] = "";
	$fieldLabelsmediainfo["Thai"]["fileTitle"] = "หัวข้อวิชา";
	$fieldToolTipsmediainfo["Thai"]["fileTitle"] = "";
	$placeHoldersmediainfo["Thai"]["fileTitle"] = "";
	$fieldLabelsmediainfo["Thai"]["fileClassLevel"] = "ระดับการศึกษา";
	$fieldToolTipsmediainfo["Thai"]["fileClassLevel"] = "";
	$placeHoldersmediainfo["Thai"]["fileClassLevel"] = "";
	$fieldLabelsmediainfo["Thai"]["fileTeacherName"] = "อาจารย์ผู้สอน";
	$fieldToolTipsmediainfo["Thai"]["fileTeacherName"] = "";
	$placeHoldersmediainfo["Thai"]["fileTeacherName"] = "";
	$fieldLabelsmediainfo["Thai"]["censorApproveTime"] = "วันที่/เวลาแก้ไขอนุมัติเซ็นเซอร์";
	$fieldToolTipsmediainfo["Thai"]["censorApproveTime"] = "";
	$placeHoldersmediainfo["Thai"]["censorApproveTime"] = "";
	$fieldLabelsmediainfo["Thai"]["censorUsername"] = "ผู้อนุมัติเซ็นเซอร์";
	$fieldToolTipsmediainfo["Thai"]["censorUsername"] = "";
	$placeHoldersmediainfo["Thai"]["censorUsername"] = "";
	$fieldLabelsmediainfo["Thai"]["censoReson"] = "เหตุผลเซ็นเซอร์";
	$fieldToolTipsmediainfo["Thai"]["censoReson"] = "";
	$placeHoldersmediainfo["Thai"]["censoReson"] = "";
	$fieldLabelsmediainfo["Thai"]["censorStatus"] = "สถานะเซ็นเซอร์";
	$fieldToolTipsmediainfo["Thai"]["censorStatus"] = "";
	$placeHoldersmediainfo["Thai"]["censorStatus"] = "";
	$fieldLabelsmediainfo["Thai"]["entryUserName"] = "ผู้บันทึกรายการ";
	$fieldToolTipsmediainfo["Thai"]["entryUserName"] = "";
	$placeHoldersmediainfo["Thai"]["entryUserName"] = "";
	$fieldLabelsmediainfo["Thai"]["entryTime"] = "วันที่/เวลาบันทึกรายการ";
	$fieldToolTipsmediainfo["Thai"]["entryTime"] = "";
	$placeHoldersmediainfo["Thai"]["entryTime"] = "";
	$fieldLabelsmediainfo["Thai"]["fileRaw"] = "ไฟล์";
	$fieldToolTipsmediainfo["Thai"]["fileRaw"] = "";
	$placeHoldersmediainfo["Thai"]["fileRaw"] = "";
	$fieldLabelsmediainfo["Thai"]["fileDuration"] = "ระยะเวลาไฟล์";
	$fieldToolTipsmediainfo["Thai"]["fileDuration"] = "";
	$placeHoldersmediainfo["Thai"]["fileDuration"] = "";
	$fieldLabelsmediainfo["Thai"]["fileMD5"] = "Finger Print (MD5)";
	$fieldToolTipsmediainfo["Thai"]["fileMD5"] = "";
	$placeHoldersmediainfo["Thai"]["fileMD5"] = "";
	$fieldLabelsmediainfo["Thai"]["fileTeacherInfo"] = "รายละเอียดผู้สอน";
	$fieldToolTipsmediainfo["Thai"]["fileTeacherInfo"] = "";
	$placeHoldersmediainfo["Thai"]["fileTeacherInfo"] = "";
	$fieldLabelsmediainfo["Thai"]["filedate"] = "วันที่ไฟล์";
	$fieldToolTipsmediainfo["Thai"]["filedate"] = "";
	$placeHoldersmediainfo["Thai"]["filedate"] = "";
	$fieldLabelsmediainfo["Thai"]["filePath"] = "ที่อยู่ไฟล์";
	$fieldToolTipsmediainfo["Thai"]["filePath"] = "";
	$placeHoldersmediainfo["Thai"]["filePath"] = "";
	$fieldLabelsmediainfo["Thai"]["fileStatus"] = "สถานะไฟล์";
	$fieldToolTipsmediainfo["Thai"]["fileStatus"] = "";
	$placeHoldersmediainfo["Thai"]["fileStatus"] = "";
	if (count($fieldToolTipsmediainfo["Thai"]))
		$tdatamediainfo[".isUseToolTips"] = true;
}


	$tdatamediainfo[".NCSearch"] = true;



$tdatamediainfo[".shortTableName"] = "mediainfo";
$tdatamediainfo[".nSecOptions"] = 0;

$tdatamediainfo[".mainTableOwnerID"] = "";
$tdatamediainfo[".entityType"] = 0;
$tdatamediainfo[".connId"] = "mc_at_192_168_1_111";


$tdatamediainfo[".strOriginalTableName"] = "mediaInfo";

	



$tdatamediainfo[".showAddInPopup"] = false;

$tdatamediainfo[".showEditInPopup"] = false;

$tdatamediainfo[".showViewInPopup"] = false;

$tdatamediainfo[".listAjax"] = false;
//	temporary
//$tdatamediainfo[".listAjax"] = false;

	$tdatamediainfo[".audit"] = true;

	$tdatamediainfo[".locking"] = false;


$pages = $tdatamediainfo[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatamediainfo[".edit"] = true;
	$tdatamediainfo[".afterEditAction"] = 1;
	$tdatamediainfo[".closePopupAfterEdit"] = 1;
	$tdatamediainfo[".afterEditActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_ADD] ) {
$tdatamediainfo[".add"] = true;
$tdatamediainfo[".afterAddAction"] = 1;
$tdatamediainfo[".closePopupAfterAdd"] = 1;
$tdatamediainfo[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatamediainfo[".list"] = true;
}



$tdatamediainfo[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatamediainfo[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatamediainfo[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatamediainfo[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatamediainfo[".printFriendly"] = true;
}



$tdatamediainfo[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatamediainfo[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatamediainfo[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatamediainfo[".isUseAjaxSuggest"] = true;

$tdatamediainfo[".rowHighlite"] = true;



			

$tdatamediainfo[".ajaxCodeSnippetAdded"] = false;

$tdatamediainfo[".buttonsAdded"] = false;

$tdatamediainfo[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamediainfo[".isUseTimeForSearch"] = true;


$tdatamediainfo[".badgeColor"] = "b22222";


$tdatamediainfo[".allSearchFields"] = array();
$tdatamediainfo[".filterFields"] = array();
$tdatamediainfo[".requiredSearchFields"] = array();

$tdatamediainfo[".googleLikeFields"] = array();
$tdatamediainfo[".googleLikeFields"][] = "id";
$tdatamediainfo[".googleLikeFields"][] = "fileNo";
$tdatamediainfo[".googleLikeFields"][] = "filedate";
$tdatamediainfo[".googleLikeFields"][] = "fileName";
$tdatamediainfo[".googleLikeFields"][] = "fileType";
$tdatamediainfo[".googleLikeFields"][] = "fileDuration";
$tdatamediainfo[".googleLikeFields"][] = "fileSubject";
$tdatamediainfo[".googleLikeFields"][] = "fileTitle";
$tdatamediainfo[".googleLikeFields"][] = "fileClassLevel";
$tdatamediainfo[".googleLikeFields"][] = "fileTeacherName";
$tdatamediainfo[".googleLikeFields"][] = "fileTeacherInfo";
$tdatamediainfo[".googleLikeFields"][] = "fileRaw";
$tdatamediainfo[".googleLikeFields"][] = "fileMD5";
$tdatamediainfo[".googleLikeFields"][] = "censorApproveTime";
$tdatamediainfo[".googleLikeFields"][] = "censorUsername";
$tdatamediainfo[".googleLikeFields"][] = "censoReson";
$tdatamediainfo[".googleLikeFields"][] = "censorStatus";
$tdatamediainfo[".googleLikeFields"][] = "fileStatus";
$tdatamediainfo[".googleLikeFields"][] = "filePath";
$tdatamediainfo[".googleLikeFields"][] = "entryUserName";
$tdatamediainfo[".googleLikeFields"][] = "entryTime";



$tdatamediainfo[".tableType"] = "list";

$tdatamediainfo[".printerPageOrientation"] = 0;
$tdatamediainfo[".nPrinterPageScale"] = 100;

$tdatamediainfo[".nPrinterSplitRecords"] = 40;

$tdatamediainfo[".geocodingEnabled"] = false;










$tdatamediainfo[".pageSize"] = 20;

$tdatamediainfo[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY fileNo DESC";
$tdatamediainfo[".strOrderBy"] = $tstrOrderBy;

$tdatamediainfo[".orderindexes"] = array();
	$tdatamediainfo[".orderindexes"][] = array(2, (0 ? "ASC" : "DESC"), "fileNo");



$tdatamediainfo[".sqlHead"] = "SELECT id, fileNo, filedate, fileName, fileType, fileDuration, fileSubject, fileTitle, fileClassLevel, fileTeacherName, fileTeacherInfo, fileRaw, fileMD5, censorApproveTime, censorUsername, censoReson, censorStatus, fileStatus, filePath, entryUserName, entryTime";
$tdatamediainfo[".sqlFrom"] = "FROM mediaInfo";
$tdatamediainfo[".sqlWhereExpr"] = "";
$tdatamediainfo[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamediainfo[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamediainfo[".arrGroupsPerPage"] = $arrGPP;

$tdatamediainfo[".highlightSearchResults"] = true;

$tableKeysmediainfo = array();
$tableKeysmediainfo[] = "id";
$tdatamediainfo[".Keys"] = $tableKeysmediainfo;


$tdatamediainfo[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mediaInfo";
	$fdata["Label"] = GetFieldLabel("mediaInfo","id");
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


	$tdatamediainfo["id"] = $fdata;
		$tdatamediainfo[".searchableFields"][] = "id";
//	fileNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "fileNo";
	$fdata["GoodName"] = "fileNo";
	$fdata["ownerTable"] = "mediaInfo";
	$fdata["Label"] = GetFieldLabel("mediaInfo","fileNo");
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


	$tdatamediainfo["fileNo"] = $fdata;
		$tdatamediainfo[".searchableFields"][] = "fileNo";
//	filedate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "filedate";
	$fdata["GoodName"] = "filedate";
	$fdata["ownerTable"] = "mediaInfo";
	$fdata["Label"] = GetFieldLabel("mediaInfo","filedate");
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

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

		$edata["ShowTime"] = true;

		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
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


	$tdatamediainfo["filedate"] = $fdata;
		$tdatamediainfo[".searchableFields"][] = "filedate";
//	fileName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "fileName";
	$fdata["GoodName"] = "fileName";
	$fdata["ownerTable"] = "mediaInfo";
	$fdata["Label"] = GetFieldLabel("mediaInfo","fileName");
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatamediainfo["fileName"] = $fdata;
		$tdatamediainfo[".searchableFields"][] = "fileName";
//	fileType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "fileType";
	$fdata["GoodName"] = "fileType";
	$fdata["ownerTable"] = "mediaInfo";
	$fdata["Label"] = GetFieldLabel("mediaInfo","fileType");
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatamediainfo["fileType"] = $fdata;
		$tdatamediainfo[".searchableFields"][] = "fileType";
//	fileDuration
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "fileDuration";
	$fdata["GoodName"] = "fileDuration";
	$fdata["ownerTable"] = "mediaInfo";
	$fdata["Label"] = GetFieldLabel("mediaInfo","fileDuration");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "fileDuration";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fileDuration";

	
	
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

	$edata = array("EditFormat" => "Time");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Time");
							
	
	//	End validation

	
			
				$hours = 24;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 1,
									  "hours" => $hours,
									  "minutes" => 1,
									  "showSeconds" => 1);

	
	
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


	$tdatamediainfo["fileDuration"] = $fdata;
		$tdatamediainfo[".searchableFields"][] = "fileDuration";
//	fileSubject
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "fileSubject";
	$fdata["GoodName"] = "fileSubject";
	$fdata["ownerTable"] = "mediaInfo";
	$fdata["Label"] = GetFieldLabel("mediaInfo","fileSubject");
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


	$tdatamediainfo["fileSubject"] = $fdata;
		$tdatamediainfo[".searchableFields"][] = "fileSubject";
//	fileTitle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "fileTitle";
	$fdata["GoodName"] = "fileTitle";
	$fdata["ownerTable"] = "mediaInfo";
	$fdata["Label"] = GetFieldLabel("mediaInfo","fileTitle");
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatamediainfo["fileTitle"] = $fdata;
		$tdatamediainfo[".searchableFields"][] = "fileTitle";
//	fileClassLevel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "fileClassLevel";
	$fdata["GoodName"] = "fileClassLevel";
	$fdata["ownerTable"] = "mediaInfo";
	$fdata["Label"] = GetFieldLabel("mediaInfo","fileClassLevel");
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


	$tdatamediainfo["fileClassLevel"] = $fdata;
		$tdatamediainfo[".searchableFields"][] = "fileClassLevel";
//	fileTeacherName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "fileTeacherName";
	$fdata["GoodName"] = "fileTeacherName";
	$fdata["ownerTable"] = "mediaInfo";
	$fdata["Label"] = GetFieldLabel("mediaInfo","fileTeacherName");
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

	$fdata["ViewFormats"]["view"] = $vdata;
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
		$fdata["filterTotalFields"] = "id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatamediainfo["fileTeacherName"] = $fdata;
		$tdatamediainfo[".searchableFields"][] = "fileTeacherName";
//	fileTeacherInfo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "fileTeacherInfo";
	$fdata["GoodName"] = "fileTeacherInfo";
	$fdata["ownerTable"] = "mediaInfo";
	$fdata["Label"] = GetFieldLabel("mediaInfo","fileTeacherInfo");
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatamediainfo["fileTeacherInfo"] = $fdata;
		$tdatamediainfo[".searchableFields"][] = "fileTeacherInfo";
//	fileRaw
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "fileRaw";
	$fdata["GoodName"] = "fileRaw";
	$fdata["ownerTable"] = "mediaInfo";
	$fdata["Label"] = GetFieldLabel("mediaInfo","fileRaw");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "fileRaw";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fileRaw";

		$fdata["DeleteAssociatedFile"] = true;

	
		$fdata["UploadCodeExpression"] = true;

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Document Download");

	
	
	
						$vdata["ShowFileSize"] = true;
			$vdata["ShowIcon"] = true;
		
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
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


	$tdatamediainfo["fileRaw"] = $fdata;
		$tdatamediainfo[".searchableFields"][] = "fileRaw";
//	fileMD5
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "fileMD5";
	$fdata["GoodName"] = "fileMD5";
	$fdata["ownerTable"] = "mediaInfo";
	$fdata["Label"] = GetFieldLabel("mediaInfo","fileMD5");
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


	$tdatamediainfo["fileMD5"] = $fdata;
		$tdatamediainfo[".searchableFields"][] = "fileMD5";
//	censorApproveTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "censorApproveTime";
	$fdata["GoodName"] = "censorApproveTime";
	$fdata["ownerTable"] = "mediaInfo";
	$fdata["Label"] = GetFieldLabel("mediaInfo","censorApproveTime");
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

	$fdata["ViewFormats"]["view"] = $vdata;
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


	$tdatamediainfo["censorApproveTime"] = $fdata;
		$tdatamediainfo[".searchableFields"][] = "censorApproveTime";
//	censorUsername
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "censorUsername";
	$fdata["GoodName"] = "censorUsername";
	$fdata["ownerTable"] = "mediaInfo";
	$fdata["Label"] = GetFieldLabel("mediaInfo","censorUsername");
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatamediainfo["censorUsername"] = $fdata;
		$tdatamediainfo[".searchableFields"][] = "censorUsername";
//	censoReson
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "censoReson";
	$fdata["GoodName"] = "censoReson";
	$fdata["ownerTable"] = "mediaInfo";
	$fdata["Label"] = GetFieldLabel("mediaInfo","censoReson");
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


	$tdatamediainfo["censoReson"] = $fdata;
		$tdatamediainfo[".searchableFields"][] = "censoReson";
//	censorStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "censorStatus";
	$fdata["GoodName"] = "censorStatus";
	$fdata["ownerTable"] = "mediaInfo";
	$fdata["Label"] = GetFieldLabel("mediaInfo","censorStatus");
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

	$fdata["ViewFormats"]["view"] = $vdata;
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


	$tdatamediainfo["censorStatus"] = $fdata;
		$tdatamediainfo[".searchableFields"][] = "censorStatus";
//	fileStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "fileStatus";
	$fdata["GoodName"] = "fileStatus";
	$fdata["ownerTable"] = "mediaInfo";
	$fdata["Label"] = GetFieldLabel("mediaInfo","fileStatus");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "fileStatus";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fileStatus";

	
	
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


	$tdatamediainfo["fileStatus"] = $fdata;
		$tdatamediainfo[".searchableFields"][] = "fileStatus";
//	filePath
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "filePath";
	$fdata["GoodName"] = "filePath";
	$fdata["ownerTable"] = "mediaInfo";
	$fdata["Label"] = GetFieldLabel("mediaInfo","filePath");
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatamediainfo["filePath"] = $fdata;
		$tdatamediainfo[".searchableFields"][] = "filePath";
//	entryUserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "entryUserName";
	$fdata["GoodName"] = "entryUserName";
	$fdata["ownerTable"] = "mediaInfo";
	$fdata["Label"] = GetFieldLabel("mediaInfo","entryUserName");
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


	$tdatamediainfo["entryUserName"] = $fdata;
		$tdatamediainfo[".searchableFields"][] = "entryUserName";
//	entryTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "entryTime";
	$fdata["GoodName"] = "entryTime";
	$fdata["ownerTable"] = "mediaInfo";
	$fdata["Label"] = GetFieldLabel("mediaInfo","entryTime");
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


	$tdatamediainfo["entryTime"] = $fdata;
		$tdatamediainfo[".searchableFields"][] = "entryTime";


$tables_data["mediaInfo"]=&$tdatamediainfo;
$field_labels["mediaInfo"] = &$fieldLabelsmediainfo;
$fieldToolTips["mediaInfo"] = &$fieldToolTipsmediainfo;
$placeHolders["mediaInfo"] = &$placeHoldersmediainfo;
$page_titles["mediaInfo"] = &$pageTitlesmediainfo;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["mediaInfo"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["mediaInfo"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_mediainfo()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id, fileNo, filedate, fileName, fileType, fileDuration, fileSubject, fileTitle, fileClassLevel, fileTeacherName, fileTeacherInfo, fileRaw, fileMD5, censorApproveTime, censorUsername, censoReson, censorStatus, fileStatus, filePath, entryUserName, entryTime";
$proto0["m_strFrom"] = "FROM mediaInfo";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY fileNo DESC";
	
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
	"m_strTable" => "mediaInfo",
	"m_srcTableName" => "mediaInfo"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "mediaInfo";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "fileNo",
	"m_strTable" => "mediaInfo",
	"m_srcTableName" => "mediaInfo"
));

$proto8["m_sql"] = "fileNo";
$proto8["m_srcTableName"] = "mediaInfo";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "filedate",
	"m_strTable" => "mediaInfo",
	"m_srcTableName" => "mediaInfo"
));

$proto10["m_sql"] = "filedate";
$proto10["m_srcTableName"] = "mediaInfo";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "fileName",
	"m_strTable" => "mediaInfo",
	"m_srcTableName" => "mediaInfo"
));

$proto12["m_sql"] = "fileName";
$proto12["m_srcTableName"] = "mediaInfo";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "fileType",
	"m_strTable" => "mediaInfo",
	"m_srcTableName" => "mediaInfo"
));

$proto14["m_sql"] = "fileType";
$proto14["m_srcTableName"] = "mediaInfo";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "fileDuration",
	"m_strTable" => "mediaInfo",
	"m_srcTableName" => "mediaInfo"
));

$proto16["m_sql"] = "fileDuration";
$proto16["m_srcTableName"] = "mediaInfo";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "fileSubject",
	"m_strTable" => "mediaInfo",
	"m_srcTableName" => "mediaInfo"
));

$proto18["m_sql"] = "fileSubject";
$proto18["m_srcTableName"] = "mediaInfo";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "fileTitle",
	"m_strTable" => "mediaInfo",
	"m_srcTableName" => "mediaInfo"
));

$proto20["m_sql"] = "fileTitle";
$proto20["m_srcTableName"] = "mediaInfo";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "fileClassLevel",
	"m_strTable" => "mediaInfo",
	"m_srcTableName" => "mediaInfo"
));

$proto22["m_sql"] = "fileClassLevel";
$proto22["m_srcTableName"] = "mediaInfo";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "fileTeacherName",
	"m_strTable" => "mediaInfo",
	"m_srcTableName" => "mediaInfo"
));

$proto24["m_sql"] = "fileTeacherName";
$proto24["m_srcTableName"] = "mediaInfo";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "fileTeacherInfo",
	"m_strTable" => "mediaInfo",
	"m_srcTableName" => "mediaInfo"
));

$proto26["m_sql"] = "fileTeacherInfo";
$proto26["m_srcTableName"] = "mediaInfo";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "fileRaw",
	"m_strTable" => "mediaInfo",
	"m_srcTableName" => "mediaInfo"
));

$proto28["m_sql"] = "fileRaw";
$proto28["m_srcTableName"] = "mediaInfo";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "fileMD5",
	"m_strTable" => "mediaInfo",
	"m_srcTableName" => "mediaInfo"
));

$proto30["m_sql"] = "fileMD5";
$proto30["m_srcTableName"] = "mediaInfo";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "censorApproveTime",
	"m_strTable" => "mediaInfo",
	"m_srcTableName" => "mediaInfo"
));

$proto32["m_sql"] = "censorApproveTime";
$proto32["m_srcTableName"] = "mediaInfo";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "censorUsername",
	"m_strTable" => "mediaInfo",
	"m_srcTableName" => "mediaInfo"
));

$proto34["m_sql"] = "censorUsername";
$proto34["m_srcTableName"] = "mediaInfo";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "censoReson",
	"m_strTable" => "mediaInfo",
	"m_srcTableName" => "mediaInfo"
));

$proto36["m_sql"] = "censoReson";
$proto36["m_srcTableName"] = "mediaInfo";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "censorStatus",
	"m_strTable" => "mediaInfo",
	"m_srcTableName" => "mediaInfo"
));

$proto38["m_sql"] = "censorStatus";
$proto38["m_srcTableName"] = "mediaInfo";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "fileStatus",
	"m_strTable" => "mediaInfo",
	"m_srcTableName" => "mediaInfo"
));

$proto40["m_sql"] = "fileStatus";
$proto40["m_srcTableName"] = "mediaInfo";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "filePath",
	"m_strTable" => "mediaInfo",
	"m_srcTableName" => "mediaInfo"
));

$proto42["m_sql"] = "filePath";
$proto42["m_srcTableName"] = "mediaInfo";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "entryUserName",
	"m_strTable" => "mediaInfo",
	"m_srcTableName" => "mediaInfo"
));

$proto44["m_sql"] = "entryUserName";
$proto44["m_srcTableName"] = "mediaInfo";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "entryTime",
	"m_strTable" => "mediaInfo",
	"m_srcTableName" => "mediaInfo"
));

$proto46["m_sql"] = "entryTime";
$proto46["m_srcTableName"] = "mediaInfo";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto48=array();
$proto48["m_link"] = "SQLL_MAIN";
			$proto49=array();
$proto49["m_strName"] = "mediaInfo";
$proto49["m_srcTableName"] = "mediaInfo";
$proto49["m_columns"] = array();
$proto49["m_columns"][] = "censorApproveTime";
$proto49["m_columns"][] = "censoReson";
$proto49["m_columns"][] = "censorStatus";
$proto49["m_columns"][] = "censorUsername";
$proto49["m_columns"][] = "entryTime";
$proto49["m_columns"][] = "entryUserName";
$proto49["m_columns"][] = "fileClassLevel";
$proto49["m_columns"][] = "filedate";
$proto49["m_columns"][] = "fileDuration";
$proto49["m_columns"][] = "fileMD5";
$proto49["m_columns"][] = "fileName";
$proto49["m_columns"][] = "fileNo";
$proto49["m_columns"][] = "filePath";
$proto49["m_columns"][] = "fileRaw";
$proto49["m_columns"][] = "fileStatus";
$proto49["m_columns"][] = "fileSubject";
$proto49["m_columns"][] = "fileTeacherInfo";
$proto49["m_columns"][] = "fileTeacherName";
$proto49["m_columns"][] = "fileTitle";
$proto49["m_columns"][] = "fileType";
$proto49["m_columns"][] = "id";
$proto49["m_columns"][] = "playlistID";
$obj = new SQLTable($proto49);

$proto48["m_table"] = $obj;
$proto48["m_sql"] = "mediaInfo";
$proto48["m_alias"] = "";
$proto48["m_srcTableName"] = "mediaInfo";
$proto50=array();
$proto50["m_sql"] = "";
$proto50["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto50["m_column"]=$obj;
$proto50["m_contained"] = array();
$proto50["m_strCase"] = "";
$proto50["m_havingmode"] = false;
$proto50["m_inBrackets"] = false;
$proto50["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto50);

$proto48["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto48);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto52=array();
						$obj = new SQLField(array(
	"m_strName" => "fileNo",
	"m_strTable" => "mediaInfo",
	"m_srcTableName" => "mediaInfo"
));

$proto52["m_column"]=$obj;
$proto52["m_bAsc"] = 0;
$proto52["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto52);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="mediaInfo";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mediainfo = createSqlQuery_mediainfo();


	
		;

																					

$tdatamediainfo[".sqlquery"] = $queryData_mediainfo;



include_once(getabspath("include/mediainfo_events.php"));
$tableEvents["mediaInfo"] = new eventclass_mediainfo;
$tdatamediainfo[".hasEvents"] = true;

?>