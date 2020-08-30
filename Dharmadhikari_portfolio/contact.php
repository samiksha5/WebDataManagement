<?php include('server.php') ?>

<!DOCTYPE html>
<html>
<title>My Portfolio | Contact </title>

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
<header class="main-header" ><meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
    
    <nav>
        

	<div class="contact_top" align="right" >
    
      <ul class="main-nav">
            <li style="padding-right: 300px;"><a href="home.php">SAMIKSHA DHARMADHIKARI</a></li>
            <li><a href="about.php">ABOUT</button></a> </li>
            <li><a href="skills.php" >SKILLS</button></a></li>
            <li><a href="portfolio_htm.php">PORTFOLIO</button></a></li>
            <li><a href="experience.php" >EXPERIENCE </button></a></li>
            <li><a href="https://samiksha0302.uta.cloud/" >BLOG</button></a></li>
            <li><a href="hire_me.php" >HIRE ME</button></a></li>
            <li><a href="contact.php" >CONTACT</button></a></li>
            <li><a  id="myModal_signu" onclick="display1()">LOGIN</a></li>
            <li><a  id="myModal_btn" onclick="display()">SIGN UP</a></li>
  </ul>  
  </div></nav>
 

    </header>


    <div align="center">
      
    
    <div id="content"   >
        <div class ="mid" align="center">
            <h3 style="font-weight: bold;font-size: 30px;">Contact Me</h3>
            
        </div>
        <div id="left">
            <h5 style="font-weight: bold;">Feel free to contact me</h5>

            <form method="post" action="contact.php">
            <div style="max-width:400px;margin:auto"> 
            <div class="input-icons"> 
                <i class="fa fa-user-circle icon"></i> 
                <input class="input-field" type="text" placeholder="Name" name="name" required> 
                             
            </div>
            <div class="input-icons">

                <i class="fa fa-file-text icon"></i> 
                <input class="input-field" type="text" placeholder="Subject" name="subject"  required>
            </div>
            <div class="input-icons"> 
                <i class="fa fa-envelope icon"></i> 
                <input class="input-field" type="email" placeholder="E-mail" name="email" pattern ="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2, 4}$" required> 
            </div>
            <div class="input-icons">

                <input  class="msg" placeholder="Your Message" type="text" name="message" required /><br>
                <a href="#login"><button style="margin-top:20px;" class="button button" name="contact_page_data" >Send</button><a></a>
            </div> 
            </form>
      </div> 

          
        </div> 
        
      
        <div id="right"align="left"> <br><br>
         <?php
                 $db = mysqli_connect('167.99.105.36', 'samiksha_0302', 'Sakshi12$', 'samiksha_webmanagement');
                        if (!$db) {
                        die("Connection failed: " . mysqli_connect_error());
                            }
                            $results = mysqli_query($db, "SELECT User_id,Name,Email,Phone_number FROM Contact_us where User_id='10001'");
                             $row=mysqli_fetch_array($results);
            echo '<h6  style="font-weight: bold; padding: 0px; margin: 0px;" >Address</h6> 
            <p style=" padding: 0px; margin: 0px;">404 East border street, Arlington, Texas</p> <br>
            <h6 style="font-weight: bold; padding-bottom: 0%; margin-bottom: 0%">Phone</h6>
            <p style=" padding: 0px; margin: 0px;">'.$row[Phone_number].'</p><br>
            <h6 style="font-weight: bold; padding-bottom: 0%; margin-bottom: 0%">Email</h6>
            <p style=" padding: 0px; margin: 0px;">'.$row[Email].'</p><br>';
            ?>
        </div>
      </div>
</div>
  

 </div><!--bg-->
 <div align="center" class="c_foot"  >
  <a href="#"  class=" fa fa-facebook"></a>
  <a href="#" class=" fa fa-instagram"></a>
  <a href="#"  class=" fa fa-linkedin"></a>
 

<h3 style="font-weight:bold;"> SAMIKSHA DHARMADHIKARI </h3>
<p style="color:grey;"> &copy; Samiksha Dharmadhikari CV. All rights reserved. <br> Design. DiazApps</p>
 </div>


     
<!-- The Modal -->
<div id="myModal" class="modal" style="overflow:auto;">

        <!-- Modal content -->
        <div class="modal-content">
          <span class="close">&times;</span>
          <form  method="post" action="contact.php">
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
              <button type="submit" name="reg_user" class="signupbtn">Sign Up</button>
            </div>
           </form>
      
        </div>
      
      </div>
      
        <!-- The Modal -->
      <div id="myModal1" class="modal">
      
        <!-- Modal content -->
        <div class="modal-content">
          <span class="close1">&times;</span>
          <form method="post" action="admin_info.php">
            <div class="modal-header">
               <h4 style="color:rgb(143, 136, 136)" class="modal-title">Log - in</h4>
        <p class="titles">Username</p>
        <input class="input-field" type="text" name="user" required> 
        <p class="titles">Password</p>
        <input class="input-field" type="password" name="pass" required>
              <button type="button" data-dismiss="modal" class="cancelbtn">Cancel</button>
              <button type="submit" name="login_user" class="signupbtn">Sign Up</button>
            </div>
           </form>
      
        </div>
      
      </div>
    

</div><!--wrapper-->


</body>
</html>