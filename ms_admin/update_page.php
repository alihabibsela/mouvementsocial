<?php 
require "session_start.php";

include "connect.php";
include "config.php";
include "class/Page.php";
include "change_format.php";

include "resize.php";

extract($_POST);


$image=upload_image("image",$imagesPath);

if(is_file($imagesPath.$image)){
$page=Page::selectById($page_id);


if(is_file($imagesPath.$page->image))
{
unlink($imagesPath.$page->image);
}

$simpleImage->load($imagesPath.$image);
$simpleImage->resizeToWidth($medImageW);
$simpleImage->save($imagesPath."med_".$image);
$simpleImage->resizeToWidth($smallImageW);
$simpleImage->save($imagesPath."small_".$image);

$return=Page::updateCondition($page_id, "image='$image'");if($return) $num++;
}



$query = "name_ar='".addslashes(stripslashes($name_ar))."' ,name_en='".addslashes(stripslashes($name_en))."' ,name_fr='".addslashes(stripslashes($name_fr))."' ,details_ar='".addslashes(stripslashes($details_ar))."' ,details_en='".addslashes(stripslashes($details_en))."' ,details_fr='".addslashes(stripslashes($details_fr))."' ,video_url='".addslashes(stripslashes($video_url))."' ";

$return=Page::updateCondition($page_id, $query);
if($return) $num++;

if($num>0){
	$act=3;
}else{
	$act=4;
}

header("Location: display_page.php?act=".$act);
exit();
?>