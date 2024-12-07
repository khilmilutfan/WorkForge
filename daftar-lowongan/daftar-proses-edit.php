<?php
include '../koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $perusahaan = $_POST['perusahaan'];
    $posisi = $_POST['posisi'];
    $gaji_minimal = $_POST['gaji_minimal'];
    $gaji_maksimal = $_POST['gaji_maksimal'];
    $lokasi = $_POST['lokasi'];
    $tipe_pekerjaan = $_POST['tipe_pekerjaan'];
    $deskripsi = $_POST['deskripsi'];
    
    $foto_dir = "../img/lowongan";
    $foto_path = null;

    if (!empty($_FILES['foto']['name'])) {
        $foto_name = time() . "_" . basename($_FILES['foto']['name']);
        $foto_tmp = $_FILES['foto']['tmp_name'];
        $foto_path = $foto_dir . "/" . $foto_name;

        if (!is_dir($foto_dir)) {
            mkdir($foto_dir, 0777, true);
        }

        if (move_uploaded_file($foto_tmp, $foto_path)) {
            $old_foto_sql = "SELECT foto FROM tb_lowongan WHERE id = ?";
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
        $sql = "UPDATE tb_lowongan SET perusahaan = ?, posisi = ?, gaji_minimal = ?, gaji_maksimal = ?, lokasi = ?, tipe_pekerjaan = ?, deskripsi = ?, foto = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssiissssi", $perusahaan, $posisi, $gaji_minimal, $gaji_maksimal, $lokasi, $tipe_pekerjaan, $deskripsi, $foto_path, $id);
    } else {
        $sql = "UPDATE tb_lowongan SET perusahaan = ?, posisi = ?, gaji_minimal = ?, gaji_maksimal = ?, lokasi = ?, tipe_pekerjaan = ?, deskripsi = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssiisssi", $perusahaan, $posisi, $gaji_minimal, $gaji_maksimal, $lokasi, $tipe_pekerjaan, $deskripsi, $id);
    }

    if ($stmt->execute()) {
        echo "<script>alert('Data berhasil diperbarui'); window.location.href = 'daftar.php';</script>";
    } else {
        echo "<script>alert('Gagal memperbarui data'); window.history.back();</script>";
    }

    $stmt->close();
    $conn->close();
}
?>
