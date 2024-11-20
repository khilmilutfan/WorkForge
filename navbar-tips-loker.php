<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tips-Lowongan-Kerja-WorkForge</title>
    <link rel="stylesheet" href="css/navbar-tips-loker.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css"
      rel="stylesheet"
    />
  </head>
  <body>
    <nav class="navbar">
      <a href="#" class="navbar-logo">Work<span>Forge</span>.</a>
      <div class="navbar-nav">
        <a href="index.php" id="beranda">Beranda</a>
        <a href="pasanglowongankerja.php" id="pasang-lowongan"
          >Pasang Lowongan Kerja</a
        >
        <a href="carilowongankerja.php" id="cari-lowongan-kerja"
          >Cari Lowongan Kerja</a
        >
        <a href="navbar-tips-loker.php" id="navbar-tips-loker">Tips Loker</a>
      </div>
      <div class="navbar-buttons">
        <button class="login"><a href="login-user.php">Login</a></button>
        <button class="register"><a href="register-user.php">Register</a></button>
      </div>
    </nav>
    <div class="content">
      <div class="text">
        <h1>Tips Lowongan Kerja</h1>
        <hr />
        <p>Beranda &gt; Tips Loker</p>
      </div>
    </div>
    <section class="tips-listings">
      <div class="tips-card" style="position: relative">
        <img src="img/pp tips.jpg" alt="Company Logo" />
        <div class="tips-details">
          <h1>10 Aturan Tak Tertulis di Dunia Kerja</h1>
          <p>
            Aturan tak tertulis di dunia kerja adalah seperangkat norma,
            kebiasaan, dan harapan yang tidak tercantum secara eksplisit dalam
            buku pedoman perusahaan, namun secara umum dipahami dan diikuti oleh
            karyawan. Aturan ini terbentuk dari budaya perusahaan, interaksi
            antar karyawan, serta pengalaman yang terakumulasi selama
            bertahun-tahun.
          </p>
          <div class="tips-buttons">
            <button class="lihat">Lihat selengkapnya ></button>
          </div>
        </div>
        <i class="bi bi-bookmark save-icon" onclick="openPopup()"></i>
      </div>
    </section>
    <div class="popup" id="popup" style="display: none">
      <div class="popup-content">
        <h2>Apakah Anda ingin menyimpan Tips loker ini?</h2>
        <div class="button-container">
          <button class="button-iya" onclick="saveTips()">Iya</button>
          <button class="button-tidak" onclick="closePopup()">Tidak</button>
        </div>
      </div>
    </div>
    <div class="popup" id="successPopup" style="display: none">
      <div class="popup-content">
        <h2>Tips loker berhasil disimpan!</h2>
        <div class="button-container-tutup">
          <button class="button-tutup" onclick="closeSuccessPopup()">
            Tutup
          </button>
        </div>
      </div>
    </div>
    <footer>
      <p>Kontak kami</p>
      <p>
        Masih ada pertanyaan? Hubungi kami untuk bantuan lebih lanjut terkait
        akun atau proses lamaran.
      </p>
      <a href="#" class="contact-link">Klik di sini untuk menghubungi!!</a>
    </footer>
    <script>
      function openPopup() {
        document.getElementById("popup").style.display = "flex";
      }
      function closePopup() {
        document.getElementById("popup").style.display = "none";
      }
      function saveTips() {
        const tips = {
          title: "10 Aturan Tak Tertulis di Dunia Kerja",
          description:
            "Aturan tak tertulis di dunia kerja adalah seperangkat norma, kebiasaan, dan harapan yang tidak tercantum secara eksplisit...",
        };
        localStorage.setItem("savedTips", JSON.stringify(tips));
        document.getElementById("popup").style.display = "none";
        document.getElementById("successPopup").style.display = "flex";
      }
      function closeSuccessPopup() {
        document.getElementById("successPopup").style.display = "none";
      }
    </script>
  </body>
</html>