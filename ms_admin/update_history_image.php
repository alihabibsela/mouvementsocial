<?php 
require "session_start.php";

include "connect.php";
include "config.php";
include "class/History_image.php";
include "change_format.php";

include "resize.php";

extract($_POST);


$image=upload_image("image",$imagesPath);

if(is_file($imagesPath.$image)){
$history_image=History_image::selectById($history_image_id);


if(is_file($imagesPath.$history_image->image))
{
unlink($imagesPath.$history_image->image);
}

$simpleImage->load($imagesPath.$image);
$simpleImage->resizeToWidth($medImageW);
$simpleImage->save($imagesPath."med_".$image);
$simpleImage->resizeToWidth($smallImageW);
$simpleImage->save($imagesPath."small_".$image);

$return=History_image::updateCondition($history_image_id, "image='$image'");if($return) $num++;
}



$query = "title='".addslashes(stripslashes($title))."' ,orders='".addslashes(stripslashes($orders))."' ";

$return=History_image::updateCondition($history_image_id, $query);
if($return) $num++;

if($num>0){
	$act=3;
}else{
	$act=4;
}

header("Location: display_history_image.php?act=".$act);
exit();
?>