<?php 
session_start();
?>

<?php
	$dbuser = 'root';
	$dbpass = '';
	
	$name = $_POST ["name"];
	$pword = $_POST ["pword"];
	
	if ( $name =='' or $pword == ''){
		echo 'You must fill in both Username and password';
		exit();
	}
	
	$conn = mysqli_connect('localhost', $dbuser, $dbpass, 'test');
	
	if(! $conn ) {
		die('Could not connect: ' . mysqli_error($conn));
	}
	
	$sql = 'SELECT username, password FROM users '.
			'WHERE username= '.'"'.$name.'"';
	$retval = mysqli_query( $conn, $sql);
	if(! $retval ) {
		die('Could not get data: ' . mysqli_error($conn));
	}
	$row = mysqli_fetch_assoc($retval);
	if( $row['username'] == $name and $row['password'] != $pword){
		echo 'Sorry that password does not match the username.';
	}else if($row['username'] == $name and $row['password'] == $pword){
		$_SESSION['name']= $name;
		$_SESSION['pword'] = $pword;
		header('Location: welcome.php');
		exit;
	}else{
		$sql = "INSERT INTO users ".
      "(username, password) ".
      "VALUES ('$name', '$pword')";
		$Qinput = mysqli_query($conn, $sql);
		if(! $Qinput) {
			die('Could not enter data: ' . mysqli_error($conn));
		}else{
			$_SESSION['name']= $name;
			$_SESSION['pword'] = $pword;
			header('Location: welcome.php');
			exit;
		}
	}

?>