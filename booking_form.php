<!doctype>

<html> 
	<head> 
		<title> Hotel Booking Form </title>
		<link rel = "stylesheet" type = "text/css" href = "mystyle.css"/>
		<style> 
		    
			body
			{
				background-color: #48D5DA;
			}
			
			#form {
				
				margin-bottom : 20px;
				
			}
			
			table
			{
				background-color: #85929E;
				width: 60%;
				border: 8px solid maroon;
				border-radius : 20px;
			}
			
			table , th, td
			{
				padding: 20px;
			}
			
			#txt {
				width : 200px;
				height : 30px;
			}
			
			
			#sub_btn {
                width : 200px;				
				padding : 15px 25px;
	            color : #fff;
	            background-color : #2ECC71;
	            border : none;
	            border-radius : 5px;
	            border-bottom : 5px solid #27AE60;
			}
			
			#sub_btn:hover{
	            background-color : #E74C3C;
	            border-bottom : 5px solid #EC7063;
            }
			
		</style>
	</head>
	
	<body>
		<div align="center" id="form">
			<table action = "booking_form.php" method = "post"> 
			    
				<tr>
					<td><h2>Mermaid Beach Resort, Cox's Bazar<h2></td>
					<td><h3>Booking Form</h3></td>
				</tr>
							   
				
				<tr> 
					<td> Name: </td>
					<td> <input id = "txt" type="text" placeholder="username" name="bName"></td>
				</tr>
				
				<tr>
					<td> Email: </td>
					<td><input id = "txt" type="text" placeholder="email" name="bEmail"></td>
				</tr>
				
				<tr>
					<td> Check-in: </td>
					<td><input id = "txt" type="text" placeholder="check-in" name="bCheckIn"</td>
				</tr>
				
				<tr>
					<td> Check-out: </td>
					<td><input id = "txt" type="text" placeholder="check-out" name="bCheckOut"</td>
				</tr>
				
				<tr>
					<td> Code: </td>
					<td> <input id = "txt" type="text" placeholder="code" name="bCode" </td>
				</tr>
				
				<tr>
					<td> Rooms: </td>
				
					<td>
						<select id = "select-itm" name = "bSel1"> 
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
							<option>6</option>
							<option>7</option>
							<option>8</option>
							<option>9</option>
							<option>10</option>
						</select>
					</td>
				</tr>

					<td> Adults: </td>
			
					<td>
						<select id = "select-itm" name = "bSel2"> 
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
							<option>6</option>
							<option>7</option>
							<option>8</option>
							<option>9</option>
							<option>10</option>
							<option>11</option>
							<option>12</option>
							<option>13</option>
							<option>14</option>
							<option>15</option>
						</select>
					</td>
				</tr>
				
				<tr>
					<td> Children: </td>
			
					<td>
						<select id = "select-itm" name = "bSel3"> 
							<option>No Children</option>
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
							<option>6</option>
							<option>7</option>
							<option>8</option>
							<option>9</option>
							<option>10</option>
						</select>
					</td>
				</tr>
				
				<tr>
				    <td></td>
					<td> 
						<input id = "sub_btn" type="Submit" value="Submit" name="book">
					</td>
				</tr>
							    
			</table>
			<?php
		
		    if(isset($_POST['Submit'])){
			//make sql connection
             mysql_connect('localhost','root','d@rk1995');
			 
             //connect to database
             mysql_select_db('hotelmania');
			 $hotel_id = "100001";
			 /*$sql = "insert into book (name,email,check_in,chect_out,code,tot_room,adults,childrens) values
			          ('$_POST[bName]','$_POST[bEmail]','$_POST[bCheckIn]','$_POST[bCheckOut]','$_POST[bCode]','$_POST[bSel1]',
					  '$_POST[bSel2]','$_POST[bSel3]')";*/
					  $sql = "insert into book (name,email,check_in,chect_out,code,tot_room,adults,childrens) values ('1','1','1','1','1','1','1','1')";
			 
			 mysql_query($sql);
             //mysql_close($con);
             //$sql_hotel = "select * from hotel_info";

             //$rec = mysql_query($sql_hotel);	
		   }
		
         ?>
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

