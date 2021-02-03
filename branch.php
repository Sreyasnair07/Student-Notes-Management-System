<?php
 $db_name = 'student notes management system';
   $host = 'localhost';
   $user = 'root';
   $password = '';


    $db = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  

session_start();




?>
<!DOCTYPE html>
<html>
<style>
  body {
  background-image: url('images/branchback.jpg');
  background-attachment: fixed;
  background-size: cover;
}

.button {
  position: fixed;
  right: 10px;
  bottom: 40px;
}

.button {
  padding: 5px 30px;
  font-size: 20px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 20px;
  box-shadow: 0 5px #999;
}

.button:hover {background-color: #3e8e41}

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



</style>

<div class="header">
  <center><img src="images/mitlogo.png" alt="logo" /></center>
</div>
<body bgcolor="white">
<h1 style="color:green; font-size:40px; "><center>Select Your Branch</center></h1>


<body>
<form action="sem.php" method="POST">
<input type="hidden" name="branch" value="ec">
<input type="image" src="images/ece.png"  name="branch" value='ec' width="230" height="230" alt="ec" />
</form>


<form action="sem.php" method="POST">
<input type="hidden" name="branch" value="me">
<input type="image" src="images/me.png"  name="branch" value='me' width="230" height="230" alt="me" style="float:left;margin:-235px 775px"  />
</form>



<form action="sem.php" method="POST">
<input type="hidden" name="branch" value="cs">
<input type="image" src="images/cse.png"  name="branch" value='cs' width="230" height="230" alt="cse" style="float:left;margin:-235px 515px" />
</form>


<form action="sem.php" method="POST">
<input type="hidden" name="branch" value="cv">
<input type="image" src="images/ce.png"  name="branch" value='cv' width="230" height="230" alt="cv" style="float:left;margin:-235px 255px"  />
</form>

 

<form action="sem.php" method="POST">
<input type="hidden" name="branch" value="is">
<input type="image" src="images/ise.png"  name="branch" value='is' width="230" height="230" alt="is" style="float:left;margin:-235px 1030px" />
</form>


</body> 

</div>
<h2 style="color:black; font-size:40px; font-style:italic;">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp"Knowledge Is Power."</h2>
<div>
	<button class="button"><a href="login.php">Logout</a></button>
</div>

</html>

 