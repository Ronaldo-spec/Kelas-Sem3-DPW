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

$sql = "INSERT INTO mahasiswa(id,nama,alamat)
        VALUES('0001','BernacleBoy','Malang'),('0002','Katakuri','Malang'),('0003','Nekomamushi','Surabaya')";

if (mysqli_query($connect,$sql)) {
    echo "Record berhasil ditambahkan <br> ";
    # code...
} else {
    echo "Record gagal ditambahkan <br> " . mysqli_error($connect);
}
mysqli_close($connect);
?>