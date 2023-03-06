<?php 
include "class/Centers_type.php";
require "session_start.php";

include "connect.php";

if(isset($_REQUEST['id'])){

$id = $_REQUEST['id'];

$return=Centers_type::delete($id);

exit($return);

}

extract($_POST);

foreach($_POST as $key => $value){
	$return=Centers_type::delete($value);
	if($return) $num++;
}



if($num>0){
	$act=5;
	}else{
	$act=6;
}

header("Location: display_centers_type.php?act=".$act);
exit;
?>