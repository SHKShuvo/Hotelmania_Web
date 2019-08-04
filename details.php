<!doctype>

<?php
//make sql connection
mysql_connect('localhost','root','d@rk1995');

//connect to database
mysql_select_db('hotelmania');
$sql1 = "select * from photo_galary where hotel_id = '100001'" ;
$sql2 = "select * from features where hotel_id = '100001'" ;
$sql3 = "select * from room where hotel_id = '100001'" ;

$records_1 = mysql_query($sql1);
$records_2 = mysql_query($sql2);
$records_3 = mysql_query($sql3);
?>

<html> 

	<head>
		<title> Details </title>
		<link rel = "stylesheet" type = "text/css" href = "mystyle.css"/>
		<link rel = "stylesheet" type = "text/css" href = "detail.css"/>
        <link href='https://fonts.googleapis.com/css?family=Atma' rel='stylesheet'>		
	</head>

	<body>
         <div class = "container dark" id = "top_div">
			    <div class = "wrapper">
			    <div id = "left"> 
				   <h1>Hotelmania.com Be Smart,Book Smart</h1>
				</div>
				<!--<div id = "right"> 
				   <a href = "signin.php">Sign In</a>
                   <a href = "signup.php">Sign Up</a>				   
				</div> -->
				</div>
			</div>
			
			<div class = "container semidark">
			   <div id = "logo_left">
			       <img src = "image/hl.png" alt = "Hotel1 Logo" style = "width:300px;height:100px;">
			   </div>			
			   <div id = "logo_right">
			       <img src = "image/swash.png" alt = "Hotel2 Logo" style = "width:300px;height:100px;">
			   </div>			   
			</div>
			
			    <div id = "tslide">
				    <h1><marquee bgcolor = "#9C907B">******* Welcome to Hotelmania, Be Smart Book Smart *******</marquee></h1>
                </div>
				
			<div class = "container">
			     <div class = "wrapper">
				    <div id = "slider">
				    <ul>
		               <li><a href = "front.php">HOME</a></li>
		               <li>
		                  <a href = "">Our Services</a>
		            <ul>
			            <li><a href = "Item Select.php">Platinum</a></li>
		                <li><a href = "Item Select.php">Premium</a></li>
		                <li><a href = "Item Select.php">Regular</a></li>
				        <li><a href = "Item Select.php">Single</a></li>			
			        </ul>
		                </li>
		                <li><a href = "details.php">Photo Gallery</a></li>
		                <li><a href = "booking_form.php">Booking</a></li>
		            </ul>
					</div>
				 </div>
			</div>
			
		    <div id="galary" align="center"> 
			 <table> 
				<tr>
                    <div id = "title_pic">				
					<th colspan="4"> Photo Galary </th>
					</div>
				</tr>
				
				<tr>
					<td colspan="4" align="center"> <em>Some Pictures Of this Hotel</em></td>
				</tr>
				
				<?php
		
		            while($student = mysql_fetch_assoc($records_1)){
			
		            echo "<tr>";
         
		            echo "<td> <a href = ".$student['img_dir1']."><img src = ".$student['img_dir1']."> </a></td>";
					echo "<td> <a href = ".$student['img_dir2']."><img src = ".$student['img_dir2']."> </a></td>";
					echo "<td> <a href = ".$student['img_dir3']."><img src = ".$student['img_dir3']."> </a></td>";
					echo "<td> <a href = ".$student['img_dir4']."><img src = ".$student['img_dir4']."> </a></td>";		            
						
		            echo "</tr>";		
		            }
				
		        ?>
				
				<!--<tr>
					<td> <a href="Images/MBR/1.jpg" target="_blank"><img src="Images/MBR/1.jpg"> </a></td>
					<td> <a href="Images/MBR/2.jpg" target="_blank"><img src="Images/MBR/2.jpg"> </a></td>
					<td> <a href="Images/MBR/3.jpg" target="_blank"><img src="Images/MBR/3.jpg"> </a></td>
					<td> <a href="Images/MBR/4.jpg" target="_blank"><img src="Images/MBR/4.jpg"> </a></td>
				</tr>
				
				<tr>
					<td> <a href="Images/MBR/5.jpg" target="_blank"><img src="Images/MBR/5.jpg"> </a></td>
					<td> <a href="Images/MBR/6.jpg" target="_blank"><img src="Images/MBR/6.jpg"> </a></td>
					<td> <a href="Images/MBR/7.jpg" target="_blank"><img src="Images/MBR/7.jpg"> </a></td>
					<td> <a href="Images/MBR/8.jpg" target="_blank"><img src="Images/MBR/8.jpg"> </a></td>
					
				</tr> -->
				
								
				
			</table> 
		 </div>
		
		 <div id="details" align="center">
		
			<table>
				<tr>
					<th>Important Features</th>
					<th>Details</th>
				</tr>
				
				<?php
		
		            while($student = mysql_fetch_assoc($records_2)){
			
		            echo "<tr>";
         
		            echo "<td>".$student['features']."</td>";
		            echo "<td>".$student['details']."</td>";
		            
						
		            echo "</tr>";		
		            }
				
		        ?>
				
				<!--<tr> 
					<td> Free wifi</td>
				</tr>
				
				<tr> 
					<td> Free Parking </td>
				</tr>
				
				<tr> 
					<td> Garden </td>
				</tr>
				
				<tr> 
					<td> Heating</td>
				</tr>
				
				<tr> 
					<td> Pets Allowed</td>
				</tr>
				
				<tr> 
					<td> Luggage Storage</td>
				</tr> -->
				
			</table>
		
		</div>
		
		<div id="data" align="center"> 
		
			<table>
				<tr> 
					<th colspan="3" > Details </th> 
					<td> <p> <a href="booking_form.html" target="_blank"> <h1> Booking </h1> </a></p> </td>
				</tr>
				
				<tr>
					<th> Code </th>
					<th> Fits </th>
					<th> Room Type </th>
					<th> Price </th>
				</tr>
				
				<?php
		
		            while($student = mysql_fetch_assoc($records_3)){
			
		            echo "<tr>";
         
		            echo "<td>".$student['code']."</td>";
		            echo "<td>".$student['fits']."</td>";
		            echo "<td>".$student['room_type']."</td>";
		            echo "<td>".$student['price']."</td>";
						
		            echo "</tr>";		
		            }
				
		        ?>
				
				<!--<tr> 
				    <td> 1 </td>
				    <td> 1 </td>
					<td> Single <br /> 1 single bed </td>
					<td> </td>
				</tr>
				
				<tr> 
					<td> 2 </td>
				    <td> 2</td>
					<td> Family <br /> 1 double bed </td>
					<td> </td>
				</tr>
				
				<tr> 
					<td> 3 </td>
				    <td> 2</td>
					<td> Family <br /> 2 single bed </td>
					<td> </td>
				</tr>
					
				<tr> 
					<td> 4 </td>
				    <td> 3</td>
					<td> Family <br /> 1 double bed <br /> 1 single bed</td>
					<td> </td>
				</tr>
				
				<tr> 
					<td> 5 </td>
				    <td> 5</td>
					<td> Family <br /> 2 double bed <br /> 1 single bed</td>
					<td> </td>
				</tr>
				
				<tr> 
				    <td> 6 </td>
				    <td> 2</td>
					<td> Executive Double Room <br /> 1 large double bed </td>
					<td> </td>
				</tr>
				
				<tr> 
					<td> 7 </td>
				    <td> 2</td>
					<td> King Room with Balcony <br /> 1 extra-large double bed </td>
					<td> </td>
				</tr> -->
			</table>
		
		</div>
		
		<div class = "container dark">
			    <div class = "wrapper">				    
					     <div id = "footer_section"> 
					      <h2>Latest News 1</h2>		
						  <p>
					         Pretty hotel. They started to charge for parking!! They give us room keys that don't work. 						 
						 </p>
					  	 </div>
            						 															
					     <div id = "footer_section"> 
					      <h2>Latest News 2</h2>		
						  <p>
					         Pretty hotel. They started to charge for parking!! They give us room keys that don't work. 						 
						 </p>
					  	 </div>
            						 										
					     <div id = "footer_section"> 
					      <h2>Latest News 3</h2>			
						  <p>
					         Pretty hotel. They started to charge for parking!! They give us room keys that don't work. 						 
						 </p>
					  	 </div>           						 				
				 </div>						
			</div>
		
	</body>

</html>