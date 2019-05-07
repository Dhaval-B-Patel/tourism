
<body style="background-color:#cce6ff;">
<?php  
$host = 'localhost';
$user = 'root';  
$pass = ''; 

 

//connect to database
$conn = mysqli_connect($host, $user, $pass,'dhaval');  
if(! $conn )  
{  
  die('Could not connect: ' . mysqli_error());  
}else  
echo 'Connected successfully<br>';  
  
$un=$_GET["uname"];
$no=$_GET["no"];

echo "username:$un <br> no:$no<br><br>";

//entry into database

$qi="insert into abhay(uname,no) values ('".$un."','".$no."')";

if(mysqli_query($conn,$qi))
{
	echo "entered sucessfully";
}

else
{
echo "<br>error<br>";
}
echo"<br><br>";

?>


<div style="border:dotted;background-color:green;padding:10px;">
<?php
//fetch complete directly
$qs="select * from abhay";
$show=mysqli_query($conn,$qs);

if(mysqli_num_rows($show) > 0){  
 while($row = mysqli_fetch_assoc($show)){  
    echo "name :{$row['uname']}  <br> ".
		 "no   :{$row['no']}<br>".	 
      
         "--------------------------------<br>";  
 }
}
?>
</div>


<div style="border:solid;background-color:yellow;padding:10px;">
<?php
//retrive particular object database
echo"<br>user data<br>";
$qr="select * from abhay where uname='".$un."'";

$sh=mysqli_query($conn,$qr);
if(mysqli_num_rows($sh)>0)
{
	while($ar=mysqli_fetch_assoc($sh))
	{
	echo 
		 "name: {$ar['uname']}<br>".
		 "no  : {$ar['no']}<br>";	
	}		
}

?>
</div>

<form action="reg.html">
<input type="submit" value="ok" name="ok" style="width:100%;height:20%;color:blue;background:black;">
</form>
</body>