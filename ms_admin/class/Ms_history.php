<?php 
class Ms_history{

public static function select($condition){
if($condition == "") $condition=1;
$query = "select a.*   ";
$query.= " from ms_history a    ";
$query.= "  where $condition ";
$result = mysqli_query ($_SESSION["db_conn"], $query);
$objects = array();
while($data = mysqli_fetch_object($result)){
			array_push($objects, $data);
	}
	
return $objects;
}public static function selectById($id){
$query = "select * from ms_history where ms_history_id=$id ";
$result = mysqli_query ($_SESSION["db_conn"], $query);
$data = mysqli_fetch_object($result);
return $data;
}public static function save($id,  $year,  $details_ar,  $details_en,  $details_fr){
if($id == ""){
$query = "insert into ms_history set `year` = '$year' , `details_ar` = '$details_ar' , `details_en` = '$details_en' , `details_fr` = '$details_fr'  "; 
}else{
$query = "update ms_history set `year` = '$year' , `details_ar` = '$details_ar' , `details_en` = '$details_en' , `details_fr` = '$details_fr'  where ms_history_id = $id"; 
}mysqli_query ($_SESSION["db_conn"], $query);

	if(mysqli_affected_rows($_SESSION["db_conn"])>0){
		return true;
	}else{
		return false;
	}
	
}public static function delete($id){
$query = "delete from ms_history where ms_history_id=$id ";
mysqli_query ($_SESSION["db_conn"], $query);

	if(mysqli_affected_rows($_SESSION["db_conn"])>0){
		return true;
	}else{
		return false;
	}
	

}public static function updateCondition($id, $condition){
$query = "update ms_history set $condition where ms_history_id=$id ";
mysqli_query ($_SESSION["db_conn"], $query);

	if(mysqli_affected_rows($_SESSION["db_conn"])>0){
		return true;
	}else{
		return false;
	}
	

}public static function count($condition){
$query = "select count(*) as cc from ms_history a where $condition";
$result = mysqli_query ($_SESSION["db_conn"], $query);
$data = mysqli_fetch_object($result);
return $data->cc;
}

}?>