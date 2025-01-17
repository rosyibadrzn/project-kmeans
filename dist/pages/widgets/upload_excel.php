<?php
require __DIR__ . '/../../../vendor/autoload.php';
include __DIR__ . '/../db_connect.php';

use PhpOffice\PhpSpreadsheet\IOFactory;

$message = ""; // Variabel untuk menyimpan pesan
$messageType = "danger"; // Default tipe pesan (error)

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['excel_file'])) {
    $file = $_FILES['excel_file']['tmp_name'];

    // Validasi tipe file
    if ($_FILES['excel_file']['type'] !== 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet' && 
        $_FILES['excel_file']['type'] !== 'application/vnd.ms-excel') {
        $message = "Hanya file Excel yang diperbolehkan.";
    } else {
        try {
            $spreadsheet = IOFactory::load($file);
            $sheet = $spreadsheet->getActiveSheet();
            $rows = $sheet->toArray();

            // Cek koneksi database
            if ($conn->connect_error) {
                $message = "Koneksi ke database gagal: " . $conn->connect_error;
            } else {
                // Persiapkan query untuk memasukkan data
                $stmt = $conn->prepare("INSERT INTO data_points (nama, x_value, y_value, cluster, created_at) VALUES (?, ?, ?, NULL, CURRENT_TIMESTAMP)");
                
                foreach ($rows as $index => $row) {
                    if ($index === 0) continue; // Lewati header

                    // Validasi data (pastikan kolom yang dibutuhkan tidak kosong dan tipe data sesuai)
                    $nama = $row[0] ?? null;
                    $x_value = $row[1] ?? null;
                    $y_value = $row[2] ?? null;

                    if (empty($nama) || !is_numeric($x_value) || !is_numeric($y_value)) {
                        continue; // Lewati baris yang tidak valid
                    }

                    // Bind dan eksekusi statement
                    $stmt->bind_param("sdd", $nama, $x_value, $y_value);
                    $stmt->execute();
                }

                $message = "Data berhasil diunggah ke database!";
                $messageType = "success"; // Ubah tipe pesan menjadi sukses
            }
        } catch (Exception $e) {
            $message = "Terjadi kesalahan: " . $e->getMessage();
        }
    }
} else {
    $message = "File tidak valid atau tidak ditemukan.";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Upload Excel</title>
</head>
<body>
    <div class="container mt-5 text-center">
        <!-- Alert Notifikasi -->
        <?php if (!empty($message)): ?>
            <div class="alert alert-<?php echo $messageType; ?> alert-dismissible fade show" role="alert">
                <?php echo $message; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <!-- Redirect ke halaman cards.php setelah 3 detik -->
            <script>
                setTimeout(function() {
                    window.location.href = 'cards.php';
                }, 1000);
            </script>
        <?php endif; ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
