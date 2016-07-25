 <div class="mainbar">

  <div class="container">

    <button type="button" class="btn mainbar-toggle" data-toggle="collapse" data-target=".mainbar-collapse">
      <i class="fa fa-bars"></i>
    </button>

    <div class="mainbar-collapse collapse">

      <ul class="nav navbar-nav mainbar-nav">

        <li class="<?php isset($_SESSION['title']) ? '' : ''; ?>">
          <a href="index.php">
            <i class="fa fa-dashboard"></i>
            Dashboard
          </a>
        </li>
         <li>
          <a href="interns.php">
            <i class="fa fa-user"></i>
            Interns
          </a>
        </li>
         <li>
          <a href="jobs.php">
            <i class="fa fa-files-o"></i>
            Job Posted
          </a>
        </li>
           <li>
          <a href="reports.php">
            <i class="fa fa-file-o"></i>
            Reports
          </a>
        </li>
    
        

        <!-- <li class="dropdown ">
          <a href="#contact" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">
            <i class="fa fa-wrench"></i>
            Settings
            <span class="caret"></span>
          </a>

          <ul class="dropdown-menu" role="menu">
            <li>
              <a href="./page-notifications.html">
              <i class="fa fa-bell"></i> 
              &nbsp;&nbsp;Notifications
              </a>
            </li>     

            <li>
              <a href="./ui-icons.html">
              <i class="fa fa-smile-o"></i> 
              &nbsp;&nbsp;Font Icons
              </a>
            </li> 

            <li class="dropdown-submenu">
              <a tabindex="-1" href="#">
              <i class="fa fa-ban"></i> 
              &nbsp;&nbsp;Error Pages
              </a>

              <ul class="dropdown-menu">
                <li>
                  <a href="./page-404.html">
                  <i class="fa fa-ban"></i> 
                  &nbsp;&nbsp;404 Error
                  </a>
                </li>

                <li>
                  <a href="./page-500.html">
                  <i class="fa fa-ban"></i> 
                  &nbsp;&nbsp;500 Error
                  </a>
                </li>
              </ul>
            </li>

            <li class="dropdown-submenu">

              <a tabindex="-1" href="#">
              <i class="fa fa-lock"></i> 
              &nbsp;&nbsp;Login Pages
              </a>

              <ul class="dropdown-menu">
                <li>
                  <a href="./account-login.html">
                  <i class="fa fa-unlock"></i> 
                  &nbsp;&nbsp;Login
                  </a>
                </li>

                <li>
                  <a href="./account-login-social.html">
                  <i class="fa fa-unlock"></i> 
                  &nbsp;&nbsp;Login Social
                  </a>
                </li>

                <li>
                  <a href="./account-signup.html">
                  <i class="fa fa-star"></i> 
                  &nbsp;&nbsp;Signup
                  </a>
                  </li>

                <li>
                  <a href="./account-forgot.html">
                  <i class="fa fa-envelope"></i> 
                  &nbsp;&nbsp;Forgot Password
                  </a>
                </li>
              </ul>
            </li> 

            <li class="divider"></li>

            <li>
              <a href="./page-blank.html">
              <i class="fa fa-square-o"></i> 
              &nbsp;&nbsp;Blank Page
              </a>
            </li> 

          </ul>
        </li> -->

      </ul>

    </div> <!-- /.navbar-collapse -->   

  </div> <!-- /.container --> 

</div> <!-- /.mainbar -->
