<?php
include '../koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $perusahaan = $_POST['perusahaan'];
    $posisi = $_POST['posisi'];
    $gaji_minimal = $_POST['gaji_minimal'];
    $gaji_maksimal = $_POST['gaji_maksimal'];
    $lokasi = $_POST['lokasi'];
    $tipe_pekerjaan = $_POST['tipe_pekerjaan'];
    $deskripsi = $_POST['deskripsi'];

    $foto = $_FILES['foto']['name'];
    $foto_tmp = $_FILES['foto']['tmp_name'];
    $foto_dir = "../img/lowongan";
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

    $sql = "INSERT INTO tb_lowongan (perusahaan, posisi, gaji_minimal, gaji_maksimal, lokasi, tipe_pekerjaan, deskripsi, foto) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssiissss", $perusahaan, $posisi, $gaji_minimal, $gaji_maksimal, $lokasi, $tipe_pekerjaan, $deskripsi, $foto_path);

    if ($stmt->execute()) {
        echo "<script>alert('Data berhasil ditambahkan'); window.location.href = 'daftar.php';</script>";
    } else {
        echo "<script>alert('Gagal menambahkan data');</script>";
    }

    $stmt->close();
    $conn->close();
}
?>
