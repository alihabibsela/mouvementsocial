<?php function main(){?>



<div class="portlet box green">
	<div class="portlet-title">
		<div class="caption"><i class="fa fa-reorder"></i>Create Centers type</div>
	</div>
	<div class="portlet-body form">
	<form action="insert_centers_type.php" method="post" enctype="multipart/form-data" name="frm" id="frm"  class="form-horizontal form-bordered" >
	<div class="form-body">


	<div class="form-group">
		<label class="col-md-3 control-label">Centers type ar</label>
		<div class="col-md-3">
			<input   name="centers_type_ar"  type="text"  class="form-control" id="centers_type_ar" value="" placeholder="Enter Centers type ar">
		</div>
	</div>
	<div class="form-group">
		<label class="col-md-3 control-label">Centers type en</label>
		<div class="col-md-3">
			<input   name="centers_type_en"  type="text"  class="form-control" id="centers_type_en" value="" placeholder="Enter Centers type en">
		</div>
	</div>
	<div class="form-group">
		<label class="col-md-3 control-label">Centers type fr</label>
		<div class="col-md-3">
			<input   name="centers_type_fr"  type="text"  class="form-control" id="centers_type_fr" value="" placeholder="Enter Centers type fr">
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
</div>
</div>
<?php  }include "template.php";?>
