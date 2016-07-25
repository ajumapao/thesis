
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
      


    
      </header><!-- end main-header -->


     <!-- body-content -->
      <div class="body-content clearfix" >

        <div class="block-section bg-color4">
          <div class="container">
            <div class="panel panel-md">
              <div class="panel-body">
                <div class="row">
                  <div class="col-md-12">
                    <!-- buttons top -->
                      <div class="alert alert-info">
        <a class="close" data-dismiss="alert" href="#" aria-hidden="true">×</a>
        <strong>Login as </strong> Employer.
      </div>

      <?php 

      echo isset($_SESSION['message']) ? $_SESSION['message'] : '' ;
      unset($_SESSION['message']);

      ?>

                    <!-- form login -->
                    <form method="post" action="query/login_employer.php">
                      <div class="form-group">
                        <label>Username</label>
                        <input type="username" name="username" class="form-control" placeholder="Your Username" required>
                      </div>
                      <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Your Password" required>
                      </div>
                     
                      <div class="form-group no-margin">
                        <button class="btn btn-theme btn-lg btn-t-primary btn-block" name="submit" type="submit">Log In</button>
                      </div>
                    </form><!-- form login -->

                  </div>
                </div>
              </div>
            </div>

            <div class="white-space-20"></div>
            <div class="text-center color-white">Not a member? &nbsp; <a href="register_student.php" class="link-white"><strong>Create an account free</strong></a></div>
          </div>
        </div>

            
      </div><!--end body-content -->


   
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