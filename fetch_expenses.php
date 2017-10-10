<?php
function get_total_all_records()
{
	include('db.php');
	$statement = $connection->prepare("SELECT * FROM expenses");
	$statement->execute();
	$result = $statement->fetchAll();
	return $statement->rowCount();
}
include('db.php');
$output = array();
$query = "SELECT * FROM expenses where deleted = 0";
$statement = $connection->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$data = array();
$filtered_rows = $statement->rowCount();
foreach($result as $row)
{
	$sub_array = array();
	$sub_array[] = $row["category"];
	$sub_array[] = $row["date_now"];
	$sub_array[] = $row["amount"];
	$sub_array[] = '<button style="width: 80%;" type="button" name="update" id="'.$row["id"].'" class="btn btn-warning update"><i class="fa fa-edit"></i> Update</button><button style="width: 80%;margin-top: 5px;" type="button" name="delete" id="'.$row["id"].'" class="btn btn-danger delete"><i class="fa fa-trash"></i> Delete&nbsp&nbsp</button>';
	$data[] = $sub_array;
}
$output = array(
	// "draw"				=>	intval($_POST["draw"]),
	"recordsTotal"		=> 	$filtered_rows,
	"recordsFiltered"	=>	get_total_all_records(),
	"data"				=>	$data
);
echo json_encode($output);
?>