<?php
$dalTablemc_ugmembers = array();
$dalTablemc_ugmembers["UserName"] = array("type"=>200,"varname"=>"UserName", "name" => "UserName");
$dalTablemc_ugmembers["GroupID"] = array("type"=>3,"varname"=>"GroupID", "name" => "GroupID");
	$dalTablemc_ugmembers["UserName"]["key"]=true;
	$dalTablemc_ugmembers["GroupID"]["key"]=true;

$dal_info["mc_at_192_168_1_111__mc_ugmembers"] = &$dalTablemc_ugmembers;
?>