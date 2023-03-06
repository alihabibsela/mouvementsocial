<?php 
include "class/Contact_form.php";
require "session_start.php";

include "connect.php";

if(isset($_REQUEST['id'])){

$id = $_REQUEST['id'];

$return=Contact_form::delete($id);

exit($return);

}

extract($_POST);

foreach($_POST as $key => $value){
	$return=Contact_form::delete($value);
	if($return) $num++;
}



if($num>0){
	$act=5;
	}else{
	$act=6;
}

header("Location: display_contact_form.php?act=".$act);
exit;
?>