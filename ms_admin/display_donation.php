<?php 
include "class/Donation.php";
function main(){
$orderBy = "desc";
$fieldName = "donation_id";
if(isset($_REQUEST["orderBy"])){
 	$orderBy = $_REQUEST["orderBy"];
	$fieldName = $_REQUEST["fieldName"];
}

$keywords = trim($_REQUEST["keywords"]);

if($keywords != ""){
	$condition.=" a.amount like '%$keywords%' and ";
}

$condition.=" 1 order by a.$fieldName $orderBy ";

// paging
$limit=10000;
$offset = 0;
$page=$_REQUEST["page"];
$recordsCount = Donation::count($condition);
$numberOfPages = ceil($recordsCount/$limit);
if($page !=""){
	$page=$_REQUEST["page"];
	$offset = ($page - 1) * $limit ;
}


$condition.=" limit $limit offset $offset ";
$records = Donation::select($condition);
?><div class="portlet box blue">
	<div class="portlet-title">
		<div class="caption">
				<i class="fa fa-globe"></i>DONATION MANAGEMENT
				<!--
				<form name="myform223" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
					<div>
						Search by amount: 
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
<label><input type="checkbox" checked data-column="0">ID</label><label><input type="checkbox" checked data-column="<?php echo "1";?>"><?php echo "Date time";?></label><label><input type="checkbox" checked data-column="<?php echo "2";?>"><?php echo "Amount";?></label><label><input type="checkbox" checked data-column="<?php echo "3";?>"><?php echo "Currency id";?></label><label><input type="checkbox" checked data-column="<?php echo "4";?>"><?php echo "Email address";?></label><label><input type="checkbox" checked data-column="<?php echo "5";?>"><?php echo "Name";?></label><label><input type="checkbox" checked data-column="<?php echo "6";?>"><?php echo "City";?></label><label><input type="checkbox" checked data-column="<?php echo "7";?>"><?php echo "State id";?></label><label><input type="checkbox" checked data-column="<?php echo "8";?>"><?php echo "Zipcode";?></label>
				</div>
			</div>
			<div class="btn-group" >
				<a id="sample_editable_1_new" class="btn green" href="new_donation.php">
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
<th><?php echo "Date time";?></th>
<th><?php echo "Amount";?></th>
<th><?php echo "Currency En";?></th>
<th><?php echo "Email address";?></th>
<th><?php echo "Name";?></th>
<th><?php echo "City";?></th>
<th><?php echo "Name En";?></th>
<th><?php echo "Zipcode";?></th>
<th></th>
<th></th>

				</tr>
			</thead>
			<tbody>
			
	<?php 
 	 	for($rc=0;$rc<count($records);$rc++){
  		$donation = $records[$rc];
	?>
				<tr  id="<?php echo $donation->donation_id;?>">
					<!-- primary key -->
					<td><?php echo $donation->donation_id;?></td>
					<td><?php echo substr(strip_tags($donation->date_time), 0, 30); if(strlen($donation->date_time) > 30) echo "...";  ?></td>
<td><?php echo substr(strip_tags($donation->amount), 0, 30); if(strlen($donation->amount) > 30) echo "...";  ?></td>
<td><?php echo substr(strip_tags($donation->currency_en), 0, 30); if(strlen($donation->currency_en) > 30) echo "...";  ?></td>
<td><?php echo substr(strip_tags($donation->email_address), 0, 30); if(strlen($donation->email_address) > 30) echo "...";  ?></td>
<td><?php echo substr(strip_tags($donation->name), 0, 30); if(strlen($donation->name) > 30) echo "...";  ?></td>
<td><?php echo substr(strip_tags($donation->city), 0, 30); if(strlen($donation->city) > 30) echo "...";  ?></td>
<td><?php echo substr(strip_tags($donation->name_en), 0, 30); if(strlen($donation->name_en) > 30) echo "...";  ?></td>
<td><?php echo substr(strip_tags($donation->zipcode), 0, 30); if(strlen($donation->zipcode) > 30) echo "...";  ?></td>

					<td>
						<a class="btn btn-xs yellow" href="edit_donation.php?id=<?php echo $donation->donation_id?>">
						Edit
						<i class="fa fa-edit"></i>
						</a>			
					</td>
					<td>
						<a class="btn btn-xs red" href="javascript:deleteAjax('donation', '<?php echo $donation->donation_id;?>')">
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
