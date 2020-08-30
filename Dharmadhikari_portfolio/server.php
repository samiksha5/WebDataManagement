
<?php
session_start();
$firstname="";
$lastname="";
$username = "";
$email    = "";
$password1="";
$password2="";
$errors=array();


// connect to the database
$db = mysqli_connect('167.99.105.36', 'samiksha_0302', 'Sakshi12$', 'samiksha_webmanagement');

if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}


// LOGIN USER
if (isset($_POST['login_user'])) {
     
   

  $username = $_POST['user'];
  $password = $_POST['pass'];

  if (empty($username)) {
  	array_push($errors, "Username is required");
  	  echo '<script language="javascript"> alert("Username is required");</script>';}

  
  if (empty($password)) {
  	array_push($errors, "Password is required");
  	  echo '<script language="javascript"> alert("Password is required");</script>'; }

  
  if (count($errors) == 0) {
   $q1= "SELECT Count(*) As count,Role FROM User WHERE Username='$username' AND Password='$password'";
   $main1= mysqli_query($db, $q1);
   $result2=mysqli_fetch_assoc($main1);
   
   if($result2)
   {
       $id1=(int)$result2["count"];
   if($id1==1)
   {
     echo "You are now logged in";

       if($result2["Role"]=='Admin')
       {
        echo  "<script>
      window.location.href = 'https://samiksha0302.uta.cloud/admin_info.php';
    </script>";
       }
   }
   else
   {
    echo '<script language="javascript"> alert("Wrong username/password combination");</script>';
     echo  "<script>
      window.location.href = 'https://samiksha0302.uta.cloud/home.php';
    </script>";}
   }
  }
}


// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $firstname =  $_POST['fname'];
  $lastname =  $_POST['lname'];
  $username =  $_POST['username'];
  $email =  $_POST['email'];
  $password_1 =  $_POST['password1'];
  $password_2 =  $_POST['password2'];
  $user= $_POST['user'];
  $pass=$_POST['pass'];

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($firstname)) { array_push($errors, "Firstname is required"); 
  echo "Firstname is required"; }
  if (empty($lastname)) {  array_push($errors, "Lastname is required");
  echo "Lastname is required"; }

  if (empty($username)) {   array_push($errors, "Username is required");
  echo "Username is required"; }

  if (empty($email)) { array_push($errors, "Email is required");
  echo "Email is required"; }
  if (empty($password_1)) { array_push($errors, "Password is required"); 
  echo "Password is required"; }
  if ($password_1 != $password_2) {
	echo "The two passwords do not match";
  }

 $name= $firstname . " ". $lastname;
 
 // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT Username FROM User";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user) { // if user exists
      
      if ($user['Username'] === $username) {
      array_push($errors, "Username already exists");
      
echo '<script language="javascript"> alert("Username already exists");</script>';
    }
  }
  else
  {
  if (count($errors) == 0) {

   $q= "SELECT Count(*) As count, User_id FROM User";
   $main= mysqli_query($db, $q);
   $result1=mysqli_fetch_assoc($main);
   
   if($result1)
   {
       $id=(int)$result1["count"];
       if($id>=0)
       {
           $id++;
          $nid= '1000'.$id;
          $q2="INSERT INTO User (User_id,Name,Email,Username,Password,Role) values ('$nid','$name', '$email', '$username', '$password_1','User')";
          if($main2=mysqli_query($db,$q2))
              echo '<script language="javascript"> alert("Records added successfully.");</script>';
          else
              echo '<script language="javascript"> alert("ERROR: Could not able to execute $sql. " '. mysqli_error($db).');</script>';
       }
   }
   
  }
else
    echo '<script language="javascript"> alert("ERROR: Could not able to execute $sql. " '. mysqli_error($db).');</script>';
}
}

if (isset($_POST['user_about'])) {
 $description =  $_POST['description'];
  $addr =  $_POST['address'];
  $age =  $_POST['age'];
  $ema =  $_POST['email'];
  $phn =  $_POST['phone_number'];
  $lang =  $_POST['Languages'];

 if (empty($description)) { array_push($errors, "Description is required"); 
  echo "Description is required"; }

 if (empty($addr)) { array_push($errors, "Address is required"); 
  echo "Address is required"; }
  
   if (empty($ema)) { array_push($errors, "Email is required"); 
  echo "Email is required"; }
   if (empty($phn)) { array_push($errors, "Phone number is required"); 
  echo "Phone number is required"; }

 if (empty($lang)) { array_push($errors, "Language is required"); 
  echo "Language is required"; }
  

$q4= "SELECT Count(*) As count, User_id FROM User where Email='$ema'";
   $main4= mysqli_query($db, $q4);
   $result4=mysqli_fetch_assoc($main4);
   
   if($result4)
   {
       $id=(int)$result4["count"];
       if($id== 1)
       {
          $nid= (int)$result4["User_id"];

          $q5="INSERT INTO About (User_id,Description,Address,Age,Email,Phone_number,Language) values ('$nid','$description', '$addr', '$age', '$ema','$phn','$lang')";
          if($main2=mysqli_query($db,$q5))
             echo '<script language="javascript"> alert("Records added successfully.");</script>';

          else
              echo '<script language="javascript"> alert("ERROR: Could not able to execute $sql. " '. mysqli_error($db).');</script>';
       }
       else
              echo '<script language="javascript"> alert("Records dont match database! ");</script>';
   }
    
}

