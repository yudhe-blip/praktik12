<?php
if (isset($_POST['submit'])) {
    include_once('koneksi.php');
    $KodeBarang=mysqli_real_escape_string($kon,$_POST['KodeBarang']);
    $NamaBarang=mysqli_real_escape_string($kon,$_POST['NamaBarang']);
    $JumlahStok=mysqli_real_escape_string($kon,$_POST['JumlahStok']);
    $HargaBeliTertinggi=mysqli_real_escape_string($kon,$_POST['HargaBeliTertinggi']);
    $HargaJualTertinggi=mysqli_real_escape_string($kon,$_POST['HargaJualTertinggi']);
    $sql="INSERT INTO `barang`(`KodeBarang`, `NamaBarang`, `JumlahStok`, `HargaBeliTertinggi`, `HargaJualTertinggi`) VALUES ('".$KodeBarang."','".$NamaBarang."','".$JumlahStok."','".$HargaBeliTertinggi."','".$HargaJualTertinggi."')";
    $q=mysqli_query($kon,$sql);
    if ($q) {
        echo 'Rekord sudah disimpan !';
    } else {
        echo 'Rekord gagal disimpan !';
    }
} else {
    echo 'Salah format API !';
}
?>