<?php
$con=mysqli_connect('localhost','root');

if ($con) {
echo "Connection successful";
}
else
{
	echo "no connection";
}
mysqli_select_db($con,'logindetails');
$user=$_POST['user'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$comment=$_POST['comment'];

$query="insert into logindata(user,mobile,email,comment) values('$user','$mobile','$email','$comment')";
 echo "Your response is saved";
 echo "$query";
mysqli_query($con,$query);

header('location:index.php');

?>

