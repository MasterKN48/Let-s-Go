<!DOCTYPE html>
<html>
<head>
	<title>insert sites</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="theme-color" content="#008080">
	<link rel="icon" type="image/png" href="ico.png"/>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<script src="bootstrap.bundle.js"></script>
	<style type="text/css">
		body{
			background-image: url('back.gif');
		}
	</style>
</head>
<body>
<form action="insert.php" method="POST" enctype="multipart/form-data">
	<table width="500" border="2" cellspacing="2" align="center">
		<tr>
			<td>Inserting new website</td>
		</tr>
		<tr>
			<td>site title:</td>
			<td><input type="text" name="site_title"></td>
		</tr>
		<tr>
			<td>site Link:</td>
			<td><input type="text" name="site_link"></td>
		</tr>
		<tr>
			<td>site keywords:</td>
			<td><input type="text" name="site_key"></td>
		</tr>
		<tr>
			<td>site desc:</td>
			<td><textarea type="text" name="site_desc"></textarea></td>
		</tr>
		<tr>
			<td>site image:</td>
			<td><input type="file" name="site_image"></td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="Add Site now"></td>
		</tr>
	</table>
	<button class="btn"><a href="index.php">HOME</a></button>
</form>



</body>
</html>
<?php
$conn=mysqli_connect("localhost","id6837368_admin","123456",'id6837368_admin');
if (isset($_POST['submit'])){
	$site_title=$_POST['site_title'];
	$site_link=$_POST['site_link'];
	$site_key=$_POST['site_key'];
	$site_desc=$_POST['site_desc'];
	$site_image=$_FILES['site_image']['name'];
	$site_image_tmp=$_FILES['site_image']['tmp_name'];
	if ($site_title=='' || $site_link=='' || $site_key=='' || $site_desc=='') {
	 	echo '<script>alert("empty flieds")</script>';
	 	exit();
	 } 
	 else{
		 $sql="INSERT INTO sites (site_title,site_link,site_keywords,site_desc,site_image) values ('$site_title','$site_link','$site_key','$site_desc','$site_image');";
		 move_uploaded_file($site_image_tmp,"images/".$site_image);
		 if(mysqli_query($conn, $sql)){
		 	echo '<script>alert("data inserted into table")</script>';
		 }
	}
}

?>