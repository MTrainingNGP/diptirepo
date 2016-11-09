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
          <a class="navbar-brand" href="#">Bright Career</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.html">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="login.php" id="loginform"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            <li><a href="registration.php" id="register"><span class="glyphicon glyphicon-log-in"></span>Registration</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

<!-- multistep form -->
<div class="container" id="demo">
<div class="row">

<form id="msform" name="register" method="post">
	<!-- progressbar -->
	<ul id="progressbar">
		<li class="active">Account Setup</li>
		<li>Personal Details</li>
		<li>Educational Details</li>
		<li>Contact Details</li>
		<li>Confirm</li>
	</ul>
	<!-- fieldsets -->
	<fieldset>
		<h2 class="fs-title">Create your account</h2>
		<h3 class="fs-subtitle">This is step 1</h3>
		<input type="text" name="email" placeholder=" Email" id="ema" onblur="Email();" required="required" />
		<span id="erremail" class="help-block" style="color:red;"></span>

		<input type="password" name="password" placeholder=" Password" id="passwd" onblur="return validatepassword();" required="required">
         <span id="errpasswd" class="help-block" style="color:red;"></span>

		<input type="password" name="rpassword" placeholder=" Confirm Password" id="repasswd" onblur =" return validateretypassword();" required="required">
        <span id="errpassword" class="help-block" style="color:red;"></span>

		<input type="button" name="next" id="nex" class="next action-button" value="Next" />
	</fieldset>

	<fieldset>
		<h2 class="fs-title">Personal Details</h2>
		<!-- <h3 class="fs-subtitle">Please fill your personal details</h3> -->
		<input type="text" name="name" class="form-control" id="firstname" placeholder=" First Name" onblur ="validateName()" required="required">
		<span id="errfname" class="help-block" style="color:red;"></span>

		<input type="text" name="lname" class="form-control" id="lastname" placeholder=" Last Name" onblur="validateLName()" required="required">
		<span id="errlname" class="help-block" style="color: red;"></span>

		<input type="text" name="fname" class="form-control" id="fatname" placeholder=" Enter Father's Name" onblur="validateFName();" required="required">
		<span id="errfatname" class="help-block" style="color: red;"></span>

		<input type="text" name="mname" class="form-control" id="motname" placeholder=" Enter Mother's Name" onblur="validateMName();" required="required">
        <span id="errmotname" class="help-block" style="color: red;"></span>

        <div class="col-xs-12" id="msg" onchange="send();">
        <label for="gender" class="col-xs-2">Gender</label>
        <div class="col-sm-5">
        <input type="radio" name="gender" class="radio" id="gender1" value="male" onblur="reset_msg();">Male </div>
         <div class="col-sm-5">  
         <input type="radio" name="gender" class="radio" id="gender2" value="female" onblur="reset_msg();">Female</div>
         <span style="color:red;" id="gen"></span>
         
         </div>
         
        <input type="button" name="previous" class="previous action-button" value="Previous" />
		<input type="button" name="next" class="next action-button" value="Next" />
	</fieldset>


	<fieldset>
		<h2 class="fs-title">Education Details</h2>
		<h3 class="fs-subtitle">please fill following details</h3>

		<input type="text" name="education" class="form-control" id="ed" placeholder="Education/Degree" required="required">
        <span id="erredu" class="Please Education degree" style="color:red;"></span>
        
		<input type="text" name="yearofpassing" id="yop" maxlength="10" autocomplete="off" placeholder=" year of passing" required="required">
       
		<input type="text" name="board" class="form-control" id="bu" placeholder="Board/University">
		<input type="text" name="datepicker" class="form-control datepicker" id="date" placeholder="date of birth: yy/mm/dd">
		<span id="errdate" class="help-block" style="color:red;"></span>

		<input type="text" name="Nationality" class="form-control" id="nation" placeholder="Nationality" onblur="nat_tion();" required="required">
		<span id="errnat" class="help-block" style="color:red;"></span>

		<input type="text" name="religion" class="form-control" id="Reli" placeholder="Religion" onblur="re_ligion();" required="required">
        <span id="errreli" class="help-block" style="color:red;"></span>

		<input type="button" name="previous" class="previous action-button" value="Previous" />
		<input type="button" name="next" class="next action-button" value="Next" />
	</fieldset>

	<fieldset>
		<h2 class="fs-title">Contact Details</h2>
		<h3 class="fs-subtitle"></h3>
		<div class="col-sm-12">
		<select name="country" class="countries" id="countryId" required="required">
		<option value="">Select Country</option>
		</select>
		</div>
		<div class="col-sm-6">
		<select name="state" class="states" id="stateId" required="required">
		<option value="">Select State</option>
		</select>
		</div>
		<div class="col-sm-6">
		<select name="city" class="cities" id="cityId" required="required">
		<option value="">Select City</option>
		</select>
        </div>
		<div class="col-sm-12">
		<input type="text" name="district" class="form-control" id="dist" placeholder="district" required="required">
		<span id="errdis" class="help-block" style="color:red;"></span>
		</div>
        
         <div class="col-sm-12">
		<input type="text" name="pincode" class="form-control" id="pin" placeholder="pincode" required="required" onblur="" maxlength="6">
		<span id="errpin" class="help-block" style="color:red;"></span>
		</div>

		<div class="col-sm-6">
		<input type="text" class="form-control" required="required" placeholder='mobile: +91' disabled="disabled" required="required">
		</div>
		<div class="col-sm-6">
		<input type="text" name="mobile" class="form-control" id="mob" onblur="return validateMobile();" required="required" placeholder="9999999999" maxlength="10" required="required">
		<span id="errmobile" class="Please enter mobile" style="color:red;"></span>
		</div>
       <div class="col-sm-7">
       <input type="text" name="landline" class="form-control" id="line" placeholder='landline 9999999'>
       </div>

		<div class="form-group col-sm-12" onchange="return forpd();" >
		<label for="physical disabled" class="col-sm-2">Physical Disability:</label>
		<div class="col-sm-5" id="input">
		<input type="radio" name="pd" id="y" value="yess">Yes </div>
	
		<div class="col-sm-5">
		<input type="radio" name="pd" id="n" value="noo">No</div>
	    </div>
		<label class="col-sm-10 control-label"></label>
		<input type="text" name="text1" id="yesfortext" placeholder="if yes, mention here" disabled>
		
		


		<input type="button" name="previous" class="previous action-button" value="Previous" />
		<input type="button" name="next" class="next action-button" value="Next" />
	</fieldset>


	<fieldset>
		<h2 class="fs-title">Confirm</h2>
		<h3 class="fs-subtitle">Almost Done!</h3>
		<div class="row">
		<div class="col-xs-2"> <label for="captcha" cl >Captcha:</label>
		</div>
		<div class="col-xs-6">
		<div class="g-recaptcha" data-sitekey="6Lf8SQoUAAAAANSttoxDNmJCvMGgkCPT9DUgltOm"></div>
		<span id="captcha" style="color:red"></span>
		</div>
		</div>
        <div class="row">
		<div class="col-xs-2">
		<input type="checkbox" name="checkbox" value="check" id="agree" required="required">
		</div>
		<div class="col-xs-8">I accept Terms,Conditions and privacy policy</div>
		</div>
  		
		<input type="button" name="previous" class="previous action-button" value="Previous" />
		<input type="submit" name="submit" id="idsubmit" class="submit action-button" onclick="done();" value="Submit" />
		<input type="button" name="cancel" value="cancel" />
	</fieldset>
