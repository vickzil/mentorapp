<?php

session_start();
require 'database/dbcon.php';


// REGISTER
if(isset($_POST['register'])){

	// VALIDATE ALL INPUT FIELDS
	$firstname= validInput($_POST['firstname']);
	$lastname= validInput($_POST['lastname']);
	$email= validInput($_POST['email']);
	$role= validInput($_POST['role']);
	$assigned_to= validInput($_POST['assigned_to']);
	$password= validInput($_POST['password']);
	$cpassword= validInput($_POST['cpassword']);

  // MYSQL INJECTION VALIDATION
	$firstname= mysqli_real_escape_string($con, $firstname);
	$lastname= mysqli_real_escape_string($con, $lastname);
	$email= mysqli_real_escape_string($con, $email);
	$password= mysqli_real_escape_string($con, $password);
	$cpassword= mysqli_real_escape_string($con, $cpassword);

	// GENERATE TOKEN
	$dateFormat = date('Y-m-d H:i:s');
	$key = bin2hex(md5($firstname. $email));
	$password = password_hash($password, PASSWORD_DEFAULT);
	$token = md5($key. $dateFormat. $password);
		
	// INSERT INTO DATABASE
	$sql = "insert into users (password , email, firstname, lastname, role, token, assigned_to) values ('$password', '$email', '$firstname','$lastname','$role', '$token', '$assigned_to')";
	$result = mysqli_query($con, $sql);

	//   IF SUCCESSFULL, REDIRECT TO LOGIN PAGE
	if ($result) {
		echo "success";
		
	} else {
		// ELSE NOT SUCCESSFULL
		echo "error";
	}
}


function validInput($data) {

  $data = htmlspecialchars($data);
  $data = stripcslashes($data);
  $data = trim($data);

  return $data;

}
















  













// login
if(isset($_POST['login'])){

  $_SESSION['message']= "";
  $_SESSION['msgtype']= "";

  $username=$_POST['username'];

  $password=$_POST['password'];

  $query="select * from logintb where username='$username' and password='$password';";

  $result=mysqli_query($con,$query);

  $num = mysqli_num_rows($result);

  if($num ==1)
   
   {
    $_SESSION['username']= $username;
    $_SESSION['timeout']=time();

    header("Location:admin-panel.php");

    return true;
  }

  else

    $_SESSION['message']= "Incorrect Username or Password";
    $_SESSION['msgtype']= "danger";

    header("Location:index.php");

    return false;
  
}


 ?>