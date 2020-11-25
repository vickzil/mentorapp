<?php

session_start();
require 'database/dbcon.php';


// LOGIN
if(isset($_POST['login'])){

	// VALIDATE EMAIL AND PASSWORD
  	$email= validInput($_POST['email']);
	$password= validInput($_POST['password']);
	  
	// MYSQL INJECTION VALIDATION
  	$email = mysqli_real_escape_string($con, $email);
  	$password = mysqli_real_escape_string($con, $password);


	// CHECK IF EMAIL EXIST IN THE DATABASE
    $sql = "SELECT * FROM users WHERE email='$email' LIMIT 1";
    $result = mysqli_query($con,$sql);
	$num = mysqli_num_rows($result);
		  
	// IF USER EXIST, SIGN IN THE USER
    if($num ==1) {
        $user = mysqli_fetch_array($result);
        if (password_verify($password, $user['password'])) {

			// SET DATE FOR LOGIN TIMEOUT
			$dateFormat = date('Y-m-d H:i:s');

			// SET SESSION
			$_SESSION['lastname'] = $user['lastname'];
			$_SESSION['firstname'] = $user['firstname'];
			$_SESSION['email'] = $user['email'];
			$_SESSION['loginTime']= time();

            echo "success";
		}

		//   ERROR IF LOGIN DETAILS IS NOT CORRECT
		else {
            echo "error";
        }
	} 
	//   ERROR IF LOGIN EMAIL IS NOT CORRECT
	else {

		echo "error";
    }
}




function validInput($data) {

  $data = htmlspecialchars($data);
  $data = stripcslashes($data);
  $data = trim($data);

  return $data;

}



?>