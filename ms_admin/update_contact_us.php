<?php
require "session_start.php";

include "connect.php";
include "config.php";
include "class/Contact_us.php";
include "change_format.php";


extract($_POST);




$query = "email='".addslashes(stripslashes($email))."' ,address_ar='".addslashes(stripslashes($address_ar))."' ,address_en='".addslashes(stripslashes($address_en))."' ,address_fr='".addslashes(stripslashes($address_fr))."' ,phone='".addslashes(stripslashes($phone))."' ,fax='".addslashes(stripslashes($fax))."' ";

$return=Contact_us::updateCondition($contact_us_id, $query);
if($return) $num++;

if($num>0){
	$act=3;
}else{
	$act=4;
}

header("Location: display_contact_us.php?act=".$act);
exit();
?>
