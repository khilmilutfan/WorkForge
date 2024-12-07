<?php
include('../koneksi.php');
require_once("../dompdf/autoload.inc.php");

use Dompdf\Dompdf;

$dompdf = new Dompdf();
$query = mysqli_query($conn, "SELECT * FROM tb_lowongan");

// Base URL untuk path gambar
$base_url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['SCRIPT_NAME']);

$html = '<center><h3>Data Lowongan</h3></center><hr/><br>';
$html .= '<table border="1" width="100%">
            <tr>
                <th>No</th>
                <th>Foto</th>
                <th>Perusahaan</th>
                <th>Posisi</th>
                <th>Gaji Minimal</th>
                <th>Gaji Maksimal</th>
                <th>Lokasi</th>
                <th>Tipe Pekerjaan</th>
                <th>Deskripsi</th>
            </tr>';
$no = 1;
while ($daftarlowongan = mysqli_fetch_array($query)) {
    $foto_path = !empty($daftarlowongan['foto']) ? $base_url . '/' . $daftarlowongan['foto'] : '';
    $foto = !empty($foto_path) 
        ? '<img src="' . $foto_path . '" alt="Foto" style="width: 100px; height: auto;">' 
        : 'Tidak ada foto';
    $html .= "<tr>
                <td>{$no}</td>
                <td>{$foto}</td>
                <td>{$daftarlowongan['perusahaan']}</td>
                <td>{$daftarlowongan['posisi']}</td>
                <td>{$daftarlowongan['gaji_minimal']}</td>
                <td>{$daftarlowongan['gaji_maksimal']}</td>
                <td>{$daftarlowongan['lokasi']}</td>
                <td>{$daftarlowongan['tipe_pekerjaan']}</td>
                <td>{$daftarlowongan['deskripsi']}</td>
            </tr>";
    $no++;
}
$html .= "</table>";

$dompdf->loadHtml($html);

// Aktifkan opsi remote
$options = $dompdf->getOptions();
$options->set('isRemoteEnabled', true);
$dompdf->setOptions($options);

// Setting ukuran dan orientasi kertas
$dompdf->setPaper('A4', 'portrait');

// Rendering dari HTML ke PDF
$dompdf->render();

// Melakukan output file PDF
$dompdf->stream('laporan-Lowongan.pdf');
?>
