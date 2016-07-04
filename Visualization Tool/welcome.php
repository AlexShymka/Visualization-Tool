<?php 
session_start();
?>
<html>
	<head>
	<link type="text/css" rel ="stylesheet" href="stylesheet.css"/>
	<title>Welcome</title>
	</head>
	<body>
		<div id ="topbar">
		<p style="float: right; margin-right:2%;">
		<?php
		if(!isset($_SESSION['name'])){
			echo "<a href='login.php'> Login/ Sign up </a><br>";
		}else{
			echo "<a href='welcome.php'> My Account </a><br>";
		}
		
		$name = $_SESSION["name"];
		$email = $_SESSION["pword"];
		?>
			Welcome <?php echo $name; ?><br>
			Your password is: <?php echo $email; ?> <br>
			</p></div>
			<div style="margin:100px auto 0;">
			<p>Enter your data seperated by commas to create a graph! <br>
			Ex: 1,2,3,4
			</p>
			<form action="welcome.php" method="get">
				Data: <input type="text" name="data"><br> 
				<input type="submit" value="Make A Graph">
			</form>
			<?php if(!empty($_GET['data'])){
				echo $_GET['data'];
				$_SESSION['data'] = $_GET['data'];
				$arg1 = $_GET['data'];
			}else{
				echo 'No data';
			}?>
			<br>
			<img src="makeGraph.php">
			<a href='logout.php'>Log Out</a>
			</div>
		</body>
</html>