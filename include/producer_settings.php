<?php
$tdataproducer = array();
$tdataproducer[".searchableFields"] = array();
$tdataproducer[".ShortName"] = "producer";
$tdataproducer[".OwnerID"] = "";
$tdataproducer[".OriginalTable"] = "producer";


$tdataproducer[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"]}" );
$tdataproducer[".originalPagesByType"] = $tdataproducer[".pagesByType"];
$tdataproducer[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"]}" ) );
$tdataproducer[".originalPages"] = $tdataproducer[".pages"];
$tdataproducer[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"list\":\"list\"}" );
$tdataproducer[".originalDefaultPages"] = $tdataproducer[".defaultPages"];

//	field labels
$fieldLabelsproducer = array();
$fieldToolTipsproducer = array();
$pageTitlesproducer = array();
$placeHoldersproducer = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsproducer["English"] = array();
	$fieldToolTipsproducer["English"] = array();
	$placeHoldersproducer["English"] = array();
	$pageTitlesproducer["English"] = array();
	$fieldLabelsproducer["English"]["entryTime"] = "Entry Time";
	$fieldToolTipsproducer["English"]["entryTime"] = "";
	$placeHoldersproducer["English"]["entryTime"] = "";
	$fieldLabelsproducer["English"]["entryUserName"] = "Entry User Name";
	$fieldToolTipsproducer["English"]["entryUserName"] = "";
	$placeHoldersproducer["English"]["entryUserName"] = "";
	$fieldLabelsproducer["English"]["id"] = "ID";
	$fieldToolTipsproducer["English"]["id"] = "";
	$placeHoldersproducer["English"]["id"] = "";
	$fieldLabelsproducer["English"]["producerName"] = "Producer Name";
	$fieldToolTipsproducer["English"]["producerName"] = "";
	$placeHoldersproducer["English"]["producerName"] = "";
	if (count($fieldToolTipsproducer["English"]))
		$tdataproducer[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelsproducer["Thai"] = array();
	$fieldToolTipsproducer["Thai"] = array();
	$placeHoldersproducer["Thai"] = array();
	$pageTitlesproducer["Thai"] = array();
	$fieldLabelsproducer["Thai"]["entryTime"] = "วันที่/เวลาบันทึกรายการ";
	$fieldToolTipsproducer["Thai"]["entryTime"] = "";
	$placeHoldersproducer["Thai"]["entryTime"] = "";
	$fieldLabelsproducer["Thai"]["entryUserName"] = "ผู้บันทึกรายการ";
	$fieldToolTipsproducer["Thai"]["entryUserName"] = "";
	$placeHoldersproducer["Thai"]["entryUserName"] = "";
	$fieldLabelsproducer["Thai"]["id"] = "ID";
	$fieldToolTipsproducer["Thai"]["id"] = "";
	$placeHoldersproducer["Thai"]["id"] = "";
	$fieldLabelsproducer["Thai"]["producerName"] = "ชื่อผู้ผลิต";
	$fieldToolTipsproducer["Thai"]["producerName"] = "";
	$placeHoldersproducer["Thai"]["producerName"] = "";
	if (count($fieldToolTipsproducer["Thai"]))
		$tdataproducer[".isUseToolTips"] = true;
}


	$tdataproducer[".NCSearch"] = true;



$tdataproducer[".shortTableName"] = "producer";
$tdataproducer[".nSecOptions"] = 0;

$tdataproducer[".mainTableOwnerID"] = "";
$tdataproducer[".entityType"] = 0;
$tdataproducer[".connId"] = "mc_at_192_168_1_111";


$tdataproducer[".strOriginalTableName"] = "producer";

	



$tdataproducer[".showAddInPopup"] = false;

$tdataproducer[".showEditInPopup"] = false;

$tdataproducer[".showViewInPopup"] = false;

$tdataproducer[".listAjax"] = false;
//	temporary
//$tdataproducer[".listAjax"] = false;

	$tdataproducer[".audit"] = false;

	$tdataproducer[".locking"] = false;


