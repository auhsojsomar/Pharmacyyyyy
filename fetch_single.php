<?php
include('db.php');
include('function.php');
if(isset($_POST["user_id"]))
{
	$output = array();
	$statement = $connection->prepare(
		"SELECT * FROM medicine 
		WHERE id = '".$_POST["user_id"]."' 
		LIMIT 1"
	);
	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row)
	{
		$output["name"] = $row["name"];
		$output["category"] = $row["category"];
		$output["store_box"] = $row["store_box"];
		$output["purchase_price"] = $row["purchase_price"];
		$output["selling_price"] = $row["selling_price"];
		$output["quantity"] = $row["quantity"];
		$output["generic_name"] = $row["generic_name"];
		$output["company"] = $row["company"];
		$output["effects"] = $row["effects"];
		$output["expiry_date"] = $row["expiry_date"];
	}
	echo json_encode($output);
}
?>