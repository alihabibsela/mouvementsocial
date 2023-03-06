<?php 
require "session_start.php";

include "connect.php";
include "config.php";
include "class/Finance_statement.php";
include "change_format.php";

include "file_uploader.php";

extract($_POST);


$file_an=file_uploader("file_an",$fileTypes,$filesPath);

if(is_file($filesPath.$file_an)){
$finance_statement=Finance_statement::selectById($finance_statement_id);
if(is_file($filesPath.$finance_statement->file_an)){
unlink($filesPath.$finance_statement->file_an);
}

$return=Finance_statement::updateCondition($finance_statement_id, "file_an='$file_an'");
if($return) $num++;
}

$file_en=file_uploader("file_en",$fileTypes,$filesPath);

if(is_file($filesPath.$file_en)){
$finance_statement=Finance_statement::selectById($finance_statement_id);
if(is_file($filesPath.$finance_statement->file_en)){
unlink($filesPath.$finance_statement->file_en);
}

$return=Finance_statement::updateCondition($finance_statement_id, "file_en='$file_en'");
if($return) $num++;
}

$file_fr=file_uploader("file_fr",$fileTypes,$filesPath);

if(is_file($filesPath.$file_fr)){
$finance_statement=Finance_statement::selectById($finance_statement_id);
if(is_file($filesPath.$finance_statement->file_fr)){
unlink($filesPath.$finance_statement->file_fr);
}

$return=Finance_statement::updateCondition($finance_statement_id, "file_fr='$file_fr'");
if($return) $num++;
}



$query = "year='".addslashes(stripslashes($year))."' ";

$return=Finance_statement::updateCondition($finance_statement_id, $query);
if($return) $num++;

if($num>0){
	$act=3;
}else{
	$act=4;
}

header("Location: display_finance_statement.php?act=".$act);
exit();
?>