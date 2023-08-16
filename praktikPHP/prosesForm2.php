<?php
if (isset($_GET['nama']) and isset($_GET['email'])) {
    $nama=$_GET['nama'];
    $email=$_GET['email'];
    $komentar=$_GET['komentar'];
    $isi_form="&nama=$nama&email=$email&komentar=$komentar";
    # code...
} else {
    header("Location:form2.php?error=variable_belum_diset");
}
if (empty($nama)) {
    header("Location:form2.php?error=nama_kosong".$isi_form);
} else if (empty($email)) {
    header("Location:form2.php?error=email_kosong".$isi_form);
} else {
    echo "Nama: $nama <br> email: $email <br> komentar: $komentar";
}
?>