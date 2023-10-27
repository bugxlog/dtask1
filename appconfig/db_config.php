<?php
			
		$server_name	=	"localhost";				
		$db_username	=	"root";						
		$db_password	=	"";							
		$databasename	=	"dtask";


		$siteurl		=	"/dtask";		
		$mainurl		=	"/dtask";						
			
		
		$dbconn = mysqli_connect($server_name,$db_username,$db_password, $databasename);

		if (!$dbconn) {
		 die("Database Connection Error..! : " . mysqli_connect_error()."<br /> Please Review Database access credentials in /app_configurations/db_settings.php");
		}
		
		// else{
		// 	echo"successful";
		// }
		
		

?>