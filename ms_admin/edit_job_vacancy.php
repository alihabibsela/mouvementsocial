<?php 
 require "session_start.php";
include "class/Job_vacancy.php";
function main(){

include 'config.php';$id=$_REQUEST["id"];
$job_vacancy = Job_vacancy::selectById($id);
?>
<link href="css/css.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="javascript/job_vacancy_validation.js"></script>


<div class="portlet box green">
	<div class="portlet-title">
		<div class="caption"><i class="fa fa-reorder"></i>Edit Job vacancy</div>
	</div>
	<div class="portlet-body form">
	<form action="update_job_vacancy.php" method="post" enctype="multipart/form-data" name="frm" id="frm"  class="form-horizontal form-bordered" >
	<div class="form-body">
<input name="job_vacancy_id" type="hidden" value="<?php echo $job_vacancy->job_vacancy_id?>" />

	<div class="form-group">
		<label class="col-md-3 control-label">Title ar</label>
		<div class="col-md-3">
			<input     name="title_ar" type="text"  class="form-control" id="title_ar" value="<?php echo stripslashes($job_vacancy->title_ar)?>" placeholder="Enter Title ar">
		</div>
	</div>	
		
	<div class="form-group">
		<label class="col-md-3 control-label">Title en</label>
		<div class="col-md-3">
			<input     name="title_en" type="text"  class="form-control" id="title_en" value="<?php echo stripslashes($job_vacancy->title_en)?>" placeholder="Enter Title en">
		</div>
	</div>	
		
	<div class="form-group">
		<label class="col-md-3 control-label">Title fr</label>
		<div class="col-md-3">
			<input     name="title_fr" type="text"  class="form-control" id="title_fr" value="<?php echo stripslashes($job_vacancy->title_fr)?>" placeholder="Enter Title fr">
		</div>
	</div>	
		
	<div class="form-group">
      <label class="col-md-3 control-label">Description ar</label>
      	<div class="form-group">
	      <?php
	      	$fck = new FCKeditor ( "description_ar");
			$fck->BasePath = "fckeditor/";
			$fck->Value = stripslashes($job_vacancy->description_ar);
			$fck->Config["EnterMode"] = "br";
			$fck->Create ();
	      	?>
		</div>
    </div>	
		
	<div class="form-group">
      <label class="col-md-3 control-label">Description en</label>
      	<div class="form-group">
	      <?php
	      	$fck = new FCKeditor ( "description_en");
			$fck->BasePath = "fckeditor/";
			$fck->Value = stripslashes($job_vacancy->description_en);
			$fck->Config["EnterMode"] = "br";
			$fck->Create ();
	      	?>
		</div>
    </div>	
		
	<div class="form-group">
      <label class="col-md-3 control-label">Description fr</label>
      	<div class="form-group">
	      <?php
	      	$fck = new FCKeditor ( "description_fr");
			$fck->BasePath = "fckeditor/";
			$fck->Value = stripslashes($job_vacancy->description_fr);
			$fck->Config["EnterMode"] = "br";
			$fck->Create ();
	      	?>
		</div>
    </div>	
		
	<div class="form-group">
      <label class="col-md-3 control-label">Requirements ar</label>
      	<div class="form-group">
	      <?php
	      	$fck = new FCKeditor ( "requirements_ar");
			$fck->BasePath = "fckeditor/";
			$fck->Value = stripslashes($job_vacancy->requirements_ar);
			$fck->Config["EnterMode"] = "br";
			$fck->Create ();
	      	?>
		</div>
    </div>	
		
	<div class="form-group">
      <label class="col-md-3 control-label">Requirements en</label>
      	<div class="form-group">
	      <?php
	      	$fck = new FCKeditor ( "requirements_en");
			$fck->BasePath = "fckeditor/";
			$fck->Value = stripslashes($job_vacancy->requirements_en);
			$fck->Config["EnterMode"] = "br";
			$fck->Create ();
	      	?>
		</div>
    </div>	
		
	<div class="form-group">
      <label class="col-md-3 control-label">Requirements fr</label>
      	<div class="form-group">
	      <?php
	      	$fck = new FCKeditor ( "requirements_fr");
			$fck->BasePath = "fckeditor/";
			$fck->Value = stripslashes($job_vacancy->requirements_fr);
			$fck->Config["EnterMode"] = "br";
			$fck->Create ();
	      	?>
		</div>
    </div>	
		
	<div class="form-group">
      <label class="control-label col-md-3">Dates</label>
		<div class="col-md-3">
			<input    class="form-control form-control-inline input-medium date-picker"  size="16" type="text" value="<?php if($job_vacancy->dates !== "0000-00-00") echo change_format2($job_vacancy->dates)?>" name="dates" id="dates"/>
			<span class="help-block">Select date</span>
		</div>	
	</div>	
		
	<div class="form-group">
		<label class="col-md-3 control-label">Orders</label>
		<div class="col-md-3">
			<input     name="orders" type="text"  class="form-control" id="orders" value="<?php echo stripslashes($job_vacancy->orders)?>" placeholder="Enter Orders">
		</div>
	</div>	
		
	<div class="form-group">
		<label class="col-md-3 control-label">Is active</label>
		<div class="col-md-9">
			<div class="make-switch" data-on="warning" data-off="danger">
				<input  type="checkbox" class="toggle"  name="is_active" <?php if($job_vacancy->is_active=="1") echo "checked"; ?>/>
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