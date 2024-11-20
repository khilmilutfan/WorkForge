<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="UTF-8" />
	<link rel="icon" href="../assets/icon.png" />
	<link rel="stylesheet" href=css/dasboard-user.css/>
	<!-- Boxicons CDN Link -->
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
                   <span class="links_name">Daftar lowongan</span>
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
			<table class="table-data">
				<thead>
					<tr>
						<th scope="col" style="width: 20%">Photo</th>
						<th>Daftar lowongan</th>
						<th scope="col" style="width: 20%">Description</th>
						<th scope="col" style="width: 15%">Qualification</th>
						<th scope="col" style="width: 15%">Location</th>
						<th scope="col" style="width: 25%">Action</th>	
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><img src="../img/logo-bsi.jpg" alt="Logo BSI" /></td>
						<td>Bank syariah indonesia</td>
						<td>Bank Syariah Indonesia (BSI) membuka lowongan untuk posisi staf administrasi. Anda akan bertanggung jawab dalam pengelolaan dokumen, penyusunan laporan, dan mendukung operasional harian sesuai prinsip syariah. 
							Bergabunglah dengan kami dan kembangkan karir Anda di BSI!.</td>
						<td>Pendidikan minimal D3/S1 (semua jurusan)
							Mahir dalam penggunaan Microsoft Office
							Komunikatif dan detail-oriented
							Berintegritas serta memahami prinsip syariah
						</td>
						<td>Jl. Yos Sudarso No. 123, Kediri, Jawa Timur</td>
						<td>
							<button class="btn-edit" onclick="window.location.href='daftar-entry.php'">Edit</button>
							<button class="btn-delete" onclick="deleteCategory()">Hapus</button>
						</td>
					</tr>
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