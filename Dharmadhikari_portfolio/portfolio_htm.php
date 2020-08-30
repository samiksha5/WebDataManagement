<!DOCTYPE html>
<html>
<title>My Portfolio | Portfolio </title>

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no,maximum-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"><!-- fb, insta -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="portfolio.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.fa {
padding:10px;
  font-size: 30px;
  width: 80px;
  height:50px;
  text-align: center;
  text-decoration: none;
  border-radius: 70%;
  color: grey;
  margin: 10px;
}

.fa:hover {
    opacity: 0.7;
    background:green;
}

</style>
<body >
    <script src="portfolio.js">
      </script>
    <div class="wrapper">
<header class="main-header" ><meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
    
    <nav>
        

	<div class="contact_top" align="right" >
    
      <ul class="main-nav">
          <li style="padding-right: 300px;"><a  href="home.php">SAMIKSHA DHARMADHIKARI</a></li>
          <li><a href="about.php" >ABOUT</button></a> </li>
          <li><a href="skills.php" >SKILLS</button></a></li>
          <li><a href="portfolio_htm.php" >PORTFOLIO</button></a></li>
          <li><a href="experience.php" >EXPERIENCE </button></a></li>
          <li><a href="https://samiksha0302.uta.cloud/" >BLOG</button></a></li>
          <li><a href="hire_me.php" >HIRE ME</button></a></li>
          <li><a href="contact.php" >CONTACT</button></a></li>
          <li><a  onclick="display1()" id="myModal_signu" >LOGIN</a></li>
          <li><a  onclick="display()" id="myModal_btn">SIGN UP</a></li>
  </ul>  
  </div></nav>
 

    </header>
<div align="center">
  <br>
    <h3 > <b>Portfolio</b> </h3><br>
</div>
  <div align="center">
<div class="w3-container" >
  
    <div class="w3-row">
      <a style=" margin-left:40%; color: grey;"  href="javascript:void(0)" class="fa fa-laptop w3-third tablink   w3-hover-light-green w3-padding" onclick="openCity(event, 'one');">
       
      </a>
      <a href="javascript:void(0)" style="color: grey;" class="fa fa-picture-o w3-third tablink w3-hover-light-green w3-padding" onclick="openCity(event, 'two');">
      </a>
      <a href="javascript:void(0)" style="color: grey;" class="fa fa-camera w3-third tablink  w3-hover-light-green w3-padding" onclick="openCity(event, 'three');">
        
      </a>
    </div>
  
    <div id="one" class="w3-container city" style="display:none">
        <div align="center">               
   <!-- Photo Grid -->
<div class="row"> 
    <div class="column" style="margin-left:250px;" >
        
                 <?php

                               $db = mysqli_connect('167.99.105.36', 'samiksha_0302', 'Sakshi12$', 'samiksha_webmanagement');

                        if (!$db) {
                        die("Connection failed: " . mysqli_connect_error());
                            }


                            $results = mysqli_query($db, "SELECT Website_page FROM Portfolio where Project_name='imag1'");
                           
                            while($row=mysqli_fetch_array($results))
                            {
                                 echo '<div class="hm_contains2"> <div class="card2">';
                                header("Content-type: image/png"); 
                                echo '<img style="width:100%;border-radius: 0px;" src="data:image/jpeg;base64,'.base64_encode(  $row['Website_page'] ).'"/></div><br>';
                            }   
                             
                             ?>
                             </div>


  </div>            
              
    </div> </div>
  
    <div id="two" class="w3-container city" style="display:none">
        <div align="center">               
            <!-- Photo Grid -->
         <div class="row"> 
             <div class="column" style="margin-left:120px;" >
                       <?php
echo "hello";
                               $db = mysqli_connect('167.99.105.36', 'samiksha_0302', 'Sakshi12$', 'samiksha_webmanagement');

                        if (!$db) {
                        die("Connection failed: " . mysqli_connect_error());
                            }


                            $results = mysqli_query($db, "SELECT Website_page FROM Portfolio where Project_name='imag2'");
                           
                            while($row=mysqli_fetch_array($results))
                            {
                                 echo '<div class="hm_contains2"> <div class="card2">';
                                header("Content-type: image/png"); 
                                echo '<img style="width:100%;border-radius: 0px;" src="data:image/jpeg;base64,'.base64_encode(  $row['Website_page'] ).'"/></div><br>';
                            }   
                             
                             ?>
             </div>

           </div>       
    </div> </div>
  
    <div id="three" class="w3-container city" style="display:none">
        <div align="center">               
            <!-- Photo Grid -->
         <div class="row"> 
             <div class="column" style="margin-left:120px;" >
               <?php

                               $db = mysqli_connect('167.99.105.36', 'samiksha_0302', 'Sakshi12$', 'samiksha_webmanagement');

                        if (!$db) {
                        die("Connection failed: " . mysqli_connect_error());
                            }


                            $results = mysqli_query($db, "SELECT Website_page FROM Portfolio where Project_name='imag3'");
                           
                            while($row=mysqli_fetch_array($results))
                            {
                                 echo '<div class="hm_contains2"> <div class="card2">';
                                header("Content-type: image/png"); 
                                echo '<img style="width:100%;border-radius: 0px;" src="data:image/jpeg;base64,'.base64_encode(  $row['Website_page'] ).'"/></div><br>';
                            }   
                             
                             ?>
             </div>

           </div>       
    </div>
    </div>
  </div>
  
</div>



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
      <form  method="post" action="admin_info.php">
        <div class="modal-header">
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



<script>
    
    function openCity(evt, cityName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" w3-border-red", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.firstElementChild.className += " w3-border-red";
}
    </script>

</body>
</html>