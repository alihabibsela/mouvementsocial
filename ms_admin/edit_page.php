<?php
 require "session_start.php";
include "class/Page.php";
function main(){

include 'config.php';$id=$_REQUEST["id"];
$page = Page::selectById($id);
?>
<link href="css/css.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="javascript/page_validation.js"></script>

<script language="JavaScript" type="text/javascript" src="javascript/pop_up.js"></script>
<script language="JavaScript" type="text/javascript" src="javascript/delete_file_confirmation.js"></script>
<div class="portlet box green">
	<div class="portlet-title">
		<div class="caption"><i class="fa fa-reorder"></i>Edit Page</div>
	</div>
	<div class="portlet-body form">
	<form action="update_page.php" method="post" enctype="multipart/form-data" name="frm" id="frm"  class="form-horizontal form-bordered" >
	<div class="form-body">
<input name="page_id" type="hidden" value="<?php echo $page->page_id?>" />

	<div class="form-group">
		<label class="col-md-3 control-label">Name ar</label>
		<div class="col-md-3">
			<input     name="name_ar" type="text"  class="form-control" id="name_ar" value="<?php echo stripslashes($page->name_ar)?>" placeholder="Enter Name ar">
		</div>
	</div>

	<div class="form-group">
		<label class="col-md-3 control-label">Name en</label>
		<div class="col-md-3">
			<input     name="name_en" type="text"  class="form-control" id="name_en" value="<?php echo stripslashes($page->name_en)?>" placeholder="Enter Name en">
		</div>
	</div>

	<div class="form-group">
		<label class="col-md-3 control-label">Name fr</label>
		<div class="col-md-3">
			<input     name="name_fr" type="text"  class="form-control" id="name_fr" value="<?php echo stripslashes($page->name_fr)?>" placeholder="Enter Name fr">
		</div>
	</div>

	<div class="form-group">
      <label class="col-md-3 control-label">Details ar</label>
      	<div class="form-group">
	      <?php
	      	$fck = new FCKeditor ( "details_ar");
			$fck->BasePath = "fckeditor/";
			$fck->Value = stripslashes($page->details_ar);
			$fck->Config["EnterMode"] = "br";
			$fck->Create ();
	      	?>
		</div>
    </div>

	<div class="form-group">
      <label class="col-md-3 control-label">Details en</label>
      	<div class="form-group">
	      <?php
	      	$fck = new FCKeditor ( "details_en");
			$fck->BasePath = "fckeditor/";
			$fck->Value = stripslashes($page->details_en);
			$fck->Config["EnterMode"] = "br";
			$fck->Create ();
	      	?>
		</div>
    </div>

	<div class="form-group">
      <label class="col-md-3 control-label">Details fr</label>
      	<div class="form-group">
	      <?php
	      	$fck = new FCKeditor ( "details_fr");
			$fck->BasePath = "fckeditor/";
			$fck->Value = stripslashes($page->details_fr);
			$fck->Config["EnterMode"] = "br";
			$fck->Create ();
	      	?>
		</div>
    </div>

	<div class="form-group">
		<label class="col-md-3 control-label">Image (470 x 338)</label>
		<div class="col-md-9">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<?php
					if(is_file($imagesPath.$page->image)){?>
					 	<img src="<?php echo $imagesPath.$page->image?>" alt="<?php echo $page->image ?>" />
					<?php } ?>
				</div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
				<div>
					<span class="btn default btn-file">
					<span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select image</span>
					<span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
					<input type="file" class="default" name="image"   id="image"/>
					</span>
					<a href="#" class="btn red fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
				</div>
			</div>
		</div>
	</div>

	<div class="form-group">
		<label class="col-md-3 control-label">Video url</label>
		<div class="col-md-3">
			<input     name="video_url" type="text"  class="form-control" id="video_url" value="<?php echo stripslashes($page->video_url)?>" placeholder="Enter Video url">
		</div>
	</div>

<br/>
		<div class="row">
			<div class="col-md-12">
				<div class="col-md-offset-3 col-md-9">
					<button type="submit" class="btn green"><i class="fa fa-check"></i> Submit</button>
					<button type="button" class="btn default"  onclick="javascript:if(confirm('Are you sure you want to leave this page?')) history.back()">Cancel</button>
				</div>
			</div>
		</div>
		<br/>
	</div> <!-- end div form body-->
</form>
<?php  }include "template.php";?>