if (isset($_POST['delete_about'])) {
    $pid=$_POST['pid'];
 $description =  $_POST['description'];
  $addr =  $_POST['address'];
  $age =  $_POST['age'];
  $ema =  $_POST['email'];
  $phn =  $_POST['phone_number'];
  $lang =  $_POST['Languages'];

 if (empty($pid)) { array_push($errors, "User id is required"); 
  echo "User id is required"; }
  
   if (empty($description)) { array_push($errors, "Description is required"); 
  echo "Description is required"; }

 if (empty($addr)) { array_push($errors, "Address is required"); 
  echo "Address is required"; }
  
   if (empty($ema)) { array_push($errors, "Email is required"); 
  echo "Email is required"; }
   if (empty($phn)) { array_push($errors, "Phone number is required"); 
  echo "Phone number is required"; }

 if (empty($lang)) { array_push($errors, "Language is required"); 
  echo "Language is required"; }
  
$q4= "SELECT Count(*) As count, User_id FROM User where Email='$ema' and User_id='$pid'";
   $main4= mysqli_query($db, $q4);
   $result4=mysqli_fetch_assoc($main4);
   
   if($result4)
   {
       $id=(int)$result4["count"];
       if($id== 1)
       {
         
          $q5="DELETE FROM About WHERE Email='$ema' and User_id='$pid'";
          if($main2=mysqli_query($db,$q5))
             echo '<script language="javascript"> alert("Records deleted successfully.");</script>';
          else
              echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
       }
       else
            echo "You need to sign up first";
   }
    
}

if(isset($_POST['delete_edu']))
{
    $id=$_POST['id'];
     $name =  $_POST['name'];
  $uni=  $_POST['University'];
  $course =  $_POST['course'];
  $year =  $_POST['year'];
  $degree =  $_POST['Degree'];


 if (empty($pid)) { array_push($errors, "User id is required"); 
  echo "User id is required"; }
  
   if (empty($name)) { array_push($errors, "Name is required"); 
  echo "Name is required"; } 
 
  if (empty($uni)) { array_push($errors, "University is required");
  echo "University is required"; } 
  
  
 if (empty($course)) { array_push($errors, "Course is required"); 
  echo "Course is required"; }
  
   if (empty($year)) { array_push($errors, "Year is required"); 
  echo "Year is required"; }
  
   if (empty($degree)) { array_push($errors, "Degree is required"); 
  echo "Degree is required"; }
  
   if (count($errors) == 0){
 
      $q8= "DELETE FROM Education WHERE User_id='$id' && Name='$name'";
   if(mysqli_query($db, $q8))
             echo '<script language="javascript"> alert("Records deleted successfully.");</script>';
 else {
    echo "Error updating record: " . mysqli_error($db);
}
   }  
    
}
if(isset($_POST['delete_skill']))
{
    $id=$_POST['id'];
     $name =  $_POST['name'];
  $skill=  $_POST['skil'];
  $prof =  $_POST['Proficiency'];
 
 
  if (empty($id)) { array_push($errors, "User id is required");
  echo "User id is required"; } 
   if (empty($name)) { array_push($errors, "Name is required"); 
  echo "Name is required"; }
   if (empty($skill)) { array_push($errors, "Skill is required"); 
  echo "Skill is required"; }
   if (empty($prof)) { array_push($errors, "Proficiency is required"); 
  echo "Proficiency is required"; }
   if (count($errors) == 0){
 
      $q8= "DELETE FROM Skill WHERE User_id='$id' && Name='$name' ";
   if(mysqli_query($db, $q8))
             echo '<script language="javascript"> alert("Records deleted successfully.");</script>';
 else {
    echo "Error updating record: " . mysqli_error($db);
}
}  
}
if(isset($_POST['delete_exp']))
{
 $id=$_POST['id'];
 $name= $_POST['name'];
 $s_date= $_POST['s_date'];
 $e_date=$_POST['e_date'];
 $title= $_POST['J_title'];
  $description =  $_POST['J_description'];
  $company =  $_POST['C_name'];
 
  if (empty($id)) { array_push($errors, "User id is required");
  echo "User id is required"; } 
   if (empty($name)) { array_push($errors, "Name is required"); 
  echo "Name is required"; }
   if (empty($s_date)) { array_push($errors, "Start date is required"); 
  echo "Start date is required"; }
   if (empty($e_date)) { array_push($errors, "End date is required"); 
  echo "End date is required"; }
   if (empty($title)) { array_push($errors, "Title is required"); 
  echo "Title is required"; }
   if (empty($description)) { array_push($errors, "Description is required"); 
  echo "Description is required"; }
   if (empty($company)) { array_push($errors, "Company is required"); 
  echo "Company is required"; }
  
   if (count($errors) == 0){
 
      $q8= " DELETE FROM Experience WHERE User_id='$id' && Name='$name' ";
   if(mysqli_query($db, $q8))
             echo '<script language="javascript"> alert("Records deleted successfully.");</script>';
 else {
    echo "Error updating record: " . mysqli_error($db);
}
}  
}


