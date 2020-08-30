<!DOCTYPE html>
<html>
  <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>My Portfolio] |  About</title>

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"><!-- fb, insta -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="portfolio.css" rel="stylesheet" type="text/css">
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

</head>
<body >
    <script src="portfolio.js">
      </script>
    <div class="wrapper" >
<header class="main-header" > 
    
    <nav>
	<div class="contact_top" align="right"  >
    
      <ul class="main-nav" >
    <li style="padding-right: 300px;"> <a href="home.php">SAMIKSHA DHARMADHIKARI</a></li>
    <li><a href="about.php">ABOUT</a> </li>
	  <li><a href="skills.php" >SKILLS</a></li>
    <li><a href="portfolio_htm.php">PORTFOLIO</a></li>
    <li><a href="experience.php" >EXPERIENCE </a></li>
    <li><a href="https://samiksha0302.uta.cloud/" >BLOG</a></li>
    <li><a href="hire_me.php" >HIRE ME</a></li>
    <li><a href="contact.php" >CONTACT</a></li>
    <li><a  id="myModal_signu" onclick="display1()">LOGIN</a></li>
    <li><aid="myModal_btn" onclick="display()">SIGN UP</a></li>
  </ul>  
  </div></nav>
 

    </header>

 
    <div class="cont_main" align="center" style=" margin-left: 0%;width: 100%">
      
    
    <div id="content_abt" align="center" class="cont_abt" style="border:1px solid gainsboro; " >
        
        <div class="abt_l" align="left" id="left" style="font-weight:normal;">
                
            <h3 > <b>ABOUT</b> </h3>
                <br>
                <div style="color: rgb(133, 126, 126)">
                     <?php
                               $db = mysqli_connect('167.99.105.36', 'samiksha_0302', 'Sakshi12$', 'samiksha_webmanagement');
                        if (!$db) {
                        die("Connection failed: " . mysqli_connect_error());
                            }
                            $results = mysqli_query($db, "SELECT User_id,Description,Address,Age,Email,Phone_number,Language FROM About where User_id='10001'");
                             $row=mysqli_fetch_array($results);
                                echo ' <p class="show-read-more">'.$row["Description"].' </p>';  
                    
                    ?>
                 
              </div>
      </div>   
      
        <div class="abt_r" id="right_abt" align="left">
            <br>
                        <h3> <b>Basic Information</b></h3>
                <br>
                 <?php
                               $db = mysqli_connect('167.99.105.36', 'samiksha_0302', 'Sakshi12$', 'samiksha_webmanagement');
                        if (!$db) {
                        die("Connection failed: " . mysqli_connect_error());
                            }
                            $results = mysqli_query($db, "SELECT User_id,Description,Address,Age,Email,Phone_number,Language FROM About where User_id='10001'");
                             $row=mysqli_fetch_array($results);
                             
                                echo '<b>AGE: </b> &emsp; <span  class="tab span_style">'.$row["Age"].' </span><br><br>
                    <b>EMAIL: </b> <span  class="tab span_style" >'.$row[Email].'</span> <br><br>
                    <b>PHONE:</b><span  class="tab span_style">'.$row[Phone_number].'</span><br><br>
                        <b>ADDRESS:</b> &emsp; &emsp; &emsp; &emsp; <span class="span_style" >'.$row[Address].'</span> <span class="tab span_style">&emsp; &emsp; &emsp; </span><br><br>
                        <b>LANGUAGE:</b>  <span class="span_style" >&emsp; &emsp; &ensp; &emsp;'.$row[Language].'</span> <br><br>';  
                    
                    ?>
                    
                      </div>


        </div>
      </div>
  

      <!-- The Modal -->
<div id="myModal" class="modal" style="overflow: auto">

    <!-- Modal content -->
    <div class="modal-content">
      <span class="close">&times;</span>
      <form  method="post" action="about.php">
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
          <button type="submit" name="reg_user"  class="signupbtn">Sign Up</button>
        </div>
       </form>
  
    </div>
  
  </div>
  
    <!-- The Modal -->
  <div id="myModal1" class="modal">
  
    <!-- Modal content -->
    <div class="modal-content">
      <span class="close1">&times;</span>
      <form  method="post" action="admin_info.php">
        <div class="modal-header">
          <h4 style="color:rgb(143, 136, 136)" class="modal-title">Log - in</h4>
        <p class="titles">Username</p>
        <input class="input-field" type="text" name="user" required> 
        <p class="titles">Password</p>
        <input class="input-field" type="password" name="pass" required>    
          <button type="button" data-dismiss="modal" class="cancelbtn">Cancel</button>
          <button type="submit"  name="login_user" class="signupbtn">Sign Up</button>
        </div>
       </form>
  
    </div>
  
  </div>
  

</div><!--wrapper-->

</body>

</html>