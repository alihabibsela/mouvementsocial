<?php 
include "class/Finance_statement.php";
require "session_start.php";

include "connect.php";

if(isset($_REQUEST['id'])){

$id = $_REQUEST['id'];

$return=Finance_statement::delete($id);

exit($return);

}

extract($_POST);

foreach($_POST as $key => $value){
	$return=Finance_statement::delete($value);
	if($return) $num++;
}



if($num>0){
	$act=5;
	}else{
	$act=6;
}

header("Location: display_finance_statement.php?act=".$act);
exit;
?>