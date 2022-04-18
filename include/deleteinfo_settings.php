<?php
$tdatadeleteinfo = array();
$tdatadeleteinfo[".searchableFields"] = array();
$tdatadeleteinfo[".ShortName"] = "deleteinfo";
$tdatadeleteinfo[".OwnerID"] = "";
$tdatadeleteinfo[".OriginalTable"] = "mediaInfo";


$tdatadeleteinfo[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"deleteInfo\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatadeleteinfo[".originalPagesByType"] = $tdatadeleteinfo[".pagesByType"];
$tdatadeleteinfo[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"deleteInfo\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatadeleteinfo[".originalPages"] = $tdatadeleteinfo[".pages"];
$tdatadeleteinfo[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"deleteInfo\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatadeleteinfo[".originalDefaultPages"] = $tdatadeleteinfo[".defaultPages"];

//	field labels
$fieldLabelsdeleteinfo = array();
$fieldToolTipsdeleteinfo = array();
$pageTitlesdeleteinfo = array();
$placeHoldersdeleteinfo = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdeleteinfo["English"] = array();
	$fieldToolTipsdeleteinfo["English"] = array();
	$placeHoldersdeleteinfo["English"] = array();
	$pageTitlesdeleteinfo["English"] = array();
	$fieldLabelsdeleteinfo["English"]["id"] = "ID";
	$fieldToolTipsdeleteinfo["English"]["id"] = "";
	$placeHoldersdeleteinfo["English"]["id"] = "";
	$fieldLabelsdeleteinfo["English"]["fileNo"] = "File No";
	$fieldToolTipsdeleteinfo["English"]["fileNo"] = "";
	$placeHoldersdeleteinfo["English"]["fileNo"] = "";
	$fieldLabelsdeleteinfo["English"]["fileName"] = "File Name";
	$fieldToolTipsdeleteinfo["English"]["fileName"] = "";
	$placeHoldersdeleteinfo["English"]["fileName"] = "";
	$fieldLabelsdeleteinfo["English"]["fileType"] = "Type";
	$fieldToolTipsdeleteinfo["English"]["fileType"] = "";
	$placeHoldersdeleteinfo["English"]["fileType"] = "";
	$fieldLabelsdeleteinfo["English"]["fileSubject"] = "Subject";
	$fieldToolTipsdeleteinfo["English"]["fileSubject"] = "";
	$placeHoldersdeleteinfo["English"]["fileSubject"] = "";
	$fieldLabelsdeleteinfo["English"]["fileTitle"] = "Title";
	$fieldToolTipsdeleteinfo["English"]["fileTitle"] = "";
	$placeHoldersdeleteinfo["English"]["fileTitle"] = "";
	$fieldLabelsdeleteinfo["English"]["fileClassLevel"] = "Class Level";
	$fieldToolTipsdeleteinfo["English"]["fileClassLevel"] = "";
	$placeHoldersdeleteinfo["English"]["fileClassLevel"] = "";
	$fieldLabelsdeleteinfo["English"]["fileTeacherName"] = "Teacher Name";
	$fieldToolTipsdeleteinfo["English"]["fileTeacherName"] = "";
	$placeHoldersdeleteinfo["English"]["fileTeacherName"] = "";
	$fieldLabelsdeleteinfo["English"]["censorApproveTime"] = "Censor Approve Time";
	$fieldToolTipsdeleteinfo["English"]["censorApproveTime"] = "";
	$placeHoldersdeleteinfo["English"]["censorApproveTime"] = "";
	$fieldLabelsdeleteinfo["English"]["censorUsername"] = "Censor Username";
	$fieldToolTipsdeleteinfo["English"]["censorUsername"] = "";
	$placeHoldersdeleteinfo["English"]["censorUsername"] = "";
	$fieldLabelsdeleteinfo["English"]["censoReson"] = "Censo Reson";
	$fieldToolTipsdeleteinfo["English"]["censoReson"] = "";
	$placeHoldersdeleteinfo["English"]["censoReson"] = "";
	$fieldLabelsdeleteinfo["English"]["censorStatus"] = "Censor Status";
	$fieldToolTipsdeleteinfo["English"]["censorStatus"] = "";
	$placeHoldersdeleteinfo["English"]["censorStatus"] = "";
	$fieldLabelsdeleteinfo["English"]["entryUserName"] = "Ownwer";
	$fieldToolTipsdeleteinfo["English"]["entryUserName"] = "";
	$placeHoldersdeleteinfo["English"]["entryUserName"] = "";
	$fieldLabelsdeleteinfo["English"]["entryTime"] = "Entry Time";
	$fieldToolTipsdeleteinfo["English"]["entryTime"] = "";
	$placeHoldersdeleteinfo["English"]["entryTime"] = "";
	$fieldLabelsdeleteinfo["English"]["fileRaw"] = "File Raw";
	$fieldToolTipsdeleteinfo["English"]["fileRaw"] = "";
	$placeHoldersdeleteinfo["English"]["fileRaw"] = "";
	$fieldLabelsdeleteinfo["English"]["fileDuration"] = "File Duration";
	$fieldToolTipsdeleteinfo["English"]["fileDuration"] = "";
	$placeHoldersdeleteinfo["English"]["fileDuration"] = "";
	$fieldLabelsdeleteinfo["English"]["fileMD5"] = "Finger Print (MD5)";
	$fieldToolTipsdeleteinfo["English"]["fileMD5"] = "";
	$placeHoldersdeleteinfo["English"]["fileMD5"] = "";
	$fieldLabelsdeleteinfo["English"]["fileTeacherInfo"] = "Teacher Info";
	$fieldToolTipsdeleteinfo["English"]["fileTeacherInfo"] = "";
	$placeHoldersdeleteinfo["English"]["fileTeacherInfo"] = "";
	$fieldLabelsdeleteinfo["English"]["filedate"] = "Filedate";
	$fieldToolTipsdeleteinfo["English"]["filedate"] = "";
	$placeHoldersdeleteinfo["English"]["filedate"] = "";
	$fieldLabelsdeleteinfo["English"]["fileStatus"] = "File Status";
	$fieldToolTipsdeleteinfo["English"]["fileStatus"] = "";
	$placeHoldersdeleteinfo["English"]["fileStatus"] = "";
	$fieldLabelsdeleteinfo["English"]["filePath"] = "File Path";
	$fieldToolTipsdeleteinfo["English"]["filePath"] = "";
	$placeHoldersdeleteinfo["English"]["filePath"] = "";
	if (count($fieldToolTipsdeleteinfo["English"]))
		$tdatadeleteinfo[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelsdeleteinfo["Thai"] = array();
	$fieldToolTipsdeleteinfo["Thai"] = array();
	$placeHoldersdeleteinfo["Thai"] = array();
	$pageTitlesdeleteinfo["Thai"] = array();
	$fieldLabelsdeleteinfo["Thai"]["id"] = "ID";
	$fieldToolTipsdeleteinfo["Thai"]["id"] = "";
	$placeHoldersdeleteinfo["Thai"]["id"] = "";
	$fieldLabelsdeleteinfo["Thai"]["fileNo"] = "หมายเลขไฟล์";
	$fieldToolTipsdeleteinfo["Thai"]["fileNo"] = "";
	$placeHoldersdeleteinfo["Thai"]["fileNo"] = "";
	$fieldLabelsdeleteinfo["Thai"]["fileName"] = "ชื่อไพล์";
	$fieldToolTipsdeleteinfo["Thai"]["fileName"] = "";
	$placeHoldersdeleteinfo["Thai"]["fileName"] = "";
	$fieldLabelsdeleteinfo["Thai"]["fileType"] = "ประเภทไฟล์";
	$fieldToolTipsdeleteinfo["Thai"]["fileType"] = "";
	$placeHoldersdeleteinfo["Thai"]["fileType"] = "";
	$fieldLabelsdeleteinfo["Thai"]["fileSubject"] = "ประเภทรายการ";
	$fieldToolTipsdeleteinfo["Thai"]["fileSubject"] = "";
	$placeHoldersdeleteinfo["Thai"]["fileSubject"] = "";
	$fieldLabelsdeleteinfo["Thai"]["fileTitle"] = "หัวข้อรายการ";
	$fieldToolTipsdeleteinfo["Thai"]["fileTitle"] = "";
	$placeHoldersdeleteinfo["Thai"]["fileTitle"] = "";
	$fieldLabelsdeleteinfo["Thai"]["fileClassLevel"] = "อัธยาศัย/หลักสูตร";
	$fieldToolTipsdeleteinfo["Thai"]["fileClassLevel"] = "";
	$placeHoldersdeleteinfo["Thai"]["fileClassLevel"] = "";
	$fieldLabelsdeleteinfo["Thai"]["fileTeacherName"] = "วิทยากร";
	$fieldToolTipsdeleteinfo["Thai"]["fileTeacherName"] = "";
	$placeHoldersdeleteinfo["Thai"]["fileTeacherName"] = "";
	$fieldLabelsdeleteinfo["Thai"]["censorApproveTime"] = "วันที่/เวลาแก้ไขอนุมัติเซ็นเซอร์";
	$fieldToolTipsdeleteinfo["Thai"]["censorApproveTime"] = "";
	$placeHoldersdeleteinfo["Thai"]["censorApproveTime"] = "";
	$fieldLabelsdeleteinfo["Thai"]["censorUsername"] = "ผู้อนุมัติเซ็นเซอร์";
	$fieldToolTipsdeleteinfo["Thai"]["censorUsername"] = "";
	$placeHoldersdeleteinfo["Thai"]["censorUsername"] = "";
	$fieldLabelsdeleteinfo["Thai"]["censoReson"] = "เหตุผลเซ็นเซอร์";
	$fieldToolTipsdeleteinfo["Thai"]["censoReson"] = "";
	$placeHoldersdeleteinfo["Thai"]["censoReson"] = "";
	$fieldLabelsdeleteinfo["Thai"]["censorStatus"] = "CODE";
	$fieldToolTipsdeleteinfo["Thai"]["censorStatus"] = "";
	$placeHoldersdeleteinfo["Thai"]["censorStatus"] = "";
	$fieldLabelsdeleteinfo["Thai"]["entryUserName"] = "ผู้บันทึกรายการ";
	$fieldToolTipsdeleteinfo["Thai"]["entryUserName"] = "";
	$placeHoldersdeleteinfo["Thai"]["entryUserName"] = "";
	$fieldLabelsdeleteinfo["Thai"]["entryTime"] = "วันที่/เวลาบันทึกรายการ";
	$fieldToolTipsdeleteinfo["Thai"]["entryTime"] = "";
	$placeHoldersdeleteinfo["Thai"]["entryTime"] = "";
	$fieldLabelsdeleteinfo["Thai"]["fileRaw"] = "ไฟล์";
	$fieldToolTipsdeleteinfo["Thai"]["fileRaw"] = "";
	$placeHoldersdeleteinfo["Thai"]["fileRaw"] = "";
	$fieldLabelsdeleteinfo["Thai"]["fileDuration"] = "DURATION";
	$fieldToolTipsdeleteinfo["Thai"]["fileDuration"] = "";
	$placeHoldersdeleteinfo["Thai"]["fileDuration"] = "";
	$fieldLabelsdeleteinfo["Thai"]["fileMD5"] = "Finger Print (MD5)";
	$fieldToolTipsdeleteinfo["Thai"]["fileMD5"] = "";
	$placeHoldersdeleteinfo["Thai"]["fileMD5"] = "";
	$fieldLabelsdeleteinfo["Thai"]["fileTeacherInfo"] = "รายละเอียดวิทยากร";
	$fieldToolTipsdeleteinfo["Thai"]["fileTeacherInfo"] = "";
	$placeHoldersdeleteinfo["Thai"]["fileTeacherInfo"] = "";
	$fieldLabelsdeleteinfo["Thai"]["filedate"] = "วันที่ไฟล์";
	$fieldToolTipsdeleteinfo["Thai"]["filedate"] = "";
	$placeHoldersdeleteinfo["Thai"]["filedate"] = "";
	$fieldLabelsdeleteinfo["Thai"]["fileStatus"] = "สถานะไฟล์";
	$fieldToolTipsdeleteinfo["Thai"]["fileStatus"] = "";
	$placeHoldersdeleteinfo["Thai"]["fileStatus"] = "";
	$fieldLabelsdeleteinfo["Thai"]["filePath"] = "ที่อยู่ไฟล์";
	$fieldToolTipsdeleteinfo["Thai"]["filePath"] = "";
	$placeHoldersdeleteinfo["Thai"]["filePath"] = "";
	if (count($fieldToolTipsdeleteinfo["Thai"]))
		$tdatadeleteinfo[".isUseToolTips"] = true;
}


	$tdatadeleteinfo[".NCSearch"] = true;



$tdatadeleteinfo[".shortTableName"] = "deleteinfo";
$tdatadeleteinfo[".nSecOptions"] = 0;

$tdatadeleteinfo[".mainTableOwnerID"] = "";
$tdatadeleteinfo[".entityType"] = 1;
$tdatadeleteinfo[".connId"] = "mc_at_192_168_1_111";


$tdatadeleteinfo[".strOriginalTableName"] = "mediaInfo";

	



$tdatadeleteinfo[".showAddInPopup"] = false;

$tdatadeleteinfo[".showEditInPopup"] = false;

$tdatadeleteinfo[".showViewInPopup"] = false;

$tdatadeleteinfo[".listAjax"] = false;
//	temporary
//$tdatadeleteinfo[".listAjax"] = false;

	$tdatadeleteinfo[".audit"] = true;

	$tdatadeleteinfo[".locking"] = false;


$pages = $tdatadeleteinfo[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadeleteinfo[".edit"] = true;
	$tdatadeleteinfo[".afterEditAction"] = 1;
	$tdatadeleteinfo[".closePopupAfterEdit"] = 1;
	$tdatadeleteinfo[".afterEditActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_ADD] ) {
$tdatadeleteinfo[".add"] = true;
$tdatadeleteinfo[".afterAddAction"] = 1;
$tdatadeleteinfo[".closePopupAfterAdd"] = 1;
$tdatadeleteinfo[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadeleteinfo[".list"] = true;
}



$tdatadeleteinfo[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadeleteinfo[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadeleteinfo[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadeleteinfo[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadeleteinfo[".printFriendly"] = true;
}



$tdatadeleteinfo[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadeleteinfo[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadeleteinfo[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadeleteinfo[".isUseAjaxSuggest"] = true;

$tdatadeleteinfo[".rowHighlite"] = true;



						

$tdatadeleteinfo[".ajaxCodeSnippetAdded"] = false;

$tdatadeleteinfo[".buttonsAdded"] = false;

$tdatadeleteinfo[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadeleteinfo[".isUseTimeForSearch"] = true;


$tdatadeleteinfo[".badgeColor"] = "5F9EA0";


$tdatadeleteinfo[".allSearchFields"] = array();
$tdatadeleteinfo[".filterFields"] = array();
$tdatadeleteinfo[".requiredSearchFields"] = array();

$tdatadeleteinfo[".googleLikeFields"] = array();
$tdatadeleteinfo[".googleLikeFields"][] = "fileNo";
$tdatadeleteinfo[".googleLikeFields"][] = "filedate";
$tdatadeleteinfo[".googleLikeFields"][] = "fileName";
$tdatadeleteinfo[".googleLikeFields"][] = "fileType";
$tdatadeleteinfo[".googleLikeFields"][] = "fileDuration";
$tdatadeleteinfo[".googleLikeFields"][] = "fileSubject";
$tdatadeleteinfo[".googleLikeFields"][] = "fileTitle";
$tdatadeleteinfo[".googleLikeFields"][] = "fileClassLevel";
$tdatadeleteinfo[".googleLikeFields"][] = "fileTeacherName";
$tdatadeleteinfo[".googleLikeFields"][] = "fileTeacherInfo";
$tdatadeleteinfo[".googleLikeFields"][] = "fileRaw";
$tdatadeleteinfo[".googleLikeFields"][] = "fileMD5";
$tdatadeleteinfo[".googleLikeFields"][] = "censorApproveTime";
$tdatadeleteinfo[".googleLikeFields"][] = "censorUsername";
$tdatadeleteinfo[".googleLikeFields"][] = "censoReson";
$tdatadeleteinfo[".googleLikeFields"][] = "censorStatus";
$tdatadeleteinfo[".googleLikeFields"][] = "fileStatus";
$tdatadeleteinfo[".googleLikeFields"][] = "filePath";
$tdatadeleteinfo[".googleLikeFields"][] = "entryUserName";
$tdatadeleteinfo[".googleLikeFields"][] = "entryTime";



$tdatadeleteinfo[".tableType"] = "list";

$tdatadeleteinfo[".printerPageOrientation"] = 0;
$tdatadeleteinfo[".nPrinterPageScale"] = 100;

$tdatadeleteinfo[".nPrinterSplitRecords"] = 40;

$tdatadeleteinfo[".geocodingEnabled"] = false;










$tdatadeleteinfo[".pageSize"] = 20;

$tdatadeleteinfo[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY fileNo DESC";
$tdatadeleteinfo[".strOrderBy"] = $tstrOrderBy;

$tdatadeleteinfo[".orderindexes"] = array();
	$tdatadeleteinfo[".orderindexes"][] = array(2, (0 ? "ASC" : "DESC"), "fileNo");



$tdatadeleteinfo[".sqlHead"] = "SELECT id, fileNo, filedate, fileName, fileType, fileDuration, fileSubject, fileTitle, fileClassLevel, fileTeacherName, fileTeacherInfo, fileRaw, fileMD5, censorApproveTime, censorUsername, censoReson, censorStatus, fileStatus, filePath, entryUserName, entryTime";
$tdatadeleteinfo[".sqlFrom"] = "FROM mediaInfo";
$tdatadeleteinfo[".sqlWhereExpr"] = "";
$tdatadeleteinfo[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadeleteinfo[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadeleteinfo[".arrGroupsPerPage"] = $arrGPP;

$tdatadeleteinfo[".highlightSearchResults"] = true;

$tableKeysdeleteinfo = array();
$tableKeysdeleteinfo[] = "id";
$tdatadeleteinfo[".Keys"] = $tableKeysdeleteinfo;


$tdatadeleteinfo[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mediaInfo";
	$fdata["Label"] = GetFieldLabel("deleteInfo","id");
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


	$tdatadeleteinfo["id"] = $fdata;
		$tdatadeleteinfo[".searchableFields"][] = "id";
//	fileNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "fileNo";
	$fdata["GoodName"] = "fileNo";
	$fdata["ownerTable"] = "mediaInfo";
	$fdata["Label"] = GetFieldLabel("deleteInfo","fileNo");
	$fdata["FieldType"] = 3;


	
	
			

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


	$tdatadeleteinfo["fileNo"] = $fdata;
		$tdatadeleteinfo[".searchableFields"][] = "fileNo";
//	filedate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "filedate";
	$fdata["GoodName"] = "filedate";
	$fdata["ownerTable"] = "mediaInfo";
	$fdata["Label"] = GetFieldLabel("deleteInfo","filedate");
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
		$fdata["defaultSearchOption"] = "Contains";

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Contains";
		$fdata["searchOptionsList"][] = "Between";
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


	$tdatadeleteinfo["filedate"] = $fdata;
		$tdatadeleteinfo[".searchableFields"][] = "filedate";
//	fileName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "fileName";
	$fdata["GoodName"] = "fileName";
	$fdata["ownerTable"] = "mediaInfo";
	$fdata["Label"] = GetFieldLabel("deleteInfo","fileName");
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


	$tdatadeleteinfo["fileName"] = $fdata;
		$tdatadeleteinfo[".searchableFields"][] = "fileName";
//	fileType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "fileType";
	$fdata["GoodName"] = "fileType";
	$fdata["ownerTable"] = "mediaInfo";
	$fdata["Label"] = GetFieldLabel("deleteInfo","fileType");
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


	$tdatadeleteinfo["fileType"] = $fdata;
		$tdatadeleteinfo[".searchableFields"][] = "fileType";
//	fileDuration
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "fileDuration";
	$fdata["GoodName"] = "fileDuration";
	$fdata["ownerTable"] = "mediaInfo";
	$fdata["Label"] = GetFieldLabel("deleteInfo","fileDuration");
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


	$tdatadeleteinfo["fileDuration"] = $fdata;
		$tdatadeleteinfo[".searchableFields"][] = "fileDuration";
//	fileSubject
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "fileSubject";
	$fdata["GoodName"] = "fileSubject";
	$fdata["ownerTable"] = "mediaInfo";
	$fdata["Label"] = GetFieldLabel("deleteInfo","fileSubject");
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


	$tdatadeleteinfo["fileSubject"] = $fdata;
		$tdatadeleteinfo[".searchableFields"][] = "fileSubject";
//	fileTitle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "fileTitle";
	$fdata["GoodName"] = "fileTitle";
	$fdata["ownerTable"] = "mediaInfo";
	$fdata["Label"] = GetFieldLabel("deleteInfo","fileTitle");
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


	$tdatadeleteinfo["fileTitle"] = $fdata;
		$tdatadeleteinfo[".searchableFields"][] = "fileTitle";
//	fileClassLevel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "fileClassLevel";
	$fdata["GoodName"] = "fileClassLevel";
	$fdata["ownerTable"] = "mediaInfo";
	$fdata["Label"] = GetFieldLabel("deleteInfo","fileClassLevel");
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


	$tdatadeleteinfo["fileClassLevel"] = $fdata;
		$tdatadeleteinfo[".searchableFields"][] = "fileClassLevel";
//	fileTeacherName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "fileTeacherName";
	$fdata["GoodName"] = "fileTeacherName";
	$fdata["ownerTable"] = "mediaInfo";
	$fdata["Label"] = GetFieldLabel("deleteInfo","fileTeacherName");
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


	$tdatadeleteinfo["fileTeacherName"] = $fdata;
		$tdatadeleteinfo[".searchableFields"][] = "fileTeacherName";
//	fileTeacherInfo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "fileTeacherInfo";
	$fdata["GoodName"] = "fileTeacherInfo";
	$fdata["ownerTable"] = "mediaInfo";
	$fdata["Label"] = GetFieldLabel("deleteInfo","fileTeacherInfo");
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


	$tdatadeleteinfo["fileTeacherInfo"] = $fdata;
		$tdatadeleteinfo[".searchableFields"][] = "fileTeacherInfo";
//	fileRaw
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "fileRaw";
	$fdata["GoodName"] = "fileRaw";
	$fdata["ownerTable"] = "mediaInfo";
	$fdata["Label"] = GetFieldLabel("deleteInfo","fileRaw");
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


	$tdatadeleteinfo["fileRaw"] = $fdata;
		$tdatadeleteinfo[".searchableFields"][] = "fileRaw";
//	fileMD5
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "fileMD5";
	$fdata["GoodName"] = "fileMD5";
	$fdata["ownerTable"] = "mediaInfo";
	$fdata["Label"] = GetFieldLabel("deleteInfo","fileMD5");
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


	$tdatadeleteinfo["fileMD5"] = $fdata;
		$tdatadeleteinfo[".searchableFields"][] = "fileMD5";
//	censorApproveTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "censorApproveTime";
	$fdata["GoodName"] = "censorApproveTime";
	$fdata["ownerTable"] = "mediaInfo";
	$fdata["Label"] = GetFieldLabel("deleteInfo","censorApproveTime");
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


	$tdatadeleteinfo["censorApproveTime"] = $fdata;
		$tdatadeleteinfo[".searchableFields"][] = "censorApproveTime";
//	censorUsername
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "censorUsername";
	$fdata["GoodName"] = "censorUsername";
	$fdata["ownerTable"] = "mediaInfo";
	$fdata["Label"] = GetFieldLabel("deleteInfo","censorUsername");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "staffUsers";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "staffFullName";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "staffFullName";

	

	
	$edata["LookupOrderBy"] = "staffFullName";

	
	
	
	

	
	
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


	$tdatadeleteinfo["censorUsername"] = $fdata;
		$tdatadeleteinfo[".searchableFields"][] = "censorUsername";
//	censoReson
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "censoReson";
	$fdata["GoodName"] = "censoReson";
	$fdata["ownerTable"] = "mediaInfo";
	$fdata["Label"] = GetFieldLabel("deleteInfo","censoReson");
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


	$tdatadeleteinfo["censoReson"] = $fdata;
		$tdatadeleteinfo[".searchableFields"][] = "censoReson";
//	censorStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "censorStatus";
	$fdata["GoodName"] = "censorStatus";
	$fdata["ownerTable"] = "mediaInfo";
	$fdata["Label"] = GetFieldLabel("deleteInfo","censorStatus");
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


	$tdatadeleteinfo["censorStatus"] = $fdata;
		$tdatadeleteinfo[".searchableFields"][] = "censorStatus";
//	fileStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "fileStatus";
	$fdata["GoodName"] = "fileStatus";
	$fdata["ownerTable"] = "mediaInfo";
	$fdata["Label"] = GetFieldLabel("deleteInfo","fileStatus");
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


	$tdatadeleteinfo["fileStatus"] = $fdata;
		$tdatadeleteinfo[".searchableFields"][] = "fileStatus";
//	filePath
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "filePath";
	$fdata["GoodName"] = "filePath";
	$fdata["ownerTable"] = "mediaInfo";
	$fdata["Label"] = GetFieldLabel("deleteInfo","filePath");
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


	$tdatadeleteinfo["filePath"] = $fdata;
		$tdatadeleteinfo[".searchableFields"][] = "filePath";
//	entryUserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "entryUserName";
	$fdata["GoodName"] = "entryUserName";
	$fdata["ownerTable"] = "mediaInfo";
	$fdata["Label"] = GetFieldLabel("deleteInfo","entryUserName");
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


	$tdatadeleteinfo["entryUserName"] = $fdata;
		$tdatadeleteinfo[".searchableFields"][] = "entryUserName";
//	entryTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "entryTime";
	$fdata["GoodName"] = "entryTime";
	$fdata["ownerTable"] = "mediaInfo";
	$fdata["Label"] = GetFieldLabel("deleteInfo","entryTime");
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


	$tdatadeleteinfo["entryTime"] = $fdata;
		$tdatadeleteinfo[".searchableFields"][] = "entryTime";


$tables_data["deleteInfo"]=&$tdatadeleteinfo;
$field_labels["deleteInfo"] = &$fieldLabelsdeleteinfo;
$fieldToolTips["deleteInfo"] = &$fieldToolTipsdeleteinfo;
$placeHolders["deleteInfo"] = &$placeHoldersdeleteinfo;
$page_titles["deleteInfo"] = &$pageTitlesdeleteinfo;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["deleteInfo"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["deleteInfo"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_deleteinfo()
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
	"m_srcTableName" => "deleteInfo"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "deleteInfo";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "fileNo",
	"m_strTable" => "mediaInfo",
	"m_srcTableName" => "deleteInfo"
));

$proto8["m_sql"] = "fileNo";
$proto8["m_srcTableName"] = "deleteInfo";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "filedate",
	"m_strTable" => "mediaInfo",
	"m_srcTableName" => "deleteInfo"
));

$proto10["m_sql"] = "filedate";
$proto10["m_srcTableName"] = "deleteInfo";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "fileName",
	"m_strTable" => "mediaInfo",
	"m_srcTableName" => "deleteInfo"
));

$proto12["m_sql"] = "fileName";
$proto12["m_srcTableName"] = "deleteInfo";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "fileType",
	"m_strTable" => "mediaInfo",
	"m_srcTableName" => "deleteInfo"
));

$proto14["m_sql"] = "fileType";
$proto14["m_srcTableName"] = "deleteInfo";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "fileDuration",
	"m_strTable" => "mediaInfo",
	"m_srcTableName" => "deleteInfo"
));

$proto16["m_sql"] = "fileDuration";
$proto16["m_srcTableName"] = "deleteInfo";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "fileSubject",
	"m_strTable" => "mediaInfo",
	"m_srcTableName" => "deleteInfo"
));

$proto18["m_sql"] = "fileSubject";
$proto18["m_srcTableName"] = "deleteInfo";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "fileTitle",
	"m_strTable" => "mediaInfo",
	"m_srcTableName" => "deleteInfo"
));

$proto20["m_sql"] = "fileTitle";
$proto20["m_srcTableName"] = "deleteInfo";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "fileClassLevel",
	"m_strTable" => "mediaInfo",
	"m_srcTableName" => "deleteInfo"
));

$proto22["m_sql"] = "fileClassLevel";
$proto22["m_srcTableName"] = "deleteInfo";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "fileTeacherName",
	"m_strTable" => "mediaInfo",
	"m_srcTableName" => "deleteInfo"
));

