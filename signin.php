
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
        form{
            width: 50%;
        }
        .whole{
            margin-top: 35px;
            margin-left: 30%;
        }
        .pcol{
            padding-top: 8px;
        }
        @media screen and (max-width:980px) {
            .whole{
            margin-left: 10%;
        }
        }
        @media screen and (max-width:820px) {
            form{
                width:70%;
            }
        }
        @media screen and (max-width:400px) {
        .whole{
            margin-left: 10%;
        }
        form{
                width:80%;
            }
        }
    </style>
</head>
<body>
    <nav>
        <label class="lab">BonJour</label>
    </nav>
    <h3 class="txt">..Sign In..</h3>
    <section class="whole">
          <div class="row">
             <form action="server.php" method="post">
                <div class="col">
                    <label for="username"><img src="name.png" alt=""></label>
                  <input type="text" name="username" class="form-control" placeholder="Username" required>
                </div>
                <div class="col pcol">
                    <label for=""><img src="login.png" alt=""></label>
                  <input type="password" name="password_1" class="form-control" placeholder="Password" required>
                </div>
                <button name="signin_user" type="submit" style="margin-top: 10px;" class="btn btn-outline-light btn-lg">Sign In</button>
             </form>
          </div>
     </section>
     <div class="all" style="margin-top: 100px; font-weight: 900;">
       <h3>Don't have an account make one.</h3>
       <a href="login.php">Click Here</a>
     </div>
</body>
</html>