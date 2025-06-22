<?php

include("config.php");

//cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $id = $_POST['Id'];
    $nama = $_POST['Nama'];
    $alamat = $_POST['Alamat'];
    $jk= $_POST['Jenis_Kelamin'];
    $agama = $_POST['Agama'];
    $sekolah = $_POST['Sekolah_Asal'];

    //buat query update
    $sql = "UPDATE calon_siswa SET Nama='$nama', Alamat='$alamat', Jenis_kelamin='$jk', 
    Agama='$agama', Sekolah_Asal='$sekolah' WHERE id=$id";
    $query = mysqli_query($koneksi, $sql);

    // apakah query simpan berhasil?
    if( $query) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: List_Calon_Siswa.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }
} else {
    die("Akses dilarang...");
}
?>