<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="UTF-8" />
	<link rel="icon" href="../assets/icon.png" />
	<link rel="stylesheet" href=css/dasboard-user.css/>
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
			<h3>Tips loker</h3>
			<button type="button" class="btn btn-tambah">
				<a href="tips loker-entry.php">Tambah Data</a>
			</button>
			<table class="table-data">
				<thead>
					<tr>
						<th scope="col" style="width: 20%">Photo</th>
						<th>Nama</th>
						<th scope="col" style="width: 20%">Tips loker</th>
						<th scope="col" style="width: 15%">Work being done</th>
						<th scope="col" style="width: 25%">Action</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><img src="../img/gisela.jpg" alt="foto gisela" /></td>
						<td>Gisella Fatmanda Maharani</td>
						<td>Ketika saya memutuskan untuk melamar kerja di CGV, saya menyadari bahwa persiapan yang matang adalah kunci 
                            untuk sukses dalam proses seleksi.saya ada bebrapa tips, dan semoga bisa membantu Anda juga!
                            yang pertama Kenali Perusahaan Sebelum melamar,Persiapkan CV yang Menarik,Berlatih Menjawab Pertanyaan Umum,
                            Tanyakan Pertanyaan,Tampilkan Kepribadian yang Positif,Follow Up, itu tips loker dari saya semoga bisa membantu.</td>
						<td>bekerja sebagai Staf Bar di CGV Cinemas kediri dariJanuari 2023 - Sekarang</td>
						<td>
							<button class="btn-edit" onclick="window.location.href='tips loker-entry.php'">Edit</button>
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