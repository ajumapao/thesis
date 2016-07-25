<?php

session_start();
// unset tanan session sa mga logins and others
session_destroy();
// redirect sa homepage
header("location:index.php");

?>