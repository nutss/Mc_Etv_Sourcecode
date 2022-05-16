<?php
$dalTableplaylistSub = array();
$dalTableplaylistSub["id"] = array("type"=>3,"varname"=>"id", "name" => "id");
$dalTableplaylistSub["mediaInfoID"] = array("type"=>13,"varname"=>"mediaInfoID", "name" => "mediaInfoID");
$dalTableplaylistSub["playlistID"] = array("type"=>13,"varname"=>"playlistID", "name" => "playlistID");
$dalTableplaylistSub["entryUserName"] = array("type"=>200,"varname"=>"entryUserName", "name" => "entryUserName");
$dalTableplaylistSub["entryTime"] = array("type"=>135,"varname"=>"entryTime", "name" => "entryTime");
	$dalTableplaylistSub["id"]["key"]=true;

$dal_info["mc_at_192_168_1_111__playlistSub"] = &$dalTableplaylistSub;
?>