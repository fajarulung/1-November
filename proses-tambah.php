<?php
include ("koneksi.php");
if (isset($_POST['simpan'])){
    $nama = $_POST ['nama'];
    $type = $_POST ['type'];
    $nomor = $_POST ['nomor'];
    $sebelah = $_POST ['sebelah'];
    $pembayaran = $_POST ['pembayaran'];

    $sql = "INSERT INTO parkir(nama_lengkap, type_kendaraan, nomor_plat, parkir_sebelah, pembayaran)
     VALUES ('$nama', '$type', '$nomor', '$sebelah', '$pembayaran')";
    $query = mysqli_query($db, $sql);

    if($query){
       echo "Selamat Anda sudah bisa!";
    }else{
       echo "Maaf belum bisa";
}
}
?>