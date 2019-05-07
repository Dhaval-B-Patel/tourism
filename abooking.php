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
  <li><a href="showa.php">Back</a></li>

  
</ul>

<div style="margin-left:25%;padding:1px 16px;height:1000px;font-size: 20px;">
<?php
	$host = 'localhost';
$user = 'root';  
$pass = ''; 
session_start();
 $count=1;

//connect to database
$no=$_GET['msg'];
$conn = mysqli_connect($host, $user, $pass,'tour');  
if(isset($_SESSION['name'])){
	$un=$_SESSION['name'];
	$qs="select `uname` from user where `no`='$no'";
	$qrun=mysqli_query($conn,$qs);
	$result=mysqli_fetch_assoc($qrun);
	$name=$result['uname'];
	
	$q="select * from book where`uname`='$name'";
	$qrunb=mysqli_query($conn,$q);
	//var_dump($qrunb);
	$num=mysqli_num_rows($qrun);
	

		$table="<table id='table' cellspacing='0px' cellpadding='10px' border='3px'> <tr><th>FIRST NAME</th>   
		<th>ADDRESS   </th>   
		 <th>DEPARTURE DATE</th>
		<th>ARRIVAL DATE     </th>
		<th>NUMBER OF PERSON </th>

		</tr>
		";  
	while($row=mysqli_fetch_assoc($qrunb)){
		$table.="<tr>
		<td>{$row['uname']}</td>
		<td>{$row['addr']}
		</td><td>{$row['sd']}
		</td><td>{$row['ad']} 
		 </td><td>{$row['np']}
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
			window.location.href="abooking.php?"+no;
		}
	</script>
</body>
</html>


