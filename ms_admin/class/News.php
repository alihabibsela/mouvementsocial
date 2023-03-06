<?php
class News{

public static function select($condition){
if($condition == "") $condition=1;
$query = "select a.*   ";
$query.= " from news a    ";
$query.= "  where $condition ";
$result = mysqli_query ($_SESSION["db_conn"], $query);
$objects = array();
while($data = mysqli_fetch_object($result)){
			array_push($objects, $data);
	}

return $objects;
}public static function selectById($id){
$query = "select * from news where news_id=$id ";
$result = mysqli_query ($_SESSION["db_conn"], $query);
$data = mysqli_fetch_object($result);
return $data;
}public static function save($id,  $title_ar,  $title_en,  $title_fr,  $details_ar,  $details_en,  $details_fr,  $dates
                            , $sub_title_ar,$sub_title_en,$sub_title_fr,$sub_details_ar,$sub_details_en,$sub_details_fr){
if($id == ""){
$query = "insert into news set `title_ar` = '$title_ar' , `title_en` = '$title_en' , `title_fr` = '$title_fr' , `details_ar` = '$details_ar' , `details_en` = '$details_en' , `details_fr` = '$details_fr' , `dates` = '$dates'  ";
$query .=",sub_title_ar='".addslashes(stripslashes($sub_title_ar))."' ,sub_title_en='".addslashes(stripslashes($sub_title_en))."' ,sub_title_fr='".addslashes(stripslashes($sub_title_fr))."' ,sub_details_ar='".addslashes(stripslashes($sub_details_ar))."' ,sub_details_en='".addslashes(stripslashes($sub_details_en))."' ,sub_details_fr='".addslashes(stripslashes($sub_details_fr))."'";
}else{
$query = "update news set `title_ar` = '$title_ar' , `title_en` = '$title_en' , `title_fr` = '$title_fr' , `details_ar` = '$details_ar' , `details_en` = '$details_en' , `details_fr` = '$details_fr' , `dates` = '$dates'  where news_id = $id";
}mysqli_query ($_SESSION["db_conn"], $query);

	if(mysqli_affected_rows($_SESSION["db_conn"])>0){
		return true;
	}else{
		return false;
	}

}public static function delete($id){
$query = "delete from news where news_id=$id ";
mysqli_query ($_SESSION["db_conn"], $query);

	if(mysqli_affected_rows($_SESSION["db_conn"])>0){
		return true;
	}else{
		return false;
	}


}public static function updateCondition($id, $condition){
$query = "update news set $condition where news_id=$id ";
mysqli_query ($_SESSION["db_conn"], $query);

	if(mysqli_affected_rows($_SESSION["db_conn"])>0){
		return true;
	}else{
		return false;
	}


}public static function count($condition){
$query = "select count(*) as cc from news a where $condition";
$result = mysqli_query ($_SESSION["db_conn"], $query);
$data = mysqli_fetch_object($result);
return $data->cc;
}

}?>
