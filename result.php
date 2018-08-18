<!DOCTYPE html>
<html>
<head>
	<title>Result</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<meta name="theme-color" content="#008080">
	<script src="bootstrap.bundle.js"></script>
	<style type="text/css">
		.results{
			margin: 5%;
		}
		hr {
	    display: block;
	    height: 2px;
	    border: 0;
	    border-top: 1px solid #ccc;
	    margin: 1em 0;
	    padding: 0; 
	}
	</style>
</head>
<body class="jumbotron">
<center>
<form  action="result.php" method="get">
	<img src="logo2.gif">
    <input type="text" name="key" size="80" aria-label="Search">
    <button class="btn btn-outline-success" type="submit" name="search">Search</button>
 </form>
 <button class="btn btn-outline-info" onclick="location.href='index.php'">Go back</button>
</center>
 <!--Search Engine script-->
 <?php
 $conn=mysqli_connect("localhost","id6837368_admin","123456",'id6837368_admin'); #database connect
 	if (isset($_GET['search'])) {
 		$getValue=$_GET['uquery']; #getting user uqery
 		if ($getValue=='') { #if user does not type anything
 			echo "<h2 align='center'>Please go back and write something</h2>";
 			exit();
 		}
 		$resquery="SELECT * from sites WHERE site_keywords like '%$getValue%';";
 		$res=mysqli_query($conn, $resquery);
 		if (mysqli_num_rows($res)<1) { #if page not found
 			echo "<h2 align='center'>No page exists</h2>";
 			exit();
 		}
 		while ($row=mysqli_fetch_assoc($res)) { #getting details of user query from database
 			$site_title=$row['site_title'];
 			$site_link=$row['site_link'];
 			#$site_keywords=$row['site_keywords'];
 			$site_desc=$row['site_desc'];
 			$site_image=$row['site_image'];
 		}
 		echo "<div class='results' class='jumbotron justify-center'><hr>
 			<h3>$site_title</h3>
 			<a href='$site_link' target='_blank'>$site_link</a><br>
 			<p align='justify'>$site_desc</p><br>
 			<img src='images/$site_image' width='100' height='100' alt='$site_title'><hr>
 		</div>";

 	}

 ?>

</body>
</html>