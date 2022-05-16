<?php
$dalTableproducer = array();
$dalTableproducer["id"] = array("type"=>3,"varname"=>"id", "name" => "id");
$dalTableproducer["producerName"] = array("type"=>200,"varname"=>"producerName", "name" => "producerName");
$dalTableproducer["entryUserName"] = array("type"=>200,"varname"=>"entryUserName", "name" => "entryUserName");
$dalTableproducer["entryTime"] = array("type"=>135,"varname"=>"entryTime", "name" => "entryTime");
	$dalTableproducer["id"]["key"]=true;

$dal_info["mc_at_192_168_1_111__producer"] = &$dalTableproducer;
?>