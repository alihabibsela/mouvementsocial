<?php 
include "class/Founders.php";
function main(){
$orderBy = "desc";
$fieldName = "founders_id";
if(isset($_REQUEST["orderBy"])){
 	$orderBy = $_REQUEST["orderBy"];
	$fieldName = $_REQUEST["fieldName"];
}

$keywords = trim($_REQUEST["keywords"]);

if($keywords != ""){
	$condition.=" a.name_en like '%$keywords%' and ";
}

$condition.=" 1 order by a.$fieldName $orderBy ";

// paging
$limit=10000;
$offset = 0;
$page=$_REQUEST["page"];
$recordsCount = Founders::count($condition);
$numberOfPages = ceil($recordsCount/$limit);
if($page !=""){
	$page=$_REQUEST["page"];
	$offset = ($page - 1) * $limit ;
}


$condition.=" limit $limit offset $offset ";
$records = Founders::select($condition);
?><div class="portlet box blue">
	<div class="portlet-title">
		<div class="caption">
				<i class="fa fa-globe"></i>FOUNDERS MANAGEMENT
				<!--
				<form name="myform223" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
					<div>
						Search by name en: 
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
<label><input type="checkbox" checked data-column="0">ID</label><label><input type="checkbox" checked data-column="<?php echo "1";?>"><?php echo "Name ar";?></label><label><input type="checkbox" checked data-column="<?php echo "2";?>"><?php echo "Name en";?></label><label><input type="checkbox" checked data-column="<?php echo "3";?>"><?php echo "Name fr";?></label><label><input type="checkbox" checked data-column="<?php echo "4";?>"><?php echo "Image";?></label><label><input type="checkbox" checked data-column="<?php echo "5";?>"><?php echo "Position ar";?></label><label><input type="checkbox" checked data-column="<?php echo "6";?>"><?php echo "Position en";?></label><label><input type="checkbox" checked data-column="<?php echo "7";?>"><?php echo "Position fr";?></label><label><input type="checkbox" checked data-column="<?php echo "8";?>"><?php echo "Orders";?></label>
				</div>
			</div>
			<div class="btn-group" >
				<a id="sample_editable_1_new" class="btn green" href="new_founders.php">
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
<th><?php echo "Name ar";?></th>
<th><?php echo "Name en";?></th>
<th><?php echo "Name fr";?></th>
<th><?php echo "Image";?></th>
<th><?php echo "Position ar";?></th>
<th><?php echo "Position en";?></th>
<th><?php echo "Position fr";?></th>
<th><?php echo "Orders";?></th>
<th></th>
<th></th>

				</tr>
			</thead>
			<tbody>
			
	<?php 
 	 	for($rc=0;$rc<count($records);$rc++){
  		$founders = $records[$rc];
	?>
				<tr  id="<?php echo $founders->founders_id;?>">
					<!-- primary key -->
					<td><?php echo $founders->founders_id;?></td>
					<td><?php echo substr(strip_tags($founders->name_ar), 0, 30); if(strlen($founders->name_ar) > 30) echo "...";  ?></td>
<td><?php echo substr(strip_tags($founders->name_en), 0, 30); if(strlen($founders->name_en) > 30) echo "...";  ?></td>
<td><?php echo substr(strip_tags($founders->name_fr), 0, 30); if(strlen($founders->name_fr) > 30) echo "...";  ?></td>
<td><?php echo substr(strip_tags($founders->image), 0, 30); if(strlen($founders->image) > 30) echo "...";  ?></td>
<td><?php echo substr(strip_tags($founders->position_ar), 0, 30); if(strlen($founders->position_ar) > 30) echo "...";  ?></td>
<td><?php echo substr(strip_tags($founders->position_en), 0, 30); if(strlen($founders->position_en) > 30) echo "...";  ?></td>
<td><?php echo substr(strip_tags($founders->position_fr), 0, 30); if(strlen($founders->position_fr) > 30) echo "...";  ?></td>
<td><?php echo substr(strip_tags($founders->orders), 0, 30); if(strlen($founders->orders) > 30) echo "...";  ?></td>

					<td>
						<a class="btn btn-xs yellow" href="edit_founders.php?id=<?php echo $founders->founders_id?>">
						Edit
						<i class="fa fa-edit"></i>
						</a>			
					</td>
					<td>
						<a class="btn btn-xs red" href="javascript:deleteAjax('founders', '<?php echo $founders->founders_id;?>')">
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
