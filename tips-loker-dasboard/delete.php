<?php
include '../koneksi.php';

$id = $_GET['id'];

$sql = "DELETE FROM tb_tips WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    echo "<script>alert('Data berhasil dihapus'); window.location.href = 'tips.php';</script>";
} else {
    echo "<script>alert('Gagal menghapus data');</script>";
}
?>