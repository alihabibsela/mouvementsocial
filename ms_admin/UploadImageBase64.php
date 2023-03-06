<?php
include "config.php";
 $file=$_POST["image"];
 $id=$_POST["id"];
 try{
     $directory=$imagesPath;
     if (! is_dir($directory)) {
         mkdir($directory,0777,true);
     }

         $image_partsObj = explode(";base64,", $file);
         $image_parts=$image_partsObj[1];
         $image_type="png";


     $image_base64 = base64_decode($image_parts);

     $imagename=uniqid() . ".".$image_type;
     $file = $directory .$imagename;
     file_put_contents($file, $image_base64);
     print_r(json_encode($imagename));die();
      return json_encode($file);
 }catch(Exception $err){
     return json_encode($err);
 }

?>
