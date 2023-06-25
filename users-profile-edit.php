<?php
 include "session.php";
 include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Profil - SIPE2BARP</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

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
            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $_SESSION['username'];?></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
            <h6><?php echo $_SESSION['username'];?></h6>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.php">
                <i class="bi bi-person"></i>
                <span>Profil</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile-edit.php">
                <i class="bi bi-bell"></i>
                <span>Notifikasi</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-gear"></i>
                <span>Pengaturan Akun</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.php">
                <i class="bi bi-question-circle"></i>
                <span>Butuh Bantuan</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-login.php">
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
        <a class="nav-link collapsed" href="index.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link " href="#">
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
      <h1>Profil</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">Users</li>
          <li class="breadcrumb-item active">Profil</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">
        <div class="col-xl-4">

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

              <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
              <h2><?php echo $_SESSION['username'];?></h2>
            </div>
          </div>

        </div>

        <div class="col-xl-8">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profil</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings">Settings</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
                </li>

              </ul>
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-edit pt-3" id="profile-edit">

                  <!-- Profile Edit Form -->
                  <?php
                    if(isset($_POST['proseslog'])) {
                        $nama = $_POST['nama'];
                        $alamat = $_POST['alamat'];
                        $kelurahan = $_POST['kelurahan'];
                        $kecamatan = $_POST['kecamatan'];
                        $kota = $_POST['kota'];
                        $provinsi = $_POST['provinsi'];

                        $update_sql = "UPDATE user SET nama = '$nama', alamat = '$alamat', kelurahan = '$kelurahan', kecamatan = '$kecamatan', kota = '$kota', provinsi = '$provinsi' WHERE username = '$_SESSION[username]'";
                        $update_result = mysqli_query($koneksi, $update_sql);

                        if ($update_result) {
                            echo "<meta http-equiv=refresh content=0;URL='users-profile.php'>";
                        } else {
                            echo "Terjadi kesalahan dalam memperbarui data: " . mysqli_error($koneksi);
                        }
                    }


                    $sql = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$_SESSION[username]'");
                    $data = mysqli_fetch_array($sql);
                  ?>
                  <form method="POST" action="">

                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Nama Lengkap</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="nama" type="text" class="form-control" id="fullName" value="<?php echo $data['nama'];?>" required>
                        <div class="invalid-feedback">Silahkan masukan password Anda!</div>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="about" class="col-md-4 col-lg-3 col-form-label">Alamat</label>
                      <div class="col-md-8 col-lg-9">
                        <textarea name="alamat" class="form-control" id="about" style="height: 100px" required><?php echo $data['alamat'];;?></textarea>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="company" class="col-md-4 col-lg-3 col-form-label">Kelurahan</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="kelurahan" type="text" class="form-control" id="company" value="<?php echo $data['kelurahan'];?>" required>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Job" class="col-md-4 col-lg-3 col-form-label">Kecamatan</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="kecamatan" type="text" class="form-control" id="Job" value="<?php echo $data['kecamatan'];?>" required>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Country" class="col-md-4 col-lg-3 col-form-label">Kota</label>
                      <div class="col-md-8 col-lg-9">
                      <select class="form-control" name ="kota" id="yourName" value="<?php echo $data['kota'];?>" required>
                        <option>Banda Aceh</option>
                        <option>Langsa</option>
                        <option>Lhokseumawe</option>
                        <option>Sabang</option>
                        <option>Subulussalam</option>
                        <option>Denpasar</option>
                        <option>Pangkalpinang</option>
                        <option>Cilegon</option>
                        <option>Serang</option>
                        <option>Tanggerang Selatan</option>
                        <option>Tanggerang</option>
                        <option>Bengkulu</option>
                        <option>Yogyakarta</option>
                        <option>Gorontalo</option>
                        <option>Jakarta Barat</option>
                        <option>Jakarta Pusat</option>
                        <option>Jakarta Selatan</option>
                        <option>Jakarta Timur</option>
                        <option>Jakarta Utara</option>
                        <option>Sungai Penuh</option>
                        <option>Jambi</option>
                        <option>Bandung</option>
                        <option>Bekasi</option>
                        <option>Bogor</option>
                        <option>Cimahi</option>
                        <option>Cirebon</option>
                        <option>Depok</option>
                        <option>Sukabumi</option>
                        <option>Tasikmalaya</option>
                        <option>Banjar</option>
                        <option>Magelang</option>
                        <option>Pekalongan</option>
                        <option>Salatiga</option>
                        <option>Semarang</option>
                        <option>Surakarta</option>
                        <option>Tegal</option>
                        <option>Batu</option>
                        <option>Blitar</option>
                        <option>Kediri</option>
                        <option>Madiun</option>
                        <option>Malang</option>
                        <option>Mojokerto</option>
                        <option>Pasuruan</option>
                        <option>Probolinggo</option>
                        <option>Surabaya</option>
                        <option>Pontianak</option>
                        <option>Singkawang</option>
                        <option>Banjarbaru</option>
                        <option>Banjarmasin</option>
                        <option>Palangkaraya</option>
                        <option>Balikpapan</option>
                        <option>Bontang</option>
                        <option>Samarinda</option>
                        <option>Nusantara</option>
                        <option>Tarakan</option>
                        <option>Batam</option>
                        <option>Tanjungpinang</option>
                        <option>Bandar Lampung</option>
                        <option>Metro</option>
                        <option>Ternate</option>
                        <option>Tidore Kepulauan</option>
                        <option>Ambon</option>
                        <option>Tual</option>
                        <option>Bima</option>
                        <option>Mataram</option>
                        <option>Kupang</option>
                        <option>Sorong</option>
                        <option>Jayapura</option>
                        <option>Dumai</option>
                        <option>Pekanbaru</option>
                        <option>Makasar</option>
                        <option>Polopo</option>
                        <option>Parepare</option>
                        <option>Palu</option>
                        <option>Baubau</option>
                        <option>Kendari</option>
                        <option>Bitung</option>
                        <option>Kotamobagu</option>
                        <option>Manado</option>
                        <option>Tomohon</option>
                        <option>Bukittinggi</option>
                        <option>Padang</option>
                        <option>Padang Panjang</option>
                        <option>Pariaman</option>
                        <option>Payakumbuh</option>
                        <option>Sawahlunto</option>
                        <option>Solok</option>
                        <option>Lubuklinggau</option>
                        <option>Pagar Alam</option>
                        <option>Palembang</option>
                        <option>Prabumulih</option>
                        <option>Binjai</option>
                        <option>Gunungsitoli</option>
                        <option>Medan</option>
                        <option>Padangsidimpuan</option>
                        <option>Pematangsiantar</option>
                        <option>Sibolga</option>
                        <option>Tanjungbalai</option>
                        <option>Tebing Tinggi</option>
                        <option>Kab. Aceh Barat Daya</option>
                        <option>Kab. Aceh Barat</option>
                        <option>Kab. Aceh Besar</option>
                        <option>Kab. Aceh Jaya</option>
                        <option>Kab. Aceh Selatan</option>
                        <option>Kab. Aceh Singkil</option>
                        <option>Kab. Aceh Tamiang</option>
                        <option>Kab. Aceh Tengah</option>
                        <option>Kab. Aceh Tenggara</option>
                        <option>Kab. Aceh Timur</option>
                        <option>Kab. Aceh Utara</option>
                        <option>Kab. Agam</option>
                        <option>Kab. Alor</option>
                        <option>Kab. Asahan</option>
                        <option>Kab. Asmat</option>
                        <option>Kab. Badung</option>
                        <option>Kab. Balangan</option>
                        <option>Kab. Bandung Barat</option>
                        <option>Kab. Bandung</option>
                        <option>Kab. Banggai</option>
                        <option>Kab. Banggai Kepulauan</option>
                        <option>Kab. Banggai Laut</option>
                        <option>Kab. Bangka Barat</option>
                        <option>Kab. Bangka Selatan</option>
                        <option>Kab. Bangka Tengah</option>
                        <option>Kab. Bangka</option>
                        <option>Kab. Bangkalan</option>
                        <option>Kab. Bangli</option>
                        <option>Kab. Banjar</option>
                        <option>Kab. Banjarnegara</option>
                        <option>Kab. Bantaeng</option>
                        <option>Kab. Bantul</option>
                        <option>Kab. Banyuasin</option>
                        <option>Kab. Banyumas</option>
                        <option>Kab. Banyuwangi</option>
                        <option>Kab. Barito Kuala</option>
                        <option>Kab. Barito Selatan</option>
                        <option>Kab. Barito Timur</option>
                        <option>Kab. Barito Utara</option>
                        <option>Kab. Barru</option>
                        <option>Kab. Batang</option>
                        <option>Kab. Batanghari</option>
                        <option>Kab. Batubara</option>
                        <option>Kab. Bekasi</option>
                        <option>Kab. Belitung Timur</option>
                        <option>Kab. Belitung</option>
                        <option>Kab. Belu</option>
                        <option>Kab. Bener Meriah</option>
                        <option>Kab. Bengkalis</option>
                        <option>Kab. Bengkayang</option>
                        <option>Kab. Bengkulu Selatan</option>
                        <option>Kab. Bengkulu Tengah</option>
                        <option>Kab. Bengkulu Utara</option>
                        <option>Kab. Berau</option>
                        <option>Kab. Biak Numfor</option>
                        <option>Kab. Bima</option>
                        <option>Kab. Bintan</option>
                        <option>Kab. Bireuen</option>
                        <option>Kab. Blitar</option>
                        <option>Kab. Blora</option>
                        <option>Kab. Boalemo</option>
                        <option>Kab. Bogor</option>
                        <option>Kab. Bojonegoro</option>
                        <option>Kab. Bolaang Mongondow</option>
                        <option>Kab. Bolaang Mongondow Selatan</option>
                        <option>Kab. Bolaang Mongondow Timur</option>
                        <option>Kab. Bolaang Mongondow Utara</option>
                        <option>Kab. Bombana</option>
                        <option>Kab. Bondowoso</option>
                        <option>Kab. Bone Bolango</option>
                        <option>Kab. Bone</option>
                        <option>Kab. Boven Digoel</option>
                        <option>Kab. Boyolali</option>
                        <option>Kab. Brebes</option>
                        <option>Kab. Buleleng</option>
                        <option>Kab. Bulukumba</option>
                        <option>Kab. Bulungan</option>
                        <option>Kab. Bungo</option>
                        <option>Kab. Buol</option>
                        <option>Kab. Buru Selatan</option>
                        <option>Kab. Buru</option>
                        <option>Kab. Buton</option>
                        <option>Kab. Buton Selatan</option>
                        <option>Kab. Buton Tengah</option>
                        <option>Kab. Buton Utara</option>
                        <option>Kab. Ciamis</option>
                        <option>Kab. Cianjur</option>
                        <option>Kab. Cilacap</option>
                        <option>Kab. Cirebon</option>
                        <option>Kab. Dairi</option>
                        <option>Kab. Deiyai</option>
                        <option>Kab. Serdang</option>
                        <option>Kab. Demak</option>
                        <option>Kab. Dharmasraya</option>
                        <option>Kab. Dogiyai</option>
                        <option>Kab. Dompu</option>
                        <option>Kab. Donggala</option>
                        <option>Kab. Empat Lawang</option>
                        <option>Kab. Ende</option>
                        <option>Kab. Enrekang</option>
                        <option>Kab. Fakfak</option>
                        <option>Kab. Flores Timur</option>
                        <option>Kab. Garut</option>
                        <option>Kab. Gayo Lues</option>
                        <option>Kab. Gianyar</option>
                        <option>Kab. Gorontalo</option>
                        <option>Kab. Gowa</option>
                        <option>Kab. Gresik</option>
                        <option>Kab. Gombongan</option>
                        <option>Kab. Gunung Kidul</option>
                        <option>Kab. Gunung Mas</option>
                        <option>Kab. Halmahera Barat</option>
                        <option>Kab. Halmahera Selatan</option>
                        <option>Kab. Halmahera Tengah</option>
                        <option>Kab. Halmahera Timur</option>
                        <option>Kab. Halmahera Utara</option>
                        <option>Kab. Hulu Sungai Selatan</option>
                        <option>Kab. Hulu Sungai Tengah</option>
                        <option>Kab. Hulu Sungai Utara</option>
                        <option>Kab. Humbang Hasundutan</option>
                        <option>Kab. Indragiri Hilir</option>
                        <option>Kab. Indragiri Hulu</option>
                        <option>Kab. Indramayu</option>
                        <option>Kab. Intan Jaya</option>
                        <option>Kab. Jayapura</option>
                        <option>Kab. Jayawijaya</option>
                        <option>Kab. Jember</option>
                        <option>Kab. Jembrana</option>
                        <option>Kab. Jeneponto</option>
                        <option>Kab. Jepara</option>
                        <option>Kab. Jombang</option>
                        <option>Kab. Kaimana</option>
                        <option>Kab. Kampar</option>
                        <option>Kab. Kapuas Hulu</option>
                        <option>Kab. Kapuas</option>
                        <option>Kab. Karanganyar</option>
                        <option>Kab. Karangasem</option>
                        <option>Kab. Karangan</option>
                        <option>Kab. Karimun</option>
                        <option>Kab. Karo</option>
                        <option>Kab. Katingan</option>
                        <option>Kab. Kaur</option>
                        <option>Kab. Kayong Utara</option>
                        <option>Kab. Kebumen</option>
                        <option>Kab. Kediri</option>
                        <option>Kab. Keerom</option>
                        <option>Kab. Kendal</option>
                        <option>Kab. Kepahiang</option>
                        <option>Kab. Kepulauan Anambas</option>
                        <option>Kab. Kepulauan Aru</option>
                        <option>Kab. Kepulauan Mentawai</option>
                        <option>Kab. Kepulauan Meranti</option>
                        <option>Kab. Kepulauan Sangihe</option>
                        <option>Kab. Kepulauan Selayar</option>
                        <option>Kab. Kepulauan Seribu</option>
                        <option>Kab. Kepulauan Siau Tagulandang Biaro</option>
                        <option>Kab. Kepulauan Sula</option>
                        <option>Kab. Kepulauan Talaud</option>
                        <option>Kab. Kepulauan Yapen</option>
                        <option>Kab. Kerinci</option>
                        <option>Kab. Ketapang</option>
                        <option>Kab. Klaten</option>
                        <option>Kab. Klungkung</option>
                        <option>Kab. Kolaka</option>
                        <option>Kab. Kolaka Timur</option>
                        <option>Kab. Kolaka Utara</option>
                        <option>Kab. Konawe Kepulauan</option>
                        <option>Kab. Konawe Selatan</option>
                        <option>Kab. Konawe Utara</option>
                        <option>Kab. Konawe</option>
                        <option>Kab. Kotabaru</option>
                        <option>Kab. Kotawaringin Barat</option>
                        <option>Kab. Kotawaringin Timur</option>
                        <option>Kab. Kuantan Singingi</option>
                        <option>Kab. Kubu Raya</option>
                        <option>Kab. Kudus</option>
                        <option>Kab. Kulon Progo</option>
                        <option>Kab. Kuningan</option>
                        <option>Kab. Kupang</option>
                        <option>Kab. Kutai Barat</option>
                        <option>Kab. Kutai Kartanegara</option>
                        <option>Kab. Kutai Timur</option>
                        <option>Kab. Labuhanbatu Selatan</option>
                        <option>Kab. Labuhanbatu Utara</option>
                        <option>Kab. Labuhanbatu</option>
                        <option>Kab. Lahat</option>
                        <option>Kab. Lamandau</option>
                        <option>Kab. Lampung Barat</option>
                        <option>Kab. Lampung Selatan</option>
                        <option>Kab. Lampung Tengah</option>
                        <option>Kab. Lampung Timur</option>
                        <option>Kab. Lampung Utara</option>
                        <option>Kab. Landak</option>
                        <option>Kab. Langkat</option>
                        <option>Kab. Lanny Jaya</option>
                        <option>Kab. Lebak</option>
                        <option>Kab. Lebong</option>
                        <option>Kab. Lembata</option>
                        <option>Kab. Lima Puluh Kota</option>
                        <option>Kab. Lingga</option>
                        <option>Kab. Lombok Barat</option>
                        <option>Kab. Lombok Tengah</option>
                        <option>Kab. Lombok Timur</option>
                        <option>Kab. Lombok Utara</option>
                        <option>Kab. Lumajang</option>
                        <option>Kab. Luwu</option>
                        <option>Kab. Luwu Timur</option>
                        <option>Kab. Luwu Utara</option>
                        <option>Kab. Madiun</option>
                        <option>Kab. Magelang</option>
                        <option>Kab. Magetan</option>
                        <option>Kab. Mahakan Ulu</option>
                        <option>Kab. Majalengka</option>
                        <option>Kab. Majene</option>
                        <option>Kab. Malaka</option>
                        <option>Kab. Malang</option>
                        <option>Kab. Malinau</option>
                        <option>Kab. Maluku Barat Daya</option>
                        <option>Kab. Maluku Tengah</option>
                        <option>Kab. Maluku Tenggara Barat</option>
                        <option>Kab. Maluku Tenggara</option>
                        <option>Kab. Mamasa</option>
                        <option>Kab. Mamberamo Raya</option>
                        <option>Kab. Mamberamo Tengah</option>
                        <option>Kab. Mamuju</option>
                        <option>Kab. Mamuju Tengah</option>
                        <option>Kab. Mamuju Utara</option>
                        <option>Kab. Mandailing Natal</option>
                        <option>Kab. Manggarai Barat</option>
                        <option>Kab. Manggarai Timur</option>
                        <option>Kab. Manggarai</option>
                        <option>Kab. Manokwari</option>
                        <option>Kab. Manokwari Selatan</option>
                        <option>Kab. Mappi</option>
                        <option>Kab. Maros</option>
                        <option>Kab. Maybrat</option>
                        <option>Kab. Melawi</option>
                        <option>Kab. Merangin</option>
                        <option>Kab. Merauke</option>
                        <option>Kab. Mesuji</option>
                        <option>Kab. Mimika</option>
                        <option>Kab. Minahasa</option>
                        <option>Kab. Minahasa Selatan</option>
                        <option>Kab. Minahasa Tenggara</option>
                        <option>Kab. Minahasa Utara</option>
                        <option>Kab. Mojokerto</option>
                        <option>Kab. Morowali</option>
                        <option>Kab. Morowali Utara</option>
                        <option>Kab. Muara Enim</option>
                        <option>Kab. Muaro Jambi</option>
                        <option>Kab. Mukomuko</option>
                        <option>Kab. Muna</option>
                        <option>Kab. Muna Barat</option>
                        <option>Kab. Murung Raya</option>
                        <option>Kab. Musi Rawas</option>
                        <option>Kab. Musi Rawas Utara</option>
                        <option>Kab. Nabire</option>
                        <option>Kab. Nagan Raya</option>
                        <option>Kab. Nagekeo</option>
                        <option>Kab. Natuna</option>
                        <option>Kab. Nduga</option>
                        <option>Kab. Ngada</option>
                        <option>Kab. Nganjuk</option>
                        <option>Kab. Ngawi</option>
                        <option>Kab. Nias Barat</option>
                        <option>Kab. Nias Selatan</option>
                        <option>Kab. Nias Utara</option>
                        <option>Kab. Nias</option>
                        <option>Kab. Nunukan</option>
                        <option>Kab. Ogan Ilir</option>
                        <option>Kab. Ogan Komering Ilir</option>
                        <option>Kab. Ogan Komering Ulur Selatan</option>
                        <option>Kab. Ogan Komering Ulur Timur</option>
                        <option>Kab. Ogan Komering Ulur</option>
                        <option>Kab. Pacitan</option>
                        <option>Kab. Padang Lawas Utara</option>
                        <option>Kab. Padang Lawas</option>
                        <option>Kab. Padang Pariaman</option>
                        <option>Kab. Pakpak Bharat</option>
                        <option>Kab. Pamekasan</option>
                        <option>Kab. Pandeglang</option>
                        <option>Kab. Pangandaran</option>
                        <option>Kab. Pangkajene dan Kepulauan</option>
                        <option>Kab. Panilai</option>
                        <option>Kab. Parigi Moutong</option>
                        <option>Kab. Pasaman Barat</option>
                        <option>Kab. Pasaman</option>
                        <option>Kab. Paser</option>
                        <option>Kab. Pasuruan</option>
                        <option>Kab. Pati</option>
                        <option>Kab. Pegunungan Arfak</option>
                        <option>Kab. Pegunungan Bintang</option>
                        <option>Kab. Pekalongan</option>
                        <option>Kab. Pelalawan</option>
                        <option>Kab. Pemalang</option>
                        <option>Kab. Penajam Paser Utara</option>
                        <option>Kab. Penukal Abab Lematang Ilir</option>
                        <option>Kab. Pesawaran</option>
                        <option>Kab. Pesisir Barat</option>
                        <option>Kab. Pesisir Selatan</option>
                        <option>Kab. Pipie Jaya</option>
                        <option>Kab. Pipie</option>
                        <option>Kab. Pinrang</option>
                        <option>Kab. Pohuwato</option>
                        <option>Kab. Polewali Mandar</option>
                        <option>Kab. Ponorogo</option>
                        <option>Kab. Mempawah</option>
                        <option>Kab. Poso</option>
                        <option>Kab. Pringsewu</option>
                        <option>Kab. Probolinggo</option>
                        <option>Kab. Pulang Pisau</option>
                        <option>Kab. Pulau Morotai</option>
                        <option>Kab. Pulau Taliabu</option>
                        <option>Kab. Puncak Jaya</option>
                        <option>Kab. Puncak</option>
                        <option>Kab. Purbalingga</option>
                        <option>Kab. Purwakarta</option>
                        <option>Kab. Purworejo</option>
                        <option>Kab. Raja Ampat</option>
                        <option>Kab. Rejang Lebong</option>
                        <option>Kab. Rembang</option>
                        <option>Kab. Rokan Hilir</option>
                        <option>Kab. Rokan Hulu</option>
                        <option>Kab. Rote Ndato</option>
                        <option>Kab. Sabu Raijua</option>
                        <option>Kab. Sambas</option>
                        <option>Kab. Samosir</option>
                        <option>Kab. Sampang</option>
                        <option>Kab. Sanggau</option>
                        <option>Kab. Sarmi</option>
                        <option>Kab. Sarolangun</option>
                        <option>Kab. Sekadau</option>
                        <option>Kab. Seluma</option>
                        <option>Kab. Semarang</option>
                        <option>Kab. Seram Bagian Barat</option>
                        <option>Kab. Seram Bagian Timur</option>
                        <option>Kab. Serang</option>
                        <option>Kab. Serdang Bedagai</option>
                        <option>Kab. Seruyan</option>
                        <option>Kab. Siak</option>
                        <option>Kab. Sindereng Rappang</option>
                        <option>Kab. Sidoarjo</option>
                        <option>Kab. Sigi</option>
                        <option>Kab. Sijunjung</option>
                        <option>Kab. Sikka</option>
                        <option>Kab. Simalungun</option>
                        <option>Kab. Simeuleu</option>
                        <option>Kab. Sinjai</option>
                        <option>Kab. Sintang</option>
                        <option>Kab. Situbondo</option>
                        <option>Kab. Sleman</option>
                        <option>Kab. Solok Selatan</option>
                        <option>Kab. Solok</option>
                        <option>Kab. Soppeng</option>
                        <option>Kab. Sorong</option>
                        <option>Kab. Sorong Selatan</option>
                        <option>Kab. Sragen</option>
                        <option>Kab. Subang</option>
                        <option>Kab. Sukabumi</option>
                        <option>Kab. Sukamara</option>
                        <option>Kab. Sukoharjo</option>
                        <option>Kab. Sumba Barat Daya</option>
                        <option>Kab. Sumba Barat</option>
                        <option>Kab. Sumba Tengah</option>
                        <option>Kab. Sumba Timur</option>
                        <option>Kab. Sumbawa Barat</option>
                        <option>Kab. Sumbawa</option>
                        <option>Kab. Sumedang</option>
                        <option>Kab. Sumenep</option>
                        <option>Kab. Supiori</option>
                        <option>Kab. Tabalog</option>
                        <option>Kab. Tabanan</option>
                        <option>Kab. Takalar</option>
                        <option>Kab. Tambrauw</option>
                        <option>Kab. Tana Tidung</option>
                        <option>Kab. Tana Toraja</option>
                        <option>Kab. Tanah Bumbu</option>
                        <option>Kab. Tanah Datar</option>
                        <option>Kab. Tanah Laut</option>
                        <option>Kab. Tanggerang</option>
                        <option>Kab. Tanggamus</option>
                        <option>Kab. Tanjung Jabung Barat</option>
                        <option>Kab. Tanjung Jabung Timur</option>
                        <option>Kab. Tapanuli Selatan</option>
                        <option>Kab. Tapanuli Tengah</option>
                        <option>Kab. Tapanuli Utara</option>
                        <option>Kab. Tapin</option>
                        <option>Kab. Tasikmalaya</option>
                        <option>Kab. Tebo</option>
                        <option>Kab. Tegal</option>
                        <option>Kab. Teluk Bintuni</option>
                        <option>Kab. Teluk Wondama</option>
                        <option>Kab. Temanggung</option>
                        <option>Kab. Timor Tengah Selatan</option>
                        <option>Kab. Timor Tengah Utara</option>
                        <option>Kab. Toba Samosir</option>
                        <option>Kab. Tojo Una-Una</option>
                        <option>Kab. Toli-Toli</option>
                        <option>Kab. Toraja Utara</option>
                        <option>Kab. Trenggalek</option>
                        <option>Kab. Tuban</option>
                        <option>Kab. Tulang Bawang Barat</option>
                        <option>Kab. Tulang Bawang</option>
                        <option>Kab. Tulungagung</option>
                        <option>Kab. Wajo</option>
                        <option>Kab. Wakatobi</option>
                        <option>Kab. Waropen</option>
                        <option>Kab. Way Kanan</option>
                        <option>Kab. Wonogiri</option>
                        <option>Kab. Yahukimo</option>
                        <option>Kab. Yalimo</option>
                      </select>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Address" class="col-md-4 col-lg-3 col-form-label">Provinsi</label>
                      <div class="col-md-8 col-lg-9">
                      <select class="form-control" name="provinsi" id="yourName" value ="<?php echo $data['provinsi'];?>" required>
                        <option>Aceh</option>
                        <option>Bali</option>
                        <option>Kepulauan Bangka Belitung</option>
                        <option>Banten</option>
                        <option>Bengkulu</option>
                        <option>Jawa Tengah</option>
                        <option>Kalimantan Tengah</option>
                        <option>Sulawesi Tengah</option>
                        <option>Jawa Timur</option>
                        <option>Kalimantan Timur</option>
                        <option>Nusa Tenggara Timur</option>
                        <option>Gorontalo</option>
                        <option>DKI Jakarta</option>
                        <option>Jambi</option>
                        <option>Lampung</option>
                        <option>Maluku</option>
                        <option>Kalimantan Utara</option>
                        <option>Maluku Utara</option>
                        <option>Sulawesi Utara</option>
                        <option>Sumatera Utara</option>
                        <option>Papua</option>
                        <option>Riau</option>
                        <option>Kapulauan Riau</option>
                        <option>Sulawesi Tenggara</option>
                        <option>Kalimantan Selatan</option>
                        <option>Sulawesi Selatan</option>
                        <option>Jawa Barat</option>
                        <option>Kalimantan Barat</option>
                        <option>Nusa Tenggara Barat</option>
                        <option>Papua Barat</option>
                        <option>Sulawesi Barat</option>
                        <option>Sumatra Barat</option>
                        <option>Daerah Istimewa Yogyakarta</option>
                        <option>Papua Selatan</option>
                        <option>Papua Tengah</option>
                        <option>Papua Pegunungan</option>
                        <option>Papua Barat Daya</option>
                      </select>
                      </div>
                    </div>

                    <div class="text-center">
                      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#smallModal">Edit</button>
                    </div>
                    <div class="modal fade" id="smallModal" tabindex="-1">
                      <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title">Edit</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" arial-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            Apakah Anda yakin ingin merubah data pribadi Anda?
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutp</button>
                            <button type="submit" name="proseslog" class="btn btn-primary">Simpan Perubahan</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form><!-- End Profile Edit Form -->
                </div>

                <div class="tab-pane fade pt-3" id="profile-settings">

                  <!-- Settings Form -->
                  <form>
                    


                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Email Notifications</label>
                      <div class="col-md-8 col-lg-9">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="changesMade" checked>
                          <label class="form-check-label" for="changesMade">
                            Changes made to your account
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="newProducts" checked>
                          <label class="form-check-label" for="newProducts">
                            Information on new products and services
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="proOffers">
                          <label class="form-check-label" for="proOffers">
                            Marketing and promo offers
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="securityNotify" checked disabled>
                          <label class="form-check-label" for="securityNotify">
                            Security alerts
                          </label>
                        </div>
                      </div>
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                  </form><!-- End settings Form -->

                </div>

                <div class="tab-pane fade pt-3" id="profile-change-password">
                  <!-- Change Password Form -->
                  <form>

                    <div class="row mb-3">
                      <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="password" type="password" class="form-control" id="currentPassword">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="newpassword" type="password" class="form-control" id="newPassword">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="renewpassword" type="password" class="form-control" id="renewPassword">
                      </div>
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Change Password</button>
                    </div>
                  </form><!-- End Change Password Form -->

                </div>

              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
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

</body>

</html>