<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registrasi-user</title>
    <link rel="stylesheet" href="css/register.css" />
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
                src="img/registrasi-user.jpg"
                alt="Welcome Icon"
                class="icon-img"
              />
              <h1>Welcome!</h1>
              <p>
              Ayo segera daftar dan temukan karir terbaik untuk masa depan yang lebih cerah!
              </p>
            </div>
          </div>
          <div class="form-box">
            <h2>Registrasi</h2>
            <form class="registrasi-form"id="registrasiForm"onsubmit="handleRegister(event)">
              <div class="input-group">
                <label for="Nama user">Nama</label>
                <input
                  type="text"
                  id="Nama user"
                  name="Nama user"
                  placeholder="Masukkan Nama"
                  required
                />
              </div>
              <div class="input-group">
                <label for="No Telepon">No Telepon</label>
                <input
                  type="text"
                  id="No Telepon"
                  name="No Telepon"
                  placeholder="Masukkan No Telepon"
                  required
                />
              </div>
              <div class="input-group">
                <label for="email">Email</label>
                <input
                  type="email"
                  id="email user"
                  name="email user"
                  placeholder="Masukkan email"
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
                <a href="login-user.php">Login sekarang</a>
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
          window.location.href = "dasboard-user.php";
        }
      </script>
  </body>
</html>
