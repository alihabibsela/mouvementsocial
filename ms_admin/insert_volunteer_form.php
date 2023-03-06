<?php require "session_start.php";

include "config.php";include "class/Volunteer_form.php";

include "connect.php";
include "change_format.php";

extract($_POST);

$submitted_date_time=change_timeformat($submitted_date_time);

$DOB=change_format($DOB);


$return = Volunteer_form::save( addslashes($volunteer_form_id),  addslashes($submitted_date_time),  addslashes($ip),  addslashes($name),  addslashes($email),  addslashes($phone),  addslashes($DOB),  addslashes($address),  addslashes($occupation),  addslashes($message));
	if($return == true){
		$act=1;
	}else{
		$act=2;
	}

header("Location: display_volunteer_form.php?act=".$act);
exit;
?>