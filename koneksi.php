<?php
$koneksi = mysqli_connect("localhost", "root", "", "uas_202055202050");

if (mysqli_connect_errno()) {
	echo "koneksi Database Gagal:".mysqli_connect_errno();
}

?>