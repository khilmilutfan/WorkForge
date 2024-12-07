<?php
include '../koneksi.php';

$sql = "SELECT * FROM tb_lowongan";
$result = $conn->query($sql);
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
                <a href="daftar.php">
                   <i class="bx bx-detail"></i>
                   <span class="links_name">Tambah Lowongan</span>
                </a>
             </li>
             <li>
                <a href="../tips-loker-dasboard/tips.php">
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
    <h3>Tambah Lowongan</h3>
    <div style="margin-bottom: 10px;">
        <button type="button" class="btn btn-tambah">
            <a href="daftar-entry.php">Tambah Data</a>
        </button>
        <button type="button" class="btn btn-pdf">
            <a href="daftar-cetak-pdf.php" target="_blank">Cetak PDF</a>
        </button>
    </div>
    <table class="table-data">
        <thead>
            <tr>
                <th scope="col" style="width: 20%">No</th>
                <th scope="col" style="width: 20%">Foto</th>
                <th scope="col" style="width: 20%">Perusahaan</th>
                <th>Posisi</th>
                <th scope="col" style="width: 20%">Gaji Minimal</th>
                <th scope="col" style="width: 15%">Gaji Maksimal</th>
                <th scope="col" style="width: 15%">Lokasi</th>
                <th scope="col" style="width: 25%">Tipe Pekerjaan</th>    
                <th scope="col" style="width: 25%">Deskripsi</th>    
                <th scope="col" style="width: 25%">Aksi</th>    
            </tr>
        </thead>
        <tbody>
            <?php 
            $no = 1; 
            while ($row = $result->fetch_assoc()): 
            ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td>
                        <?php if (!empty($row['foto'])): ?>
                            <img src="<?= $row['foto'] ?>" alt="Foto" style="width: 100px; height: auto;">
                        <?php else: ?>
                            Tidak ada foto
                        <?php endif; ?>
                    </td>
                    <td><?= $row['perusahaan'] ?></td>
                    <td><?= $row['posisi'] ?></td>
                    <td><?= $row['gaji_minimal'] ?></td>
                    <td><?= $row['gaji_maksimal'] ?></td>
                    <td><?= $row['lokasi'] ?></td>
                    <td><?= $row['tipe_pekerjaan'] ?></td>
                    <td><?= $row['deskripsi'] ?></td>
                    <td>
                        <a href="daftar-edit.php?id=<?= $row['id'] ?>">Edit</a> |
                        <a href="delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Hapus data ini?')">Hapus</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
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
</body>
</html>
