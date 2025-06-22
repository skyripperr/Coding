<?php

include("config.php");

if( isset($_GET['id'])) {

    // ambil id dari query string
    $id = $_GET['id'];

    // buat query hapus
    $sql = "DELETE FROM calon_siswa WHERE id=$id";
    $query = mysqli_query($koneksi, $sql);

    // apakah query hapus berhasil?
    if( $query) {
        header('Location: List_Calon_Siswa.php');
    } else {
        die("Gagal menghapus. . .");
    }
} else {
    die("akses dilarang. . .");
}
?>