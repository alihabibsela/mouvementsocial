<?php 
require "session_start.php";

include "connect.php";
include "config.php";
include "class/Contact_form.php";
include "change_format.php";


extract($_POST);



$submitted_date_time=change_timeformat($submitted_date_time);


$query = "submitted_date_time='".addslashes(stripslashes($submitted_date_time))."' ,ip='".addslashes(stripslashes($ip))."' ,name='".addslashes(stripslashes($name))."' ,email_address='".addslashes(stripslashes($email_address))."' ,phone='".addslashes(stripslashes($phone))."' ,subject='".addslashes(stripslashes($subject))."' ,message='".addslashes(stripslashes($message))."' ";

$return=Contact_form::updateCondition($contact_form_id, $query);
if($return) $num++;

if($num>0){
	$act=3;
}else{
	$act=4;
}

header("Location: display_contact_form.php?act=".$act);
exit();
?>