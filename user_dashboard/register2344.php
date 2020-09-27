<?php $page='Become A Member Today'; include('./config/db.php'); ?>
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
    <link rel="stylesheet" href="assets/sweetalert/sweetalert2.min.css">
    <link rel="stylesheet" href="assets/fonts/feather/feather.css">
    <link rel="stylesheet" href="assets/css/theme.min.css" id="stylesheetLight">
    <link rel="stylesheet" href="./assets/css/flash-pace.css">
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
        <div class="row align-items-center">
            <div class="col-12 col-md-6 offset-xl-1 offset-md-1 order-md-2 mb-5 mb-md-0">
                <div class="text-center">
                    <img src="assets/img/illustrations/happiness.svg" alt="..." class="img-fluid">
                </div>
            </div>
            <div class="col-12 col-md-5 col-xl-5 order-md-1 my-5">
                <h1 class="display-4 text-center mb-3">
                    Become A Member Today
                </h1>
                <p class="text-muted text-center mb-5">
                    Free access to our dashboard.
                </p>
                <form method="POST" class="new-auth">
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
                                <option value="">Chooose</option>
                                <option value="Male" >Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                        <div class="col-lg-6 form-group">
                            <label>Phone Number</label>
                            <input required type="tel" class="form-control" name="phone">
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
                        <div class="col-lg-6 form-group">
                            <label>Who Referred You ?</label>
                            <input required type="text" class="form-control" name="referred">
                        </div>
                        <div class="col-lg-6 form-group">
                            <label>Payment Method</label>
                            <select required class="form-control" name="payment">
                                <option value="">Choose</option>
                                <option value="credit/debit">Credit/Debit Cards</option>
                                <option value="bank-transfer">Bank Transfer</option>
                            </select>
                        </div>
                        <div class="col-lg-12 form-group">
                            <label>What business would you like to learn ?</label>
                            <textarea required class="form-control" rows="3" name="business"></textarea>
                        </div>
                        <div class="col-lg-12 form-group">
                            <button class="btn btn-lg btn-block btn-primary mb-3">
                                <span class="text-load">Register Now</span>
                                <div hidden class="spin-load spinner-border text-light" role="status">
                                    <span class="sr-only">Loading...</span>
                                </div>
                            </button>
                        </div>
                        <div class="col-lg-12 form-group">
                            <div class="text-center">
                                <small class="text-muted text-center">
                                    Already have an account? <a href="./sign-in">Sign In</a>.
                                </small>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="assets/sweetalert/sweetalert2.all.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/theme.min.js"></script>
    <script src="assets/js/data.js"></script>
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

</html>