<?php

include("config.php");

// kalau tidak ada id di query string
if( !isset($_GET['id'])) {
    header('Location: List_Calon_Siswa.php');
}

// ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM calon_siswa WHERE id=$id";
$query = mysqli_query($koneksi, $sql);
$siswa = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if(mysqli_num_rows($query) < 1) {
    die("Data tidak ditemukan . . .") ;
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Formulir Edit Siswa</title>
    </head>

    <body>
        <header>
            <h3>Formulir Edit Data Calon Siswa Baru</h3>
        </header>

    <form action="proses_edit.php" method="POST">
            <fieldset>
                <input type="hidden" name="Id" value="<?php echo $siswa['Id'] ?>" />
                <p>
                    <label for="Nama">Nama: </label>
                    <input type="text" name="Nama" placeholder="nama lengkap"
                    value="<?php echo $siswa['Nama'] ?>" />
                </p>

                <p>
                    <label for="Alamat">Alamat: </label>
                    <textarea name="Alamat"><?php echo $siswa['Alamat'] ?> </textarea>
                </p>

                <p>
                    <label for="Jenis_kelamin">Jenis Kelamin: </label>
                    <?php $jk = $siswa['Jenis_Kelamin']; ?> 
                    <label><input type="radio" name="Jenis_Kelamin" 
                    value="laki-laki" <?php echo ($jk == 'laki-laki') ? "checked": "" ?>> 
                    Laki-laki</label>
                    
                    <label><input type="radio" name="Jenis_Kelamin" value="perempuan"
                    <?php echo ($jk == 'Perempuan') ? "checked": "" ?>>Perempuan</label>
                </p>

                <p>
                    <label for="Agama">Agama: </label>
                    <?php $agama = $siswa['Agama']; ?> 
                    <select name="Agama">
                        <option <?php echo ($agama == 'Islam') ? "selected": "" ?>>Islam</option>
                        <option <?php echo ($agama == 'Kristen') ? "selected": "" ?>>Kristen</option>
                        <option <?php echo ($agama == 'Hindu') ? "selected": "" ?>>Hindu</option>
                        <option <?php echo ($agama == 'Buddha') ? "selected": "" ?>>Buddha</option>
                        <option <?php echo ($agama == 'Konghucu') ? "selected": "" ?>>Konghucu</option>
                    </select>
                </p>

                <p>
                    <label for="Sekolah_Asal">Sekolah Asal: </label>
                    <input type="text" name="Sekolah_Asal" placeholder="nama sekolah" 
                    value="<?php echo $siswa['Sekolah_Asal'] ?>" />
                </p>

                <p>
                    <input type="submit" value="Simpan" name='simpan' />
                </p>

            </fieldset>
        </form>
    </body>
</html>