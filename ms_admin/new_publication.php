<?php function main(){?>




<div class="portlet box green">
	<div class="portlet-title">
		<div class="caption"><i class="fa fa-reorder"></i>Create MS Library</div>
	</div>
	<div class="portlet-body form">
	<form action="insert_publication.php" method="post" enctype="multipart/form-data" name="frm" id="frm"  class="form-horizontal form-bordered" >
	<div class="form-body">

	<div class="form-group">
		<label class="col-md-3 control-label">Image (470 x 338)</label>
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
      <label class="col-md-3 control-label">Details ar</label>
      	<div class="form-group">
	      <?php
	      	$fck = new FCKeditor ( "details_ar");
			$fck->BasePath = "fckeditor/";
			$fck->Value = "";
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
			$fck->Value = "";
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
			$fck->Value = "";
			$fck->Config["EnterMode"] = "br";
			$fck->Create ();
	      ?>
		</div>
    </div>
	<div class="form-group">
      <label class="col-md-3 control-label">File ar</label>
		<div class="col-md-9">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="input-group">
					<span class="input-group-btn">
					<span class="uneditable-input">
					<i class="fa fa-file fileupload-exists"></i>
					<span class="fileupload-preview"></span>
					</span>
					</span>
					<span class="btn default btn-file">
					<span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select file</span>
					<span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
					<input   type="file" class="default" name="file_ar"   id="file_ar"/>
					</span>
					<a href="#" class="btn red fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
				</div>
			</div>
		</div>
    </div>
	<div class="form-group">
      <label class="col-md-3 control-label">File en</label>
		<div class="col-md-9">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="input-group">
					<span class="input-group-btn">
					<span class="uneditable-input">
					<i class="fa fa-file fileupload-exists"></i>
					<span class="fileupload-preview"></span>
					</span>
					</span>
					<span class="btn default btn-file">
					<span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select file</span>
					<span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
					<input   type="file" class="default" name="file_en"   id="file_en"/>
					</span>
					<a href="#" class="btn red fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
				</div>
			</div>
		</div>
    </div>
	<div class="form-group">
      <label class="col-md-3 control-label">File fr</label>
		<div class="col-md-9">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="input-group">
					<span class="input-group-btn">
					<span class="uneditable-input">
					<i class="fa fa-file fileupload-exists"></i>
					<span class="fileupload-preview"></span>
					</span>
					</span>
					<span class="btn default btn-file">
					<span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select file</span>
					<span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
					<input   type="file" class="default" name="file_fr"   id="file_fr"/>
					</span>
					<a href="#" class="btn red fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
				</div>
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
</div>
</div>
<?php  }include "template.php";?>
