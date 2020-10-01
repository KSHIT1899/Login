
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="fav.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&family=Major+Mono+Display&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <style>
      @media screen and (max-width:460px){
        .si{
           display:none;
        }
      }
    </style>
</head>
<body>
    <nav>
        <label class="lab">BonJour</label>
        <ul style="list-style: none; float:right">
          <li style="margin:20px 20px 0 0;font-family: 'Major Mono Display', monospace;">
             <a class="si" style="font-size: 100%;" href="signin.php"><img src="si.png" alt=""> Sign In</a>
          </li>
        </ul>
    </nav>
    <h3 class="txt">New here?? <br> Create an account</h3>
    <section id="whole">
        <div class="row container">
            <div class="f col-lg-9 col-md-12 col-sm-12">
                <form action="server.php" method="post">
                   
                    <div class="row">
                      <div class="col-lg-6">
                          <label for="name"><img src="person.png" alt=""></label>
                        <input type="text" name="firstname" class="form-control" placeholder="First name" required onchange="checkfirst(this)"><p id="firstnameerr" class="inlineerr"></p>
                        <input type="text" name="lastname" class="form-control ln" placeholder="Last name" required onchange="checklast(this)"><p id="lastnameerr" class="inlineerr"></p>
                      </div>
                      <div class="col-lg-12">
                          <label for="username"><img src="name.png" alt=""></label>
                        <input type="text" name="username" class="form-control" placeholder="Username" required onchange="checkuser(this)">
                        <p id="usererr" class="inlineerr"></p>
                      </div>
                      <div class="col-lg-12">
                          <label for="email"><img src="gmail.png" alt=""></label>
                        <input type="email" name="email" class="form-control" placeholder="Email" required onchange="checkmail(this)"> <p id="emailerr" class="inlineerr"></p>
                      </div>
                      <div class="col-lg-12">
                         <label for="phone no."><img class="ic" src="phone.png" alt=""></label>
                        <input type="text" name="phone" class="form-control" placeholder="Phone Number" onchange="checkphone(this)"><p id="phoneerr" class="inlineerr"></p>
                      </div>
                      <div class="col-lg-12">
                          <label for=""><img src="login.png" alt=""></label>
                        <input type="password" name="password_1" id="password" class="form-control" placeholder="Password" required onchange="checkpass(this)"><p id="passerror" class="inlineerr"></p>
                      </div>
                      <div class="col-lg-12">
                        <input type="password" name="password_2" class="form-control" placeholder="Confirm Password" required onchange="checkmatch(this)"><p id="cpasserror" class="inlineerr"></p>
                      </div>
                    </div>
                    <button type="submit" name="register_user" onclick="return checkall()">Register</button>
                  </form>
            </div>
        </div>
        <div class="all col-lg-12">
            <h1>Have an account already!</h1>
             <a href="signin.php">Click here</a>
        </div>
        </section>
        <script>
var passcorr=1;
var firstcorr=1;
var lastcorr=1;
var emailcorr=1;
var phonecorr=1;
var passmatch=1;
var usercorr=1;
function checkpass(inputtxt){
var passw=  /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})/;
if(inputtxt.value.match(passw)) 
{ 
    passcorr=1;
    document.getElementById('passerror').innerHTML="";
    document.getElementById('passerror').style.display="none";
}
else
{ 
    passcorr=0;
    document.getElementById('passerror').innerHTML="Password format is wrong";
    document.getElementById('passerror').style.display="block";
}
}

function checkuser(element)
{
  var format= /^[a-z0-9_-]{3,16}$/;
  if(element.value.match(format)) 
{ 
    usercorr=1;
    document.getElementById('usererr').innerHTML="";
    document.getElementById('usererr').style.display="none";
}
else
{ 
    usercorr=0;
    document.getElementById('usererr').innerHTML="Invalid username";
    document.getElementById('usererr').style.display="block";
}
}

function checkfirst(inputtxt){
var passw=  /^[A-Za-z]{3,255}$/;
if(inputtxt.value.match(passw)) 
{ 
    firstcorr=1;
    document.getElementById('firstnameerr').innerHTML="";
    document.getElementById('firstnameerr').style.display="none";
}
else
{ 
    firstcorr=0;
    document.getElementById('firstnameerr').innerHTML="Invalid first name";
    document.getElementById('firstnameerr').style.display="block";
}
}

function checklast(inputtxt){
var passw=  /^[A-Za-z]{3,255}$/;
if(inputtxt.value.match(passw)) 
{ 
    lastcorr=1;
    document.getElementById('lastnameerr').innerHTML="";
    document.getElementById('lastnameerr').style.display="none";
}
else
{ 
    lastcorr=0;
    document.getElementById('lastnameerr').innerHTML="Invalid last name";
    document.getElementById('lastnameerr').style.display="block";
}
}

function checkmail(inputtxt){
var mailpattern=  /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
if(inputtxt.value.match(mailpattern)) 
{ 
    emailcorr=1;
    document.getElementById('emailerr').innerHTML="";
    document.getElementById('emailerr').style.display="none";
}
else
{ 
    emailcorr=0;
    document.getElementById('emailerr').innerHTML="Invalid Email";
    document.getElementById('emailerr').style.display="block";
}
}


function checkphone(inputtxt){
var pattern=  /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
if(inputtxt.value.match(pattern)) 
{ 
    phonecorr=1;
    document.getElementById('phoneerr').innerHTML="";
    document.getElementById('phoneerr').style.display="none";
}
else
{ 
    phonecorr=0;
    document.getElementById('phoneerr').innerHTML="Invalid Phone number";
    document.getElementById('phoneerr').style.display="block";
}
}

function checkmatch(element)
{
    var pass=document.getElementById('password');
    if(element.value==pass.value)
    {
        passmatch=1;
        document.getElementById('cpasserror').innerHTML="";
        document.getElementById('cpasserror').style.display="none";
    }
    else
    {
        passmatch=0;
        document.getElementById('cpasserror').innerHTML="Passwords don not match";
        document.getElementById('cpasserror').style.display="block";
    }
}

function checkall()
{
    if(passcorr==0||firstcorr==0||lastcorr==0||emailcorr==0||phonecorr==0||passmatch==0||usercorr==0)
    {
        alert("Please enter valid inputs");
        return false;
    }
    else
    {
        return true;
    }
}

function mainmenu()
{
    window.location.replace("signin.php");
}



</script>
</body>
</html>