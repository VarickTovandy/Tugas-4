<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tugas 2 Praktikum</title>
	<link rel="stylesheet" href="css/styleoutput.css">
</head>
<body>
	<header>
		<div class="container">
		   	<h1 class="logo">Tugas 2 Praktikum</h1>
		    <nav>
		    	<ul>
		        <li><a href="#">Beranda</li>
		        <li><a href="#">Mahasiswa</a></li>
		        <li><a href="#">Info Praktikum</a></li>
			    </ul>
		    </nav>
		</div>
	</header>

	<div class="wrapper">
		<div class="registration_form">
		<?php
			echo "<p>Nama Lengkap		: $_POST[fname] $_POST[lname] </p><br>";
			echo "<p>NIM				: $_POST[nim] </p><br>";
			echo "<p>Jenis Kelamin		: $_POST[jenis_kelamin] </p><br>";
			echo "<p>Email				: $_POST[email] </p><br>";						
		?>
		</div>
	</div>
</body>
</html>