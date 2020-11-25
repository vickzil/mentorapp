<?php
session_start();
require 'database/dbcon.php';


// function securityGuard() {
// 	$email = $_SESSION['email'];
// 	// CHECK IF EMAIL EXIST IN THE DATABASE
// 	$sql = "SELECT * FROM users WHERE email='$email' LIMIT 1";
// 	$result = mysqli_query($con,$sql);
// 	$num = mysqli_num_rows($result);
		  
// 	// IF USER EXIST, SIGN IN THE USER
//     if($num ==1) {
// 		// $user = mysqli_fetch_array($result);
// 		return true;  	
// 	} else {
// 		session_unset();
// 		session_destroy();
// 		header("Location:signin");
//     }
// }

// GET LOGGEDIN USER DATA
function getUserDetails() {
     global $con;
    $userEmail = $_SESSION['email'];
    $query="SELECT * FROM users WHERE email='$userEmail'";
    $result = mysqli_query($con,$query); 
    $user = mysqli_fetch_array($result);

    return $user;
}

// GET ALL MENTORS
function displayAllmentors()
{
	global $con;

  	$query="SELECT * FROM users WHERE role='mentor'";
  	$result=mysqli_query($con,$query);
  	while($row=mysqli_fetch_array($result)) { 
    
  	 echo '<tr>
			<td>'. $row['firstname']. ' '.$row['lastname'].'</td>
			<td>'. $row['email'] .'</td>
			<td>'. $row['role'] .'</td>
			<td>'. $row['created_at'] .'</td>
		</tr>';
     
  }
}

// GET MENTEE
function displayAllMentee()
{
	global $con;

  	$query="SELECT * FROM users WHERE role='mentee'";
  	$result=mysqli_query($con,$query);
  	while($row=mysqli_fetch_array($result)) { 
    
  	 	$mentorId = $row['assigned_to'];

		// GET MENTORS NAME
		$selectMentor ="SELECT * FROM users WHERE id='$mentorId' ";
        $mentorQuery = mysqli_query($con,$selectMentor); 
        $mentorResult = mysqli_fetch_assoc($mentorQuery);
        $mentorName = $mentorResult['firstname'] . ' '. $mentorResult['lastname'];
    
  	 echo '<tr>
			<td>'. $row['firstname']. ' '.$row['lastname'].'</td>
			<td>'. $row['email'] .'</td>
			<td>'. $row['role'] .'</td>
			<td>'. $mentorName .'</td>
			<td>'. $row['created_at'] .'</td>
		</tr>';
     
  }
}

// securityGuard();
?>