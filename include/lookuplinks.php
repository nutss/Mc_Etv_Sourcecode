<?php

/**
* getLookupMainTableSettings - tests whether the lookup link exists between the tables
*
*  returns array with ProjectSettings class for main table if the link exists in project settings.
*  returns NULL otherwise
*/
function getLookupMainTableSettings($lookupTable, $mainTableShortName, $mainField, $desiredPage = "")
{
	global $lookupTableLinks;
	if(!isset($lookupTableLinks[$lookupTable]))
		return null;
	if(!isset($lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField]))
		return null;
	$arr = &$lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField];
	$effectivePage = $desiredPage;
	if(!isset($arr[$effectivePage]))
	{
		$effectivePage = PAGE_EDIT;
		if(!isset($arr[$effectivePage]))
		{
			if($desiredPage == "" && 0 < count($arr))
			{
				$effectivePage = $arr[0];
			}
			else
				return null;
		}
	}
	return new ProjectSettings($arr[$effectivePage]["table"], $effectivePage);
}

/** 
* $lookupTableLinks array stores all lookup links between tables in the project
*/
function InitLookupLinks()
{
	global $lookupTableLinks;

	$lookupTableLinks = array();

		if( !isset( $lookupTableLinks["educationLevel"] ) ) {
			$lookupTableLinks["educationLevel"] = array();
		}
		if( !isset( $lookupTableLinks["educationLevel"]["playlistmain.playlistClassLevel"] )) {
			$lookupTableLinks["educationLevel"]["playlistmain.playlistClassLevel"] = array();
		}
		$lookupTableLinks["educationLevel"]["playlistmain.playlistClassLevel"]["edit"] = array("table" => "playlistMain", "field" => "playlistClassLevel", "page" => "edit");
		if( !isset( $lookupTableLinks["subject"] ) ) {
			$lookupTableLinks["subject"] = array();
		}
		if( !isset( $lookupTableLinks["subject"]["playlistmain.playlistSubject"] )) {
			$lookupTableLinks["subject"]["playlistmain.playlistSubject"] = array();
		}
		$lookupTableLinks["subject"]["playlistmain.playlistSubject"]["edit"] = array("table" => "playlistMain", "field" => "playlistSubject", "page" => "edit");
		if( !isset( $lookupTableLinks["mediaInfo"] ) ) {
			$lookupTableLinks["mediaInfo"] = array();
		}
		if( !isset( $lookupTableLinks["mediaInfo"]["playlistsub.mediaInfoID"] )) {
			$lookupTableLinks["mediaInfo"]["playlistsub.mediaInfoID"] = array();
		}
		$lookupTableLinks["mediaInfo"]["playlistsub.mediaInfoID"]["edit"] = array("table" => "playlistSub", "field" => "mediaInfoID", "page" => "edit");
		if( !isset( $lookupTableLinks["subject"] ) ) {
			$lookupTableLinks["subject"] = array();
		}
		if( !isset( $lookupTableLinks["subject"]["playlistsub.fileSubject"] )) {
			$lookupTableLinks["subject"]["playlistsub.fileSubject"] = array();
		}
		$lookupTableLinks["subject"]["playlistsub.fileSubject"]["edit"] = array("table" => "playlistSub", "field" => "fileSubject", "page" => "edit");
		if( !isset( $lookupTableLinks["educationLevel"] ) ) {
			$lookupTableLinks["educationLevel"] = array();
		}
		if( !isset( $lookupTableLinks["educationLevel"]["playlistsub.fileClassLevel"] )) {
			$lookupTableLinks["educationLevel"]["playlistsub.fileClassLevel"] = array();
		}
		$lookupTableLinks["educationLevel"]["playlistsub.fileClassLevel"]["edit"] = array("table" => "playlistSub", "field" => "fileClassLevel", "page" => "edit");
		if( !isset( $lookupTableLinks["subject"] ) ) {
			$lookupTableLinks["subject"] = array();
		}
		if( !isset( $lookupTableLinks["subject"]["mediainfo.fileSubject"] )) {
			$lookupTableLinks["subject"]["mediainfo.fileSubject"] = array();
		}
		$lookupTableLinks["subject"]["mediainfo.fileSubject"]["edit"] = array("table" => "mediaInfo", "field" => "fileSubject", "page" => "edit");
		if( !isset( $lookupTableLinks["educationLevel"] ) ) {
			$lookupTableLinks["educationLevel"] = array();
		}
		if( !isset( $lookupTableLinks["educationLevel"]["mediainfo.fileClassLevel"] )) {
			$lookupTableLinks["educationLevel"]["mediainfo.fileClassLevel"] = array();
		}
		$lookupTableLinks["educationLevel"]["mediainfo.fileClassLevel"]["edit"] = array("table" => "mediaInfo", "field" => "fileClassLevel", "page" => "edit");
		if( !isset( $lookupTableLinks["teacher"] ) ) {
			$lookupTableLinks["teacher"] = array();
		}
		if( !isset( $lookupTableLinks["teacher"]["mediainfo.fileTeacherName"] )) {
			$lookupTableLinks["teacher"]["mediainfo.fileTeacherName"] = array();
		}
		$lookupTableLinks["teacher"]["mediainfo.fileTeacherName"]["edit"] = array("table" => "mediaInfo", "field" => "fileTeacherName", "page" => "edit");
		if( !isset( $lookupTableLinks["staffUsers"] ) ) {
			$lookupTableLinks["staffUsers"] = array();
		}
		if( !isset( $lookupTableLinks["staffUsers"]["fileadmin.censorUsername"] )) {
			$lookupTableLinks["staffUsers"]["fileadmin.censorUsername"] = array();
		}
		$lookupTableLinks["staffUsers"]["fileadmin.censorUsername"]["edit"] = array("table" => "FileAdmin", "field" => "censorUsername", "page" => "edit");
		if( !isset( $lookupTableLinks["staffUsers"] ) ) {
			$lookupTableLinks["staffUsers"] = array();
		}
		if( !isset( $lookupTableLinks["staffUsers"]["censorpass.censorUsername"] )) {
			$lookupTableLinks["staffUsers"]["censorpass.censorUsername"] = array();
		}
		$lookupTableLinks["staffUsers"]["censorpass.censorUsername"]["edit"] = array("table" => "censorPass", "field" => "censorUsername", "page" => "edit");
		if( !isset( $lookupTableLinks["staffUsers"] ) ) {
			$lookupTableLinks["staffUsers"] = array();
		}
		if( !isset( $lookupTableLinks["staffUsers"]["censorreject.censorUsername"] )) {
			$lookupTableLinks["staffUsers"]["censorreject.censorUsername"] = array();
		}
		$lookupTableLinks["staffUsers"]["censorreject.censorUsername"]["edit"] = array("table" => "censorReject", "field" => "censorUsername", "page" => "edit");
		if( !isset( $lookupTableLinks["subject"] ) ) {
			$lookupTableLinks["subject"] = array();
		}
		if( !isset( $lookupTableLinks["subject"]["mediainfo_report.fileSubject"] )) {
			$lookupTableLinks["subject"]["mediainfo_report.fileSubject"] = array();
		}
		$lookupTableLinks["subject"]["mediainfo_report.fileSubject"]["search"] = array("table" => "MediaInfo Report", "field" => "fileSubject", "page" => "search");
		if( !isset( $lookupTableLinks["educationLevel"] ) ) {
			$lookupTableLinks["educationLevel"] = array();
		}
		if( !isset( $lookupTableLinks["educationLevel"]["mediainfo_report.fileClassLevel"] )) {
			$lookupTableLinks["educationLevel"]["mediainfo_report.fileClassLevel"] = array();
		}
		$lookupTableLinks["educationLevel"]["mediainfo_report.fileClassLevel"]["search"] = array("table" => "MediaInfo Report", "field" => "fileClassLevel", "page" => "search");
		if( !isset( $lookupTableLinks["teacher"] ) ) {
			$lookupTableLinks["teacher"] = array();
		}
		if( !isset( $lookupTableLinks["teacher"]["mediainfo_report.fileTeacherName"] )) {
			$lookupTableLinks["teacher"]["mediainfo_report.fileTeacherName"] = array();
		}
		$lookupTableLinks["teacher"]["mediainfo_report.fileTeacherName"]["search"] = array("table" => "MediaInfo Report", "field" => "fileTeacherName", "page" => "search");
		if( !isset( $lookupTableLinks["educationLevel"] ) ) {
			$lookupTableLinks["educationLevel"] = array();
		}
		if( !isset( $lookupTableLinks["educationLevel"]["censor_report.fileClassLevel"] )) {
			$lookupTableLinks["educationLevel"]["censor_report.fileClassLevel"] = array();
		}
		$lookupTableLinks["educationLevel"]["censor_report.fileClassLevel"]["search"] = array("table" => "Censor Report", "field" => "fileClassLevel", "page" => "search");
		if( !isset( $lookupTableLinks["subject"] ) ) {
			$lookupTableLinks["subject"] = array();
		}
		if( !isset( $lookupTableLinks["subject"]["censor_report.fileSubject"] )) {
			$lookupTableLinks["subject"]["censor_report.fileSubject"] = array();
		}
		$lookupTableLinks["subject"]["censor_report.fileSubject"]["search"] = array("table" => "Censor Report", "field" => "fileSubject", "page" => "search");
		if( !isset( $lookupTableLinks["teacher"] ) ) {
			$lookupTableLinks["teacher"] = array();
		}
		if( !isset( $lookupTableLinks["teacher"]["censor_report.fileTeacherName"] )) {
			$lookupTableLinks["teacher"]["censor_report.fileTeacherName"] = array();
		}
		$lookupTableLinks["teacher"]["censor_report.fileTeacherName"]["search"] = array("table" => "Censor Report", "field" => "fileTeacherName", "page" => "search");
		if( !isset( $lookupTableLinks["staffUsers"] ) ) {
			$lookupTableLinks["staffUsers"] = array();
		}
		if( !isset( $lookupTableLinks["staffUsers"]["censoruncensor.censorUsername"] )) {
			$lookupTableLinks["staffUsers"]["censoruncensor.censorUsername"] = array();
		}
		$lookupTableLinks["staffUsers"]["censoruncensor.censorUsername"]["edit"] = array("table" => "censorUncensor", "field" => "censorUsername", "page" => "edit");
		if( !isset( $lookupTableLinks["subject"] ) ) {
			$lookupTableLinks["subject"] = array();
		}
		if( !isset( $lookupTableLinks["subject"]["playlist_report.playlistSubject"] )) {
			$lookupTableLinks["subject"]["playlist_report.playlistSubject"] = array();
		}
		$lookupTableLinks["subject"]["playlist_report.playlistSubject"]["search"] = array("table" => "playlist Report", "field" => "playlistSubject", "page" => "search");
		if( !isset( $lookupTableLinks["educationLevel"] ) ) {
			$lookupTableLinks["educationLevel"] = array();
		}
		if( !isset( $lookupTableLinks["educationLevel"]["playlist_report.playlistClassLevel"] )) {
			$lookupTableLinks["educationLevel"]["playlist_report.playlistClassLevel"] = array();
		}
		$lookupTableLinks["educationLevel"]["playlist_report.playlistClassLevel"]["search"] = array("table" => "playlist Report", "field" => "playlistClassLevel", "page" => "search");
		if( !isset( $lookupTableLinks["subject"] ) ) {
			$lookupTableLinks["subject"] = array();
		}
		if( !isset( $lookupTableLinks["subject"]["ingestinfo.fileSubject"] )) {
			$lookupTableLinks["subject"]["ingestinfo.fileSubject"] = array();
		}
		$lookupTableLinks["subject"]["ingestinfo.fileSubject"]["edit"] = array("table" => "IngestInfo", "field" => "fileSubject", "page" => "edit");
		if( !isset( $lookupTableLinks["educationLevel"] ) ) {
			$lookupTableLinks["educationLevel"] = array();
		}
		if( !isset( $lookupTableLinks["educationLevel"]["ingestinfo.fileClassLevel"] )) {
			$lookupTableLinks["educationLevel"]["ingestinfo.fileClassLevel"] = array();
		}
		$lookupTableLinks["educationLevel"]["ingestinfo.fileClassLevel"]["edit"] = array("table" => "IngestInfo", "field" => "fileClassLevel", "page" => "edit");
		if( !isset( $lookupTableLinks["teacher"] ) ) {
			$lookupTableLinks["teacher"] = array();
		}
		if( !isset( $lookupTableLinks["teacher"]["ingestinfo.fileTeacherName"] )) {
			$lookupTableLinks["teacher"]["ingestinfo.fileTeacherName"] = array();
		}
		$lookupTableLinks["teacher"]["ingestinfo.fileTeacherName"]["edit"] = array("table" => "IngestInfo", "field" => "fileTeacherName", "page" => "edit");
		if( !isset( $lookupTableLinks["subject"] ) ) {
			$lookupTableLinks["subject"] = array();
		}
		if( !isset( $lookupTableLinks["subject"]["downloadinfo.fileSubject"] )) {
			$lookupTableLinks["subject"]["downloadinfo.fileSubject"] = array();
		}
		$lookupTableLinks["subject"]["downloadinfo.fileSubject"]["edit"] = array("table" => "downloadInfo", "field" => "fileSubject", "page" => "edit");
		if( !isset( $lookupTableLinks["educationLevel"] ) ) {
			$lookupTableLinks["educationLevel"] = array();
		}
		if( !isset( $lookupTableLinks["educationLevel"]["downloadinfo.fileClassLevel"] )) {
			$lookupTableLinks["educationLevel"]["downloadinfo.fileClassLevel"] = array();
		}
		$lookupTableLinks["educationLevel"]["downloadinfo.fileClassLevel"]["edit"] = array("table" => "downloadInfo", "field" => "fileClassLevel", "page" => "edit");
		if( !isset( $lookupTableLinks["teacher"] ) ) {
			$lookupTableLinks["teacher"] = array();
		}
		if( !isset( $lookupTableLinks["teacher"]["downloadinfo.fileTeacherName"] )) {
			$lookupTableLinks["teacher"]["downloadinfo.fileTeacherName"] = array();
		}
		$lookupTableLinks["teacher"]["downloadinfo.fileTeacherName"]["edit"] = array("table" => "downloadInfo", "field" => "fileTeacherName", "page" => "edit");
		if( !isset( $lookupTableLinks["subject"] ) ) {
			$lookupTableLinks["subject"] = array();
		}
		if( !isset( $lookupTableLinks["subject"]["deleteinfo.fileSubject"] )) {
			$lookupTableLinks["subject"]["deleteinfo.fileSubject"] = array();
		}
		$lookupTableLinks["subject"]["deleteinfo.fileSubject"]["edit"] = array("table" => "deleteInfo", "field" => "fileSubject", "page" => "edit");
		if( !isset( $lookupTableLinks["educationLevel"] ) ) {
			$lookupTableLinks["educationLevel"] = array();
		}
		if( !isset( $lookupTableLinks["educationLevel"]["deleteinfo.fileClassLevel"] )) {
			$lookupTableLinks["educationLevel"]["deleteinfo.fileClassLevel"] = array();
		}
		$lookupTableLinks["educationLevel"]["deleteinfo.fileClassLevel"]["edit"] = array("table" => "deleteInfo", "field" => "fileClassLevel", "page" => "edit");
		if( !isset( $lookupTableLinks["teacher"] ) ) {
			$lookupTableLinks["teacher"] = array();
		}
		if( !isset( $lookupTableLinks["teacher"]["deleteinfo.fileTeacherName"] )) {
			$lookupTableLinks["teacher"]["deleteinfo.fileTeacherName"] = array();
		}
		$lookupTableLinks["teacher"]["deleteinfo.fileTeacherName"]["edit"] = array("table" => "deleteInfo", "field" => "fileTeacherName", "page" => "edit");
		if( !isset( $lookupTableLinks["staffUsers"] ) ) {
			$lookupTableLinks["staffUsers"] = array();
		}
		if( !isset( $lookupTableLinks["staffUsers"]["deleteinfo.censorUsername"] )) {
			$lookupTableLinks["staffUsers"]["deleteinfo.censorUsername"] = array();
		}
		$lookupTableLinks["staffUsers"]["deleteinfo.censorUsername"]["edit"] = array("table" => "deleteInfo", "field" => "censorUsername", "page" => "edit");
}

?>