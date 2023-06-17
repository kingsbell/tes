<?php
                    $sql = mysqli_query($koneksi, "SELECT * FROM user ORDER BY no_registrasi DESC")
                  ?>
                <table>
                  <tr>
                  <th>Nama</th><th>Alamat</th><th>Kecamatan</th><th>Kelurahan</th><th>Kota</th><th>Provinsi</th>
                  </tr>
                  <?php
                    while($data = mysqli_fetch_array($sql)) {
                      echo "<tr>";
                      echo "<td>".$data['nama']."</td>";
                      echo "<td>".$data['alamat']."</td>";
                      echo "<td>".$data['kecamatan']."</td>";
                      echo "<td>".$data['kelurahan']."</td>";
                      echo "<td>".$data['kota']."</td>";
                      echo "<td>".$data['provinsi']."</td>";
                      echo "<td><a href='users-profile-edit.php?id=$data[no_registrasi]'>ASA</a></td></tr>";
                    }
                  ?>
                </tabel>






                <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Nama</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Alamat</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Kecamatan</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Kelurahan</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Kota</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Provinsi</div>
                  </div>





                  <!-- ----------------------------------------------------------------------- -->
                  <?php
                        // $no_registrasi = $_GET['no_registrasi'];
                        // $data = mysqli_query($koneksi, "SELECT * FROM user WHERE no_registrasi = $no_registrasi");
                        
                        // while($user_data = mysqli_fetch_array($data)) {
                        //     $nama = $user_data['nama'];
                        //     $alamat = $user_data['alamat'];
                        //     $kelurahan = $user_data['kelurahan'];
                        //     $kecamatan = $user_data['kecamatan'];
                        //     $kota = $user_data['kota'];
                        //     $provinsi = $user_data['provinsi'];
                        // }
                    ?>

                  <form method="POST" action="users-profile.php">


                    <!-- <div class="row mb-3">
                      <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                      <div class="col-md-8 col-lg-9">
                        <img src="assets/img/profile-img.jpg" alt="Profile">
                        <div class="pt-2">
                          <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"></i></a>
                          <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
                        </div>
                      </div>
                    </div> -->

                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Nama Lengkap</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="nama" type="text" class="form-control" id="fullName" value=<?php echo $nama;?>>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="about" class="col-md-4 col-lg-3 col-form-label">About</label>
                      <div class="col-md-8 col-lg-9">
                        <textarea name="about" class="form-control" id="about" style="height: 100px">Sunt est soluta temporibus accusantium neque nam maiores cumque temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure rerum quae quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.</textarea>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="company" class="col-md-4 col-lg-3 col-form-label">Company</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="company" type="text" class="form-control" id="company" value="Lueilwitz, Wisoky and Leuschke">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Job" class="col-md-4 col-lg-3 col-form-label">Job</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="job" type="text" class="form-control" id="Job" value="Web Designer">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Country" class="col-md-4 col-lg-3 col-form-label">Country</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="country" type="text" class="form-control" id="Country" value="USA">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Address" class="col-md-4 col-lg-3 col-form-label">Address</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="address" type="text" class="form-control" id="Address" value="A108 Adam Street, New York, NY 535022">
                      </div>
                    </div>

                    <div class="text-center">
                      <input type="submit" name="update" class="btn btn-primary">
                    </div>
                  </form><!-- End Profile Edit Form -->