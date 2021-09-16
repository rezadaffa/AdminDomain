<!DOCTYPE html>
<html>
<head>
	<title>Daftar - Dashboard</title>
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
				<form method="post" action="cek_daftar.php">
					<div class="mb-4">
						<label for="nama" class="form-label">Nama</label>
						<input type="nama" class="form-control" name="nama" placeholder="Masukan Nama Kamu" aria-describedby="namaHelp">
					</div>
					<div class="mb-4">
						<label for="email" class="form-label">Email</label>
						<input type="email" class="form-control" name="email" placeholder="Masukan Email Kamu" aria-describedby="emailHelp">
					</div>
					<div class="mb-4">
						<label for="telepone" class="form-label">Nomer Telephone</label>
						<input type="telepone" class="form-control" name="telepone" placeholder="Masukan No HP Kamu" aria-describedby="teleponeHelp">
					</div>
					<div class="mb-4">
						<label for="password" class="form-label">Password</label>
						<input type="password" class="form-control" name="password" placeholder="Masukan Password Kamu" aria-describedby="passwordHelp">
					</div>
					<button type="submit" class="btn btn-success w-100 mb-3" name="login">Login</button>
				</form>
				<p class="text-center-login">Belum punya akun? <a href="daftar.php" class="text-decoration-none">Daftar</a></p>
			</div>
		</div>
	</div>

</body>
</html>