<?php require "session_start.php";

include "config.php";include "class/Contact_us.php";

include "connect.php";
include "change_format.php";

extract($_POST);


$return = Contact_us::save( addslashes($contact_us_id),  addslashes($email),  addslashes($address_ar),  addslashes($address_en),  addslashes($address_fr),  addslashes($phone),  addslashes($fax));
	if($return == true){
		$act=1;
	}else{
		$act=2;
	}

header("Location: display_contact_us.php?act=".$act);
exit;
?>
