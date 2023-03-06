<?php 
class Social_media{

public static function select($condition){
if($condition == "") $condition=1;
$query = "select a.*   ";
$query.= " from social_media a    ";
$query.= "  where $condition ";
$result = mysqli_query ($_SESSION["db_conn"], $query);
$objects = array();
while($data = mysqli_fetch_object($result)){
			array_push($objects, $data);
	}
	
return $objects;
}public static function selectById($id){
$query = "select * from social_media where social_media_id=$id ";
$result = mysqli_query ($_SESSION["db_conn"], $query);
$data = mysqli_fetch_object($result);
return $data;
}public static function save($id,  $social_media,  $icon,  $url,  $orders,  $is_volunteer){
if($id == ""){
$query = "insert into social_media set `social_media` = '$social_media' , `icon` = '$icon' , `url` = '$url' , `orders` = '$orders' , `is_volunteer` = '$is_volunteer'  "; 
}else{
$query = "update social_media set `social_media` = '$social_media' , `icon` = '$icon' , `url` = '$url' , `orders` = '$orders' , `is_volunteer` = '$is_volunteer'  where social_media_id = $id"; 
}mysqli_query ($_SESSION["db_conn"], $query);

	if(mysqli_affected_rows($_SESSION["db_conn"])>0){
		return true;
	}else{
		return false;
	}
	
}public static function delete($id){
$query = "delete from social_media where social_media_id=$id ";
mysqli_query ($_SESSION["db_conn"], $query);

	if(mysqli_affected_rows($_SESSION["db_conn"])>0){
		return true;
	}else{
		return false;
	}
	

}public static function updateCondition($id, $condition){
$query = "update social_media set $condition where social_media_id=$id ";
mysqli_query ($_SESSION["db_conn"], $query);

	if(mysqli_affected_rows($_SESSION["db_conn"])>0){
		return true;
	}else{
		return false;
	}
	

}public static function count($condition){
$query = "select count(*) as cc from social_media a where $condition";
$result = mysqli_query ($_SESSION["db_conn"], $query);
$data = mysqli_fetch_object($result);
return $data->cc;
}

}?>