<?php
// Periksa apakah $clusters ada
if (!isset($clusters) || !is_array($clusters)) {
    $clusters = []; // Nilai default
}

// Debug (Opsional)
echo '<pre>';
var_dump($clusters);
echo '</pre>';
?>

<div class="container mt-5 text-center">
    <h3>Jumlah Data Setiap Cluster</h3>
    <div class="row mt-4">
        <div class="col-md-6">
            <table class="table table-bordered">
                <thead class="table-dark">
                <tr>
                    <th>Cluster</th>
                    <th>Jumlah Data</th>
                </tr>
                </thead>
                <?php if (isset($clusters) && is_array($clusters) && count($clusters) > 0): ?>
                    <tbody>
                    <?php foreach ($clusters as $index => $cluster): ?>
                        <tr>
                            <td>Cluster <?= $index + 1 ?></td>
                            <td><?= count($cluster) ?></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                <?php else: ?>
                    <tbody>
                        <tr>
                            <td colspan="2">Data cluster tidak tersedia.</td>
                        </tr>
                    </tbody>
                <?php endif; ?>
            </table>
        </div>
        <div class="col-md-6">
            <canvas id="clusterChart"></canvas>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const clusterData = <?= json_encode(array_map('count', $clusters)) ?>;
    const clusterLabels = <?= json_encode(array_map(function ($i) { return "Cluster " . ($i + 1); }, array_keys($clusters))) ?>;

    const ctx = document.getElementById('clusterChart').getContext('2d');
    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: clusterLabels,
            datasets: [{
                label: 'Jumlah Data',
                data: clusterData,
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: { beginAtZero: true }
            }
        }
    });
</script>
