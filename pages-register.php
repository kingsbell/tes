<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Daftar - SIPE2BARP</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>


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

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="pages-login.php" class="logo d-flex align-items-center w-auto">
                  <img src="assets/img/logo.png" alt="">
                  <span class="d-none d-lg-block">SIPE2BARP</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">
                 
                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Buat akun</h5>
                    <p class="text-center small">Masukan data diri Anda untuk membuat akun</p>
                  </div>

                  <form class="row g-3 needs-validation" action="" method="POST" novalidate>
                    <div class="col-12">
                      <label for="yourName" class="form-label">Nama Anda</label>
                      <input type="text" name="nama" class="form-control" id="yourName" required>
                      <div class="invalid-feedback">Silahkan, masukan nama Anda!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourTextarea" class="form-label">Alamat</label>
                      <textarea class="form-control" name ="alamat" rows="2" required></textarea>
                      <div class="invalid-feedback">Silahkan masukan alamat Anda!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourName" class="form-label">Kelurahan</label>
                      <input type="text" name="kelurahan" class="form-control" id="yourName" required>
                      <div class="invalid-feedback">Silahkan, masukan kelurahan Anda!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourName" class="form-label">kecamatan</label>
                      <input type="text" name="kecamatan" class="form-control" id="yourName" required>
                      <div class="invalid-feedback">Silahkan, masukan kecamatan Anda!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourSelect" class="form-label">Kota</label>
                      <select class="form-control" name ="kota" id="yourName" required>
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

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Provinsi</label>
                      <select class="form-control" name="provinsi" id="yourName" required>
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

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Username</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" name="username" class="form-control" id="yourUsername" required>
                        <div class="invalid-feedback">Silahkan isi username Anda!</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Silahkan masukan password Anda!</div>
                    </div>

                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
                        <label class="form-check-label" for="acceptTerms">Saya setuju dengan <a href="#">Syarat dan Ketentuan</a></label>
                        <div class="invalid-feedback">Anda harus menyetujui sebelum mendaftar.</div>
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit" value ="Login" name ="proseslog" data-bs-toggle="modal" data-bs-target="#modalDialogScrollable">Buat Akun</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Sudah mempunyai akun? <a href="pages-login.php">Masuk</a></p>
                      
                    </div>
                  </form>
                    <?php
                    // Koneksi Database
                    include "koneksi.php";

                    if(isset($_POST['proseslog']))
                    {
                        $nama = $_POST['nama'];
                        $alamat = $_POST['alamat'];
                        $kelurahan = $_POST['kelurahan'];
                        $kecamatan = $_POST['kecamatan'];
                        $kota = $_POST['kota'];
                        $provinsi = $_POST['provinsi'];
                        $username = $_POST['username'];
                        $password = $_POST['password'];

                        $cek = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM user WHERE nama = '$nama' or username = '$username'"));
                        if($cek > 0) {
                          echo "nama atau username yang Anda masukan sudah ada!";
                        } else {
                          mysqli_query($koneksi,"INSERT INTO user(nama,alamat,kelurahan,kecamatan,kota,provinsi,username,password) VALUES ('$nama','$alamat','$kelurahan','$kecamatan','$kota','$provinsi','$username','$password')");
                          echo "Data sudah disimpan!";
                        }
                    }

                    ?>
                </div>
              </div>

              <div class="credits">
                Designed by <a href="#">Soleh & Yoga</a>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

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