<!DOCTYPE html>
<html>
<head>
<style>
  .header img {
  float: center;
  width: 1250px;
  height: 100px;
  background: #555;
}

.header h1 {
  position: relative;
  top: 18px;
  left: 10px;
}
.button1 {
  position: fixed;
  left: 10px;
  bottom: 150px;
}
.button2 {
  position: fixed;
  left: 200px;
  bottom: 150px;
}
.button3 {
  position: fixed;
  left: 400px;
  bottom: 150px;
/}



.button {
  padding: 8px 25px;
  font-size: 24px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 10px;
  box-shadow: 0 9px #999;
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}

</style>
</head>
<style>
  body {
    background-image: url('images/quad.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;  
    background-size: cover;
  }
  </style>

<body>
  <div class="header">

  <center><img src="images/mitlogo.png" alt="logo"></center>
  
  <h1 style="color: #F44D30  ; font-size:50px;"><center><b> MIT Digital Notes</b></center></h1>
  
  <h2 style="color: green; font-size:35px;"><center>Admin</center></h2>
    <form>
        <button class="button button1"><a href=admin_teacher.php>FACULTY</button>
    </form>
    <form>
        <button class="button button2"><a href=admin_student.php>STUDENT</button>
	</form>
	<form>
        <button class="button button3"><a href=faculty.php>NOTES</button>
  	</form>
</body>
</html>

 
