<div class="container-fluid">

          <!-- Body -->
          <div class="header-body">
            <div class="row align-items-end">
              <div class="col">

                <!-- Pretitle -->
                <h6 class="header-pretitle" style="color: #5B2C6F">
                  Overview
                </h6>

                <!-- Title -->
                <h1 class="header-title" style="color: #5B2C6F">
                  Dashboard
                </h1>

              </div>
              <div class="col-auto text-dark">

                
                  <?php if (isset($_SESSION['user_email'])) {
                  $user=$_SESSION['user_email'];

                $sql = "SELECT * FROM customers where email ='".$user."'";
            $result = $con->query($sql);
                while($row=$result->fetch_assoc()){
                $fname = $row['fname'];
              
                echo "Hi! <b>$fname</b>";
                  }
                  }
                ?>
                

              </div>
            </div> <!-- / .row -->
          </div> <!-- / .header-body -->

        </div>