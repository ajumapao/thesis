  <!-- main navbar -->
        <nav class="navbar navbar-default main-navbar hidden-sm hidden-xs">
          <div class="container">
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

              <ul class="nav navbar-nav">
                <li class=""><a href="job_list.php"><strong>Find a Job</strong></a></li>
                <li class=""><a href="resume.php"><strong>Find Resumes</strong></a></li>
                <li  class=""><a href="job_post.php"><strong>Post a Job</strong></a></li>
              
              </ul>      
              <ul class="nav navbar-nav navbar-right">
                <li class="link-btn"><a data-toggle="modal" data-target="#myModal4"><span class="btn btn-theme btn-pill btn-xs btn-line">Login</span></a></li>
                <li class="link-btn"><a data-toggle="modal" data-target="#register"><span class="btn btn-theme  btn-pill btn-xs btn-line">Register</span></a></li>
              </ul>
            </div>
          </div>
        </nav><!-- end main navbar -->

        <!-- modal sa login -->

         <div class="modal fade" id="myModal4" >
            <div class="modal-dialog modal-md">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span >&times;</span></button>
                  <h4 class="modal-title" id="myModal4Label">Login as ?</h4>
                </div>
                <div class="modal-body">
                  <p>
                    <center>
                    <a href="login_student.php" class="btn btn-theme btn-line dark btn-lg">STUDENT</a>
                    <a href="login_employer.php" class="btn btn-theme btn-line dark btn-lg">EMPLOYER</a>
                    </center>
                  </p>
                </div>
               
              </div>
            </div>
          </div>

         <div class="modal fade" id="register" >
            <div class="modal-dialog modal-md">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span >&times;</span></button>
                  <h4 class="modal-title" id="myModal4Label">Register as ?</h4>
                </div>
                <div class="modal-body">
                  <p>
                    <center>
                    <a href="register_student.php" class="btn btn-theme btn-line dark btn-lg">STUDENT</a>
                    <a href="register_employer.php" class="btn btn-theme btn-line dark btn-lg">EMPLOYER</a>
                    </center>
                  </p>
                </div>
               
              </div>
            </div>
          </div>