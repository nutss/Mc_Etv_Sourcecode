<?php
$tdatamc_audit = array();
$tdatamc_audit[".searchableFields"] = array();
$tdatamc_audit[".ShortName"] = "mc_audit";
$tdatamc_audit[".OwnerID"] = "";
$tdatamc_audit[".OriginalTable"] = "mc_audit";


$tdatamc_audit[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatamc_audit[".originalPagesByType"] = $tdatamc_audit[".pagesByType"];
$tdatamc_audit[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatamc_audit[".originalPages"] = $tdatamc_audit[".pages"];
$tdatamc_audit[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatamc_audit[".originalDefaultPages"] = $tdatamc_audit[".defaultPages"];

//	field labels
$fieldLabelsmc_audit = array();
$fieldToolTipsmc_audit = array();
$pageTitlesmc_audit = array();
$placeHoldersmc_audit = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmc_audit["English"] = array();
	$fieldToolTipsmc_audit["English"] = array();
	$placeHoldersmc_audit["English"] = array();
	$pageTitlesmc_audit["English"] = array();
	$fieldLabelsmc_audit["English"]["id"] = "ID";
	$fieldToolTipsmc_audit["English"]["id"] = "";
	$placeHoldersmc_audit["English"]["id"] = "";
	$fieldLabelsmc_audit["English"]["datetime"] = "Datetime";
	$fieldToolTipsmc_audit["English"]["datetime"] = "";
	$placeHoldersmc_audit["English"]["datetime"] = "";
	$fieldLabelsmc_audit["English"]["ip"] = "IP";
	$fieldToolTipsmc_audit["English"]["ip"] = "";
	$placeHoldersmc_audit["English"]["ip"] = "";
	$fieldLabelsmc_audit["English"]["user"] = "User";
	$fieldToolTipsmc_audit["English"]["user"] = "";
	$placeHoldersmc_audit["English"]["user"] = "";
	$fieldLabelsmc_audit["English"]["table"] = "Table";
	$fieldToolTipsmc_audit["English"]["table"] = "";
	$placeHoldersmc_audit["English"]["table"] = "";
	$fieldLabelsmc_audit["English"]["action"] = "Action";
	$fieldToolTipsmc_audit["English"]["action"] = "";
	$placeHoldersmc_audit["English"]["action"] = "";
	$fieldLabelsmc_audit["English"]["description"] = "Description";
	$fieldToolTipsmc_audit["English"]["description"] = "";
	$placeHoldersmc_audit["English"]["description"] = "";
	if (count($fieldToolTipsmc_audit["English"]))
		$tdatamc_audit[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelsmc_audit["Thai"] = array();
	$fieldToolTipsmc_audit["Thai"] = array();
	$placeHoldersmc_audit["Thai"] = array();
	$pageTitlesmc_audit["Thai"] = array();
	$fieldLabelsmc_audit["Thai"]["id"] = "ID";
	$fieldToolTipsmc_audit["Thai"]["id"] = "";
	$placeHoldersmc_audit["Thai"]["id"] = "";
	$fieldLabelsmc_audit["Thai"]["datetime"] = "วันที่/เวลา";
	$fieldToolTipsmc_audit["Thai"]["datetime"] = "";
	$placeHoldersmc_audit["Thai"]["datetime"] = "";
	$fieldLabelsmc_audit["Thai"]["ip"] = "IP";
	$fieldToolTipsmc_audit["Thai"]["ip"] = "";
	$placeHoldersmc_audit["Thai"]["ip"] = "";
	$fieldLabelsmc_audit["Thai"]["user"] = "ผู้ใช้งาน";
	$fieldToolTipsmc_audit["Thai"]["user"] = "";
	$placeHoldersmc_audit["Thai"]["user"] = "";
	$fieldLabelsmc_audit["Thai"]["table"] = "Table";
	$fieldToolTipsmc_audit["Thai"]["table"] = "";
	$placeHoldersmc_audit["Thai"]["table"] = "";
	$fieldLabelsmc_audit["Thai"]["action"] = "Action";
	$fieldToolTipsmc_audit["Thai"]["action"] = "";
	$placeHoldersmc_audit["Thai"]["action"] = "";
	$fieldLabelsmc_audit["Thai"]["description"] = "รายละเอียด";
	$fieldToolTipsmc_audit["Thai"]["description"] = "";
	$placeHoldersmc_audit["Thai"]["description"] = "";
	if (count($fieldToolTipsmc_audit["Thai"]))
		$tdatamc_audit[".isUseToolTips"] = true;
}


	$tdatamc_audit[".NCSearch"] = true;



$tdatamc_audit[".shortTableName"] = "mc_audit";
$tdatamc_audit[".nSecOptions"] = 0;

$tdatamc_audit[".mainTableOwnerID"] = "";
$tdatamc_audit[".entityType"] = 0;
$tdatamc_audit[".connId"] = "mc_at_192_168_1_111";


$tdatamc_audit[".strOriginalTableName"] = "mc_audit";

	



$tdatamc_audit[".showAddInPopup"] = false;

$tdatamc_audit[".showEditInPopup"] = false;

$tdatamc_audit[".showViewInPopup"] = false;

$tdatamc_audit[".listAjax"] = false;
//	temporary
//$tdatamc_audit[".listAjax"] = false;

	$tdatamc_audit[".audit"] = false;

	$tdatamc_audit[".locking"] = false;


$pages = $tdatamc_audit[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatamc_audit[".edit"] = true;
	$tdatamc_audit[".afterEditAction"] = 1;
	$tdatamc_audit[".closePopupAfterEdit"] = 1;
	$tdatamc_audit[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatamc_audit[".add"] = true;
$tdatamc_audit[".afterAddAction"] = 1;
$tdatamc_audit[".closePopupAfterAdd"] = 1;
$tdatamc_audit[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatamc_audit[".list"] = true;
}



$tdatamc_audit[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatamc_audit[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatamc_audit[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatamc_audit[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatamc_audit[".printFriendly"] = true;
}



$tdatamc_audit[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatamc_audit[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatamc_audit[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatamc_audit[".isUseAjaxSuggest"] = true;

$tdatamc_audit[".rowHighlite"] = true;



						

$tdatamc_audit[".ajaxCodeSnippetAdded"] = false;

$tdatamc_audit[".buttonsAdded"] = false;

$tdatamc_audit[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamc_audit[".isUseTimeForSearch"] = false;


$tdatamc_audit[".badgeColor"] = "2F4F4F";


$tdatamc_audit[".allSearchFields"] = array();
$tdatamc_audit[".filterFields"] = array();
$tdatamc_audit[".requiredSearchFields"] = array();

$tdatamc_audit[".googleLikeFields"] = array();
$tdatamc_audit[".googleLikeFields"][] = "id";
$tdatamc_audit[".googleLikeFields"][] = "datetime";
$tdatamc_audit[".googleLikeFields"][] = "ip";
$tdatamc_audit[".googleLikeFields"][] = "user";
$tdatamc_audit[".googleLikeFields"][] = "table";
$tdatamc_audit[".googleLikeFields"][] = "action";
$tdatamc_audit[".googleLikeFields"][] = "description";



$tdatamc_audit[".tableType"] = "list";

$tdatamc_audit[".printerPageOrientation"] = 0;
$tdatamc_audit[".nPrinterPageScale"] = 100;

$tdatamc_audit[".nPrinterSplitRecords"] = 40;

$tdatamc_audit[".geocodingEnabled"] = false;










$tdatamc_audit[".pageSize"] = 20;

$tdatamc_audit[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatamc_audit[".strOrderBy"] = $tstrOrderBy;

$tdatamc_audit[".orderindexes"] = array();


$tdatamc_audit[".sqlHead"] = "SELECT id,  	`datetime`,  	ip,  	`user`,  	`table`,  	`action`,  	description";
$tdatamc_audit[".sqlFrom"] = "FROM mc_audit";
$tdatamc_audit[".sqlWhereExpr"] = "";
$tdatamc_audit[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamc_audit[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamc_audit[".arrGroupsPerPage"] = $arrGPP;

$tdatamc_audit[".highlightSearchResults"] = true;

$tableKeysmc_audit = array();
$tableKeysmc_audit[] = "id";
$tdatamc_audit[".Keys"] = $tableKeysmc_audit;


$tdatamc_audit[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mc_audit";
	$fdata["Label"] = GetFieldLabel("mc_audit","id");
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


	$tdatamc_audit["id"] = $fdata;
		$tdatamc_audit[".searchableFields"][] = "id";
//	datetime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "datetime";
	$fdata["GoodName"] = "datetime";
	$fdata["ownerTable"] = "mc_audit";
	$fdata["Label"] = GetFieldLabel("mc_audit","datetime");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "datetime";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`datetime`";

	
	
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


	$tdatamc_audit["datetime"] = $fdata;
		$tdatamc_audit[".searchableFields"][] = "datetime";
//	ip
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ip";
	$fdata["GoodName"] = "ip";
	$fdata["ownerTable"] = "mc_audit";
	$fdata["Label"] = GetFieldLabel("mc_audit","ip");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ip";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ip";

	
	
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
			$edata["EditParams"].= " maxlength=40";

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


	$tdatamc_audit["ip"] = $fdata;
		$tdatamc_audit[".searchableFields"][] = "ip";
//	user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "user";
	$fdata["GoodName"] = "user";
	$fdata["ownerTable"] = "mc_audit";
	$fdata["Label"] = GetFieldLabel("mc_audit","user");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "user";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`user`";

	
	
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
			$edata["EditParams"].= " maxlength=300";

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


	$tdatamc_audit["user"] = $fdata;
		$tdatamc_audit[".searchableFields"][] = "user";
//	table
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "table";
	$fdata["GoodName"] = "table";
	$fdata["ownerTable"] = "mc_audit";
	$fdata["Label"] = GetFieldLabel("mc_audit","table");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "table";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`table`";

	
	
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
			$edata["EditParams"].= " maxlength=300";

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


	$tdatamc_audit["table"] = $fdata;
		$tdatamc_audit[".searchableFields"][] = "table";
//	action
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "action";
	$fdata["GoodName"] = "action";
	$fdata["ownerTable"] = "mc_audit";
	$fdata["Label"] = GetFieldLabel("mc_audit","action");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "action";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`action`";

	
	
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
			$edata["EditParams"].= " maxlength=250";

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


	$tdatamc_audit["action"] = $fdata;
		$tdatamc_audit[".searchableFields"][] = "action";
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "mc_audit";
	$fdata["Label"] = GetFieldLabel("mc_audit","description");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "description";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "description";

	
	
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

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
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


	$tdatamc_audit["description"] = $fdata;
		$tdatamc_audit[".searchableFields"][] = "description";


$tables_data["mc_audit"]=&$tdatamc_audit;
$field_labels["mc_audit"] = &$fieldLabelsmc_audit;
$fieldToolTips["mc_audit"] = &$fieldToolTipsmc_audit;
$placeHolders["mc_audit"] = &$placeHoldersmc_audit;
$page_titles["mc_audit"] = &$pageTitlesmc_audit;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["mc_audit"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["mc_audit"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_mc_audit()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	`datetime`,  	ip,  	`user`,  	`table`,  	`action`,  	description";
$proto0["m_strFrom"] = "FROM mc_audit";
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
	"m_strTable" => "mc_audit",
	"m_srcTableName" => "mc_audit"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "mc_audit";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "datetime",
	"m_strTable" => "mc_audit",
	"m_srcTableName" => "mc_audit"
));

$proto8["m_sql"] = "`datetime`";
$proto8["m_srcTableName"] = "mc_audit";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "ip",
	"m_strTable" => "mc_audit",
	"m_srcTableName" => "mc_audit"
));

$proto10["m_sql"] = "ip";
$proto10["m_srcTableName"] = "mc_audit";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "user",
	"m_strTable" => "mc_audit",
	"m_srcTableName" => "mc_audit"
));

$proto12["m_sql"] = "`user`";
$proto12["m_srcTableName"] = "mc_audit";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "table",
	"m_strTable" => "mc_audit",
	"m_srcTableName" => "mc_audit"
));

$proto14["m_sql"] = "`table`";
$proto14["m_srcTableName"] = "mc_audit";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "action",
	"m_strTable" => "mc_audit",
	"m_srcTableName" => "mc_audit"
));

$proto16["m_sql"] = "`action`";
$proto16["m_srcTableName"] = "mc_audit";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "mc_audit",
	"m_srcTableName" => "mc_audit"
));

$proto18["m_sql"] = "description";
$proto18["m_srcTableName"] = "mc_audit";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "mc_audit";
$proto21["m_srcTableName"] = "mc_audit";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "id";
$proto21["m_columns"][] = "datetime";
$proto21["m_columns"][] = "ip";
$proto21["m_columns"][] = "user";
$proto21["m_columns"][] = "table";
$proto21["m_columns"][] = "action";
$proto21["m_columns"][] = "description";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "mc_audit";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "mc_audit";
$proto22=array();
$proto22["m_sql"] = "";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="mc_audit";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mc_audit = createSqlQuery_mc_audit();


	
		;

							

$tdatamc_audit[".sqlquery"] = $queryData_mc_audit;



$tableEvents["mc_audit"] = new eventsBase;
$tdatamc_audit[".hasEvents"] = false;

?>