<?php 
require "session_start.php";

include "connect.php";
include "config.php";
include "class/Publication_category.php";
include "change_format.php";

include "resize.php";

extract($_POST);



$active=radio_button($active);
$icon=upload_image("icon",$imagesPath);

if(is_file($imagesPath.$icon)){
$publication_category=Publication_category::selectById($publication_category_id);


if(is_file($imagesPath.$publication_category->icon))
{
unlink($imagesPath.$publication_category->icon);
}

$simpleImage->load($imagesPath.$icon);
$simpleImage->resizeToWidth($medImageW);
$simpleImage->save($imagesPath."med_".$icon);
$simpleImage->resizeToWidth($smallImageW);
$simpleImage->save($imagesPath."small_".$icon);

$return=Publication_category::updateCondition($publication_category_id, "icon='$icon'");if($return) $num++;
}



$query = "name_ar='".addslashes(stripslashes($name_ar))."' ,name_en='".addslashes(stripslashes($name_en))."' ,name_fr='".addslashes(stripslashes($name_fr))."' ,display_order='".addslashes(stripslashes($display_order))."' ,desc_ar='".addslashes(stripslashes($desc_ar))."' ,desc_en='".addslashes(stripslashes($desc_en))."' ,desc_fr='".addslashes(stripslashes($desc_fr))."' ,active='".addslashes(stripslashes($active))."' ";

$return=Publication_category::updateCondition($publication_category_id, $query);
if($return) $num++;

if($num>0){
	$act=3;
}else{
	$act=4;
}

header("Location: display_publication_category.php?act=".$act);
exit();
?>