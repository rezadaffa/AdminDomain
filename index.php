<!DOCTYPE html>
<html>
<head>
	<title>Login - Dashboard</title>
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
	<link rel="shortcut icon" href="img/logo.png">
</head>
<body class="background">
	<div class="container">
		<div class="row vh-100 align-items-center justify-content-center">
			<div class="col-sm-8 col-md-6 col-lg-4 bg-white rounded p-4 shadow">
				<div class="row justify-content-center mb-4">
					<img src="img/logo_bb.png" class="w-25">
				</div>

				<?php 
				if(isset($_GET['pesan'])){
					if($_GET['pesan'] == "gagal"){
						echo "Login gagal! email dan password salah!";
					} else if($_GET['pesan'] == "logout"){
						echo "Anda telah berhasil logout";
					} else if($_GET['pesan'] == "belum_login"){
						echo "Anda harus login untuk mengakses halaman admin";
					}
				}
				?>

				<form method="post" action="cek_login.php">
					<div class="mb-4">
						<label for="email" class="form-label">Email</label>
						<input type="email" class="form-control" name="email" placeholder="Masukan Email Kamu" aria-describedby="emailHelp">
					</div>
					<div class="mb-4">
						<label for="password" class="form-label">Password</label>
						<input type="password" class="form-control" name="password" placeholder="Masukan Password Kamu" aria-describedby="passwordHelp">
					</div>
					<div class="mb-4">
						<input type="checkbox" name="form-check-input" id="remember">
						<label class="form-check-label" for="remember">Ingat Saya</label>
					</div>
					<button type="submit" class="btn btn-success w-100 mb-3" name="login">Login</button>
				</form>
				<p class="text-center-login">Belum punya akun? <a href="daftar.php" class="text-decoration-none">Daftar</a></p>
			</div>
		</div>
	</div>

</body>
</html>