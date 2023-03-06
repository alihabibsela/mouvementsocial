<?php 
include "class/Centers.php";
function main(){
$orderBy = "desc";
$fieldName = "centers_id";
if(isset($_REQUEST["orderBy"])){
 	$orderBy = $_REQUEST["orderBy"];
	$fieldName = $_REQUEST["fieldName"];
}

$keywords = trim($_REQUEST["keywords"]);

if($keywords != ""){
	$condition.=" a.name_ar like '%$keywords%' and ";
}

$condition.=" 1 order by a.$fieldName $orderBy ";

// paging
$limit=10000;
$offset = 0;
$page=$_REQUEST["page"];
$recordsCount = Centers::count($condition);
$numberOfPages = ceil($recordsCount/$limit);
if($page !=""){
	$page=$_REQUEST["page"];
	$offset = ($page - 1) * $limit ;
}


$condition.=" limit $limit offset $offset ";
$records = Centers::select($condition);
?><div class="portlet box blue">
	<div class="portlet-title">
		<div class="caption">
				<i class="fa fa-globe"></i>CENTERS MANAGEMENT
				<!--
				<form name="myform223" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
					<div>
						Search by name ar: 
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
<label><input type="checkbox" checked data-column="0">ID</label><label><input type="checkbox" checked data-column="<?php echo "1";?>"><?php echo "Name ar";?></label><label><input type="checkbox" checked data-column="<?php echo "2";?>"><?php echo "Name en";?></label><label><input type="checkbox" checked data-column="<?php echo "3";?>"><?php echo "Name fr";?></label><label><input type="checkbox" checked data-column="<?php echo "4";?>"><?php echo "Address ar";?></label><label><input type="checkbox" checked data-column="<?php echo "5";?>"><?php echo "Address en";?></label><label><input type="checkbox" checked data-column="<?php echo "6";?>"><?php echo "Address fr";?></label><label><input type="checkbox" checked data-column="<?php echo "7";?>"><?php echo "Phone";?></label><label><input type="checkbox" checked data-column="<?php echo "8";?>"><?php echo "Fax";?></label>
				</div>
			</div>
			<div class="btn-group" >
				<a id="sample_editable_1_new" class="btn green" href="new_centers.php">
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
<th>
    <?php echo "Area ar";?>
</th>
<th>
    <?php echo "Area en";?>
</th>
<th>
    <?php echo "Area fr";?>
</th>
<th><?php echo "Address ar";?></th>
<th><?php echo "Address en";?></th>
<th><?php echo "Address fr";?></th>
<th><?php echo "Phone";?></th>
<th><?php echo "Fax";?></th>
<th></th>
<th></th>

				</tr>
			</thead>
			<tbody>
			
	<?php 
 	 	for($rc=0;$rc<count($records);$rc++){
  		$centers = $records[$rc];
	?>
				<tr  id="<?php echo $centers->centers_id;?>">
					<!-- primary key -->
					<td><?php echo $centers->centers_id;?></td>
					<td><?php echo substr(strip_tags($centers->name_ar), 0, 30); if(strlen($centers->name_ar) > 30) echo "...";  ?></td>
					<td><?php echo substr(strip_tags($centers->name_en), 0, 30); if(strlen($centers->name_en) > 30) echo "...";  ?></td>
					<td><?php echo substr(strip_tags($centers->name_fr), 0, 30); if(strlen($centers->name_fr) > 30) echo "...";  ?></td>
                    <td>
                        <?php echo substr(strip_tags($centers->area_ar), 0, 30); if(strlen($centers->area_ar) > 30) echo "...";  ?>
                    </td>
                    <td>
                        <?php echo substr(strip_tags($centers->area_en), 0, 30); if(strlen($centers->area_en) > 30) echo "...";  ?>
                    </td>
                    <td>
                        <?php echo substr(strip_tags($centers->area_fr), 0, 30); if(strlen($centers->area_fr) > 30) echo "...";  ?>
                    </td>
					<td><?php echo substr(strip_tags($centers->address_ar), 0, 30); if(strlen($centers->address_ar) > 30) echo "...";  ?></td>
					<td><?php echo substr(strip_tags($centers->address_en), 0, 30); if(strlen($centers->address_en) > 30) echo "...";  ?></td>
					<td><?php echo substr(strip_tags($centers->address_fr), 0, 30); if(strlen($centers->address_fr) > 30) echo "...";  ?></td>
					<td><?php echo substr(strip_tags($centers->phone), 0, 30); if(strlen($centers->phone) > 30) echo "...";  ?></td>
					<td><?php echo substr(strip_tags($centers->fax), 0, 30); if(strlen($centers->fax) > 30) echo "...";  ?></td>
					<td>
						<a class="btn btn-xs yellow" href="edit_centers.php?id=<?php echo $centers->centers_id?>">
						Edit
						<i class="fa fa-edit"></i>
						</a>			
					</td>
					<td>
						<a class="btn btn-xs red" href="javascript:deleteAjax('centers', '<?php echo $centers->centers_id;?>')">
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
