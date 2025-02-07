<?php
if (isset($_POST['submit'])) {
    include_once('koneksi.php');
    $NoTelpWA=mysqli_real_escape_string($kon,$_POST['NoTelpWA']);
    $NamaPembeli=mysqli_real_escape_string($kon,$_POST['NamaPembeli']);
    $Alamat=mysqli_real_escape_string($kon,$_POST['Alamat']);
    $sql="INSERT INTO `Pembeli`(`NoTelpWA`, `NamaPembeli`, `Alamat`) VALUES ('".$NoTelpWA."','".$NamaPembeli."','".$Alamat."')";
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