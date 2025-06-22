<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: ../login.php");
    exit;
}

include '../koneksi/config.php';

$total      = $koneksi->query("SELECT COUNT(*) AS total FROM calon_siswa")
->fetch_assoc() ['total'];
$laki       = $koneksi->query("SELECT COUNT(*) AS total FROM calon_siswa
WHERE Jenis_Kelamin='Laki-Laki'")->fetch_assoc()['total'];
$perempuan  = $koneksi->query("SELECT COUNT(*) AS total FROM calon_siswa
WHERE Jenis_Kelamin='Perempuan'")->fetch_assoc()['total'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="style.css?v=<?= time(); ?>">
</head>
<body>
        
                                                                        <!-- Konten Utama -->

    <div class="main-content">
        <header>
            <div class="stats-content">
                <div class="stat-card bg-blue">
                    <div class="stat-icon">
                        <img src="" alt="Chart Icon" width="40" height="40">
                    </div>
                    <div class="stat_content">
                        <h3>Total Pendaftaran</h3>
                        <p><?= $total ?></p>
                    </div>
                </div>
                                                                        <!-- Laki - Laki -->
                <div class="stat-card bg-green">
                    <div class="stat-icon">
                        <img src="" alt="Male Icon" width="40" height="40">
                    </div>
                    <div class="stat-content">
                        <h3>Pendaftaran Laki-laki</h3>
                        <p><?= $laki ?></p>
                    </div>
                </div>
                                                                        <!-- Perempuan -->
                <div class="stat-card bg-pink">
                    <div class="stat-icon">
                        <img src="" alt="Female Icon" width="40" height="40">
                    </div>
                    <div class="stat-content">
                        <h3>Pendaftaran Perempuan</h3>
                        <p><?= $perempuan ?></p>
                    </div>
                </div>
            </div>

        </header>

        <?php if (isset($_GET['status'])): ?>
            <p class="<?= $_GET['status'] == 'sukses' ? 'succes' : 'error' ?>">
                <?= $_GET['status'] == 'sukses' ? 'Pendaftaran siswa baru berhasil'
                : 'Pendaftaran gagal' ?> 
            </p>
        <?php endif; ?>
</div>
</body>
</html>