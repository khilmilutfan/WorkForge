<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login-perusahaan</title>
    <link rel="stylesheet" href="css/login-perusahaan.css" />
  </head>
  <body>
    <div class="container">
      <nav class="navbar">
        <a href="#" class="navbar-logo">Work<span>Forge</span>.</a>
      </nav>
      <main>
        <div class="login-box">
          <div class="welcome">
            <a href="pasanglowongankerja.php">
                <button class="back-btn">←</button>
            </a>
            <div class="welcome-text">
              <img src="img/login-perusahaan.jpg" alt="Welcome Icon" class="icon-img" />
              <h1>Welcome back!</h1>
              <p>
                Untuk tetap terhubung dengan kami silakan masuk ke akun anda
              </p>
            </div>
          </div>
          <div class="form-box">
            <h2>Login</h2>
            <form class="login-form" id="loginForm" onsubmit="handleLogin(event)">
              <div class="input-group">
                <label for="email perusahaan">Email perusahaan</label>    
                <input type="email perusahaan" id="email perusahaan" name="email perusahaan" placeholder="Masukkan email perusahaan" required />
              </div>
              <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Masukkan password " required />
              </div>
              <div class="options">
                <label>
                  <input type="checkbox" name="remember" /> Remember me
                </label>
                <a href="#">Forgot password?</a>
              </div>
              <button type="submit" class="login-btn">Login</button>
              <p>
                Belum mempunyai akun WorkForge? <a href="registrasi-perusahaan.php">Daftar sekarang</a>
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
        function handleLogin(event) {
          event.preventDefault(); // Mencegah form submit secara default
          // Simpan status login ke localStorage
          localStorage.setItem("loginSuccess", "true");
          // Redirect ke halaman dashboard
          window.location.href = "dasboard-perusahaan.php";
        }
      </script>
  </body>
</html>