<?php require "session_start.php";

include "config.php";include "class/Finance_statement.php";

include "connect.php";
include "change_format.php";
include "file_uploader.php";

extract($_POST);
$file_an=file_uploader("file_an", $fileTypes, $filesPath);

$file_en=file_uploader("file_en", $fileTypes, $filesPath);

$file_fr=file_uploader("file_fr", $fileTypes, $filesPath);



$return = Finance_statement::save( addslashes($finance_statement_id),  addslashes($year),  addslashes($file_an),  addslashes($file_en),  addslashes($file_fr),  addslashes($finance_id));
	if($return == true){
		$act=1;
	}else{
		$act=2;
	}

header("Location: display_finance_statement.php?act=".$act);
exit;
?>