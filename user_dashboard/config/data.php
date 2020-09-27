<?php 
require("db.php");

if(isset($_GET['action']) && $_GET['action']=='new_customer'){
	$ck=mysqli_query($con, "SELECT * FROM `customers` WHERE email='$_POST[email]' ");
	$count_users=mysqli_num_rows($ck);
	if($count_users > 0){

		echo json_encode(['error' => ['title' => 'Email already Exist !', "text" => "Sorry but this username could not be found on our database"]]);

	}else{
		if(check_mail($_POST['email'])==true){
			$refer=mysqli_query($con, "SELECT * FROM `customers` WHERE username='$_POST[referred]' ");
			$count_refer=mysqli_num_rows($refer);
			$row_refer=mysqli_fetch_array($refer);
			if($count_refer < 1){
				echo json_encode(['error' => ['title' => 'Account Doesn\'t Exist !', "text" => "Sorry but this username could not be found on our database"]]);
			}else{
				$rmatrix=mysqli_query($con, "SELECT * FROM `relationship_matrix` WHERE upline='$row_refer[id]' ");
				$count_matrix=mysqli_num_rows($rmatrix);
				if($count_matrix > 1){

					echo json_encode(['error' => ['title' => 'Exceeded your limit !', "text" => "Check your mailbox to confirm your account"]]);

				}else{

					$user_count_limit=0;
					$limit=1;
					$fname=ucwords($_POST['fname']);
					$lname=ucwords($_POST['lname']);
					$img=avatars('../assets/customers/', $_POST['fname']);
					$netw=NetworkDetect($_POST['fone']);
					$pass=md5($_POST['pass']);
					$user_link=change_character($_POST['username'], ' ', '-');
					mysqli_query($con, "INSERT INTO `customers`(`id`, `fname`, `lname`, `email`, `fone`,`fone_network`,`password`, `img`, `gender`, `username`,`business`, `status`, `date_created`, `user_link`, `last_login`) VALUES (NULL, '$fname','$lname','$_POST[email]','$_POST[fone]','$netw','$pass','$img','$_POST[gender]','$_POST[username]','$_POST[business]','0','$date','$user_link','')");
					$uid=mysqli_insert_id($con);

					$stage=mysqli_query($con, "SELECT * FROM `stage` WHERE stage_num='1' ");
					$row_stage=mysqli_fetch_array($stage);
					$u_count=$row_stage['user_limit'];
					$new_limit=$u_count - $limit;

					mysqli_query($con, "INSERT INTO `relationship_matrix`(`rel_matrix_id`, `user_id`, `upline`, `current_level`, `users_remaining`, `referral`, `pay_method`) VALUES (NULL, '$uid','$row_refer[id]','0','$new_limit','direct','$_POST[payment]')");
					echo json_encode(["success" => ['title' => 'Registration Completed !', 'text' => 'Check your mailbox to confirm your account']]);
				}
				
			}
			
		}else{

		}
		
	}
}



if(isset($_GET['action']) && $_GET['action']=='generate_otp'){
	$token=getToken(4);
	
	echo json_encode(['success' => ['token' => $token]]);
	
	$postdata=array ( 'personalizations'=> array ( 0=> array ( 'to'=> array ( 0=> array ( 'email'=> 'ojugosamson007@gmail.com', ) ), ), ),
  'from'=> array ( 'email'=> 'samsonojugo@gmail.com',),
  'subject'=> 'Mentapps has a new Quote Request from: Name->' .'samson'. ', Email->' .'ojugosamson007@gmail.com'.', Phone Number->090287484445',
  'content'=> array ( 0=> array ( 'type'=> 'text/html', 'value'=> $token  ) ));
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, 'https://api.sendgrid.com/v3/mail/send');
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postdata));
  $headers = array();
  $headers[] = 'Authorization: Bearer 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';
  $headers[] = 'Content-Type: application/json';
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  $result = curl_exec($ch);
  if (curl_errno($ch)) {
      echo 'Error:' . curl_error($ch);
  }
  curl_close($ch);
}

//update bank

if(isset($_GET['action']) && $_GET['action']=='update_bank'){
	echo json_encode(['success' => ['title' => "Bank Account Updated", "title" => "You\r've successfully updated your bank information"]]);
}
 //update bank


if(isset($_GET['action']) && $_GET['action']=='fund_wallet'){
	if(!empty($_POST['pay_money'])){
		if(isset($_SESSION['user_email'])){
			$get_user=mysqli_query($con, "SELECT * FROM `customers` WHERE email='$_SESSION[user_email]' ");
			$row_user=mysqli_fetch_array($get_user);
			
		}
		mysqli_query($con,"INSERT INTO `ewallet_payment`(`id`, `firstname`, `lastname`, `email`, `phone`, `amount`, `reference_no`, `date`) VALUES (NULL,'$row_user[fname]','$row_user[lname]','$_SESSION[user_email]','$row_user[fone]','$_POST[pay_money]','$_POST[ref]','$date')");

		echo true;


				$get_ewallet=mysqli_query($con, "SELECT * FROM `ewallet` WHERE user_id='$row_user[id]' ");
			$row_ewallet=mysqli_fetch_array($get_ewallet);
			 $ewallet=$row_ewallet['current_balance'];

			 $get_amount=mysqli_query($con, "SELECT * FROM `ewallet_payment` WHERE email='$_SESSION[user_email]' ");
			$row_amount=mysqli_fetch_array($get_amount);
			 $pwallet=$_POST['pay_money'];

			 $final=$ewallet + $pwallet;

			 $ewallet_update=mysqli_query($con, "UPDATE `ewallet` SET `current_balance`='$final' WHERE user_id='$row_user[id]'");


	}

}

