<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<title>My Portfolio | Home </title>

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"><!-- fb, insta -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="portfolio.css" rel="stylesheet" type="text/css">

<body >
    <script src="portfolio.js">
      </script>
    <div class="wrapper">
<div class="bgimg">
<!-- Navbar (sit on top) -->
  <header class="main-header" ><meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
    
    <nav>
        
	<div class="top" align="right" >
    
      <ul class="main-nav">
    <li style="padding-right: 350px; "><a href="home.php">SAMIKSHA DHARMADHIKARI</a></li>
    <li><a  href="about.php">ABOUT</a> </li>
	  <li><a  href="skills.php">SKILLS</a></li>
    <li><a href="portfolio_htm.php">PORTFOLIO</a></li>
    <li><a  href="experience.php">EXPERIENCE </a></li>
    <li><a  href="https://samiksha0302.uta.cloud/">BLOG</a></li>
    <li><a  href="hire_me.php">HIRE ME</a></li>
    <li><a href="contact.php">CONTACT</a></li>
    <li><a id="myModal_signu" onclick="display1()">LOGIN</a></li>
    <li><a id="myModal_btn" onclick="display()">SIGN UP</a></li>
    
  </ul>  
  </div></nav> 
    </header>
<!-- The Modal -->
<div id="myModal" class="modal" style="overflow:auto;">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <form  method="post" action="home.php">
      <div class="modal-header">
        <h4 style="color:rgb(143, 136, 136)" class="modal-title">Check - in</h4>
        <p class="titles">Name</p>
        <input class="input-field" type="text" name="fname" required> 
        <p class="titles">Last Name</p>
        <input class="input-field" type="text" name="lname" required> 
        <p class="titles">Email</p>
        <input class="input-field" type="email" name="email" pattern ="/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/" required> 
        <p class="titles">User</p>
        <input class="input-field" type="text" name="username" required> 
        <p class="titles">Password</p>
        <input class="input-field" type="password" name="password1" required> 
        <p class="titles">Repeat Password</p>
        <input class="input-field" type="password" name="password2" required> 
        <button type="button" data-dismiss="modal" class="cancelbtn">Cancel</button>
        <button type="submit"  class="signupbtn" name="reg_user">Sign Up</button>
      </div>
     </form>

  </div>

</div>

  <!-- The Modal -->
<div id="myModal1" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close1">&times;</span>
    <form method="post" action="admin_info.php" >
      <div class="modal-header">
        <h4 style="color:rgb(143, 136, 136)" class="modal-title">Log - in</h4>
        <p class="titles">Username</p>
        <input class="input-field" type="text" name="user" required> 
        <p class="titles">Password</p>
        <input class="input-field" type="password" name="pass" required>  
        <button type="button" data-dismiss="modal" class="cancelbtn">Cancel</button>
        <button type="submit"  class="signupbtn" name="login_user">Sign In</button>
      </div>
     </form>

  </div>

</div>

  <div align="center" style="padding:48px;color: white;font-weight:bold;">
      <?php

                               $db = mysqli_connect('167.99.105.36', 'samiksha_0302', 'Sakshi12$', 'samiksha_webmanagement');

                        if (!$db) {
                        die("Connection failed: " . mysqli_connect_error());
                            }


                            $results = mysqli_query($db, "SELECT User_id,Photo FROM User");
                         

                             $row=mysqli_fetch_array($results);
                                 
                                header("Content-type: image/png"); 
                                echo '<img width="200" height="200"alt="myphoto" style="border: 5px solid green;" src="data:image/jpeg;base64,'.base64_encode($row["Photo"] ).'"/></td></tr>'; 


                                ?>
  
  <br><br> 
    <h1  >SAMIKSHA DHARMADHIKARI</h1>
    <p >WEB DEVELOPER, SOFTWARE DEVELOPER<p>
    
     <a href="hire_me.php"><button class="button button" style="width: 150px" >Hire Me</button><a>
     <a href="https://docs.google.com/document/d/1swrieacMDqzgP4xrPqVV1bbGF6QD6wShylWqv4YSzdE/edit?usp=sharing" target="_blank"><button class="button button" style="width: 150px"  >Download CV</button></a></p>
  </div> 


 
</div> <!-- bg -->
<div align="center"  class="h_foot" >
  <a  href="#" class="fa fa-facebook"></a>
  <a class="fa fa-instagram"></a>
  <a  href="https://www.linkedin.com/in/samiksha-dharmadhikari-3a5a79129"  class="fa fa-linkedin"></a>
</div>
</div><!-- wrapper -->



  
</body>

</html>