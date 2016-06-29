<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
</head>
<body>
	<p>
      <?php
		echo "The Foundation for the visualization tool!";
		
		$_SESSION['name']= '';
		$_SESSION['pword'] = '';
		?>
		
	
		</p>
	<form action="connect.php" method="post">
		UserName: <input type="text" name="name"><br> Password: <input type="text"
			name="pword"><br> <input type="submit" value="Go">
	</form>

</body>
</html>