if(isset($_POST['delete_hire']))
{
 $id=$_POST['id'];
  $name= $_POST['name'];
 $position= $_POST['position'];
 $description=$_POST['w_description'];
 $salary= $_POST['Salary'];
 
  if (empty($id)) { array_push($errors, "User id is required");
  echo "User id is required"; }
   if (empty($name)) { array_push($errors, "Name is required"); 
  echo "Year is required"; }
   if (empty($position)) { array_push($errors, "Position is required"); 
  echo "Position is required"; }
   if (empty($description)) { array_push($errors, "Description is required"); 
  echo "Description is required"; }
   if (empty($salary)) { array_push($errors, "Salary is required"); 
  echo "Salary is required"; }
  
   if (count($errors) == 0){
 
      $q8= "DELETE FROM Hire_me WHERE User_id='$id' && Name='$name' ";
   if(mysqli_query($db, $q8))
             echo '<script language="javascript"> alert("Records deleted successfully.");</script>';
 else {
    echo "Error updating record: " . mysqli_error($db);
}
}  
}
if(isset($_POST['delete_contact']))
{
 $id=$_POST['id'];
 $name= $_POST['name'];
 $email=$_POST['email'];
 $phn_no= $_POST['phn_no'];
 
  if (empty($id)) { array_push($errors, "User id is required");
  echo "User id is required"; } 
   if (empty($name)) { array_push($errors, "Name is required"); 
  echo "Name is required"; }
   if (empty($email)) { array_push($errors, "Email is required"); 
  echo "Email is required"; }
   if (empty($phone)) { array_push($errors, "Phone number is required"); 
  echo "Phone number is required"; }
  
  
   if (count($errors) == 0){
 
      $q8= "DELETE FROM Contact_us WHERE User_id='$id' && Author='$name' ";
   if(mysqli_query($db, $q8))
             echo '<script language="javascript"> alert("Records deleted successfully.");</script>';
 else {
    echo "Error updating record: " . mysqli_error($db);
}
}  
}


if(isset($_POST['delete_port']))
{
    $pid=$_POST['pid'];
 $id=$_POST['id'];
 $uname= $_POST['name'];
 $pname=$_POST['pname'];
$wpage= $_POST['image'];

$image = $_FILES['image']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));
 
  if (empty($id)) { array_push($errors, "User id is required");
  echo "User id is required"; } 
   if (empty($pid)) { array_push($errors, "Portfolio id is required"); 
  echo "Portfolio id is required"; }
   if (empty($uname)) { array_push($errors, "Username is required"); 
  echo "Username is required"; }
   if (empty($pname)) { array_push($errors, "Portfolio name is required"); 
  echo "Portfolio name is required"; }
   
  
   if (count($errors) == 0){
 
      $q8= "DELETE FROM Portfolio WHERE User_id='$id' && User_name='$uname' && Project_name='$pname' && pid='$pid' ";
   if(mysqli_query($db, $q8))
             echo '<script language="javascript"> alert("Records deleted successfully.");</script>';
 else {
    echo "Error updating record: " . mysqli_error($db);
}
}  
}


