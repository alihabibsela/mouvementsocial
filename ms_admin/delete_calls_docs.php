<?php 
include "class/Calls_docs.php";
require "session_start.php";

include "connect.php";

if(isset($_REQUEST['id'])){

$id = $_REQUEST['id'];

$return=Calls_docs::delete($id);

exit($return);

}

extract($_POST);

foreach($_POST as $key => $value){
	$return=Calls_docs::delete($value);
	if($return) $num++;
}



if($num>0){
	$act=5;
	}else{
	$act=6;
}

header("Location: display_calls_docs.php?act=".$act);
exit;
?>