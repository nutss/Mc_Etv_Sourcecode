<?php
$tdatateacher = array();
$tdatateacher[".searchableFields"] = array();
$tdatateacher[".ShortName"] = "teacher";
$tdatateacher[".OwnerID"] = "";
$tdatateacher[".OriginalTable"] = "teacher";


$tdatateacher[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\",\"teacherPopup\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatateacher[".originalPagesByType"] = $tdatateacher[".pagesByType"];
$tdatateacher[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\",\"teacherPopup\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatateacher[".originalPages"] = $tdatateacher[".pages"];
$tdatateacher[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatateacher[".originalDefaultPages"] = $tdatateacher[".defaultPages"];

//	field labels
$fieldLabelsteacher = array();
$fieldToolTipsteacher = array();
$pageTitlesteacher = array();
$placeHoldersteacher = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsteacher["English"] = array();
	$fieldToolTipsteacher["English"] = array();
	$placeHoldersteacher["English"] = array();
	$pageTitlesteacher["English"] = array();
	$fieldLabelsteacher["English"]["id"] = "ID";
	$fieldToolTipsteacher["English"]["id"] = "";
	$placeHoldersteacher["English"]["id"] = "";
	$fieldLabelsteacher["English"]["teacherName"] = "Teacher Name";
	$fieldToolTipsteacher["English"]["teacherName"] = "";
	$placeHoldersteacher["English"]["teacherName"] = "";
	$fieldLabelsteacher["English"]["teacherAddress"] = "Teacher Address";
	$fieldToolTipsteacher["English"]["teacherAddress"] = "";
	$placeHoldersteacher["English"]["teacherAddress"] = "";
	$fieldLabelsteacher["English"]["teacherTelephone"] = "Teacher Telephone";
	$fieldToolTipsteacher["English"]["teacherTelephone"] = "";
	$placeHoldersteacher["English"]["teacherTelephone"] = "";
	$fieldLabelsteacher["English"]["entryUserName"] = "Entry User Name";
	$fieldToolTipsteacher["English"]["entryUserName"] = "";
	$placeHoldersteacher["English"]["entryUserName"] = "";
	$fieldLabelsteacher["English"]["entryTime"] = "Entry Time";
	$fieldToolTipsteacher["English"]["entryTime"] = "";
	$placeHoldersteacher["English"]["entryTime"] = "";
	if (count($fieldToolTipsteacher["English"]))
		$tdatateacher[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelsteacher["Thai"] = array();
	$fieldToolTipsteacher["Thai"] = array();
	$placeHoldersteacher["Thai"] = array();
	$pageTitlesteacher["Thai"] = array();
	$fieldLabelsteacher["Thai"]["id"] = "ID";
	$fieldToolTipsteacher["Thai"]["id"] = "";
	$placeHoldersteacher["Thai"]["id"] = "";
	$fieldLabelsteacher["Thai"]["teacherName"] = "ชื่อ";
	$fieldToolTipsteacher["Thai"]["teacherName"] = "";
	$placeHoldersteacher["Thai"]["teacherName"] = "";
	$fieldLabelsteacher["Thai"]["teacherAddress"] = "ที่อยู่";
	$fieldToolTipsteacher["Thai"]["teacherAddress"] = "";
	$placeHoldersteacher["Thai"]["teacherAddress"] = "";
	$fieldLabelsteacher["Thai"]["teacherTelephone"] = "เบอร์โทรศัพท์";
	$fieldToolTipsteacher["Thai"]["teacherTelephone"] = "";
	$placeHoldersteacher["Thai"]["teacherTelephone"] = "";
	$fieldLabelsteacher["Thai"]["entryUserName"] = "ผู้บันทึกรายการ";
	$fieldToolTipsteacher["Thai"]["entryUserName"] = "";
	$placeHoldersteacher["Thai"]["entryUserName"] = "";
	$fieldLabelsteacher["Thai"]["entryTime"] = "วันที่/เวลาบันทึกรายการ";
	$fieldToolTipsteacher["Thai"]["entryTime"] = "";
	$placeHoldersteacher["Thai"]["entryTime"] = "";
	if (count($fieldToolTipsteacher["Thai"]))
		$tdatateacher[".isUseToolTips"] = true;
}


	$tdatateacher[".NCSearch"] = true;



$tdatateacher[".shortTableName"] = "teacher";
$tdatateacher[".nSecOptions"] = 0;

$tdatateacher[".mainTableOwnerID"] = "";
$tdatateacher[".entityType"] = 0;
$tdatateacher[".connId"] = "mc_at_192_168_1_111";


$tdatateacher[".strOriginalTableName"] = "teacher";

	



$tdatateacher[".showAddInPopup"] = false;

$tdatateacher[".showEditInPopup"] = false;

$tdatateacher[".showViewInPopup"] = false;

$tdatateacher[".listAjax"] = false;
//	temporary
//$tdatateacher[".listAjax"] = false;

	$tdatateacher[".audit"] = true;

	$tdatateacher[".locking"] = false;


$pages = $tdatateacher[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatateacher[".edit"] = true;
	$tdatateacher[".afterEditAction"] = 1;
	$tdatateacher[".closePopupAfterEdit"] = 1;
	$tdatateacher[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatateacher[".add"] = true;
$tdatateacher[".afterAddAction"] = 1;
$tdatateacher[".closePopupAfterAdd"] = 1;
$tdatateacher[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatateacher[".list"] = true;
}



$tdatateacher[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatateacher[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatateacher[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatateacher[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatateacher[".printFriendly"] = true;
}



$tdatateacher[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatateacher[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatateacher[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatateacher[".isUseAjaxSuggest"] = true;

$tdatateacher[".rowHighlite"] = true;



			

$tdatateacher[".ajaxCodeSnippetAdded"] = false;

$tdatateacher[".buttonsAdded"] = false;

$tdatateacher[".addPageEvents"] = false;

// use timepicker for search panel
$tdatateacher[".isUseTimeForSearch"] = false;


$tdatateacher[".badgeColor"] = "E07878";


$tdatateacher[".allSearchFields"] = array();
$tdatateacher[".filterFields"] = array();
$tdatateacher[".requiredSearchFields"] = array();

$tdatateacher[".googleLikeFields"] = array();
$tdatateacher[".googleLikeFields"][] = "entryTime";
$tdatateacher[".googleLikeFields"][] = "entryUserName";
$tdatateacher[".googleLikeFields"][] = "id";
$tdatateacher[".googleLikeFields"][] = "teacherAddress";
$tdatateacher[".googleLikeFields"][] = "teacherName";
$tdatateacher[".googleLikeFields"][] = "teacherTelephone";



$tdatateacher[".tableType"] = "list";

$tdatateacher[".printerPageOrientation"] = 0;
$tdatateacher[".nPrinterPageScale"] = 100;

$tdatateacher[".nPrinterSplitRecords"] = 40;

$tdatateacher[".geocodingEnabled"] = false;










$tdatateacher[".pageSize"] = 20;

$tdatateacher[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatateacher[".strOrderBy"] = $tstrOrderBy;

$tdatateacher[".orderindexes"] = array();


$tdatateacher[".sqlHead"] = "SELECT entryTime,  	entryUserName,  	id,  	teacherAddress,  	teacherName,  	teacherTelephone";
$tdatateacher[".sqlFrom"] = "FROM teacher";
$tdatateacher[".sqlWhereExpr"] = "";
$tdatateacher[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatateacher[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatateacher[".arrGroupsPerPage"] = $arrGPP;

$tdatateacher[".highlightSearchResults"] = true;

$tableKeysteacher = array();
$tableKeysteacher[] = "id";
$tdatateacher[".Keys"] = $tableKeysteacher;


$tdatateacher[".hideMobileList"] = array();




//	entryTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "entryTime";
	$fdata["GoodName"] = "entryTime";
	$fdata["ownerTable"] = "teacher";
	$fdata["Label"] = GetFieldLabel("teacher","entryTime");
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


	$tdatateacher["entryTime"] = $fdata;
		$tdatateacher[".searchableFields"][] = "entryTime";
//	entryUserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "entryUserName";
	$fdata["GoodName"] = "entryUserName";
	$fdata["ownerTable"] = "teacher";
	$fdata["Label"] = GetFieldLabel("teacher","entryUserName");
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


	$tdatateacher["entryUserName"] = $fdata;
		$tdatateacher[".searchableFields"][] = "entryUserName";
//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "teacher";
	$fdata["Label"] = GetFieldLabel("teacher","id");
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


	$tdatateacher["id"] = $fdata;
		$tdatateacher[".searchableFields"][] = "id";
//	teacherAddress
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "teacherAddress";
	$fdata["GoodName"] = "teacherAddress";
	$fdata["ownerTable"] = "teacher";
	$fdata["Label"] = GetFieldLabel("teacher","teacherAddress");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "teacherAddress";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "teacherAddress";

	
	
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


	$tdatateacher["teacherAddress"] = $fdata;
		$tdatateacher[".searchableFields"][] = "teacherAddress";
//	teacherName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "teacherName";
	$fdata["GoodName"] = "teacherName";
	$fdata["ownerTable"] = "teacher";
	$fdata["Label"] = GetFieldLabel("teacher","teacherName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "teacherName";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "teacherName";

	
	
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


	$tdatateacher["teacherName"] = $fdata;
		$tdatateacher[".searchableFields"][] = "teacherName";
//	teacherTelephone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "teacherTelephone";
	$fdata["GoodName"] = "teacherTelephone";
	$fdata["ownerTable"] = "teacher";
	$fdata["Label"] = GetFieldLabel("teacher","teacherTelephone");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "teacherTelephone";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "teacherTelephone";

	
	
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


	$tdatateacher["teacherTelephone"] = $fdata;
		$tdatateacher[".searchableFields"][] = "teacherTelephone";


$tables_data["teacher"]=&$tdatateacher;
$field_labels["teacher"] = &$fieldLabelsteacher;
$fieldToolTips["teacher"] = &$fieldToolTipsteacher;
$placeHolders["teacher"] = &$placeHoldersteacher;
$page_titles["teacher"] = &$pageTitlesteacher;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["teacher"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["teacher"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_teacher()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "entryTime,  	entryUserName,  	id,  	teacherAddress,  	teacherName,  	teacherTelephone";
$proto0["m_strFrom"] = "FROM teacher";
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
	"m_strTable" => "teacher",
	"m_srcTableName" => "teacher"
));

$proto6["m_sql"] = "entryTime";
$proto6["m_srcTableName"] = "teacher";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "entryUserName",
	"m_strTable" => "teacher",
	"m_srcTableName" => "teacher"
));

$proto8["m_sql"] = "entryUserName";
$proto8["m_srcTableName"] = "teacher";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "teacher",
	"m_srcTableName" => "teacher"
));

$proto10["m_sql"] = "id";
$proto10["m_srcTableName"] = "teacher";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "teacherAddress",
	"m_strTable" => "teacher",
	"m_srcTableName" => "teacher"
));

$proto12["m_sql"] = "teacherAddress";
$proto12["m_srcTableName"] = "teacher";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "teacherName",
	"m_strTable" => "teacher",
	"m_srcTableName" => "teacher"
));

$proto14["m_sql"] = "teacherName";
$proto14["m_srcTableName"] = "teacher";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "teacherTelephone",
	"m_strTable" => "teacher",
	"m_srcTableName" => "teacher"
));

$proto16["m_sql"] = "teacherTelephone";
$proto16["m_srcTableName"] = "teacher";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "teacher";
$proto19["m_srcTableName"] = "teacher";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "entryTime";
$proto19["m_columns"][] = "entryUserName";
$proto19["m_columns"][] = "id";
$proto19["m_columns"][] = "teacherAddress";
$proto19["m_columns"][] = "teacherName";
$proto19["m_columns"][] = "teacherTelephone";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "teacher";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "teacher";
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
$proto0["m_srcTableName"]="teacher";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_teacher = createSqlQuery_teacher();


	
		;

						

$tdatateacher[".sqlquery"] = $queryData_teacher;



$tableEvents["teacher"] = new eventsBase;
$tdatateacher[".hasEvents"] = false;

?>