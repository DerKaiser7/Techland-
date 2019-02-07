<?php

	require 'techland.inc.php';

if (isset($_POST['signup-submit'])) {
	

	$first = $_POST['first'];
	$last = $_POST['last'];
	$uid = $_POST['uid'];
	$pwd = $_POST['pwd'];
	$email = $_POST['email'];

	//error handlers
	//check for empty fields
	if (empty($first) || empty($last) || empty($uid) || empty($pwd) || empty($email)) {
		header("Location: ../TechlandSignup.php?signup=empty");
		exit();
	} else{
		//check if input characters are valid
		if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)) {
			header("Location: ../TechlandSignup.php?signup=invalid");
			exit();
		} else {
			//check if email is valid
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				header("Location: ../TechlandSignup.php?signup=invalidemail");
				exit();			
			} else {
			$sql = "SELECT user_uid FROM users WHERE user_uid=?;";
			$stmt = mysqli_stmt_init($conn);
			if (!mysqli_stmt_prepare($stmt, $sql)){
				header("Location: ../TechlandSignup.php?signup=sqlerror");
				exit();	
			}

			else {
		      mysqli_stmt_bind_param($stmt, "s", $uid);
		      mysqli_stmt_execute($stmt);
		      mysqli_stmt_store_result($stmt);
		      $resultCount = mysqli_stmt_num_rows($stmt);
		      mysqli_stmt_close($stmt);
		      if ($resultCount > 0) {
		        header("Location: ../TechlandSignup.php?error=usertaken&mail=".$email);
		        exit();
		    }
		    else {
		        $sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd) VALUES (?, ?, ?, ?, ?);";
		        $stmt = mysqli_stmt_init($conn);
		        if (!mysqli_stmt_prepare($stmt, $sql)) {
		          // If there is an error we send the user back to the signup page.
		          header("Location: ../TechlandSignup.php?error=structure-error");
		          exit();
		        }
		         else {
		          $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
		          mysqli_stmt_bind_param($stmt, "sssss", $first, $last, $email, $uid, $hashedPwd);
		          mysqli_stmt_execute($stmt);

		          // Lastly we send the user back to the signup page with a success message!
		          header("Location: ../TechlandSignup.php?signup=success");
		          exit();
		      		}
	 			}

			} 
		}
	}
	 mysqli_stmt_close($stmt);
 	 mysqli_close($conn);

 }
} else{
	header("Location: ../TechlandSignup.php");
	exit();
	}