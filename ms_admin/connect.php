<?php
#$db_conn=mysqli_connect("localhost","mouvemen_user","qt+zE3FC6E72");
$db_conn=mysqli_connect("localhost","root","root");
$db_conn->set_charset("utf8");
mysqli_select_db ($db_conn, "mouvement_social");
$_SESSION['db_conn'] = $db_conn;
?>
