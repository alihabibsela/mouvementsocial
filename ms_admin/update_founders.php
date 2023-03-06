<?php
require "session_start.php";

include "connect.php";
include "config.php";
include "class/Founders.php";
include "change_format.php";

include "resize.php";

extract($_POST);



//$name_ar=change_timeformat($name_ar);
$image=upload_image("image",$imagesPath);

if(is_file($imagesPath.$image)){
$founders=Founders::selectById($founders_id);


if(is_file($imagesPath.$founders->image))
{
unlink($imagesPath.$founders->image);
}

$simpleImage->load($imagesPath.$image);
$simpleImage->resizeToWidth($medImageW);
$simpleImage->save($imagesPath."med_".$image);
$simpleImage->resizeToWidth($smallImageW);
$simpleImage->save($imagesPath."small_".$image);

$return=Founders::updateCondition($founders_id, "image='$image'");if($return) $num++;
}



$query = "name_ar='".addslashes(stripslashes($name_ar))."' ,name_en='".addslashes(stripslashes($name_en))."' ,name_fr='".addslashes(stripslashes($name_fr))."' ,position_ar='".addslashes(stripslashes($position_ar))."' ,position_en='".addslashes(stripslashes($position_en))."' ,position_fr='".addslashes(stripslashes($position_fr))."' ,orders='".addslashes(stripslashes($orders))."' ,bio_ar='".addslashes(stripslashes($bio_ar))."' ,bio_en='".addslashes(stripslashes($bio_en))."' ,bio_fr='".addslashes(stripslashes($bio_fr))."' ";

$return=Founders::updateCondition($founders_id, $query);
if($return) $num++;

if($num>0){
	$act=3;
}else{
	$act=4;
}

header("Location: display_founders.php?act=".$act);
exit();
?>
