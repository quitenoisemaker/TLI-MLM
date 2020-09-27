<!-- Modal -->
<div class="modal fade" id="modal-activator" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <a href="logout" class="btn btn-danger btn-sm">logout</a>
            </div>
            <div class="modal-body">
                <div class="text-center bank-hide">
                    <img src="assets/img/illustrations/happiness.svg" width="400" alt="..." class="img-fluid">
                </div>
                <div class="jumbotron bank-show" hidden>
                    <h1 class="display-4">Bank Payment!</h1>
                    <p class="lead">To activate your account, kindly make payment into the account provided below and upload proof of payment for proper confirmation.</p>
                    <hr class="my-1">
                    <p>
                        <b>Bank Name</b> : Guaranty Trust Bank <br />
                        <b>Account Name</b> : Mentapps Solutions Limited <br />
                        <b>Account Number</b> : 0488849842 <br />
                    </p>
                    <hr class="my-2">
                  
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="exampleFormControlFile1">
                                <h1 class="display-6">Upload proof of payment</h1>
                            </label>
                            <input type="file" name="myfile" class="form-control-file" id="exampleFormControlFile1">
                            <small class="text-danger">
                        *file must be in jpg/jpeg and must be 5mb or less.
                          </small>
                        </div>
                        <button type="submit" class="btn btn-primary mb-2 btn-sm" name="upload">Submit</button>
                    </form>
                   
                    <?php

                    if (isset($_POST['upload'])) {
      
          @$name = $_FILES['myfile'] ['name'];
          @$tmp_name = $_FILES['myfile'] ['tmp_name'];
          $extension = substr($name, strpos($name, '.') +1 );
          @$type = $_FILES['myfile'] ['type'];
          @$size = $_FILES['myfile'] ['size'];
          $max_size = 5000000;
      if (!empty($name)) {
        if (($extension=='jpg' || $extension =='jpeg') && ($type == 'image/jpeg' || $type == 'image/jpg') && ($size <= $max_size)) {
        
        $location='admin/img3/';    
        if (move_uploaded_file($tmp_name, $location.$name )){

          $user=$_SESSION['user_email'];
          $get_user=mysqli_query($con, "SELECT * FROM `customers` WHERE email='$_SESSION[user_email]' ");
          $row_user=mysqli_fetch_array($get_user); 
          $sql = mysqli_query($con, "INSERT INTO `payment_proof`(`id`, `user_id`, `img`, `date_created`) VALUES (NULL,'$row_user[id]','$name','$date')");

          if($sql){
          echo "<script>swal({
        
                    title: 'Uploaded successfully',
                    text: 'Waiting for confirmation from administrator',
                    icon: 'success',
                    button: 'Ok!',
                  })</script>";

                  // header('location:general');
          
          // echo "<script>window.open('user_account.php','_self')</script>";
        }else{
          echo "<script>swal({
        
                    title: 'Opps',
                    text: 'Error uploading file',
                    icon: 'error',
                    button: 'Ok!',
                  })</script>";
        }
          
        } 

    }else {
      
         echo "<script>swal({
        
                    title: 'Opps! File not supported',
                    text: 'file must be jpg/jpeg and must be 5mb or less',
                    icon: 'warning',
                    button: 'Ok!',
                  })</script>";
    }
      }else{

         echo "<script>swal({
        
                    title: 'Opps! Empty field',
                    text: 'Please choose a file',
                    icon: 'warning',
                    button: 'Ok!',
                  })</script>";

      }
    } 
                    ?>
                </div>
                <div class="">
                    <p>Thanks for registering with us. Please make a deposit of <span class="text-danger"><b>&#x20A6 10,000</b></span> using any of the method below to access your account</p>
                    <form id="reg-amount" method="POST">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="payMethod" id="exampleRadios1" value="online">
                            <label class="form-check-label" for="exampleRadios1">
                                Online payment
                            </label>
                            <img src="img2/20.jpg" height="25"><img src="img2/18.jpg" height="25">
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="payMethod" id="exampleRadios2" value="bank">
                            <label class="form-check-label" for="exampleRadios2">
                                Bank transfer
                            </label>
                        </div>
                        <button name="submit" class="btn btn-primary btn-sm float-right">Proceed</button>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
        </div>
    </div>
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
<!-- Theme JS -->
<script src="https://js.paystack.co/v1/inline.js"></script>
<script src="assets/js/theme.min.js"></script>
<script src="assets/js/dashkit.min.js"></script>
<script src="assets/js/data.js"></script>
<script src="assets/sweetalert/sweetalert2.all.min.js"></script>
<?php
   if (isset($_SESSION['user_email'])) {
                    $user=$_SESSION['user_email'];
                      $sql = "SELECT * FROM customers where email ='".$user."'";
                            $result = $con->query($sql);
                        if($result->num_rows>0){
                          while($row=$result->fetch_assoc()){

                            $fname= $row['fname'];
                            $lname = $row['lname'];
                            $fone= $row["fone"]; 
                        ?>
<?php if($row['status']=="" || $row['status']==0){ ?>
<script type="text/javascript">
$(document).find('#modal-activator').modal('show');
</script>
<?php }else {?>
<script type="text/javascript">
$(document).find('#modal-activator').modal('hide');
</script>
<?php } ?>
<?php } ?>
<?php } ?>
<?php } ?>
<script>
$(document).on('submit', '#reg-amount', function(e) {
    e.preventDefault();
    let mee = $(this);

    if (mee.find('[name=payMethod]').is(":checked")) {
        if (mee.find('[name=payMethod]:checked').val() == 'online') {
            $(document).find('.bank-hide').removeAttr('hidden');
            $(document).find('.bank-show').attr('hidden', true);
            var handler = PaystackPop.setup({
                key: 'pk_test_8da0196b3c9020e43f5e7435212b68beeb0a5858', // Replace with your public key
                email: '<?php echo $user; ?>',
                amount: 10000 * 100,
                currency: "NGN",
                firstname: '<?php echo $fname; ?>',
                lastname: '<?php echo $lname; ?>',
                ref: '' + Math.floor((Math.random() * 1000000000) + 1), // generates a 
                metadata: {
                    custom_fields: [{
                        display_name: "<?php echo $fname; ?>",
                        variable_name: "<?php echo $lname; ?>",
                        value: "<?php echo $fone; ?>"

                    }]
                },
                callback: function(response) {

                    Swal.fire({
                        title: "Please Wait",
                        text: "Processing your payments",
                        AllowEscapeKey: false,
                        onOpen: () => {
                            swal.showLoading();
                        }
                    })
                    $.ajax({
                        url: './config/data?action=fund_wallet_reg',
                        type: 'POST',
                        data: { ref: response.reference },
                        cache: false,
                        success: function(data) {
                            // alert(data)
                            if (data == true) {
                                Swal.fire({
                                    type: 'success',
                                    title: "Payment successful !",
                                    text: "Your account has been activated, kindly refresh page to gain access",
                                    AllowEscapeKey: false,
                                    AllowOutsideClick: false,
                                    AllowConfirmButton: true
                                })
                                // let old_bal= Number($(document).find('.fund-balance').text().replace(",",""));
                                // $(document).find('.fund-balance').text(Number(old_bal+Number(pay_amount)).toLocaleString());
                                // mee.find('[name=amount]').val('');
                            }
                        },
                        error: function(er) {
                            console.log(er)
                        }
                    })
                },
                // On the redirected page, you can call Paystack's verify endpoint.,
                onClose: function() {
                    alert('Window closed.');
                }
            });
            handler.openIframe();
        } else {
            $(document).find('.bank-show').removeAttr('hidden');
            $(document).find('.bank-hide').attr('hidden', true);
            $(document).find('.bank').attr('hidden', true);
        }

    } else {
        swal.fire({
            text: "Please choose a payment method",
            title: "Payment Method Required",
            AllowEscapeKey: false,
            type: "warning"
        })
    }
})
</script>