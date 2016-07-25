
<?php

session_start();
include 'connection.php';

?>

<!DOCTYPE html>
<html lang="en" >
  

  <?php

  // include ang header contains mga head links
  include 'header.php';

  ?>


  <body>
    <!-- wrapper page -->
    <div class="wrapper">
      <!-- main-header -->
      <header class="main-header">


        <?php

        switch (isset($_SESSION['type']) ? $_SESSION['type'] : $_SESSION['type'] = '' )  
        {
          
          case 'student':
            include 'student.php';
            include 'student_mobile.php';
            break;
          case 'employer':
            include 'employer.php';
            include 'employer_mobile.php';
            break;
          default:
            include 'default_mobile.php';
            include 'default.php';
            break;
        }

        ?>
      


            <!-- body-content -->
      <div class="body-content clearfix" >

        <div class="block-section bg-color4">
          <div class="container">
            <div class="panel panel-md">
              <div class="panel-body">
                <div class="row">
                  <div class="col-md-12">
                   
                  <?php

                  echo isset($_SESSION['message']) ? $_SESSION['message'] : '';
                  unset($_SESSION['message']);

                  ?>
                   
                    <!-- form login -->
                    <form method="post" action="query/register_employer.php">
                      <div class="form-group">
                        <label>Company's Name</label>
                        <input type="text" name="emp_name" class="form-control" placeholder="Enter Employer's Name"  required="">
                      </div>
                      <div class="form-group">
                        <label>Contact Number</label>
                        <input type="text" name="emp_number" class="form-control" placeholder="Enter contact number"  required="">
                      </div>
                      <div class="form-group">
                        <label>Email Address</label>
                        <input type="email" name="emp_email" class="form-control" placeholder="Enter Employer's Email" required="">
                      </div>
                      <div class="form-group">
                        <label>Company type</label>
                        <select name="type" class="form-control" required="">
                          <option value="">Choose</option>
                          <option value="enabled">IT Enabled</option>
                          <option value="company">IT Company</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="emp_username" class="form-control" placeholder="Enter username" required="">
                      </div>
                      <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Enter Password" required="">
                      </div>
                      <div class="form-group">
                        <label>Re-type Password</label>
                        <input type="password" name="repassword" class="form-control" placeholder="Re-type Your Password" required="">
                      </div>
                      <div class="white-space-10"></div>
                      <div class="form-group no-margin">
                        <button class="btn btn-theme btn-lg btn-t-primary btn-block" type="submit" name="submit">Register</button>
                      </div>
                    </form><!-- form login -->

                  </div>
                </div>
              </div>
            </div>

            <div class="white-space-20"></div>
            <div class="text-center color-white">By creating an account, you agree to Intern.net <br/><a href="#" class="link-white"><strong>Terms of Service</strong></a> and consent to our <a href="#" class="link-white"><strong>Privacy Policy</strong></a>.</div>
          </div>
        </div>

        <div class="block-section bg-color2">
          <div class="container text-center">
            <div class="row">
              <div class="col-md-6 col-md-offset-3">
                <i class="fa fa-question fa-5x box-icon"></i>
                <h2 class=""> Why create an account?</h2>
                <hr/>
                <p><i class="fa fa-check"></i> Manage, create and delete your job alerts</p>
                <p><i class="fa fa-check"></i> Access your saved jobs and notes from any computer</p>

              </div>
            </div>
          </div>
        </div>

      </div><!--end body-content -->




        </div>
      </header><!-- end main-header -->


      


   
      <?php

      // are mga footer links and details nila
      include 'footer.php';

      ?>



    </div><!-- end wrapper page -->


    <?php

    // are mga java scripts nila
    include 'scripts.php';
    ?>

  </body>
</html>