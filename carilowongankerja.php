<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $jobTitle = $_POST['jobTitle'];
  $jobLocation = $_POST['jobLocation'];
  if (isset($_COOKIE['searchHistory'])) {
    $history = json_decode($_COOKIE['searchHistory'], true);
  } else {
    $history = [];
  }
  $history[] = ['jobTitle' => $jobTitle, 'jobLocation' => $jobLocation];
  setcookie('searchHistory', json_encode($history), time() + (7 * 24 * 60 * 60), "/"); 
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Cari Lowongan Kerja - WorkForge</title>
  <link rel="stylesheet" href="css/carilowongankerja.css" />
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
</head>
<body>
  <nav class="navbar">
    <a href="#" class="navbar-logo">Work<span>Forge</span>.</a>
    <div class="navbar-nav">
      <a href="index.php" id="beranda">Beranda</a>
      <a href="pasanglowongankerja.php" id="pasang-lowongan">Pasang Lowongan Kerja</a>
      <a href="carilowongankerja.php" id="cari-lowongan-kerja">Cari Lowongan Kerja</a>
      <a href="navbar-tips-loker.php" id="navbar-tips-loker">Tips Loker</a>
    </div>
    <div class="navbar-buttons">
      <button class="login"><a href="login-user.php">Login</a></button>
      <button class="register"><a href="register-user.php">Register</a></button>
    </div>
  </nav>
  <div class="content">
    <div class="text">
      <h1>Cari Lowongan Kerja</h1>
      <hr />
      <p>Beranda &gt; Cari Lowongan Kerja</p>
    </div>
  </div>
  <section class="search-section">
    <h1>Cari Lowongan Kerja</h1>
    <p>Tenang saja, Temukan Pekerjaan Yang Anda Sukai Dengan WorkForge.</p>
    <form method="POST" action="carilowongankerja.php">
      <div class="search-bar">
        <input type="text" name="jobTitle" placeholder="Masukkan nama pekerjaan" required />
        <input type="text" name="jobLocation" placeholder="Masukkan lokasi pekerjaan" required />
        <button type="submit">Cari Pekerjaan</button>
        <i class="bx bx-history" id="historyIcon" onclick="toggleHistory()"></i>
      </div>
    </form>
    <div id="historySection" class="hidden">
      <h3>Histori Pencarian:</h3>
      <ul id="historyList">
        <?php
          if (isset($_COOKIE['searchHistory'])) {
            $history = json_decode($_COOKIE['searchHistory'], true);
            if ($history) {
              foreach ($history as $item) {
                echo "<li>Pekerjaan: {$item['jobTitle']}, Lokasi: {$item['jobLocation']}</li>";
              }
            } else {
              echo "<li>Tidak ada histori pencarian.</li>";
            }
          } else {
            echo "<li>Tidak ada histori pencarian.</li>";
          }
        ?>
      </ul>
    </div>
  </section>
  <section class="job-listings">
    <div class="job-card">
      <img src="img/logo-bsi.jpg" alt="Company Logo" />
      <div class="job-details">
        <h1>BANK SYARIAH INDONESIA</h1>
        <h2>Administrasi</h2>
        <h2>Gaji: 8jt-10jt</h2>
        <p>Lokasi: Kediri | Full-Time</p>
        <p>
          Sebagai Staf Administrasi di Bank Syariah Indonesia (BSI), Anda akan
          bertanggung jawab untuk mendukung operasional kantor cabang atau
          divisi tertentu melalui pengelolaan dokumen, data, dan kegiatan
          administratif lainnya yang menunjang keberhasilan bisnis bank.
        </p>
        <div class="job-buttons">
          <button class="Pelajari" onclick="openPopup('learnMorePopup')">Pelajari lebih lanjut</button>
          <button class="lamar" onclick="openPopup('applyPopup')">Lamar pekerjaan</button>
        </div>
      </div>
    </div>
    <div class="popup" id="learnMorePopup" style="display: none;">
      <div class="popup-content">
        <h2>Apakah Anda ingin mengetahui lebih lanjut tentang pekerjaan ini?</h2>
        <div class="button-container">
          <button class="button-iya" onclick="redirectTo('pelajari.php')">Iya</button>
          <button class="button-tidak" onclick="closePopup('learnMorePopup')">Tidak</button>
        </div>
      </div>
    </div>
    <div class="popup" id="applyPopup" style="display: none;">
      <div class="popup-content">
        <h2>Apakah Anda ingin melamar pekerjaan ini?</h2>
        <div class="button-container">
          <button class="button-iya" onclick="handleApply()">Iya</button>
          <button class="button-tidak" onclick="closePopup('applyPopup')">Tidak</button>
        </div>
      </div>
    </div>
  </section>
  <footer>
    <p>Kontak kami</p>
    <p>
      Masih ada pertanyaan? Hubungi kami untuk bantuan lebih lanjut terkait
      akun atau proses lamaran.
    </p>
    <a href="#" class="contact-link">Klik di sini untuk menghubungi!!</a>
  </footer>
  <script>
    function toggleHistory() {
      const historySection = document.getElementById("historySection");
      if (historySection.style.display === 'none' || historySection.style.display === '') {
        historySection.style.display = 'block';
      } else {
        historySection.style.display = 'none';
      }
    }

    function openPopup(popupId) {
      document.getElementById(popupId).style.display = "flex";
    }

    function closePopup(popupId) {
      document.getElementById(popupId).style.display = "none";
    }

    function handleApply() {
      alert('Lamaran berhasil disimpan! Data telah dikirim.');
      closePopup('applyPopup');
    }

    window.onload = function () {
      const historySection = document.getElementById("historySection");
      historySection.style.display = 'none';
    };
  </script>
</body>
</html>
