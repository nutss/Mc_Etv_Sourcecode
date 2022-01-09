<?php
$tdataeducationlevel = array();
$tdataeducationlevel[".searchableFields"] = array();
$tdataeducationlevel[".ShortName"] = "educationlevel";
$tdataeducationlevel[".OwnerID"] = "";
$tdataeducationlevel[".OriginalTable"] = "educationLevel";


$tdataeducationlevel[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataeducationlevel[".originalPagesByType"] = $tdataeducationlevel[".pagesByType"];
$tdataeducationlevel[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataeducationlevel[".originalPages"] = $tdataeducationlevel[".pages"];
$tdataeducationlevel[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataeducationlevel[".originalDefaultPages"] = $tdataeducationlevel[".defaultPages"];

//	field labels
$fieldLabelseducationlevel = array();
$fieldToolTipseducationlevel = array();
$pageTitleseducationlevel = array();
$placeHolderseducationlevel = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelseducationlevel["English"] = array();
	$fieldToolTipseducationlevel["English"] = array();
	$placeHolderseducationlevel["English"] = array();
	$pageTitleseducationlevel["English"] = array();
	$fieldLabelseducationlevel["English"]["id"] = "ID";
	$fieldToolTipseducationlevel["English"]["id"] = "";
	$placeHolderseducationlevel["English"]["id"] = "";
	$fieldLabelseducationlevel["English"]["levelName"] = "Level Name";
	$fieldToolTipseducationlevel["English"]["levelName"] = "";
	$placeHolderseducationlevel["English"]["levelName"] = "";
	$fieldLabelseducationlevel["English"]["levelDesc"] = "Description";
	$fieldToolTipseducationlevel["English"]["levelDesc"] = "";
	$placeHolderseducationlevel["English"]["levelDesc"] = "";
	$fieldLabelseducationlevel["English"]["entryUserName"] = "Entry User Name";
	$fieldToolTipseducationlevel["English"]["entryUserName"] = "";
	$placeHolderseducationlevel["English"]["entryUserName"] = "";
	$fieldLabelseducationlevel["English"]["entryTime"] = "Entry Time";
	$fieldToolTipseducationlevel["English"]["entryTime"] = "";
	$placeHolderseducationlevel["English"]["entryTime"] = "";
	if (count($fieldToolTipseducationlevel["English"]))
		$tdataeducationlevel[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelseducationlevel["Thai"] = array();
	$fieldToolTipseducationlevel["Thai"] = array();
	$placeHolderseducationlevel["Thai"] = array();
	$pageTitleseducationlevel["Thai"] = array();
	$fieldLabelseducationlevel["Thai"]["id"] = "ID";
	$fieldToolTipseducationlevel["Thai"]["id"] = "";
	$placeHolderseducationlevel["Thai"]["id"] = "";
	$fieldLabelseducationlevel["Thai"]["levelName"] = "ระดับการศึกษา";
	$fieldToolTipseducationlevel["Thai"]["levelName"] = "";
	$placeHolderseducationlevel["Thai"]["levelName"] = "";
	$fieldLabelseducationlevel["Thai"]["levelDesc"] = "รายละเอียด";
	$fieldToolTipseducationlevel["Thai"]["levelDesc"] = "";
	$placeHolderseducationlevel["Thai"]["levelDesc"] = "";
	$fieldLabelseducationlevel["Thai"]["entryUserName"] = "ผู้บันทึกรายการ";
	$fieldToolTipseducationlevel["Thai"]["entryUserName"] = "";
	$placeHolderseducationlevel["Thai"]["entryUserName"] = "";
	$fieldLabelseducationlevel["Thai"]["entryTime"] = "วันที่/เวลาบันทึกรายการ";
	$fieldToolTipseducationlevel["Thai"]["entryTime"] = "";
	$placeHolderseducationlevel["Thai"]["entryTime"] = "";
	if (count($fieldToolTipseducationlevel["Thai"]))
		$tdataeducationlevel[".isUseToolTips"] = true;
}


	$tdataeducationlevel[".NCSearch"] = true;



$tdataeducationlevel[".shortTableName"] = "educationlevel";
$tdataeducationlevel[".nSecOptions"] = 0;

$tdataeducationlevel[".mainTableOwnerID"] = "";
$tdataeducationlevel[".entityType"] = 0;
$tdataeducationlevel[".connId"] = "mc_at_192_168_1_111";


$tdataeducationlevel[".strOriginalTableName"] = "educationLevel";

	



$tdataeducationlevel[".showAddInPopup"] = false;

$tdataeducationlevel[".showEditInPopup"] = false;

$tdataeducationlevel[".showViewInPopup"] = false;

$tdataeducationlevel[".listAjax"] = false;
//	temporary
//$tdataeducationlevel[".listAjax"] = false;

	$tdataeducationlevel[".audit"] = true;

	$tdataeducationlevel[".locking"] = false;


$pages = $tdataeducationlevel[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataeducationlevel[".edit"] = true;
	$tdataeducationlevel[".afterEditAction"] = 1;
	$tdataeducationlevel[".closePopupAfterEdit"] = 1;
	$tdataeducationlevel[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataeducationlevel[".add"] = true;
$tdataeducationlevel[".afterAddAction"] = 1;
$tdataeducationlevel[".closePopupAfterAdd"] = 1;
$tdataeducationlevel[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataeducationlevel[".list"] = true;
}



$tdataeducationlevel[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataeducationlevel[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataeducationlevel[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataeducationlevel[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataeducationlevel[".printFriendly"] = true;
}



$tdataeducationlevel[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataeducationlevel[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataeducationlevel[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataeducationlevel[".isUseAjaxSuggest"] = true;

$tdataeducationlevel[".rowHighlite"] = true;



			

$tdataeducationlevel[".ajaxCodeSnippetAdded"] = false;

$tdataeducationlevel[".buttonsAdded"] = false;

$tdataeducationlevel[".addPageEvents"] = false;

// use timepicker for search panel
$tdataeducationlevel[".isUseTimeForSearch"] = false;


$tdataeducationlevel[".badgeColor"] = "2F4F4F";


$tdataeducationlevel[".allSearchFields"] = array();
$tdataeducationlevel[".filterFields"] = array();
$tdataeducationlevel[".requiredSearchFields"] = array();

$tdataeducationlevel[".googleLikeFields"] = array();
$tdataeducationlevel[".googleLikeFields"][] = "entryTime";
$tdataeducationlevel[".googleLikeFields"][] = "entryUserName";
$tdataeducationlevel[".googleLikeFields"][] = "id";
$tdataeducationlevel[".googleLikeFields"][] = "levelDesc";
$tdataeducationlevel[".googleLikeFields"][] = "levelName";



$tdataeducationlevel[".tableType"] = "list";

$tdataeducationlevel[".printerPageOrientation"] = 0;
$tdataeducationlevel[".nPrinterPageScale"] = 100;

$tdataeducationlevel[".nPrinterSplitRecords"] = 40;

$tdataeducationlevel[".geocodingEnabled"] = false;










$tdataeducationlevel[".pageSize"] = 20;

$tdataeducationlevel[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataeducationlevel[".strOrderBy"] = $tstrOrderBy;

$tdataeducationlevel[".orderindexes"] = array();


$tdataeducationlevel[".sqlHead"] = "SELECT entryTime,  	entryUserName,  	id,  	levelDesc,  	levelName";
$tdataeducationlevel[".sqlFrom"] = "FROM educationLevel";
$tdataeducationlevel[".sqlWhereExpr"] = "";
$tdataeducationlevel[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataeducationlevel[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataeducationlevel[".arrGroupsPerPage"] = $arrGPP;

$tdataeducationlevel[".highlightSearchResults"] = true;

$tableKeyseducationlevel = array();
$tableKeyseducationlevel[] = "id";
$tdataeducationlevel[".Keys"] = $tableKeyseducationlevel;


$tdataeducationlevel[".hideMobileList"] = array();




//	entryTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "entryTime";
	$fdata["GoodName"] = "entryTime";
	$fdata["ownerTable"] = "educationLevel";
	$fdata["Label"] = GetFieldLabel("educationLevel","entryTime");
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


	$tdataeducationlevel["entryTime"] = $fdata;
		$tdataeducationlevel[".searchableFields"][] = "entryTime";
//	entryUserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "entryUserName";
	$fdata["GoodName"] = "entryUserName";
	$fdata["ownerTable"] = "educationLevel";
	$fdata["Label"] = GetFieldLabel("educationLevel","entryUserName");
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


	$tdataeducationlevel["entryUserName"] = $fdata;
		$tdataeducationlevel[".searchableFields"][] = "entryUserName";
//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "educationLevel";
	$fdata["Label"] = GetFieldLabel("educationLevel","id");
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


	$tdataeducationlevel["id"] = $fdata;
		$tdataeducationlevel[".searchableFields"][] = "id";
//	levelDesc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "levelDesc";
	$fdata["GoodName"] = "levelDesc";
	$fdata["ownerTable"] = "educationLevel";
	$fdata["Label"] = GetFieldLabel("educationLevel","levelDesc");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "levelDesc";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "levelDesc";

	
	
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


	$tdataeducationlevel["levelDesc"] = $fdata;
		$tdataeducationlevel[".searchableFields"][] = "levelDesc";
//	levelName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "levelName";
	$fdata["GoodName"] = "levelName";
	$fdata["ownerTable"] = "educationLevel";
	$fdata["Label"] = GetFieldLabel("educationLevel","levelName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "levelName";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "levelName";

	
	
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


	$tdataeducationlevel["levelName"] = $fdata;
		$tdataeducationlevel[".searchableFields"][] = "levelName";


$tables_data["educationLevel"]=&$tdataeducationlevel;
$field_labels["educationLevel"] = &$fieldLabelseducationlevel;
$fieldToolTips["educationLevel"] = &$fieldToolTipseducationlevel;
$placeHolders["educationLevel"] = &$placeHolderseducationlevel;
$page_titles["educationLevel"] = &$pageTitleseducationlevel;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["educationLevel"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["educationLevel"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_educationlevel()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "entryTime,  	entryUserName,  	id,  	levelDesc,  	levelName";
$proto0["m_strFrom"] = "FROM educationLevel";
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
	"m_strTable" => "educationLevel",
	"m_srcTableName" => "educationLevel"
));

$proto6["m_sql"] = "entryTime";
$proto6["m_srcTableName"] = "educationLevel";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "entryUserName",
	"m_strTable" => "educationLevel",
	"m_srcTableName" => "educationLevel"
));

$proto8["m_sql"] = "entryUserName";
$proto8["m_srcTableName"] = "educationLevel";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "educationLevel",
	"m_srcTableName" => "educationLevel"
));

$proto10["m_sql"] = "id";
$proto10["m_srcTableName"] = "educationLevel";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "levelDesc",
	"m_strTable" => "educationLevel",
	"m_srcTableName" => "educationLevel"
));

$proto12["m_sql"] = "levelDesc";
$proto12["m_srcTableName"] = "educationLevel";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "levelName",
	"m_strTable" => "educationLevel",
	"m_srcTableName" => "educationLevel"
));

$proto14["m_sql"] = "levelName";
$proto14["m_srcTableName"] = "educationLevel";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "educationLevel";
$proto17["m_srcTableName"] = "educationLevel";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "entryTime";
$proto17["m_columns"][] = "entryUserName";
$proto17["m_columns"][] = "id";
$proto17["m_columns"][] = "levelDesc";
$proto17["m_columns"][] = "levelName";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "educationLevel";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "educationLevel";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="educationLevel";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_educationlevel = createSqlQuery_educationlevel();


	
		;

					

$tdataeducationlevel[".sqlquery"] = $queryData_educationlevel;



$tableEvents["educationLevel"] = new eventsBase;
$tdataeducationlevel[".hasEvents"] = false;

?>