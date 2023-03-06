<?php 
 require "session_start.php";
include "class/Finance_statement.php";
function main(){

include 'config.php';$id=$_REQUEST["id"];
$finance_statement = Finance_statement::selectById($id);
?>
<link href="css/css.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="javascript/finance_statement_validation.js"></script>

<div class="portlet box green">
	<div class="portlet-title">
		<div class="caption"><i class="fa fa-reorder"></i>Edit Finance statement</div>
	</div>
	<div class="portlet-body form">
	<form action="update_finance_statement.php" method="post" enctype="multipart/form-data" name="frm" id="frm"  class="form-horizontal form-bordered" >
	<div class="form-body">
<input name="finance_statement_id" type="hidden" value="<?php echo $finance_statement->finance_statement_id?>" />

	<div class="form-group">
		<label class="col-md-3 control-label">Year</label>
		<div class="col-md-3">
			<input     name="year" type="text"  class="form-control" id="year" value="<?php echo stripslashes($finance_statement->year)?>" placeholder="Enter Year">
		</div>
	</div>	
		
	<div class="form-group">
      <label class="col-md-3 control-label">File an</label>
	  <div class="controls col-md-9">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<span class="btn default btn-file">
				<span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select file</span>
				<span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
				<input type="file" class="default"  name="file_an"   id="file_an"/>
				</span>
				<span class="fileupload-preview" style="margin-left:5px;"></span>
				<a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none; margin-left:5px;"></a>
			</div>
			<?php
			  if(is_file($filesPath.$finance_statement->file_an)){?>
			  	<div>&nbsp;&nbsp;<a href="<?php echo $filesPath.$finance_statement->file_an?>" target="_blank">[ View File ]</a>&nbsp;&nbsp;<a href="javascript:delete_file_confirmation('delete_finance_statement_file.php?id=<?php echo $_REQUEST["id"];?>&field=file_an')">[ Delete File]</a></div>
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
			  if(is_file($filesPath.$finance_statement->file_en)){?>
			  	<div>&nbsp;&nbsp;<a href="<?php echo $filesPath.$finance_statement->file_en?>" target="_blank">[ View File ]</a>&nbsp;&nbsp;<a href="javascript:delete_file_confirmation('delete_finance_statement_file.php?id=<?php echo $_REQUEST["id"];?>&field=file_en')">[ Delete File]</a></div>
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
			  if(is_file($filesPath.$finance_statement->file_fr)){?>
			  	<div>&nbsp;&nbsp;<a href="<?php echo $filesPath.$finance_statement->file_fr?>" target="_blank">[ View File ]</a>&nbsp;&nbsp;<a href="javascript:delete_file_confirmation('delete_finance_statement_file.php?id=<?php echo $_REQUEST["id"];?>&field=file_fr')">[ Delete File]</a></div>
			<?php }?>
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