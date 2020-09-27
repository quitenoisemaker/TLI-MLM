<div class="container-fluid">

          <!-- Body -->
          <div class="header-body">
            <div class="row align-items-end">
              <div class="col">

                <!-- Pretitle -->
                <h6 class="header-pretitle">
                  Overview
                </h6>

                <!-- Title -->
                <h1 class="header-title">
                  Dashboard
                </h1>

              </div>
              <div class="col-auto">

                <!-- Button -->
                <a href="#!" class="btn btn-primary lift">
                  <?php if (isset($_SESSION['user_email'])) {
                  $user=$_SESSION['user_email'];

                $sql = "SELECT * FROM customers where email ='".$user."'";
            $result = $con->query($sql);
                while($row=$result->fetch_assoc()){
                $fname = $row['fname'];
              
                echo "Welcome <b>$fname</b>";
                  }
                  }
                ?>
                </a>

              </div>
            </div> <!-- / .row -->
          </div> <!-- / .header-body -->

        </div>