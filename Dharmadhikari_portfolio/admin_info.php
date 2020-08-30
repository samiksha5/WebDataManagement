<?php include('server.php') ?>

<!DOCTYPE html>
<html>
<title>Admin Info | Administrator </title>

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link href="portfolio.css" rel="stylesheet" type="text/css">

<style>
.button1 {
  border-radius: 5px;
  background-color:lightgrey; 
  color: white; 
  margin:5px;
  border: 2px solid grey;
  background-size: 200% auto;
  padding: 10px; color: #FFFFFF;

}
.button1:hover{
            background-color: grey;
}
        body {font-family: Arial;}
        
        /* Style the tab */
        .tab {
          overflow: hidden;
          border: 1px solid #ccc;
          background-color: #bebebe9a;
          margin-left: 0%;
        }
        
        /* Style the buttons inside the tab */
        .tab button {
          background-color: inherit;
          float: left;
          border: none;
          outline: none;
          cursor: pointer;
          padding: 14px 16px;
          transition: 0.3s;
          font-size: 17px;
          margin: 10px;
        }
        
        /* Change background color of buttons on hover */
        .tab button:hover {
          background-color: #ddd;
        }
        
        /* Create an active/current tablink class */
        .tab button.active {
          background-color: #ccc;
        }
        
        /* Style the tab content */
        .tabcontent {
          display: none;
          padding:50px;
          border: 1px solid #ccc;
          border-top: none;
          

        }
        .Ab { display: block; width: 20em; float: left; margin-left: 350px;  }
        .container_abt
        {
            font-size: 19px;
        }
        @media only screen and (max-width: 768px){
            .device-big, .tab-content > .tab-pane {
        display: block;
        }
        .device-small {
        display: none;
        }
            .tabcontent > .container_abt> .Ab{
            display: block;
            margin-left: 0px; 
            float: none;
            width: 00em;
        } 
     }
     table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
    table-layout: fixed;

}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}


        </style>
         
<body >
    <script>
    function openCity(evt, cityName) {
                var i, tabcontent, tablinks;
                tabcontent = document.getElementsByClassName("tabcontent");
                for (i = 0; i < tabcontent.length; i++) {
                  tabcontent[i].style.display = "none";
                }
                tablinks = document.getElementsByClassName("tablinks");
                for (i = 0; i < tablinks.length; i++) {
                  tablinks[i].className = tablinks[i].className.replace(" active", "");
                }
                document.getElementById(cityName).style.display = "block";
                evt.currentTarget.className += " active";
              }
