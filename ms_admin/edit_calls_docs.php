<?php 
 require "session_start.php";
include "class/Calls_docs.php";
function main(){

include 'config.php';$id=$_REQUEST["id"];
$calls_docs = Calls_docs::selectById($id);
?>
<link href="css/css.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="javascript/calls_docs_validation.js"></script>

<div class="portlet box green">
	<div class="portlet-title">
		<div class="caption"><i class="fa fa-reorder"></i>Edit Calls docs</div>
	</div>
	<div class="portlet-body form">
	<form action="update_calls_docs.php" method="post" enctype="multipart/form-data" name="frm" id="frm"  class="form-horizontal form-bordered" >
	<div class="form-body">
<input name="calls_docs_id" type="hidden" value="<?php echo $calls_docs->calls_docs_id?>" />

	<div class="form-group">
		<label class="control-label col-md-3">Calls id</label>
		<div class="col-md-4">
			<select     class="form-control select2me" data-placeholder="Select..." name="calls_id" id="calls_id">
			<option selected="selected" value="0">--- Select Calls id ---</option>
			<?php
			$sql="select * from calls";
			$result=mysqli_query ($_SESSION["db_conn"], $sql);
			while($calls=mysqli_fetch_object($result)){
				if($calls->calls_id==$calls_docs->calls_id)
					$sel="Selected";
						else
					$sel="";	
				?>
				<option value="<?php echo $calls->calls_id?>" <?php echo $sel?>><?php echo $calls->title_en?></option>
		   	<?php }?>
			</select>
		</div>
	</div>		
		
		
	<div class="form-group">
		<label class="col-md-3 control-label">Doc title ar</label>
		<div class="col-md-3">
			<input     name="doc_title_ar" type="text"  class="form-control" id="doc_title_ar" value="<?php echo stripslashes($calls_docs->doc_title_ar)?>" placeholder="Enter Doc title ar">
		</div>
	</div>	
		
	<div class="form-group">
		<label class="col-md-3 control-label">Doc title en</label>
		<div class="col-md-3">
			<input     name="doc_title_en" type="text"  class="form-control" id="doc_title_en" value="<?php echo stripslashes($calls_docs->doc_title_en)?>" placeholder="Enter Doc title en">
		</div>
	</div>	
		
	<div class="form-group">
		<label class="col-md-3 control-label">Doc title fr</label>
		<div class="col-md-3">
			<input     name="doc_title_fr" type="text"  class="form-control" id="doc_title_fr" value="<?php echo stripslashes($calls_docs->doc_title_fr)?>" placeholder="Enter Doc title fr">
		</div>
	</div>	
		
	<div class="form-group">
      <label class="col-md-3 control-label">Doc ar</label>
	  <div class="controls col-md-9">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<span class="btn default btn-file">
				<span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select file</span>
				<span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
				<input type="file" class="default"  name="doc_ar"   id="doc_ar"/>
				</span>
				<span class="fileupload-preview" style="margin-left:5px;"></span>
				<a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none; margin-left:5px;"></a>
			</div>
			<?php
			  if(is_file($filesPath.$calls_docs->doc_ar)){?>
			  	<div>&nbsp;&nbsp;<a href="<?php echo $filesPath.$calls_docs->doc_ar?>" target="_blank">[ View File ]</a>&nbsp;&nbsp;<a href="javascript:delete_file_confirmation('delete_calls_docs_file.php?id=<?php echo $_REQUEST["id"];?>&field=doc_ar')">[ Delete File]</a></div>
			<?php }?>
		</div>
    </div>	
		
		
	<div class="form-group">
      <label class="col-md-3 control-label">Doc en</label>
	  <div class="controls col-md-9">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<span class="btn default btn-file">
				<span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select file</span>
				<span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
				<input type="file" class="default"  name="doc_en"   id="doc_en"/>
				</span>
				<span class="fileupload-preview" style="margin-left:5px;"></span>
				<a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none; margin-left:5px;"></a>
			</div>
			<?php
			  if(is_file($filesPath.$calls_docs->doc_en)){?>
			  	<div>&nbsp;&nbsp;<a href="<?php echo $filesPath.$calls_docs->doc_en?>" target="_blank">[ View File ]</a>&nbsp;&nbsp;<a href="javascript:delete_file_confirmation('delete_calls_docs_file.php?id=<?php echo $_REQUEST["id"];?>&field=doc_en')">[ Delete File]</a></div>
			<?php }?>
		</div>
    </div>	
		
		
	<div class="form-group">
      <label class="col-md-3 control-label">Doc fr</label>
	  <div class="controls col-md-9">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<span class="btn default btn-file">
				<span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select file</span>
				<span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
				<input type="file" class="default"  name="doc_fr"   id="doc_fr"/>
				</span>
				<span class="fileupload-preview" style="margin-left:5px;"></span>
				<a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none; margin-left:5px;"></a>
			</div>
			<?php
			  if(is_file($filesPath.$calls_docs->doc_fr)){?>
			  	<div>&nbsp;&nbsp;<a href="<?php echo $filesPath.$calls_docs->doc_fr?>" target="_blank">[ View File ]</a>&nbsp;&nbsp;<a href="javascript:delete_file_confirmation('delete_calls_docs_file.php?id=<?php echo $_REQUEST["id"];?>&field=doc_fr')">[ Delete File]</a></div>
			<?php }?>
		</div>
    </div>	
		
		
	<div class="form-group">
		<label class="col-md-3 control-label">Orders</label>
		<div class="col-md-3">
			<input     name="orders" type="text"  class="form-control" id="orders" value="<?php echo stripslashes($calls_docs->orders)?>" placeholder="Enter Orders">
		</div>
	</div>	
		
	<div class="form-group">
		<label class="col-md-3 control-label">Is active</label>
		<div class="col-md-9">
			<div class="make-switch" data-on="warning" data-off="danger">
				<input  type="checkbox" class="toggle"  name="is_active" <?php if($calls_docs->is_active=="1") echo "checked"; ?>/>
			</div>
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