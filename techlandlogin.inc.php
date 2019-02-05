<?php
require 'techland.inc.php';

if (isset($_POST['login-submit'])) {
	

	$uid = $_POST['uid'];
	$pwd = $_POST['pwd'];

	//Error handlers
	//Check if inputs are empty
	if (empty($uid) || empty($pwd)) {
		header("Location: ../Tech.php?login=empty");
		exit(); 
	}	else {
		$sql = "SELECT * FROM users WHERE user_uid=? OR user_email=?;";
		$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt, $sql)) {
			header("Location: ../Tech.php?error=sqlerror");
			exit();
		}	
    	else {
			mysqli_stmt_bind_param($stmt, "ss", $uid, $uid);
			mysqli_stmt_execute($stmt);
			$result = mysqli_stmt_get_result($stmt);
    		if ($row = mysqli_fetch_assoc($result)) {
				var_dump($row);
				return;

				$pwdCheck = password_verify($pwd, $row['pwd']);

				echo $pwdCheck;
				return;
				exit();
				
       			 // If they don't match then we create an error message!
       			 if ($pwdCheck == false) {
          			// If there is an error we send the user back to the signup page.
          			header("Location: ../Tech.php?error=wrongpwd");
          			exit();
    			} else {
						session_start();
						$_SESSION['id'] = $row['user_id'];
						$_SESSION['uid'] = $row['user_uid'];
						$_SESSION['email'] = $row['user_email'];
						header("Location: ../Tech.php?login=success");
						exit();
				}
			}
		}
	}
		mysqli_stmt_close($stmt);
		mysqli_close($conn);

}
	 else {
	header("Location: ../Tech.php");
	exit();
}

