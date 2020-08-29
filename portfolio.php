<?php 
session_start();
 if(isset($_SESSION['username']))
 {
     $_SESSION['msg']='You Must login first to view this page';
     header("location: signin.php");
 }
 if(isset($_GET['logout'])){
     session_destroy();
     unset($_SESSION['username']);
     header('location: signin.php');
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="favi.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Sriracha&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/4f2640cf13.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Raleway&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,900&family=Red+Rose&display=swap" rel="stylesheet">
    <title>My Portfolio</title>
</head>
<body>
    <section id="whole">
    <section id="head">
    <div>
      <p class="headt">Hey everyone,</p>
      <h1 class="maintxt">I'm Kshit Raj Srivastava</h1>
      <p class="headt">Have a look of my page to know more about me.</p>
    </section>
    <hr>
    <section id="intro">
        <div>
            <h1>| About me <img class="manh" src="manh.png" alt="manhi"></h1>
            <div class="dpimg">
            <img class="myimg" src="kshit.png" alt="kshitraj">
            <p class="ab">I was born and brought up in Lucknow. I did my schooling from Lucknow and currently I am an Engineering student pursuing Bachelors of Technology in Computer Science and Information Technology.
            I have keen interest in Coding and want to be a Developer.
            </p>
            </div>
        </div>
    </section>
    <hr class="hr">
    <section id="edu">
        <div>
            <h1>| Education <img class="manh" src="sch.png" alt="schoolpic"> </h1>
            <ul>
            <li>Talking about my qualification,I did my High School in 2016 with 88% in UP board from <a href="https://montfortlucknow.org/"> Montfort Inter College</a>,Lucknow.</li>
            <br>
            <li>I passed my Intermediate with 91.8% in CBSE board from <a href="https://montfortlucknow.org/"> Montfort Inter College</a>,Lucknow.</li>
            <br>
            <li>Currently I'm pursuing my B.Tech in CS&IT(2nd year) from <a href="https://www.akgec.ac.in/"> Ajay Kumar Garg Engineering College</a>,Ghaziabad.</li>
            </ul>
        </div>
    </section>
    <hr>
    <section id="skills">
      <div>
          <h1>| My Technical Skills <img class="manh" src="tech.png" alt="tech"> </h1>
          <div class="skills scode">
          <img class="code" src="code.png" alt="code">
          <h3 class="sktxt">Love to Code</h3>
          <p class="skitxt">I started coding after joining college and having a good knowledge of C/C++.I do regular competitive 
              coding to enhance my skills and try to keep polishing them for future benefits.
          </p>
          </div>
          <div class="skills">
          <img class="dev" src="dev.png" alt="dev">
          <h3 class="sktxt">Development</h3>
          <p class="skitxt">I also have adequate knowledge of HTML,CSS and a few about Bootstrap.I keep working towards 
              increasing my knowledge so that I can become a fluent Front-end Developer.</p>
          </div>
      </div>
    </section>
    <hr>
    <section id="hobbies">
        <div>
            <h1>| My Hobbies <img class="manh" src="jug.png" alt="hobbies"> </h1>
            <ul>
                <li>I love to watch movies of any genre but sci-fi being favourite.</li>
                <br>
                <li>Reading is always a good pass-time for me whenever I am free.</li>
                <br>
                <li>I am not a professional player but I like to play cricket with my cousins whenever I get a chance.</li>
            </ul>
        </div>
    <hr>
    </section>
    <section id="contact">
        <div>
          <h1>| Lets Get in Touch <img class="manh" src="contact.png" alt="contact"></h1>
          <p class="ctxt">Following are the links to reach me, see you soon:</p>
          <div class="conta">
              <a class="contac" href="https://www.linkedin.com/in/kshitraj1899/"><i class="fab fa-linkedin fa-3x"></i></a>
            <a class="cont contac" href="https://instagram.com/kshit_raj_srivastava?igshid=wrxgemompgg1"><i class="fab fa-instagram fa-3x"></i></a>
            <a class="contac" href="https://github.com/KSHIT1899"><i class="fab fa-github fa-3x"></i></a>
        </div>
        </div>
    </section>
    </section>
</body>
<footer>
    <section>
        <div class="foot">
            <h3>&copy;   Kshit Raj Srivastava 2020</h3>
        </div>
    </section>
</footer>
</html>