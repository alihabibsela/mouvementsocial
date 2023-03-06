<?php 
require "session_start.php";

include "connect.php";
include "config.php";
include "class/Currency.php";
include "change_format.php";


extract($_POST);




$query = "currency_ar='".addslashes(stripslashes($currency_ar))."' ,currency_en='".addslashes(stripslashes($currency_en))."' ,currency_fr='".addslashes(stripslashes($currency_fr))."' ";

$return=Currency::updateCondition($currency_id, $query);
if($return) $num++;

if($num>0){
	$act=3;
}else{
	$act=4;
}

header("Location: display_currency.php?act=".$act);
exit();
?>