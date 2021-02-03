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

?>	
<!DOCTYPE html>
<html>
<head>
<style >
	 body {
  			background-image: url('images/loginbackground.jpg');
  			background-attachment: fixed;
  			background-size: cover;
		  }
	.pdf{
			width:32px;
  			height:32px;
 			background:url('images/pdf.png');
 			 display:inline-block;
  			content:' ';
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
<body>
	<div class="header">
   <center><img src="images/mitlogo.png" alt="logo"></center>
  
</div>
</body>

<div class="col-md-8">
			<h2 style="color:green; font-size:40px; font-style:;"> NOTES</h2>
			<br />
		            
					<?
					
					     $subcode=$_GET['subcode'];
					     $sql1="select * from notes where subcode='$subcode'";
					     $row=mysqli_fetch_assoc(mysqli_query($db,$sql1));
							unlink("C:\\xampp\\htdocs\\student notes management system\\files\\".$row['notes']);
					
					
					
					?>
		            
		    <table class="table table-hover">
		        <tr>
		            <th class="likes"><i class="fa fa-thumbs-up" aria-hidden="true"></i></th>
		            <th>Subcode</th>
		            <th>module</th>
		            <th>View</th>
		        </tr>
		        
		        <?php
		        $subcode=$_GET['subcode'];
				$q = "SELECT * FROM notes WHERE subcode='$subcode' ";				
				$r = mysqli_query($db, $q);
		        $i = 1;
		        while($row = mysqli_fetch_assoc($r)) { ?>
		                               
		        <tr>
		            <td class="likes">
		            <td><?php echo $row['subcode']; ?></td>
		            <td><?php echo $row['module']; ?></td>
		            <td><a href="view_file.php?notes=<?php echo $row['notes']; ?>" target="_blank">
		            	<div class='pdf'></div>
		            </a></td>
		        </tr>

		        <?php } ?>
		    
		    </table>
			
		</div>