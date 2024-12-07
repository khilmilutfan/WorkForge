<?php
include '../koneksi.php';

$id = $_GET['id'];
$sql = "SELECT * FROM tb_tips WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$data = $result->fetch_assoc();

if (!$data) {
    echo "<script>alert('Data tidak ditemukan!'); window.location.href = 'tips.php';</script>";
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
	<link rel="stylesheet" href=../css/dasboard-user.css />
	<!-- Boxicons CDN Link -->
	<link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>WorkForge Admin | Tips loker</title>
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
                <a href="../daftar-lowongan/daftar.php">
                   <i class="bx bx-detail"></i>
                   <span class="links_name">Tambah Lowongan</span>
                </a>
             </li>
             <li>
                <a href="tips.php">
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
			<div class="form-login">
            <form action="tips-proses-edit.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?= $data['id'] ?>">
                    <label>Nama: 
                        <input type="text" class="input" name="nama" value="<?= $data['nama'] ?>" required></label><br>
                    <label>Tips Loker: 
                    <textarea name="tips_loker" class="input" id="" ><?= $data['tips_loker'] ?></textarea>
                    <label>posisi pekerjaan: 
                        <textarea name="done_work" class="input" id="" ><?= $data['done_work'] ?></textarea>
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
		</div>
		</div>
	</section>
	<script>
		let sidebar = document.querySelector(".sidebar");
		let sidebarBtn = document.querySelector(".sidebarBtn");
		sidebarBtn.onclick = function () {
			sidebar.classList.toggle("active");
			if (sidebar.classList.contains("active")) {
				sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
			} else sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
		};
	</script>
	</div>
</body>
</html>
