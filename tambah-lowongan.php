<?php
include 'koneksi.php'; // Pastikan file koneksi ke database sudah ada

if (isset($_POST['submit'])) {
    $perusahaan = $_POST['perusahaan'];
    $posisi = $_POST['posisi'];
    $gaji_minimal = $_POST['gaji_minimal'];
    $gaji_maksimal = $_POST['gaji_maksimal'];
    $lokasi = $_POST['lokasi'];
    $tipe_pekerjaan = $_POST['tipe_pekerjaan'];
    $deskripsi = $_POST['deskripsi'];

    $query = "INSERT INTO lowongan (perusahaan, posisi, gaji_minimal, gaji_maksimal, lokasi, tipe_pekerjaan, deskripsi) 
              VALUES ('$perusahaan', '$posisi', '$gaji_minimal', '$gaji_maksimal', '$lokasi', '$tipe_pekerjaan', '$deskripsi')";

    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Lowongan berhasil ditambahkan!');</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8" />
    <link rel="icon" href="../assets/icon.png" />
    <link rel="stylesheet" href="css/tambah-lowongan.css">
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>WorkForge-perusahaan | Tambah Lowongan</title>
</head>
<body>
    <div class="sidebar">
        <div class="logo-details">
            <span class="logo_name">Work<span>Forge</span></span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="dasboard-perusahaan.php" class="active">
                    <i class="bx bx-tachometer"></i>
                    <span class="links_name">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="tambah-lowongan.php">
                    <i class="bx bx-file"></i>
                    <span class="links_name">Tambah Lowongan</span>
                </a>
            </li>
            <li>
                <a href="">
                    <i class="bx bx-book"></i>
                    <span class="links_name">Tips Loker</span>
                </a>
            </li>
            <li>
                <a href="pasanglowongankerja.php">
                    <i class="bx bx-log-out-circle"></i>
                    <span class="links_name">Log Out</span>
                </a>
            </li>
        </ul>
    </div>
    <section class="home-section">
        <nav>
            <div class="sidebar-button">
                <i class="bx bx-menu sidebarBtn"></i>
            </div>
            <div class="profile-details">
                <span class="admin_name">WorkForge admin</span>
            </div>
        </nav>
        <div class="home-content">
            <h2>Tambah Lowongan Baru</h2>
            <form method="POST" class="form-lowongan">
                <label>Nama Perusahaan:</label><br>
                <input type="text" name="perusahaan" required><br>

                <label>Posisi:</label><br>
                <input type="text" name="posisi" required><br>

                <label>Gaji (Minimal):</label><br>
                <input type="number" name="gaji_minimal" required><br>

                <label>Gaji (Maksimal):</label><br>
                <input type="number" name="gaji_maksimal" required><br>

                <label>Lokasi:</label><br>
                <input type="text" name="lokasi" required><br>

                <label>Tipe Pekerjaan:</label><br>
                <input type="text" name="tipe_pekerjaan" required><br>

                <label>Deskripsi:</label><br>
                <textarea name="deskripsi" required></textarea><br>

                <button type="submit" name="submit">Simpan</button>
            </form>
        </div>
    </section>
</body>
</html>
