<?php 
include "class/Founders.php";
require "session_start.php";

include "connect.php";

if(isset($_REQUEST['id'])){

$id = $_REQUEST['id'];

$return=Founders::delete($id);

exit($return);

}

extract($_POST);

foreach($_POST as $key => $value){
	$return=Founders::delete($value);
	if($return) $num++;
}



if($num>0){
	$act=5;
	}else{
	$act=6;
}

header("Location: display_founders.php?act=".$act);
exit;
?>