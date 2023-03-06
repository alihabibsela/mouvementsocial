<?php require "session_start.php";

include "config.php";include "class/Donation.php";

include "connect.php";
include "change_format.php";

extract($_POST);

$date_time=change_timeformat($date_time);


$return = Donation::save( addslashes($donation_id),  addslashes($date_time),  addslashes($amount),  addslashes($currency_id),  addslashes($email_address),  addslashes($name),  addslashes($city),  addslashes($state_id),  addslashes($zipcode),  addslashes($payment_type),  addslashes($status));
	if($return == true){
		$act=1;
	}else{
		$act=2;
	}

header("Location: display_donation.php?act=".$act);
exit;
?>