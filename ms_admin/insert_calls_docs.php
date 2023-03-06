<?php require "session_start.php";

include "config.php";include "class/Calls_docs.php";

include "connect.php";
include "change_format.php";
include "file_uploader.php";

extract($_POST);

$is_active=radio_button($is_active);
$doc_ar=file_uploader("doc_ar", $fileTypes, $filesPath);

$doc_en=file_uploader("doc_en", $fileTypes, $filesPath);

$doc_fr=file_uploader("doc_fr", $fileTypes, $filesPath);



$return = Calls_docs::save( addslashes($calls_docs_id),  addslashes($calls_id),  addslashes($doc_title_ar),  addslashes($doc_title_en),  addslashes($doc_title_fr),  addslashes($doc_ar),  addslashes($doc_en),  addslashes($doc_fr),  addslashes($orders),  addslashes($is_active));
	if($return == true){
		$act=1;
	}else{
		$act=2;
	}

header("Location: display_calls_docs.php?act=".$act);
exit;
?>