<?php
if (isset($_POST['submit'])) {
    include_once('koneksi.php');
    $KodeBarang=mysqli_real_escape_string($kon,$_POST['KodeBarang']);
    $sql="SELECT * FROM `barang` WHERE `KodeBarang` = '".$KodeBarang."'";
    $q=mysqli_query($kon,$sql);
    $r=mysqli_fetch_assoc($q);
    $hasil=array();
    if (!empty($r)) {
        array_push($hasil,$r);
        echo json_encode($hasil);
    } else {
        echo 'Rekord barang tidak ditemukan !';
    }
} else {
    echo 'Salah format API !';
}
?>