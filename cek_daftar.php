<?php
//Include file koneksi ke database
include "koneksi.php";

//menerima nilai dari kiriman form pendaftaran
$nama=$_POST["nama"];
$email=$_POST["email"];
$telepone=$_POST["telepone"];
$password=md5($_POST["password"]); //untuk password digunakan enskripsi md5


//Query input menginput data kedalam tabel anggota
  $sql="insert into user (nama,email,telepone,password) values
		('$nama','$email','$telepone','$password')";

//Mengeksekusi/menjalankan query diatas	
  $hasil=mysqli_query($conn,$sql);

//Kondisi apakah berhasil atau tidak
  if ($hasil) {
	echo "Berhasil simpan data anggota";
	header("location:index.php");
	exit;
  }
else {
	echo "Gagal simpan data anggota";
	exit;
}  

?>