</form>
</div>
</div>
</div>

</body>
</html>
<!-- jQuery -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
 
<!-- jQuery -->
<script src="http://thecodeplayer.com/uploads/js/jquery-1.9.1.min.js" type="text/javascript"></script>
<!-- jQuery easing plugin -->
<script src="http://thecodeplayer.com/uploads/js/jquery.easing.min.js" type="text/javascript"></script>
 <script src='https://www.google.com/recaptcha/api.js'></script>
<script type="text/javascript" src="newjs.js"></script>
  <script type="text/javascript" src="js/jsplugins.js"></script>
  <script type="text/javascript" src="js/jsplugin1.js"></script>
  <script type="text/javascript" src="regi.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://iamrohit.in/lab/js/location.js"></script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
      <script src="//code.jquery.com/jquery-1.10.2.js"></script>
      <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
      
 <script type="text/javascript">
 	

  $(function() {
    $( "#date" ).datepicker({
      defaultDate: "",
      changeMonth: true,
    dateFormat: 'yy/mm/dd',
      onClose: function( selectedDate ) {
        $( "#date" ).datepicker( "option", "Date", selectedDate );
      }
    });
   
  });
  </script>
  <script type="text/javascript">
  

  </script>
 <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src=" http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.17/jquery-ui.min.js">
</script>
        
<script type="text/javascript">
     $(document).ready(function(){
          $("#idsubmit").click(function(){
 
                var first_name=$("#firstname").val();
                var last_name=$("#lastname").val();

                var father_name=$("#fatname").val();
                var mother_name=$("#motname").val();

                var dob=$("#date").val();
                var gender=$('[name = "gender" ]:checked').val();

                var country=$("#countryId").val();
                var state=$("#stateId").val();

                var city=$("#cityId").val();
                var district=$("#dist").val();

                var pincode=$("#pin").val();
                var nationality=$("#nation").val();

                var religion=$("#Reli").val();
                var phone_no=$("#line").val();

                var mobile_no=$("#mob").val();
                var email=$("#ema").val();

                var education=$("#edu").val();
                var year_of_passing=$("#yop").val();

                var board_university=$("#bu").val();
                var phy_attr=$('[name = "pd"]:checked').val();

                var phy_issue=$("#yesfortext").val();
                var password=$("#passwd").val();
 
                $.ajax({
                      type:"post",
                      url:"myjoin.php",
                      data:"first_name="+first_name+
                           "&last_name="+last_name+

                           "&father_name="+father_name+
                           "&mother_name="+mother_name+
                           
                           "&dob="+dob+
                           "&gender="+gender+
                           
                           "&country="+country+
                           "&state="+state+
                           
                           "&city="+city+
                           "&district="+district+

                           "&pincode="+pincode+
                           "&nationality="+nationality+
                           
                           "&religion="+religion+
                           "&phone_no="+phone_no+
                           
                           "&mobile_no="+mobile_no+
                           "&email="+email+
                           
                           "&education="+education+
                           "&year_of_passing="+year_of_passing+
                           
                           "&board_university="+board_university+
                           "&phy_attr="+phy_attr+
                           
                           "&phy_issue="+phy_issue+
                           "&password="+password
                           ,
                      success:function(data){
                                 $("#demo").html(data);
                              }
 
                });
 
          });
      });
       </script>
   
  </body>
</html>

