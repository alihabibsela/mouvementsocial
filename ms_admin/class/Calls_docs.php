<?php 
class Calls_docs{

public static function select($condition){
if($condition == "") $condition=1;
$query = "select a.*   ";
$query.= " , b.title_en ";
$query.= " from calls_docs a    ";
$query.= " LEFT OUTER JOIN calls b ";
$query.= " ON a.calls_id = b.calls_id ";
$query.= "  where $condition ";
$result = mysqli_query ($_SESSION["db_conn"], $query);
$objects = array();
while($data = mysqli_fetch_object($result)){
			array_push($objects, $data);
	}
	
return $objects;
}public static function selectById($id){
$query = "select * from calls_docs where calls_docs_id=$id ";
$result = mysqli_query ($_SESSION["db_conn"], $query);
$data = mysqli_fetch_object($result);
return $data;
}public static function save($id,  $calls_id,  $doc_title_ar,  $doc_title_en,  $doc_title_fr,  $doc_ar,  $doc_en,  $doc_fr,  $orders,  $is_active){
if($id == ""){
$query = "insert into calls_docs set `calls_id` = '$calls_id' , `doc_title_ar` = '$doc_title_ar' , `doc_title_en` = '$doc_title_en' , `doc_title_fr` = '$doc_title_fr' , `doc_ar` = '$doc_ar' , `doc_en` = '$doc_en' , `doc_fr` = '$doc_fr' , `orders` = '$orders' , `is_active` = '$is_active'  "; 
}else{
$query = "update calls_docs set `calls_id` = '$calls_id' , `doc_title_ar` = '$doc_title_ar' , `doc_title_en` = '$doc_title_en' , `doc_title_fr` = '$doc_title_fr' , `doc_ar` = '$doc_ar' , `doc_en` = '$doc_en' , `doc_fr` = '$doc_fr' , `orders` = '$orders' , `is_active` = '$is_active'  where calls_docs_id = $id"; 
}mysqli_query ($_SESSION["db_conn"], $query);

	if(mysqli_affected_rows($_SESSION["db_conn"])>0){
		return true;
	}else{
		return false;
	}
	
}public static function delete($id){
$query = "delete from calls_docs where calls_docs_id=$id ";
mysqli_query ($_SESSION["db_conn"], $query);

	if(mysqli_affected_rows($_SESSION["db_conn"])>0){
		return true;
	}else{
		return false;
	}
	

}public static function updateCondition($id, $condition){
$query = "update calls_docs set $condition where calls_docs_id=$id ";
mysqli_query ($_SESSION["db_conn"], $query);

	if(mysqli_affected_rows($_SESSION["db_conn"])>0){
		return true;
	}else{
		return false;
	}
	

}public static function count($condition){
$query = "select count(*) as cc from calls_docs a where $condition";
$result = mysqli_query ($_SESSION["db_conn"], $query);
$data = mysqli_fetch_object($result);
return $data->cc;
}

}?>