$proto24["m_sql"] = "fileTeacherName";
$proto24["m_srcTableName"] = "deleteInfo";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "fileTeacherInfo",
	"m_strTable" => "mediaInfo",
	"m_srcTableName" => "deleteInfo"
));

$proto26["m_sql"] = "fileTeacherInfo";
$proto26["m_srcTableName"] = "deleteInfo";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "fileRaw",
	"m_strTable" => "mediaInfo",
	"m_srcTableName" => "deleteInfo"
));

$proto28["m_sql"] = "fileRaw";
$proto28["m_srcTableName"] = "deleteInfo";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "fileMD5",
	"m_strTable" => "mediaInfo",
	"m_srcTableName" => "deleteInfo"
));

$proto30["m_sql"] = "fileMD5";
$proto30["m_srcTableName"] = "deleteInfo";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "censorApproveTime",
	"m_strTable" => "mediaInfo",
	"m_srcTableName" => "deleteInfo"
));

$proto32["m_sql"] = "censorApproveTime";
$proto32["m_srcTableName"] = "deleteInfo";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "censorUsername",
	"m_strTable" => "mediaInfo",
	"m_srcTableName" => "deleteInfo"
));

$proto34["m_sql"] = "censorUsername";
$proto34["m_srcTableName"] = "deleteInfo";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "censoReson",
	"m_strTable" => "mediaInfo",
	"m_srcTableName" => "deleteInfo"
));