if(isset($_POST['delete_blog']))
{
     $id=$_POST['id'];

     $bname= $_POST['blog_name'];
 $name= $_POST['auth_name'];
 $link=$_POST['W_link'];
    if (empty($bname)) { array_push($errors, "Blog name is required"); 
  echo "Blog name is required"; }
   if (empty($name)) { array_push($errors, "Name is required"); 
  echo "Name is required"; }
   if (empty($link)) { array_push($errors, "Link is required"); 
  echo "Link is required"; }
 if (empty($id)) { array_push($errors, "User id is required");
  echo "User id is required"; } 
  
   if (count($errors) == 0){
 
      $q8= "DELETE FROM Blog WHERE User_id='$id' && Author='$name' && Title='$bname' && App_design_link='$link' ";
   if(mysqli_query($db, $q8))
             echo '<script language="javascript"> alert("Records deleted successfully.");</script>';
 else {
    echo "Error updating record: " . mysqli_error($db);
}
}  
}


if(isset($_POST['delete_contact']))
{
 $id=$_POST['id'];
 $name= $_POST['name'];
 $email=$_POST['email'];
 $phn_no= $_POST['phn_no'];
 
  if (empty($id)) { array_push($errors, "User id is required");
  echo "User id is required"; }
   if (empty($name)) { array_push($errors, "Name is required"); 
  echo "Name is required"; }
   if (empty($email)) { array_push($errors, "Email is required"); 
  echo "Email is required"; }
   if (empty($phn_no)) { array_push($errors, "Phone number is required"); 
  echo "Phone number is required"; }
  
   if (count($errors) == 0){
 
      $q8= "DELETE FROM  Contact_us WHERE User_id='$id' && Author='$name' ";
   if(mysqli_query($db, $q8))
             echo '<script language="javascript"> alert("Records deleted successfully.");</script>';
 else {
    echo "Error updating record: " . mysqli_error($db);
}
}  
}


if (isset($_POST['user_edu'])) {
 $university =  $_POST['University'];
 $name= $_POST['name'];
  $course =  $_POST['course'];
  $year =  $_POST['year'];
  $degree =  $_POST['Degree'];
  
  
   if (empty($name)) { array_push($errors, "Name is required"); 
  echo "Name is required"; } 
 
  if (empty($university)) { array_push($errors, "University is required");
  echo "University is required"; } 
  
  
 if (empty($course)) { array_push($errors, "Course is required"); 
  echo "Course is required"; }
  
   if (empty($year)) { array_push($errors, "Year is required"); 
  echo "Year is required"; }
  
   if (empty($degree)) { array_push($errors, "Degree is required"); 
  echo "Degree is required"; }
if (count($errors) == 0){
$q4= "SELECT Count(*) As count, User_id FROM User where Name='$name'";
   $main4= mysqli_query($db, $q4);
   $result4=mysqli_fetch_assoc($main4);
   
   if($result4)
   {
       $id=(int)$result4["count"];
       if($id== 1)
       {
          $nid= (int)$result4["User_id"];

    $q7= "SELECT Count(*) As count1 FROM Education";
   $main7= mysqli_query($db, $q7);
   $result7=mysqli_fetch_assoc($main7);
    $num=(int)$result7["count1"];
$num++;
          $q5="INSERT INTO Education (Edu_id,User_id,Name, University,Course,Degree,Passing_year) values ('$num','$nid','$name','$university', '$course', '$degree', '$year')";
          if($main2=mysqli_query($db,$q5))
             echo '<script language="javascript"> alert("Records added successfully.");</script>';
          else
              echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
       }
       else
            echo "You need to sign up first";
   }
}
    
}

if (isset($_POST['user_skill'])) {
 $name= $_POST['name'];
  $skill =  $_POST['skil'];
  $prof =  $_POST['Proficiency'];

   if (empty($name)) { array_push($errors, "Name is required"); 
  echo "Name is required"; }
   if (empty($skill)) { array_push($errors, "Skill is required"); 
  echo "Skill is required"; }
   if (empty($prof)) { array_push($errors, "Proficiency is required"); 
  echo "Proficiency is required"; }
  if (count($errors) == 0){
$q4= "SELECT Count(*) As count, User_id FROM User where Name='$name'";
   $main4= mysqli_query($db, $q4);
   $result4=mysqli_fetch_assoc($main4);
   
   if($result4)
   {
       $id=(int)$result4["count"];
       if($id== 1)
       {
          $nid= (int)$result4["User_id"];

    $q7= "SELECT Count(*) As count1 FROM Skill";
   $main7= mysqli_query($db, $q7);
   $result7=mysqli_fetch_assoc($main7);
    $num=(int)$result7["count1"];
    $num++;
          $q5="INSERT INTO Skill (Skill_id,User_id,Name, Skill_name,Proficiency) values ('$num','$nid','$name','$skill', '$prof')";
          if($main2=mysqli_query($db,$q5))
             echo '<script language="javascript"> alert("Records added successfully.");</script>';
          else
              echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
       }
       else
            echo "You need to sign up first";
   }
  }
    
}


