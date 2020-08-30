<!DOCTYPE html>
<html>
<title>My Portfolio | Hire Me </title>

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no,maximum-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"><!-- fb, insta -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="portfolio.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<body >
    <script src="portfolio.js">
      </script>
    <div class="wrapper">
<header class="main-header" ><meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
    
    <nav>
        

	<div class="contact_top" align="right" >
    
      <ul class="main-nav">
          <li style="padding-right: 300px;"> <a  href="home.php">SAMIKSHA DHARMADHIKARI</a></li>
          <li><a href="about.php">ABOUT</button></a> </li>
          <li><a href="skills.php" >SKILLS</button></a></li>
          <li><a href="portfolio_htm.php">PORTFOLIO</button></a></li>
          <li><a href="experience.php" >EXPERIENCE </button></a></li>
          <li><a href="https://samiksha0302.uta.cloud/" >BLOG</button></a></li>
          <li><a href="hire_me.php" >HIRE ME</button></a></li>
          <li><a href="contact.php" >CONTACT</button></a></li>
          <li><a  id="myModal_signu"  onclick="display1()">LOGIN</a></li>
          <li><a id="myModal_btn"  onclick="display()">SIGN UP</a></li>
  </ul>  
  </div></nav>
 

    </header>
<div class="hm_main" align="center" style="overflow: auto;">
  <br>
    <h3 > <b>Hire Me</b> </h3><br>
    <br>
    <div class="hm_contains" >
        
        <?php
                 $db = mysqli_connect('167.99.105.36', 'samiksha_0302', 'Sakshi12$', 'samiksha_webmanagement');
                        if (!$db) {
                        die("Connection failed: " . mysqli_connect_error());
                            }
                            $results = mysqli_query($db, "SELECT User_id,Name,Salary, Work_position,Work_description,Contact_link FROM Hire_me where User_id='10001'");
                             while($row=mysqli_fetch_array($results))
                             {
        
    echo' <div class="hm_cards"> 
    <div class="card1"  >
        <div class="header1">
            <img src="cart.png" width="150" height="200" style="  border-radius: 0px;">
        </div>
      
        <div class="container1">
          <p style="font-size: 40px">'.$row[Salary].'</p>
          <div style="color: grey; ">
          <p style="padding-bottom:40px;margin-top: -45px">'.$row[Work_position].'</p>
          <hr class="hr_hm"> '.$row[Work_description].' <hr class="hr_hm">  
            </div>
            <a href="contact.php" style="color: green;margin: 30%;"> Contact Us</a>
          </div>
      </div></div>';
                             }
                             ?>
 
          </div>
  </div>
    
<!-- The Modal -->
<div id="myModal" class="modal">

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
      <form  method="post" action="admin_info.php" >
     <h4 style="color:rgb(143, 136, 136)" class="modal-title">Log - in</h4>
        <p class="titles">Username</p>
        <input class="input-field" type="text" name="user" required> 
        <p class="titles">Password</p>
        <input class="input-field" type="password" name="pass" required>  
          <button type="button" data-dismiss="modal" class="cancelbtn">Cancel</button>
          <button type="submit" name="login_user"  class="signupbtn">Sign Up</button>
        </div>
       </form>
  
    </div>
  
  </div>

</div><!--wrapper-->


</body>
</html>