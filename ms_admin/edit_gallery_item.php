<?php 
 require "session_start.php";
include "class/Gallery_item.php";
function main(){

include 'config.php';$id=$_REQUEST["id"];
$gallery_item = Gallery_item::selectById($id);
?>
<link href="css/css.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="javascript/gallery_item_validation.js"></script>
<script language="JavaScript" type="text/javascript" src="javascript/pop_up.js"></script>
<script language="JavaScript" type="text/javascript" src="javascript/delete_file_confirmation.js"></script>
<div class="portlet box green">
	<div class="portlet-title">
		<div class="caption"><i class="fa fa-reorder"></i>Edit Gallery item</div>
	</div>
	<div class="portlet-body form">
	<form action="update_gallery_item.php" method="post" enctype="multipart/form-data" name="frm" id="frm"  class="form-horizontal form-bordered" >
	<div class="form-body">
<input name="gallery_item_id" type="hidden" value="<?php echo $gallery_item->gallery_item_id?>" />

	<div class="form-group">
		<label class="control-label col-md-3">Gallery id</label>
		<div class="col-md-4">
			<select     class="form-control select2me" data-placeholder="Select..." name="gallery_id" id="gallery_id">
			<option selected="selected" value="0">--- Select Gallery id ---</option>
			<?php
			$sql="select * from gallery";
			$result=mysqli_query ($_SESSION["db_conn"], $sql);
			while($gallery=mysqli_fetch_object($result)){
				if($gallery->gallery_id==$gallery_item->gallery_id)
					$sel="Selected";
						else
					$sel="";	
				?>
				<option value="<?php echo $gallery->gallery_id?>" <?php echo $sel?>><?php echo $gallery->name?></option>
		   	<?php }?>
			</select>
		</div>
	</div>		
		
				
	<div class="form-group">
		<label class="col-md-3 control-label">Image</label>
		<div class="col-md-9">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<?php
					if(is_file($imagesPath.$gallery_item->image)){?>
					 	<img src="<?php echo $imagesPath.$gallery_item->image?>" alt="<?php echo $gallery_item->image ?>" />
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
		<label class="col-md-3 control-label">Video</label>
		<div class="col-md-3">
			<input     name="video" type="text"  class="form-control" id="video" value="<?php echo stripslashes($gallery_item->video)?>" placeholder="Enter Video">
		</div>
	</div>	
		
	<div class="form-group">
		<label class="col-md-3 control-label">Orders</label>
		<div class="col-md-3">
			<input     name="orders" type="text"  class="form-control" id="orders" value="<?php echo stripslashes($gallery_item->orders)?>" placeholder="Enter Orders">
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