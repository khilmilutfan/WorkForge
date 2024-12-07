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
            <form class="registrasi-form" id="registrasiForm" action="proses-registrasi-perusahaan.php" method="POST">
    <div class="input-group">
        <label for="username">Nama admin</label>
        <input type="text" id="username" name="username" placeholder="Masukkan Nama admin" required />
    </div>
    <div class="input-group">
        <label for="email">Email Perusahaan</label>
        <input type="email" id="email" name="email" placeholder="Masukkan Email Perusahaan" required />
    </div>
    <div class="input-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Masukkan Password" required />
    </div>
       <button type="submit" class="registrasi-btn">Registrasi</button>
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
  </body>
</html>
