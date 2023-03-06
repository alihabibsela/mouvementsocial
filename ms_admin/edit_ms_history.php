<?php 
 require "session_start.php";
include "class/Ms_history.php";
function main(){

include 'config.php';$id=$_REQUEST["id"];
$ms_history = Ms_history::selectById($id);
?>
<link href="css/css.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="javascript/ms_history_validation.js"></script>

<div class="portlet box green">
	<div class="portlet-title">
		<div class="caption"><i class="fa fa-reorder"></i>Edit Ms history</div>
	</div>
	<div class="portlet-body form">
	<form action="update_ms_history.php" method="post" enctype="multipart/form-data" name="frm" id="frm"  class="form-horizontal form-bordered" >
	<div class="form-body">
<input name="ms_history_id" type="hidden" value="<?php echo $ms_history->ms_history_id?>" />

	<div class="form-group">
		<label class="col-md-3 control-label">Year</label>
		<div class="col-md-3">
			<input     name="year" type="text"  class="form-control" id="year" value="<?php echo stripslashes($ms_history->year)?>" placeholder="Enter Year">
		</div>
	</div>	
		
	<div class="form-group">
      <label class="col-md-3 control-label">Details ar</label>
      	<div class="form-group">
	      <?php
	      	$fck = new FCKeditor ( "details_ar");
			$fck->BasePath = "fckeditor/";
			$fck->Value = stripslashes($ms_history->details_ar);
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
			$fck->Value = stripslashes($ms_history->details_en);
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
			$fck->Value = stripslashes($ms_history->details_fr);
			$fck->Config["EnterMode"] = "br";
			$fck->Create ();
	      	?>
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