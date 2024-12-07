<?php
include '../koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $tips_loker = $_POST['tips_loker'];
    $done_work = $_POST['done_work'];

    $foto_dir = "../img/tips";
    $foto_path = null;

    if (!empty($_FILES['foto']['name'])) {
        $foto_name = time() . "_" . basename($_FILES['foto']['name']);
        $foto_tmp = $_FILES['foto']['tmp_name'];
        $foto_path = $foto_dir . "/" . $foto_name; // Menggunakan path relatif
    
        if (!is_dir($foto_dir)) {
            mkdir($foto_dir, 0777, true);
        }
    
        if (move_uploaded_file($foto_tmp, $foto_path)) {
            // Menangani foto lama jika ada
            $old_foto_sql = "SELECT foto FROM tb_tips WHERE id = ?";
            $stmt_old = $conn->prepare($old_foto_sql);
            $stmt_old->bind_param("i", $id);
            $stmt_old->execute();
            $result_old = $stmt_old->get_result();
            $old_data = $result_old->fetch_assoc();
    
            if (!empty($old_data['foto']) && file_exists($old_data['foto'])) {
                unlink($old_data['foto']);
            }
        } else {
            echo "<script>alert('Gagal mengunggah foto baru!'); window.history.back();</script>";
            exit;
        }
    }
    

    if ($foto_path) {
        $sql = "UPDATE tb_tips SET nama = ?, tips_loker = ?, done_work = ?, foto = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssi", $nama, $tips_loker, $done_work, $foto_path, $id);
    } else {
        $sql = "UPDATE tb_tips SET nama = ?, tips_loker = ?, done_work = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssi", $nama, $tips_loker, $done_work, $id);
    }
    
    if ($stmt->execute()) {
        echo "<script>
                alert('Data berhasil diperbarui!');
                window.location.href = 'tips.php';
              </script>";
    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
    $conn->close();
}
?>
