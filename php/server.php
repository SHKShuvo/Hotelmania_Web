<?php
     session_start();
     $username = "";
	 $email = "" ;
	 $errors = array();
   //connect to database
   $db = mysqli_connect('localhost','root','d@rk1995','hotelmania');
   
   //If the Register Button is Clicked
   if(isset($_POST['sign_up'])){
	     $username = mysql_real_escape_string($_POST['username']);
         $email = mysql_real_escape_string($_POST['email']);
         $password_1 = mysql_real_escape_string($_POST['password']);
         $password_2 = mysql_real_escape_string($_POST['con_password']);

		 //ensure the form field are filled properly
		 if(empty($username)){
			 array_push($errors, "Username is Required");
		 }
		 if(empty($email)){
			 array_push($errors, "Email is Required");
		 }
		 if(empty($password_1)){
			 array_push($errors, "Password is Required");
		 }
		 if($password_1 != $password_2){
			 array_push($errors, "The Two Password Do Not Match");
		 }
		 
		 //If there are no errors
		 $password = md5($password_1); // encrypt password
		 if(count($errors) == 0){
			 $sql = "INSERT INTO users (username,email,password) VALUES ('$username','$email',
			 '$password')";
			 mysqli_query($db , $sql);
			 $_SESSION['username'] = $username;
			 $_SESSION['success'] = "You Are Now Logged In";
			 header('location: index.php');
		 }
   }

?>