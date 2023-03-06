<?php 
require "session_start.php";

include "connect.php";
include "config.php";
include "class/Volunteer_form.php";
include "change_format.php";


extract($_POST);



$submitted_date_time=change_timeformat($submitted_date_time);
$dob=change_format($dob);


$query = "submitted_date_time='".addslashes(stripslashes($submitted_date_time))."' ,ip='".addslashes(stripslashes($ip))."' ,name='".addslashes(stripslashes($name))."' ,email='".addslashes(stripslashes($email))."' ,phone='".addslashes(stripslashes($phone))."' ,DOB='".addslashes(stripslashes($dob))."' ,address='".addslashes(stripslashes($address))."' ,occupation='".addslashes(stripslashes($occupation))."' ,message='".addslashes(stripslashes($message))."' ";

$return=Volunteer_form::updateCondition($volunteer_form_id, $query);
if($return) $num++;

if($num>0){
	$act=3;
}else{
	$act=4;
}

header("Location: display_volunteer_form.php?act=".$act);
exit();
?>