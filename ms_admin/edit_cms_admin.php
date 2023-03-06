<?php 
 require "session_start.php";
include "class/Cms_admin.php";
function main(){

include 'config.php';$id=$_SESSION["adminId"];
$cms_admin = Cms_admin::selectById($id);
?>
<link href="css/css.css" rel="stylesheet" type="text/css" />
<div class="portlet box green">
	<div class="portlet-title">
		<div class="caption"><i class="fa fa-reorder"></i>Edit Cms admin</div>
	</div>
	<div class="portlet-body form">
	<form action="update_cms_admin.php" method="post" enctype="multipart/form-data" name="frm" id="frm"  class="form-horizontal form-bordered >
	<div class="form-body">
<input name="admin_id" type="hidden" value="<?php echo $cms_admin->admin_id?>" />

	<div class="form-group">
		<label class="col-md-3 control-label">Admin name</label>
		<div class="col-md-3">
			<input  name="admin_name" type="text"  class="form-control" id="admin_name" value="<?php echo stripslashes($cms_admin->admin_name)?>" placeholder="Enter Admin name">
		</div>
	</div>	
		
	<div class="form-group">
		<label class="col-md-3 control-label">User name</label>
		<div class="col-md-3">
			<input  name="user_name" type="text"  class="form-control" id="user_name" value="<?php echo stripslashes($cms_admin->user_name)?>" placeholder="Enter User name">
		</div>
	</div>	
		
	<div class="form-group">
		<label class="col-md-3 control-label">Password</label>
		<div class="col-md-4">
			<div class="input-group">
				<input type="password" class="form-control" placeholder="Password"  name="password" id="password">
				<span class="input-group-addon"><i class="fa fa-user"></i></span>
			</div>
			<small>(Leave the password blank if you don't wish to change it)</small>
		</div>
	</div>	
		
	<div class="form-group">
		<label class="col-md-3 control-label">Email</label>
		<div class="col-md-3">
			<input  name="email" type="text"  class="form-control" id="email" value="<?php echo stripslashes($cms_admin->email)?>" placeholder="Enter Email">
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