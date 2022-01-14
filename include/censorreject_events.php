<?php

/**
 * 	Dear developer!
 *	Never modify events.php file, it is autogenerated.
 *  Modify PHP/EventTemplates/events.txt instead.
 *
 */

 class eventclass_censorreject  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["ProcessValuesAdd"]=true;

		$this->events["BeforeAdd"]=true;

		$this->events["AfterEdit"]=true;

		$this->events["BeforeShowEdit"]=true;


	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Process record values
function ProcessValuesAdd(&$values, $pageObject)
{

			$current_year = substr(date("Y")+543,2);
	$current_month = date("m");
	$current_day = date("d");

$SQLCommand = "SELECT fileNo FROM mediaInfo where (fileNo LIKE 'F-".$current_year."-".$current_month."-".$current_day."-%') ORDER BY fileNo DESC LIMIT 1";

$RS = CustomQuery($SQLCommand);
if ($data = db_fetch_array($RS)) {

$values["fileNo"] =  "F-".$current_year."-".$current_month."-".$current_day."-".sprintf("%06d",substr($data["fileNo"],-6)+1);
}
else {

$values["fileNo"] =  "F-".$current_year."-".$current_month."-".$current_day."-000001";
}


// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function ProcessValuesAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before record added
function BeforeAdd(&$values, &$message, $inline, $pageObject)
{

		
$fileArray = my_json_decode($values["fileRaw"]);

$values["fileMD5"] = hash_file("md5",$fileArray[0]["name"]);


// Place event code here.
// Use "Add Action" button to add code snippets.

return true;
;		
} // function BeforeAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record updated
function AfterEdit(&$values, $where, &$oldvalues, &$keys, $inline, $pageObject)
{

		
	if ($values['censorStatus'] != $oldvalues['censorStatus']) {


		if (($oldvalues['censorStatus']  <> "PLAYLIST") OR ($values['censorStatus'] <> "PLAYLIST")) {
			FileMoveFolder($values['id'],"","");
		}
		AlertEmailCensorStatus($values[id]);

	}


// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function AfterEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowEdit(&$xt, &$templatefile, $values, $pageObject)
{

		

	if ($values["fileStatus"] == "PROCESS") {
		$pageObject->hideField("censorStatus");
	}

// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function BeforeShowEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		



}
?>