if (isset($_POST['user_exp'])) {
 $name= $_POST['name'];
 $s_date= $_POST['s_date'];
 $e_date=$_POST['e_date'];
 $title= $_POST['J_title'];
  $description =  $_POST['J_description'];
  $company =  $_POST['C_name'];

  
   if (empty($name)) { array_push($errors, "Name is required"); 
  echo "Name is required"; }
   if (empty($s_date)) { array_push($errors, "Start date is required"); 
  echo "Start date is required"; }
   if (empty($e_date)) { array_push($errors, "End date is required"); 
  echo "End date is required"; }
   if (empty($title)) { array_push($errors, "Title is required"); 
  echo "Title is required"; }
   if (empty($description)) { array_push($errors, "Description is required"); 
  echo "Description is required"; }
   if (empty($company)) { array_push($errors, "Company is required"); 
  echo "Company is required"; }

if (count($errors) == 0){

$q4= "SELECT Count(*) As count, User_id FROM User where Name='$name'";
   $main4= mysqli_query($db, $q4);
   $result4=mysqli_fetch_assoc($main4);
   
   if($result4)
   {
       $id=(int)$result4["count"];
       if($id== 1)
       {
          $nid= (int)$result4["User_id"];

    $q7= "SELECT Count(*) As count1 FROM Experience";
   $main7= mysqli_query($db, $q7);
   $result7=mysqli_fetch_assoc($main7);
    $num=(int)$result7["count1"];
    $num++;
          $q5="INSERT INTO Experience (Job_id,User_id,Name, Start_date,End_date,Job_title,Job_description,Company_name) values ('$num','$nid','$name','$s_date', '$e_date','$title','$description','$company')";
          if($main2=mysqli_query($db,$q5))
             echo '<script language="javascript"> alert("Records added successfully.");</script>';
          else
              echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
       }
       else
            echo "You need to sign up first";
   }
}
}

if (isset($_POST['user_hire'])) {
 $name= $_POST['name'];
 $position= $_POST['position'];
 $description=$_POST['w_description'];
 $salary= $_POST['Salary'];


  
   if (empty($name)) { array_push($errors, "Name is required"); 
  echo "Year is required"; }
   if (empty($position)) { array_push($errors, "Position is required"); 
  echo "Position is required"; }
   if (empty($description)) { array_push($errors, "Description is required"); 
  echo "Description is required"; }
   if (empty($salary)) { array_push($errors, "Salary is required"); 
  echo "Salary is required"; }
  
   if (count($errors) == 0){

$q4= "SELECT Count(*) As count, User_id FROM User where Name='$name'";
   $main4= mysqli_query($db, $q4);
   $result4=mysqli_fetch_assoc($main4);
   
   if($result4)
   {
       $id=(int)$result4["count"];
       if($id== 1)
       {
          $nid= (int)$result4["User_id"];

    $q7= "SELECT Count(*) As count1 FROM Hire_me";
   $main7= mysqli_query($db, $q7);
   $result7=mysqli_fetch_assoc($main7);
    $num=(int)$result7["count1"];
    $num++;
          $q5="INSERT INTO Hire_me (Work_id,User_id,Name,Salary, Work_position,Work_description,Contact_link) values ('$num','$nid','$name','$salary', '$position','$description','https://samiksha0302.uta.cloud/contact.html')";
          if($main2=mysqli_query($db,$q5))
             echo '<script language="javascript"> alert("Records added successfully.");</script>';
          else
              echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
       }
       else
            echo "You need to sign up first";
   }
   }   
}

if (isset($_POST['user_blog'])) {
 $bname= $_POST['blog_name'];
 $name= $_POST['auth_name'];
 $link=$_POST['W_link'];

   if (empty($bname)) { array_push($errors, "Blog name is required"); 
  echo "Blog name is required"; }
   if (empty($name)) { array_push($errors, "Name is required"); 
  echo "Name is required"; }
   if (empty($link)) { array_push($errors, "Link is required"); 
  echo "Link is required"; }

   if (count($errors) == 0){
$q4= "SELECT Count(*) As count, User_id FROM User where Name='$name'";
   $main4= mysqli_query($db, $q4);
   $result4=mysqli_fetch_assoc($main4);
   
   if($result4)
   {
       $id=(int)$result4["count"];
       if($id== 1)
       {
          $nid= (int)$result4["User_id"];
         echo $nid;

    $q7= "SELECT Count(*) As count1 FROM Blog";
   $main7= mysqli_query($db, $q7);
   $result7=mysqli_fetch_assoc($main7);
    $num=(int)$result7["count1"];
    $num++;
          $q5="INSERT INTO Blog (Blog_id,User_id,Title,Author,App_design_link) values ('$num','$nid','$bname','$name','$link')";
          if($main2=mysqli_query($db,$q5))
             echo '<script language="javascript"> alert("Records added successfully.");</script>';
          else
              echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
       }
       else
            echo "You need to sign up first";
   }
   }
}

