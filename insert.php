<?php
function upload_image()
{
	if(isset($_FILES["user_image"]))
	{
		$extension = explode('.', $_FILES['user_image']['name']);
		$new_name = rand() . '.' . $extension[1];
		$destination = './upload/' . $new_name;
		move_uploaded_file($_FILES['user_image']['tmp_name'], $destination);
		return $new_name;
	}
}

include('db.php');
include('function.php');
if(isset($_POST["operation"]))
{
	if($_POST["operation"] == "Add")
	{
		$name = $_POST['name'];
		$category = $_POST['category'];
		$store_box = $_POST['store_box'];
		$purchase_price = $_POST['purchase_price'];
		$selling_price = $_POST['selling_price'];
		$generic_name = $_POST['generic_name'];
		$company = $_POST['company'];
		$effects = $_POST['effects'];
		$expiry_date = $_POST['expiry_date'];
		$statement = $connection->prepare("
			INSERT INTO medicine (name, category, store_box, purchase_price, selling_price, quantity, generic_name, company, effects, expiry_date)VALUES(:name, :category, :store_box, :purchase_price, :selling_price, :quantity, :generic_name, :company, :effects, :expiry_date)");
		$result = $statement->execute(
			array(
				':name'	=>	$_POST["name"],
				':category'	=>	$_POST["category"],
				':store_box'	=>	$_POST["store_box"],
				':purchase_price'	=>	$_POST["purchase_price"],
				':selling_price'	=>	$_POST["selling_price"],
				':quantity'	=>	$_POST["quantity"],
				':generic_name'	=>	$_POST["generic_name"],
				':company'	=>	$_POST["company"],
				':effects'	=>	$_POST["effects"],
				':expiry_date'	=>	$_POST["expiry_date"]
			)
		);
		if(!empty($result))
		{
			echo 'Data Inserted';
		}
	}
	if($_POST["operation"] == "Add Employee")
	{
		$image = '';
		if($_FILES["user_image"]["name"] != '')
		{
			$image = upload_image();
		}
		$statement = $connection->prepare("
			INSERT INTO employee (first_name, last_name, address, phone_number, email, username, password, image) VALUES (:first_name, :last_name, :address, :phone_number, :email, :username, :password, :image)
		");
		$result = $statement->execute(
			array(
				':first_name'	=>	$_POST["first_name"],
				':last_name'	=>	$_POST["last_name"],
				':address'	=>	$_POST["address"],
				':phone_number'	=>	$_POST["phone_number"],
				':email'	=>	$_POST["email"],
				':username'	=>	$_POST["username"],
				':password'	=>	$_POST["password"],
				':image'		=>	$image
			)
		);
		if(!empty($result))
		{
			echo 'Data Inserted';
		}
	}
	if($_POST["operation"] == "Add Expenses")
	{
		$date = date('Y-m-d');
		$statement = $connection->prepare("
			INSERT INTO expenses (category, date_now, amount)VALUES(:category, '$date', :amount)");
		$result = $statement->execute(
			array(
				':category'	=>	$_POST["category"],
				':amount'	=>	$_POST["amount"]
			)
		);
		if(!empty($result))
		{
			echo 'Data Inserted';
		}
	}
	if($_POST["operation"] == "Add Medicine Category")
	{
		$statement = $connection->prepare("
			INSERT INTO medicine_category (category, description)VALUES(:category, :description)");
		$result = $statement->execute(
			array(
				':category'	=>	$_POST["category"],
				':description'	=>	$_POST["description"]
			)
		);
		if(!empty($result))
		{
			echo 'Data Inserted';
		}
	}
	if($_POST["operation"] == "Add Employee Category")
	{
		$statement = $connection->prepare("
			INSERT INTO employee_category (category, description)VALUES(:category, :description)");
		$result = $statement->execute(
			array(
				':category'	=>	$_POST["category"],
				':description'	=>	$_POST["description"]
			)
		);
		if(!empty($result))
		{
			echo 'Data Inserted';
		}
	}
	if($_POST["operation"] == "Edit")
	{
		$statement = $connection->prepare(
			"UPDATE medicine 
			SET name = :name, category = :category, store_box = :store_box, purchase_price = :purchase_price, selling_price = :selling_price, quantity = :quantity, generic_name = :generic_name, company = :company, effects = :effects, expiry_date = :expiry_date
			WHERE id = :id
			"
		);
		$result = $statement->execute(
			array(
				':name'	=>	$_POST["name"],
				':category'	=>	$_POST["category"],
				':store_box'	=>	$_POST["store_box"],
				':purchase_price'	=>	$_POST["purchase_price"],
				':selling_price'	=>	$_POST["selling_price"],
				':quantity'	=>	$_POST["quantity"],
				':generic_name'	=>	$_POST["generic_name"],
				':company'	=>	$_POST["company"],
				':effects'	=>	$_POST["effects"],
				':expiry_date'	=>	$_POST["expiry_date"],
				':id'	=>	$_POST["user_id"]
			)
		);
		if(!empty($result))
		{
			echo 'Data Updated';
		}
	}
	if($_POST["operation"] == "Edit Employee")
	{
		$image = '';
		if($_FILES["user_image"]["name"] != '')
		{
			$image = upload_image();
		}
		else
		{
			$connection2 = mysqli_connect("localhost","root","","pharmacy");
			$query = mysqli_query($connection2,"Select image from employee where id = ".$_POST['user_id']."");
			$result = mysqli_fetch_assoc($query);
			$image = $result['image'];
		}
		$statement = $connection->prepare(
			"UPDATE employee 
			SET first_name = :first_name, last_name = :last_name, address = :address, phone_number = :phone_number, email = :email, username = :username, password = :password, image = :image  
			WHERE id = :id
			"
		);
		$result = $statement->execute(
			array(
				':first_name'	=>	$_POST["first_name"],
				':last_name'	=>	$_POST["last_name"],
				':address'	=>	$_POST["address"],
				':phone_number'	=>	$_POST["phone_number"],
				':email'	=>	$_POST["email"],
				':username'	=>	$_POST["username"],
				':password'	=>	$_POST["password"],
				':image'		=>	$image,
				':id'			=>	$_POST["user_id"]
			)
		);
		if(!empty($result))
		{
			echo 'Data Updated';
		}
	}
	if($_POST["operation"] == "Edit Expenses")
	{
		$statement = $connection->prepare(
			"UPDATE expenses 
			SET category = :category,amount = :amount 
			WHERE id = :id
			"
		);
		$result = $statement->execute(
			array(
				':category'	=>	$_POST["category"],
				':amount'	=>	$_POST["amount"],
				':id'			=>	$_POST["user_id"]
			)
		);
		if(!empty($result))
		{
			echo 'Data Updated';
		}
	}
	if($_POST["operation"] == "Edit Medicine Category")
	{
		$statement = $connection->prepare(
			"UPDATE medicine_category 
			SET category = :category,description = :description 
			WHERE id = :id
			"
		);
		$result = $statement->execute(
			array(
				':category'	=>	$_POST["category"],
				':description'	=>	$_POST["description"],
				':id'			=>	$_POST["user_id"]
			)
		);
		if(!empty($result))
		{
			echo 'Data Updated';
		}
	}
	if($_POST["operation"] == "Edit Employee Category")
	{
		$statement = $connection->prepare(
			"UPDATE employee_category 
			SET category = :category,description = :description 
			WHERE id = :id
			"
		);
		$result = $statement->execute(
			array(
				':category'	=>	$_POST["category"],
				':description'	=>	$_POST["description"],
				':id'			=>	$_POST["user_id"]
			)
		);
		if(!empty($result))
		{
			echo 'Data Updated';
		}
	}
}

if(isset($_POST["operation2"]))
{
	$newdate = $_POST["newdate"];
	$olddate = $_POST["datequantity"];
	if($newdate == $olddate)
	{
	$statement = $connection->prepare(
			"UPDATE medicine SET quantity = :quantity + quantity WHERE id = :id"
		);
		$result = $statement->execute(
			array(
				':quantity'	=>	$_POST["addquantitytext"],
				':id'	=>	$_POST["user_id2"]
			)
		);
		if(!empty($result))
		{
			echo 'Quantity Added';
		}
	}
	else
	{
		$statement = $connection->prepare("
			INSERT INTO medicine (name, category, store_box, purchase_price, selling_price, quantity, generic_name, company, effects, expiry_date)VALUES(:name, :category, :store_box, :purchase_price, :selling_price, :quantity, :generic_name, :company, :effects, :expiry_date)");
		$result = $statement->execute(
			array(
				':name'	=>	$_POST["name2"],
				':category'	=>	$_POST["category2"],
				':store_box'	=>	$_POST["store_box2"],
				':purchase_price'	=>	$_POST["purchase_price2"],
				':selling_price'	=>	$_POST["selling_price2"],
				':quantity'	=>	$_POST["addquantitytext"],
				':generic_name'	=>	$_POST["generic_name2"],
				':company'	=>	$_POST["company2"],
				':effects'	=>	$_POST["effects2"],
				':expiry_date'	=>	$_POST["datequantity"]
			)
		);
		if(!empty($result))
		{
			echo 'Data Inserted';
		}
	}
}

//if(isset($_POST['operation3']))
//{
//	if($_POST["operation3"] == "Add")
//	{
//		$image = '';
//		if($_FILES["user_image"]["name"] != '')
//		{
//			$image = upload_image();
//		}
//		$statement = $connection->prepare("
//			INSERT INTO employee (first_name,last_name,address,phone_number,email,username,password,image) 
//			VALUES (:first_name,:last_name,:address,:phone_number,:email,:username,:password,:image)
//		");
//		$result = $statement->execute(
//			array(
//				':first_name'	=>	$_POST["first_name"],
//				':last_name'	=>	$_POST["last_name"],
//				':address'	=>	$_POST["address"],
//				':phone_number'	=>	$_POST["phone_number"],
//				':email'	=>	$_POST["email"],
//				':username'	=>	$_POST["username"],
//				':password'	=>	$_POST["password"],
//				':image'		=>	$image
//			)
//		);
//		if(!empty($result))
//		{
//			echo 'Data Inserted';
//		}
//	}
//	if($_POST["operation3"] == "Edit")
//	{
//		$image = '';
//		if($_FILES["user_image"]["name"] != '')
//		{
//			$image = upload_image();
//		}
//		else
//		{
//			$image = $_POST["hidden_user_image"];
//		}
//		$statement = $connection->prepare(
//			"UPDATE employee SET first_name = :first_name, last_name = :last_name, address = :address, phone_number = :phone_number, email = :email, username = :username, password = :password, image = :image  
//			WHERE id = :id
//			"
//		);
//		$result = $statement->execute(
//			array(
//				':first_name'	=>	$_POST["first_name"],
//				':last_name'	=>	$_POST["last_name"],
//				':address'	=>	$_POST["address"],
//				':phone_number'	=>	$_POST["phone_number"],
//				':email'	=>	$_POST["email"],
//				':username'	=>	$_POST["username"],
//				':password'	=>	$_POST["password"],
//				':image'		=>	$image,
//				':id'			=>	$_POST["user_id3"]
//			)
//		);
//		if(!empty($result))
//		{
//			echo 'Data Updated';
//		}
//	}
//}
?>