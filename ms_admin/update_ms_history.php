<?php 
require "session_start.php";

include "connect.php";
include "config.php";
include "class/Ms_history.php";
include "change_format.php";


extract($_POST);




$query = "year='".addslashes(stripslashes($year))."' ,details_ar='".addslashes(stripslashes($details_ar))."' ,details_en='".addslashes(stripslashes($details_en))."' ,details_fr='".addslashes(stripslashes($details_fr))."' ";

$return=Ms_history::updateCondition($ms_history_id, $query);
if($return) $num++;

if($num>0){
	$act=3;
}else{
	$act=4;
}

header("Location: display_ms_history.php?act=".$act);
exit();
?>