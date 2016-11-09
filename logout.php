<?php
SESSION_START();
// print_r($_SESSION['reg_id']);
// exit();
if (isset($_SESSION['reg_id']))
{
	# code...
	
	SESSION_UNSET('reg_id');
	SESSION_DESTROY();
	header("location:login.php");
}
else
{
	echo"<script>alert('alert');</script>";
}
?>