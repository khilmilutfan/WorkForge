<?php
// Sertakan koneksi
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data dari form
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Query untuk memeriksa data
    $sql = "SELECT * FROM tb_perusahaan WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    // Jika email ditemukan
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Verifikasi password
        if (password_verify($password, $row['password'])) {
            // Mulai session dan simpan data
            session_start();
            $_SESSION['admin_id'] = $row['admin_id']; // Simpan sesi

            // Arahkan ke dashboard
            echo "<script>
                    alert('Login berhasil!');
                    window.location.href = 'dasboard-perusahaan.php';
                  </script>";
        } else {
            // Jika password salah
            echo "<script>
                    alert('Password salah!');
                    window.history.back();
                  </script>";
        }
    } else {
        // Jika email tidak ditemukan
        echo "<script>
                alert('Email tidak ditemukan!');
                window.history.back();
              </script>";
    }

    // Tutup statement dan koneksi
    $stmt->close();
    $conn->close();
}
?>
