<?php
 include "session.php";
 include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - SIPE2BARP</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Jquery -->
  <script
  src="https://code.jquery.com/jquery-3.7.0.slim.js" integrity="sha256-7GO+jepT9gJe9LB4XFf8snVOjX3iYNb0FHYr5LI1N5c=" crossorigin="anonymous"></script>

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
  <!-- ======= Koneksi ======= -->
  <div id="wifi-icon">
        <div id="toast-container">
        </div>
  </div>

  <!-- ======= Spinner ======= -->
  <div class="spinner-wrapper">
    <img src = "assets/img/logo.png" role="status">
      <span class="sr-only"></span>
    </div>
  </div>
  
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

  

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">SIPE2BARP</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle dropdown-toggle">
            <span class="d-none d-md-block dropdown-toggle ps-2">
              <?php
                echo $_SESSION['username'];
              ?>
            </span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>
                <?php
                  echo $_SESSION['username'];
                ?>
              </h6>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.php">
                <i class="bi bi-person"></i>
                  <?php
                    echo "<span 'href='users-profile.php?$_POST[$username]'>Profil</span>";
                  ?>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-bell"></i>
                <span>Notifikasi</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile-edit.php">
                <i class="bi bi-gear"></i>
                <?php
                    echo "<span 'href='users-profile-edit.php?$_POST[$username]'>Pengaturan Akun</span>";
                  ?>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.php">
                <i class="bi bi-question-circle"></i>
                <span>Butuh Bantuan?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="logout.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Keluar</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="index.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.php">
          <i class="bi bi-person"></i>
          <span>Profil</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-faq.php">
          <i class="bi bi-question-circle"></i>
          <span>F.A.Q</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-contact.php">
          <i class="bi bi-envelope"></i>
          <span>Hubungi Kami</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-login.php">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Keluar</span>
        </a>
      </li><!-- End Login Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-error-404.php">
          <i class="bi bi-dash-circle"></i>
          <span>Error 404</span>
        </a>
      </li><!-- End Error 404 Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">Pengaturan Lampu</h5>
                  <div class="d-flex align-items-center">

                    <button type="button" class="btn btn-primary bi bi-ui-radios-grid card-icon rounded-circle d-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#modalDialogScrollable"></button>
                    <div class="modal fade" id="modalDialogScrollable" tabindex="-1">
                      <div class="modal-dialog modal-dialog-scrollable">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title">Pilih Ruangan</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="container modal-body">
                          <?php
                          if (isset($_POST['proseslog'])) {
                            $status1 = isset($_POST['Status1']) ? 1 : 0;
                            $sliderFilter = $_POST['sliderFilter'];
                            
                            // Update Status
                            $update = mysqli_query($koneksi, "UPDATE ruangan SET status = '$status1' WHERE no_registrasi");

                            // Update Slider
                            $update_filter = mysqli_query($koneksi, "UPDATE slider_filter SET filter = '$sliderFilter' WHERE no_registrasi");
                            
                          }
                          // Ambil Status
                          $sql_status = mysqli_query($koneksi, "SELECT * FROM ruangan WHERE no_registrasi");
                          $data = mysqli_fetch_array($sql_status);
                          $Status = $data['status'];

                          // Ambil Slider
                          $sql_filter = mysqli_query($koneksi, "SELECT filter FROM slider_filter WHERE no_registrasi");
                          $data = mysqli_fetch_array($sql_filter);
                          $sliderFilter = $data['filter'];
                          ?>
                          <form method="POST" action="">
                            <div class="row">
                                <div class="col-6 ">
                                    Atur Kecerahan
                                </div>
                                <br></br>
                                <div class="col-6">
                                  <i class="bi bi-brightness-low"></i>
                                  <input type="range" id="range" name="sliderFilter" min="10" max="100" value="<?php echo $sliderFilter;?>">
                                  <i class="bi bi-brightness-high"></i>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-8">
                                  Ruangan 1
                                </div>
                                <br></br>
                                <div class="col-4">
                                  <input type="checkbox" id="check1" class="b" name="Status1" value="1" <?php echo $Status ? 'checked' : 'false'; ?>>
                                  <label for="check1" class="button a"></label>
                                </div>
                              </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                              <button type="submit" class="btn btn-primary" name="proseslog">Simpan perubahan</button>
                            </div>
                        </div>
                      </form>
                      </div>
                    </div><!-- End Modal Dialog Scrollable-->
                    <div class="ps-3">
                      <h6>Kontrol</h6>
                      <span class="text-muted small pt-2 ps-1">Lampu</span>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">
                <div class="card-body">
                  <h5 class="card-title">Informasi Lampu</h5>
                  <div class="d-flex align-items-center">
                    
                  <button type="button" class="btn btn-success bi bi-lightbulb card-icon rounded-circle d-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#basicModal"></button>
                    <div class="modal fade" id="basicModal" tabindex="-1">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title">Informasi Tentang Lampu</h5>
                            <button type="button" class="btn-close" data-label="Close"></button>
                          </div>
                          <div class="container modal-body">
                              <div class="row">
                                <div class="col-6 ">
                                    Kecerahan
                                </div>
                                <br></br>
                                <div class="col-6">
                                <?php echo $sliderFilter;  ?>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-6 ">
                                    Ruangan 1
                                </div>
                                <br></br>
                                <div class="col-6">
                                <?php echo $Status ? 'On' : 'Off';  ?>
                                </div>
                              </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Tutup</button>
                          </div>
                        </div>
                      </div>
                    </div><!-- End Modal Scrollable -->

                    <div class="ps-3">
                      <h6>Tentang</h6>
                      <span class="text-muted small pt-2 ps-1">Lampu</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->

            <!-- Customers Card -->
            <div class="col-xxl-4 col-xl-12">

              <div class="card info-card customers-card">
                <div class="card-body">
                  <h5 class="card-title">Jadwal Lampu</h5>
                  <div class="d-flex align-items-center">

                  <button type="button" class="btn btn-warning bi bi-calendar card-icon rounded-circle d-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#ExtralargeModal"></button>
                    <div class="modal fade" id="ExtralargeModal" tabindex="-1">
                      <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title">Atur Jadwal Matikan Lampu</h5>
                            <button type="button" class="btn-close" aria-label="Close"></button>
                          </div>
                          <div class="container modal-body">
                              <div class="row">
                                <div class="col-6 ">
                                    Kecerahan
                                </div>
                                <br></br>
                                <div class="col-6">
                                <?php echo $sliderFilter;  ?>
                                </div>
                              </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            <button type="button" class="btn btn-primary">Simpan Perubahan</button>
                          </div>
                        </div>
                      </div>
                    </div><!-- End Modal Scrollable -->
                    <div class="ps-3">
                      <h6>Jadwal</h6>
                      <span class="text-muted small pt-2 ps-1">Lampu</span>

                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Customers Card -->

            <!-- Reports -->
            <div class="col-12">
              <div class="card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Hari</a></li>
                    <li><a class="dropdown-item" href="#">Bulan</a></li>
                    <li><a class="dropdown-item" href="#">Tahun</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Laporan <span>/ Hari ini</span></h5>

                  <!-- Line Chart -->
                  <div id="reportsChart"></div>

                  <script>
                    document.addEventListener("DOMContentLoaded", () => {
                      new ApexCharts(document.querySelector("#reportsChart"), {
                        series: [{
                          name: 'On/Off',
                          data: [31, 40, 28, 51, 42, 82, 56],
                        }, {
                          name: 'Warna Cahaya',
                          data: [11, 32, 45, 32, 34, 52, 41]
                        }, {
                          name: 'Insensitas Cahaya',
                          data: [15, 11, 32, 18, 9, 24, 11]
                        }],
                        chart: {
                          height: 350,
                          type: 'area',
                          toolbar: {
                            show: false
                          },
                        },
                        markers: {
                          size: 4
                        },
                        colors: ['#4154f1', '#2eca6a', '#ff771d'],
                        fill: {
                          type: "gradient",
                          gradient: {
                            shadeIntensity: 1,
                            opacityFrom: 0.3,
                            opacityTo: 0.4,
                            stops: [0, 90, 100]
                          }
                        },
                        dataLabels: {
                          enabled: false
                        },
                        stroke: {
                          curve: 'smooth',
                          width: 2
                        },
                        xaxis: {
                          type: 'datetime',
                          categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"]
                        },
                        tooltip: {
                          x: {
                            format: 'dd/MM/yy HH:mm'
                          },
                        }
                      }).render();
                    });
                  </script>
                  <!-- End Line Chart -->

                </div>

              </div>
            </div><!-- End Reports -->

          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-4">

          <!-- News & Updates Traffic -->
          <div class="card">
            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Hari ini</a></li>
                <li><a class="dropdown-item" href="#">Bulan ini</a></li>
                <li><a class="dropdown-item" href="#">Tahun ini</a></li>
              </ul>
            </div>

            <div class="card-body pb-0">
              <h5 class="card-title">Berita <span>| Hari ini</span></h5>

              <div class="news">
                <div class="post-item clearfix">
                  <img src="assets/img/news-1.jpg" alt="">
                  <h4><a href="https://www.cnbcindonesia.com/news/20230623085544-4-448561/kabar-gembira-tarif-listrik-juli--september-resmi-gak-naik">Berita gembira! Tarif Listrik Juli - September Resmi tidak Naik</a></h4>
                  <p class="text-truncate" style="max-width: 150px;">Pemerintah melalui Kementerian Energi dan Sumber Daya Mineral (ESDM)...</p>
                </div>

                <div class="post-item clearfix">
                  <img src="assets/img/news-2.jpg" alt="">
                  <h4><a href="https://www.liputan6.com/tekno/read/5204317/teknologi-di-balik-lampu-pintar-hannochs-bisa-diperintah-tanpa-koneksi-internet">Teknologi di Balik Lampu Pintar Hannchos, Bisa Diperintah Tanpa Koneksi Internet</a></h4>
                  <p class="text-truncate" style="max-width: 150px;">Salah satu produk lampu pintar Hannochs yang cukup populer adalah seri Smart LED Bluetooth 9W. Keunggulan dari produk ini adalah...</p>
                </div>

                <div class="post-item clearfix">
                  <img src="assets/img/news-3.jpg" alt="">
                  <h4><a href="https://www.liputan6.com/tekno/read/2156231/keren-bohlam-lampu-dilengkapi-speaker-dan-wifi-repeater">Keren, Bohlam Lampu Dilengkapi Speaker dan WiFi Repeater</a></h4>
                  <p class="text-truncate" style="max-width: 150px;">Perusahan pencahayaan Sengled meluncurkan beberapa lampu LED pintar generasi terbaru yang dilengkapi speaker dan WiFi Repeater....</p>
                </div>

                <div class="post-item clearfix">
                  <img src="assets/img/news-4.jpg" alt="">
                  <h4><a href="https://www.antaranews.com/berita/3220845/philips-kenalkan-lampu-pintar-terkoneksi">Philips Kenalkan Lampu Pintar Terkoneksi</a></h4>
                  <p class="text-truncate" style="max-width: 150px;">Signify mengumumkan kehadiran rangkaian produk terbaru lampu pintar terkoneksi, Philips Smart LED Connected by WiZ, sekaligus kampanye...</p>
                </div>

                <div class="post-item clearfix">
                  <img src="assets/img/news-5.jpg" alt="">
                  <h4><a href="https://www.sindonews.com/terkait/lampu-pintar">Kumpulan Informasi Terkait Lampu Pintar</a></h4>
                  <p class="text-truncate" style="max-width: 150px;">Kumpulan berita dan informasi terkaitLampu Pintar - - KST Banten Bantu Lampu Penerangan di Pul Truk Pandeglang. Hadirkan Modernisasi Pendidikan Digital,...</p>
                </div>

              </div><!-- End sidebar recent posts-->

            </div>
          </div><!-- End News & Updates -->

        </div><!-- End Right side columns -->

      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>SIPE2BARP</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      Designed by <a href="#">Soleh & Yoga</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.7.0.js"></script>

</body>

</html>