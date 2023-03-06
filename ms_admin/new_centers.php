<?php function main(){

include 'config.php';
?>



    <div class="container">
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#home">News Details</a></li>
            <li><a data-toggle="tab" href="#menu1">Images</a></li>
            <li><a data-toggle="tab" href="#menu2">Videos</a></li>
        </ul>


    </div>

<div class="portlet box green">
	<div class="portlet-title">
		<div class="caption"><i class="fa fa-reorder"></i>Create Centers</div>
	</div>
	<div class="portlet-body form">
	<form action="insert_centers.php" method="post" enctype="multipart/form-data" name="frm" id="frm"  class="form-horizontal form-bordered" >
   <input type="hidden" name="centers_id" value="">
    <div class="tab-content">
                    <div id="home" class="tab-pane fade in active">
                    <div class="form-body">
                    <div class="form-group">
                        <label class="col-md-3 control-label">Name ar</label>
                        <div class="col-md-3">
                            <input   name="name_ar"  type="text"  class="form-control" id="name_ar" value="" placeholder="Enter Name ar">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Name en</label>
                        <div class="col-md-3">
                            <input   name="name_en"  type="text"  class="form-control" id="name_en" value="" placeholder="Enter Name en">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Name fr</label>
                        <div class="col-md-3">
                            <input   name="name_fr"  type="text"  class="form-control" id="name_fr" value="" placeholder="Enter Name fr">
                        </div>
                    </div>
                    <div class="form-group">
                    <label class="col-md-3 control-label">Address ar</label>
                        <div class="form-group">
                        <?php
                            $fck = new FCKeditor ( "address_ar");
                            $fck->BasePath = "fckeditor/";
                            $fck->Value = "";
                            $fck->Config["EnterMode"] = "br";
                            $fck->Create ();
                        ?>
                        </div>
                    </div>
                    <div class="form-group">
                    <label class="col-md-3 control-label">Address en</label>
                        <div class="form-group">
                        <?php
                            $fck = new FCKeditor ( "address_en");
                            $fck->BasePath = "fckeditor/";
                            $fck->Value = "";
                            $fck->Config["EnterMode"] = "br";
                            $fck->Create ();
                        ?>
                        </div>
                    </div>
                    <div class="form-group">
                    <label class="col-md-3 control-label">Address fr</label>
                        <div class="form-group">
                        <?php
                            $fck = new FCKeditor ( "address_fr");
                            $fck->BasePath = "fckeditor/";
                            $fck->Value = "";
                            $fck->Config["EnterMode"] = "br";
                            $fck->Create ();
                        ?>
                        </div>
                    </div>

                    <div class="form-group">
                    <label class="col-md-3 control-label">text ar</label>
                        <div class="form-group">
                        <?php
                            $fck = new FCKeditor ( "text_ar");
                            $fck->BasePath = "fckeditor/";
                            $fck->Value = "";
                            $fck->Config["EnterMode"] = "br";
                            $fck->Create ();
                        ?>
                        </div>
                    </div>
                    <div class="form-group">
                    <label class="col-md-3 control-label">text en</label>
                        <div class="form-group">
                        <?php
                            $fck = new FCKeditor ( "text_en");
                            $fck->BasePath = "fckeditor/";
                            $fck->Value = "";
                            $fck->Config["EnterMode"] = "br";
                            $fck->Create ();
                        ?>
                        </div>
                    </div>
                    <div class="form-group">
                    <label class="col-md-3 control-label">text fr</label>
                        <div class="form-group">
                        <?php
                            $fck = new FCKeditor ( "text_fr");
                            $fck->BasePath = "fckeditor/";
                            $fck->Value = "";
                            $fck->Config["EnterMode"] = "br";
                            $fck->Create ();
                        ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">Phone</label>
                        <div class="col-md-3">
                            <input   name="phone"  type="text"  class="form-control" id="phone" value="" placeholder="Enter Phone">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Fax</label>
                        <div class="col-md-3">
                            <input   name="fax"  type="text"  class="form-control" id="fax" value="" placeholder="Enter Fax">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Email</label>
                        <div class="col-md-3">
                            <input   name="email"  type="text"  class="form-control" id="email" value="" placeholder="Enter Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Orders</label>
                        <div class="col-md-3">
                            <input   name="orders"  type="text"  class="form-control" id="orders" value="" placeholder="Enter Orders">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Type</label>
                        <div class="col-md-4">
                            <select    class="form-control select2me" data-placeholder="Select..." name="type" id="type">
                            <option selected="selected" value="0">--- Select Type ---</option>
                            <?php
                            $sql="select * from centers_type";
                            $result=mysqli_query ($_SESSION["db_conn"], $sql);
                            while($centers_type=mysqli_fetch_array($result)){?>
                            <option value="<?php echo $centers_type['centers_type_id']?>"><?php echo $centers_type["centers_type_en"]?></option>
                            <?php }?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                                        <label class="control-label col-md-3">Area</label>
                                        <div class="col-md-4">
                                            <select  class="form-control select2me" data-placeholder="Select..." name="area_id" id="area_id">
                                            <option selected="selected" value="0">--- Select Area ---</option>
                                            <?php
                                            $sql="select * from area";
                                            $result=mysqli_query ($_SESSION["db_conn"], $sql);
                                            while($area=mysqli_fetch_object($result)){
                                                ?>
                                                <option value="<?php echo $area->area_id?>" ><?php echo $area->name_en?></option>
                                            <?php }?>
                                            </select>
                                        </div>
                                    </div>
            </div> <!-- end div form body-->

                    </div>
                    <div id="menu1" class="tab-pane fade">
                        <div class="form-group row" style="height: 50px;">
                            <label class="col-md-2 col-12 col-form-label">Image</label>
                            <div class="col-md-4 col-6" style="height: 50px;">
                                <div class="kt-avatar kt-avatar--outline" id="kt_apps_user_add_avatar">
                                    <!-- <img class="kt-avatar__holder MainImage" > -->
                                    <a class="btn green MainImage"><i class="fa fa-upload" aria-hidden="true"></i> Upload</a>
                                    <input type="hidden" name="imageUpload" value="">
                                    <input type="file" name="image64" multiple style="display:none;" onchange="fileOnChange(this)">
                                </div>
                            </div>
                            <div class="col-md-2 col-2">
                                <button type="button" class="btn btn-brand btn-bold AddImage mt-5 kt-hidden" style="display:none;">
                                    Upload
                                </button>
                            </div>
                        </div>
                        <style>
                            .ImageList{
                                margin: 28px;
                                padding: 21px;
                                border: 1px solid #ccc;
                                border-style: dashed;
                            }
                            .kt-avatar__holder{
                                width: 100%;
                            }
                            #kt_apps_user_add_avatar{
                                position: relative;
                                height: 166px;
                                background-position: center;
                                background-repeat: no-repeat;
                                background-size: cover;
                                margin-bottom: 11px;
                            }
                            .removeImage{
                                position: absolute;
                                right: 5px;
                                top: 6px;
                                font-size: 19px;
                                cursor: pointer;
                            }
                            .removeImage i{
                                color: red;
                            }
                        </style>
                        <div class="ImageList row">

                        </div>
                    </div>
                    <div id="menu2" class="tab-pane fade">
                        <div class="form-group row">
                            <label class="col-md-2 col-12 col-form-label"  style="margin-top: 23px;">Video</label>
                            <div class="col-md-1 col-1">
                                <div class="kt-avatar kt-avatar--outline" id="kt_apps_user_add_avatar" style="height: 77px;width: 77px;text-align: center;">
                                    <img class="kt-avatar__holder MainVideoImage" src="<?=$imagesPath?>../../assets/images/resources/evnt-img1-2.jpg" style="height: 77px;width: 77px;">
                                    <!-- <a class="btn green MainImage"><i class="fa fa-upload" aria-hidden="true"></i> Upload</a> -->
                                    <input type="hidden" name="imageVideoUpload" value="">
                                    <input type="file" name="imageVideo64" style="display:none;" onchange="fileOnChangeVideo(this)">
                                </div>
                            </div>
                            <div class="col-md-4 col-6">
                                <input type="text" class="form-control" placeholder="Video Url" name="video" style="margin-top: 23px;">
                            </div>
                            <div class="col-md-2 col-2">
                                <button type="button" class="btn btn-brand btn-bold AddVideo mt-5 kt-hidden" style="margin-top: 23px;">
                                    Add
                                </button>
                            </div>
                        </div>

                        <style>
                            .VideoList{
                                margin: 28px;
                                padding: 21px;
                                border: 1px solid #ccc;
                                border-style: dashed;
                            }
                            .kt-avatar__holder{
                                width: 100%;
                            }
                            #kt_apps_user_add_avatar{
                                position: relative;
                                height: 166px;
                                background-position: center;
                                background-repeat: no-repeat;
                                background-size: cover;
                                margin-bottom: 11px;
                            }
                            .removeVideo{
                                position: absolute;
                                right: 5px;
                                top: 6px;
                                font-size: 19px;
                                cursor: pointer;
                            }
                            .removeVideo i{
                                color: red;
                            }
                        </style>
                        <div class="VideoList row">

                        </div>
                    </div>
                </div>


            <br/>
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-offset-3 col-md-9">
                            <button type="submit" class="btn green SubmitForm"><i class="fa fa-check"></i> Submit</button>
                            <button type="button" class="btn default"  onclick="javascript:if(confirm('Are you sure you want to leave this page?')) history.back()">Cancel</button>
                        </div>
                    </div>
                </div>
                <br/>
