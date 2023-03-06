<?php 
require "session_start.php";

include "connect.php";
include "config.php";
include "class/Donor.php";
include "change_format.php";

include "resize.php";

extract($_POST);


$image=upload_image("image",$imagesPath);

if(is_file($imagesPath.$image)){
$donor=Donor::selectById($donor_id);


if(is_file($imagesPath.$donor->image))
{
unlink($imagesPath.$donor->image);
}

$simpleImage->load($imagesPath.$image);
$simpleImage->resizeToWidth($medImageW);
$simpleImage->save($imagesPath."med_".$image);
$simpleImage->resizeToWidth($smallImageW);
$simpleImage->save($imagesPath."small_".$image);

$return=Donor::updateCondition($donor_id, "image='$image'");if($return) $num++;
}



$query = "name='".addslashes(stripslashes($name))."' ,URL='".addslashes(stripslashes($url))."' ,orders='".addslashes(stripslashes($orders))."' ";

$return=Donor::updateCondition($donor_id, $query);
if($return) $num++;

if($num>0){
	$act=3;
}else{
	$act=4;
}

header("Location: display_donor.php?act=".$act);
exit();
?>