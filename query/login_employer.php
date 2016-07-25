<?php
session_start();
include '../connection.php';

if (isset($_POST['submit'])) 
{
	$check = $dbConn->prepare("SELECT * FROM tbl_employer where username = '".$_POST['username']."' and password = '".$_POST['password']."' ");
	$check->execute();

	if ($check->rowCount() > 0 ) 
	{
		$row = $check->fetch(PDO::FETCH_ASSOC);
		
		if ($row['status'] == 'active') 
		{
		
			$_SESSION['user_id'] = $row['user_id'];
			$_SESSION['fullname'] =	$row['firstname'].' '.$row['lastname'];
			$_SESSION['course'] = $row['course'];
			header("location:../index.php");

		}
		else
		{
			$_SESSION['message'] = '<div class="alert alert-danger">
        <a class="close" data-dismiss="alert" href="#" aria-hidden="true">×</a>
        <strong>Error! </strong> Youre account is not yet approved or disable.
      </div>';
		header("location:../login_employer.php");
		
		}

		
	}
	else
	{
		$_SESSION['message'] = '<div class="alert alert-danger">
        <a class="close" data-dismiss="alert" href="#" aria-hidden="true">×</a>
        <strong>Error! </strong> Incorrect username or password.
      </div>';
		header("location:../login_employer.php");
	}

}


?>