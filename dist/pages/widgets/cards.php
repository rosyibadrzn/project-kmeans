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
                  <a href="./../index.html" class="btn-logout">Logout</a>
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
            </ul>
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
              <div class="col-sm-6"><h3 class="mb-0">Masukkan Data</h3></div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Data Input</li>
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
                        <h1 class="text-center">Upload Data Excel untuk memulai K-Means Clustering</h1>
                        <form action="upload_excel.php" method="POST" enctype="multipart/form-data">
                            <div class="mb-3 text-center">
                                <br>
                                <label for="excel_file" class="form-label"> Upload file Excel, pastikan file dengan format .xlx atau .xlxs</label>
                                <input type="file" class="form-control" id="excel_file" name="excel_file" accept=".xlsx, .xls" required>
                                <br>
                                <button type="submit" name="clear_data" class="btn btn-success btn-lg">
                                  <i class="bi bi-cloud-upload"></i> Upload
                                </button>
                            </div>
                        </form>
                      </div>
                  </div><hr>
                <!-- /.card -->

                <div class="container-fluid">
                  <div class="container">
                    <div class="table-wrapper">
                        <h2 class="text-center mb-4">Isi Data</h2>
                        <table class="table table-bordered table-hover table-striped">
                            <thead>
                                <?php
                                include __DIR__ . '/../db_connect.php';

                                $result = $conn->query("SELECT * FROM data_points");

                                echo "<div class='container mt-5'>";
                                // echo "<h1>Data Points</h1>";
                                echo "<table class='table table-bordered'>";
                                echo "<thead>
                                  <tr>
                                    <th>NO</th>
                                    <th>Nama</th>
                                    <th>Nilai A</th>
                                    <th>Nilai B</th>
                                  </tr>
                                </thead>";
                                echo "<tbody>";
                                
                                // Variabel untuk penomoran otomatis
                                $counter = 1;

                                // Loop melalui hasil query dan tampilkan data
                                while ($row = $result->fetch_assoc()) {
                                    echo "<tr>
                                            <td>{$counter}</td>
                                            <td>{$row['nama']}</td>
                                            <td>{$row['x_value']}</td>
                                            <td>{$row['y_value']}</td>
                                          </tr>";
                                    $counter++; // Increment nomor baris
                                }

                                echo "</tbody></table>";
                                echo "</div>";
                                ?>

                                <div class="container mt-5">
                                    <div class="d-flex justify-content-between">
                                        <!-- Tombol Clear Data Kiri -->
                                        <form method="POST" action="deleteall_data.php">
                                            <button type="submit" name="clear_data" class="btn btn-danger btn-lg">
                                                <i class="bi bi-trash"></i> Clear All Data Table
                                            </button>
                                        </form>

                                        <!-- Tombol Clear Data Kanan -->
                                        <form method="POST" action="small-box.php">
                                            <button type="submit" name="clear_data" class="btn btn-success btn-lg">
                                              <i class="bi bi-calendar-check"></i> Lanjutkan Proses 
                                            </button>
                                        </form>
                                    </div>
                                </div>

                                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
                            </thead>
                        </table>
                    </div>
                  </div>
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
