<?php
if (isset($_POST['submit'])) {
    include_once('koneksi.php');
    $KodeBarang=mysqli_real_escape_string($kon,$_POST['KodeBarang']);
    $NamaBarang=mysqli_real_escape_string($kon,$_POST['NamaBarang']);
    $JumlahStok=mysqli_real_escape_string($kon,$_POST['JumlahStok']);
    $HargaBeliTertinggi=mysqli_real_escape_string($kon,$_POST['HargaBeliTertinggi']);
    $HargaJualTertinggi=mysqli_real_escape_string($kon,$_POST['HargaJualTertinggi']);
    $sql="UPDATE `barang` SET `NamaBarang`='".$NamaBarang."',`JumlahStok`='".$JumlahStok."',`HargaBeliTertinggi`='".$HargaBeliTertinggi."',`HargaJualTertinggi`='".$HargaJualTertinggi."' WHERE `KodeBarang` = '".$KodeBarang."'";
    $q=mysqli_query($kon,$sql);
    if ($q) {
        echo 'Rekord barang sudah diperbaiki !';
    } else {
        echo 'Rekord barang gagal diperbaiki !';
    }
} else {
    echo 'Salah format API !';
}
?>