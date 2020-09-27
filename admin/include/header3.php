  <!-- Header -->
                    <div class="header mt-md-5">
                        <div class="header-body">
                            <div class="row align-items-center">
                                <div class="col">
                                    <!-- Pretitle -->
                                    <h6 class="header-pretitle">
                                        Admin dashboard
                                    </h6>
                                    <!-- Title -->
                                    
                                </div>
                                <div class="col-auto text-dark">
                                
                                        <?php if (isset($_SESSION['email'])) {
                  $user=$_SESSION['email'];

                $sql = "SELECT * FROM administrator where email ='".$user."'";
            $result = $con->query($sql);
                while($row=$result->fetch_assoc()){
                $fname = $row['fname'];
              
                echo "Hi! <b>$fname</b>";
                  }
                  }
                ?>
                                   
                                </div>
                            </div> <!-- / .row -->
                            <div class="row align-items-center">
                                <div class="col">
                                    <!-- Nav -->
                                    <ul class="nav nav-tabs nav-overflow header-tabs">
                                        <li class="nav-item">
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>