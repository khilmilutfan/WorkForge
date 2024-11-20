<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registrasi-perusahaan</title>
    <link rel="stylesheet" href="css/registrasi-perusahaan.css" />
  </head>
  <body>
    <div class="container">
      <nav class="navbar">
        <a href="#" class="navbar-logo">Work<span>Forge</span>.</a>
      </nav>
      <main>
        <div class="registrasi-box">
          <div class="welcome">
            <a href="pasanglowongankerja.php">
              <button class="back-btn">←</button>
            </a>
            <div class="welcome-text">
              <img
                src="img/register-perusahaan.jpg"
                alt="Welcome Icon"
                class="icon-img"
              />
              <h1>Welcome!</h1>
              <p>
                Ayo segara daftarkan perusahaanmu dan temukan kandidat terbaik
                untuk perusahaanmu
              </p>
            </div>
          </div>
          <div class="form-box">
            <h2>Registrasi</h2>
            <form class="registrasi-form"id="registrasiForm"onsubmit="handleRegister(event)">
              <div class="input-group">
                <label for="Nama penanggung jawab">Nama penanggung jawab</label>
                <input
                  type="text"
                  id="Nama penanggung jawab"
                  name="Nama penanggung jawab"
                  placeholder="Masukkan Nama penanggung jawab"
                  required
                />
              </div>
              <div class="input-group">
                <label for="No Telepon perusahaan">No Telepon perusahaan</label>
                <input
                  type="text"
                  id="No Telepon perusahaan"
                  name="No Telepon perusahaan"
                  placeholder="Masukkan No Telepon perusahaan"
                  required
                />
              </div>
              <div class="input-group">
                <label for="email perusahaan">Email perusahaan</label>
                <input
                  type="email"
                  id="email perusahaan"
                  name="email perusahaan"
                  placeholder="Masukkan email perusahaan"
                  required
                />
              </div>
              <div class="input-group">
                <label for="password">Password</label>
                <input
                  type="password"
                  id="password"
                  name="password"
                  placeholder="Masukkan password"
                  required
                />
              </div>
              <button type="submit" class="registrasi-btn">Registrasi</button>
              <p>
                Sudah mempunyai akun WorkForge?
                <a href="login-perusahaan.php">Login sekarang</a>
              </p>
            </form>
          </div>
        </div>
      </main>
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
        function handleRegister(event) {
          event.preventDefault(); // Mencegah form submit secara default
          // Simpan status register ke localStorage
          localStorage.setItem("registrasiSuccess", "true");
          // Redirect ke halaman dashboard
          window.location.href = "dasboard-perusahaan.php";
        }
      </script>
  </body>
</html>