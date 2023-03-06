<?php 
require "session_start.php";

include "connect.php";
include "config.php";
include "class/Publication.php";
include "change_format.php";

include "file_uploader.php";
include "resize.php";

extract($_POST);


$file_ar=file_uploader("file_ar",$fileTypes,$filesPath);

if(is_file($filesPath.$file_ar)){
$publication=Publication::selectById($publication_id);
if(is_file($filesPath.$publication->file_ar)){
unlink($filesPath.$publication->file_ar);
}

$return=Publication::updateCondition($publication_id, "file_ar='$file_ar'");
if($return) $num++;
}

$file_en=file_uploader("file_en",$fileTypes,$filesPath);

if(is_file($filesPath.$file_en)){
$publication=Publication::selectById($publication_id);
if(is_file($filesPath.$publication->file_en)){
unlink($filesPath.$publication->file_en);
}

$return=Publication::updateCondition($publication_id, "file_en='$file_en'");
if($return) $num++;
}

$file_fr=file_uploader("file_fr",$fileTypes,$filesPath);

if(is_file($filesPath.$file_fr)){
$publication=Publication::selectById($publication_id);
if(is_file($filesPath.$publication->file_fr)){
unlink($filesPath.$publication->file_fr);
}

$return=Publication::updateCondition($publication_id, "file_fr='$file_fr'");
if($return) $num++;
}

$image=upload_image("image",$imagesPath);

if(is_file($imagesPath.$image)){
$publication=Publication::selectById($publication_id);


if(is_file($imagesPath.$publication->image))
{
unlink($imagesPath.$publication->image);
}

$simpleImage->load($imagesPath.$image);
$simpleImage->resizeToWidth($medImageW);
$simpleImage->save($imagesPath."med_".$image);
$simpleImage->resizeToWidth($smallImageW);
$simpleImage->save($imagesPath."small_".$image);

$return=Publication::updateCondition($publication_id, "image='$image'");if($return) $num++;
}



$query = "title_ar='".addslashes(stripslashes($title_ar))."' ,title_en='".addslashes(stripslashes($title_en))."' ,title_fr='".addslashes(stripslashes($title_fr))."' ,details_ar='".addslashes(stripslashes($details_ar))."' ,details_en='".addslashes(stripslashes($details_en))."' ,details_fr='".addslashes(stripslashes($details_fr))."' ,publication_category_id='".addslashes(stripslashes($publication_category_id))."' ";

$return=Publication::updateCondition($publication_id, $query);
if($return) $num++;

if($num>0){
	$act=3;
}else{
	$act=4;
}

header("Location: display_publication.php?act=".$act);
exit();
?>