<?php
require "session_start.php";

include "connect.php";
include "config.php";
include "class/Program_images.php";
include "change_format.php";

include "resize.php";

extract($_POST);



$is_main=radio_button($is_main);
$image=upload_image("image",$imagesPath);

if(is_file($imagesPath.$image)){
$program_images=Program_images::selectById($program_images_id);


if(is_file($imagesPath.$program_images->image))
{
unlink($imagesPath.$program_images->image);
}

$simpleImage->load($imagesPath.$image);
$simpleImage->resizeToWidth($medImageW);
$simpleImage->save($imagesPath."med_".$image);
$simpleImage->resizeToWidth($smallImageW);
$simpleImage->save($imagesPath."small_".$image);

$return=Program_images::updateCondition($program_images_id, "image='$image'");if($return) $num++;
}



$query = "is_main='".addslashes(stripslashes($is_main))."' ,video_url='".addslashes(stripslashes($video_url))."' ,orders='".addslashes(stripslashes($orders))."',programs_id='".addslashes(stripslashes($programs_id))."' ";

$return=Program_images::updateCondition($program_images_id, $query);
if($return) $num++;

if($num>0){
	$act=3;
}else{
	$act=4;
}

header("Location: display_program_images.php?act=".$act);
exit();
?>
