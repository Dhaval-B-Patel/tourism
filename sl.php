
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

 

//connect to database
$conn = mysqli_connect($host, $user, $pass,'tour');  
session_start();


$un=$_GET["uname"];
$pa=$_GET["pass"];
$_SESSION['name']=$_GET["uname"];
//$_SESSION[]=$_GET["pass"];
$qs="select * from user where uname='".$un."'and pass='".$pa."' ";
$ad="select * from admin where uname='".$un."'and pass='".$pa."' ";
$show=mysqli_query($conn,$qs);
$show1=mysqli_query($conn,$ad);

if(mysqli_num_rows($show))
{ 
header("location:show.php");
}else if(mysqli_num_rows($show1))
      {
		  header("location:showa.php");
      }
		else
		{   	echo "<script type='text/javascript'>
				alert('invalid user');
				window.location.href='login.html';
				</script>";
		}
?>
</div>
</html>