$pages = $tdataproducer[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataproducer[".edit"] = true;
	$tdataproducer[".afterEditAction"] = 1;
	$tdataproducer[".closePopupAfterEdit"] = 1;
	$tdataproducer[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataproducer[".add"] = true;
$tdataproducer[".afterAddAction"] = 1;
$tdataproducer[".closePopupAfterAdd"] = 1;
$tdataproducer[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataproducer[".list"] = true;
}



$tdataproducer[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataproducer[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataproducer[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataproducer[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataproducer[".printFriendly"] = true;
}



$tdataproducer[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataproducer[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataproducer[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataproducer[".isUseAjaxSuggest"] = true;

$tdataproducer[".rowHighlite"] = true;



						

$tdataproducer[".ajaxCodeSnippetAdded"] = false;

$tdataproducer[".buttonsAdded"] = false;

$tdataproducer[".addPageEvents"] = false;

// use timepicker for search panel
$tdataproducer[".isUseTimeForSearch"] = false;


$tdataproducer[".badgeColor"] = "DC143C";


$tdataproducer[".allSearchFields"] = array();
$tdataproducer[".filterFields"] = array();
$tdataproducer[".requiredSearchFields"] = array();

$tdataproducer[".googleLikeFields"] = array();
$tdataproducer[".googleLikeFields"][] = "id";
$tdataproducer[".googleLikeFields"][] = "producerName";
$tdataproducer[".googleLikeFields"][] = "entryUserName";
$tdataproducer[".googleLikeFields"][] = "entryTime";



$tdataproducer[".tableType"] = "list";

$tdataproducer[".printerPageOrientation"] = 0;
$tdataproducer[".nPrinterPageScale"] = 100;

$tdataproducer[".nPrinterSplitRecords"] = 40;

$tdataproducer[".geocodingEnabled"] = false;










$tdataproducer[".pageSize"] = 20;

$tdataproducer[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataproducer[".strOrderBy"] = $tstrOrderBy;

$tdataproducer[".orderindexes"] = array();


$tdataproducer[".sqlHead"] = "SELECT id,  	producerName,  	entryUserName,  	entryTime";
$tdataproducer[".sqlFrom"] = "FROM producer";
$tdataproducer[".sqlWhereExpr"] = "";
$tdataproducer[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataproducer[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataproducer[".arrGroupsPerPage"] = $arrGPP;

$tdataproducer[".highlightSearchResults"] = true;

$tableKeysproducer = array();
$tableKeysproducer[] = "id";
$tdataproducer[".Keys"] = $tableKeysproducer;


$tdataproducer[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "producer";
	$fdata["Label"] = GetFieldLabel("producer","id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

		$fdata["sourceSingle"] = "id";

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


	$tdataproducer["id"] = $fdata;
		$tdataproducer[".searchableFields"][] = "id";
//	producerName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "producerName";
	$fdata["GoodName"] = "producerName";
	$fdata["ownerTable"] = "producer";
	$fdata["Label"] = GetFieldLabel("producer","producerName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "producerName";

		$fdata["sourceSingle"] = "producerName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "producerName";

	
	
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


	$tdataproducer["producerName"] = $fdata;
		$tdataproducer[".searchableFields"][] = "producerName";
//	entryUserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "entryUserName";
	$fdata["GoodName"] = "entryUserName";
	$fdata["ownerTable"] = "producer";
	$fdata["Label"] = GetFieldLabel("producer","entryUserName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "entryUserName";

		$fdata["sourceSingle"] = "entryUserName";

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


	$tdataproducer["entryUserName"] = $fdata;
		$tdataproducer[".searchableFields"][] = "entryUserName";
//	entryTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "entryTime";
	$fdata["GoodName"] = "entryTime";
	$fdata["ownerTable"] = "producer";
	$fdata["Label"] = GetFieldLabel("producer","entryTime");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "entryTime";

		$fdata["sourceSingle"] = "entryTime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "entryTime";

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
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


	$tdataproducer["entryTime"] = $fdata;
		$tdataproducer[".searchableFields"][] = "entryTime";


$tables_data["producer"]=&$tdataproducer;
$field_labels["producer"] = &$fieldLabelsproducer;
$fieldToolTips["producer"] = &$fieldToolTipsproducer;
$placeHolders["producer"] = &$placeHoldersproducer;
$page_titles["producer"] = &$pageTitlesproducer;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["producer"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["producer"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_producer()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	producerName,  	entryUserName,  	entryTime";
$proto0["m_strFrom"] = "FROM producer";
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
	"m_strTable" => "producer",
	"m_srcTableName" => "producer"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "producer";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "producerName",
	"m_strTable" => "producer",
	"m_srcTableName" => "producer"
));

$proto8["m_sql"] = "producerName";
$proto8["m_srcTableName"] = "producer";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "entryUserName",
	"m_strTable" => "producer",
	"m_srcTableName" => "producer"
));

$proto10["m_sql"] = "entryUserName";
$proto10["m_srcTableName"] = "producer";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "entryTime",
	"m_strTable" => "producer",
	"m_srcTableName" => "producer"
));

$proto12["m_sql"] = "entryTime";
$proto12["m_srcTableName"] = "producer";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "producer";
$proto15["m_srcTableName"] = "producer";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "entryTime";
$proto15["m_columns"][] = "entryUserName";
$proto15["m_columns"][] = "id";
$proto15["m_columns"][] = "producerName";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "producer";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "producer";
$proto16=array();
$proto16["m_sql"] = "";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="producer";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_producer = createSqlQuery_producer();


	
		;

				

$tdataproducer[".sqlquery"] = $queryData_producer;



$tableEvents["producer"] = new eventsBase;
$tdataproducer[".hasEvents"] = false;

?>