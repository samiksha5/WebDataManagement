<!DOCTYPE html>
<html>
<title>My Portfolio | Experience </title>

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
	<div class="contact_top" align="right"  >
    
      <ul class="main-nav">
          <li style="padding-right: 300px;"><a  href="home.php">SAMIKSHA DHARMADHIKARI</a></li>
          <li><a href="about.php" >ABOUT</button></a> </li>
          <li><a href="skills.php">SKILLS</button></a></li>
          <li><a href="portfolio_htm.php" >PORTFOLIO</button></a></li>
          <li><a href="experience.php">EXPERIENCE </button></a></li>
          <li><a href="https://samiksha0302.uta.cloud/" >BLOG</button></a></li>
          <li><a href="hire_me.php" >HIRE ME</button></a></li>
          <li><a href="contact.php" >CONTACT</button></a></li>
          <li><a id="myModal_signu"  onclick="display1()" >LOGIN</a></li>
          <li><a id="myModal_btn"  onclick="display()">SIGN UP</a></li>
  </ul>  
  </div></nav>
 

    </header>
<div align="center">
  <br>
    <h3 > <b>Work Experience</b> </h3><br>
</div>

         <?php
                 $db = mysqli_connect('167.99.105.36', 'samiksha_0302', 'Sakshi12$', 'samiksha_webmanagement');
                        if (!$db) {
                        die("Connection failed: " . mysqli_connect_error());
                            }
                            $results = mysqli_query($db, "SELECT User_id,Name, Start_date,End_date,Job_title,Job_description,Company_name FROM Experience where User_id='10001'");
                             while($row=mysqli_fetch_array($results))
                             {
                                echo '<div class="main_edu" align="center" >
       
    
    <div id="content_skill" class="cont_edu" style="border:1px solid rgb(220, 220, 220);" >
        
        <div align="left" id="left" style="font-weight:normal;color: green">              
            
      <div class="card">
    <div class="header1">
    
      <div style="font-size:12px;padding-top:30px">'.$row["Start_date"].'-'.$row[End_date].'</div>
      <div style="font-size:20px;padding:30px"> '.$row["Company_name"].'</div>
    </div>
  
    
     </div>
        </div>   
      
        <div id="right_skill" class="cont_edu" align="left">
            <div align="left" id="center" style="font-size:20px;color:grey;">   
                <br>'.$row["Job_title"].'<br>
              <h5 align="left" id="center" style="font-size:12px;color:grey;padding: 0%;margin: 0%;">'.$row[Job_description].'</div>
             
        </div>
      </div>
  </div>';
                             }
                    ?>


      <div align="center">
        <br>
          <h3 > <b>Education</b> </h3><br>
      </div>

<?php
                 $db = mysqli_connect('167.99.105.36', 'samiksha_0302', 'Sakshi12$', 'samiksha_webmanagement');
                        if (!$db) {
                        die("Connection failed: " . mysqli_connect_error());
                            }
                            $results = mysqli_query($db, "SELECT User_id,Name, University,Course,Degree,Passing_year FROM Education where User_id='10001'");
                             while($row=mysqli_fetch_array($results))
                             {
                                 echo '<div class="main_edu" align="center" >
       
    
        <div id="content_skill" class="cont_edu" style="border:1px solid rgb(220, 220, 220);" >
            
            <div align="left" id="left" style="font-weight:normal;color: green">              
                
          <div class="card">
        <div class="header1">
        
          <div style="font-size:12px;padding-top:30px">'.$row[Passing_year].'</div>
          <div style="font-size:20px;padding:30px">'.$row[Degree].'</div>
        </div>
      
        
         </div>
            </div>   
          
            <div id="right_skill" class="cont_edu" align="left">
                <div align="left" id="center" style="font-size:20px;color:grey;">   
                    <br>'.$row[Course].'<br>
                  <h5 align="left" id="center" style="font-size:12px;color:grey;padding: 0%;margin: 0%;">'.$row[University].'</div>
                 
            </div>
          </div>
      </div>';
                             }
            ?>

            <!-- The Modal -->
            <div id="myModal" class="modal" style="overflow:auto;">

                <!-- Modal content -->
                <div class="modal-content">
                  <span class="close">&times;</span>
                  <form  method="post" action="experience.php">
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
                      <button type="submit" name="login_user" class="signupbtn">Sign Up</button>
                    </div>
                   </form>
              
                </div>
              
              </div>
              
</div><!--wrapper-->


</body>
</html>