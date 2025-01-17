<?php
include __DIR__ . '/../db_connect.php';

$message = ""; // Variabel untuk menyimpan pesan notifikasi

// Proses jika tombol "Clear Data Table" ditekan
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['clear_data'])) {
    // Query untuk menghapus semua data dari tabel "data_points"
    $deleteDataPointsQuery = "DELETE FROM data_points";
    $deleteClustersQuery = "DELETE FROM clusters"; // Query untuk menghapus data dari tabel "clusters"

    // Eksekusi query
    if ($conn->query($deleteDataPointsQuery) === TRUE && $conn->query($deleteClustersQuery) === TRUE) {
        $message = "Semua Data Berhasil Dihapus!";
    } else {
        $message = "Terjadi Kesalahan: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Reset Data</title>
</head>
<body>
    <!-- Alert Notifikasi -->
    <?php if (!empty($message)): ?>
        <div class="alert alert-<?php echo strpos($message, 'berhasil') !== false ? 'success' : 'danger'; ?> alert-dismissible fade show position-fixed top-0 start-50 translate-middle-x mt-3" role="alert">
            <?php echo $message; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <!-- Script untuk Redirect ke cards.php -->
        <script>
            setTimeout(function() {
                window.location.href = 'cards.php'; // Redirect ke halaman cards.php setelah 1 detik
            }, 1000);
        </script>
    <?php endif; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
