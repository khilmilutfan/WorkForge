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
			<a href="../index.php"">
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
				<form action="daftar-proses.php" method="POST" enctype='multipart/form-data'>
					<label for="daftarlowongan">Perusahaan</label>
					<input class="input" type="text" name="perusahaan"id="daftarlowongan" placeholder="Daftar lowongan" />
					<label for="Description">Posisi</label>
					<input class="input" type="text" name="posisi" id="Description" placeholder="Description" />
					<label for="Qualification">Gaji Minimum</label>
					<input class="input" type="text" name="gaji_minimal" id="Description" placeholder="Description" />
					<label for="Qualification">Gaji Maksimal</label>
					<input class="input" type="text" name="gaji_maksimal" id="Description" placeholder="Description" />
					<label for="Location">Lokasi</label>
					<input class="input" type="text" name="lokasi" id="Location" placeholder="Location" />
					<label for="photo">Tipe Pekerjaan</label>
					<input class="input" type="text" name="tipe_pekerjaan" id="Location" placeholder="Location" />
					<label for="photo">Foto Perusahaan</label>
					<input class="input" type="file" name="foto"  />
					<label for="photo">Deskripsi</label>
					<textarea name="deskripsi" class="input" id=""></textarea>
					<button type="submit" class="btn btn-simpan" name="simpan">
						Simpan
					</button>
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
</body>
</html>
