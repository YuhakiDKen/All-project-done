<?php
$koneksi = mysqli_connect("localhost","root","","ukk_fahfa");

//cek koneksi ketika gagal
if (mysqli_connect_errno()){
	echo "koneksi database gagal : " . mysqli_connect_error();

}

?>