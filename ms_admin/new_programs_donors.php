<?php function main(){?>



<div class="portlet box green">
	<div class="portlet-title">
		<div class="caption"><i class="fa fa-reorder"></i>Create Programs donors</div>
	</div>
	<div class="portlet-body form">
	<form action="insert_programs_donors.php" method="post" enctype="multipart/form-data" name="frm" id="frm"  class="form-horizontal form-bordered" >
	<div class="form-body">


	<div class="form-group">
		<label class="control-label col-md-3">Donor id</label>
		<div class="col-md-4">
			<select    class="form-control select2me" data-placeholder="Select..." name="donor_id" id="donor_id">
			<option selected="selected" value="0">--- Select Donor id ---</option>
			<?php
			$sql="select * from donor";
			$result=mysqli_query ($_SESSION["db_conn"], $sql);
			while($donor=mysqli_fetch_array($result)){?>
			<option value="<?php echo $donor['donor_id']?>"><?php echo $donor["name"]?></option>
		   	<?php }?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-md-3">Program id</label>
		<div class="col-md-4">
			<select    class="form-control select2me" data-placeholder="Select..." name="program_id" id="program_id">
			<option selected="selected" value="0">--- Select Program id ---</option>
			<?php
			$sql="select * from programs";
			$result=mysqli_query ($_SESSION["db_conn"], $sql);
			while($programs=mysqli_fetch_array($result)){?>
			<option value="<?php echo $programs['programs_id']?>"><?php echo $programs["title_en"]?></option>
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
</div>
</div>
<?php  }include "template.php";?>
