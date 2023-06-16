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