<?php
include '../koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $tips_loker = $_POST['tips_loker'];
    $done_work = $_POST['done_work'];
    $foto = $_FILES['foto']['name'];
    $foto_tmp = $_FILES['foto']['tmp_name'];
    $foto_dir = "../img/tips";
    $foto_path = null;

    if (!empty($foto)) {
        $foto_name = time() . "_" . basename($foto);
        $foto_path = $foto_dir . "/" . $foto_name;

        if (!is_dir($foto_dir)) {
            mkdir($foto_dir, 0777, true);
        }

        if (!move_uploaded_file($foto_tmp, $foto_path)) {
            echo "<script>alert('Gagal mengunggah file.');</script>";
            $foto_path = null;
        }
    }
    $sql = "INSERT INTO tb_tips (nama, tips_loker, done_work,foto) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $nama, $tips_loker, $done_work,$foto_path);

    if ($stmt->execute()) {
        echo "<script>
                alert('Data berhasil ditambahkan!');
                window.location.href = 'tips.php';
              </script>";
    } else {
        echo "<script>alert('Gagal menambahkan data!');</script>";
    }
}
?>