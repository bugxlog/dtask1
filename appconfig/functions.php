<?php  @session_start();

function usersignup(){
	global  $dbconn;

 	$rusername			=	$_POST['rusername'];
 	$rpassword		=	password_hash($_POST['rpassword'], PASSWORD_BCRYPT);
 	$rrole			=	$_POST['rrole'];
	
	 
        
        

	$qry 				=	'users set  
							username			=	"'.$rusername.'",
							password		=	"'.$rpassword.'",
							role			=	"'.$rrole.'"';
							
                            echo '</pre>';
                           echo print_r($qry);
                           
			$qry	= " INSERT INTO ".$qry ;
    

	
            if ($dbconn->query($qry)){
                return true;
            }
            else{
                return false;
            }
    }
    


    function adminlogin($name,$pass,$role){
        global  $dbconn;
        
        $name = mysqli_real_escape_string($dbconn,stripslashes($name)); 
        $pass = mysqli_real_escape_string($dbconn,stripslashes($pass));
        

        echo '<pre>';
        echo print_r($pass);
        
        $qy			=	"select * from users where username='$name' AND role='admin'";
        $numRecs = $dbconn->query($qy);
        $row = $numRecs->fetch_assoc();
        echo '<pre>';
        echo print_r($row);

        if ($row && password_verify($pass, $row['password'])) {

            return true;
        } else {
            return false;
        }

} 

function userlogin($name,$pass){
    global  $dbconn;
    
    global  $dbconn;
        
        $name = mysqli_real_escape_string($dbconn,stripslashes($name)); 
        $pass = mysqli_real_escape_string($dbconn,stripslashes($pass));
        
        
        $qy			=	"select * from users where username='$name' AND role='user'";
        $numRecs = $dbconn->query($qy);
        $row = $numRecs->fetch_assoc();

        if ($row && password_verify($pass, $row['password'])) {
            return true;
        } else {
            return false;
        }
} 


function getusersdata() {
    global $dbconn;

    $query = "SELECT username, role FROM users";
    $result = $dbconn->query($query);
   

    $userData = array();
    while ($row = $result->fetch_assoc()) {
        $userData[] = $row;
        
    }

    return $userData;
}













?>