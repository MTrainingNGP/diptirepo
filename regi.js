var errorflag;


function validateName()
  {
     // e.preventDefault();
        var letters = /^[A-Za-z]+$/;
        var nam = document.forms["register"]["name"].value;
        console.log(nam);
        document.getElementById("errfname").innerHTML = "";
        if (nam == null || nam == "")
         {
             console.log(nam);
             var d = document.getElementById("firstname");
                d.className += " has-error";
                document.getElementById("errfname").innerHTML = "Please Enter Name";
         }
         else if (nam.match(letters))
        {
            var el = document.getElementById("firstname");

            el.classList.remove("has-error");

            return true;
        }
        else
        {
            var d = document.getElementById("firstname");
                d.className += " has-error";
            document.getElementById("errfname").innerHTML = "invalid name.";
        }
    }
//function for last name
    function validateLName()
    {
        var letters = /^[A-Za-z]+$/;
        var nam = document.forms["register"]["lname"].value;
        console.log(nam);
        document.getElementById("errlname").innerHTML = "";
        if (nam == null || nam == "")
         {
             console.log(nam);
             var d = document.getElementById("lastname");
                d.className += " has-error";
                document.getElementById("errlname").innerHTML = "Please Enter Name";
         }
         else if (nam.match(letters))
        {
            var el = document.getElementById("lastname");

            el.classList.remove("has-error");

            return true;
        }
        else
        {
            var d = document.getElementById("lastname");
                d.className += " has-error";
            document.getElementById("errlname").innerHTML = "invalid name.";
        }
    }

//function for father's name
function validateFName()
    {
        var letters = /^[A-Za-z]+$/;
        var nam = document.forms["register"]["fname"].value;
        console.log(nam);
        document.getElementById("errfatname").innerHTML = "";
        if (nam == null || nam == "")
         {
             console.log(nam);
             var d = document.getElementById("fatname");
                d.className += " has-error";
                document.getElementById("errfatname").innerHTML = "Please Enter Name";
         }
         else if (nam.match(letters))
        {
            var el = document.getElementById("fatname");

            el.classList.remove("has-error");

            return true;
        }
        else
        {
            var d = document.getElementById("fatname");
                d.className += " has-error";
            document.getElementById("errfatname").innerHTML = "invalid name.";
        }
    }

//function for mother's name
function validateMName()
    {
        var letters = /^[A-Za-z]+$/;
        var nam = document.forms["register"]["mname"].value;
        console.log(nam);
        document.getElementById("errmotname").innerHTML = "";
        if (nam == null || nam == "")
         {
             console.log(nam);
             var d = document.getElementById("motname");
                d.className += " has-error";
                document.getElementById("errmotname").innerHTML = "Please Enter Name";
         }
         else if (nam.match(letters))
        {
            var el = document.getElementById("motname");

            el.classList.remove("has-error");

            return true;
        }
        else
        {
            var d = document.getElementById("motname");
                d.className += " has-error";
            document.getElementById("errmotname").innerHTML = "invalid name.";
        }
    }


 function Email()
{
   document.getElementById("erremail").innerHTML="";
   var emai= document.getElementById('ema').value;
   // console.log(emai);
     atpos = emai.indexOf("@");
     dotpos = emai.lastIndexOf(".");
  if (emai=='') {
        // document.getElementById("erremail").innerHTML="email cannot be null";
             var d = document.getElementById("ema");
             d.className += " has-error";
            document.getElementById("erremail").innerHTML = "Please Enter email address";
        // return false;
    }
                  
  else if (atpos < 1 || ( dotpos - atpos < 2 )) 
         {
            // var em = document.getElementById("mob");
            //         em.className += " has-error";
                    document.getElementById("erremail").innerHTML = "invalid email address.";
            
            return false;
         }
         return( true );
}



