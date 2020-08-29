
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
                        <input type="text" name="firstname" class="form-control" placeholder="First name" required>
                        <input type="text" name="lastname" class="form-control ln" placeholder="Last name" required>
                      </div>
                      <div class="col-lg-12">
                          <label for="username"><img src="name.png" alt=""></label>
                        <input type="text" name="username" class="form-control" placeholder="Username" required>
                      </div>
                      <div class="col-lg-12">
                          <label for="email"><img src="gmail.png" alt=""></label>
                        <input type="email" name="email" class="form-control" placeholder="Email" required>
                      </div>
                      <div class="col-lg-12">
                         <label for="phone no."><img class="ic" src="phone.png" alt=""></label>
                        <input type="text" name="phone" class="form-control" placeholder="Phone Number">
                      </div>
                      <div class="col-lg-12">
                          <label for=""><img src="login.png" alt=""></label>
                        <input type="password" name="password_1" class="form-control" placeholder="Password" required>
                      </div>
                      <div class="col-lg-12">
                        <input type="password" name="password_2" class="form-control" placeholder="Confirm Password" required>
                      </div>
                    </div>
                    <button type="submit" name="register_user">Register</button>
                  </form>
            </div>
        </div>
        <div class="all col-lg-12">
            <h1>Have an account already!</h1>
             <a href="signin.php">Click here</a>
        </div>
        </section>
</body>
</html>