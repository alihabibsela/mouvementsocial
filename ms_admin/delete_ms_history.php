<?php 
include "class/Ms_history.php";
require "session_start.php";

include "connect.php";

if(isset($_REQUEST['id'])){

$id = $_REQUEST['id'];

$return=Ms_history::delete($id);

exit($return);

}

extract($_POST);

foreach($_POST as $key => $value){
	$return=Ms_history::delete($value);
	if($return) $num++;
}



if($num>0){
	$act=5;
	}else{
	$act=6;
}

header("Location: display_ms_history.php?act=".$act);
exit;
?>