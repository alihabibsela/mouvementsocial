<?php
 require "session_start.php";
include "class/Program_images.php";
function main(){

include 'config.php';$id=$_REQUEST["id"];
$program_images = Program_images::selectById($id);
?>
<link href="css/css.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="javascript/program_images_validation.js"></script>
<script language="JavaScript" type="text/javascript" src="javascript/pop_up.js"></script>
<script language="JavaScript" type="text/javascript" src="javascript/delete_file_confirmation.js"></script>
<div class="portlet box green">
	<div class="portlet-title">
		<div class="caption"><i class="fa fa-reorder"></i>Edit Program images</div>
	</div>
	<div class="portlet-body form">
	<form action="update_program_images.php" method="post" enctype="multipart/form-data" name="frm" id="frm"  class="form-horizontal form-bordered" >
	<div class="form-body">
<input name="program_images_id" type="hidden" value="<?php echo $program_images->program_images_id?>" />

	<div class="form-group">
		<label class="col-md-3 control-label">Image (470 x 338)</label>
		<div class="col-md-9">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<?php
					if(is_file($imagesPath.$program_images->image)){?>
					 	<img src="<?php echo $imagesPath.$program_images->image?>" alt="<?php echo $program_images->image ?>" />
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
		<label class="control-label col-md-3">Program id</label>
		<div class="col-md-4">
			<select     class="form-control select2me" data-placeholder="Select..." name="programs_id" id="programs_id">
			<option selected="selected" value="0">--- Select Program id ---</option>
			<?php
			$sql="select * from programs";
			$result=mysqli_query ($_SESSION["db_conn"], $sql);
			while($programs=mysqli_fetch_object($result)){
				if($programs->programs_id==$program_images->programs_id)
					$sel="Selected";
						else
					$sel="";
				?>
				<option value="<?php echo $programs->programs_id?>" <?php echo $sel?>><?php echo $programs->title_en?></option>
		   	<?php }?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label class="col-md-3 control-label">Is main</label>
		<div class="col-md-9">
			<div class="make-switch" data-on="warning" data-off="danger">
				<input  type="checkbox" class="toggle"  name="is_main" <?php if($program_images->is_main=="1") echo "checked"; ?>/>
			</div>
		</div>
	</div>

	<div class="form-group">
		<label class="col-md-3 control-label">Video url</label>
		<div class="col-md-3">
			<input     name="video_url" type="text"  class="form-control" id="video_url" value="<?php echo stripslashes($program_images->video_url)?>" placeholder="Enter Video url">
		</div>
	</div>

	<div class="form-group">
		<label class="col-md-3 control-label">Orders</label>
		<div class="col-md-3">
			<input     name="orders" type="text"  class="form-control" id="orders" value="<?php echo stripslashes($program_images->orders)?>" placeholder="Enter Orders">
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
