<?php 

require "session_start.php";

include "connect.php";

$id=$_REQUEST["id"];
$field=$_REQUEST["field"];

$sql="select * from `calls_docs` where `calls_docs_id`='$id' limit 1";
$result=mysqli_query ($_SESSION["db_conn"], $sql);
$file=mysqli_fetch_array($result);

if(is_file("../uploads/".$file[$field]))
{
unlink("../uploads/".$file[$field]);
}

$sql="update `calls_docs` set `".$field."`=''   where `calls_docs_id`='$id' limit 1";
$result=mysqli_query ($_SESSION["db_conn"], $sql);
$num=mysqli_affected_rows($_SESSION["db_conn"]);


if($num>0)
{
$act=7;
}
else
{
$act=8;
}

header("Location: edit_calls_docs.php?act=".$act."&id=".$id);
exit();
?>