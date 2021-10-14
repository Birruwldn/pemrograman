<?php

$server="localhost";
$user="root";
$password="";
$database="view";

$koneksi=mysqli_connect ($server,$user,$password,$database);

if ($koneksi) {
    echo "koneksi sukses";
}else{
    echo "koneksi gagal";
}

?>