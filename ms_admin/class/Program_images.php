<?php
class Program_images{

public static function select($condition){
if($condition == "") $condition=1;
$query = "select a.*   ";
$query.= " from program_images a    ";
$query.= "  where $condition ";
$result = mysqli_query ($_SESSION["db_conn"], $query);
$objects = array();
while($data = mysqli_fetch_object($result)){
			array_push($objects, $data);
	}

return $objects;
}public static function selectById($id){
$query = "select * from program_images where program_images_id=$id ";
$result = mysqli_query ($_SESSION["db_conn"], $query);
$data = mysqli_fetch_object($result);
return $data;
}public static function save($id,  $image,  $is_main,  $video_url,  $orders,$programs_id){
if($id == ""){
$query = "insert into program_images set `image` = '$image' , `is_main` = '$is_main' , `video_url` = '$video_url' , `orders` = '$orders' , `programs_id` = '$programs_id'  ";
}else{
$query = "update program_images set `image` = '$image' , `is_main` = '$is_main' , `video_url` = '$video_url' , `orders` = '$orders'  , `programs_id` = '$programs_id' where program_images_id = $id";
}mysqli_query ($_SESSION["db_conn"], $query);

	if(mysqli_affected_rows($_SESSION["db_conn"])>0){
		return true;
	}else{
		return false;
	}

}public static function delete($id){
$query = "delete from program_images where program_images_id=$id ";
mysqli_query ($_SESSION["db_conn"], $query);

	if(mysqli_affected_rows($_SESSION["db_conn"])>0){
		return true;
	}else{
		return false;
	}


}public static function updateCondition($id, $condition){
$query = "update program_images set $condition where program_images_id=$id ";
mysqli_query ($_SESSION["db_conn"], $query);

	if(mysqli_affected_rows($_SESSION["db_conn"])>0){
		return true;
	}else{
		return false;
	}


}public static function count($condition){
$query = "select count(*) as cc from program_images a where $condition";
$result = mysqli_query ($_SESSION["db_conn"], $query);
$data = mysqli_fetch_object($result);
return $data->cc;
}

}?>
