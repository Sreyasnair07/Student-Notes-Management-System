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




if($_SERVER["REQUEST_METHOD"] == "POST") {
   


   if(isset($_POST['action']) && $_POST['action'] == "admin"){
        $myusername = mysqli_real_escape_string($db,$_POST['username']);
        $mypassword = mysqli_real_escape_string($db,$_POST['psw']); 
      
        $sql = " SELECT mgrid,password from department ,faculty where mgrid=fid and fid = '$myusername' and password = '$mypassword'";
        $result = mysqli_query($db,$sql) ;//or die( mysqli_error($db));
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
        if($count == 1) {
           header("location: admin.php");
        }else {
           $error = "Invalid Username or Password";
        }
      }
 
    elseif(isset($_POST['action']) && $_POST['action'] == "student"){
        $myusername = mysqli_real_escape_string($db,$_POST['username']);
        $mypassword = mysqli_real_escape_string($db,$_POST['psw']); 
      
        $sql = " SELECT usn,dob FROM student WHERE usn = '$myusername' and dob = '$mypassword'";
        $result = mysqli_query($db,$sql) ;//or die( mysqli_error($db));
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
        if($count == 1) {
           header("location: branch.php");
        }else {
           $error = "Invalid Username or Password";
        }
      }



    elseif(isset($_POST['action']) && $_POST['action'] == "faculty")
      {  
        $myusername = mysqli_real_escape_string($db,$_POST['uname']);
        $mypassword = mysqli_real_escape_string($db,$_POST['psw']); 
        
        $sql = " SELECT fid,password FROM faculty WHERE fid = '$myusername' and password = '$mypassword'";
        $result = mysqli_query($db,$sql) ;
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
        if($count == 1) {
          header("location: faculty.php");
        }else {
           $error = "Invalid Username or Password";
        }
     }
  }


?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  background-image: url('images/loginback.jpg');
  background-attachment: fixed;
  background-size: cover;
}
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 1% auto 5% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 50%;/* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
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
</style>

</head>

<div>
<body>
<div class="header">
   <center><img src="images/mitlogo.png" alt="logo"></center>
  
</div>
<h2 style="color:green; font-size:50px;">Save papers! Save trees!</h2>



<div class="login-block">
  <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Admin Login</button>

  <div id="id01" class="modal">
    
    <form class="modal-content animate" action="<?php echo $_SERVER['SCRIPT_NAME']; ?>" method="POST">
      <input type="hidden" name="action" value="admin">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="images/logo.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <h2 style="color:green;">Admin</h2>
      <label for="username"><b>Admin id</b></label>
      <input type="text" placeholder="Enter Your Faculty id" name="username" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit" value="adminLogin" name="adminLogin">Login</button>
      
    </div>
        <div style = "font-size:20px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      
    </div>
    </form>
  </div>
</div>


<div class="login-block">
  <button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Student Login</button>

  <div id="id02" class="modal">
    
    <form class="modal-content animate" action="<?php echo $_SERVER['SCRIPT_NAME']; ?>" method="POST">
      <input type="hidden" name="action" value="student">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="images/logo.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
          <h2 style="color:green;">Student</h2>
      <label for="username"><b>USN</b></label>
      <input type="text" placeholder="Enter USN" name="username" required>

      <label for="psw"><b>Password(dob)</b></label>
      <input type="password" placeholder="Enter Password (yyyy-mm-dd)" name="psw" required>
        
      <button type="submit" value="studentLogin" name="studentLogin">Login</button>
      
    </div>
       <div style = "font-size:20px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
      
    </div>
    </form>
  </div>
</div>


<div class="login-block">
  <button onclick="document.getElementById('id03').style.display='block'" style="width:auto;">Faculty Login</button>

  <div id="id03" class="modal">
    
    <form class="modal-content animate" action="<?php echo $_SERVER['SCRIPT_NAME']; ?>" method="POST">
      <input type="hidden" name="action" value="faculty">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="images/logo.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
          <h2 style="color:green;">Faculty</h2>
      <label for="uname"><b>Faculty id</b></label>
      <input type="text" placeholder="Enter Your Faculty id" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit">Login</button>
      
    </div>
    <div style = "font-size:20px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id03').style.display='none'" class="cancelbtn">Cancel</button>
      
    </div>
    </form>
  </div>
</div>
<script>
// Get the modal
var modal = document.getElementById('id01');
var modal1 = document.getElementById('id02');
var modal2 = document.getElementById('id03');
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
    if (event.target == modal1) {
        modal1.style.display = "none";
    }
    if (event.target == modal2) {
        modal2.style.display = "none";
    }
}
</script>



<body>

</body>
</body>
</html>
