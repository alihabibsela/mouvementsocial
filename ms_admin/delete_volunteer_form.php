<?php 
include "class/Volunteer_form.php";
require "session_start.php";

include "connect.php";

if(isset($_REQUEST['id'])){

$id = $_REQUEST['id'];

$return=Volunteer_form::delete($id);

exit($return);

}

extract($_POST);

foreach($_POST as $key => $value){
	$return=Volunteer_form::delete($value);
	if($return) $num++;
}



if($num>0){
	$act=5;
	}else{
	$act=6;
}

header("Location: display_volunteer_form.php?act=".$act);
exit;
?>