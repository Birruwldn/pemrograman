<?php
session_start();
?>

<html>
<head>
<title> Menu </title>
</head>
<body> 
<ul>
	<?php
	$level =$_SESSION['level']=='pengguna';
	if($level){
	?>
	<h2> Selamat datang Di Menu Daftar Barang </h2>
	<li><a href="view_barang.php"> Daftar Barang ada disini </a></li>
	<?php }else{ ?>
	<h2> Selamat datang di dalam menu </h2>
	<li><a href="view_anggota.php"> Daftar Anggota </a></li>
	<li><a href="view_kategori.php"> Daftar Kategori </a></li>
	<li><a href="view_barang.php"> Daftar Barang </a></li>
	<?php } ?>
    <li><a href="log_out.php"> Keluar </a></li>
	</ul>
</body>
</html>