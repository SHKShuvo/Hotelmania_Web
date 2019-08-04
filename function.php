<html>
    <head>
	   <title>Hello World</title>	
	</head>

	<body> 
	   
	   <?php
	     function writename(){
			 echo "My Name is Shuvo";
		 }
		 
		 writename();
		 
		 function add($x,$y){
			 $total = $x + $y;
			 return $total;
		 }
		 
		 echo "<br>10 + 12 = ".add(10,12); 
		 
		 
		 
	     	     
	   ?>
	  
	</body>
	
</html>