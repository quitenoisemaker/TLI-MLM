<?php 
require("db.php");

if(isset($_GET['action']) && $_GET['action']=='update_bank'){



	if(isset($_SESSION['user_email'])){
			$get_user=mysqli_query($con, "SELECT * FROM `customers` WHERE email='$_SESSION[user_email]' ");
			$row_user=mysqli_fetch_array($get_user);
			
		}

		// $update_user=mysqli_query($con, "UPDATE `customers` SET `bank`=$_POST[bank],`bank_act_no`=$_POST[bank_act_no],`bank_type`=$_POST[bank_type],`b_name`=$_POST[bank_name] WHERE email='$_SESSION[user_email]'");

		

		    $sql = "UPDATE customers SET bank='$_POST[bank]', bank_act_no='$_POST[bank_act_no]', bank_type='$_POST[bank_type]', b_name='$_POST[bank_name]' WHERE email='$_SESSION[user_email]'";

			  if(mysqli_query($con, $sql)) {

			    echo true;
			    }


	// echo json_encode(['success' => ['title' => "Bank Account Updated", "title" => "You\r've successfully updated your bank information"]]);



	// echo json_encode(['success' => ['title' => "Bank Account Updated", "title" => "You\r've successfully updated your bank information"]]);
}



if(isset($_GET['action']) && $_GET['action']=='update_password'){



	if(isset($_SESSION['user_email'])){
			$get_user=mysqli_query($con, "SELECT * FROM `customers` WHERE email='$_SESSION[user_email]' ");
			$row_user=mysqli_fetch_array($get_user);
			
		}

		// $update_user=mysqli_query($con, "UPDATE `customers` SET `bank`=$_POST[bank],`bank_act_no`=$_POST[bank_act_no],`bank_type`=$_POST[bank_type],`b_name`=$_POST[bank_name] WHERE email='$_SESSION[user_email]'");

		$password= $row_user['password'];

		if ($password != $_POST['current_password']) {
			echo false;
		}elseif ($_POST['new_password'] != $_POST['confirm_password']) {
			// echo false;
		}else{

			$sql = "UPDATE customers SET password='$_POST[new_password]' WHERE email='$_SESSION[user_email]'";

			  if(mysqli_query($con, $sql)) {

			    echo true;
			    }

		}

		

		    


	// echo json_encode(['success' => ['title' => "Bank Account Updated", "title" => "You\r've successfully updated your bank information"]]);



	// echo json_encode(['success' => ['title' => "Bank Account Updated", "title" => "You\r've successfully updated your bank information"]]);
}


 ?>