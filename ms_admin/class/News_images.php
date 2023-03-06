<?php
class News_images{

public static function select($condition){
if($condition == "") $condition=1;
$query = "select a.*   ";
$query.= " from news_images a    ";
$query.= "  where $condition ";
//print_r($query);die();
$result = mysqli_query ($_SESSION["db_conn"], $query);
$objects = array();
while($data = mysqli_fetch_object($result)){
			array_push($objects, $data);
	}

return $objects;
}public static function selectById($id){
$query = "select * from news_images where news_images_id=$id ";
$result = mysqli_query ($_SESSION["db_conn"], $query);
$data = mysqli_fetch_object($result);
return $data;
}public static function save($id,  $image,  $is_main,  $video_url,  $orders,$news_id){
if($id == ""){
$query = "insert into news_images set `image` = '$image' , `is_main` = '$is_main' , `video_url` = '$video_url' , `orders` = '$orders', `news_id` = '$news_id'  ";
}else{
$query = "update news_images set `image` = '$image' , `is_main` = '$is_main' , `video_url` = '$video_url' , `orders` = '$orders', `news_id` = '$news_id'  where news_images_id = $id";
}mysqli_query ($_SESSION["db_conn"], $query);

	if(mysqli_affected_rows($_SESSION["db_conn"])>0){
		return true;
	}else{
		return false;
	}

}public static function delete($id){
$query = "delete from news_images where news_images_id=$id ";
mysqli_query ($_SESSION["db_conn"], $query);

	if(mysqli_affected_rows($_SESSION["db_conn"])>0){
		return true;
	}else{
		return false;
	}


}public static function updateCondition($id, $condition){
$query = "update news_images set $condition where news_images_id=$id ";
mysqli_query ($_SESSION["db_conn"], $query);

	if(mysqli_affected_rows($_SESSION["db_conn"])>0){
		return true;
	}else{
		return false;
	}


}public static function count($condition){
$query = "select count(*) as cc from news_images a where $condition";
$result = mysqli_query ($_SESSION["db_conn"], $query);
$data = mysqli_fetch_object($result);
return $data->cc;
}

}?>
