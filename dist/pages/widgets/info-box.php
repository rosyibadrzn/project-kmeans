<!doctype html>
<html lang="en">
  <!--begin::Head-->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Project | K-Means Clustering </title>
    <!--begin::Primary Meta Tags-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="title" content="AdminLTE | K-Means Clusetring" />
    <meta name="author" content="ColorlibHQ" />
    <meta
      name="description"
      content="AdminLTE is a Free Bootstrap 5 Admin Dashboard, 30 example pages using Vanilla JS."
    />
    <meta
      name="keywords"
      content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, colorlibhq, colorlibhq dashboard, colorlibhq admin dashboard"
    />
    <!--end::Primary Meta Tags-->
    <!--begin::Fonts-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css"
      integrity="sha256-tXJfXfp6Ewt1ilPzLDtQnJV4hclT9XuaZUKyUvmyr+Q="
      crossorigin="anonymous"
    />
    <!--end::Fonts-->
    <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.10.1/styles/overlayscrollbars.min.css"
      integrity="sha256-tZHrRjVqNSRyWg2wbppGnT833E/Ys0DHWGwT04GiqQg="
      crossorigin="anonymous"
    />
    <!--end::Third Party Plugin(OverlayScrollbars)-->
    <!--begin::Third Party Plugin(Bootstrap Icons)-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
      integrity="sha256-9kPW/n5nn53j4WMRYAxe9c1rCY96Oogo/MKSVdKzPmI="
      crossorigin="anonymous"
    />
    <!--end::Third Party Plugin(Bootstrap Icons)-->
    <!--begin::Required Plugin(AdminLTE)-->
    <link rel="stylesheet" href="../../../dist/css/adminlte.css" />
    <!--end::Required Plugin(AdminLTE)-->
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- Custom Styles -->
    <style>
        body {
            background-color: #f8f9fa;
        }
        .table-wrapper {
            margin: 50px auto;
            width: 90%;
            max-width: 1200px;
            background: #fff;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            padding: 20px;
        }
        .table th {
            background-color: #007bff;
            color: #fff;
        }
        .table td, .table th {
            text-align: center;
        }
        .btn-logout {
            background-color: #dc3545; /* Warna merah */
            color: #fff; /* Warna teks putih */
            font-size: 0.8rem; /* Ukuran font kecil */
            padding: 5px 10px; /* Ukuran tombol kecil */
            border-radius: 5px; /* Sudut membulat */
            text-decoration: none; /* Hilangkan underline */
        }
        .btn-logout:hover {
            background-color: #c82333; /* Warna merah lebih gelap saat hover */
            text-decoration: none; /* Hilangkan underline saat hover */
        }
    </style>
  </head>

  <!--end::Head-->
  <!--begin::Body-->
  <body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <!--begin::App Wrapper-->
    <div class="app-wrapper">
      <!--begin::Header-->
      <nav class="app-header navbar navbar-expand bg-body">
        <!--begin::Container-->
        <div class="container-fluid">
          <!--begin::Start Navbar Links-->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button">
                <i class="bi bi-list"></i>
              </a>
            </li>
            <li class="nav-item d-none d-md-block"><a href="#" class="nav-link">Home</a></li>
          </ul>
          <!--end::Start Navbar Links-->
          <!--begin::End Navbar Links-->
          <ul class="navbar-nav ms-auto">
            <!--begin::User Menu Dropdown-->
            <li class="nav-item dropdown user-menu">
              <!-- Tombol Logout -->
              <div class="text-end p-3">
                  <a href="./../index.htmls" class="btn-logout">Logout</a>
              </div>
              <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                <!--begin::Menu Footer-->
                <li class="user-footer">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                  <a href="#" class="btn btn-default btn-flat float-end">Sign out</a>
                </li>
                <!--end::Menu Footer-->
              </ul>
            </li>
            <!--end::User Menu Dropdown-->
          </ul>
          <!--end::End Navbar Links-->
        </div>
        <!--end::Container-->
      </nav>
      <!--end::Header-->
      <!--begin::Sidebar-->
      <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
        <!--begin::Sidebar Brand-->
        <div class="sidebar-brand">
          <!--begin::Brand Link-->
          <a href="../home.html" class="brand-link">
            <!--begin::Brand Image-->
            <img
              src="../../../dist/assets/img/AdminLTELogo.png"
              alt="AdminLTE Logo"
              class="brand-image opacity-75 shadow"
            />
            <!--end::Brand Image-->
            <!--begin::Brand Text-->
            <span class="brand-text fw-light">Project K-Means</span>
            <!--end::Brand Text-->
          </a>
          <!--end::Brand Link-->
        </div>
        <!--end::Sidebar Brand-->
        <!--begin::Sidebar Wrapper-->
        <div class="sidebar-wrapper">
          <nav class="mt-2">
            <!--begin::Sidebar Menu-->
            <ul
              class="nav sidebar-menu flex-column"
              data-lte-toggle="treeview"
              role="menu"
              data-accordion="false"
            >
            <li class="nav-item menu-open">
              <a href="../home.html" class="nav-link active">
                <i class="nav-icon bi bi-card-checklist"></i>
                <p>Main Dashboard</p>
              </a>
            </li>
            <li class="nav-item menu-open">
              <a href="./cards.php" class="nav-link active">
                <i class="nav-icon bi bi-blockquote-left"></i>
                <p>Data Input</p>
              </a>
            </li>
            <li class="nav-item menu-open">
              <a href="./small-box.php" class="nav-link active">
                <i class="nav-icon bi bi-arrow-repeat"></i>
                <p>Proses Perhitungan</p>
              </a>
            </li>
            <li class="nav-item menu-open">
              <a href="" class="nav-link active">
                <i class="nav-icon bi bi-activity"></i>
                <p>Hasil Perhitungan</p>
              </a>
            </li>
            <!--end::Sidebar Menu-->
          </nav>
        </div>
        <!--end::Sidebar Wrapper-->
      </aside>
      <!--end::Sidebar-->
      <!--begin::App Main-->
      <main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-6"><h3 class="mb-0">Hasil Perhitungan Data</h3></div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Hasil Hitung</li>
                </ol>
              </div>
            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content Header-->
        <!--begin::App Content-->
        <div class="app-content">
          <!--begin::Container-->
          <div class="container-fluid">
            <div class="container">
              <div class="table-wrapper" >
                <!--begin::Row-->
                
                <div class="row g-4 mb-4">
                      <div class="container mt-5">
                        <h1 class="text-center">Hasil Pemrosesan Data dengan K-Means Clustering</h1>

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

                        // Fungsi DBI
                        function calculateDBI($clusters, $centroids) {
                            $k = count($clusters);
                            $s = [];
                            for ($i = 0; $i < $k; $i++) {
                                if (count($clusters[$i]) === 0) {
                                    return null; // Hindari pembagian dengan nol
                                }

                                $distances = [];
                                foreach ($clusters[$i] as $point) {
                                    $distances[] = euclideanDistance($point['x_value'], $point['y_value'], $centroids[$i]['x_value'], $centroids[$i]['y_value']);
                                }
                                $s[$i] = array_sum($distances) / count($distances);
                            }

                            $dbi = 0;
                            for ($i = 0; $i < $k; $i++) {
                                $maxRij = 0;
                                for ($j = 0; $j < $k; $j++) {
                                    if ($i != $j) {
                                        $rij = ($s[$i] + $s[$j]) / euclideanDistance($centroids[$i]['x_value'], $centroids[$i]['y_value'], $centroids[$j]['x_value'], $centroids[$j]['y_value']);
                                        $maxRij = max($maxRij, $rij);
                                    }
                                }
                                $dbi += $maxRij;
                            }
                            return $dbi / $k;
                        }
                        
                        // Proses ketika tombol "Cluster Data" ditekan
                        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                          if (isset($_POST['k']) && is_numeric($_POST['k'])) {
                              $k = (int)$_POST['k'];

                              // Ambil data dari database
                              $result = $conn->query("SELECT id, nama, x_value, y_value FROM data_points");
                              $data = [];
                              while ($row = $result->fetch_assoc()) {
                                  $data[] = $row;
                              }

                              // Jalankan algoritma K-Means
                              list($clusters, $centroids, $error) = kmeans($data, $k, $iterations);

                              if ($error) {
                                  echo "<div class='alert alert-danger'>Error: $error</div>";
                              } else {
                                  // Insert centroid ke tabel "clusters"
                                  $stmt = $conn->prepare("INSERT INTO clusters (centroid_x, centroid_y, created_at) VALUES (?, ?, ?)");
                                  foreach ($centroids as $centroid) {
                                      $createdAt = date('Y-m-d H:i:s'); // Deklarasikan variabel sebelum digunakan
                                      $stmt->bind_param(
                                          "dds", 
                                          $centroid['x_value'], 
                                          $centroid['y_value'], 
                                          $createdAt // Gunakan variabel yang sudah dideklarasikan
                                      );
                                      $stmt->execute();
                                  }
                                  $stmt->close();

                                  echo "<div class='alert alert-success'>Clustering selesai! Centroid telah disimpan ke database.</div>";
                              }
                          } else {
                              echo "<div class='alert alert-danger'>Masukkan jumlah cluster yang valid.</div>";
                          }
                        }

                        // Proses clustering
                        $k = isset($_POST['k']) ? (int)$_POST['k'] : 3; // Default 3 klaster jika tidak ada input
                        list($clusters, $centroids, $error) = kmeans($data, $k, $iterations);
                        
                        // Mengonversi data clusters dan centroids ke format JSON
                        $clustersJSON = json_encode($clusters);
                        $centroidsJSON = json_encode($centroids);

                        $dbi = $clusters !== null ? calculateDBI($clusters, $centroids) : null;
                        ?>

                        <?php
                        // Periksa apakah $clusters ada
                        if (!isset($clusters) || !is_array($clusters)) {
                            $clusters = []; // Nilai default
                        }

                        // Debug (Opsional)
                        echo '<pre>';
                        // var_dump($clusters);
                        echo '</pre>';
                        ?>

                            <!-- Tabel dan Grafik Jumlah Data Setiap Cluster -->
                            <div class="row mt-5 text-center">
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
                            </div><br><br>

                            
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

                            <!-- Dropdown Preview Isi Cluster -->
                              <h3 class="text-center mb-4">Preview Data Setiap Cluster</h3>
                              <div class="accordion" id="clusterAccordion">
                                  <?php foreach ($clusters as $index => $cluster): ?>
                                      <div class="accordion-item mb-2">
                                          <h2 class="accordion-header" id="headingCluster<?= $index ?>">
                                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCluster<?= $index ?>" aria-expanded="false" aria-controls="collapseCluster<?= $index ?>">
                                                  Cluster <?= $index + 1 ?>
                                              </button>
                                          </h2>
                                          <div id="collapseCluster<?= $index ?>" class="accordion-collapse collapse" aria-labelledby="headingCluster<?= $index ?>" data-bs-parent="#clusterAccordion">
                                              <div class="accordion-body">
                                                  <div class="table-responsive">
                                                      <table class="table table-striped table-hover">
                                                          <thead class="table-dark">
                                                              <tr>
                                                                  <th>No</th>
                                                                  <th>Nama</th>
                                                                  <th>NIlai A</th>
                                                                  <th>Nilai B</th>
                                                              </tr>
                                                          </thead>
                                                          <tbody>
                                                              <?php 
                                                              $counter = 1;
                                                              foreach ($cluster as $point): ?>
                                                                  <tr>
                                                                      <td><?= $counter++ ?></td>
                                                                      <td><?= $point['nama'] ?></td>
                                                                      <td><?= $point['x_value'] ?></td>
                                                                      <td><?= $point['y_value'] ?></td>
                                                                  </tr>
                                                              <?php endforeach; ?>
                                                          </tbody>
                                                      </table>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  <?php endforeach; ?>
                              </div><br><br><br>
                            
                            <!-- Tabel Iterasi -->
                            <h3 class="text-center mb-4">Iterasi Perhitungan</h3>
                            <div class="accordion" id="iterationAccordion">
                                <?php foreach ($iterations as $iterationIndex => $iteration): ?>
                                    <div class="accordion-item mb-2">
                                        <h2 class="accordion-header" id="headingIteration<?= $iterationIndex ?>">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseIteration<?= $iterationIndex ?>" aria-expanded="false" aria-controls="collapseIteration<?= $iterationIndex ?>">
                                                Iterasi <?= $iterationIndex + 1 ?>
                                            </button>
                                        </h2>
                                        <div id="collapseIteration<?= $iterationIndex ?>" class="accordion-collapse collapse" aria-labelledby="headingIteration<?= $iterationIndex ?>" data-bs-parent="#iterationAccordion">
                                            <div class="accordion-body">
                                                <div class="table-responsive">
                                                    <table class="table table-striped table-hover">
                                                        <thead class="table-dark">
                                                            <tr>
                                                                <th>Nama</th>
                                                                <!-- Kolom "Jarak" dinamis, akan otomatis sesuai dengan jumlah cluster -->
                                                                <?php for ($i = 0; $i < count($iteration['centroids']); $i++): ?>
                                                                    <th>Jarak C<?= $i + 1 ?></th>
                                                                <?php endfor; ?>
                                                                <th>Cluster Terdekat</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php foreach ($iteration['clusters'] as $clusterIndex => $cluster): ?>
                                                                <?php foreach ($cluster as $point): ?>
                                                                    <tr>
                                                                        <td><?= $point['nama'] ?></td>
                                                                        <!-- Menampilkan jarak untuk setiap cluster -->
                                                                        <?php for ($i = 0; $i < count($iteration['centroids']); $i++): ?>
                                                                            <td>
                                                                                <?= euclideanDistance($point['x_value'], $point['y_value'], $iteration['centroids'][$i]['x_value'], $iteration['centroids'][$i]['y_value']) ?>
                                                                            </td>
                                                                        <?php endfor; ?>
                                                                        <td>Cluster <?= $clusterIndex + 1 ?></td>
                                                                    </tr>
                                                                <?php endforeach; ?>
                                                            <?php endforeach; ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>


                            <!-- Rangkuman Akhir -->
                            <h3 class="mt-5 text-center">Hasil Akhir</h3>
                            <h3 class="text-center">Diagram Hasil Proses K-Means Clustering</h3>

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
                                const ctx2 = document.getElementById('kmeansChart').getContext('2d');
                                new Chart(ctx2, {
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

                            <b><h5>DBI: <?= number_format($dbi, 4) ?></h5>
                            <h5>Centroid Akhir:</h5>
                            <ul>
                                <?php foreach ($centroids as $index => $centroid): ?>
                                    <h5><li>Cluster <?= $index + 1 ?>: (<?= number_format($centroid['x_value'], 2) ?>, <?= number_format($centroid['y_value'], 2) ?>)</li></h5>
                                <?php endforeach; ?>
                            </ul></b>
                        </div>
                            <div class="d-flex justify-content-between">
                                  <!-- Tombol Clear Data Kiri -->
                                  <form method="POST" action="deleteall_data.php">
                                      <button type="submit" name="clear_data" class="btn btn-warning btn-lg">
                                         <i class="bi bi-bootstrap-reboot"></i> Reset All Data Table
                                      </button>
                                   </form>

                                   <!-- Tombol Clear Data Kanan -->
                                   <form method="POST" action="Small-box.php">
                                       <button type="submit" name="clear_data" class="btn btn-success btn-lg">
                                         <i class="bi bi-arrow-left-right"></i> Rubah Cluster
                                       </button>
                                    </form>
                                    </div>
                                </div>
                            </div>
                            <div class="container mt-5">
                      </div>
                  </div>
                <!-- /.card -->

                </div>
              </div>
              <!-- /.col -->
            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content-->
      </main>
      <!--end::App Main-->
      <!--begin::Footer-->
      <footer class="app-footer">
        <!--begin::To the end-->
        <div class="float-end d-none d-sm-inline">Project Sederhana K-Means Clustering</div>
        <!--end::To the end-->
        <!--begin::Copyright-->
        <strong>
          Copyright &copy; 2025&nbsp;
        </strong>
        Kelompok Terakhir.
        <!--end::Copyright-->
      </footer>
      <!--end::Footer-->
    </div>
    <!--end::App Wrapper-->
    <!--begin::Script-->
    <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <script
      src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.10.1/browser/overlayscrollbars.browser.es6.min.js"
      integrity="sha256-dghWARbRe2eLlIJ56wNB+b760ywulqK3DzZYEpsg2fQ="
      crossorigin="anonymous"
    ></script>
    <!--end::Third Party Plugin(OverlayScrollbars)--><!--begin::Required Plugin(popperjs for Bootstrap 5)-->
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
    ></script>
    <!--end::Required Plugin(popperjs for Bootstrap 5)--><!--begin::Required Plugin(Bootstrap 5)-->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
      integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
      crossorigin="anonymous"
    ></script>
    <!--end::Required Plugin(Bootstrap 5)--><!--begin::Required Plugin(AdminLTE)-->
    <script src="../../dist/js/adminlte.js"></script>
    <!--end::Required Plugin(AdminLTE)--><!--begin::OverlayScrollbars Configure-->
    <script>
      const SELECTOR_SIDEBAR_WRAPPER = '.sidebar-wrapper';
      const Default = {
        scrollbarTheme: 'os-theme-light',
        scrollbarAutoHide: 'leave',
        scrollbarClickScroll: true,
      };
      document.addEventListener('DOMContentLoaded', function () {
        const sidebarWrapper = document.querySelector(SELECTOR_SIDEBAR_WRAPPER);
        if (sidebarWrapper && typeof OverlayScrollbarsGlobal?.OverlayScrollbars !== 'undefined') {
          OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
            scrollbars: {
              theme: Default.scrollbarTheme,
              autoHide: Default.scrollbarAutoHide,
              clickScroll: Default.scrollbarClickScroll,
            },
          });
        }
      });
    </script>
    <!--end::OverlayScrollbars Configure-->
    <!-- OPTIONAL SCRIPTS -->
    <!-- apexcharts -->
    <script
      src="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.min.js"
      integrity="sha256-+vh8GkaU7C9/wbSLIcwq82tQ2wTf44aOHA8HlBMwRI8="
      crossorigin="anonymous"
    ></script>
    <script>
      // NOTICE!! DO NOT USE ANY OF THIS JAVASCRIPT
      // IT'S ALL JUST JUNK FOR DEMO
      // ++++++++++++++++++++++++++++++++++++++++++

      const visitors_chart_options = {
        series: [
          {
            name: 'High - 2023',
            data: [100, 120, 170, 167, 180, 177, 160],
          },
          {
            name: 'Low - 2023',
            data: [60, 80, 70, 67, 80, 77, 100],
          },
        ],
        chart: {
          height: 200,
          type: 'line',
          toolbar: {
            show: false,
          },
        },
        colors: ['#0d6efd', '#adb5bd'],
        stroke: {
          curve: 'smooth',
        },
        grid: {
          borderColor: '#e7e7e7',
          row: {
            colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
            opacity: 0.5,
          },
        },
        legend: {
          show: false,
        },
        markers: {
          size: 1,
        },
        xaxis: {
          categories: ['22th', '23th', '24th', '25th', '26th', '27th', '28th'],
        },
      };

      const visitors_chart = new ApexCharts(
        document.querySelector('#visitors-chart'),
        visitors_chart_options,
      );
      visitors_chart.render();

      const sales_chart_options = {
        series: [
          {
            name: 'Net Profit',
            data: [44, 55, 57, 56, 61, 58, 63, 60, 66],
          },
          {
            name: 'Revenue',
            data: [76, 85, 101, 98, 87, 105, 91, 114, 94],
          },
          {
            name: 'Free Cash Flow',
            data: [35, 41, 36, 26, 45, 48, 52, 53, 41],
          },
        ],
        chart: {
          type: 'bar',
          height: 200,
        },
        plotOptions: {
          bar: {
            horizontal: false,
            columnWidth: '55%',
            endingShape: 'rounded',
          },
        },
        legend: {
          show: false,
        },
        colors: ['#0d6efd', '#20c997', '#ffc107'],
        dataLabels: {
          enabled: false,
        },
        stroke: {
          show: true,
          width: 2,
          colors: ['transparent'],
        },
        xaxis: {
          categories: ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct'],
        },
        fill: {
          opacity: 1,
        },
        tooltip: {
          y: {
            formatter: function (val) {
              return '$ ' + val + ' thousands';
            },
          },
        },
      };

      const sales_chart = new ApexCharts(
        document.querySelector('#sales-chart'),
        sales_chart_options,
      );
      sales_chart.render();
    </script>
    <!--end::Script-->
  </body>
  <!--end::Body-->
</html>
