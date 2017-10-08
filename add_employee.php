<?php
	$connection = mysqli_connect("localhost","root","","pharmacy");
	if(isset($_POST['btnsave']))
	{
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$last_name = $_POST['last_name'];
		$address = $_POST['address'];
		$phone_number = $_POST['phone_number'];
		$email = $_POST['email'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$imgFile = $_FILES['user_image']['name'];
		$tmp_dir = $_FILES['user_image']['tmp_name'];
		$imgSize = $_FILES['user_image']['size'];
		
		
		if(empty($username)){
			$errMSG = "Please Enter Username.";
		}
		else if(empty($userjob)){
			$errMSG = "Please Enter Your Job Work.";
		}
		else if(empty($imgFile)){
			$errMSG = "Please Select Image File.";
		}
		else
		{
			$upload_dir = 'upload/'; // upload directory
	
			$imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
		
			// valid image extensions
			$valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
		
			// rename uploading image
			$image = rand(1000,1000000).".".$imgExt;
				
			// allow valid image file formats
			if(in_array($imgExt, $valid_extensions)){			
				// Check file size '5MB'
				if($imgSize < 5000000)				{
					move_uploaded_file($tmp_dir,$upload_dir.$userpic);
				}
				else{
					$errMSG = "Sorry, your file is too large.";
				}
			}
			else{
				$errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";		
			}
		}
		
		
		// if no error occured, continue ....
		if(!isset($errMSG))
		{
			$stmt = $connection->prepare('INSERT INTO employee(first_name,last_name,address,phone_number,email,username,password,image)VALUES(:first_name,:last_name,:address,:phone_number,:email,:username,:password,:image');
			$stmt->bindParam(':first_name',$first_name);
			$stmt->bindParam(':last_name',$last_name);
			$stmt->bindParam(':address',$address);
			$stmt->bindParam(':phone_number',$phone_number);
			$stmt->bindParam(':email',$email);
			$stmt->bindParam(':username',$username);
			$stmt->bindParam(':password',$password);
			$stmt->bindParam(':image',$image);
			
			if($stmt->execute())
			{
				$successMSG = "new record succesfully inserted ...";
				header("refresh:5;index.php"); // redirects image view page after 5 seconds.
			}
			else
			{
				$errMSG = "error while inserting....";
			}
		}
	}
?>