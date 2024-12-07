<?php
// Sertakan koneksi
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data dari form
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Hash password
    $email    = $_POST['email'];

    // Query untuk menyimpan data ke database
    $sql = "INSERT INTO tb_perusahaan (username, password, email) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $username, $password, $email);

    if ($stmt->execute()) {
        echo "<script>
                alert('Registrasi berhasil!');
                window.location.href = 'login-perusahaan.php';
              </script>";
    } else {
        echo "<script>
                alert('Registrasi gagal: " . $stmt->error . "');
                window.history.back();
              </script>";
    }

    $stmt->close();
    $conn->close();
}
?>