if (isset($_POST['user_contact'])) {
 $name= $_POST['name'];
 $email=$_POST['email'];
$phn_no= $_POST['phn_no'];

   if (empty($name)) { array_push($errors, "Name is required"); 
  echo "Name is required"; }
   if (empty($email)) { array_push($errors, "Email is required"); 
  echo "Email is required"; }
   if (empty($phone)) { array_push($errors, "Phone number is required"); 
  echo "Phone number is required"; }
  
   if (count($errors) == 0){

$q4= "SELECT Count(*) As count, User_id FROM User where Name='$name'";

   $main4= mysqli_query($db, $q4);
   $result4=mysqli_fetch_assoc($main4);
   
   if($result4)
   {
       $id=(int)$result4["count"];
       if($id== 1)
       {
          $nid= (int)$result4["User_id"];

    $q7= "SELECT Count(*) As count1 FROM Contact_us";
   $main7= mysqli_query($db, $q7);
   $result7=mysqli_fetch_assoc($main7);
    $num=(int)$result7["count1"];
    $num++;
          $q5="INSERT INTO Contact_us (Contact_id,User_id,Name,Email,Phone_number) values ('$num','$nid','$name','$email','$phn_no')";
          if($main2=mysqli_query($db,$q5))
             echo '<script language="javascript"> alert("Records added successfully.");</script>';
          else
              echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
       }
       else
            echo "You need to sign up first";
   }
   }
}


if (isset($_POST['contact_page_data'])) {
 
 $name= $_POST['name'];
 $email=$_POST['email'];
$subject= $_POST['subject'];
$message=$_POST['message'];
if (empty($name)) { array_push($errors, "Name is required");
  echo "Name is required"; } 
   if (empty($email)) { array_push($errors, "Email is required"); 
  echo "Email is required"; }
   if (empty($subject)) { array_push($errors, "Subject is required"); 
  echo "Subject is required"; }
   if (empty($message)) { array_push($errors, " Message is required"); 
  echo "Message is required"; }
  
  
   if (count($errors) == 0){
          $q5="INSERT INTO Contacted_me (name,subject,email,message) values ('$name','$subject','$email','$message')";
          if($main2=mysqli_query($db,$q5))
             echo '<script language="javascript"> alert("Records added successfully.");</script>';
          else
              echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
   }
}


if (isset($_POST['user_port'])) {
 $uname= $_POST['name'];
 $pname=$_POST['pname'];
$wpage= $_POST['image'];


   
   if (empty($uname)) { array_push($errors, "Username is required"); 
  echo "Username is required"; }
   if (empty($pname)) { array_push($errors, "Portfolio name is required"); 
  echo "Portfolio name is required"; }
 
  
   if (count($errors) == 0){

$q4= "SELECT Count(*) As count, User_id FROM User where Name='$uname'";

   $main4= mysqli_query($db, $q4);
   $result4=mysqli_fetch_assoc($main4);
   
   if($result4)
   {
       
        
       $id=(int)$result4["count"];
       if($id== 1)
       {
       
          $nid= (int)$result4["User_id"];

$image = $_FILES['image']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));
        
        $q7= "SELECT Count(*) As count1 FROM Portfolio";
   $main7= mysqli_query($db, $q7);
   $result7=mysqli_fetch_assoc($main7);
    $num=(int)$result7["count1"];
    $num++;
          $q5="INSERT INTO Portfolio (pid,Project_name,User_name,User_id,Website_page) values ('$num','$pname','$uname','$nid','$imgContent')";
          if($main2=mysqli_query($db,$q5))
             echo '<script language="javascript"> alert("Records added successfully.");</script>';
          else
              echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
       }
       else
            echo "You need to sign up first";
    }
   
   }  
    
}

