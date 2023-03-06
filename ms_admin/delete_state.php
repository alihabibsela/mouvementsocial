<?php 
include "class/State.php";
require "session_start.php";

include "connect.php";

if(isset($_REQUEST['id'])){

$id = $_REQUEST['id'];

$return=State::delete($id);

exit($return);

}

extract($_POST);

foreach($_POST as $key => $value){
	$return=State::delete($value);
	if($return) $num++;
}



if($num>0){
	$act=5;
	}else{
	$act=6;
}

header("Location: display_state.php?act=".$act);
exit;
?>