</form>
</div>
</div>
<?php  }include "template.php";?>
<script>
        let VideoList=[];
        let ImageList=[];
        $(".SubmitForm").on("click",function(e){
            e.preventDefault();
            var inst = FCKeditorAPI.GetInstance("address_fr");
            var address_fr = inst.GetHTML();

            inst = FCKeditorAPI.GetInstance("address_en");
            var address_en = inst.GetHTML();

            inst = FCKeditorAPI.GetInstance("address_ar");
            var address_ar = inst.GetHTML();

            var inst = FCKeditorAPI.GetInstance("text_ar");
            var text_ar = inst.GetHTML();

            inst = FCKeditorAPI.GetInstance("text_en");
            var text_en = inst.GetHTML();

            inst = FCKeditorAPI.GetInstance("text_fr");
            var text_fr = inst.GetHTML();
            //console.log(sValue);
            VideoList=[];
            ImageList=[];
            $(".VideoItem").each(function(){
                var VideoObj=new Object();
                VideoObj.image=$(this).find(".Itemimage").val();
                VideoObj.centers_id=$(this).find(".Itemnews_id").val();
                VideoObj.video=$(this).find(".Itemvideo").val();
                VideoObj.orders=$(this).find(".imageorders").val();
                VideoList.push(VideoObj);
            });
            console.log(VideoList);

            $(".imageItem").each(function(){
                var ImageObj=new Object();
                ImageObj.image=$(this).find(".imageItemInput").val();
                ImageObj.centers_id=$("[name=centers_id]").val();
                ImageList.push(ImageObj);
            });
            console.log(ImageList);

            var ProjectObj=new Object();
            ProjectObj.centers_id=$("[name=centers_id]").val();
            ProjectObj.name_ar=$("[name=name_ar]").val();
            ProjectObj.name_en=$("[name=name_en]").val();
            ProjectObj.name_fr=$("[name=name_fr]").val();
            ProjectObj.address_en=address_en;
            ProjectObj.address_ar=address_ar;
            ProjectObj.address_fr=address_fr;
            ProjectObj.phone=$("[name=phone]").val();
            ProjectObj.fax=$("[name=fax]").val();
            ProjectObj.email=$("[name=email]").val();
            ProjectObj.orders=$("[name=orders]").val();
            ProjectObj.type=$("[name=type]").val();
            ProjectObj.area_id=$("[name=area_id]").val();
            ProjectObj.text_ar=text_ar;
            ProjectObj.text_en=text_en;
            ProjectObj.text_fr=text_fr;
            console.log(ProjectObj);
            $.ajax({
                    type: "POST",
                    url: "insert_centers.php",
                    data: {ProjectObj:ProjectObj, ImageList:ImageList, VideoList:VideoList},
                    dataType: 'json',
                    async: true,
                    success: function (data) {
                        console.log(data);
                        window.location="display_centers.php";
                    }
            });
        });
        $(".MainVideoImage").on("click",function(e){
            e.preventDefault();
            $("[name=imageVideo64]").trigger("click",true);
        });
        function fileOnChangeVideo($this) {
                getBase64DocVideo($this.files[0]);
        }
        function getBase64DocVideo(file) {
            var reader = new FileReader();
            var result = "";
            reader.readAsDataURL(file);
            reader.onload = function () {
                result = reader.result;
               // console.log(result);
                $("[name=imageVideoUpload]").val(result);
                $(".MainVideoImage").attr("src",result);
            };
            reader.onerror = function (error) {
                return 'Error: ' + error;
            };
        }


        $(".AddVideo").on("click",function(e){
            e.preventDefault();
            var img=$("[name=imageVideoUpload]").val();
            var video=$("[name=video]").val();
            console.log(img);
            if(img!=""){
                    $(".loader").attr("style","");
                    $.ajax({
                    type: "POST",
                    url: "UploadImageBase64.php",
                    data: {image:img,id:0},
                    dataType: 'json',
                    async: true,
                    success: function (data) {
                        console.log(data);
                        var html=`
                        <div class="col-md-3 col-12 VideoItem">
                                <input type="hidden" class="ImageUrl" value="`+data+`">
                                <div class="kt-avatar kt-avatar--outline" id="kt_apps_user_add_avatar" style="background-image: url(<?=$imagesPath?>`+data+`);">
                                    <a class="removeVideo"><i class="fa fa-ban"></i></a>
                                    <input type="hidden" class="Itemimage" value="`+data+`">
                                    <input type="hidden" class="Itemnews_id" value="`+$("[name=news_id]").val()+`">
                                    <input type="hidden" class="Itemvideo" value="`+video+`">
                                    <input type="hidden" class="imageorders" value="0">
                                </div>
                            </div>`;
                        $(".VideoList").append(html);
                        $("[name=imageVideoUpload]").val("");
                        $("[name=video]").val("");
                        $(".MainVideoImage").attr("src","<?=$imagesPath?>../../assets/images/resources/evnt-img1-2.jpg");
                        $(".loader").attr("style","display:none;");

                    }
            });

            }
    });


    $("body").on("click",".removeVideo",function(e){
            e.preventDefault();
            $(this).parent().parent().remove();
        });

      $(".MainImage").on("click",function(e){
        e.preventDefault();
        $("[name=image64]").trigger("click",true);
    });
    function fileOnChange($this) {
           // console.log($this.files);
            $.each($this.files,function(index,value){
             //   console.log(value);
                getBase64Doc(value);

            });

        }
        function getBase64Doc(file) {
            var reader = new FileReader();
            var result = "";
            reader.readAsDataURL(file);
            reader.onload = function () {
                result = reader.result;
               // console.log(result);
                $("[name=imageUpload]").val(result);
               // $(".MainImage").attr("src",result);
                $(".AddImage").trigger("click",true);
            };
            reader.onerror = function (error) {
                return 'Error: ' + error;
            };
        }
        $("body").on("click",".removeImage",function(e){
            e.preventDefault();
            $(this).parent().parent().remove();
        });
        $(".AddImage").on("click",function(e){
            e.preventDefault();
            var img=$("[name=imageUpload]").val();
            console.log(img);
            if(img!=""){
                    $(".loader").attr("style","");
                    $.ajax({
                    type: "POST",
                    url: "UploadImageBase64.php",
                    data: {image:img,id:0},
                    dataType: 'json',
                    async: true,
                    success: function (data) {
                        console.log(data);
                        var html=` <div class="col-md-3 col-12 imageItem">
                            <input type="hidden" class="ImageUrl">
                            <div class="kt-avatar kt-avatar--outline" id="kt_apps_user_add_avatar"  style="background-image: url(<?=$imagesPath?>`+data+`);">
                                <a class="removeImage"><i class="fa fa-ban"></i></a>
                                <input type="hidden" class="imageItemInput" value="`+data+`">
                            </div>
                        </div>`;
                        $(".ImageList").append(html);
                        $("[name=imageUpload]").val("");
                        //$(".MainImage").attr("src","");
                        $(".loader").attr("style","display:none;");

                    }
            });

            }
    });
</script>