if(isset($_POST['edit_about']))
{
    $id=$_POST['id'];
     $description =  $_POST['description'];
  $addr =  $_POST['address'];
  $age =  $_POST['age'];
  $ema =  $_POST['email'];
  $phn =  $_POST['phone_number'];
  $lang =  $_POST['Languages'];
 
  if (empty($id)) { array_push($errors, "User id is required");
  echo "User id is required"; } 
  
   if (empty($description)) { array_push($errors, "Description is required"); 
  echo "Description is required"; }

 if (empty($addr)) { array_push($errors, "Address is required"); 
  echo "Address is required"; }
  
   if (empty($ema)) { array_push($errors, "Email is required"); 
  echo "Email is required"; }
   if (empty($phn)) { array_push($errors, "Phone number is required"); 
  echo "Phone number is required"; }

 if (empty($lang)) { array_push($errors, "Language is required"); 
  echo "Language is required"; }
  
   if (count($errors) == 0){
 
      $q8= "UPDATE About SET Description='$description', Address='$addr', Age='$age',Email='$ema',Phone_number='$phn',Language='$lang' WHERE User_id='$id'";
   if(mysqli_query($db, $q8))
             echo '<script language="javascript"> alert("Records updated successfully.");</script>';
 else {
    echo "Error updating record: " . mysqli_error($db);
}
   }  
    
}

if(isset($_POST['edit_education']))
{
    $id=$_POST['id'];
     $name =  $_POST['name'];
  $uni=  $_POST['University'];
  $course =  $_POST['course'];
  $year =  $_POST['year'];
  $degree =  $_POST['Degree'];
  
     if (empty($name)) { array_push($errors, "Name is required"); 
  echo "Name is required"; } 
 
  if (empty($university)) { array_push($errors, "University is required");
  echo "University is required"; } 
  
  
 if (empty($course)) { array_push($errors, "Course is required"); 
  echo "Course is required"; }
  
   if (empty($year)) { array_push($errors, "Year is required"); 
  echo "Year is required"; }
  
   if (empty($degree)) { array_push($errors, "Degree is required"); 
  echo "Degree is required"; }

 
  if (empty($id)) { array_push($errors, "User id is required");
  echo "User id is required"; } 
   if (count($errors) == 0){
 
      $q8= "UPDATE Education SET University='$uni', Course='$course',Degree='$degree',Passing_year='$year' WHERE User_id='$id' && Name='$name' ";
   if(mysqli_query($db, $q8))
             echo '<script language="javascript"> alert("Records updated successfully.");</script>';
 else {
    echo "Error updating record: " . mysqli_error($db);
}
   }  
    
}
if(isset($_POST['edit_skill']))
{
    $id=$_POST['id'];
     $name =  $_POST['name'];
  $skill=  $_POST['skil'];
  $prof =  $_POST['Proficiency'];
 
    if (empty($name)) { array_push($errors, "Name is required"); 
  echo "Name is required"; }
   if (empty($skill)) { array_push($errors, "Skill is required"); 
  echo "Skill is required"; }
   if (empty($prof)) { array_push($errors, "Proficiency is required"); 
  echo "Proficiency is required"; }
 
  if (empty($id)) { array_push($errors, "User id is required");
  echo "User id is required"; } 
   if (count($errors) == 0){
 
      $q8= "UPDATE Skill SET Skill_name='$skill', Proficiency='$prof' WHERE User_id='$id' && Name='$name' ";
   if(mysqli_query($db, $q8))
             echo '<script language="javascript"> alert("Records updated successfully.");</script>';
 else {
    echo "Error updating record: " . mysqli_error($db);
}
}  
}

if(isset($_POST['edit_exp']))
{
 $id=$_POST['id'];
 $name= $_POST['name'];
 $s_date= $_POST['s_date'];
 $e_date=$_POST['e_date'];
 $title= $_POST['J_title'];
  $description =  $_POST['J_description'];
  $company =  $_POST['C_name'];
 
  if (empty($name)) { array_push($errors, "Name is required"); 
  echo "Name is required"; }
   if (empty($s_date)) { array_push($errors, "Start date is required"); 
  echo "Start date is required"; }
   if (empty($e_date)) { array_push($errors, "End date is required"); 
  echo "End date is required"; }
   if (empty($title)) { array_push($errors, "Title is required"); 
  echo "Title is required"; }
   if (empty($description)) { array_push($errors, "Description is required"); 
  echo "Description is required"; }
   if (empty($company)) { array_push($errors, "Company is required"); 
  echo "Company is required"; }

  if (empty($id)) { array_push($errors, "User id is required");
  echo "User id is required"; } 
   if (count($errors) == 0){
 
      $q8= "UPDATE Experience SET Start_date='$s_date', End_date='$e_date',Job_title='$title',Job_description='$description',Company_name='$company' WHERE User_id='$id' && Name='$name' ";
   if(mysqli_query($db, $q8))
             echo '<script language="javascript"> alert("Records updated successfully.");</script>';
 else {
    echo "Error updating record: " . mysqli_error($db);
}
}  
}


