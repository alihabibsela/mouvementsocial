<?php
class Gallery_item{

public static function select($condition){
if($condition == "") $condition=1;
if(isset($_GET["gid"])) $condition= " a.centers_id=".$_GET["gid"]." AND ".$condition;
$query = "select a.*   ";
$query.= " , b.name ";
$query.= " from gallery_item a    ";
$query.= " LEFT OUTER JOIN gallery b ";
$query.= " ON a.centers_id = b.centers_id ";
$query.= "  where $condition ";
$result = mysqli_query ($_SESSION["db_conn"], $query);
$objects = array();
while($data = mysqli_fetch_object($result)){
			array_push($objects, $data);
	}

return $objects;
}public static function selectById($id){
$query = "select * from gallery_item where gallery_item_id=$id ";
$result = mysqli_query ($_SESSION["db_conn"], $query);
$data = mysqli_fetch_object($result);
return $data;
}public static function save($id,  $centers_id,  $image,  $video,  $orders){
if($id == ""){
$query = "insert into gallery_item set `centers_id` = '$centers_id' , `image` = '$image' , `video` = '$video' , `orders` = '$orders'  ";
}else{
$query = "update gallery_item set `centers_id` = '$centers_id' , `image` = '$image' , `video` = '$video' , `orders` = '$orders'  where gallery_item_id = $id";
}mysqli_query ($_SESSION["db_conn"], $query);

	if(mysqli_affected_rows($_SESSION["db_conn"])>0){
		return true;
	}else{
		return false;
	}

}

public static function delete2($Condition){
    $query = "delete from gallery_item where centers_id=$Condition";
    mysqli_query ($_SESSION["db_conn"], $query);

        if(mysqli_affected_rows($_SESSION["db_conn"])>0){
            return true;
        }else{
            return false;
        }


    }

public static function delete($id){
$query = "delete from gallery_item where gallery_item_id=$id ";
mysqli_query ($_SESSION["db_conn"], $query);

	if(mysqli_affected_rows($_SESSION["db_conn"])>0){
		return true;
	}else{
		return false;
	}


}public static function updateCondition($id, $condition){
$query = "update gallery_item set $condition where gallery_item_id=$id ";
mysqli_query ($_SESSION["db_conn"], $query);

	if(mysqli_affected_rows($_SESSION["db_conn"])>0){
		return true;
	}else{
		return false;
	}


}public static function count($condition){
$query = "select count(*) as cc from gallery_item a where $condition";
$result = mysqli_query ($_SESSION["db_conn"], $query);
$data = mysqli_fetch_object($result);
return $data->cc;
}

}?>
