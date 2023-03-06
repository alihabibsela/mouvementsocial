<?php
require "session_start.php";

include "connect.php";
include "config.php";
include "class/Gallery_item.php";
include "change_format.php";

include "resize.php";

extract($_POST);


$image=upload_image("image",$imagesPath);

if(is_file($imagesPath.$image)){
$gallery_item=Gallery_item::selectById($gallery_item_id);


if(is_file($imagesPath.$gallery_item->image))
{
unlink($imagesPath.$gallery_item->image);
}

$simpleImage->load($imagesPath.$image);
$simpleImage->resizeToWidth($medImageW);
$simpleImage->save($imagesPath."med_".$image);
$simpleImage->resizeToWidth($smallImageW);
$simpleImage->save($imagesPath."small_".$image);

$return=Gallery_item::updateCondition($gallery_item_id, "image='$image'");if($return) $num++;
}



$query = "gallery_id='".addslashes(stripslashes($gallery_id))."' ,video='".addslashes(stripslashes($video))."' ,orders='".addslashes(stripslashes($orders))."' ";

$return=Gallery_item::updateCondition($gallery_item_id, $query);
if($return) $num++;

if($num>0){
	$act=3;
}else{
	$act=4;
}

header("Location: display_gallery_item.php?act=".$act."&gid=".$gallery_id);
exit();
?>
