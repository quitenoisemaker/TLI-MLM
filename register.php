<?php $page='Become A Member Today'; include('./config/db.php');



 ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Facebook Meta Tags For SEO -->
    <meta property="og:locale" content="en_GB" />
    <meta property="og:title" content="<?php echo $page; ?>">
    <meta property="og:site_name" content="">
    <meta property="og:url" content="">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
    <meta property="og:image" content="">
    <!-- Twitter Meta Tags For SEO -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@ojadeng">
    <meta name="twitter:title" content="<?php echo $page; ?>">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="">
    <!-- HTML Meta Tags For SEO -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content="INDEX,FOLLOW" name="robots" />
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta content="yes" name="mobile-web-app-capable" />
    <meta content="#32CD32" name="theme-color" />
    <meta content="#32CD32" name="msapplication-TileColor" />
    <meta content="#32CD32" name="apple-mobile-web-app-status-bar-style" />
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="keywords" content="">
    <!-- <link rel="stylesheet" href="assets/sweetalert/sweetalert2.min.css"> -->
    <link rel="stylesheet" href="assets/fonts/feather/feather.css">
    <link rel="stylesheet" href="assets/css/theme.min.css" id="stylesheetLight">
    <link rel="stylesheet" href="./assets/css/flash-pace.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="canonical" href="./">
    <style>
        body {
        display: none;
      }
    </style>
    <title>
        <?php echo $page; ?>
    </title>
</head>

<body class="d-flex align-items-center bg-auth border-top border-top-2 border-primary">
    <div class="container">
        <div class="container-fluid">
            <div class="text-center p-5">
                <a class="navbar-brand" href="index"><img src="img/logo.png" width="120" alt="logo" class="img-fluid"></a>
            </div>
            <div class="row align-items-center">
                <div class="col-12 col-md-6 offset-xl-1 offset-md-1 order-md-2 mb-5 mb-md-0">
                    <div class="text-center">
                        <img src="assets/img/illustrations/happiness.svg" alt="..." class="img-fluid">
                    </div>
                </div>
                <div class="col-12 col-md-10 col-xl-5 order-md-1 my-5">
                    <h1 class="display-4 text-center mb-3" style="color: #5B2C6F">
                        Become A Member Today
                    </h1>
                   
                    <form method="POST" action="">
                        <div class="row">
                            <div class="col-lg-6 form-group">
                                <label>First Name</label>
                                <input required type="text" class="form-control" name="fname">
                            </div>
                            <div class="col-lg-6 form-group">
                                <label>Last Name</label>
                                <input required type="text" class="form-control" name="lname">
                            </div>
                            <div class="col-lg-6 form-group">
                                <label>Username</label>
                                <input required type="text" class="form-control" name="username">
                            </div>
                            <div class="col-lg-6 form-group">
                                <label>Gender</label>
                                <select required class="form-control" name="gender">
                                    <option value="" selected disabled>Select gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                            <div class="col-lg-6 form-group">
                                <label>Phone Number</label>
                                <input required type="tel" class="form-control" name="fone">
                            </div>
                            <div class="col-lg-6 form-group">
                                <label>Password</label>
                                <div class="input-group input-group-merge">
                                    <input required type="password" class="form-control form-control-appended" placeholder="Enter your password" name="pass">
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="fe fe-eye"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 form-group">
                                <label>
                                    Email Address
                                </label>
                                <input required type="email" class="form-control" placeholder="name@address.com" name="email">
                            </div>
                            <div class="col-lg-12 form-group">
                                <label>Sponsor</label>
                                <input required type="text" class="form-control" name="referred" placeholder="Enter sponsor username">
                            </div>
                            <div class="col-lg-12 mb-3">
                                <hr>
                                <label class="text-muted">Bank details</label>
                                <hr>
                            </div>
                            <div class="col-lg-6 form-group">
                                <label>Full name</label>
                                <input required type="text" class="form-control" name="b_name" placeholder="Your bank account full name">
                            </div>
                            <div class="col-lg-6 form-group">
                                <label>Bank</label>
                                <select required class="form-control" name="bank" id="">
                                    <option value="" selected disabled>Select bank</option>
                                    <?php getBank(); ?>
                                </select>
                            </div>
                            <div class="col-lg-6 form-group">
                                <label>Account number</label>
                                <input required type="text" class="form-control" name="bank_act_no" placeholder="Enter bank account number">
                            </div>
                            <div class="col-lg-6 form-group">
                                <label>Account type</label>
                                <select required class="form-control" name="bank_type">
                                    <option value="" selected disabled>Select account type</option>
                                    <option value="savings">Saving</option>
                                    <option value="current">Current</option>
                                </select>
                            </div>
                            <!-- <div class="col-lg-12 form-group">
                            <label>What business would you like to learn ?</label>
                            <textarea required class="form-control" rows="3" name="business"></textarea>
                        </div> -->
                            <div class="col-lg-12 form-group">
                                <button class="btn btn-lg btn-block text-white mb-3" name="submit" style="background-color: #B7950B">
                                    <span>Register Now</span>
                                </button>
                            </div>
                            <div class="col-lg-12 form-group">
                                <div class="text-center">
                                    <small class="text-dark text-center">
                                        Already have an account? <a href="./sign-in">Sign In</a>.
                                    </small>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">Bank Transfer</h4>
                    </div>
                    <div class="modal-body text-center">
                        <h3>Please pay into the following Bank Account</h3>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Bank</th>
                                    <th scope="col">Account Number</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><b>Tli Multilevel</b></td>
                                    <td><b>UBA </b></td>
                                    <td><b>09209938494</b></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal ends -->
        <script src="assets/libs/jquery/dist/jquery.min.js"></script>
        <!-- <script src="assets/sweetalert/sweetalert2.all.min.js"></script> -->
        <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/theme.min.js"></script>
        <script src="assets/js/data.js"></script>
        <script src="assets/js/main.js"></script>
        <script type="text/javascript">
        /* Swal.fire({
                title: 'Mails Sent !',
                text: "All mails has been sent successfully !",
                type: 'success',
                allowOutsideClick: false,
                allowEscapeKey: false
            })*/
        </script>
