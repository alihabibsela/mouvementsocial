<?php 
require "session_start.php";

include "connect.php";
include "config.php";
include "class/Finance.php";
include "change_format.php";

include "resize.php";

extract($_POST);


$image=upload_image("image",$imagesPath);

if(is_file($imagesPath.$image)){
$finance=Finance::selectById($finance_id);


if(is_file($imagesPath.$finance->image))
{
unlink($imagesPath.$finance->image);
}

$simpleImage->load($imagesPath.$image);
$simpleImage->resizeToWidth($medImageW);
$simpleImage->save($imagesPath."med_".$image);
$simpleImage->resizeToWidth($smallImageW);
$simpleImage->save($imagesPath."small_".$image);

$return=Finance::updateCondition($finance_id, "image='$image'");if($return) $num++;
}



$query = "title_ar='".addslashes(stripslashes($title_ar))."' ,title_en='".addslashes(stripslashes($title_en))."' ,title_fr='".addslashes(stripslashes($title_fr))."' ,orders='".addslashes(stripslashes($orders))."' ";

$return=Finance::updateCondition($finance_id, $query);
if($return) $num++;

if($num>0){
	$act=3;
}else{
	$act=4;
}

header("Location: display_finance.php?act=".$act);
exit();
?>