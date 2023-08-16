<?php
$namaHost = "localhost";
$username = "root";
$password ="";
$database="praktikumdb";

$connect = mysqli_connect($namaHost,$username,$password,$database);

if($connect){
    echo "Koneksi dengan MySQL berhasil <br> ";
}
else {
    echo "Koneksi dengan MySQL gagal <br> " . mysqli_connect_error();
}

$sql = "CREATE TABLE mahasiswa (
    id int primary key,
    nama varchar(30) not null,
    alamat varchar(50) not null)";

    if (mysqli_query($connect, $sql)) {
        echo "Tabel mahasiswa berhasil dibuat <br> ";
        # code...
    } else {
        echo "Tabel mahasiswa gagal dibuat <br>" . mysqli_error($connect);
    }
    mysqli_close($connect);
?>