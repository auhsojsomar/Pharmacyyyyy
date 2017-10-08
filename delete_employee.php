<?php
function get_image_name($user_id)
{
	include('db.php');
	$statement = $connection->prepare("SELECT image FROM employee WHERE id = '$user_id'");
	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row)
	{
		return $row["image"];
	}
}
include('db.php');
include("function.php");

if(isset($_POST["user_id"]))
{
	$image = get_image_name($_POST["user_id"]);
	if($image != '')
	{
		// unlink("upload/" . $image);
	}
	$statement = $connection->prepare(
		"UPDATE employee SET deleted=1 where id=:id"
	);
	$result = $statement->execute(
		array(
			':id'	=>	$_POST["user_id"]
		)
	);
	
	if(!empty($result))
	{
		echo 'Data Deleted';
	}
}



?>