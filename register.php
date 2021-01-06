<html>
<head> </head>


<body align = "center">
	Please register by completing the form:
	<br><br>
	<form action = "register.php" method = "post" id = "RegisterForm">
		Username : <input type = "text" name = "Rusername"></input>
		<br><br>
		Password :  <input type = "password" name = "Rpassword"></input>
		<br><br>
		<button type= "submit" value = "register"> Register </button>

	</form>
	<button type="BackToLogin" value="BackToLogin" onclick="window.location='index.php'" />BackToLogin</button>
	
	
<?php
	include 'db_connection.php';
	$name = $_POST['Rusername'];
	$password = $_POST['Rpassword'];
	
	if(!empty($name) && !empty($password)){
		$conn = OpenCon();

		$sql = "SELECT name FROM feuga.users WHERE name = '$name'";

		$result = $conn->query($sql);
		
		if ($result->num_rows > 0) {
			echo "<p>username already exists</p>";
		} else {
			$encodedPassword = base64_encode($password);
			$sql ="INSERT INTO feuga.users (name,password) VALUES ('$name','$encodedPassword')";
			$conn->query($sql);
			if($conn){
				$doRedirect = true;
			}
			echo "Test";
		}

		CloseCon($conn);
		
		if($doRedirect) {
			header("Location: index.php");
			exit;
		}
	} else {
		echo "Fill in username & password";
	}
?>
	
	
</body>

</html>
