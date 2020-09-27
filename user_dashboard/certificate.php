<?php
include('./config/db.php');

if (isset($_SESSION['user_email'])) {
                  $user=$_SESSION['user_email'];

                $sql = "SELECT * FROM customers where email ='".$user."'";
            $result = $con->query($sql);
                while($row=$result->fetch_assoc()){
                $fname = $row['fname'];
                $lname = $row['lname'];
                  }
                  }

// somewhere early in your project's loading, require the Composer autoloader
// see: http://getcomposer.org/doc/00-intro.md
require 'vendor/autoload.php';



$testing2= "<!DOCTYPE html>
<html>

<head>
    <title>Certificate</title>
</head>
<style>
  .main{
    text-align: center;
  top: 0;
  left: 0;
  margin: 10%;
  }

  .head{
 
  top: 0;
  left: 0;
  margin: 10%;
  text-align: center;

  }
</style>

<body style='background-color: lavender'>
    
    <div>
        <div class='head'>
            <!-- Logo -->
            <img src='assets/img/logo.svg' style='max-width: 2.5rem;'>
            <!-- Title -->
            <h2 class='mb-2'>
                TLI Compensation Plan
            </h2>
            <!-- Text -->
        </div>
        <div class='main'>
            <div>
              <p>This is to certify that</p>
              <h1>".$fname. " " . $lname.  "</h1>

              <p>sucessfully completed and received a passing grade in</p>
              <h1>Stage 1 of the TLI Compensation Plan</h1>
                <p>
                    We really appreciate your business and if there’s anything else we can do, please let us know! Also, should you need us to add VAT or anything else to this order, it’s super easy since this is a template, so just ask!
                </p>
            </div>
            <p>issued on</p>
            <h3>july 2, 2020</h3>
        </div> <!-- / .row -->
    </div>
</body>

</html>";


// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml($testing2);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream("Certificate", array("Attachment"=>0)); 



?>