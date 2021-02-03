<?php
 // define database related variables
   $db_name = 'student notes management system';
   $host = 'localhost';
   $user = 'root';
   $password = '';


    $db = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  

session_start();
$error="";
if(isset($_POST['Insert']))
    {
        if(empty($_POST['usn']) || empty($_POST['name']) || empty($_POST['did']) || empty($_POST['dob']))
        {
            echo ' Please Fill in the Blanks ';
        }
        else
        {
            $usn = $_POST['usn'];
            $name = $_POST['name'];
            $did = $_POST['did'];
            $dob = $_POST['dob'];
            
            $query = " insert into student (usn, studentname,deptid,dob) values('$usn','$name','$did','$dob')";
            $result = mysqli_query($db,$query);

            if($result)
            {
               echo "Successfully Inserted";
            }
            else
            {   
                echo 'Data in this USN alredy inserted, Please try to Update';
            }
        }
    }


elseif(isset($_POST['Update']))
    {
        if(empty($_POST['usn']) || empty($_POST['name']) || empty($_POST['did']) || empty($_POST['dob']))
        {
            echo ' Please Fill in the Blanks ';
        }
        else
        {
            $usn = $_POST['usn'];
            $name = $_POST['name'];
            $did = $_POST['did'];
            $dob = $_POST['dob'];
            
            $query = " update student set studentname='$name',deptid='$did',dob='$dob' where usn='$usn' ";
            $result = mysqli_query($db,$query);

             if($result)
            {
               echo " Successfully Updated";
            }
            else
            {
                echo 'Something Went Wrong';
            }
        }
    }
   

     elseif(isset($_POST['Delete']))
    {
        if(empty($_POST['usn'])  )
        {
            echo ' Please Fill in the Blanks ';
        }
        else
        {
            $usn = $_POST['usn'];
            $query = " delete from student where usn='$usn'";
            $result = mysqli_query($db,$query);

            if($result)
            {
               echo "Successfully Deleted";
            }
            else
            {
                echo 'Something Went Wrong';
            }
        }
    }


     elseif(isset($_POST['Search']))
    {
        if(!empty($_POST['usn'])  )
        {   
            $fid = $_POST['usn'];
           $sql="SELECT * FROM student WHERE usn like '%$_POST[usn]%'";
           $result=mysqli_query($db,$sql);
           if($result->num_rows > 0)
           {	
	           echo "<table border='1'>
	            <tr>
				<th>USN</th>
				<th>Name</th>
				<th>Department</th>
				<th>Date Of Birth</th>
				</tr>";

				while($row = mysqli_fetch_array($result))
				{
				echo "<tr><td>" . $row['usn'] . "</td>";
				echo "<td>" . $row['studentname'] . "</td>";
				echo "<td>" . $row['deptid'] . "</td>";
				echo "<td>" . $row['dob'] . "</td></tr>";
				}

				echo "</table>";
		   }
		   else{echo 'Data not Found.';}
        }
        elseif(!empty($_POST['name']))
        {
           $name = $_POST['name'];
           $sql="SELECT * FROM student WHERE studentname like '%$_POST[name]%'";
           $result=mysqli_query($db,$sql);
           if($result->num_rows > 0)
           {
           echo "<table border='1'>
	            <tr>
				<th>USN</th>
				<th>Name</th>
				<th>Department</th>
				<th>Date Of Birth</th>
				</tr>";

				while($row = mysqli_fetch_array($result))
				{
				echo "<tr><td>" . $row['usn'] . "</td>";
				echo "<td>" . $row['studentname'] . "</td>";
				echo "<td>" . $row['deptid'] . "</td>";
				echo "<td>" . $row['dob'] . "</td></tr>";
				}

				echo "</table>";
		   }
		    else{echo 'Data not Found.';}
        }
         elseif(!empty($_POST['did']))
        {
           $name = $_POST['did'];
          $sql="SELECT * FROM student WHERE deptid like '%$_POST[did]%'";
           $result=mysqli_query($db,$sql);
            if($result->num_rows > 0)
           {
           echo "<table border='1'>
	            <tr>
				<th>USN</th>
				<th>Name</th>
				<th>Department</th>
				<th>Date Of Birth</th>
				</tr>";

				while($row = mysqli_fetch_array($result))
				{
				echo "<tr><td>" . $row['usn'] . "</td>";
				echo "<td>" . $row['studentname'] . "</td>";
				echo "<td>" . $row['deptid'] . "</td>";
				echo "<td>" . $row['dob'] . "</td></tr>";
				}

				echo "</table>";
           }
			 else{echo 'Data not Found.';}
        }
    }