$proto36["m_sql"] = "censoReson";
$proto36["m_srcTableName"] = "deleteInfo";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "censorStatus",
	"m_strTable" => "mediaInfo",
	"m_srcTableName" => "deleteInfo"
));

$proto38["m_sql"] = "censorStatus";
$proto38["m_srcTableName"] = "deleteInfo";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "fileStatus",
	"m_strTable" => "mediaInfo",
	"m_srcTableName" => "deleteInfo"
));

$proto40["m_sql"] = "fileStatus";
$proto40["m_srcTableName"] = "deleteInfo";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "filePath",
	"m_strTable" => "mediaInfo",
	"m_srcTableName" => "deleteInfo"
));

$proto42["m_sql"] = "filePath";
$proto42["m_srcTableName"] = "deleteInfo";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "entryUserName",
	"m_strTable" => "mediaInfo",
	"m_srcTableName" => "deleteInfo"
));

$proto44["m_sql"] = "entryUserName";
$proto44["m_srcTableName"] = "deleteInfo";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "entryTime",
	"m_strTable" => "mediaInfo",
	"m_srcTableName" => "deleteInfo"
));

$proto46["m_sql"] = "entryTime";
$proto46["m_srcTableName"] = "deleteInfo";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto48=array();
$proto48["m_link"] = "SQLL_MAIN";
			$proto49=array();
$proto49["m_strName"] = "mediaInfo";
$proto49["m_srcTableName"] = "deleteInfo";
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
$proto49["m_columns"][] = "producerName";
$obj = new SQLTable($proto49);

$proto48["m_table"] = $obj;
$proto48["m_sql"] = "mediaInfo";
$proto48["m_alias"] = "";
$proto48["m_srcTableName"] = "deleteInfo";
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
	"m_srcTableName" => "deleteInfo"
));

$proto52["m_column"]=$obj;
$proto52["m_bAsc"] = 0;
$proto52["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto52);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="deleteInfo";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_deleteinfo = createSqlQuery_deleteinfo();


	
		;

																					

$tdatadeleteinfo[".sqlquery"] = $queryData_deleteinfo;



include_once(getabspath("include/deleteinfo_events.php"));
$tableEvents["deleteInfo"] = new eventclass_deleteinfo;
$tdatadeleteinfo[".hasEvents"] = true;

?>