<?php
$tdataplaylistmain = array();
$tdataplaylistmain[".searchableFields"] = array();
$tdataplaylistmain[".ShortName"] = "playlistmain";
$tdataplaylistmain[".OwnerID"] = "";
$tdataplaylistmain[".OriginalTable"] = "playlistMain";


$tdataplaylistmain[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataplaylistmain[".originalPagesByType"] = $tdataplaylistmain[".pagesByType"];
$tdataplaylistmain[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataplaylistmain[".originalPages"] = $tdataplaylistmain[".pages"];
$tdataplaylistmain[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataplaylistmain[".originalDefaultPages"] = $tdataplaylistmain[".defaultPages"];

//	field labels
$fieldLabelsplaylistmain = array();
$fieldToolTipsplaylistmain = array();
$pageTitlesplaylistmain = array();
$placeHoldersplaylistmain = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsplaylistmain["English"] = array();
	$fieldToolTipsplaylistmain["English"] = array();
	$placeHoldersplaylistmain["English"] = array();
	$pageTitlesplaylistmain["English"] = array();
	$fieldLabelsplaylistmain["English"]["id"] = "ID";
	$fieldToolTipsplaylistmain["English"]["id"] = "";
	$placeHoldersplaylistmain["English"]["id"] = "";
	$fieldLabelsplaylistmain["English"]["playlistDescription"] = "Description";
	$fieldToolTipsplaylistmain["English"]["playlistDescription"] = "";
	$placeHoldersplaylistmain["English"]["playlistDescription"] = "";
	$fieldLabelsplaylistmain["English"]["playlistSubject"] = "Subject";
	$fieldToolTipsplaylistmain["English"]["playlistSubject"] = "";
	$placeHoldersplaylistmain["English"]["playlistSubject"] = "";
	$fieldLabelsplaylistmain["English"]["playlistClassLevel"] = "Class Level";
	$fieldToolTipsplaylistmain["English"]["playlistClassLevel"] = "";
	$placeHoldersplaylistmain["English"]["playlistClassLevel"] = "";
	$fieldLabelsplaylistmain["English"]["entryUserName"] = "Entry User Name";
	$fieldToolTipsplaylistmain["English"]["entryUserName"] = "";
	$placeHoldersplaylistmain["English"]["entryUserName"] = "";
	$fieldLabelsplaylistmain["English"]["entryTime"] = "Entry Time";
	$fieldToolTipsplaylistmain["English"]["entryTime"] = "";
	$placeHoldersplaylistmain["English"]["entryTime"] = "";
	$fieldLabelsplaylistmain["English"]["playlistTitle"] = "Playlist Title";
	$fieldToolTipsplaylistmain["English"]["playlistTitle"] = "";
	$placeHoldersplaylistmain["English"]["playlistTitle"] = "";
	$fieldLabelsplaylistmain["English"]["palylistOnairTime2"] = "Palylist Onair Time2";
	$fieldToolTipsplaylistmain["English"]["palylistOnairTime2"] = "";
	$placeHoldersplaylistmain["English"]["palylistOnairTime2"] = "";
	$fieldLabelsplaylistmain["English"]["playlistOnairDate"] = "Playlist Onair Date";
	$fieldToolTipsplaylistmain["English"]["playlistOnairDate"] = "";
	$placeHoldersplaylistmain["English"]["playlistOnairDate"] = "";
	$fieldLabelsplaylistmain["English"]["playlistOnairTime1"] = "Playlist Onair Time1";
	$fieldToolTipsplaylistmain["English"]["playlistOnairTime1"] = "";
	$placeHoldersplaylistmain["English"]["playlistOnairTime1"] = "";
	if (count($fieldToolTipsplaylistmain["English"]))
		$tdataplaylistmain[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Thai")
{
	$fieldLabelsplaylistmain["Thai"] = array();
	$fieldToolTipsplaylistmain["Thai"] = array();
	$placeHoldersplaylistmain["Thai"] = array();
	$pageTitlesplaylistmain["Thai"] = array();
	$fieldLabelsplaylistmain["Thai"]["id"] = "ID";
	$fieldToolTipsplaylistmain["Thai"]["id"] = "";
	$placeHoldersplaylistmain["Thai"]["id"] = "";
	$fieldLabelsplaylistmain["Thai"]["playlistDescription"] = "รายละเอียด";
	$fieldToolTipsplaylistmain["Thai"]["playlistDescription"] = "";
	$placeHoldersplaylistmain["Thai"]["playlistDescription"] = "";
	$fieldLabelsplaylistmain["Thai"]["playlistSubject"] = "ชื่อวิชา";
	$fieldToolTipsplaylistmain["Thai"]["playlistSubject"] = "";
	$placeHoldersplaylistmain["Thai"]["playlistSubject"] = "";
	$fieldLabelsplaylistmain["Thai"]["playlistClassLevel"] = "ระดับการศึกษา";
	$fieldToolTipsplaylistmain["Thai"]["playlistClassLevel"] = "";
	$placeHoldersplaylistmain["Thai"]["playlistClassLevel"] = "";
	$fieldLabelsplaylistmain["Thai"]["entryUserName"] = "ผู้บันทึกรายการ";
	$fieldToolTipsplaylistmain["Thai"]["entryUserName"] = "";
	$placeHoldersplaylistmain["Thai"]["entryUserName"] = "";
	$fieldLabelsplaylistmain["Thai"]["entryTime"] = "วันที่/เวลาบันทึกรายการ";
	$fieldToolTipsplaylistmain["Thai"]["entryTime"] = "";
	$placeHoldersplaylistmain["Thai"]["entryTime"] = "";
	$fieldLabelsplaylistmain["Thai"]["playlistTitle"] = "รายการ";
	$fieldToolTipsplaylistmain["Thai"]["playlistTitle"] = "";
	$placeHoldersplaylistmain["Thai"]["playlistTitle"] = "";
	$fieldLabelsplaylistmain["Thai"]["palylistOnairTime2"] = "เวลาสิ้นสุดออกอากาศ";
	$fieldToolTipsplaylistmain["Thai"]["palylistOnairTime2"] = "";
	$placeHoldersplaylistmain["Thai"]["palylistOnairTime2"] = "";
	$fieldLabelsplaylistmain["Thai"]["playlistOnairDate"] = "วันออกอากาศ";
	$fieldToolTipsplaylistmain["Thai"]["playlistOnairDate"] = "";
	$placeHoldersplaylistmain["Thai"]["playlistOnairDate"] = "";
	$fieldLabelsplaylistmain["Thai"]["playlistOnairTime1"] = "เวลาเริ่มออกอากาศ";
	$fieldToolTipsplaylistmain["Thai"]["playlistOnairTime1"] = "";
	$placeHoldersplaylistmain["Thai"]["playlistOnairTime1"] = "";
	if (count($fieldToolTipsplaylistmain["Thai"]))
		$tdataplaylistmain[".isUseToolTips"] = true;
}


	$tdataplaylistmain[".NCSearch"] = true;



$tdataplaylistmain[".shortTableName"] = "playlistmain";
$tdataplaylistmain[".nSecOptions"] = 0;

$tdataplaylistmain[".mainTableOwnerID"] = "";
$tdataplaylistmain[".entityType"] = 0;
$tdataplaylistmain[".connId"] = "mc_at_192_168_1_111";


$tdataplaylistmain[".strOriginalTableName"] = "playlistMain";

	



$tdataplaylistmain[".showAddInPopup"] = false;

$tdataplaylistmain[".showEditInPopup"] = false;

$tdataplaylistmain[".showViewInPopup"] = false;

$tdataplaylistmain[".listAjax"] = false;
//	temporary
//$tdataplaylistmain[".listAjax"] = false;

	$tdataplaylistmain[".audit"] = true;

	$tdataplaylistmain[".locking"] = false;


$pages = $tdataplaylistmain[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataplaylistmain[".edit"] = true;
	$tdataplaylistmain[".afterEditAction"] = 1;
	$tdataplaylistmain[".closePopupAfterEdit"] = 1;
	$tdataplaylistmain[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataplaylistmain[".add"] = true;
$tdataplaylistmain[".afterAddAction"] = 1;
$tdataplaylistmain[".closePopupAfterAdd"] = 1;
$tdataplaylistmain[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataplaylistmain[".list"] = true;
}



$tdataplaylistmain[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataplaylistmain[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataplaylistmain[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataplaylistmain[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataplaylistmain[".printFriendly"] = true;
}



$tdataplaylistmain[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataplaylistmain[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataplaylistmain[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataplaylistmain[".isUseAjaxSuggest"] = true;

$tdataplaylistmain[".rowHighlite"] = true;



			

$tdataplaylistmain[".ajaxCodeSnippetAdded"] = false;

$tdataplaylistmain[".buttonsAdded"] = false;

$tdataplaylistmain[".addPageEvents"] = false;

// use timepicker for search panel
$tdataplaylistmain[".isUseTimeForSearch"] = false;


$tdataplaylistmain[".badgeColor"] = "B22222";


$tdataplaylistmain[".allSearchFields"] = array();
$tdataplaylistmain[".filterFields"] = array();
$tdataplaylistmain[".requiredSearchFields"] = array();

$tdataplaylistmain[".googleLikeFields"] = array();
$tdataplaylistmain[".googleLikeFields"][] = "entryTime";
$tdataplaylistmain[".googleLikeFields"][] = "entryUserName";
$tdataplaylistmain[".googleLikeFields"][] = "id";
$tdataplaylistmain[".googleLikeFields"][] = "playlistClassLevel";
$tdataplaylistmain[".googleLikeFields"][] = "playlistDescription";
$tdataplaylistmain[".googleLikeFields"][] = "playlistOnairDate";
$tdataplaylistmain[".googleLikeFields"][] = "playlistOnairTime1";
$tdataplaylistmain[".googleLikeFields"][] = "palylistOnairTime2";
$tdataplaylistmain[".googleLikeFields"][] = "playlistSubject";
$tdataplaylistmain[".googleLikeFields"][] = "playlistTitle";



$tdataplaylistmain[".tableType"] = "list";

$tdataplaylistmain[".printerPageOrientation"] = 0;
$tdataplaylistmain[".nPrinterPageScale"] = 100;

$tdataplaylistmain[".nPrinterSplitRecords"] = 40;

$tdataplaylistmain[".geocodingEnabled"] = false;










$tdataplaylistmain[".pageSize"] = 20;

$tdataplaylistmain[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataplaylistmain[".strOrderBy"] = $tstrOrderBy;

$tdataplaylistmain[".orderindexes"] = array();


$tdataplaylistmain[".sqlHead"] = "SELECT entryTime,  	entryUserName,  	id,  	playlistClassLevel,  	playlistDescription,  	playlistOnairDate,  	playlistOnairTime1,  	palylistOnairTime2,  	playlistSubject,  	playlistTitle";
$tdataplaylistmain[".sqlFrom"] = "FROM playlistMain";
$tdataplaylistmain[".sqlWhereExpr"] = "";
$tdataplaylistmain[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataplaylistmain[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataplaylistmain[".arrGroupsPerPage"] = $arrGPP;

$tdataplaylistmain[".highlightSearchResults"] = true;

$tableKeysplaylistmain = array();
$tableKeysplaylistmain[] = "id";
$tdataplaylistmain[".Keys"] = $tableKeysplaylistmain;


$tdataplaylistmain[".hideMobileList"] = array();




//	entryTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "entryTime";
	$fdata["GoodName"] = "entryTime";
	$fdata["ownerTable"] = "playlistMain";
	$fdata["Label"] = GetFieldLabel("playlistMain","entryTime");
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


	$tdataplaylistmain["entryTime"] = $fdata;
		$tdataplaylistmain[".searchableFields"][] = "entryTime";
//	entryUserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "entryUserName";
	$fdata["GoodName"] = "entryUserName";
	$fdata["ownerTable"] = "playlistMain";
	$fdata["Label"] = GetFieldLabel("playlistMain","entryUserName");
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


	$tdataplaylistmain["entryUserName"] = $fdata;
		$tdataplaylistmain[".searchableFields"][] = "entryUserName";
//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "playlistMain";
	$fdata["Label"] = GetFieldLabel("playlistMain","id");
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


	$tdataplaylistmain["id"] = $fdata;
		$tdataplaylistmain[".searchableFields"][] = "id";
//	playlistClassLevel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "playlistClassLevel";
	$fdata["GoodName"] = "playlistClassLevel";
	$fdata["ownerTable"] = "playlistMain";
	$fdata["Label"] = GetFieldLabel("playlistMain","playlistClassLevel");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "playlistClassLevel";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "playlistClassLevel";

	
	
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
		$edata["listPageId"] = "list";
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
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataplaylistmain["playlistClassLevel"] = $fdata;
		$tdataplaylistmain[".searchableFields"][] = "playlistClassLevel";
//	playlistDescription
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "playlistDescription";
	$fdata["GoodName"] = "playlistDescription";
	$fdata["ownerTable"] = "playlistMain";
	$fdata["Label"] = GetFieldLabel("playlistMain","playlistDescription");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "playlistDescription";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "playlistDescription";

	
	
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


	$tdataplaylistmain["playlistDescription"] = $fdata;
		$tdataplaylistmain[".searchableFields"][] = "playlistDescription";
//	playlistOnairDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "playlistOnairDate";
	$fdata["GoodName"] = "playlistOnairDate";
	$fdata["ownerTable"] = "playlistMain";
	$fdata["Label"] = GetFieldLabel("playlistMain","playlistOnairDate");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "playlistOnairDate";

		$fdata["sourceSingle"] = "playlistOnairDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "playlistOnairDate";

	
	
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


	$tdataplaylistmain["playlistOnairDate"] = $fdata;
		$tdataplaylistmain[".searchableFields"][] = "playlistOnairDate";
//	playlistOnairTime1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "playlistOnairTime1";
	$fdata["GoodName"] = "playlistOnairTime1";
	$fdata["ownerTable"] = "playlistMain";
	$fdata["Label"] = GetFieldLabel("playlistMain","playlistOnairTime1");
	$fdata["FieldType"] = 134;


	
	
			

		$fdata["strField"] = "playlistOnairTime1";

		$fdata["sourceSingle"] = "playlistOnairTime1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "playlistOnairTime1";

	
	
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


	$tdataplaylistmain["playlistOnairTime1"] = $fdata;
		$tdataplaylistmain[".searchableFields"][] = "playlistOnairTime1";
//	palylistOnairTime2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "palylistOnairTime2";
	$fdata["GoodName"] = "palylistOnairTime2";
	$fdata["ownerTable"] = "playlistMain";
	$fdata["Label"] = GetFieldLabel("playlistMain","palylistOnairTime2");
	$fdata["FieldType"] = 134;


	
	
			

		$fdata["strField"] = "palylistOnairTime2";

		$fdata["sourceSingle"] = "palylistOnairTime2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "palylistOnairTime2";

	
	
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


	$tdataplaylistmain["palylistOnairTime2"] = $fdata;
		$tdataplaylistmain[".searchableFields"][] = "palylistOnairTime2";
//	playlistSubject
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "playlistSubject";
	$fdata["GoodName"] = "playlistSubject";
	$fdata["ownerTable"] = "playlistMain";
	$fdata["Label"] = GetFieldLabel("playlistMain","playlistSubject");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "playlistSubject";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "playlistSubject";

	
	
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


	$tdataplaylistmain["playlistSubject"] = $fdata;
		$tdataplaylistmain[".searchableFields"][] = "playlistSubject";
//	playlistTitle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "playlistTitle";
	$fdata["GoodName"] = "playlistTitle";
	$fdata["ownerTable"] = "playlistMain";
	$fdata["Label"] = GetFieldLabel("playlistMain","playlistTitle");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "playlistTitle";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "playlistTitle";

	
	
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


	$tdataplaylistmain["playlistTitle"] = $fdata;
		$tdataplaylistmain[".searchableFields"][] = "playlistTitle";


$tables_data["playlistMain"]=&$tdataplaylistmain;
$field_labels["playlistMain"] = &$fieldLabelsplaylistmain;
$fieldToolTips["playlistMain"] = &$fieldToolTipsplaylistmain;
$placeHolders["playlistMain"] = &$placeHoldersplaylistmain;
$page_titles["playlistMain"] = &$pageTitlesplaylistmain;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["playlistMain"] = array();
//	playlistSub
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="playlistSub";
		$detailsParam["dOriginalTable"] = "playlistSub";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "playlistsub";
	$detailsParam["dCaptionTable"] = GetTableCaption("playlistSub");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["playlistMain"][$dIndex] = $detailsParam;

	
		$detailsTablesData["playlistMain"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["playlistMain"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["playlistMain"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["playlistMain"][$dIndex]["detailKeys"][]="playlistID";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["playlistMain"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_playlistmain()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "entryTime,  	entryUserName,  	id,  	playlistClassLevel,  	playlistDescription,  	playlistOnairDate,  	playlistOnairTime1,  	palylistOnairTime2,  	playlistSubject,  	playlistTitle";
$proto0["m_strFrom"] = "FROM playlistMain";
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
	"m_strTable" => "playlistMain",
	"m_srcTableName" => "playlistMain"
));

$proto6["m_sql"] = "entryTime";
$proto6["m_srcTableName"] = "playlistMain";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "entryUserName",
	"m_strTable" => "playlistMain",
	"m_srcTableName" => "playlistMain"
));

$proto8["m_sql"] = "entryUserName";
$proto8["m_srcTableName"] = "playlistMain";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "playlistMain",
	"m_srcTableName" => "playlistMain"
));

$proto10["m_sql"] = "id";
$proto10["m_srcTableName"] = "playlistMain";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "playlistClassLevel",
	"m_strTable" => "playlistMain",
	"m_srcTableName" => "playlistMain"
));

$proto12["m_sql"] = "playlistClassLevel";
$proto12["m_srcTableName"] = "playlistMain";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "playlistDescription",
	"m_strTable" => "playlistMain",
	"m_srcTableName" => "playlistMain"
));

$proto14["m_sql"] = "playlistDescription";
$proto14["m_srcTableName"] = "playlistMain";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "playlistOnairDate",
	"m_strTable" => "playlistMain",
	"m_srcTableName" => "playlistMain"
));

$proto16["m_sql"] = "playlistOnairDate";
$proto16["m_srcTableName"] = "playlistMain";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "playlistOnairTime1",
	"m_strTable" => "playlistMain",
	"m_srcTableName" => "playlistMain"
));

$proto18["m_sql"] = "playlistOnairTime1";
$proto18["m_srcTableName"] = "playlistMain";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "palylistOnairTime2",
	"m_strTable" => "playlistMain",
	"m_srcTableName" => "playlistMain"
));

$proto20["m_sql"] = "palylistOnairTime2";
$proto20["m_srcTableName"] = "playlistMain";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "playlistSubject",
	"m_strTable" => "playlistMain",
	"m_srcTableName" => "playlistMain"
));

$proto22["m_sql"] = "playlistSubject";
$proto22["m_srcTableName"] = "playlistMain";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "playlistTitle",
	"m_strTable" => "playlistMain",
	"m_srcTableName" => "playlistMain"
));

