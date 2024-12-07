<?php

include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM tb_users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            session_start();
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['email'] = $user['email'];

            echo "<script>
                    alert('Login berhasil!');
                    window.location.href = 'dasboard-user.php';
                  </script>";
        } else {
            echo "<script>
                    alert('Password salah!');
                    window.history.back();
                  </script>";
        }
    } else {
        echo "<script>
                alert('Username tidak ditemukan!');
                window.history.back();
              </script>";
    }

    $stmt->close();
    $conn->close();
}
?>
