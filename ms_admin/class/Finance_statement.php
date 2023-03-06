<?php 
class Finance_statement{

public static function select($condition){
if($condition == "") $condition=1;
$query = "select a.*   ";
$query.= " from finance_statement a    ";
$query.= "  where $condition ";
$result = mysqli_query ($_SESSION["db_conn"], $query);
$objects = array();
while($data = mysqli_fetch_object($result)){
			array_push($objects, $data);
	}
	
return $objects;
}public static function selectById($id){
$query = "select * from finance_statement where finance_statement_id=$id ";
$result = mysqli_query ($_SESSION["db_conn"], $query);
$data = mysqli_fetch_object($result);
return $data;
}public static function save($id,  $year,  $file_an,  $file_en,  $file_fr){
if($id == ""){
$query = "insert into finance_statement set `year` = '$year' , `file_an` = '$file_an' , `file_en` = '$file_en' , `file_fr` = '$file_fr'  "; 
}else{
$query = "update finance_statement set `year` = '$year' , `file_an` = '$file_an' , `file_en` = '$file_en' , `file_fr` = '$file_fr'  where finance_statement_id = $id"; 
}mysqli_query ($_SESSION["db_conn"], $query);

	if(mysqli_affected_rows($_SESSION["db_conn"])>0){
		return true;
	}else{
		return false;
	}
	
}public static function delete($id){
$query = "delete from finance_statement where finance_statement_id=$id ";
mysqli_query ($_SESSION["db_conn"], $query);

	if(mysqli_affected_rows($_SESSION["db_conn"])>0){
		return true;
	}else{
		return false;
	}
	

}public static function updateCondition($id, $condition){
$query = "update finance_statement set $condition where finance_statement_id=$id ";
mysqli_query ($_SESSION["db_conn"], $query);

	if(mysqli_affected_rows($_SESSION["db_conn"])>0){
		return true;
	}else{
		return false;
	}
	

}public static function count($condition){
$query = "select count(*) as cc from finance_statement a where $condition";
$result = mysqli_query ($_SESSION["db_conn"], $query);
$data = mysqli_fetch_object($result);
return $data->cc;
}

}?>