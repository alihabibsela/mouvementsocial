<?php 
require "session_start.php";

include "connect.php";

$id=$_REQUEST["id"];
$field=$_REQUEST["field"];

$sql="select * from `ms_team` where `ms_team_id`='$id' limit 1";
$result=mysqli_query ($_SESSION["db_conn"], $sql);
$image=mysqli_fetch_array($result);

if(is_file("../uploads/".$image[$field]))
{
unlink("../uploads/".$image[$field]);
}

$sql="update `ms_team` set `".$field."`=''   where `ms_team_id`='$id' limit 1";
$result=mysqli_query ($_SESSION["db_conn"], $sql);
$num=mysqli_affected_rows($_SESSION["db_conn"]);


if($num>0)
{
$act=9;
}
else
{
$act=10;
}

header("Location: edit_ms_team.php?act=".$act."&id=".$id);
exit();
?>