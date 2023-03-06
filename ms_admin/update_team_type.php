<?php 
require "session_start.php";

include "connect.php";
include "config.php";
include "class/Team_type.php";
include "change_format.php";


extract($_POST);




$query = "team_type_ar='".addslashes(stripslashes($team_type_ar))."' ,team_type_en='".addslashes(stripslashes($team_type_en))."' ,team_type_fr='".addslashes(stripslashes($team_type_fr))."' ";

$return=Team_type::updateCondition($team_type_id, $query);
if($return) $num++;

if($num>0){
	$act=3;
}else{
	$act=4;
}

header("Location: display_team_type.php?act=".$act);
exit();
?>