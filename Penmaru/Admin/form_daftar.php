<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Formulir Pendaftaran Siswa Baru</title>
    </head>

    <body>
        <header>
            <h3>Formulir Pendaftaran Siswa Baru</h3>
        </header>

        <form action="proses_pendaftaran.php" method="post">
            <fieldset>
                <p>
                    <label for="nama">Nama :</label>
                    <input type="text" name="nama" placeholder="Ketik Nama Lengkap Kamu :v" />
                </p>

                <p>
                    <label for="alamat">Alamat :</label>
                    <textarea name="alamat"></textarea>
                </p>

                <p>
                    <label for="jenis_kelamin">Jenis Kelamin :</label>
                    <label><input type="radio" name="jenis_kelamin" value="Laki-laki" />Laki-laki</label>
                    <label><input type="radio" name="jenis_kelamin" value="Perempuan" />Perempuan</label>
                </p>

                <p>
                    <label for="agama">Agama :</label>
                    <select name="agama">
                        <option>Islam</option>
                        <option>Kristen</option>
                        <option>Hindu</option>
                        <option>Budha</option>
                        <option>Konghucu</option>
                    </select>
                </p>

                <p>
                    <label for="sekolah_asal">Sekolah Asal :</label>
                    <input type="text" name="sekolah_asal" placeholder="Ketik Asal Sekolah Kamu :v" />
                </p>

                <p>
                    <input type="submit" value="Daftar" name="daftar" />
                </p>

            </fieldset>
        </form>
    </body>
</html>