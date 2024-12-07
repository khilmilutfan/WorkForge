<?php
include '../koneksi.php';

$id = $_GET['id'];
$sql = "SELECT * FROM tb_lowongan WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$data = $result->fetch_assoc();

if (!$data) {
    echo "<script>alert('Data tidak ditemukan!'); window.location.href = 'daftar.php';</script>";
    exit;
}

$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="UTF-8" />
	<link rel="icon" href="../assets/icon.png" />
	<link rel="stylesheet" href="../css/dasboard-user.css" />
	<link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>WorkForge Admin | Categories</title>
</head>
<body>
<div class="sidebar">
		<div class="logo-details">
			<span class="logo_name">Work<span>Forge</span></span>
		</div>
		<ul class="nav-links">
			<li>
                <a href="../dasboard-user.php" class="active">
                   <i class="bx bx-tachometer"></i>
                   <span class="links_name">Dashboard</span>
                </a>
             </li>
             <li>
                <a href="../daftar lowongan/daftar.php">
                   <i class="bx bx-detail"></i>
                   <span class="links_name">Tambah Lowongan</span>
                </a>
             </li>
             <li>
                <a href="../tips loker dasboard/tips.php">
                   <i class="bx bx-book"></i>
                   <span class="links_name">Tips loker</span>
                </a>
             </li>    
		  <li>
			<a href="../index.php">
			  <i class="bx bx-log-out-circle"></i>
			  <span class="links_name">Log out</span>
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
			<h3>Daftar Lowongan</h3>
			<button type="button" class="btn btn-tambah">
				<a href="daftar-entry.php">Tambah Data</a>
			</button>
			<form method="POST" enctype="multipart/form-data" action="daftar-proses-edit.php">
        <input type="hidden" name="id" value="<?= $data['id'] ?>">
        
        <label>Perusahaan: 
            <input type="text" class="input" name="perusahaan" value="<?= $data['perusahaan'] ?>" required></label><br>
        <label>Posisi: 
            <input type="text"class="input" name="posisi" value="<?= $data['posisi'] ?>" required></label><br>
        <label>Gaji Minimal: 
            <input type="number" class="input"name="gaji_minimal" value="<?= $data['gaji_minimal'] ?>" required></label><br>
        <label>Gaji Maksimal: 
            <input type="number"  class="input"name="gaji_maksimal" value="<?= $data['gaji_maksimal'] ?>" required></label><br>
        <label>Lokasi: 
            <input type="text" class="input" name="lokasi" value="<?= $data['lokasi'] ?>" required></label><br>
        <label>Tipe Pekerjaan: 
            <input type="text" class="input" name="tipe_pekerjaan" value="<?= $data['tipe_pekerjaan'] ?>" required></label><br>
        <label>Deskripsi: 
            <textarea name="deskripsi"class="input" required><?= $data['deskripsi'] ?></textarea></label><br>
        <label>Foto Saat Ini:<br>
            <?php if (!empty($data['foto'])): ?>
                <img src="<?= $data['foto'] ?>" class="input" alt="Foto" style="width: 150px; height: auto;"><br>
            <?php else: ?>
                Tidak ada foto
            <?php endif; ?>
        </label><br>
        <label>Ganti Foto: <input type="file" class="input" name="foto" accept="image/*"></label><br><br>
        
        <button type="submit" class="btn btn-simpan">Simpan Perubahan</button>
    </form>
		</div>
	</section>
</body>
</html>
