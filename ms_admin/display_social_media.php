<?php 
include "class/Social_media.php";
function main(){
$orderBy = "desc";
$fieldName = "social_media_id";
if(isset($_REQUEST["orderBy"])){
 	$orderBy = $_REQUEST["orderBy"];
	$fieldName = $_REQUEST["fieldName"];
}

$keywords = trim($_REQUEST["keywords"]);

if($keywords != ""){
	$condition.=" a.social_media like '%$keywords%' and ";
}

$condition.=" 1 order by a.$fieldName $orderBy ";

// paging
$limit=10000;
$offset = 0;
$page=$_REQUEST["page"];
$recordsCount = Social_media::count($condition);
$numberOfPages = ceil($recordsCount/$limit);
if($page !=""){
	$page=$_REQUEST["page"];
	$offset = ($page - 1) * $limit ;
}


$condition.=" limit $limit offset $offset ";
$records = Social_media::select($condition);
?><div class="portlet box blue">
	<div class="portlet-title">
		<div class="caption">
				<i class="fa fa-globe"></i>SOCIAL MEDIA MANAGEMENT
				<!--
				<form name="myform223" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
					<div>
						Search by social media: 
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
<label><input type="checkbox" checked data-column="0">ID</label><label><input type="checkbox" checked data-column="<?php echo "1";?>"><?php echo "Social media";?></label><label><input type="checkbox" checked data-column="<?php echo "2";?>"><?php echo "Icon";?></label><label><input type="checkbox" checked data-column="<?php echo "3";?>"><?php echo "Url";?></label><label><input type="checkbox" checked data-column="<?php echo "4";?>"><?php echo "Orders";?></label><label><input type="checkbox" checked data-column="<?php echo "5";?>"><?php echo "Is volunteer";?></label>
				</div>
			</div>
			<div class="btn-group" >
				<a id="sample_editable_1_new" class="btn green" href="new_social_media.php">
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
<th><?php echo "Social media";?></th>
<th><?php echo "Icon";?></th>
<th><?php echo "Url";?></th>
<th><?php echo "Orders";?></th>
<th><?php echo "Is volunteer";?></th>
<th></th>
<th></th>

				</tr>
			</thead>
			<tbody>
			
	<?php 
 	 	for($rc=0;$rc<count($records);$rc++){
  		$social_media = $records[$rc];
	?>
				<tr  id="<?php echo $social_media->social_media_id;?>">
					<!-- primary key -->
					<td><?php echo $social_media->social_media_id;?></td>
					<td><?php echo substr(strip_tags($social_media->social_media), 0, 30); if(strlen($social_media->social_media) > 30) echo "...";  ?></td>
<td><?php echo substr(strip_tags($social_media->icon), 0, 30); if(strlen($social_media->icon) > 30) echo "...";  ?></td>
<td><?php echo substr(strip_tags($social_media->url), 0, 30); if(strlen($social_media->url) > 30) echo "...";  ?></td>
<td><?php echo substr(strip_tags($social_media->orders), 0, 30); if(strlen($social_media->orders) > 30) echo "...";  ?></td>
<td><?php echo substr(strip_tags($social_media->is_volunteer), 0, 30); if(strlen($social_media->is_volunteer) > 30) echo "...";  ?></td>

					<td>
						<a class="btn btn-xs yellow" href="edit_social_media.php?id=<?php echo $social_media->social_media_id?>">
						Edit
						<i class="fa fa-edit"></i>
						</a>			
					</td>
					<td>
						<a class="btn btn-xs red" href="javascript:deleteAjax('social_media', '<?php echo $social_media->social_media_id;?>')">
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