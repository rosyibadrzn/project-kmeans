<?php
include __DIR__ . '/../db_connect.php';

// Fungsi Euclidean Distance
function euclideanDistance($x1, $y1, $x2, $y2) {
    return sqrt(pow($x1 - $x2, 2) + pow($y1 - $y2, 2));
}

// Fungsi K-Means
function kmeans($data, $k, &$iterations) {
    if (count($data) < $k) {
        return [null, null, "Jumlah data tidak cukup untuk jumlah cluster yang diminta."];
    }

    $centroids = [];
    $clusters = [];
    $maxIterations = 100;
    $iterations = [];

    // Inisialisasi centroid secara acak
    for ($i = 0; $i < $k; $i++) {
        $centroids[] = $data[array_rand($data)];
    }

    for ($iteration = 1; $iteration <= $maxIterations; $iteration++) {
        $clusters = array_fill(0, $k, []);

        // Assign data ke klaster terdekat
        foreach ($data as $point) {
            $distances = array_map(function ($centroid) use ($point) {
                return euclideanDistance($point['x_value'], $point['y_value'], $centroid['x_value'], $centroid['y_value']);
            }, $centroids);

            $clusterIndex = array_search(min($distances), $distances);
            $clusters[$clusterIndex][] = $point;
        }

        // Simpan hasil iterasi
        $iterations[] = ['clusters' => $clusters, 'centroids' => $centroids];

        // Hitung ulang centroid
        $newCentroids = [];
        foreach ($clusters as $cluster) {
            if (count($cluster) > 0) {
                $meanX = array_sum(array_column($cluster, 'x_value')) / count($cluster);
                $meanY = array_sum(array_column($cluster, 'y_value')) / count($cluster);
                $newCentroids[] = ['x_value' => $meanX, 'y_value' => $meanY];
            } else {
                $newCentroids[] = $centroids[array_rand($centroids)];
            }
        }

        // Jika centroid tidak berubah, hentikan iterasi
        if ($centroids === $newCentroids) {
            break;
        }

        $centroids = $newCentroids;
    }

    return [$clusters, $centroids, null];
}

// Ambil data
$result = $conn->query("SELECT id, nama, x_value, y_value FROM data_points");
$data = [];
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

// Proses clustering
$k = isset($_POST['k']) ? (int)$_POST['k'] : 3; // Default 3 klaster jika tidak ada input
list($clusters, $centroids, $error) = kmeans($data, $k, $iterations);

// Mengonversi data clusters dan centroids ke format JSON
$clustersJSON = json_encode($clusters);
$centroidsJSON = json_encode($centroids);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>K-Means Clustering Diagram</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>

<div class="container mt-5">
    <h3 class="text-center">K-Means Clustering Diagram</h3>

    <!-- Canvas for the chart -->
    <canvas id="kmeansChart" width="800" height="400"></canvas>

    <script>
        // Ambil data clusters dan centroids dari PHP
        const clusters = <?= $clustersJSON ?>;
        const centroids = <?= $centroidsJSON ?>;

        // Warna untuk setiap cluster
        const colors = ['#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0', '#9966FF'];

        // Menyiapkan dataset untuk Chart.js
        const datasets = [];

        // Menambahkan data cluster ke dataset
        clusters.forEach((cluster, index) => {
            datasets.push({
                label: `Cluster ${index + 1}`,
                data: cluster.map(point => ({ x: point.x_value, y: point.y_value })),
                backgroundColor: colors[index % colors.length],
                borderColor: colors[index % colors.length],
                borderWidth: 1,
                pointRadius: 6,
            });
        });

        // Menambahkan data centroid ke dataset
        datasets.push({
            label: 'Centroids',
            data: centroids.map(centroid => ({ x: centroid.x_value, y: centroid.y_value })),
            backgroundColor: 'rgba(0, 0, 0, 0.7)', // Centroid warna hitam
            borderColor: '#000',
            borderWidth: 2,
            pointRadius: 10, // Ukuran titik centroid lebih besar
        });

        // Membuat grafik menggunakan Chart.js
        const ctx = document.getElementById('kmeansChart').getContext('2d');
        new Chart(ctx, {
            type: 'scatter', // Grafik scatter untuk plotting data
            data: {
                datasets: datasets
            },
            options: {
                plugins: {
                    title: {
                        display: true,
                        text: 'K-Means Clustering Diagram'
                    }
                },
                scales: {
                    x: {
                        title: {
                            display: true,
                            text: 'X Value'
                        }
                    },
                    y: {
                        title: {
                            display: true,
                            text: 'Y Value'
                        }
                    }
                }
            }
        });
    </script>
</div>

</body>
</html>
