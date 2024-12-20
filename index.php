<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Beranda-WorkForge</title>
    <link rel="stylesheet" href="css/index.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
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
        <button class="login">
          <a href="login-user.php">Login</a>
        </button>
        <button class="register">
          <a href="register-user.php">Register</a>
        </button>
      </div>
    </nav>
    <div class="background"></div>
    <div class="container">
      <section class="hero" id="beranda">
        <main class="hero">
          <div class="content">
            <h1 id="hero-title">Cari Lowongan kerja?</h1>
            <p>
              Tenang saja, Temukan Pekerjaan Yang anda Sukai Dengan WorkForge.
            </p>
            <p>Ayo mulai karirmu sekarang juga!</p>
            <div id="snackbar"></div>
            <div class="search-container">
              <div class="input-group">
                <i class="fas fa-briefcase"></i>
                <input
                  type="text"
                  id="job-input"
                  placeholder="masukkan posisi pekerjaan yang ingin dicari"
                />
              </div>
              <div class="input-group">
                <i class="fas fa-map-marker-alt"></i>
                <input
                  type="text"
                  id="location-input"
                  placeholder="masukkan lokasi yang ingin dicari"
                />
              </div>
              <button id="search-button">Search</button>
            </div>
          </div>
        </main>
      </section>
    </div>
    <footer class="footer">
      <div class="jelajahi">
        <h2>Jelajahi Peluang Kerja</h2>
      </div>
      <div class="footer-content">
        <div class="footer-section">
          <h3>Lokasi Populer</h3>
          <ul>
            <li>
              Bandung, Jakarta, Kediri, Surabaya, Mojokerto, Bekasi, Bogor,
              Bali, Medan, Jogja
            </li>
            <li><a href="#" id="lihat-lokasi">Lihat semua lokasi &rarr;</a></li>
          </ul>
        </div>
        <div class="footer-section">
          <h3>Kategori Populer</h3>
          <ul>
            <li>
              Programming, Akuntansi, Marketing, Konstruksi, HR, Administrasi,
              Teknik
            </li>
            <li>
              <a href="#" id="lihat-kategori">Lihat semua kategori &rarr;</a>
            </li>
          </ul>
        </div>
        <div class="footer-section">
          <h3>Tipe Pekerjaan</h3>
          <ul>
            <li>
              Fresh Graduate, Freelance, Magang, Supervisor, Manajer, Sarjana,
              Diploma, SMA/SMK
            </li>
            <li>
              <a href="#" id="lihat-tipe">Lihat semua tipe pekerjaan &rarr;</a>
            </li>
          </ul>
        </div>
      </div>
    </footer>
    <script>
      document.getElementById("search-button").addEventListener("click", () => {
        const job = document.getElementById("job-input").value;
        const location = document.getElementById("location-input").value;
        const snackbar = document.getElementById("snackbar");

        if (job && location) {
          snackbar.textContent = `Mencari pekerjaan sebagai ${job} di ${location}`;
        } else {
          snackbar.textContent = "Mohon isi posisi pekerjaan dan lokasi!";
        }
        snackbar.className = "show";
        setTimeout(() => {
          snackbar.className = "";
        }, 3000);
      });

      document.getElementById("lihat-lokasi").addEventListener("click", (e) => {
        e.preventDefault();
        alert("Menampilkan semua lokasi populer...");
      });

      document
        .getElementById("lihat-kategori")
        .addEventListener("click", (e) => {
          e.preventDefault();
          alert("Menampilkan semua kategori populer...");
        });

      document.getElementById("lihat-tipe").addEventListener("click", (e) => {
        e.preventDefault();
        alert("Menampilkan semua tipe pekerjaan...");
      });

      const container = document.querySelector(".container");
      let lastScrollY = 0;
      window.addEventListener("scroll", () => {
        if (window.scrollY > lastScrollY) {
          container.classList.add("hidden");
        } else {
          container.classList.remove("hidden");
        }
        lastScrollY = window.scrollY;
      });
    </script>
  </body>
</html>
