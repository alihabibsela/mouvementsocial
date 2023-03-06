<?php 
class Testimonials{

public static function select($condition){
if($condition == "") $condition=1;
$query = "select a.*   ";
$query.= " from testimonials a    ";
$query.= "  where $condition ";
$result = mysqli_query ($_SESSION["db_conn"], $query);
$objects = array();
while($data = mysqli_fetch_object($result)){
			array_push($objects, $data);
	}
	
return $objects;
}public static function selectById($id){
$query = "select * from testimonials where testimonials_id=$id ";
$result = mysqli_query ($_SESSION["db_conn"], $query);
$data = mysqli_fetch_object($result);
return $data;
}public static function save($id,  $title_ar,  $title_en,  $title_fr,  $description_ar,  $description_en,  $description_fr,  $image,  $video_url,  $orders,  $show_home){
if($id == ""){
$query = "insert into testimonials set `title_ar` = '$title_ar' , `title_en` = '$title_en' , `title_fr` = '$title_fr' , `description_ar` = '$description_ar' , `description_en` = '$description_en' , `description_fr` = '$description_fr' , `image` = '$image' , `video_url` = '$video_url' , `orders` = '$orders' , `show_home` = '$show_home'  "; 
}else{
$query = "update testimonials set `title_ar` = '$title_ar' , `title_en` = '$title_en' , `title_fr` = '$title_fr' , `description_ar` = '$description_ar' , `description_en` = '$description_en' , `description_fr` = '$description_fr' , `image` = '$image' , `video_url` = '$video_url' , `orders` = '$orders' , `show_home` = '$show_home'  where testimonials_id = $id"; 
}mysqli_query ($_SESSION["db_conn"], $query);

	if(mysqli_affected_rows($_SESSION["db_conn"])>0){
		return true;
	}else{
		return false;
	}
	
}public static function delete($id){
$query = "delete from testimonials where testimonials_id=$id ";
mysqli_query ($_SESSION["db_conn"], $query);

	if(mysqli_affected_rows($_SESSION["db_conn"])>0){
		return true;
	}else{
		return false;
	}
	

}public static function updateCondition($id, $condition){
$query = "update testimonials set $condition where testimonials_id=$id ";
mysqli_query ($_SESSION["db_conn"], $query);

	if(mysqli_affected_rows($_SESSION["db_conn"])>0){
		return true;
	}else{
		return false;
	}
	

}public static function count($condition){
$query = "select count(*) as cc from testimonials a where $condition";
$result = mysqli_query ($_SESSION["db_conn"], $query);
$data = mysqli_fetch_object($result);
return $data->cc;
}

}?>