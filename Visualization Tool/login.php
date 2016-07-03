<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head><link type="text/css" rel ="stylesheet" href="stylesheet.css"/>
<title>PHP</title>
</head>
<body>
<div id ="topbar">
		<p>
		<?php
		if(!isset($_SESSION['name'])){
			echo "<a href='login.php'> Login/ Sign up </a>";
		}else{
			echo "<a href='welcome.php'> My Account </a>";
		}
			?>
			</p></div>
		<div style="margin:100px auto 0;">
	<form action="connect.php" method="post">
		UserName: <input type="text" name="name"><br> Password: <input type="text"
			name="pword"><br> <input type="submit" value="Go">
	</form>
	<br>
	</div>

</body>
</html>