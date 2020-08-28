<!DOCTYPE html>
<html>
<head>
	<title>	</title>
</head>
<body style="background-color:#FF6347"><center>
	<?php
	if(isset($_POST['btn']))
	{
		extract($_POST);
		require('config.php');
		if($type=='Faculty')
		{
		$query=mysql_query("select * from user where username='$username' and password='$password'");
		$view3=mysql_fetch_assoc($query);
		
		$contact=$view3['contact'];
		if(mysql_num_rows($query)==true)
		{
				$sms_msg="$username has successfully logged in on delhi public school faculty software.check if it is not you ,";
					$str= trim(str_replace(' ', '%20', $sms_msg));
					$url="http://bulksms.aniwebindia.com/rest/services/sendSMS/sendGroupSms?AUTH_KEY=f912f0afe7fb4a1c1290d36fd2e48af&message=$str&senderId=SIGNUP&routeId=3&mobileNos=$contact&smsContentType=english";
					/********from service provider*/
					$req = curl_init();
					curl_setopt($req, CURLOPT_URL,$url);
					curl_exec($req);
			session_start();
			$_SESSION['user']=$username;
			header("location:dashboard.php");
		}
		else
		{
			echo "wrong password";
		}
		}
		else if($type=='Student')
		{
			$query=mysql_query("select * from school where name='$username' and contact='$password'");
			$view3=mysql_fetch_assoc($query);
			if(mysql_num_rows($query)==true)
			{
				session_start();
				$_SESSION['student']=$username;
				header("Location:student_profile.php");
			}			
		
		}
	}
		?>
		<style type="text/css">
			.txt
			{
				width:75%;
				height:5%;
				border:1px solid brown;
				border-radius:10px;
				padding:20px 15px 20px 15px;
				margin:5px 0px 5px 0px;
				border-color:green;
			}
			.container
			{
				border-radius:10px;
				background-color:whitesmoke;
				box-shadow: 1px 1px 1px 1px;
				padding: 50px 20px 50px 20px;
				width:30%;
				height:50%;
			}
		</style>
<div class="container">
	<img src="images/pic1.jpg" style="position: relative;left:0px;top:5px;" border="2px" />
	<form action="" method="post" style="background-color:#FF7F50"  >
		<h3>lOGIN OR SIGN UP</h3>
		<h4>ENTER YOUR ACCOUNT DETAILS HERE</h4>
	<!--	<p>
			<input type="radio" name="type" value="Faculty">Faculty
			<input type="radio" name="type" value="student">Student

		</p>
	-->
				<b>
		<p>USERNAME:<input type="text" class="txt" name="username" placeholder="enter your username"></p>
		<p>PASSWORD:<input type="password" class="txt" name="password" placeholder="enter your password"></p>
		<P><input type="submit" value="login" name="btn" style="background-color:		#FF6347;color:white;width:70px;height:30px;border-radius:5px"></P>
		<a href="newuserinterface.php" >create a new account?
		</a><br/></b>
	</form>
</div>
</center>
</body>
</html>