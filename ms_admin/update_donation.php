<?php 
require "session_start.php";

include "connect.php";
include "config.php";
include "class/Donation.php";
include "change_format.php";


extract($_POST);



$date_time=change_timeformat($date_time);


$query = "date_time='".addslashes(stripslashes($date_time))."' ,amount='".addslashes(stripslashes($amount))."' ,currency_id='".addslashes(stripslashes($currency_id))."' ,email_address='".addslashes(stripslashes($email_address))."' ,name='".addslashes(stripslashes($name))."' ,city='".addslashes(stripslashes($city))."' ,state_id='".addslashes(stripslashes($state_id))."' ,zipcode='".addslashes(stripslashes($zipcode))."' ,payment_type='".addslashes(stripslashes($payment_type))."' ,status='".addslashes(stripslashes($status))."' ";

$return=Donation::updateCondition($donation_id, $query);
if($return) $num++;

if($num>0){
	$act=3;
}else{
	$act=4;
}

header("Location: display_donation.php?act=".$act);
exit();
?>