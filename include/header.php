   <nav class="navbar navbar-vertical fixed-left navbar-expand-md " id="sidebar">
      <div class="container-fluid">

        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidebarCollapse" aria-controls="sidebarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Brand -->
        <a class="navbar-brand" href="index">
          <!-- <img src="assets/img/logo.svg" class="navbar-brand-img 
          mx-auto" alt="..."> -->
          <h4 class="text-primary display-4">MENTAPPS</h4>
        </a>

        <!-- User (xs) -->
        <div class="navbar-user d-md-none">

          <!-- Dropdown -->
          <div class="dropdown">

            <!-- Toggle -->
            <a href="#" id="sidebarIcon" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="avatar avatar-sm avatar-online">
                <!-- showing the profile pic -->
                    <?php if (isset($_SESSION['user_email'])) {
                    $user=$_SESSION['user_email'];
                      $sql = "SELECT * FROM customers where email ='".$user."'";
                            $result = $con->query($sql);
                        if($result->num_rows>0){
                          while($row=$result->fetch_assoc()){
                            $image=$row["img"];
                            echo "<img src='img/$image' class='avatar-img rounded-circle' alt=''>";
                             }
                      }
                    }
                  ?>
              </div>
            </a>

            <!-- Menu -->
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="sidebarIcon">
              
              
              <hr class="dropdown-divider">
              <a href="../Logout" class="dropdown-item">Logout</a>
            </div>

          </div>

        </div>

        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidebarCollapse">

          <!-- Form -->
          <form class="mt-4 mb-3 d-md-none">
            <div class="input-group input-group-rounded input-group-merge">
              <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search" aria-label="Search">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <span class="fe fe-search"></span>
                </div>
              </div>
            </div>
          </form>

          <!-- Navigation -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="index" >
                <i class="fe fe-home"></i> Dashboards
              </a>
              
            </li>

             <li class="nav-item">
              <a class="nav-link" href="#sidebarPages2" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarPages">
                <i class="fe fe-user"></i> My network
              </a>

              <div class="collapse " id="sidebarPages2">
                <ul class="nav nav-sm flex-column">
                 
                
                  <li class="nav-item">
                    <a href="" class="nav-link ">
                      My matix
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="" class="nav-link ">
                      My upline
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="" class="nav-link ">
                      Stage 1
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="" class="nav-link ">
                      Stage 2
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="" class="nav-link ">
                      Stage 3
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="" class="nav-link ">
                      Stage 4
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="" class="nav-link ">
                      Stage 5
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="" class="nav-link ">
                      Stage 6
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="" class="nav-link ">
                      Stage 7
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="" class="nav-link ">
                      Stage 8
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="" class="nav-link ">
                      Stage 9
                    </a>
                  </li>
                  
                </ul>
              </div>
              
            </li>
            <li class="nav-item">
              <a class="nav-link" href="withdrawal" >
                <i class="fe fe-grid"></i> Fund withdrawal
              </a>
              
            </li>
            <li class="nav-item">
              <a class="nav-link" href="transfer" >
                <i class="fe fe-git-branch"></i> Fund transfer
              </a>
              
            </li>

            <li class="nav-item">
              <a class="nav-link" href="wallet" >
                <i class="fe fe-briefcase"></i> My wallet
              </a>
              
            </li>
        
          
            <li class="nav-item">
              <a class="nav-link" href="videos" >
                <i class="fe fe-video"></i> Training vidoes
              </a>
              
            </li>
             <li class="nav-item">
            
              <a class="nav-link" href="#sidebarPages54" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarPages">
                <i class="fe fe-inbox"></i> Support ticket
              </a>
              <div class="collapse " id="sidebarPages54">
                <ul class="nav nav-sm flex-column">
                 
                
                  <li class="nav-item">
                    <a href="ticket" class="nav-link ">
                      Ticket
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="open_ticket" class="nav-link ">
                      Open ticket
                    </a>
                  </li>
                </ul>
              </div>
              
            </li>
                <li class="nav-item">
              <a class="nav-link" href="#sidebarPages" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarPages">
                <i class="fe fe-settings"></i> Settings
              </a>
              <div class="collapse " id="sidebarPages">
                <ul class="nav nav-sm flex-column">
                 
                
                  <li class="nav-item">
                    <a href="general" class="nav-link ">
                      Edit profile
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="billing" class="nav-link ">
                      Bank
                    </a>
                  </li>
                  <!-- <li class="nav-item">
                    <a href="members" class="nav-link ">
                      Members
                    </a>
                  </li> -->
                  <li class="nav-item">
                    <a href="security" class="nav-link ">
                      Change password
                    </a>
                  </li>
                </ul>
              </div>
            </li>
          
          </ul>

          <!-- Divider -->
          <hr class="navbar-divider my-3">

          <!-- Heading -->
          

          <!-- Navigation -->
          <ul class="navbar-nav mb-md-4">
            
           
            <!-- <li class="nav-item">
              <a class="nav-link " href="docs/changelog.html">
                <i class="fe fe-git-branch"></i> Changelog <span class="badge badge-primary ml-auto">v1.6.0</span>
              </a>
            </li> -->
          </ul>

          <!-- Push content down -->
          <div class="mt-auto"></div>

          
         
          

          
          <!-- User (md) -->
          <div class="navbar-user d-none d-md-flex" id="sidebarUser">

            <!-- Icon -->
            <a href="#sidebarModalActivity" class="navbar-user-link" data-toggle="modal">
              <!-- <span class="icon">
                <i class="fe fe-bell"></i>
              </span> -->
            </a>

            <!-- Dropup -->
            <div class="dropup">

              <!-- Toggle -->
              <a href="#" id="sidebarIconCopy" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="avatar avatar-sm avatar-online">                 
                  <!-- showing the profile pic -->
                    <?php if (isset($_SESSION['user_email'])) {
                    $user=$_SESSION['user_email'];
                      $sql = "SELECT * FROM customers where email ='".$user."'";
                            $result = $con->query($sql);
                        if($result->num_rows>0){
                          while($row=$result->fetch_assoc()){
                            $image=$row["img"];
                            echo "<img src='img/$image' class='avatar-img rounded-circle' alt=''>";
                             }
                      }
                    }
                  ?>
                </div>
              </a>

              <!-- Menu -->
              <div class="dropdown-menu" aria-labelledby="sidebarIconCopy">
                
                
                <hr class="dropdown-divider">
                <a href="../logout" class="dropdown-item">Logout</a>
              </div>

            </div>

            <!-- Icon -->
            <a href="#sidebarModalSearch" class="navbar-user-link" data-toggle="modal">
              <span class="icon">
                <i class="fe fe-search"></i>
              </span>
            </a>

          </div>
          

        </div> <!-- / .navbar-collapse -->

      </div>
    </nav>