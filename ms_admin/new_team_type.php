<?php function main(){?>


		
<div class="portlet box green">
	<div class="portlet-title">
		<div class="caption"><i class="fa fa-reorder"></i>Create Team type</div>
	</div>
	<div class="portlet-body form">
	<form action="insert_team_type.php" method="post" enctype="multipart/form-data" name="frm" id="frm"  class="form-horizontal form-bordered" >
	<div class="form-body">
				

	<div class="form-group">
		<label class="col-md-3 control-label">Team type ar</label>
		<div class="col-md-3">
			<input   name="team_type_ar"  type="text"  class="form-control" id="team_type_ar" value="" placeholder="Enter Team type ar">
		</div>
	</div>
	<div class="form-group">
		<label class="col-md-3 control-label">Team type en</label>
		<div class="col-md-3">
			<input   name="team_type_en"  type="text"  class="form-control" id="team_type_en" value="" placeholder="Enter Team type en">
		</div>
	</div>
	<div class="form-group">
		<label class="col-md-3 control-label">Team type fr</label>
		<div class="col-md-3">
			<input   name="team_type_fr"  type="text"  class="form-control" id="team_type_fr" value="" placeholder="Enter Team type fr">
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