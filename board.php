<?php 
	session_start();
?>


<html>
	<head> 
		<title>FEYGA</title>
		<link rel="stylesheet" type="text/css" href='game.css'>
		<meta http-equiv="refresh" content="10" >
	</head>
	<?php 
		include 'db_connection.php';
		include 'start_game_functions.php';
	?>
	<body>
		<h2>
			<?php echo "Welcome, ".$_SESSION["username"]; ?>
		</h2>
		<?php
			if(array_key_exists('zari', $_POST)) { 
				throwDice(); 
			} 
			else if(array_key_exists('start', $_POST)) { 
				startGame(); 
			} 
			function throwDice() { 
				$diceA = rand(1,6);
				$diceB = rand(1,6);
				echo "<h4> $diceA <br> $diceB </h4>";
			} 
			function startGame() { 
				$conn = OpenCon();
				$sql = "SELECT name , id FROM feuga.users WHERE logged_in='1'";
				$result = $conn->query($sql);
				if ($result->num_rows == 2) {
					$userA = $result->fetch_assoc();
					$userB = $result->fetch_assoc();
					$userIdA = $userA['id'];
					$userIdB = $userB['id'];
					
					$sql = "SELECT * FROM feuga.board";
					$result = $conn->query($sql);
					
					if ($result->num_rows == 0) {
						$sql = "INSERT INTO feuga.board (user_white,user_black) VALUES ('$userIdA','$userIdB')";
						$conn->query($sql);
						$sql = "INSERT INTO feuga.user_poulia (user_id,board_position,number_poulia) VALUES ('$userIdA','1', '15')";
						$conn->query($sql);
						$sql = "INSERT INTO feuga.user_poulia (user_id,board_position,number_poulia) VALUES ('$userIdB','13', '15')";
						$conn->query($sql);
					}
					
					// while($row = $result->fetch_assoc()){
					// 	echo $row['name']." ";
					// 	echo $row['id']." ";
					// }

					// $row = $result->fetch_assoc();
					// $userId = $row['id'];
					// $sql ="UPDATE feuga.users SET logged_in=1 WHERE id='$userId'";
					// $result = $conn->query($sql);
				}
				CloseCon($conn);
			} 
    	?>
		
		
	</body>
	<form method="post"> 
        <input type="submit" name="zari" value="DICE"/> 
        <input type="submit" name="start" value="START"/> 
		<input type="text" name="move"/>
    </form> 
	<table id="board">
		<tr class="tavli-row">
			<td class="tavli-position">24</td>
			<td class="poulia-position">
				<?php 
					$conn = OpenCon();
					$sql = "SELECT number_poulia, user_id FROM feuga.user_poulia WHERE board_position='24'";
					$result = $conn->query($sql);
					$poulia = $result->fetch_assoc();
					$userId = $poulia['user_id'];
					$numberOfPoulia = $poulia['number_poulia'];
					echo $userId."/".$numberOfPoulia;
					CloseCon($conn);
				?>
			</td>
			<td class="tavli-position">23</td>
			<td class="poulia-position">
				<?php 
					$conn = OpenCon();
					$sql = "SELECT number_poulia, user_id FROM feuga.user_poulia WHERE board_position='12'";
					$result = $conn->query($sql);
					$poulia = $result->fetch_assoc();
					$userId = $poulia['user_id'];
					$numberOfPoulia = $poulia['number_poulia'];
					echo $userId."/".$numberOfPoulia;
					CloseCon($conn);
				?>
			</td>
			<td class="tavli-position">22</td>
			<td class="poulia-position">
				<?php 
					$conn = OpenCon();
					$sql = "SELECT number_poulia, user_id FROM feuga.user_poulia WHERE board_position='12'";
					$result = $conn->query($sql);
					$poulia = $result->fetch_assoc();
					$userId = $poulia['user_id'];
					$numberOfPoulia = $poulia['number_poulia'];
					echo $userId."/".$numberOfPoulia;
					CloseCon($conn);
				?>
			</td>
			<td class="tavli-position">21</td>
			<td class="poulia-position">
				<?php 
					$conn = OpenCon();
					$sql = "SELECT number_poulia, user_id FROM feuga.user_poulia WHERE board_position='12'";
					$result = $conn->query($sql);
					$poulia = $result->fetch_assoc();
					$userId = $poulia['user_id'];
					$numberOfPoulia = $poulia['number_poulia'];
					echo $userId."/".$numberOfPoulia;
					CloseCon($conn);
				?>
			</td>
			<td class="tavli-position">20</td>
			<td class="poulia-position">
				<?php 
					$conn = OpenCon();
					$sql = "SELECT number_poulia, user_id FROM feuga.user_poulia WHERE board_position='12'";
					$result = $conn->query($sql);
					$poulia = $result->fetch_assoc();
					$userId = $poulia['user_id'];
					$numberOfPoulia = $poulia['number_poulia'];
					echo $userId."/".$numberOfPoulia;
					CloseCon($conn);
				?>
			</td>
			<td class="tavli-position">19</td>
			<td class="poulia-position">
				<?php 
					$conn = OpenCon();
					$sql = "SELECT number_poulia, user_id FROM feuga.user_poulia WHERE board_position='19'";
					$result = $conn->query($sql);
					$poulia = $result->fetch_assoc();
					$userId = $poulia['user_id'];
					$numberOfPoulia = $poulia['number_poulia'];
					echo $userId."/".$numberOfPoulia;
					CloseCon($conn);
				?>
			</td>
			<td class="tavli-position">18</td>
			<td class="poulia-position">
				<?php 
					$conn = OpenCon();
					$sql = "SELECT number_poulia, user_id FROM feuga.user_poulia WHERE board_position='18'";
					$result = $conn->query($sql);
					$poulia = $result->fetch_assoc();
					$userId = $poulia['user_id'];
					$numberOfPoulia = $poulia['number_poulia'];
					echo $userId."/".$numberOfPoulia;
					CloseCon($conn);
				?>
			</td>
			<td class="tavli-position">17</td>
			<td class="poulia-position">
				<?php 
					$conn = OpenCon();
					$sql = "SELECT number_poulia, user_id FROM feuga.user_poulia WHERE board_position='17'";
					$result = $conn->query($sql);
					$poulia = $result->fetch_assoc();
					$userId = $poulia['user_id'];
					$numberOfPoulia = $poulia['number_poulia'];
					echo $userId."/".$numberOfPoulia;
					CloseCon($conn);
				?>
			</td>
			<td class="tavli-position">16</td>
			<td class="poulia-position">
				<?php 
					$conn = OpenCon();
					$sql = "SELECT number_poulia, user_id FROM feuga.user_poulia WHERE board_position='16'";
					$result = $conn->query($sql);
					$poulia = $result->fetch_assoc();
					$userId = $poulia['user_id'];
					$numberOfPoulia = $poulia['number_poulia'];
					echo $userId."/".$numberOfPoulia;
					CloseCon($conn);
				?>
			</td>
			<td class="tavli-position">15</td>
			<td class="poulia-position">
				<?php 
					$conn = OpenCon();
					$sql = "SELECT number_poulia, user_id FROM feuga.user_poulia WHERE board_position='15'";
					$result = $conn->query($sql);
					$poulia = $result->fetch_assoc();
					$userId = $poulia['user_id'];
					$numberOfPoulia = $poulia['number_poulia'];
					echo $userId."/".$numberOfPoulia;
					CloseCon($conn);
				?>
			</td>
			<td class="tavli-position">14</td>
			<td class="poulia-position">
				<?php 
					$conn = OpenCon();
					$sql = "SELECT number_poulia, user_id FROM feuga.user_poulia WHERE board_position='14'";
					$result = $conn->query($sql);
					$poulia = $result->fetch_assoc();
					$userId = $poulia['user_id'];
					$numberOfPoulia = $poulia['number_poulia'];
					echo $userId."/".$numberOfPoulia;
					CloseCon($conn);
				?>
			</td>
			<td class="tavli-position">13</td>
			<td class="poulia-position">
				<?php 
					$conn = OpenCon();
					$sql = "SELECT number_poulia, user_id FROM feuga.user_poulia WHERE board_position='13'";
					$result = $conn->query($sql);
					$poulia = $result->fetch_assoc();
					$userId = $poulia['user_id'];
					$numberOfPoulia = $poulia['number_poulia'];
					echo $userId."/".$numberOfPoulia;
					CloseCon($conn);
				?>
			</td>
		</tr>
		<tr>
			<td class="tavli-position">01</td>
			<td class="poulia-position">
				<?php 
					$conn = OpenCon();
					$sql = "SELECT number_poulia, user_id FROM feuga.user_poulia WHERE board_position='1'";
					$result = $conn->query($sql);
					$poulia = $result->fetch_assoc();
					$userId = $poulia['user_id'];
					$numberOfPoulia = $poulia['number_poulia'];
					echo $userId."/".$numberOfPoulia;
					CloseCon($conn);
				?>
			</td>
			<td class="tavli-position">02</td>
			<td class="poulia-position">
				<?php 
					$conn = OpenCon();
					$sql = "SELECT number_poulia, user_id FROM feuga.user_poulia WHERE board_position='2'";
					$result = $conn->query($sql);
					$poulia = $result->fetch_assoc();
					$userId = $poulia['user_id'];
					$numberOfPoulia = $poulia['number_poulia'];
					echo $userId."/".$numberOfPoulia;
					CloseCon($conn);
				?>
			</td>
			<td class="tavli-position">03</td>
			<td class="poulia-position">
				<?php 
					$conn = OpenCon();
					$sql = "SELECT number_poulia, user_id FROM feuga.user_poulia WHERE board_position='3'";
					$result = $conn->query($sql);
					$poulia = $result->fetch_assoc();
					$userId = $poulia['user_id'];
					$numberOfPoulia = $poulia['number_poulia'];
					echo $userId."/".$numberOfPoulia;
					CloseCon($conn);
				?>
			</td>
			<td class="tavli-position">04</td>
			<td class="poulia-position">
				<?php 
					$conn = OpenCon();
					$sql = "SELECT number_poulia, user_id FROM feuga.user_poulia WHERE board_position='4'";
					$result = $conn->query($sql);
					$poulia = $result->fetch_assoc();
					$userId = $poulia['user_id'];
					$numberOfPoulia = $poulia['number_poulia'];
					echo $userId."/".$numberOfPoulia;
					CloseCon($conn);
				?>
			</td>
			<td class="tavli-position">05</td>
			<td class="poulia-position">
				<?php 
					$conn = OpenCon();
					$sql = "SELECT number_poulia, user_id FROM feuga.user_poulia WHERE board_position='5'";
					$result = $conn->query($sql);
					$poulia = $result->fetch_assoc();
					$userId = $poulia['user_id'];
					$numberOfPoulia = $poulia['number_poulia'];
					echo $userId."/".$numberOfPoulia;
					CloseCon($conn);
				?>
			</td>
			<td class="tavli-position">06</td>
			<td class="poulia-position">
				<?php 
					$conn = OpenCon();
					$sql = "SELECT number_poulia, user_id FROM feuga.user_poulia WHERE board_position='6'";
					$result = $conn->query($sql);
					$poulia = $result->fetch_assoc();
					$userId = $poulia['user_id'];
					$numberOfPoulia = $poulia['number_poulia'];
					echo $userId."/".$numberOfPoulia;
					CloseCon($conn);
				?>
			</td>
			<td class="tavli-position">07</td>
			<td class="poulia-position">
				<?php 
					$conn = OpenCon();
					$sql = "SELECT number_poulia, user_id FROM feuga.user_poulia WHERE board_position='7'";
					$result = $conn->query($sql);
					$poulia = $result->fetch_assoc();
					$userId = $poulia['user_id'];
					$numberOfPoulia = $poulia['number_poulia'];
					echo $userId."/".$numberOfPoulia;
					CloseCon($conn);
				?>
			</td>
			<td class="tavli-position">08</td>
			<td class="poulia-position">
				<?php 
					$conn = OpenCon();
					$sql = "SELECT number_poulia, user_id FROM feuga.user_poulia WHERE board_position='8'";
					$result = $conn->query($sql);
					$poulia = $result->fetch_assoc();
					$userId = $poulia['user_id'];
					$numberOfPoulia = $poulia['number_poulia'];
					echo $userId."/".$numberOfPoulia;
					CloseCon($conn);
				?>
			</td>
			<td class="tavli-position">09</td>
			<td class="poulia-position">
				<?php 
					$conn = OpenCon();
					$sql = "SELECT number_poulia, user_id FROM feuga.user_poulia WHERE board_position='9'";
					$result = $conn->query($sql);
					$poulia = $result->fetch_assoc();
					$userId = $poulia['user_id'];
					$numberOfPoulia = $poulia['number_poulia'];
					echo $userId."/".$numberOfPoulia;
					CloseCon($conn);
				?>
			</td>
			<td class="tavli-position">10</td>
			<td class="poulia-position">
				<?php 
					$conn = OpenCon();
					$sql = "SELECT number_poulia, user_id FROM feuga.user_poulia WHERE board_position='10'";
					$result = $conn->query($sql);
					$poulia = $result->fetch_assoc();
					$userId = $poulia['user_id'];
					$numberOfPoulia = $poulia['number_poulia'];
					echo $userId."/".$numberOfPoulia;
					CloseCon($conn);
				?>
			</td>
			<td class="tavli-position">11</td>
			<td class="poulia-position">
				<?php 
					$conn = OpenCon();
					$sql = "SELECT number_poulia, user_id FROM feuga.user_poulia WHERE board_position='11'";
					$result = $conn->query($sql);
					$poulia = $result->fetch_assoc();
					$userId = $poulia['user_id'];
					$numberOfPoulia = $poulia['number_poulia'];
					echo $userId."/".$numberOfPoulia;
					CloseCon($conn);
				?>
			</td>
			<td class="tavli-position">12</td>
			<td class="poulia-position">
				<?php 
					$conn = OpenCon();
					$sql = "SELECT number_poulia, user_id FROM feuga.user_poulia WHERE board_position='12'";
					$result = $conn->query($sql);
					$poulia = $result->fetch_assoc();
					$userId = $poulia['user_id'];
					$numberOfPoulia = $poulia['number_poulia'];
					echo $userId."/".$numberOfPoulia;
					CloseCon($conn);
				?>
			</td>
		</tr>
	</table> 
</html>