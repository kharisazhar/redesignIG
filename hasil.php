<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Hasil</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

<?php 

$host= "localhost";
$user= "root";
$password= "";
$email=$_POST['email'];
$fullname=$_POST['fullname'];
$username=$_POST['username'];
$pw=$_POST['pw'];


if($username)
{
$conn=mysqli_connect ($host,$user,$password);
mysqli_select_db ($conn,'dbinstagram');
$sql="insert into tbinstagram values ('$email', '$fullname', '$username', '$pw')";
$hasil=mysqli_query ($conn,$sql); 
}

else{
	echo "Data Gagal Disimpan";
}


?>

<div id="container">
	<div class="Header">
		Verify
	</div>

	<div class="hasil">
		<div class="email">
			Email or Number Phone: <?php echo" $email" ?><br>
		</div>

		<div class="fullname">
			Full name : <?php echo "$fullname"; ?><br>
		</div>

		<div class="user">
			Username  : <?php echo "$username"; ?><br>
		</div>

		<div class="pw">
			Passowrd : <?php echo "$pw"; ?><br>
		</div>
		
		
	</div>
</div>








</body>
</html>