if(isset($_POST['edit_hire']))
{
 $id=$_POST['id'];
  $name= $_POST['name'];
 $position= $_POST['position'];
 $description=$_POST['w_description'];
 $salary= $_POST['Salary'];
 
    if (empty($name)) { array_push($errors, "Name is required"); 
  echo "Year is required"; }
   if (empty($position)) { array_push($errors, "Position is required"); 
  echo "Position is required"; }
   if (empty($description)) { array_push($errors, "Description is required"); 
  echo "Description is required"; }
   if (empty($salary)) { array_push($errors, "Salary is required"); 
  echo "Salary is required"; }

  if (empty($id)) { array_push($errors, "User id is required");
  echo "User id is required"; } 
   if (count($errors) == 0){
 
      $q8= "UPDATE Hire_me SET Salary='$salary', Work_position='$position',Work_description='$description' WHERE User_id='$id' && Name='$name' && Work_position='$position' ";
   if(mysqli_query($db, $q8))
             echo '<script language="javascript"> alert("Records updated successfully.");</script>';
 else {
    echo "Error updating record: " . mysqli_error($db);
}
}  
}

if(isset($_POST['edit_blog']))
{
 $id=$_POST['id'];
  $bname= $_POST['blog_name'];
 $name= $_POST['auth_name'];
 $link=$_POST['W_link'];
 
 
  if (empty($id)) { array_push($errors, "User id is required");
  echo "User id is required"; }
   if (empty($bname)) { array_push($errors, "Blog name is required"); 
  echo "Blog name is required"; }
   if (empty($name)) { array_push($errors, "Name is required"); 
  echo "Name is required"; }
   if (empty($link)) { array_push($errors, "Link is required"); 
  echo "Link is required"; }

   if (count($errors) == 0){
 
      $q8= "UPDATE Blog SET Title='$bname', App_design_link='$link' WHERE User_id='$id' && Author='$name' ";
   if(mysqli_query($db, $q8))
             echo '<script language="javascript"> alert("Records updated successfully.");</script>';
 else {
    echo "Error updating record: " . mysqli_error($db);
}
}  
}

if(isset($_POST['edit_contact']))
{
 $id=$_POST['id'];
 $name= $_POST['name'];
 $email=$_POST['email'];
 $phn_no= $_POST['phn_no'];
 
 if (empty($name)) { array_push($errors, "Name is required"); 
  echo "Name is required"; }
   if (empty($email)) { array_push($errors, "Email is required"); 
  echo "Email is required"; }
   if (empty($phone)) { array_push($errors, "Phone number is required"); 
  echo "Phone number is required"; }
  if (empty($id)) { array_push($errors, "User id is required");
  echo "User id is required"; } 
   if (count($errors) == 0){
 
      $q8= "UPDATE Contact_us SET Name='$name', Email='$email', Phone_number WHERE User_id='$id' && Author='$name' ";
   if(mysqli_query($db, $q8))
             echo '<script language="javascript"> alert("Records updated successfully.");</script>';
 else {
    echo "Error updating record: " . mysqli_error($db);
}
}  
}

if(isset($_POST['edit_port']))
{
    $pid=$_POST['pid'];
 $id=$_POST['id'];
 $uname= $_POST['name'];
 $pname=$_POST['pname'];
$wpage= $_POST['image'];
if (empty($uname)) { array_push($errors, "Username is required"); 
  echo "Username is required"; }
   if (empty($pname)) { array_push($errors, "Portfolio name is required"); 
  echo "Portfolio name is required"; }
  
  
$image = $_FILES['image']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));
 
  if (empty($id)) { array_push($errors, "User id is required");
  echo "User id is required"; } 
   if (count($errors) == 0){
 
      $q8= "UPDATE Portfolio SET Project_name='$pname', Website_page='$imgContent' WHERE User_id='$id' && User_name='$uname'  && pid='$pid' ";
   if(mysqli_query($db, $q8))
             echo '<script language="javascript"> alert("Records updated successfully.");</script>';
 else {
    echo "Error updating record: " . mysqli_error($db);
}
}  
}

if(isset($_POST['add_profile']))
{
    $pid=$_POST['pid'];
$photo= $_POST['image'];
 
$image = $_FILES['image']['tmp_name'];
$imgContent = addslashes(file_get_contents($image));
  if (empty($pid)) { array_push($errors, "User id is required");
  echo "User id is required"; } 
  
   if (count($errors) == 0){
 
      $q8= "UPDATE User SET Photo='$imgContent' WHERE User_id='$pid' ";
   if(mysqli_query($db, $q8))
             echo '<script language="javascript"> alert("Records updated successfully.");</script>';
 else {
    echo "Error updating record: " . mysqli_error($db);
}
}  
}


?>
