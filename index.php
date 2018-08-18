<!DOCTYPE html>
<html>
<head>
	<title>Let's Go beta 1.0</title>
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
<body class="jumbotron">
<center>
	<div class="container">
	 <img src="logo.gif"><br>
     <form action="result.php" method="get">
      <input class="form-control mr-sm-2" type="search" name="uquery" placeholder="Search" aria-label="Search" style="width: 50vw;"><br>
      <button class="btn btn-outline-danger my-2 my-sm-0" name="search" type="submit">Let's Search</button>
     </form>

	</div>
</center>
<button onclick="location.href='admin.php'" class="btn">Admin </button>
</body>
</html>