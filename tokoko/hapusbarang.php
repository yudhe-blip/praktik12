<?php
if (isset($_POST['submit'])) {
    include_once('koneksi.php');
    $KodeBarang=mysqli_real_escape_string($kon,$_POST['KodeBarang']);
    $sql="DELETE FROM `barang` WHERE `KodeBarang` = '".$KodeBarang."'";
    $q=mysqli_query($kon,$sql);
    if ($q) {
        echo 'Rekord barang sudah dihapus !';
    } else {
        echo 'Rekord barang gagal dihapus !';
    }
} else {
    echo 'Salah format API !';
}
?>