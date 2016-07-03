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
		
		<a>
		<?php
		if(!isset($_SESSION['name'])){
			echo "<a href='login.php'> Login/ Sign up </a>";
		}else{
			echo "<a href='welcome.php'> My Account </a>";
		}
			?></a></div>
	<div style="margin:100px auto 0;">
		<p>
      <?php
		echo "The Foundation for the visualization tool! <br>";
		?>
		Storytelling <br>
		Uncertainty<br>
		Collaboration<br>
		</p>
		</div>
		


</body>
</html>