function validateMobile()
    {
                document.getElementById("errmobile").innerHTML = "";
                var m_pattern = /^\d{10}$/;
                var number = document.forms["register"]["mobile"].value;
                if(number == "" || number == null)
                    {
                        var m = document.getElementById("mob");
                        m.className += " has-error";
                        document.getElementById("errmobile").innerHTML = "Please Enter mobile number.";
                    }
               
                  else if (number.length != 10)
                  {
                    var m = document.getElementById("mob");
                    m.className += " has-error";
                    document.getElementById("errmobile").innerHTML = "maxlength 10 digit.";
                  }
                  else if(number.match(m_pattern))
                {
                    var el2 = document.getElementById("mob");

                    el2.classList.remove("has-error");
                    return true;
                }
                  else
                  {
                      var m = document.getElementById("mob");
                    m.className += " has-error";
                    document.getElementById("errmobile").innerHTML = "invalid number.";
                  }
    }


function validatepassword()
    {
        document.getElementById("errpasswd").innerHTML = "";
          var pass = document.forms["register"]["password"].value;
          if (pass == "" || pass == null)
        {

            var m = document.getElementById("passwd");
                m.className += " has-error";
            document.getElementById("errpasswd").innerHTML = "Please enter password.";
           
        }
        else
        {
            var pass1 = document.getElementById("passwd");

                pass1.classList.remove("has-error");
                return true;
        }
    }

function validateretypassword()
    {
        document.getElementById("errpassword").innerHTML = "";
          var cpass = document.forms["register"]["rpassword"].value;
          if (cpass=="" || cpass == null)
        {

            var m = document.getElementById("repasswd");
                m.className += " has-error";
            document.getElementById("errpassword").innerHTML = "Please retype password.";
           
        }
        
    else if(document.getElementById('passwd').value!=document.getElementById('repasswd').value)
    {

              var m1 = document.getElementById("repasswd");
                m1.className += " has-error";
             document.getElementById("errpassword").innerHTML = "password not matched";
     }
   else
      {
            var pass2 = document.getElementById("repasswd");

                pass2.classList.remove("has-error");
                return true;
      }

    }
    // function able(){
    //   if(document.getElementById('passwd').value==document.getElementById('repasswd').value)
    //   {
    //     document.getElementsByName("next").disabled= false;
    //   }
    //   else
    //   {
    //     return true;
    //   }
    // }




 function send()
           {        
                document.getElementsByName("gender").innerHTML = '';
                var genders = document.getElementsByName("gender");
                if (genders[0].checked == true) {
                    alert("Your gender is male");
                } else if (genders[1].checked == true) {
                    alert("Your gender is female");
                } else {
                    // no checked
                    // var msgs = "You must select your gender!";
                    // document.getElementById('gen').innerHTML = msgs;
                    // return false;
                    alert("please select gender");
                }
                return true;
            }
 function reset_msg() 
            {
                document.getElementById('gen').innerHTML = '';
            }   

//function for city nationality and religion

function district()
{

  document.getElementById("dist").innerHTML='';
  var c= document.forms["register"]["district"].value;
  document.getElementById("errdis").innerHTML = "";
        if (c == null || c == "")
         {
               // var d = document.getElementById("dist");
               //  d.className += " has-error";
                document.getElementById("errdis").innerHTML = "Please Enter district";
         }
         else 
        {
            var el = document.getElementById("dist");

            el.classList.remove("has-error");

            return true;
        }
}  

  function datep()
  {
    document.getElementById("errdate").innerHTML="";
    var d= document.getElementById('date').value;

    if (d== null || d== '')
    {
      document.getElementById("errdate").innerHTML="please select date";

    } 
      else 
        {
            var el = document.getElementById('date');

            el.classList.remove("has-error");

            return true;
        } 
  }   

