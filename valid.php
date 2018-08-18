<?php
	$conn=mysqli_connect("localhost","id6837368_admin","123456",'id6837368_admin');
	if (isset($_GET['submit'])) {
		$usern=mysqli_real_escape_string($conn, $_GET['username']);
		$pass=mysqli_real_escape_string($conn, $_GET['pass']);
		$sql="SELECT * FROM adminv";
		$result=mysqli_query($conn, $sql);
		while ($row=mysqli_fetch_assoc($result)) {
			$row_u=$row['username'];
			$row_p=$row['password'];
			if ($usern==$row_u && $pass==$row_p) {
				header("LOCATION: insert.php?successfullylogin");
				exit();
			}
			else{
				echo "You have entered wrong details";
				
			}
		}
	}
	else{
		echo "error";
	}

?>