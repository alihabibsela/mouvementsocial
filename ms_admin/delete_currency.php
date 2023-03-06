<?php 
include "class/Currency.php";
require "session_start.php";

include "connect.php";

if(isset($_REQUEST['id'])){

$id = $_REQUEST['id'];

$return=Currency::delete($id);

exit($return);

}

extract($_POST);

foreach($_POST as $key => $value){
	$return=Currency::delete($value);
	if($return) $num++;
}



if($num>0){
	$act=5;
	}else{
	$act=6;
}

header("Location: display_currency.php?act=".$act);
exit;
?>