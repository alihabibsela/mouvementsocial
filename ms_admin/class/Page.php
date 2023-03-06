<?php 
class Page{

public static function select($condition){
if($condition == "") $condition=1;
$query = "select a.*   ";
$query.= " from page a    ";
$query.= "  where $condition ";
$result = mysqli_query ($_SESSION["db_conn"], $query);
$objects = array();
while($data = mysqli_fetch_object($result)){
			array_push($objects, $data);
	}
	
return $objects;
}public static function selectById($id){
$query = "select * from page where page_id=$id ";
$result = mysqli_query ($_SESSION["db_conn"], $query);
$data = mysqli_fetch_object($result);
return $data;
}public static function save($id,  $name_ar,  $name_en,  $name_fr,  $details_ar,  $details_en,  $details_fr,  $image,  $video_url){
if($id == ""){
$query = "insert into page set `name_ar` = '$name_ar' , `name_en` = '$name_en' , `name_fr` = '$name_fr' , `details_ar` = '$details_ar' , `details_en` = '$details_en' , `details_fr` = '$details_fr' , `image` = '$image' , `video_url` = '$video_url'  "; 
}else{
$query = "update page set `name_ar` = '$name_ar' , `name_en` = '$name_en' , `name_fr` = '$name_fr' , `details_ar` = '$details_ar' , `details_en` = '$details_en' , `details_fr` = '$details_fr' , `image` = '$image' , `video_url` = '$video_url'  where page_id = $id"; 
}mysqli_query ($_SESSION["db_conn"], $query);

	if(mysqli_affected_rows($_SESSION["db_conn"])>0){
		return true;
	}else{
		return false;
	}
	
}public static function delete($id){
$query = "delete from page where page_id=$id ";
mysqli_query ($_SESSION["db_conn"], $query);

	if(mysqli_affected_rows($_SESSION["db_conn"])>0){
		return true;
	}else{
		return false;
	}
	

}public static function updateCondition($id, $condition){
$query = "update page set $condition where page_id=$id ";
mysqli_query ($_SESSION["db_conn"], $query);

	if(mysqli_affected_rows($_SESSION["db_conn"])>0){
		return true;
	}else{
		return false;
	}
	

}public static function count($condition){
$query = "select count(*) as cc from page a where $condition";
$result = mysqli_query ($_SESSION["db_conn"], $query);
$data = mysqli_fetch_object($result);
return $data->cc;
}

}?>