$proto24["m_sql"] = "playlistTitle";
$proto24["m_srcTableName"] = "playlistMain";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "playlistMain";
$proto27["m_srcTableName"] = "playlistMain";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "entryTime";
$proto27["m_columns"][] = "entryUserName";
$proto27["m_columns"][] = "id";
$proto27["m_columns"][] = "palylistOnairTime2";
$proto27["m_columns"][] = "playlistClassLevel";
$proto27["m_columns"][] = "playlistDescription";
$proto27["m_columns"][] = "playlistOnairDate";
$proto27["m_columns"][] = "playlistOnairTime1";
$proto27["m_columns"][] = "playlistSubject";
$proto27["m_columns"][] = "playlistTitle";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "playlistMain";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "playlistMain";
$proto28=array();
$proto28["m_sql"] = "";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "";
$proto28["m_havingmode"] = false;
$proto28["m_inBrackets"] = false;
$proto28["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto28);

$proto26["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto26);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="playlistMain";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_playlistmain = createSqlQuery_playlistmain();


	
		;

										

$tdataplaylistmain[".sqlquery"] = $queryData_playlistmain;



include_once(getabspath("include/playlistmain_events.php"));
$tableEvents["playlistMain"] = new eventclass_playlistmain;
$tdataplaylistmain[".hasEvents"] = true;

?>