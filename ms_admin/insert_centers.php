<?php require "session_start.php";

include "config.php";
include "class/Centers.php";
include "class/Gallery_item.php";
include "connect.php";
include "change_format.php";

extract($_POST);
extract($ProjectObj);

$return = Centers::save( addslashes($centers_id),  addslashes($name_ar),  addslashes($name_en),  addslashes($name_fr),  addslashes($address_ar),  addslashes($address_en),  addslashes($address_fr),  addslashes($phone),  addslashes($fax),  addslashes($email),  addslashes($orders),  addslashes($type)
,  addslashes($area_id),  addslashes($text_ar),  addslashes($text_en),  addslashes($text_fr));
$query = "SELECT * FROM centers ORDER BY centers_id DESC LIMIT 1";
$result = mysqli_query ($_SESSION["db_conn"], $query);
$data = mysqli_fetch_object($result);
$centers_id=$data->centers_id;
Gallery_item::delete2($centers_id);

if(isset($ImageList)){
    foreach ($ImageList as $key => $value) {
        Gallery_item::save( addslashes(""), addslashes($centers_id),  addslashes($value["image"]) ,  addslashes(""),  addslashes(0));
    }
}
if(isset($VideoList)){
    foreach ($VideoList as $key => $value) {
        Gallery_item::save( addslashes(""), addslashes($centers_id) ,  addslashes($value["image"]),  addslashes($value["video"]),  addslashes(0));
    }
}
print_r(json_encode($return));die();


if($return == true){
		$act=1;
	}else{
		$act=2;
	}

header("Location: display_centers.php?act=".$act);
exit;
?>
