	
<html>
	<head>
		<link rel="stylesheet" href="css/style1.css">
		<link rel="stylesheet" href="css/#.css">

	</head>
	<header>
		<title>GUJARAT TOURISM</title>
</header>	
<ul style='font-size: 30px;'>
  <li><a href="show.php">USER PAGE</a></li>
  <li><a href="HOME.html">HOME</a></li>
  
</ul>
	
<div style="margin-left:25%;padding:1px 16px;height:1000px;font-size: 20px;">

	
<div>
<?php  
$host = 'localhost';
$user = 'root';  
$pass = ''; 

 

//connect to database
$conn = mysqli_connect($host, $user, $pass,'tour');  
if(! $conn )  
{  
  die('Could not connect: ' . mysqli_error());  
}else  
echo 'ENJOY YOUR TRIP<br>';  
$fn=$_GET["uname"];
$em=$_GET["email"];
$addr=$_GET["addr"];
$sd=$_GET["sd"];
$ad=$_GET["ad"];
$np=$_GET["np"];

$qi="insert into book(uname,email,addr,sd,ad,np) values ('".$fn."','".$em."','".$addr."',
'".$sd."','".$ad."','".$np."')";

if(mysqli_query($conn,$qi))
{
echo " you have sucessfully book ONE ";

}


?>
</div>
</html>