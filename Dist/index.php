<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registration Form In HTML and CSS</title>
	<link rel="stylesheet" href="css/styles.css">
</head>
<body>
	<header>
		<div class="container">
		   	<h1 class="logo">Tugas 2 Praktikum</h1>
		    <nav>
		    	<ul>
		        <li><a href="#">Beranda</li>
		        <li><a href="#">Mahasiswa</a></li>
		        <li><a href="#">Ingfo Praktikum</a></li>
			    </ul>
		    </nav>
		</div>
	</header>

<div class="wrapper">
	<div class="registration_form">
		<form action="output.php" method="post">
			<div class="form_wrap">
				<div class="input_grp">
					<div class="input_wrap">
						<label for="fname">First Name</label>
						<input type="text" id="fname" name="fname" placeholder="First Name">
					</div>
					<div class="input_wrap">
						<label for="lname">Last Name</label>
						<input type="text" id="lname" name="lname" placeholder="Last Name">
					</div>
				</div>
				<div class="input_wrap">
					<label for="email">NIM</label>
					<input type="text" id="nim" name="nim" placeholder="Student Number">
				</div>
				<div class="input_wrap">
					<label>Gender</label>
					<ul>
						<li>
							<label class="radio_wrap">
								<input type="radio" name="jenis_kelamin" value="Laki-Laki" class="input_radio">
								<span>Male</span>
							</label>
						</li>
						<li>
							<label class="radio_wrap">
								<input type="radio" name="jenis_kelamin" value="Perempuan" class="input_radio" checked>
								<span>Female</span>
							</label>
						</li>
					</ul>
				</div>
				<div class="input_wrap">
					<label for="city">Email</label>
					<input type="text" id="email" name="email" placeholder="name@example.com">
				</div>
				<div class="input_wrap">
					<input type="submit" value="submit" class="submit_btn">
				</div>
			</div>
		</form>
	</div>
</div>

</body>
</html>