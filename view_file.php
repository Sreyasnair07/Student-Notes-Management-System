<?php

	session_start();
	
	
	
		$file='C:\\xampp\\htdocs\\student notes management system\\files\\'.$_GET['notes'];
		header('Content-Type: '.mime_content_type($file));
		readfile($file);		
	

?>