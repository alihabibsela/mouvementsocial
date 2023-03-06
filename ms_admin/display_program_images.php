<?php
include "class/Program_images.php";
function main(){
$orderBy = "desc";
$fieldName = "program_images_id";
if(isset($_REQUEST["orderBy"])){
 	$orderBy = $_REQUEST["orderBy"];
	$fieldName = $_REQUEST["fieldName"];
}

$keywords = trim($_REQUEST["keywords"]);
$condition="";
if(isset($_GET["programs_id"])&&$_GET["programs_id"]>0){
    $condition.=" a.programs_id=".$_GET["programs_id"]." and ";
}
if($keywords != ""){
	$condition.=" a.video_url like '%$keywords%' and ";
}

$condition.=" 1 order by a.$fieldName $orderBy ";

// paging
$limit=10000;
$offset = 0;
$page=$_REQUEST["page"];
$recordsCount = Program_images::count($condition);
$numberOfPages = ceil($recordsCount/$limit);
if($page !=""){
	$page=$_REQUEST["page"];
	$offset = ($page - 1) * $limit ;
}


$condition.=" limit $limit offset $offset ";
$records = Program_images::select($condition);
?><div class="portlet box blue">
	<div class="portlet-title">
		<div class="caption">
				<i class="fa fa-globe"></i>PROGRAM IMAGES MANAGEMENT
				<!--
				<form name="myform223" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
					<div>
						Search by video url:
						<input type="text" value="<?php echo $keywords ?>" name="keywords" id="keywords" style="width:300px; height:20px;"> &nbsp;
						<input type="submit" style="" value="   Search   " />
					</div>
				</form>
				-->
		</div>
		<div class="actions">
			<div class="btn-group">
				<a class="btn default" href="#" data-toggle="dropdown">
				Columns
				<i class="fa fa-angle-down"></i>
				</a>
				<div id="sample_2_column_toggler" class="dropdown-menu hold-on-click dropdown-checkboxes pull-right">
<label><input type="checkbox" checked data-column="0">ID</label><label><input type="checkbox" checked data-column="<?php echo "1";?>"><?php echo "Image";?></label><label><input type="checkbox" checked data-column="<?php echo "2";?>"><?php echo "Is main";?></label><label><input type="checkbox" checked data-column="<?php echo "3";?>"><?php echo "Video url";?></label><label><input type="checkbox" checked data-column="<?php echo "4";?>"><?php echo "Orders";?></label>
				</div>
			</div>
			<div class="btn-group" >
                <?php
                if(isset($_GET["programs_id"])&&$_GET["programs_id"]>0){?>
                   <a id="sample_editable_1_new" class="btn green" href="new_program_images.php?programs_id=<?=$_GET["programs_id"]?>">
                         Add New <i class="fa fa-plus"></i>
                    </a>
                <?php }else{?>
                    <a id="sample_editable_1_new" class="btn green" href="new_program_images.php">
                        Add New <i class="fa fa-plus"></i>
                    </a>
				<?php }?>
			</div>
		</div>
	</div>
	<div class="portlet-body">
		<table class="table table-striped table-bordered table-hover table-full-width" id="sample_2">
			<thead>
				<tr>
<th>ID</th>
<th><?php echo "Image";?></th>
<th><?php echo "Is main";?></th>
<th><?php echo "Video url";?></th>
<th><?php echo "Orders";?></th>
<th></th>
<th></th>

				</tr>
			</thead>
			<tbody>

	<?php
 	 	for($rc=0;$rc<count($records);$rc++){
  		$program_images = $records[$rc];
	?>
				<tr  id="<?php echo $program_images->program_images_id;?>">
					<!-- primary key -->
					<td><?php echo $program_images->program_images_id;?></td>
					<td><?php echo substr(strip_tags($program_images->image), 0, 30); if(strlen($program_images->image) > 30) echo "...";  ?></td>
<td><?php echo substr(strip_tags($program_images->is_main), 0, 30); if(strlen($program_images->is_main) > 30) echo "...";  ?></td>
<td><?php echo substr(strip_tags($program_images->video_url), 0, 30); if(strlen($program_images->video_url) > 30) echo "...";  ?></td>
<td><?php echo substr(strip_tags($program_images->orders), 0, 30); if(strlen($program_images->orders) > 30) echo "...";  ?></td>

					<td>
						<a class="btn btn-xs yellow" href="edit_program_images.php?id=<?php echo $program_images->program_images_id?>">
						Edit
						<i class="fa fa-edit"></i>
						</a>
					</td>
					<td>
						<a class="btn btn-xs red" href="javascript:deleteAjax('program_images', '<?php echo $program_images->program_images_id;?>')">
							<i class="fa fa-times"></i>
							Delete
						</a>
					</td>
				</tr>
	<?php
		  $c++;
		  $i++;
	  	}
	?>
			</tbody>
		</table>
	</div>
</div>
<?php  }include "template.php";?>