</body>
<?php


if (isset($_POST['submit'])) {
    $email=$_POST['email'];
    $refer=$_POST['referred'];
    $user_count_limit=0;
    $limit=1;
    $username= $_POST['username'];
    $fone=$_POST['fone'];
    // $payment= $_POST['payment'];
    // $business= $_POST['business'];
    $fname=ucwords($_POST['fname']);
    $lname=ucwords($_POST['lname']);
    $vkey= md5(time().$fname);
    // $img=avatars('../assets/customers/', $_POST['fname']);
    $netw=NetworkDetect($_POST['fone']);
    $pass=md5($_POST['pass']);
    $user_link=change_character($_POST['referred'], ' ', '-');

    if(isset($_POST['gender'])){
    $gender=$_POST['gender'];
        }



                $us=mysqli_query($con, "SELECT * FROM `customers` WHERE username='$_POST[username]' ");
                        $count_users=mysqli_num_rows($us);
                        if($count_users > 0){

                            echo "<script>swal({
                            
                                        title: 'username already exist',
                                        icon: 'warning',
                                        button: 'Ok!',
                                      })</script>";

                           

                        }else{

            $ck=mysqli_query($con, "SELECT * FROM `customers` WHERE email='$_POST[email]' ");
    $count_users=mysqli_num_rows($ck);
    if($count_users > 0){

        echo "<script>swal({
        
                    title: 'Email already exist',
                    icon: 'warning',
                    button: 'Ok!',
                  })</script>";

       

    }else{
        if(check_mail($_POST['email'])==true){
            $refer=mysqli_query($con, "SELECT * FROM `customers` WHERE username='$_POST[referred]' ");
            $count_refer=mysqli_num_rows($refer);
            $row_refer=mysqli_fetch_array($refer);
            if($count_refer < 1){

                echo "<script>swal({
        
                    title: 'Username not found',
                    icon: 'warning',
                    button: 'Ok!',
                  })</script>";
                
            }else{
                $rmatrix=mysqli_query($con, "SELECT * FROM `relationship_matrix` WHERE upline='$row_refer[id]' ");
                $count_matrix=mysqli_num_rows($rmatrix);
                if($count_matrix > 1){

                    echo "<script>swal({
        
                    title: 'Exceeded limit, Please contact sponsor',
                    icon: 'warning',
                    button: 'Ok!',
                  })</script>";

                    

                }else{

                
                    mysqli_query($con, "INSERT INTO `customers`(`id`, `fname`, `lname`, `email`, `fone`,`fone_network`,`password`, `gender`, `username`,`bank`,`bank_act_no`,`bank_type`,`b_name`, `vkey`,`verify`, `status`, `date_created`, `user_link`, `last_login`) VALUES (NULL, '$fname','$lname','$_POST[email]','$_POST[fone]','$netw','$pass','$_POST[gender]','$_POST[username]','$_POST[bank]','$_POST[bank_act_no]','$_POST[bank_type]','$_POST[b_name]','$vkey','0','0','$date','$user_link','')");
                    $uid=mysqli_insert_id($con);

                    $subject = 'Verify your email address';
                    $body=  "<a href='https://tli/verify?vkey=$vkey'>Register account</a>";

                    //Sendgrid email
                $postdata=array ( 'personalizations'=> array ( 0=> array ( 'to'=> array ( 0=> array ( 'email'=> $email ) ), ), ),
              'from'=> array ( 'email'=> 'samsonojugo@gmail.com',),
              'subject'=> $subject,
              'content'=> array ( 0=> array ( 'type'=> 'text/html', 'value'=> $body ) ));
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
              //Sendgrid ends


                    //session email
                    $_SESSION['user_email']=$email;
                    

                    $ewallet=0;
                    $_SESSION['ewallet'] = $ewallet;


                    mysqli_query($con, "INSERT INTO `ewallet`(`id`, `user_id`, `current_balance`) VALUES (NULL, '$uid','$ewallet')");

                    $stage=mysqli_query($con, "SELECT * FROM `stage` WHERE stage_num='1' ");
                    $row_stage=mysqli_fetch_array($stage);
                    $u_count=$row_stage['user_limit'];
                    $new_limit=$u_count - $limit;


                    mysqli_query($con, "INSERT INTO `relationship_matrix`(`rel_matrix_id`, `user_id`, `upline`, `current_level`, `users_remaining`, `referral`, `pay_method`) VALUES (NULL, '$uid','$row_refer[id]','0','$new_limit','direct','$_POST[payment]')");


                    // echo "<script>alert('Customer created')</script>";

                    
                    header('location:confirm');
                }
                
            }
            
        }else{

        }
        }
        
    }
}


?>

</html>