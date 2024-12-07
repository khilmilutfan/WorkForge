<?php
include '../koneksi.php';

$sql = "SELECT * FROM tb_tips";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="UTF-8" />
	<link rel="icon" href="../assets/icon.png" />
	<link rel="stylesheet" href="../css/dasboard-user.css">
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
                   <span class="links_name">Daftar lowongan</span>
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
			<h3>Tips loker</h3>
			<button type="button" class="btn btn-tambah">
				<a href="tips-loker-entry.php">Tambah Data</a>
			</button>
			<button type="button" class="btn btn-pdf">
            <a href="tips-cetak-pdf.php" target="_blank">Cetak PDF</a>
        </button>
			<table class="table-data">
				<thead>
					<tr>
						<th scope="col" style="width: 20%">No</th>
						<th scope="col" style="width: 20%">Nama</th>
						<th scope="col" style="width: 20%">Photo</th>
						<th scope="col" style="width: 20%">Tips loker</th>
						<th scope="col" style="width: 15%">posisi pekerjaan</th>
						<th scope="col" style="width: 25%">Action</th>
					</tr>
				</thead>
				<tbody>
				<?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= htmlspecialchars($row['nama']) ?></td>
					<td>
								<?php if (!empty($row['foto'])): ?>
									<img src="<?= $row['foto'] ?>" alt="Foto" style="width: 100px; height: auto;">
								<?php else: ?>
									Tidak ada foto
								<?php endif; ?>
							</td>
                    <td><?= htmlspecialchars($row['tips_loker']) ?></td>
                    <td><?= htmlspecialchars($row['done_work']) ?></td>
                    <td>
                        <a href="tips-edit.php?id=<?= $row['id'] ?>">Edit</a> | 
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
