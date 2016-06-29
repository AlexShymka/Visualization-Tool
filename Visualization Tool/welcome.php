<?php 
session_start();
?>
<html>
<body>
	<?php
	
	$name = $_SESSION["name"];
	$email = $_SESSION["pword"];
	?>
		Welcome <?php echo $name; ?><br>
		Your email address is: <?php echo $email; ?>
		
	</body>
</html>