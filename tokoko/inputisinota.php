<?php
if (isset($_POST['submit'])) {
    include_once('koneksi.php');
    $NoNo=mysqli_real_escape_string($kon,$_POST['NoNo']);
    $KodeB=mysqli_real_escape_string($kon,$_POST['KodeB']);
    $JumlahJual	=mysqli_real_escape_string($kon,$_POST['JumlahJual']);
    $sql="INSERT INTO `IsiNota`(`NoNo`, `KodeB`, `JumlahJual`) VALUES ('".$NoNo."','".$KodeB."','".$JumlahJual."')";
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