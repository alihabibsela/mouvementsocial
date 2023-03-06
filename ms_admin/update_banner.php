<?php 
require "session_start.php";

include "connect.php";
include "config.php";
include "class/Banner.php";
include "change_format.php";

include "resize.php";

extract($_POST);


$image=upload_image("image",$imagesPath);

if(is_file($imagesPath.$image)){
$banner=Banner::selectById($banner_id);


if(is_file($imagesPath.$banner->image))
{
unlink($imagesPath.$banner->image);
}

$simpleImage->load($imagesPath.$image);
$simpleImage->resizeToWidth($medImageW);
$simpleImage->save($imagesPath."med_".$image);
$simpleImage->resizeToWidth($smallImageW);
$simpleImage->save($imagesPath."small_".$image);

$return=Banner::updateCondition($banner_id, "image='$image'");if($return) $num++;
}



$query = "page_id='".addslashes(stripslashes($page_id))."' ,title_ar='".addslashes(stripslashes($title_ar))."' ,title_en='".addslashes(stripslashes($title_en))."' ,title_fr='".addslashes(stripslashes($title_fr))."' ,btn_title_ar='".addslashes(stripslashes($btn_title_ar))."' ,btn_title_en='".addslashes(stripslashes($btn_title_en))."' ,btn_title_fr='".addslashes(stripslashes($btn_title_fr))."' ,btn_URL='".addslashes(stripslashes($btn_url))."' ,orders='".addslashes(stripslashes($orders))."' ";

$return=Banner::updateCondition($banner_id, $query);
if($return) $num++;

if($num>0){
	$act=3;
}else{
	$act=4;
}

header("Location: display_banner.php?act=".$act);
exit();
?>