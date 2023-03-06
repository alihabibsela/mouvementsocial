<?php
require "session_start.php";

include "connect.php";
include "config.php";
include "class/News_images.php";
include "change_format.php";

include "resize.php";

extract($_POST);



$is_main=radio_button($is_main);
$image=upload_image("image",$imagesPath);

if(is_file($imagesPath.$image)){
$news_images=News_images::selectById($news_images_id);


if(is_file($imagesPath.$news_images->image))
{
unlink($imagesPath.$news_images->image);
}

$simpleImage->load($imagesPath.$image);
$simpleImage->resizeToWidth($medImageW);
$simpleImage->save($imagesPath."med_".$image);
$simpleImage->resizeToWidth($smallImageW);
$simpleImage->save($imagesPath."small_".$image);

$return=News_images::updateCondition($news_images_id, "image='$image'");if($return) $num++;
}



$query = "is_main='".addslashes(stripslashes($is_main))."' ,video_url='".addslashes(stripslashes($video_url))."' ,orders='".addslashes(stripslashes($orders))."',news_id='".addslashes(stripslashes($news_id))."' ";

$return=News_images::updateCondition($news_images_id, $query);
if($return) $num++;

if($num>0){
	$act=3;
}else{
	$act=4;
}

header("Location: display_news_images.php?act=".$act);
exit();
?>