function myFunction() {
  var x = document.getElementById("myDIV");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
function myFunction1() {
  var x = document.getElementById("myDIV1");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
function myFunction2() {
  var x = document.getElementById("myDIV2");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
function myFunction3() {
  var x = document.getElementById("myDIV3");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
function myFunction4() {
  var x = document.getElementById("myDIV4");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
function myFunction5() {
  var x = document.getElementById("myDIV5");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
function myFunction6() {
  var x = document.getElementById("myDIV6");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
function myFunction7() {
  var x = document.getElementById("myDIV7");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}

</script>
<br>
        <div class="tab" align="center" >
                <button class="tablinks" onclick="openCity(event, 'Profilephoto')">Profile Photo</button>

                <button class="tablinks" onclick="openCity(event, 'About')">About</button>
                <button class="tablinks" onclick="openCity(event, 'Education')">Education</button>
                <button class="tablinks" onclick="openCity(event, 'Skills')">Skills</button>
                <button class="tablinks" onclick="openCity(event, 'Experience')">Experience</button>
                <button class="tablinks" onclick="openCity(event, 'Hire_me')">Hire Me</button>
                <button class="tablinks" onclick="openCity(event, 'Contact')">Contact</button>                
                <button class="tablinks" onclick="openCity(event, 'Blog')">Blogs</button>
                <button class="tablinks" onclick="openCity(event, 'Portfolio')">Portfolio</button>
                <button class="tablinks" onclick="openCity(event, 'Contacted_me')">Contacted Me</button>
                <button class="button1 button1" ><a href="home.php">Logout</a> </button>


              </div>
              
              <div id="Profilephoto" class="tabcontent"  >
                    <form method="post"  enctype="multipart/form-data" action="admin_info.php" >
                            <div class="container_abt" align="center">
                              <h2 align="center">Please add your profile photo </h2>
                              <hr>

                              <div style="display:block;overflow:auto;">
                              <table border="0">
                                  <tr>
                                       <label class="Ab"><b>User id:</b></label> 
                              <input type="number"  onkeypress="return event.charCode >= 48 && event.charCode <= 57" name="pid" style="width: 300px;height:50px" > <br> <br> 
                         </tr>
                                
                              <tr>
                            <label class="Ab"><b>Profile Image</b></label>
                           <input type="file" name="image" id="image" />  <br> <br> 
                              </tr>             
                              <tr>          
                              <button type="submit"  class="button button" name="add_profile">Add/Update</button>
                              </tr>
                              <hr>
                               <?php

                               $db = mysqli_connect('167.99.105.36', 'samiksha_0302', 'Sakshi12$', 'samiksha_webmanagement');

                        if (!$db) {
                        die("Connection failed: " . mysqli_connect_error());
                            }


                            $results = mysqli_query($db, "SELECT User_id,Photo FROM User");
                         echo '<table>';

                             echo '<tr><td>User ID</td>  <td>Photo</td></tr>';
                             while($row=mysqli_fetch_array($results))
                                 {
    
                                echo '<tr><td>'. $row["User_id"].' </td>';
                                header("Content-type: image/png"); 
                                echo '<td><img style="width:50%;border-radius: 5px;" src="data:image/jpeg;base64,'.base64_encode($row["Photo"] ).'"/></td></tr>'; 

                                 }
                                echo '  </table>';

                                ?>
  
                              </table>
                              </div>
                            </div>
                          
                          </form>
   
              </div>
              <div id="About" class="tabcontent"  >
                    <form method="post" action="admin_info.php">
                            <div class="container_abt" align="center">
                              <h2 align="center">Please enter your personal details </h2>
                              <hr>
                               <button class="button button" onclick="myFunction()">Edit </button>


                              <div style="display:block;overflow:auto;">
                              <table border="0">
                                  <tr><div id="myDIV" style="display:none">
                                       <label class="Ab"><b>User id:</b></label> 
                              <input type="number"  onkeypress="return event.charCode >= 48 && event.charCode <= 57" name="pid" style="width: 300px;height:50px" > <br> <br> 
                        </div> </tr>
                                <tr>
                              <label class="Ab"><b>Describe yourself in few words</b></label> 
                              <input type="text"  name="description" style="width: 300px;height:50px" required> <br> <br> 
                              </tr>
                              <tr>
                              <label class="Ab"><b>Address</b></label>
                              <input type="text"  name="address" style="width: 300px;height:50px" required> <br> <br> 
                              </tr>
                              <tr>
                              <label class="Ab"><b>Age</b></label>
                              <input type="number"  onkeypress="return event.charCode >= 48 && event.charCode <= 57" name="age" style="width: 300px;"required> <br> <br> 
                              </tr>
                              <tr>
                              <label class="Ab"><b>Email</b></label>
                              <input type="email"  name="email" style="width: 300px;" pattern ="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2, 4}$" required> <br> <br> 
                              </tr>
                              <tr>
                              <label class="Ab"><b>Phone number</b></label>
                              <input type="tel" onkeypress="return event.charCode >= 48 && event.charCode <= 57" pattern="[0-9]{10}" maxlength="10" name="phone_number" style="width: 300px;" required> <br> <br> 
                              </tr>
                              <tr>
                              <label class="Ab"><b>Languages</b></label>
                              <input type="text"  name="Languages" style="width: 300px;height:50px"required> <br> <br> 
                              </tr>             
                              <tr>          
                              <button type="submit" class="button button" name="user_about">Submit</button>
                              <button type="submit"  class="button button" name="edit_about">Update</button>
                              <button type="submit"  class="button button" name="delete_about">Delete</button>
                              </tr>
                              <hr>
                               <?php

                               $db = mysqli_connect('167.99.105.36', 'samiksha_0302', 'Sakshi12$', 'samiksha_webmanagement');

                        if (!$db) {
                        die("Connection failed: " . mysqli_connect_error());
                            }


                            $results = mysqli_query($db, "SELECT User_id,Description,Address,Age,Email,Phone_number,Language FROM About");
                         echo '<table>';

                             echo '<tr><td>User ID</td> <td> Description</td> <td>Address</td> <td>Age</td> <td>Email</td> <td>Phone number</td> <td>Language</td></tr>';
                             while($row=mysqli_fetch_array($results))
                                 {
    
                                echo '<tr><td>'. $row["User_id"].' </td> <td>'. $row["Description"].'</td>';
                                echo '<td>'.$row["Address"].'</td>';
                                echo '<td>'.$row["Age"].'</td>';
                                echo '<td>'.$row["Email"].'</td>';
                                echo '<td>'.$row["Phone_number"].'</td>';
                                echo '<td>'.$row["Language"].'</td>';

                                 }
                                echo '  </table>';

                                ?>
  
                              </table>
                              </div>
                            </div>
                          
                          </form>
   
              </div>
              
              <div id="Education" class="tabcontent" style="font-size: 19px;">
                    <form method="post" action="admin_info.php">
                            <div class="container_edu" align="center">
                              <h2 align="center">Please enter your Education details </h2>
                              <hr>
                            <button class="button button" onclick="myFunction1()">Edit </button>

                              <div style="overflow-x:auto;">
                                  <table border="0">
                              <tr><div id="myDIV1" style="display:none" >
                                       <label class="Ab"><b>Uder id:</b></label> 
                              <input type="number"  onkeypress="return event.charCode >= 48 && event.charCode <= 57"  name="id" style="width: 300px;height:50px" > <br> <br> 
                        </div> </tr>
                                    <tr>
                              <label class="Ab"><b>Your full name:</b></label> 
                              <input type="text"  name="name" style="width: 300px;" required> <br> <br> 
                              </tr>
                                    <tr>
                              <label class="Ab"><b>University</b></label> 
                              <input type="text"  name="University" style="width: 300px;" required> <br> <br> 
                              </tr>
                              <tr>
                              <label class="Ab"><b>Course</b></label>
                              <input type="text"  name="course" style="width: 300px;" required> <br> <br> 
                              </tr>
                              <tr>
                              <label class="Ab"><b>Passing Year</b></label>
                              <input type="number"  onkeypress="return event.charCode >= 48 && event.charCode <= 57" name="year" pattern="[0-9]{3}" style="width: 300px;" required> <br> <br> 
                              </tr>
                              <tr>
                              <label class="Ab"><b>Degree</b></label>
                              <input  type="radio" name="Degree" value="Master"> Master's
                              <input  type="radio" name="Degree" value="Bachelors "> Bachelor's
                              <input type="radio" name="Degree" value="HighSchool"> High School<br>  
                              </tr>
                              <tr>
                              <button type="submit" class="button button" name="user_edu">Submit</button>
                              <button type="submit"  class="button button" name="edit_education">Update</button>
                              <button type="submit"  class="button button" name="delete_edu">Delete</button>

                              </tr>
                              <?php

                               $db = mysqli_connect('167.99.105.36', 'samiksha_0302', 'Sakshi12$', 'samiksha_webmanagement');

                        if (!$db) {
                        die("Connection failed: " . mysqli_connect_error());
                            }

                             echo '<table>';

                            $results = mysqli_query($db, "SELECT User_id,Name,University,Course,Degree,Passing_year FROM Education");
                           echo '<tr><td>User Id</td> <td>Name</td> <td>University</td> <td>Course</td> <td>Degree</td><td>Passing year</td></tr>';
                            while($row=mysqli_fetch_array($results))
                             {
    
                              echo '<tr><td>'. $row["User_id"].' </td> ';
                                echo '<td>'.$row["Name"].'</td>';
                                echo '<td>'.$row["University"].'</td>';
                                echo '<td>'.$row["Course"].'</td>';
                                echo '<td>'.$row["Degree"].'</td>';
                                echo '<td>'.$row["Passing_year"].'</td>';

                                }
                                echo '  </table>';
                                ?>
                              </table>
                              </div>
                            </div>
                          
                          </form> 
              </div>

              <div id="Skills" class="tabcontent" style="font-size: 19px;">
                    <form method="post" action="admin_info.php" >
                            <div class="container_skill" align="center">
                              <h2 align="center">Please enter your Skills </h2>
                              <hr>
                              <button class="button button" onclick="myFunction2()">Edit </button>

                              <div style="overflow-x:auto;">
                                  <table border="0">
                                      <tr><div id="myDIV2" style="display:none" >
                                       <label class="Ab"><b>Uder id:</b></label> 
                              <input type="number"  onkeypress="return event.charCode >= 48 && event.charCode <= 57"  name="id" style="width: 300px;height:50px" > <br> <br> 
                        </div> </tr>
                                      <tr>
                              <label class="Ab"><b>Your full name:</b></label> 
                              <input type="text"  name="name" style="width: 300px;" required> <br> <br> 
                              </tr>
                                    <tr>
                              <label class="Ab"><b>Skill name</b></label> 
                              <input type="text"  name="skil" style="width: 300px;" required> <br> <br>
                              </tr>
                              <tr> 
                              <label class="Ab"><b>Proficiency %</b></label>
                              <input type="number"  onkeypress="return event.charCode >= 48 && event.charCode <= 57"  name="Proficiency" style="width: 300px;" required> <br> <br> 
                              </tr>
                              
                              </div>
                             <tr>                              
                              <button type="submit" class="button button" name="user_skill">Submit</button>
                              <button type="submit"  class="button button" name="edit_skill">Update</button></tr>
                                <button type="submit"  class="button button" name="delete_skill">Delete</button>

                              <?php

                               $db = mysqli_connect('167.99.105.36', 'samiksha_0302', 'Sakshi12$', 'samiksha_webmanagement');

                        if (!$db) {
                        die("Connection failed: " . mysqli_connect_error());
                            }

                             echo '<table>';

                            $results = mysqli_query($db, "SELECT User_id,Name,Skill_name,Proficiency FROM Skill");
                           echo '<tr><td>User Id</td> <td>Name</td> <td>Skill name</td> <td>Proficiency</td> </tr>';
                            while($row=mysqli_fetch_array($results))
                             {
    
                              echo '<tr><td>'. $row["User_id"].' </td> ';
                                echo '<td>'.$row["Name"].'</td>';
                                echo '<td>'.$row["Skill_name"].'</td>';
                                echo '<td>'.$row["Proficiency"].'</td>';
                                                   }
                                echo '  </table>';
                                ?>
                                
                                </table>
                            </div>
                          
                          </form> 
              </div>
              </div>
              <div id="Experience" class="tabcontent" style="font-size: 19px;">
                    <form method="post" action="admin_info.php">
                            <div class="container_exp" align="center">
                              <h2 align="center">Please enter your Work Experience details </h2>
                              <hr>
                              <button class="button button" onclick="myFunction3()">Edit </button>

                              <div style="overflow-x:auto;">
                                  <table border="0">
                                      <tr><div id="myDIV3" style="display:none" >
                                       <label class="Ab"><b>Uder id</b></label> 
                                    <input type="number"  onkeypress="return event.charCode >= 48 && event.charCode <= 57"  name="id" style="width: 300px;height:50px" > <br> <br> 
                                 </div> </tr>
                                      <tr>
                              <label class="Ab"><b>Your full name:</b></label>
                              <input type="text"  name="name" style="width: 300px;" required> <br> <br>
                              </tr>
                                    <tr>
                            <label class="Ab"><b>Start Date</b></label> 
                              <input type="date"  name="s_date" style="width: 300px;" required> <br> <br> 
                              </tr>
                              <tr>
                              <label class="Ab"><b>End Date</b></label>
                              <input type="date"  name="e_date" style="width: 300px;" required> <br> <br> 
                              </tr>
                              <tr>
                              <label class="Ab"><b>Job Title</b></label>
                              <input type="text"  name="J_title" style="width: 300px;" required> <br> <br>
                              </tr>
                              <tr> 
                              <label class="Ab"><b>Job Description</b></label>
                              <input type="text"  name="J_description" style="width: 300px;" required> <br> <br> 
                              </tr>
                              <tr>
                              <label class="Ab"><b>Company Name</b></label>
                              <input type="text"  name="C_name" style="width: 300px;" required> <br> <br> 
                              </tr>
                              <tr>                             
                              <button type="submit" class="button button" name="user_exp">Submit</button>
                              <button type="submit"  class="button button" name="edit_exp">Update</button></tr>
                              <button type="submit"  class="button button" name="delete_exp">Update</button></tr>
                              </tr>
                              <?php

                               $db = mysqli_connect('167.99.105.36', 'samiksha_0302', 'Sakshi12$', 'samiksha_webmanagement');

                        if (!$db) {
                        die("Connection failed: " . mysqli_connect_error());
                            }

                             echo '<table>';

                            $results = mysqli_query($db, "SELECT User_id,Name,Job_title,Job_description,Start_date,End_date,Company_name FROM Experience");
                           echo '<tr><td>User Id</td> <td>Name</td> <td>Job Title</td> <td>Job Description</td><td> Start_date</td><td>End_date</td> <td>Company name</td></tr>';
                            while($row=mysqli_fetch_array($results))
                             {
    
                              echo '<tr><td>'. $row["User_id"].' </td> ';
                                echo '<td>'.$row["Name"].'</td>';
                                echo '<td>'.$row["Job_title"].'</td>';
                                echo '<td>'.$row["Job_description"].'</td>';
                                echo '<td>'.$row["Start_date"].'</td>';
                                echo '<td>'.$row["End_date"].'</td>';
                                echo '<td>'.$row["Company_name"].'</td>';
                                                   }
                                echo '  </table>';
                                ?>
                                
                                  </table>
                                  </div>
                            </div>
                          
                          </form> 
              </div>

              <div id="Hire_me" class="tabcontent" style="font-size: 19px;">
                    <form method="post" action="admin_info.php">
                            <div class="container_hire" align="center">
                              <h2 align="center">Please enter your Hire me details </h2>
                              <hr>
                         <button class="button button" onclick="myFunction4()">Edit </button>

                              <div style="overflow-x:auto;">
                                  <table border="0">
                                      <tr><div id="myDIV4" style="display:none" >
                                       <label class="Ab"><b>Uder id</b></label> 
                                    <input type="number"  onkeypress="return event.charCode >= 48 && event.charCode <= 57"  name="id" style="width: 300px;height:50px" > <br> <br> 
                                 </div> </tr>
                                      <tr>
                              <label class="Ab"><b>Your full name:</b></label>
                              <input type="text"  name="name" style="width: 300px;" required> <br> <br>
                              </tr>
                                    <tr>
                              <label class="Ab"><b>Work Position</b></label>
                              <input type="text"  name="position" style="width: 300px;" required> <br> <br>
                              </tr>
                              <tr> 
                              <label class="Ab"><b>Work Description</b></label>
                              <input type="text"  name="w_description" style="width: 300px;" required> <br> <br> 
                              </tr>
                              <tr>
                              <label class="Ab"><b>Salary</b></label>
                              <input type="number"  onkeypress="return event.charCode >= 48 && event.charCode <= 57" name="Salary" style="width: 300px;" required> <br> <br>
                              </tr>
                             
                               <tr>
                              <button type="submit" class="button button" name="user_hire">Submit</button>
                              <button type="submit"  class="button button" name="edit_hire">Update</button></tr>
                              <button type="submit"  class="button button" name="delete_hire">Delete</button></tr>
                              </tr>                              </table>
                             <?php

                               $db = mysqli_connect('167.99.105.36', 'samiksha_0302', 'Sakshi12$', 'samiksha_webmanagement');

                        if (!$db) {
                        die("Connection failed: " . mysqli_connect_error());
                            }

                             echo '<table>';

                            $results = mysqli_query($db, "SELECT User_id,Name,Salary,Work_position,Work_description FROM Hire_me");
                           echo '<tr><td>User Id</td> <td>Name</td> <td>Salary</td> <td>Work Position</td><td> Work Description</td> </tr>';
                            while($row=mysqli_fetch_array($results))
                             {
    
                              echo '<tr><td>'. $row["User_id"].' </td> ';
                                echo '<td>'.$row["Name"].'</td>';
                                echo '<td>'.$row["Salary"].'</td>';
                                echo '<td>'.$row["Work_position"].'</td>';
                                echo '<td>'.$row["Work_description"].'</td>';
                               }
                                echo '  </table>';
                                ?>
                            </div>
                        </div>
                          </form> 
            </div>
             <div id="Contact" class="tabcontent" style="font-size: 19px;">
                    <form  method="post" action="admin_info.php">
                            <div class="container_contact" align="center">
                              <h2 align="center">Please enter your Contact details </h2>
                              <hr>
                              
                              <button class="button button" onclick="myFunction6()">Edit </button>

                              <div style="overflow-x:auto;">
                                  <table border="0">
                                      <tr><div id="myDIV6" style="display:none" >
                                       <label class="Ab"><b>Uder id</b></label> 
                                    <input type="number"  onkeypress="return event.charCode >= 48 && event.charCode <= 57"  name="id" style="width: 300px;height:50px" > <br> <br> 
                                 </div> </tr>
                                    <tr>
                              <label class="Ab"><b> Name</b></label>
                              <input type="text"  name="name" style="width: 300px;" required> <br> <br> 
                             </tr>
                             <tr>
                              <label class="Ab"><b>Email</b></label>
                              <input type="text"  name="email" style="width: 300px;" pattern ="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2, 4}$" required> <br> <br> 
                               </tr>
                               <tr>
                              <label class="Ab"><b>Phone_number</b></label>
                              <input type="tel" pattern="[0-9]{10}" onkeypress="return event.charCode >= 48 && event.charCode <= 57"  name="phn_no" style="width: 300px;" required> <br> <br> 
                               </tr>
                               <tr>
                               <button type="submit" class="button button" name="user_contact">Submit</button>
                              <button type="submit"  class="button button" name="edit_contact">Update</button></tr>
                              <button type="submit"  class="button button" name="delete_contact">Delete</button></tr>

                              </tr>
                              </table>
                              <?php

                               $db = mysqli_connect('167.99.105.36', 'samiksha_0302', 'Sakshi12$', 'samiksha_webmanagement');

                        if (!$db) {
                        die("Connection failed: " . mysqli_connect_error());
                            }

                             echo '<table>';

                            $results = mysqli_query($db, "SELECT User_id,Name,Email,Phone_number FROM Contact_us");
                           echo '<tr><td>User Id</td> <td>Name</td> <td>Email</td> <td>Phone number</td></tr>';
                            while($row=mysqli_fetch_array($results))
                             {
    
                              echo '<tr><td>'. $row["User_id"].' </td> ';
                                echo '<td>'.$row["Name"].'</td>';
                                echo '<td>'.$row["Email"].'</td>';
                                echo '<td>'.$row["Phone_number"].'</td>';
                               }
                                echo '  </table>';
                                ?>
                              </div>
                            </div>
                          
                          </form> 
                  </div>
             <div id="Portfolio" class="tabcontent" style="font-size: 19px;">
                    <form  method="post" action="admin_info.php" enctype="multipart/form-data">
                            <div class="container_contact" align="center">
                              <h2 align="center">Please enter your Portfolio details </h2>
                              <hr>
                         <button class="button button" onclick="myFunction7()">Edit </button>

                              <div style="overflow-x:auto;">
                                  <table border="0">
                                      <tr><div id="myDIV7" style="display:none" >
                                       <label class="Ab"><b>Project id</b></label> 
                                    <input type="number"  onkeypress="return event.charCode >= 48 && event.charCode <= 57"  name="pid" style="width: 300px;height:50px" > <br> <br> 
                                 </div> </tr>
                                      <tr>
                                       <label class="Ab"><b>User id</b></label> 
                                    <input type="number"  onkeypress="return event.charCode >= 48 && event.charCode <= 57"  name="id" style="width: 300px;height:50px" > <br> <br> 
                                  </tr>
                                    <tr>
                              <label class="Ab"><b> Name</b></label>
                              <input type="text"  name="name" style="width: 300px;" required> <br> <br> 
                             </tr>
                             <tr>
                              <label class="Ab"><b>Project name</b></label>
                              <input type="text"  name="pname" style="width: 300px;" required> <br> <br> 
                               </tr>
                               <tr>
                              <label class="Ab"><b>Portfolio</b></label>
                              <!--<input type="number"  name="portfolio_img" style="width: 300px;" required>-->
                                                   <input type="file" name="image" id="image" />  <br> <br> 
                               </tr>
                               <tr>
                               <button type="submit" class="button button" name="user_port">Submit</button>
                              <button type="submit"  class="button button" name="edit_port">Update</button></tr>
                              <button type="submit"  class="button button" name="delete_port">Delete</button></tr>

                              </tr>
                              </table>
                              
                              
                              
                              
                              <?php

                               $db = mysqli_connect('167.99.105.36', 'samiksha_0302', 'Sakshi12$', 'samiksha_webmanagement');

                        if (!$db) {
                        die("Connection failed: " . mysqli_connect_error());
                            }

                             echo '<table>';

                            $results = mysqli_query($db, "SELECT User_id,User_name,pid,Project_name,Website_page FROM Portfolio");
                           echo '<tr><td>User Id</td> <td>Name</td><td>Project id</td> <td>Project Name</td> <td>Website Page</td></tr>';
                            while($row=mysqli_fetch_array($results))
                             {
    
                              echo '<tr><td>'. $row["User_id"].' </td> ';
                                echo '<td>'.$row["User_name"].'</td>';
                                echo '<td>'.$row["pid"].'</td>';
                                echo '<td>'.$row["Project_name"].'</td>';
                                header("Content-type: image/png"); 
                                echo '<td><img style="width:100%;border-radius: 0px;" src="data:image/jpeg;base64,'.base64_encode(  $row['Website_page'] ).'"/></td>';

                               }
                                echo '  </table>';
                                ?>
                              </div>
                            </div>
                          
                          </form> 
                  </div>

              <div id="Blog" class="tabcontent" style="font-size: 19px;">
                    <form method="post" action="admin_info.php">
                            <div class="container_blog" align="center">
                              <h2 align="center">Please enter your Blog details </h2>
                              <hr>
                             <button class="button button" onclick="myFunction5()">Edit </button>

                              <div style="overflow-x:auto;">
                                  <table border="0">
                                      <tr><div id="myDIV5" style="display:none" >
                                       <label class="Ab"><b>Uder id</b></label> 
                                    <input type="number"  onkeypress="return event.charCode >= 48 && event.charCode <= 57"  name="id" style="width: 300px;height:50px" > <br> <br> 
                                 </div> </tr>
                                    <tr>
                              <label class="Ab"><b>Title</b></label>
                              <input type="text"  name="blog_name" style="width: 300px;" required> <br> <br> 
                              </tr>
                              <tr>
                              <label class="Ab"><b>Author</b></label>
                              <input type="text"  name="auth_name" style="width: 300px;" required> <br> <br> 
                              </tr>
                              <tr>
                              <label class="Ab"><b>Webpage Link</b></label>
                              <input type="url"  name="W_link" style="width: 300px;" required> <br> <br> 
                              </tr>
                             
                              <tr>
                             <button type="submit" class="button button" name="user_blog">Submit</button>
                              <button type="submit"  class="button button" name="edit_blog">Update</button></tr>
                              <button type="submit"  class="button button" name="delete_blog">Delete</button></tr>

                              </tr>
                                                           <?php

                               $db = mysqli_connect('167.99.105.36', 'samiksha_0302', 'Sakshi12$', 'samiksha_webmanagement');

                        if (!$db) {
                        die("Connection failed: " . mysqli_connect_error());
                            }

                             echo '<table>';

                            $results = mysqli_query($db, "SELECT User_id,Title,Author,App_design_link FROM Blog");
                           echo '<tr><td>User Id</td> <td>Title</td> <td>Author</td> <td>Webpage Link</td></tr>';
                            while($row=mysqli_fetch_array($results))
                             {
    
                              echo '<tr><td>'. $row["User_id"].' </td> ';
                                echo '<td>'.$row["Title"].'</td>';
                                echo '<td>'.$row["Author"].'</td>';
                                echo '<td>'.$row["App_design_link"].'</td>';
                               }
                                echo '  </table>';
                                ?>
                              </table>
                              </div>
                            </div>
                          
                          </form> 
                  </div>

              <div id="Contacted_me" class="tabcontent" style="font-size: 19px;">
                    <form method="post" action="admin_info.php">
                            <div class="container_blog" align="center">
                              <h2 align="center">People contacted you: </h2>
                              <hr>
                             
                              <div style="overflow-x:auto;">
                                  <table border="0">
                                      
                                                           <?php

                               $db = mysqli_connect('167.99.105.36', 'samiksha_0302', 'Sakshi12$', 'samiksha_webmanagement');

                        if (!$db) {
                        die("Connection failed: " . mysqli_connect_error());
                            }

                             echo '<table>';

                            $results = mysqli_query($db, "SELECT name,subject,email,message FROM Contacted_me");
                           echo '<tr><td>Name</td> <td>Subject</td> <td>Email</td> <td>Message</td></tr>';
                            while($row=mysqli_fetch_array($results))
                             {
    
                              echo '<tr><td>'. $row["name"].' </td> ';
                                echo '<td>'.$row["subject"].'</td>';
                                echo '<td>'.$row["email"].'</td>';
                                echo '<td>'.$row["message"].'</td>';
                               }
                                echo '  </table>';
                                ?>
                              </table>
                              </div>
                            </div>
                          
                          </form> 
                  </div>
              

</body>

</html>