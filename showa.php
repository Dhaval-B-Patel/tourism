<html>
	<head >
	
		<link rel="stylesheet" type="text/css" href="css/style1.css">
		<style>
		body {
             margin: 0;
			background-color:skyblue;
			background: url("animated_roar_of_lion.jpg") repeat ;
          }
		</style>
	</head>
	<body>
<header>
		<title>GUJARAT TOURISM</title>
</header>	

<ul style='font-size: 40px;'>
  <li><a href="book.html">book now</a></li>
  <li><a href="home.html">logout</a></li>
  
</ul>

<div style="margin-left:25%;padding:1px 16px;height:1000px;font-size: 20px;">
<?php
	$host = 'localhost';
$user = 'root';  
$pass = ''; 
session_start();
 $count=1;

//connect to database
$conn = mysqli_connect($host, $user, $pass,'tour');  
if(isset($_SESSION['name'])){
	$un=$_SESSION['name'];
	$qs="select * from user ";
	$q="select * from book ";
	$qrunb=mysqli_query($conn,$q);
	$qrun=mysqli_query($conn,$qs);
	$num=mysqli_num_rows($qrun);
		$table="<table id='table' cellspacing='0px' cellpadding='10px' border='3px'> <tr><th>FIRST NAME</th>   
		<th>LAST NAME  </th>   
		 <th>DATE OF BIRTH </th>
		<th>NUMBER     </th>
		<th>EMAIL </th>
		<th>USERNAME</th>		
		<th>more details</th>
		</tr>
		";  
	while($result=mysqli_fetch_assoc($qrun)){
		$e=$result['no'];
		$table.="<tr>
		<td>{$result['fname']}
		</td><td>{$result['lname']}
		</td><td>{$result['dob']} 
		 </td><td>{$result['no']} 
		</td><td>{$result['email']} 
		</td><td>{$result['uname']}
		</td><td onclick='myfun($e)'>show booking</td>
		</tr>";
	}
	   echo $table;
	  /* echo "<p> Booking Details<p> ";
		
	   while($row=mysqli_fetch_assoc($qrunb)){
		echo"<pre>";
		
		echo " ADDRESS         :{$row['addr']}  <br> ";
		echo "DEPARTURE DATE  :{$row['sd']}<br>";
		echo " ARRIVAL DATE    :{$row['ad']}  <br> ";
		echo "NUMBER OF PERSON:{$row['np']}  <br> ";
		echo"</pre>";
		
	}*/
}
else{
	echo "user does not exist";
}

?>
</div>
	<script>
		function myfun(no){
			window.location.href="abooking.php?msg="+no;
		}
	</script>
</body>
</html>


