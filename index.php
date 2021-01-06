<?php 
	session_start();
?>

<html>

<head> </head>

<body>
	<p align = "center">Welcome , Please login : </p>
	
	<br><br>
	<form action = "index.php" align = "center" method = "post" id = "loginForm">
		Username: <input type ="text" name = "username"> </input>
		<br><br>
		Password: <input type ="password" name = "password"> </input>
		<br><br>
		<br>
		<button type= "submit" value = "Login" form = "loginForm"> Login </button>
	</form>
		<p align = "center">
		<input type="button" value="register" onclick="window.location='register.php'" /> 
		</p>
<?php
	include 'db_connection.php';
	$name = $_POST['username'];
	$password = $_POST['password'];
	
	if(!empty($name) && !empty($password)){
		//Save as session variable
		$_SESSION["username"] = $name;
		$conn = OpenCon();
		$encodedPassword = base64_encode($password);
		$sql = "SELECT name , id FROM feuga.users WHERE name = '$name' AND password = '$encodedPassword'";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			$userId = $row['id'];
			$sql ="UPDATE feuga.users SET logged_in=1 WHERE id='$userId'";
			$result = $conn->query($sql);
			CloseCon($conn);
			header("Location: board.php");
			echo "redirect";
		}
		else {
			echo "<p align='center'>wrong username or password</p>";
			CloseCon($conn);
		}
	}
?>
	
	
</body>


</html>