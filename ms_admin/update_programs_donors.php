<?php 
require "session_start.php";

include "connect.php";
include "config.php";
include "class/Programs_donors.php";
include "change_format.php";


extract($_POST);




$query = "donor_id='".addslashes(stripslashes($donor_id))."' ,program_id='".addslashes(stripslashes($program_id))."' ";

$return=Programs_donors::updateCondition($programs_donors_id, $query);
if($return) $num++;

if($num>0){
	$act=3;
}else{
	$act=4;
}

header("Location: display_programs_donors.php?act=".$act);
exit();
?>