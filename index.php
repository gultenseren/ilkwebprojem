<?PHP include("connect.php"); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="css/index.css"/>
<title>login</title>
</head>

<body>
	
	<form action ="" method="post" class="loginForm"> 
		
		<div id="form">
		
			<label>Username : </label><input type="text" id="username" name="username" maxlength="30"  size="30" margin-left="100px"/></br></br>
			<label>Password&nbsp; : </label><input type="password" name="password" maxlength="30"  size="30" margin-left="100px"/><br><br><br><br><br>
	
			<button type="submit">LOGIN</button>
		</div>
	</form>
	
</body>
</html>

	
<?php

		error_reporting(0);

		$username=trim($_POST["username"]);
		$password=trim($_POST["password"]);

		if($_POST){

		$sorgu=mysqli_query($baglan,"SELECT count(*) FROM user WHERE username='$username' AND password='$password'");

		$liste=mysqli_fetch_array($sorgu);

		$durum=$liste[0];



		if($durum==1){
			
		
			ob_start();
			session_start();
			
			$_SESSION["uye"]=$username;

			echo "<script> window.location = 'mainpage.php'; </script>";
			

		}else{
			 echo "<script>alert('username or password is wrong!'); </script>";
		}
	}

?>	
