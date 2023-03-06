<?php 
require "session_start.php";

include "connect.php";
include "config.php";
include "class/Testimonials.php";
include "change_format.php";

include "resize.php";

extract($_POST);



$show_home=radio_button($show_home);
$image=upload_image("image",$imagesPath);

if(is_file($imagesPath.$image)){
$testimonials=Testimonials::selectById($testimonials_id);


if(is_file($imagesPath.$testimonials->image))
{
unlink($imagesPath.$testimonials->image);
}

$simpleImage->load($imagesPath.$image);
$simpleImage->resizeToWidth($medImageW);
$simpleImage->save($imagesPath."med_".$image);
$simpleImage->resizeToWidth($smallImageW);
$simpleImage->save($imagesPath."small_".$image);

$return=Testimonials::updateCondition($testimonials_id, "image='$image'");if($return) $num++;
}



$query = "title_ar='".addslashes(stripslashes($title_ar))."' ,title_en='".addslashes(stripslashes($title_en))."' ,title_fr='".addslashes(stripslashes($title_fr))."' ,description_ar='".addslashes(stripslashes($description_ar))."' ,description_en='".addslashes(stripslashes($description_en))."' ,description_fr='".addslashes(stripslashes($description_fr))."' ,video_url='".addslashes(stripslashes($video_url))."' ,orders='".addslashes(stripslashes($orders))."' ,show_home='".addslashes(stripslashes($show_home))."' ";

$return=Testimonials::updateCondition($testimonials_id, $query);
if($return) $num++;

if($num>0){
	$act=3;
}else{
	$act=4;
}

header("Location: display_testimonials.php?act=".$act);
exit();
?>