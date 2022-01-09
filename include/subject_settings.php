<?php
$tdatasubject = array();
$tdatasubject[".searchableFields"] = array();
$tdatasubject[".ShortName"] = "subject";
$tdatasubject[".OwnerID"] = "";
$tdatasubject[".OriginalTable"] = "subject";


$tdatasubject[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatasubject[".originalPagesByType"] = $tdatasubject[".pagesByType"];
$tdatasubject[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatasubject[".originalPages"] = $tdatasubject[".pages"];
$tdatasubject[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatasubject[".originalDefaultPages"] = $tdatasubject[".defaultPages"];

//	field labels
$fieldLabelssubject = array();
$fieldToolTipssubject = array();
$pageTitlessubject = array();
$placeHolderssubject = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelssubject["English"] = array();
	$fieldToolTipssubject["English"] = array();
	$placeHolderssubject["English"] = array();
	$pageTitlessubject["English"] = array();
	$fieldLabelssubject["English"]["id"] = "Id";
	$fieldToolTipssubject["English"]["id"] = "";
	$placeHolderssubject["English"]["id"] = "";
	$fieldLabelssubject["English"]["subjectCode"] = "Subject Code";
	$fieldToolTipssubject["English"]["subjectCode"] = "";
	$placeHolderssubject["English"]["subjectCode"] = "";
	$fieldLabelssubject["English"]["subjectName"] = "Subject Name";
	$fieldToolTipssubject["English"]["subjectName"] = "";
	$placeHolderssubject["English"]["subjectName"] = "";
	$fieldLabelssubject["English"]["subjectDesc"] = "Subject Desc";
	$fieldToolTipssubject["English"]["subjectDesc"] = "";
	$placeHolderssubject["English"]["subjectDesc"] = "";
	$fieldLabelssubject["English"]["entryUserName"] = "Entry User Name";
	$fieldToolTipssubject["English"]["entryUserName"] = "";
	$placeHolderssubject["English"]["entryUserName"] = "";
	$fieldLabelssubject["English"]["entryTime"] = "Entry Time";
	$fieldToolTipssubject["English"]["entryTime"] = "";
	$placeHolderssubject["English"]["entryTime"] = "";
	if (count($fieldToolTipssubject["English"]))
		$tdatasubject[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelssubject["Thai"] = array();
	$fieldToolTipssubject["Thai"] = array();
	$placeHolderssubject["Thai"] = array();
	$pageTitlessubject["Thai"] = array();
	$fieldLabelssubject["Thai"]["id"] = "Id";
	$fieldToolTipssubject["Thai"]["id"] = "";
	$placeHolderssubject["Thai"]["id"] = "";
	$fieldLabelssubject["Thai"]["subjectCode"] = "รหัสวิชา";
	$fieldToolTipssubject["Thai"]["subjectCode"] = "";
	$placeHolderssubject["Thai"]["subjectCode"] = "";
	$fieldLabelssubject["Thai"]["subjectName"] = "ชื่อวิชา";
	$fieldToolTipssubject["Thai"]["subjectName"] = "";
	$placeHolderssubject["Thai"]["subjectName"] = "";
	$fieldLabelssubject["Thai"]["subjectDesc"] = "รายละเอียด";
	$fieldToolTipssubject["Thai"]["subjectDesc"] = "";
	$placeHolderssubject["Thai"]["subjectDesc"] = "";
	$fieldLabelssubject["Thai"]["entryUserName"] = "ผู้บันทึกรายการ";
	$fieldToolTipssubject["Thai"]["entryUserName"] = "";
	$placeHolderssubject["Thai"]["entryUserName"] = "";
	$fieldLabelssubject["Thai"]["entryTime"] = "วันที่/เวลาบันทึกรายการ";
	$fieldToolTipssubject["Thai"]["entryTime"] = "";
	$placeHolderssubject["Thai"]["entryTime"] = "";
	if (count($fieldToolTipssubject["Thai"]))
		$tdatasubject[".isUseToolTips"] = true;
}


	$tdatasubject[".NCSearch"] = true;



$tdatasubject[".shortTableName"] = "subject";
$tdatasubject[".nSecOptions"] = 0;

$tdatasubject[".mainTableOwnerID"] = "";
$tdatasubject[".entityType"] = 0;
$tdatasubject[".connId"] = "mc_at_192_168_1_111";


$tdatasubject[".strOriginalTableName"] = "subject";

	



$tdatasubject[".showAddInPopup"] = false;

$tdatasubject[".showEditInPopup"] = false;

$tdatasubject[".showViewInPopup"] = false;

$tdatasubject[".listAjax"] = false;
//	temporary
//$tdatasubject[".listAjax"] = false;

	$tdatasubject[".audit"] = true;

	$tdatasubject[".locking"] = false;


$pages = $tdatasubject[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatasubject[".edit"] = true;
	$tdatasubject[".afterEditAction"] = 1;
	$tdatasubject[".closePopupAfterEdit"] = 1;
	$tdatasubject[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatasubject[".add"] = true;
$tdatasubject[".afterAddAction"] = 1;
$tdatasubject[".closePopupAfterAdd"] = 1;
$tdatasubject[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatasubject[".list"] = true;
}



$tdatasubject[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatasubject[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatasubject[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatasubject[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatasubject[".printFriendly"] = true;
}



$tdatasubject[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatasubject[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatasubject[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatasubject[".isUseAjaxSuggest"] = true;

$tdatasubject[".rowHighlite"] = true;



			

$tdatasubject[".ajaxCodeSnippetAdded"] = false;

$tdatasubject[".buttonsAdded"] = false;

$tdatasubject[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasubject[".isUseTimeForSearch"] = false;


$tdatasubject[".badgeColor"] = "CFAE83";


$tdatasubject[".allSearchFields"] = array();
$tdatasubject[".filterFields"] = array();
$tdatasubject[".requiredSearchFields"] = array();

$tdatasubject[".googleLikeFields"] = array();
$tdatasubject[".googleLikeFields"][] = "entryTime";
$tdatasubject[".googleLikeFields"][] = "entryUserName";
$tdatasubject[".googleLikeFields"][] = "id";
$tdatasubject[".googleLikeFields"][] = "subjectCode";
$tdatasubject[".googleLikeFields"][] = "subjectDesc";
$tdatasubject[".googleLikeFields"][] = "subjectName";



$tdatasubject[".tableType"] = "list";

$tdatasubject[".printerPageOrientation"] = 0;
$tdatasubject[".nPrinterPageScale"] = 100;

$tdatasubject[".nPrinterSplitRecords"] = 40;

$tdatasubject[".geocodingEnabled"] = false;










$tdatasubject[".pageSize"] = 20;

$tdatasubject[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatasubject[".strOrderBy"] = $tstrOrderBy;

$tdatasubject[".orderindexes"] = array();


$tdatasubject[".sqlHead"] = "SELECT entryTime,  	entryUserName,  	id,  	subjectCode,  	subjectDesc,  	subjectName";
$tdatasubject[".sqlFrom"] = "FROM subject";
$tdatasubject[".sqlWhereExpr"] = "";
$tdatasubject[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasubject[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasubject[".arrGroupsPerPage"] = $arrGPP;

$tdatasubject[".highlightSearchResults"] = true;

$tableKeyssubject = array();
$tableKeyssubject[] = "id";
$tdatasubject[".Keys"] = $tableKeyssubject;


$tdatasubject[".hideMobileList"] = array();




//	entryTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "entryTime";
	$fdata["GoodName"] = "entryTime";
	$fdata["ownerTable"] = "subject";
	$fdata["Label"] = GetFieldLabel("subject","entryTime");
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


	$tdatasubject["entryTime"] = $fdata;
		$tdatasubject[".searchableFields"][] = "entryTime";
//	entryUserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "entryUserName";
	$fdata["GoodName"] = "entryUserName";
	$fdata["ownerTable"] = "subject";
	$fdata["Label"] = GetFieldLabel("subject","entryUserName");
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


	$tdatasubject["entryUserName"] = $fdata;
		$tdatasubject[".searchableFields"][] = "entryUserName";
//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "subject";
	$fdata["Label"] = GetFieldLabel("subject","id");
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


	$tdatasubject["id"] = $fdata;
		$tdatasubject[".searchableFields"][] = "id";
//	subjectCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "subjectCode";
	$fdata["GoodName"] = "subjectCode";
	$fdata["ownerTable"] = "subject";
	$fdata["Label"] = GetFieldLabel("subject","subjectCode");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "subjectCode";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "subjectCode";

	
	
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


	$tdatasubject["subjectCode"] = $fdata;
		$tdatasubject[".searchableFields"][] = "subjectCode";
//	subjectDesc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "subjectDesc";
	$fdata["GoodName"] = "subjectDesc";
	$fdata["ownerTable"] = "subject";
	$fdata["Label"] = GetFieldLabel("subject","subjectDesc");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "subjectDesc";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "subjectDesc";

	
	
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


	$tdatasubject["subjectDesc"] = $fdata;
		$tdatasubject[".searchableFields"][] = "subjectDesc";
//	subjectName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "subjectName";
	$fdata["GoodName"] = "subjectName";
	$fdata["ownerTable"] = "subject";
	$fdata["Label"] = GetFieldLabel("subject","subjectName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "subjectName";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "subjectName";

	
	
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


	$tdatasubject["subjectName"] = $fdata;
		$tdatasubject[".searchableFields"][] = "subjectName";


$tables_data["subject"]=&$tdatasubject;
$field_labels["subject"] = &$fieldLabelssubject;
$fieldToolTips["subject"] = &$fieldToolTipssubject;
$placeHolders["subject"] = &$placeHolderssubject;
$page_titles["subject"] = &$pageTitlessubject;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["subject"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["subject"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_subject()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "entryTime,  	entryUserName,  	id,  	subjectCode,  	subjectDesc,  	subjectName";
$proto0["m_strFrom"] = "FROM subject";
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
	"m_strName" => "entryTime",
	"m_strTable" => "subject",
	"m_srcTableName" => "subject"
));

$proto6["m_sql"] = "entryTime";
$proto6["m_srcTableName"] = "subject";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "entryUserName",
	"m_strTable" => "subject",
	"m_srcTableName" => "subject"
));

$proto8["m_sql"] = "entryUserName";
$proto8["m_srcTableName"] = "subject";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "subject",
	"m_srcTableName" => "subject"
));

$proto10["m_sql"] = "id";
$proto10["m_srcTableName"] = "subject";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "subjectCode",
	"m_strTable" => "subject",
	"m_srcTableName" => "subject"
));

$proto12["m_sql"] = "subjectCode";
$proto12["m_srcTableName"] = "subject";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "subjectDesc",
	"m_strTable" => "subject",
	"m_srcTableName" => "subject"
));

$proto14["m_sql"] = "subjectDesc";
$proto14["m_srcTableName"] = "subject";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "subjectName",
	"m_strTable" => "subject",
	"m_srcTableName" => "subject"
));

$proto16["m_sql"] = "subjectName";
$proto16["m_srcTableName"] = "subject";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "subject";
$proto19["m_srcTableName"] = "subject";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "entryTime";
$proto19["m_columns"][] = "entryUserName";
$proto19["m_columns"][] = "id";
$proto19["m_columns"][] = "subjectCode";
$proto19["m_columns"][] = "subjectDesc";
$proto19["m_columns"][] = "subjectName";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "subject";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "subject";
$proto20=array();
$proto20["m_sql"] = "";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="subject";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_subject = createSqlQuery_subject();


	
		;

						

$tdatasubject[".sqlquery"] = $queryData_subject;



$tableEvents["subject"] = new eventsBase;
$tdatasubject[".hasEvents"] = false;

?>