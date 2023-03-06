<?php require "session_start.php";

include "config.php";include "class/Contact_form.php";

include "connect.php";
include "change_format.php";

extract($_POST);

$submitted_date_time=change_timeformat($submitted_date_time);


$return = Contact_form::save( addslashes($contact_form_id),  addslashes($submitted_date_time),  addslashes($ip),  addslashes($name),  addslashes($email_address),  addslashes($phone),  addslashes($subject),  addslashes($message));
	if($return == true){
		$act=1;
	}else{
		$act=2;
	}

header("Location: display_contact_form.php?act=".$act);
exit;
?>