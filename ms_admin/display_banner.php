<?php
include "class/Banner.php";
function main(){
$orderBy = "desc";
$fieldName = "banner_id";
if(isset($_REQUEST["orderBy"])){
 	$orderBy = $_REQUEST["orderBy"];
	$fieldName = $_REQUEST["fieldName"];
}

$keywords = trim($_REQUEST["keywords"]);

if($keywords != ""){
	$condition.=" a.title_ar like '%$keywords%' and ";
}

$condition.=" 1 order by a.$fieldName $orderBy ";

// paging
$limit=10000;
$offset = 0;
$page=$_REQUEST["page"];
$recordsCount = Banner::count($condition);
$numberOfPages = ceil($recordsCount/$limit);
if($page !=""){
	$page=$_REQUEST["page"];
	$offset = ($page - 1) * $limit ;
}


$condition.=" limit $limit offset $offset ";
$records = Banner::select($condition);
?><div class="portlet box blue">
	<div class="portlet-title">
		<div class="caption">
				<i class="fa fa-globe"></i>BANNER MANAGEMENT
				<!--
				<form name="myform223" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
					<div>
						Search by title ar:
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
<label><input type="checkbox" checked data-column="0">ID</label><label><input type="checkbox" checked data-column="<?php echo "1";?>"><?php echo "Page id";?></label><label><input type="checkbox" checked data-column="<?php echo "2";?>"><?php echo "Image";?></label><label><input type="checkbox" checked data-column="<?php echo "3";?>"><?php echo "Title ar";?></label><label><input type="checkbox" checked data-column="<?php echo "4";?>"><?php echo "Title en";?></label><label><input type="checkbox" checked data-column="<?php echo "5";?>"><?php echo "Title fr";?></label><label><input type="checkbox" checked data-column="<?php echo "6";?>"><?php echo "Btn title ar";?></label><label><input type="checkbox" checked data-column="<?php echo "7";?>"><?php echo "Btn title en";?></label><label><input type="checkbox" checked data-column="<?php echo "8";?>"><?php echo "Btn title fr";?></label>
				</div>
			</div>
			<div class="btn-group" >
				 <a id="sample_editable_1_new" class="btn green" href="new_banner.php">
				Add New <i class="fa fa-plus"></i>
				</a> 
			</div>
		</div>
	</div>
	<div class="portlet-body">
		<table class="table table-striped table-bordered table-hover table-full-width" id="sample_2">
			<thead>
				<tr>
<th>ID</th>
<th><?php echo "Name En";?></th>
<th><?php echo "Image";?></th>
<th><?php echo "Title ar";?></th>
<th><?php echo "Title en";?></th>
<th><?php echo "Title fr";?></th>
<th><?php echo "Btn title ar";?></th>
<th><?php echo "Btn title en";?></th>
<th><?php echo "Btn title fr";?></th>
<th></th>
<th></th>

				</tr>
			</thead>
			<tbody>

	<?php
 	 	for($rc=0;$rc<count($records);$rc++){
  		$banner = $records[$rc];
	?>
				<tr  id="<?php echo $banner->banner_id;?>">
					<!-- primary key -->
					<td><?php echo $banner->banner_id;?></td>
					<td><?php echo substr(strip_tags($banner->name_en), 0, 30); if(strlen($banner->name_en) > 30) echo "...";  ?></td>
<td><?php echo substr(strip_tags($banner->image), 0, 30); if(strlen($banner->image) > 30) echo "...";  ?></td>
<td><?php echo substr(strip_tags($banner->title_ar), 0, 30); if(strlen($banner->title_ar) > 30) echo "...";  ?></td>
<td><?php echo substr(strip_tags($banner->title_en), 0, 30); if(strlen($banner->title_en) > 30) echo "...";  ?></td>
<td><?php echo substr(strip_tags($banner->title_fr), 0, 30); if(strlen($banner->title_fr) > 30) echo "...";  ?></td>
<td><?php echo substr(strip_tags($banner->btn_title_ar), 0, 30); if(strlen($banner->btn_title_ar) > 30) echo "...";  ?></td>
<td><?php echo substr(strip_tags($banner->btn_title_en), 0, 30); if(strlen($banner->btn_title_en) > 30) echo "...";  ?></td>
<td><?php echo substr(strip_tags($banner->btn_title_fr), 0, 30); if(strlen($banner->btn_title_fr) > 30) echo "...";  ?></td>

					<td>
						<a class="btn btn-xs yellow" href="edit_banner.php?id=<?php echo $banner->banner_id?>">
						Edit
						<i class="fa fa-edit"></i>
						</a>
					</td>
					<td>
						<a class="btn btn-xs red" href="javascript:deleteAjax('banner', '<?php echo $banner->banner_id;?>')">
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