?>
<!DOCTYPE html>
<html>
    <body bgcolor="white">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>

          body {
  background-image: url('images/loginbackground.jpg');
  background-attachment: fixed;
  background-size: cover;
}
        	<style>
              .button:active {
              background-color: #3e8e41;
              box-shadow: 0 5px #666;
              transform: translateY(4px);
            }
                    .header img {
                      float: center;
                      width: 1200px;
                      height: 100px;
                      background: #555;
                    }
                    
                    .header h1 {
                      position: relative;
                      top: 18px;
                      left: 10px;
                    }
                    </style>
                    </head>
                    <body>
                    <div class="header">
                       <center><img src="images/mitlogo.png" alt="logo"></center>
  
                    </div>
                      <style>
                        ul {
                          list-style-type: none;
                          margin:0px;
                          padding: 0px;
                          overflow: hidden;
                          background-color: #333;
                          bottom: 0;
                          width: 100%;
                        }
                        
                        li {
                          float: left;
                        }
                        li {
                            float: left;
            }



                        
                        li a {
                          display: block;
                          color: white;
                          text-align: center;
                          padding: 14px 16px;
                          text-decoration: none;
                        }
                        
                        li a:hover {
                          background-color: #111;
                        }
                        </style>
                        </head>
                        <body>
                        
            <ul>
              <li><a class="tablinks" onclick="openCity(event, 'view')" id="defaultOpen">$</a></li>
              <li><a class="tablinks" onclick="openCity(event, 'Insert')">Insert </a></li>
              <li><a class="tablinks" onclick="openCity(event, 'Update')">Update </a></li>
              <li><a class="tablinks" onclick="openCity(event, 'Delete')">Remove </a></li>
              <li><a class="tablinks" onclick="openCity(event, 'Search')">Search </a></li>
              <li style="float:right"><a class="active" href="login.php">Logout</a></li>
            </ul>
        <div id="view" class="tabcontent">
           
          <img src="images/college.gif" alt="college"  style=" width:1247px ">
          
       </div>

        <div id="Insert" class="tabcontent">
  				<h3 style="color:green; font-size:45px; ">Insert Student</h3>
          <form method="POST">
  				  <p>
              <label  style="font-size:30px">USN &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp:</label>
                <input type="text" name="usn" placeholder="Enter USN" class="form-control mb-2" required>
              </p>
             <p>
              <label  style="font-size:30px">Student Name  :</label>
              <input type="text" name="name" placeholder="Enter Student Name" class="form-control mb-2" required>
            </p>
              <p>
                  <label  style="font-size:30px">Department Id&nbsp:</label>
                  <input type="text" name="did" placeholder="Enter CS/CV/EC/IS/ME" class="form-control mb-2" required>
                </p>
  
                <p>
                  <label  style="font-size:30px">Date of Birth &nbsp :</label>
                 <input type="Date"  name="dob" placeholder="YYYY-MM-DD" class="form-control mb-2" required>
                </p>
                <input type="submit" value="Insert" name="Insert">
          </form>
           <img src="images/in.png" alt="in" style="float:right;margin:-250px 100px">
		   	</div>


		<div id="Update" class="tabcontent">
  		   <h3 style="color:green; font-size:45px; ">Update Student</h3>
           <form method="POST">
            <p>
               <label  style="font-size:30px">USN &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp:</label>
               <input type="text" name="usn" placeholder="Enter USN" class="form-control mb-2" required>
            </p>
            <p>
               <label  style="font-size:30px">Student Name  :</label>
               <input type="text" name="name" placeholder="Enter Student Name" class="form-control mb-2" required>
            </p>
            <p>
               <label  style="font-size:30px">Department Id&nbsp:</label>
               <input type="text" name="did" placeholder="Enter CS/CV/EC/IS/ME" class="form-control mb-2" required>
            </p>
            <p>
               <label  style="font-size:30px">Date of Birth &nbsp :</label>
               <input type="Date"  name="dob" placeholder="YYYY-MM-DD" class="form-control mb-2" required>
            </p>
            <input type="submit" value="Update" name="Update">
          </form>
          <img src="images/up.png" alt="in" style="float:right;margin:-250px 100px">
        </div>

			<div id="Delete" class="tabcontent">
  				<h3 style="color:green; font-size:45px; ">Remove Student</h3>
          <form method="POST">
  				<p>
           <label style="font-size:30px">USN &nbsp &nbsp:</label>
           <input type="text" name="usn" placeholder="Enter USN" class="form-control mb-2" required>
            </p>	
            <input type="submit" value="Delete" name="Delete">
            </form>	
            <img src="images/dlt.png" alt="dlt" style="float:right;margin:-150px 100px">
			</div>
            

            <div id="Search" class="tabcontent">
  				<h3 style="color:green; font-size:45px; ">Search for Student</h3>
          <form method="POST">
  				  <p>
              <label  style="font-size:30px">Search by USN &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp:</label>
                <input type="Search" name="usn" placeholder="Enter USN" class="form-control mb-2" required>
                <input type="submit" value="Search" name="Search">
              </p>
           </form>
            <form method="POST">
             <p>
              <label  style="font-size:30px"> Search by Student Name  :</label>
              <input type="text" name="name" placeholder="Enter Student Name" class="form-control mb-2" required>
               <input type="submit" value="Search" name="Search">
            </p>
        </form>
               <form method="POST">
              <p>
                  <label  style="font-size:30px"> Search by Department &nbsp &nbsp&nbsp:</label>
                  <input type="text" name="did" placeholder="Enter CS/CV/EC/IS/ME" class="form-control mb-2" required>
                   <input type="submit" value="Search" name="Search">
                </p>
               
          </form>
           <img src="images/se.png" alt="in" style="float:right;margin:-250px 100px">
		   	</div>

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

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
            
            
            
            
</html>