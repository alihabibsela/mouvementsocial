<?php 
require "session_start.php";

include "connect.php";
include "config.php";
include "class/Calls_docs.php";
include "change_format.php";

include "file_uploader.php";

extract($_POST);



$is_active=radio_button($is_active);
$doc_ar=file_uploader("doc_ar",$fileTypes,$filesPath);

if(is_file($filesPath.$doc_ar)){
$calls_docs=Calls_docs::selectById($calls_docs_id);
if(is_file($filesPath.$calls_docs->doc_ar)){
unlink($filesPath.$calls_docs->doc_ar);
}

$return=Calls_docs::updateCondition($calls_docs_id, "doc_ar='$doc_ar'");
if($return) $num++;
}

$doc_en=file_uploader("doc_en",$fileTypes,$filesPath);

if(is_file($filesPath.$doc_en)){
$calls_docs=Calls_docs::selectById($calls_docs_id);
if(is_file($filesPath.$calls_docs->doc_en)){
unlink($filesPath.$calls_docs->doc_en);
}

$return=Calls_docs::updateCondition($calls_docs_id, "doc_en='$doc_en'");
if($return) $num++;
}

$doc_fr=file_uploader("doc_fr",$fileTypes,$filesPath);

if(is_file($filesPath.$doc_fr)){
$calls_docs=Calls_docs::selectById($calls_docs_id);
if(is_file($filesPath.$calls_docs->doc_fr)){
unlink($filesPath.$calls_docs->doc_fr);
}

$return=Calls_docs::updateCondition($calls_docs_id, "doc_fr='$doc_fr'");
if($return) $num++;
}



$query = "calls_id='".addslashes(stripslashes($calls_id))."' ,doc_title_ar='".addslashes(stripslashes($doc_title_ar))."' ,doc_title_en='".addslashes(stripslashes($doc_title_en))."' ,doc_title_fr='".addslashes(stripslashes($doc_title_fr))."' ,orders='".addslashes(stripslashes($orders))."' ,is_active='".addslashes(stripslashes($is_active))."' ";

$return=Calls_docs::updateCondition($calls_docs_id, $query);
if($return) $num++;

if($num>0){
	$act=3;
}else{
	$act=4;
}

header("Location: display_calls_docs.php?act=".$act);
exit();
?>