
        <!-- mobile navbar -->
        <div class="container">
          <nav class="mobile-nav hidden-md hidden-lg">
            <a href="#" class="btn-nav-toogle first">
              <span class="bars"></span>
              Menu
            </a>
            <div class="mobile-nav-block">
              <h4>Navigation</h4>
              <a href="#" class="btn-nav-toogle">
                <span class="barsclose"></span>
                Close
              </a>      

              <ul class="nav navbar-nav">
                <li class=""><a href="job_list.html"><strong>Find a Job</strong></a></li>
                <li class=""><a href="resume_list.html"><strong>Find Resumes</strong></a></li>
                <li  class=""><a href="job_post_1.html"><strong>Post a Job</strong></a></li>
                <li><a data-toggle="modal" data-target="#myModal4"><span class="btn btn-theme btn-line dark">Login</span></a></li>
                <li><a data-toggle="modal" data-target="#register"><span class="btn btn-theme btn-line dark">Register</span></a></li>
              
               
              </ul>    
            </div>
          </nav>
        </div><!-- mobile navbar -->

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