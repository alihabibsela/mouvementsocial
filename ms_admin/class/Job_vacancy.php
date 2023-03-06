<?php 
class Job_vacancy{

public static function select($condition){
if($condition == "") $condition=1;
$query = "select a.*   ";
$query.= " from job_vacancy a    ";
$query.= "  where $condition ";
$result = mysqli_query ($_SESSION["db_conn"], $query);
$objects = array();
while($data = mysqli_fetch_object($result)){
			array_push($objects, $data);
	}
	
return $objects;
}public static function selectById($id){
$query = "select * from job_vacancy where job_vacancy_id=$id ";
$result = mysqli_query ($_SESSION["db_conn"], $query);
$data = mysqli_fetch_object($result);
return $data;
}public static function save($id,  $title_ar,  $title_en,  $title_fr,  $description_ar,  $description_en,  $description_fr,  $requirements_ar,  $requirements_en,  $requirements_fr,  $dates,  $orders,  $is_active){
if($id == ""){
$query = "insert into job_vacancy set `title_ar` = '$title_ar' , `title_en` = '$title_en' , `title_fr` = '$title_fr' , `description_ar` = '$description_ar' , `description_en` = '$description_en' , `description_fr` = '$description_fr' , `requirements_ar` = '$requirements_ar' , `requirements_en` = '$requirements_en' , `requirements_fr` = '$requirements_fr' , `dates` = '$dates' , `orders` = '$orders' , `is_active` = '$is_active'  "; 
}else{
$query = "update job_vacancy set `title_ar` = '$title_ar' , `title_en` = '$title_en' , `title_fr` = '$title_fr' , `description_ar` = '$description_ar' , `description_en` = '$description_en' , `description_fr` = '$description_fr' , `requirements_ar` = '$requirements_ar' , `requirements_en` = '$requirements_en' , `requirements_fr` = '$requirements_fr' , `dates` = '$dates' , `orders` = '$orders' , `is_active` = '$is_active'  where job_vacancy_id = $id"; 
}mysqli_query ($_SESSION["db_conn"], $query);

	if(mysqli_affected_rows($_SESSION["db_conn"])>0){
		return true;
	}else{
		return false;
	}
	
}public static function delete($id){
$query = "delete from job_vacancy where job_vacancy_id=$id ";
mysqli_query ($_SESSION["db_conn"], $query);

	if(mysqli_affected_rows($_SESSION["db_conn"])>0){
		return true;
	}else{
		return false;
	}
	

}public static function updateCondition($id, $condition){
$query = "update job_vacancy set $condition where job_vacancy_id=$id ";
mysqli_query ($_SESSION["db_conn"], $query);

	if(mysqli_affected_rows($_SESSION["db_conn"])>0){
		return true;
	}else{
		return false;
	}
	

}public static function count($condition){
$query = "select count(*) as cc from job_vacancy a where $condition";
$result = mysqli_query ($_SESSION["db_conn"], $query);
$data = mysqli_fetch_object($result);
return $data->cc;
}

}?>