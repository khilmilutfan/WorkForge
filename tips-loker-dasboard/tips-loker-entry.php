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
				<form action="tips-proses.php" method="POST" enctype='multipart/form-data'> 
					<label for="Nama">Nama</label>
					<input class="input" type="text" name="nama"id="Nama" placeholder="Nama"/>
					<label for="Tips loker">Tips loker</label>
					<input class="input" type="text" name="tips_loker" id="Tips loker" placeholder="Tips loker" />
					<label for="Work being done">posisi pekerjaan</label>
					<input class="input" type="text" name="done_work" id="Work being done" placeholder="posisi pekerjaan" />
					<label for="photo">Photo</label>
					<input type="file" name="foto" id="photo" style="margin-bottom: 20px" />
					<button type="submit" class="btn btn-simpan" name="simpan">Simpan
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
	</div>
</body>
</html>
