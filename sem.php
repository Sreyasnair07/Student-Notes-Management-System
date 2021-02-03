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



 

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
   body {
  background-image: url('images/semback.jpg');
  background-attachment: fixed;
  background-size: cover;
}

.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}

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

<h1 style="color:green; font-size:40px; font-style:;">Select Your Subject</h1>

<div class="dropdown" >
  <button class="dropbtn">First Year</button>
  <div class="dropdown-content">
     <?php
     $var=$_POST['branch'];
     $sql1="select * from subject where deptid='FY'  ";
     $sql_row1=mysqli_query($db,$sql1);
      while($sql_res1=mysqli_fetch_assoc($sql_row1))
      {
      ?>
      <a href="view.php?subcode=<?php echo $sql_res1['subcode']; ?>" value="<?php echo $sql_res1['subcode']; ?>"  ><?php echo $sql_res1["subname"]; ?></a>
      <?php
      }
      ?> 
  </div>
</div>
<div class="dropdown" >
  <button class="dropbtn">Mathematics</button>
  <div class="dropdown-content">
     <?php
     $var=$_POST['branch'];
     $sql1="select * from subject where deptid='MAT'  ";
     $sql_row1=mysqli_query($db,$sql1);
      while($sql_res1=mysqli_fetch_assoc($sql_row1))
      {
      ?>
      <a href="view.php?subcode=<?php echo $sql_res1['subcode']; ?>" value="<?php echo $sql_res1['subcode']; ?>" ><?php echo $sql_res1["subname"]; ?></a>
      <?php
      }
      ?> 
  </div>
</div>

<div class="dropdown">
  <button class="dropbtn">3rd</button>
  <div class="dropdown-content">
     <?php
     $var=$_POST['branch'];
     $sql1="select * from subject where deptid='$var' and sem='3'  ";
     $sql_row1=mysqli_query($db,$sql1);
      while($sql_res1=mysqli_fetch_assoc($sql_row1))
      {
      ?>
       
       <a href="view.php?subcode=<?php echo $sql_res1['subcode']; ?>" value="<?php echo $sql_res1['subcode']; ?>"><?php echo $sql_res1["subname"]; ?></a> 
      

      <?php
      }
      ?> 
  </div>
</div>

<div class="dropdown">
  <button class="dropbtn">4th</button>
  <div class="dropdown-content">
     <?php
      $var=$_POST['branch'];
     $sql1="select * from subject where deptid='$var' and sem='4' ";
     $sql_row1=mysqli_query($db,$sql1);
      while($sql_res1=mysqli_fetch_assoc($sql_row1))
      {
      ?>
      <a href="view.php?subcode=<?php echo $sql_res1['subcode']; ?>" value="<?php echo $sql_res1['subcode']; ?>" ><?php echo $sql_res1["subname"]; ?></a>
      <?php
      }
      ?> 
  </div>
</div>

<div class="dropdown">
  <button class="dropbtn">5th</button>
  <div class="dropdown-content">
     <?php
     $var=$_POST['branch'];
     $sql1="select * from subject where deptid='$var' and sem='5'  ";
     $sql_row1=mysqli_query($db,$sql1);
      while($sql_res1=mysqli_fetch_assoc($sql_row1))
      {
      ?>
      <a href="view.php?subcode=<?php echo $sql_res1['subcode']; ?>" value="<?php echo $sql_res1['subcode']; ?>" ><?php echo $sql_res1["subname"]; ?></a>
      <?php
      }
      ?> 
  </div>
</div>

<div class="dropdown">
  <button class="dropbtn">6th</button>
  <div class="dropdown-content">
    <?php
    $var=$_POST['branch'];
     $sql1="select * from subject where deptid='$var' and sem='6' ";
     $sql_row1=mysqli_query($db,$sql1);
      while($sql_res1=mysqli_fetch_assoc($sql_row1))
      {
      ?>
      <a href="view.php?subcode=<?php echo $sql_res1['subcode']; ?>" value="<?php echo $sql_res1['subcode']; ?>" ><?php echo $sql_res1["subname"]; ?></a>
      <?php
      }
      ?> 
  </div>
</div>

<div class="dropdown">
  <button class="dropbtn">7th</button>
  <div class="dropdown-content">
    <?php
    $var=$_POST['branch'];
     $sql1="select * from subject where deptid='$var' and sem='7' ";
     $sql_row1=mysqli_query($db,$sql1);
      while($sql_res1=mysqli_fetch_assoc($sql_row1))
      {
      ?>
      <a href="view.php?subcode=<?php echo $sql_res1['subcode']; ?>" value="<?php echo $sql_res1['subcode']; ?>" ><?php echo $sql_res1["subname"]; ?></a>
      <?php
      }
      ?> 
  </div>
</div>

<div class="dropdown">
  <button class="dropbtn">8th</button>
  <div class="dropdown-content">
    <?php
    $var=$_POST['branch'];
     $sql1="select * from subject where deptid='$var' and sem='8' ";
     $sql_row1=mysqli_query($db,$sql1);
      while($sql_res1=mysqli_fetch_assoc($sql_row1))
      {
      ?>
      <a href="view.php?subcode=<?php echo $sql_res1['subcode']; ?>" value="<?php echo $sql_res1['subcode']; ?>" ><?php echo $sql_res1["subname"]; ?></a>
      <?php
      }
      ?> 
  </div>
</div>
<img src="images/semimg.png" alt="dev"  width="450" height="300" style="float:right;margin:-150px 200px" >

</body>
</html>