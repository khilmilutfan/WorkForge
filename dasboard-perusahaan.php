<?php
// Mulai session
session_start();

// Periksa apakah admin_id ada di session (tanda bahwa user sudah login)
if (!isset($_SESSION['admin_id'])) {
    // Jika tidak ada, arahkan kembali ke halaman login
    header("Location: login-perusahaan.php");
    exit();
}

// Jika ada, lanjutkan ke dashboard
echo "Selamat datang di Dashboard Perusahaan!";
?>

<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="css/dasboard-perusahaan.css" />
    <link
      href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"
      rel="stylesheet"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard-user-WorkForge</title>
  </head>
  <body onload="showWelcomeMessage()">
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
          <span class="admin_name">WorkForge Admin</span>
        </div>
      </nav>
      <div class="home-content">
        <h2 id="text"></h2>
        <h3 id="date"></h3>
     </div>     
    </section>
    <div id="snackbar"></div> 
    <script>
      let sidebar = document.querySelector(".sidebar");
      let sidebarBtn = document.querySelector(".sidebarBtn");
      sidebarBtn.onclick = function () {
        sidebar.classList.toggle("active");
        if (sidebar.classList.contains("active")) {
          sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
        } else sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
      };
      function myFunction() {
        const months = ["Januari", "Februari", "Maret", "April", "Mei",
          "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
        const days = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];
        let date = new Date();
        let jam = date.getHours();
        let tanggal = date.getDate();
        let hari = days[date.getDay()];
        let bulan = months[date.getMonth()];
        let tahun = date.getFullYear();

        let m = date.getMinutes();
        let s = date.getSeconds();
        m = checkTime(m);
        s = checkTime(s);
        document.getElementById("date").innerHTML = `${hari}, ${tanggal} ${bulan} ${tahun}, ${jam}:${m}:${s}`;
        requestAnimationFrame(myFunction);
      }
      function checkTime(i) {
        if (i < 10) {
          i = "0" + i;
        }
        return i;
      }
      window.onload = function () {
        let nama = prompt("Masukkan Nama Anda : ", "Admin");
        let jam = new Date().getHours();
        if (nama != null) {
          if (jam >= 4 && jam <= 10) {
            document.getElementById("text").innerHTML = `Selamat Pagi ${nama}`;
          } else if (jam >= 11 && jam <= 14) {
            document.getElementById("text").innerHTML = `Selamat Siang ${nama}`;
          } else if (jam >= 15 && jam <= 18) {
            document.getElementById("text").innerHTML = `Selamat Sore ${nama}`;
          } else {
            document.getElementById("text").innerHTML = `Selamat Malam ${nama}`;
          }
        }
        myFunction();
        showWelcomeMessage(); 
      };
      function showSnackbar(message) {
        const snackbar = document.getElementById("snackbar");
        snackbar.textContent = message;
        snackbar.className = "snackbar show";
        setTimeout(() => {
          snackbar.className = snackbar.className.replace("show", "");
        }, 3000);
      }
      function showWelcomeMessage() {
        const loginSuccess = localStorage.getItem("loginSuccess");
        const registrasiSuccess = localStorage.getItem("registrasiSuccess");
        if (loginSuccess === "true") {
          showSnackbar("Login berhasil, selamat datang di dashboard WorkForge!");
          localStorage.removeItem("loginSuccess");
        } else if (registrasiSuccess === "true") {
          showSnackbar("Terimakasih telah melakukan registrasi, selamat datang di dashboard WorkForge!");
          localStorage.removeItem("registrasiSuccess");
        }
      }
    </script>
  </body>
</html>
