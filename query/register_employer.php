<?php
session_start();
include '../connection.php';

if (isset($_POST['submit'])) 
{
	$check = $dbConn->prepare("SELECT * FROM tbl_employer where company_name = '".$_POST['emp_name']."' ");
	$check->execute();


	if ($_POST['password'] == $_POST['repassword']) 
	{
		if ($check->rowCount() > 0 ) 
		{
			$_SESSION['message'] = '<div class="alert alert-danger">
	        <a class="close" data-dismiss="alert" href="#" aria-hidden="true">×</a>
	        <strong>Error! </strong> Company name Already Exist.
	      </div>';
	      header("location:../register_employer.php");
		}
		else
		{
			$_SESSION['message'] = '<div class="alert alert-success">
	        <a class="close" data-dismiss="alert" href="#" aria-hidden="true">×</a>
	        <strong>Success! </strong> Account Created.
	      </div>';
			header("location:../login_employer.php");
		}	
	}
	else
	{
		$_SESSION['message'] = '<div class="alert alert-danger">
	        <a class="close" data-dismiss="alert" href="#" aria-hidden="true">×</a>
	        <strong>Error! </strong> Password doesnt match.
	      </div>';
	      header("location:../register_employer.php");
	}

	

}

?>