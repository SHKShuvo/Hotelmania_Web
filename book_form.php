<!DOCTYPE html>

<html>
     <head>
	      <title>Login Form</title>
		  <link rel = "stylesheet" type = "text/css" href = "form_style.css"/>
         <!-- <link rel = "stylesheet" type = "text/css" href = "font-awesome.css"/>  -->
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">  		 
     </head>

     <body>
	      
	     <div class = "contain">
		    <img src = "Images/people.png"/>
		    <form action = "book_form.php" method = "post">
			     <div class = "form-input">
				      <input type = "text" name ="busername" placeholder = "Username">
				 </div>
				 
				 <div class = "form-input">
				      <input type = "text" name = "bemail" placeholder = "Email">
				 </div>
				 
				 <div class = "form-input">
				      <input type = "text" name ="bcheck_in" placeholder = "Check In">
				 </div>
				 
				 <div class = "form-input">
				      <input type = "text" name = "bcheck_out" placeholder = "Check Out">
				 </div>
				 
				 <div class = "form-input">
				      <input type = "text" name ="bcode" placeholder = "Code">
				 </div>
				 
				 <div class = "form-input">
				      <input type = "text" name = "brooms" placeholder = "Rooms">
				 </div>
				 
				 <div class = "form-input">
				      <input type = "text" name ="badults" placeholder = "No of Adults">
				 </div>
				 
				 <div class = "form-input">
				      <input type = "text" name = "bchildrens" placeholder = "No of Childrens">
				 </div>
				 
				     <input type = "submit" name = "bsubmit" value = "BOOK" class = "btn-book">
            </form>
         <?php
			    mysql_connect("localhost","root","d@rk1995");
                mysql_select_db("hotelmania") or die("no db found");				
			 
               if(isset($_POST['bsubmit'])){
                     $hotel_Id = "100001";
					 $username = $_POST['busername'];
                     $email = $_POST['bemail'];
                     $check_in = $_POST['bcheck_in'];
                     $check_out = $_POST['bcheck_out'];
					 $code = $_POST['bcode'];
                     $rooms = $_POST['brooms'];
                     $adults = $_POST['badults'];
                     $childrens = $_POST['bchildrens'];
					 				
			         $query = "insert into book values ('$hotel_Id','$username','$email','$check_in','$check_out','$code','$rooms','$adults','$childrens')";
					 if(mysql_query($query)){
						 echo "<h3>Student Has Inserted Succesfully</h3>"; 
					 }
					 
		                                 		                                   
                    }

         ?>			
                   			
		 </div> 
     </body>

</html>