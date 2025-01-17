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
              <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                <span class="d-none d-md-inline">Admin</span>
              </a>
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
          <a href="../index.html" class="brand-link">
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
              <a href="../index.html" class="nav-link active">
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
              <a href="./info-box.php" class="nav-link active">
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
              <div class="table-wrapper">
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
                                  $iterations[] = $clusters;

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

                              return [$clusters, $centroids];
                          }

                          // Fungsi DBI
                          function calculateDBI($clusters, $centroids) {
                              $k = count($clusters);
                              $s = [];
                              for ($i = 0; $i < $k; $i++) {
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

                          // Ambil data
                          $result = $conn->query("SELECT id, nama, x_value, y_value FROM data_points");
                          $data = [];
                          while ($row = $result->fetch_assoc()) {
                              $data[] = $row;
                          }

                          // Proses clustering
                          $k = isset($_POST['k']) ? (int)$_POST['k'] : 3; // Default 3 klaster jika tidak ada input
                          list($clusters, $centroids) = kmeans($data, $k, $iterations);
                          $dbi = calculateDBI($clusters, $centroids);
                          ?>

                          <!-- Tabel dan Grafik Jumlah Data Setiap Cluster -->
                          <div class="row my-5">
                              <div class="col-md-6">
                                  <h3>Jumlah Data per Cluster</h3>
                                  <table class="table table-bordered">
                                      <thead class="table-dark">
                                      <tr>
                                          <th>Cluster</th>
                                          <th>Jumlah Data</th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                      <?php foreach ($clusters as $index => $cluster): ?>
                                          <tr>
                                              <td>Cluster <?= $index + 1 ?></td>
                                              <td><?= count($cluster) ?></td>
                                          </tr>
                                      <?php endforeach; ?>
                                      </tbody>
                                  </table>
                              </div>
                              <div class="col-md-6">
                                  <canvas id="clusterChart"></canvas>
                              </div>
                          </div>

                          <!-- Dropdown Preview Isi Cluster -->
                          <h3>Preview Isi Cluster</h3>
                          <?php foreach ($clusters as $index => $cluster): ?>
                              <button class="btn btn-info mb-2" type="button" data-bs-toggle="collapse" data-bs-target="#cluster<?= $index ?>">Cluster <?= $index + 1 ?></button>
                              <div id="cluster<?= $index ?>" class="collapse">
                                  <table class="table table-bordered">
                                      <thead>
                                      <tr>
                                          <th>ID</th>
                                          <th>Nama</th>
                                          <th>X Value</th>
                                          <th>Y Value</th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                      <?php foreach ($cluster as $point): ?>
                                          <tr>
                                              <td><?= $point['id'] ?></td>
                                              <td><?= $point['nama'] ?></td>
                                              <td><?= $point['x_value'] ?></td>
                                              <td><?= $point['y_value'] ?></td>
                                          </tr>
                                      <?php endforeach; ?>
                                      </tbody>
                                  </table>
                              </div>
                          <?php endforeach; ?>

                          <!-- Tabel Iterasi -->
                          <h3>Iterasi Perhitungan</h3>
                          <div class="accordion" id="iterationAccordion">
                              <?php foreach ($iterations as $iterationIndex => $iterationClusters): ?>
                                  <div class="accordion-item">
                                      <h2 class="accordion-header" id="heading<?= $iterationIndex ?>">
                                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#iteration<?= $iterationIndex ?>">
                                              Iterasi <?= $iterationIndex + 1 ?>
                                          </button>
                                      </h2>
                                      <div id="iteration<?= $iterationIndex ?>" class="accordion-collapse collapse">
                                          <div class="accordion-body">
                                              <table class="table table-bordered">
                                                  <thead>
                                                  <tr>
                                                      <th>Cluster</th>
                                                      <th>Data</th>
                                                  </tr>
                                                  </thead>
                                                  <tbody>
                                                  <?php foreach ($iterationClusters as $index => $cluster): ?>
                                                      <tr>
                                                          <td>Cluster <?= $index + 1 ?></td>
                                                          <td><?= count($cluster) ?> Data</td>
                                                      </tr>
                                                  <?php endforeach; ?>
                                                  </tbody>
                                              </table>
                                          </div>
                                      </div>
                                  </div>
                              <?php endforeach; ?>
                          </div>

                          <!-- Rangkuman Akhir -->
                          <h3 class="mt-5">Rangkuman Akhir</h3>
                          <p>DBI: <?= number_format($dbi, 4) ?></p>
                          <p>SSW: <!-- Isi perhitungan SSW --></p>
                          <p>SSB: <!-- Isi perhitungan SSB --></p>
                          <p>Nilai Max Ratio: <!-- Isi nilai rasio maksimal --></p>

                      </div>

                      <script>
                          // Data untuk grafik jumlah data setiap cluster
                          const clusterData = <?= json_encode(array_map('count', $clusters)) ?>;
                          const clusterLabels = <?= json_encode(array_map(function ($i) {
                              return 'Cluster ' . ($i + 1);
                          }, array_keys($clusters))) ?>;

                          const ctx = document.getElementById('clusterChart').getContext('2d');
                          new Chart(ctx, {
                              type: 'bar',
                              data: {
                                  labels: clusterLabels,
                                  datasets: [{
                                      label: 'Jumlah Data',
                                      data: clusterData,
                                      backgroundColor: 'rgba(54, 162, 235, 0.6)',
                                      borderColor: 'rgba(54, 162, 235, 1)',
                                      borderWidth: 1
                                  }]
                              },
                              options: {
                                  responsive: true,
                                  plugins: {
                                      legend: {
                                          display: false
                                      }
                                  }
                              }
                          });
                      </script>

                      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

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
    <script src="../../../dist/js/adminlte.js"></script>
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
    <!--end::Script-->
  </body>
  <!--end::Body-->
</html>
