<?php	
			
		require_once("appconfig/db_config.php");
		require_once("appconfig/functions.php");


        if(isset($_POST['rusername'])){
            if(usersignup())
                echo $msg='User Register Successfully...!';
            else
                echo $msg='Action failed..!';
        } 

        if(isset($_POST['lrole']) && $_POST['lrole'] == 'admin' ){

            if(adminlogin($_POST['lusername'],$_POST['lpassword'],$_POST['lrole'])){
                echo "authenticated";
            }
            else{
                echo 'Please re-check your credentials...!';
            }
            
        }

        if(isset($_POST['lrole']) && $_POST['lrole'] == 'user'){

            if(userlogin($_POST['lusername'],$_POST['lpassword'],$_POST['lrole'])){
                echo "authenticated";
            }
            else{
                echo 'Incorect Credentials';
            }
        } 

        if (isset($_GET['action']) && $_GET['action'] === 'getusers') {
            $userData = getusersdata(); 
            echo json_encode($userData);
            exit;
        }
        





		
?>	