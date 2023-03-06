<?php 
require "session_start.php";

include "connect.php";
include "config.php";
include "class/State.php";
include "change_format.php";


extract($_POST);




$query = "name_ar='".addslashes(stripslashes($name_ar))."' ,name_en='".addslashes(stripslashes($name_en))."' ,name_fr='".addslashes(stripslashes($name_fr))."' ";

$return=State::updateCondition($state_id, $query);
if($return) $num++;

if($num>0){
	$act=3;
}else{
	$act=4;
}

header("Location: display_state.php?act=".$act);
exit();
?>