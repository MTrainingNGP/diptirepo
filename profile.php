<?php
include('myconfig.php');

  print_r($_SESSION['reg_id']);
  $id=$_SESSION['reg_id'];
  
  if(!isset($_SESSION['reg_id']))
  {
    
     session_destroy();
     header('location:index.html');
    

  }

    $query= mysql_query("SELECT * FROM `tbl_registration` WHERE `reg_id` = '".$id."' ")or die(mysql_error());
    $arr = mysql_fetch_array($query);
    $num = mysql_numrows($query); //this will count the rows (if exists)
   
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
   <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!--link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet"-->

    <!-- Custom styles for this template -->
    <link href="css/theme.css" rel="stylesheet">
  
    <link rel="stylesheet" type="text/css" href="newcss.css">

  </style>
</head>
 <body>
 <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">Bright Career</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.html">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="logout.php" id="loginform"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
            <!-- <li><a href="registration.php" id="register"><span class="glyphicon glyphicon-log-in"></span>Registration</a></li> -->
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>






<div class="container">
  <div class="row">
  <form>
    <div class="col-sm-2">

      <img src="profile-icon.jpg"  alt="" class="img-rounded">
      <a href="" >Change profile picture</a>
    </div>
    <div class="col-sm-4">
      <blockquote>
        <p><?php echo $arr['first_name']." ".$arr['last_name'];?></p>
        
      </blockquote>
      <p>
        <i class="icon-envelope"></i> <?php echo $arr['email'];?> <br>
        <i class="icon-globe"></i> <?php echo $arr['nationality'];?><br>
        <i class="icon-gift"></i> <?php echo $arr['religion'];?>
      </p>
    </div>
 
   
   </form> 
  </div>
</div>
</body>
</html>
