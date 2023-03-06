<?php require "session_start.php";

include "config.php";include "class/Currency.php";

include "connect.php";
include "change_format.php";

extract($_POST);


$return = Currency::save( addslashes($currency_id),  addslashes($currency_ar),  addslashes($currency_en),  addslashes($currency_fr));
	if($return == true){
		$act=1;
	}else{
		$act=2;
	}

header("Location: display_currency.php?act=".$act);
exit;
?>