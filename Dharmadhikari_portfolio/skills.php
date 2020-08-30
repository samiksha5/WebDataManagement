<!DOCTYPE html>
<html>
<title>My Portfolio | Skills </title>

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
          <li><a href="experience.php" >EXPERIENCE </button></a></li>
          <li><a href="https://samiksha0302.uta.cloud/" >BLOG</button></a></li>
          <li><a href="hire_me.php">HIRE ME</button></a></li>
          <li><a href="contact.php" >CONTACT</button></a></li>
          <li><a id="myModal_signu" onclick="display1()">LOGIN</a></li>
          <li><a id="myModal_btn" onclick="display()">SIGN UP</a></li>
  </ul>  
  </div></nav>
 

    </header>


<div align="center">
  <br>
    <h3 > <b>Professional Skills</b> </h3><br>
</div>

    <div align="center" style="overflow-x:auto; padding: 0%;margin: 0%">
      
    
    <div align="center"  id="content_skill" class="cont_skills" style="border:1px solid rgb(220, 220, 220); width:30%" >
        
        <div align="center" id="left1" style="font-weight:normal;color: green;margin:10%;">  
         <?php
                 $db = mysqli_connect('167.99.105.36', 'samiksha_0302', 'Sakshi12$', 'samiksha_webmanagement');
                        if (!$db) {
                        die("Connection failed: " . mysqli_connect_error());
                            }
                            $results = mysqli_query($db, "SELECT User_id, Skill_name,Proficiency FROM Skill where User_id='10001'");
                             while($row=mysqli_fetch_array($results))
                             {
                                echo '<p >'.$row["Skill_name"].'<span class="tab">&nbsp; &nbsp &nbsp; <span class="tab"> '.$row["Proficiency"].'%</p>
            <div class="w3-light-grey w3-tiny"> <div class="w3-container w3-green" style="width:'.$row["Proficiency"].'%;height:5px;float:left;"></div> </div>
            <p ><br>';
                             }
                    ?>
            <!--<p >HTML   <span class="tab"> <span class="tab"> 80%</p>
            <div class="w3-light-grey w3-tiny">
            <div class="w3-container w3-green" style="width:80%;height:5px"></div>
            </div>
            <p >JAVASCRIPT   <span class="tab">  &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; 60%</p>
              <div class="w3-light-grey w3-tiny">
              <div class="w3-container w3-green" style="width:60%;height:5px"></div>
              </div>
              <p >BOOTSTRAP   <span class="tab">  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 75%</p>
                <div class="w3-light-grey w3-tiny">
                <div class="w3-container w3-green" style="width:75%;height:5px"></div>-->
            </div>

        </div>   

     
<!-- The Modal -->
<div id="myModal" class="modal" style="overflow:auto;">

    <!-- Modal content -->
    <div class="modal-content">
      <span class="close">&times;</span>
      <form  method="post" action="home.php">
        <div class="modal-header" align="left">
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
        <div class="modal-header" align="left">
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