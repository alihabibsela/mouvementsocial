<?php function main(){?>




<div class="portlet box green">
	<div class="portlet-title">
		<div class="caption"><i class="fa fa-reorder"></i>Create Banner</div>
	</div>
	<div class="portlet-body form">
	<form action="insert_banner.php" method="post" enctype="multipart/form-data" name="frm" id="frm"  class="form-horizontal form-bordered" >
	<div class="form-body">


	<div class="form-group">
		<label class="control-label col-md-3">Page id</label>
		<div class="col-md-4">
			<select    class="form-control select2me" data-placeholder="Select..." name="page_id" id="page_id">
			<option selected="selected" value="0">--- Select Page id ---</option>
			<?php
			$sql="select * from page";
			$result=mysqli_query ($_SESSION["db_conn"], $sql);
			while($page=mysqli_fetch_array($result)){?>
			<option value="<?php echo $page['page_id']?>"><?php echo $page["name_en"]?></option>
		   	<?php }?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label class="col-md-3 control-label">Image (1920 x 660)</label>
		<div class="col-md-9">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<!-- <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" /> -->
				</div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
				<div>
					<span class="btn default btn-file">
					<span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select image</span>
					<span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
					<input   type="file" class="default" name="image"   id="image"/>
					</span>
					<a href="#" class="btn red fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
				</div>
			</div>
		</div>
	</div>
	<div class="form-group">
		<label class="col-md-3 control-label">Title ar</label>
		<div class="col-md-3">
			<input   name="title_ar"  type="text"  class="form-control" id="title_ar" value="" placeholder="Enter Title ar">
		</div>
	</div>
	<div class="form-group">
		<label class="col-md-3 control-label">Title en</label>
		<div class="col-md-3">
			<input   name="title_en"  type="text"  class="form-control" id="title_en" value="" placeholder="Enter Title en">
		</div>
	</div>
	<div class="form-group">
		<label class="col-md-3 control-label">Title fr</label>
		<div class="col-md-3">
			<input   name="title_fr"  type="text"  class="form-control" id="title_fr" value="" placeholder="Enter Title fr">
		</div>
	</div>
	<div class="form-group">
		<label class="col-md-3 control-label">Btn title ar</label>
		<div class="col-md-3">
			<input   name="btn_title_ar"  type="text"  class="form-control" id="btn_title_ar" value="" placeholder="Enter Btn title ar">
		</div>
	</div>
	<div class="form-group">
		<label class="col-md-3 control-label">Btn title en</label>
		<div class="col-md-3">
			<input   name="btn_title_en"  type="text"  class="form-control" id="btn_title_en" value="" placeholder="Enter Btn title en">
		</div>
	</div>
	<div class="form-group">
		<label class="col-md-3 control-label">Btn title fr</label>
		<div class="col-md-3">
			<input   name="btn_title_fr"  type="text"  class="form-control" id="btn_title_fr" value="" placeholder="Enter Btn title fr">
		</div>
	</div>
	<div class="form-group">
		<label class="col-md-3 control-label">Btn URL</label>
		<div class="col-md-3">
			<input   name="btn_url"  type="text"  class="form-control" id="btn_url" value="" placeholder="Enter Btn URL">
		</div>
	</div>
	<div class="form-group">
		<label class="col-md-3 control-label">Orders</label>
		<div class="col-md-3">
			<input   name="orders"  type="text"  class="form-control" id="orders" value="" placeholder="Enter Orders">
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
