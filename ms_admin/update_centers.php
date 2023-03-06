<?php
require "session_start.php";

include "connect.php";
include "config.php";
include "class/Centers.php";
include "change_format.php";
include "class/Gallery_item.php";

extract($_POST);
extract($ProjectObj);


$query = "name_ar='".addslashes(stripslashes($name_ar))."' ,name_en='".addslashes(stripslashes($name_en))."' ,name_fr='".addslashes(stripslashes($name_fr))."' ,address_ar='".addslashes(stripslashes($address_ar))."' ,address_en='".addslashes(stripslashes($address_en))."' ,address_fr='".addslashes(stripslashes($address_fr))."' ,phone='".addslashes(stripslashes($phone))."' ,fax='".addslashes(stripslashes($fax))."' ,email='".addslashes(stripslashes($email))."' ,orders='".addslashes(stripslashes($orders))."' ,type='".addslashes(stripslashes($type))
."',area_id='".addslashes(stripslashes($area_id))."',text_ar='".addslashes(stripslashes($text_ar))."',text_en='".addslashes(stripslashes($text_en))."',text_fr='".addslashes(stripslashes($text_fr))."' ";

$return=Centers::updateCondition($centers_id, $query);
//print_r($_POST);die();
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



// extract($_POST);




// $query = "name_ar='".addslashes(stripslashes($name_ar))."' ,name_en='".addslashes(stripslashes($name_en))."' ,name_fr='".addslashes(stripslashes($name_fr))."' ,address_ar='".addslashes(stripslashes($address_ar))."' ,address_en='".addslashes(stripslashes($address_en))."' ,address_fr='".addslashes(stripslashes($address_fr))."' ,phone='".addslashes(stripslashes($phone))."' ,fax='".addslashes(stripslashes($fax))."' ,email='".addslashes(stripslashes($email))."' ,orders='".addslashes(stripslashes($orders))."' ,type='".addslashes(stripslashes($type))."' ";

// $return=Centers::updateCondition($centers_id, $query);
// if($return) $num++;

// if($num>0){
// 	$act=3;
// }else{
// 	$act=4;
// }

// header("Location: display_centers.php?act=".$act);
// exit();
?>
