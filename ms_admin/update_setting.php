<?php
require "session_start.php";
include "connect.php";

extract ( $_POST );

$sql = "UPDATE `cms_general` SET `site_title` = '$site_title', `record/page` = '$record_page', `email` = '$email' WHERE `general_id` = 1 ;";
$result = mysqli_query ($_SESSION['db_conn'], $sql );
$num = mysqli_affected_rows ($_SESSION['db_conn']);

if ($num == 1) {
	$act = 3;
} else {
	$act = 4;
}

header ( "Location: main.php?act=" . $act . "" );
exit ();
?>