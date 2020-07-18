	<html>
	<head>
	<title>Index</title>
	</head>
	<body>
	<h2>Main Index</h2>
	<br/>
	<?php
	session_start();
	if($_SESSION["status"]!="login"){
	header("location:login.php?pesan=belum_login");
	}
	?>
	<h4>Selamat datang, <?php echo $_SESSION["username"]; ?>! anda telah login.</h4>
	<a href="donasi/index.php"><button>CRUD Data Donasi</button></a>||<a href="total/index.php"><button>Donasi Terkumpul</button></a>
	<br/>
	<br/>
	<a href="logout.php">LOGOUT</a>
	</body>
	</html>