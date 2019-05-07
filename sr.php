<html>
	<head>
		<link rel="stylesheet" href="css/style1.css">
		<link rel="stylesheet" href="css/#.css">

	</head>
	<header>
		<title>GUJARAT TOURISM</title>
</header>	
<ul style='font-size: 30px;'>
  <li><a href="login.html">LOGIN</a></li>
  <li><a href="gujarat.html">SEE PACKAGES</a></li>
  
</ul>
	
<div style="margin-left:25%;padding:1px 16px;height:1000px;font-size: 20px;">
<?php  


$conn= mysqli_connect('localhost','root','','tour');  

if($conn )  
{  
 $fn=$_GET["fname"];
$ln=$_GET["lname"];
$dob=$_GET["dob"];
$no=$_GET["no"];
$em=$_GET["email"];
$un=$_GET["uname"];
$pass=$_GET["pass"];

$qi="insert into user(fname,lname,dob,no,email,uname,pass) values ('".$fn."','".$ln."','".$dob."',
'".$no."','".$em."','".$un."','".$pass."')";

if(mysqli_query($conn,$qi))
{
echo " you have sucessfully register";
$qs="select * from user where email='".$em."'";
$show=mysqli_query($conn,$qs);

if(mysqli_num_rows($show))
{  
  while($row = mysqli_fetch_assoc($show))
  {  
    echo "<pre> FIRST NAME     :{$row['fname']}  <br> ".
		 "LAST NAME      :{$row['lname']}<br>".
		 " DATE OF BIRTH  :{$row['dob']}  <br> ".
		 "NUMBER         :{$row['no']}  <br> ".
		 "EMAIL          :{$row['email']}  <br> ".
		 "USERNAME       :{$row['uname']}  <br></pre> ";
  }
}
}
}


?>
</div>

<form action="login.html">
<input type="submit" value="go to login">
</form>
<form action="gujarat.html">
<input type="submit" value="see packages">
</form>

</html>