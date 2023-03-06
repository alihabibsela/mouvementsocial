<?php 
include "class/Job_vacancy.php";
require "session_start.php";

include "connect.php";

if(isset($_REQUEST['id'])){

$id = $_REQUEST['id'];

$return=Job_vacancy::delete($id);

exit($return);

}

extract($_POST);

foreach($_POST as $key => $value){
	$return=Job_vacancy::delete($value);
	if($return) $num++;
}



if($num>0){
	$act=5;
	}else{
	$act=6;
}

header("Location: display_job_vacancy.php?act=".$act);
exit;
?>