function nat_tion()
{  
        document.getElementById("nation").innerHTML='';
        var n= document.forms["register"]["Nationality"].value;
        document.getElementById("errnat").innerHTML= "";
        if (n == null || n == "")
        {
          var m = document.getElementById("nation");
          m.className += " has-error";
          document.getElementById("errnat").innerHTML="Please mention Nationality";
        }
          else
          {
            var pl = document.getElementById("nation");

            pl.classList.remove("has-error");

            return true;
          }
        
}

function re_ligion()
{

  document.getElementById("Reli").innerHTML='';
  var c = document.forms["register"]["religion"].value;
  document.getElementById("errreli").innerHTML = "";
        if (c == null || c == "")
         {
               var d = document.getElementById("Reli");
                d.className += " has-error";
                document.getElementById("errreli").innerHTML = "Please Enter religion";
         }
         else 
        {
            // var el = document.getElementById("cit");

            // el.classList.remove("has-error");

            return true;
        }
}       

// // function for dropdown

//   function Validatecountry()
//             {
//                 var e = document.getElementById("yop");
//                 var strUser = e.options[e.selectedIndex].value;

//                 var strUser1 = e.options[e.selectedIndex].text;
//                 if(strUser=="")
//                 {
//                     alert("Please select year of passing");
//                 }
//             }  

// // function for physical disability
   function forpd()
            {
                     if(document.getElementById('y').checked) 
                  {
             document.getElementById("yesfortext").disabled = false;
                  }
            else if(document.getElementById('n').checked)
             {
            document.getElementById("yesfortext").disabled = true;
              }
            } 


function condition()
{
          if(document.getElementById('agree').checked) 
          { 
          return true; 
          } 
      else 
          { 
          alert('Please indicate that you have read and agree to the Terms and Conditions and Privacy Policy'); 
          return false;
           } 
}


function get_action() 
{ 
  document.getElementById('captcha').innerHTML="";
    if(document.getElementById("capt").checked)
    {
        document.getElementById('captcha').innerHTML="You can't leave Captcha Code empty";
        return false;
    }
    else
    {
        alert('please checked captcha');
        return false;
    }
}


function done()
     {
        validateName();
        validateFName();
        validateMName();
        validateMobile();
        validatepassword();
        get_action();
        condition();
        nat_tion();
        re_ligion();
        Email();
        condition();
        get_action();
     } 


 function finalsubmit()
{
  // alert(errorflag);
  // if (errorflag==true) {
  //  alert('error');
  // }


  if(errorflag == false)
  {
    // this is javascript ajax method
    // obj = new XMLHttpRequest();
    // obj.open('post','join.php',true);
    // obj.send();
    // obj.onreadystatechange=function(){
    //  if (obj.readyState==4) {
    //    alert(obj.responseText);
    //  }
    // }

    $.post('myjoin.php',{
      first_name  : $("#firstname").val(),
      last_name   : $("#lastname").val(),
      father_name : $("#fatname").val(),
      mother_name : $("#motname").val(),
      dob     : $("#date").val(),
      gender    : $('[name = "gender" ]:checked').val(),
      country   : $('[name = "country"]').val(),
      state     : $('[name = "state"]').val(),
      city    : $('[name = "city"]').val(),
      pincode   : $("#pin").val(),
      nationality : $("#nation").val(),
      religion  : $('[name = "religion"]').val(),
      phone_no  : $('[name = "landline"]').val(),
      mobile_no   : $('[name = "mobile"]').val(),
      email     : $("#ema").val(),
      education   : $("#ed").val(),
      year_of_passing : $("#yop").val(),
      board_university  : $("#bu").val(),
      phy_attr  : $('[name = "pd"]:checked').val(),
      phy_issue   : $("#text1").val(),
      password  : $("#passwd").val()
    },function(result){
      // alert(result);
      if(result == "true")
      {
        alert("Registraion Successful please login");
        window.location = 'login.php';
      }
      else
      {
        alert("Registraion failed please try again latter");
      }
    });
  }
  else
  {
    alert("Fail To register please solve error first");
  }
    
}
