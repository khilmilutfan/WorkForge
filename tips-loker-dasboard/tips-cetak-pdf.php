<?php
include('../koneksi.php');
require_once("../dompdf/autoload.inc.php");

use Dompdf\Dompdf;

$dompdf = new Dompdf();
$query = mysqli_query($conn, "SELECT * FROM tb_tips");

$base_url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['SCRIPT_NAME']);

// Membuat HTML untuk laporan
$html = '<center><h3>Data Tips Loker</h3></center><hr/><br>';
$html .= '<table border="1" width="100%" cellpadding="5">
            <tr>
                <th>No</th>
                <th>Foto</th>
                <th>Nama</th>
                <th>Tips Loker</th>
                <th>posisi pekerjaan</th>
            </tr>';
$no = 1;
while ($tipslowongan = mysqli_fetch_array($query)) {
    // Menentukan path gambar
    $foto_path = '../uploads/' . $tipslowongan['foto'];
    $foto = file_exists($foto_path)
        ? '<img src="' . $base_url . '/../uploads/' . $tipslowongan['foto'] . '" alt="Foto" style="width: 100px; height: auto;">'
        : 'Tidak ada foto';

    $html .= "<tr>
                <td>{$no}</td>
                <td>{$foto}</td>
                <td>{$tipslowongan['nama']}</td>
                <td>{$tipslowongan['tips_loker']}</td>
                <td>{$tipslowongan['done_work']}</td>
            </tr>";
    $no++;
}
$html .= "</table>";

$dompdf->loadHtml($html);

// Setting ukuran dan orientasi kertas
$dompdf->setPaper('A4', 'portrait');

// Aktifkan opsi jarak jauh untuk Dompdf (jika gambar di-host secara eksternal)
$options = $dompdf->getOptions();
$options->set('isRemoteEnabled', true);
$dompdf->setOptions($options);

// Rendering dari HTML ke PDF
$dompdf->render();

// Melakukan output file PDF
$dompdf->stream('laporan-Tips-Loker.pdf');
?>