if(isset($_GET['action']) && $_GET['action']=='fund_wallet_reg'){

	$status= 1;
	
		if(isset($_SESSION['user_email'])){
			$get_user=mysqli_query($con, "SELECT * FROM `customers` WHERE email='$_SESSION[user_email]' ");
			$row_user=mysqli_fetch_array($get_user);
			
		}
		mysqli_query($con,"INSERT INTO `ewallet_payment`(`id`, `firstname`, `lastname`, `email`, `phone`, `amount`, `reference_no`, `date`) VALUES (NULL,'$row_user[fname]','$row_user[lname]','$_SESSION[user_email]','$row_user[fone]','10000','$_POST[ref]','$date')");

		echo true;


				$get_ewallet=mysqli_query($con, "SELECT * FROM `ewallet` WHERE user_id='$row_user[id]' ");
			$row_ewallet=mysqli_fetch_array($get_ewallet);
			 $ewallet=$row_ewallet['current_balance'];

			 $get_amount=mysqli_query($con, "SELECT * FROM `ewallet_payment` WHERE email='$_SESSION[user_email]' ");
			$row_amount=mysqli_fetch_array($get_amount);
			 $pwallet=10000;

			 $final=$ewallet + $pwallet;
			 //update wallet
			 // $ewallet_update=mysqli_query($con, "UPDATE `ewallet` SET `current_balance`='$final' WHERE user_id='$row_user[id]'");
			 //update status
			 $status_update2=mysqli_query($con, "UPDATE `customers` SET `status`='$status' WHERE id='$row_user[id]'");


}

if(isset($_GET['action']) && $_GET['action']=='transfer_wallet') {
	$total=0;
      $total2=0;
      $status=1;
      $amount= $_POST['transfer_money'];
      $username= $_POST['transfer_username'];
      //select main user
      if (isset($_SESSION['user_email'])) {
        $get_user=mysqli_query($con, "SELECT * FROM `customers` WHERE email='$_SESSION[user_email]' ");
      $row_user=mysqli_fetch_array($get_user);
      }
      	// if username is same
      if ($row_user['username'] == $username) {
      	echo false;
      }else{


      // get main user wallet
      $get_ewallet=mysqli_query($con, "SELECT * FROM `ewallet` WHERE user_id='$row_user[id]' ");
      $row_ewallet=mysqli_fetch_array($get_ewallet);
       $ewallet=$row_ewallet['current_balance'];
       	//ewallet is less than 10000 or the input amount is more than the available wallet
       if (($ewallet<10000) || ($amount > $ewallet)){
       	echo false;
       	
       }else{


       	$total= $ewallet - $amount;
       
       
       //select user2
       $get_user2=mysqli_query($con, "SELECT * FROM `customers` WHERE username='$username' ");
       $count_user2=mysqli_num_rows($get_user2);
       $row_user2=mysqli_fetch_array($get_user2);
        $user2_status=$row_user2['status'];

      // get main user2 wallet
        $get_ewallet2=mysqli_query($con, "SELECT * FROM `ewallet` WHERE user_id='$row_user2[id]' ");
       $row_ewallet2=mysqli_fetch_array($get_ewallet2);
       $ewallet2 = $row_ewallet2['current_balance'];
       $total2 = $ewallet2 + $amount;

       
       	//if username is not on the database
       if($count_user2 < 1){

               echo false;
                
            }else{

            // update main user wallet
        $ewallet_update=mysqli_query($con, "UPDATE `ewallet` SET `current_balance`='$total' WHERE user_id='$row_user[id]'");

          // update user2 wallet if only the status is approved
        if ($user2_status==1) {
        	$ewallet_update2=mysqli_query($con, "UPDATE `ewallet` SET `current_balance`='$total2' WHERE user_id='$row_user2[id]'");
        }
        
        //if amount greater than 10000 it should update
        if ($amount >=10000) {
        	// update user2 status
        	$status_update2=mysqli_query($con, "UPDATE `customers` SET `status`='$status' WHERE id='$row_user2[id]'");
        }
        //end
        


         mysqli_query($con, "INSERT INTO `transfer_fund`(`id`, `user_id`, `sent_to`, `amount`, `date_created`) VALUES (NULL,'$row_user[id]','$username','$amount','$date')");

        echo true;

        }

        }

        }


        

}


if(isset($_GET['action']) && $_GET['action']=='get_answer') {

	$stage= 1;
	$options=$_POST['selected'];


	if (isset($_SESSION['user_email'])) {
        $get_user=mysqli_query($con, "SELECT * FROM `customers` WHERE email='$_SESSION[user_email]' ");
      $row_user=mysqli_fetch_array($get_user);
      }

      $questions=mysqli_query($con, "SELECT * FROM `training_questions` WHERE stage_id='$stage' ");
      $row_question=mysqli_fetch_array($questions);

      $options=mysqli_query($con, "SELECT * FROM `training_questions_options` WHERE que_id='$row_question[id]' ");
      $row_options=mysqli_fetch_array($options);


      mysqli_query($con, "INSERT INTO `user_option_answers`(`uoa_id`, `user_id`, `question_id`, `option_id`) VALUES (NULL,'$row_user[id]','$row_question[id]', '$_POST[selected]')");

        echo true;










}




 ?>