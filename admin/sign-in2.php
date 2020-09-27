
<?php $page='Become A Member Today'; include('./config/db.php');



 ?>
<!doctype html>
<html lang="en">
<!-- Copied from https://dashkit.goodthemes.co/sign-in-cover.html by Cyotek WebCopy 1.8.0.652, Wednesday, 17 June 2020, 1:15:23 pm -->
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">

    <!-- Libs CSS -->
    <link rel="stylesheet" href="assets/fonts/feather/feather.css">
    <link rel="stylesheet" href="assets/libs/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="assets/libs/quill/dist/quill.core.css">
    <link rel="stylesheet" href="assets/libs/highlightjs/styles/vs2015.css">

    <!-- Map -->
    <link href="mapbox-gl-js/v0.53.0/mapbox-gl.css" rel="stylesheet">

    <!-- Theme CSS -->
      
    <link rel="stylesheet" href="assets/css/theme.min.css" id="stylesheetLight">
    <link rel="stylesheet" href="assets/css/theme-dark.min.css" id="stylesheetDark">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <style>
      body {
        display: none;
      }

    </style>
    
    <!-- Title -->
    <title>Dashkit</title>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async="" src="gtag/js.js?id=UA-156446909-1"></script><script>window.dataLayer = window.dataLayer || [];function gtag(){dataLayer.push(arguments);}gtag("js", new Date());gtag("config", "UA-156446909-1");</script>

  </head>
  <body class="d-flex align-items-center bg-auth border-top border-top-2 border-primary">

  <?php

if (isset($_POST['login'])) {
  $user_email=$_POST['email'];
  $user_pass=$_POST['password'];
  $user_pass1=$user_pass;
  $status=1;

  $sql = "SELECT * FROM administrator where email ='".$user_email."' and status='".$status."'";
      $result = $con->query($sql);
  if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
      $password=$row["password"];

       }
  
      if ($user_pass1 == $password) {
          $_SESSION['email']=$user_email;
                echo "<script>swal({
                  title: 'Success!',
                  text: 'You login Successfully!',
                  icon: 'success',
                  button: 'Aww yiss!',
                })</script>";
          // echo "<script>window.open('index.php','_self')</script>";
          header('location:index');
      }elseif($user_pass1 !=$password){

          echo "<script>swal({
          title: 'Opps',
          text: 'Email/Password combination is incorrect, pls try again',
          icon: 'warning',
          button: 'Ok!',
        })</script>";
      }

}else{

  echo "<script>swal({
          title: 'Opps',
          text: 'Your account have not been verified, Please verify account',
          icon: 'warning',
          button: 'Ok!',
        })</script>";

}


 }
//  elseif ($_SESSION['user_email']=@$user_email) {
//   header('location:index.php');
// }

?>

    <!-- CONTENT
    ================================================== -->
    <div class="container-fluid">
      <div class="row align-items-center justify-content-center">
        <div class="col-12 col-md-5 col-lg-6 col-xl-4 px-lg-6 my-5">
              
          <!-- Heading -->
          <h1 class="display-4 text-center mb-3">
            Sign in
          </h1>
          
          <!-- Subheading -->
          <p class="text-muted text-center mb-5">
            Admin dashboard.
          </p>
          
          <!-- Form -->
          <form action="" method="POST">

            <!-- Email address -->
            <div class="form-group">

              <!-- Label -->
              <label>Email Address</label>

              <!-- Input -->
              <input type="email" class="form-control" placeholder="name@address.com" name="email">

            </div>

            <!-- Password -->
            <div class="form-group">

              <div class="row">
                <div class="col">
                      
                  <!-- Label -->
                  <label>Password</label>

                </div>
                <div class="col-auto">
                  
                  <!-- Help text -->
                  <a href="password-reset-cover.html" class="form-text small text-muted">
                    Forgot password?
                  </a>

                </div>
              </div> <!-- / .row -->

              <!-- Input group -->
              <div class="input-group input-group-merge">

                <!-- Input -->
                <input type="password" class="form-control form-control-appended" placeholder="Enter your password" name="password">

                <!-- Icon -->
                <div class="input-group-append">
                  <span class="input-group-text">
                    <i class="fe fe-eye"></i>
                  </span>
                </div>

              </div>
            </div>

            <!-- Submit -->
            <button class="btn btn-lg btn-block btn-primary mb-3" name="login">
              Sign in
            </button>

            <!-- Link -->
            <p class="text-center">
              <small class="text-muted text-center">
                Don't have an account yet? <a href="register">Sign up</a>.
              </small>
            </p>
            
          </form>

        </div>
        <!-- <div class="col-12 col-md-7 col-lg-6 col-xl-8 d-none d-lg-block">
          
         
          <div class="bg-cover vh-100 mt-n1 mr-n3" style="background-image: url(assets/img/covers/auth-side-cover.jpg);"></div>

        </div> -->
      </div> <!-- / .row -->
    </div>

    <!-- JAVASCRIPT
    ================================================== -->
    <!-- Libs JS -->
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/@shopify/draggable/lib/es5/draggable.bundle.legacy.js"></script>
    <script src="assets/libs/autosize/dist/autosize.min.js"></script>
    <script src="assets/libs/chart.js/dist/Chart.min.js"></script>
    <script src="assets/libs/dropzone/dist/min/dropzone.min.js"></script>
    <script src="assets/libs/flatpickr/dist/flatpickr.min.js"></script>
    <script src="assets/libs/highlightjs/highlight.pack.min.js"></script>
    <script src="assets/libs/jquery-mask-plugin/dist/jquery.mask.min.js"></script>
    <script src="assets/libs/list.js/dist/list.min.js"></script>
    <script src="assets/libs/quill/dist/quill.min.js"></script>
    <script src="assets/libs/select2/dist/js/select2.full.min.js"></script>
    <script src="assets/libs/chart.js/Chart.extension.js"></script>

    <!-- Map -->
    <script src='mapbox-gl-js/v0.53.0/mapbox-gl.js'></script>

    <!-- Theme JS -->
    <script src="assets/js/theme.min.js"></script>
    <script src="assets/js/dashkit.min.js"></script>


  </body>
<!-- Copied from https://dashkit.goodthemes.co/sign-in-cover.html by Cyotek WebCopy 1.8.0.652, Wednesday, 17 June 2020, 1:15:23 pm -->
</html>