<?php 
 require "session_start.php";
include "class/Publication.php";
function main(){

include 'config.php';$id=$_REQUEST["id"];
$publication = Publication::selectById($id);
?>
<link href="css/css.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="javascript/publication_validation.js"></script>


<script language="JavaScript" type="text/javascript" src="javascript/pop_up.js"></script>
<script language="JavaScript" type="text/javascript" src="javascript/delete_file_confirmation.js"></script>
<div class="portlet box green">
	<div class="portlet-title">
		<div class="caption"><i class="fa fa-reorder"></i>Edit Publication</div>
	</div>
	<div class="portlet-body form">
	<form action="update_publication.php" method="post" enctype="multipart/form-data" name="frm" id="frm"  class="form-horizontal form-bordered" >
	<div class="form-body">
<input name="publication_id" type="hidden" value="<?php echo $publication->publication_id?>" />
<div class="form-group">
		<label class="col-md-3 control-label">Image (470 x 338)</label>
		<div class="col-md-9">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<?php
					if(is_file($imagesPath.$publication->image)){?>
					 	<img src="<?php echo $imagesPath.$publication->image?>" alt="<?php echo $publication->image ?>" />
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
		<label class="col-md-3 control-label">Title ar</label>
		<div class="col-md-3">
			<input     name="title_ar" type="text"  class="form-control" id="title_ar" value="<?php echo stripslashes($publication->title_ar)?>" placeholder="Enter Title ar">
		</div>
	</div>	
		
	<div class="form-group">
		<label class="col-md-3 control-label">Title en</label>
		<div class="col-md-3">
			<input     name="title_en" type="text"  class="form-control" id="title_en" value="<?php echo stripslashes($publication->title_en)?>" placeholder="Enter Title en">
		</div>
	</div>	
		
	<div class="form-group">
		<label class="col-md-3 control-label">Title fr</label>
		<div class="col-md-3">
			<input     name="title_fr" type="text"  class="form-control" id="title_fr" value="<?php echo stripslashes($publication->title_fr)?>" placeholder="Enter Title fr">
		</div>
	</div>	
		
	<div class="form-group">
      <label class="col-md-3 control-label">Details ar</label>
      	<div class="form-group">
	      <?php
	      	$fck = new FCKeditor ( "details_ar");
			$fck->BasePath = "fckeditor/";
			$fck->Value = stripslashes($publication->details_ar);
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
			$fck->Value = stripslashes($publication->details_en);
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
			$fck->Value = stripslashes($publication->details_fr);
			$fck->Config["EnterMode"] = "br";
			$fck->Create ();
	      	?>
		</div>
    </div>	
		
	<div class="form-group">
      <label class="col-md-3 control-label">File ar</label>
	  <div class="controls col-md-9">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<span class="btn default btn-file">
				<span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select file</span>
				<span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
				<input type="file" class="default"  name="file_ar"   id="file_ar"/>
				</span>
				<span class="fileupload-preview" style="margin-left:5px;"></span>
				<a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none; margin-left:5px;"></a>
			</div>
			<?php
			  if(is_file($filesPath.$publication->file_ar)){?>
			  	<div>&nbsp;&nbsp;<a href="<?php echo $filesPath.$publication->file_ar?>" target="_blank">[ View File ]</a>&nbsp;&nbsp;<a href="javascript:delete_file_confirmation('delete_publication_file.php?id=<?php echo $_REQUEST["id"];?>&field=file_ar')">[ Delete File]</a></div>
			<?php }?>
		</div>
    </div>	
		
		
	<div class="form-group">
      <label class="col-md-3 control-label">File en</label>
	  <div class="controls col-md-9">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<span class="btn default btn-file">
				<span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select file</span>
				<span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
				<input type="file" class="default"  name="file_en"   id="file_en"/>
				</span>
				<span class="fileupload-preview" style="margin-left:5px;"></span>
				<a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none; margin-left:5px;"></a>
			</div>
			<?php
			  if(is_file($filesPath.$publication->file_en)){?>
			  	<div>&nbsp;&nbsp;<a href="<?php echo $filesPath.$publication->file_en?>" target="_blank">[ View File ]</a>&nbsp;&nbsp;<a href="javascript:delete_file_confirmation('delete_publication_file.php?id=<?php echo $_REQUEST["id"];?>&field=file_en')">[ Delete File]</a></div>
			<?php }?>
		</div>
    </div>	
		
		
	<div class="form-group">
      <label class="col-md-3 control-label">File fr</label>
	  <div class="controls col-md-9">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<span class="btn default btn-file">
				<span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select file</span>
				<span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
				<input type="file" class="default"  name="file_fr"   id="file_fr"/>
				</span>
				<span class="fileupload-preview" style="margin-left:5px;"></span>
				<a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none; margin-left:5px;"></a>
			</div>
			<?php
			  if(is_file($filesPath.$publication->file_fr)){?>
			  	<div>&nbsp;&nbsp;<a href="<?php echo $filesPath.$publication->file_fr?>" target="_blank">[ View File ]</a>&nbsp;&nbsp;<a href="javascript:delete_file_confirmation('delete_publication_file.php?id=<?php echo $_REQUEST["id"];?>&field=file_fr')">[ Delete File]</a></div>
			<?php }?>
		</div>
    </div>			
		
	<div class="form-group">
		<label class="control-label col-md-3">Publication category id</label>
		<div class="col-md-4">
			<select     class="form-control select2me" data-placeholder="Select..." name="publication_category_id" id="publication_category_id">
			<option selected="selected" value="0">--- Select Publication category id ---</option>
			<?php
			$sql="select * from publication";
			$result=mysqli_query ($_SESSION["db_conn"], $sql);
			while($publication=mysqli_fetch_object($result)){
				if($publication->publication_category_id==$publication->publication_category_id)
					$sel="Selected";
						else
					$sel="";	
				?>
				<option value="<?php echo $publication->publication_category_id?>" <?php echo $sel?>><?php echo $publication->title_en?></option>
		   	<?php }?>
			</select>
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