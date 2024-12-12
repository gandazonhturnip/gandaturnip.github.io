<?php

	$server = "localhost";
	$username = "root";
	$password = "";
	$database = "tigattarup";
	
	$koneksi = mysqli_connect($server, $username, $password, $database) or DIE ("Koneksi ke database gagal");