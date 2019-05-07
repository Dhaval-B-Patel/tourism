<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/style1.css">
		
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
	$qs="select * from user where uname='".$un."'";
	$q="select * from book where uname='".$un."'";
	$qrunb=mysqli_query($conn,$q);
	$qrun=mysqli_query($conn,$qs);
	$num=mysqli_num_rows($qrun);
	if($count==1){
	while($result=mysqli_fetch_assoc($qrun)){
		
		echo"<pre >";
		echo " FIRST NAME    :{$result['fname']}  <br> ";
		echo "LAST NAME     :{$result['lname']}<br>";
		echo " DATE OF BIRTH :{$result['dob']}  <br> ";
		echo "NUMBER        :{$result['no']}  <br> ";
		echo "EMAIL         :{$result['email']}  <br> ";
		echo "USERNAME      :{$result['uname']}  <br> ";
		echo"</pre>";
		$count=0;
	}	
	   echo "<p> Booking Details<p> ";
	}	
	   while($row=mysqli_fetch_assoc($qrunb)){
		echo"<pre>";
		
		echo " ADDRESS         :{$row['addr']}  <br> ";
		echo "DEPARTURE DATE  :{$row['sd']}<br>";
		echo " ARRIVAL DATE    :{$row['ad']}  <br> ";
		echo "NUMBER OF PERSON:{$row['np']}  <br> ";
		echo"</pre>";
		
	}
}
else{
	echo "user does not exist";
}

?>
</div>




