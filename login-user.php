<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login-user</title>
    <link rel="stylesheet" href="css/login.css" />
  </head>
  <body>
    <div class="container">
      <nav class="navbar">
        <a href="#" class="navbar-logo">Work<span>Forge</span>.</a>
      </nav>
      <main>
        <div class="login-box">
          <div class="welcome">
            <a href="index.php">
                <button class="back-btn">←</button>
            </a>
            <div class="welcome-text">
              <img src="img/login-user.jpg" alt="Welcome Icon" class="icon-img" />
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
                <label for="email user">Email</label>    
                <input type="email user" id="email user" name="email user" placeholder="Masukkan email" required />
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
                Belum mempunyai akun WorkForge? <a href="register-user.php">Daftar sekarang</a>
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
          event.preventDefault(); 
          localStorage.setItem("loginSuccess", "true");
          window.location.href = "dasboard-user.php";
        }
      </script>
  </body>
</html>
