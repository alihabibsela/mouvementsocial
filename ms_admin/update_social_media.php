<?php 
require "session_start.php";

include "connect.php";
include "config.php";
include "class/Social_media.php";
include "change_format.php";

include "resize.php";

extract($_POST);



$is_volunteer=radio_button($is_volunteer);
$icon=upload_image("icon",$imagesPath);

if(is_file($imagesPath.$icon)){
$social_media=Social_media::selectById($social_media_id);


if(is_file($imagesPath.$social_media->icon))
{
unlink($imagesPath.$social_media->icon);
}

$simpleImage->load($imagesPath.$icon);
$simpleImage->resizeToWidth($medImageW);
$simpleImage->save($imagesPath."med_".$icon);
$simpleImage->resizeToWidth($smallImageW);
$simpleImage->save($imagesPath."small_".$icon);

$return=Social_media::updateCondition($social_media_id, "icon='$icon'");if($return) $num++;
}



$query = "social_media='".addslashes(stripslashes($social_media))."' ,url='".addslashes(stripslashes($url))."' ,orders='".addslashes(stripslashes($orders))."' ,is_volunteer='".addslashes(stripslashes($is_volunteer))."' ";

$return=Social_media::updateCondition($social_media_id, $query);
if($return) $num++;

if($num>0){
	$act=3;
}else{
	$act=4;
}

header("Location: display_social_media.php?act=".$act);
exit();
?>