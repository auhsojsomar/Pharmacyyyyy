<?php
include('db.php');
include('function.php');
$output = array();
$query = "SELECT * FROM medicine  WHERE deleted!=1";
$statement = $connection->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$data = array();
$filtered_rows = $statement->rowCount();
foreach($result as $row)
{
	$sub_array = array();
	$sub_array[] = $row["name"];
	$sub_array[] = $row["category"];
	$sub_array[] = $row["store_box"];
	$sub_array[] = $row["purchase_price"];
	$sub_array[] = $row["selling_price"];
	$sub_array[] = $row["quantity"].'<br><button type="button" class="btn btn-info btn-xs btn_width load" id="'.$row["id"].'" name="load"> Load</button>';
	$sub_array[] = $row["generic_name"];
	$sub_array[] = $row["company"];
	$sub_array[] = $row["effects"];
	$sub_array[] = $row["expiry_date"];
	$sub_array[] = '<button style="width: 80%;" type="button" name="update" id="'.$row["id"].'" class="btn btn-warning update"><i class="fa fa-edit"></i> Update</button><button style="width: 80%;margin-top: 5px;" type="button" name="delete" id="'.$row["id"].'" class="btn btn-danger delete"><i class="fa fa-trash"></i> Delete&nbsp&nbsp</button>';
	$data[] = $sub_array;
}
$output = array(
//	"draw"				=>	intval($_POST["draw"]),
	"recordsTotal"		=> 	$filtered_rows,
	"recordsFiltered"	=>	get_total_all_records(),
	"data"				=>	$data
);
echo json_encode($output);
?>