<?php include('server.php'); ?>

<!DOCTYPE html>

<html>
     <head>
	      <title>Registration Form</title>
		  <link rel = "stylesheet" type = "text/css" href = "style2.css"/>
         <!-- <link rel = "stylesheet" type = "text/css" href = "font-awesome.css"/>  -->
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">  		 
     </head>

     <body>
	      <div id ="back">
		     <a href = "front.html">Back</a>
		  </div>
	     <div class = "contain">
		    <img src = "images/people.png"/>
		    <form method = "post" action = "signup.php">			    
								
			     <div class = "form-input">
				     <input type = "text" name ="username" placeholder = "Enter Username">
				 </div>				 
				 <div class = "form-input">
				     <input type = "text" name ="email" placeholder = "Enter Email">
				 </div>
				 <div class = "form-input">
				     <input type = "password" name = "password" placeholder = "Enter Password">
				 </div>
				 <div class = "form-input">
				     <input type = "password" name = "con_password" placeholder = "Enter Confirm Password">
				 </div>
				     <input type = "submit" name = "sign_up" value = "Sign Up" class = "btn-signup">
            </form>
             
			<a href = "signin.php">Sign In!</a>
			</br></br>
			<!-- Display errors-->
				<?php include('errors.php'); ?>
			 
		 </div> 
     </body>

</html>