<?php
class newsletter{

public static function select($condition){
if($condition == "") $condition=1;
$query = "select a.*   ";
$query.= " from newsletter a    ";
$query.= "  where $condition ";
$result = mysqli_query ($_SESSION["db_conn"], $query);
$objects = array();
while($data = mysqli_fetch_object($result)){
			array_push($objects, $data);
	}

return $objects;
}

public static function selectById($id){
$query = "select * from newsletter where newsletter_id=$id ";
$result = mysqli_query ($_SESSION["db_conn"], $query);
$data = mysqli_fetch_object($result);
return $data;
}

public static function count($condition){
$query = "select count(*) as cc from newsletter a where $condition";
$result = mysqli_query ($_SESSION["db_conn"], $query);
$data = mysqli_fetch_object($result);
return $data->cc;
}

}?>
