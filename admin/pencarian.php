<h4 style="text-align: center;">Halaman Pilih Data Siswa Untuk Pembayaran</h4>
<hr>
<form action="" method="get">
                    <h2>DATA BAYAR SISWA SESUAI NISN</h2>
                      <table class="table">
                      <tr>
                      <td>NISN</td>
                      <td>:</td>
                      <td>
                      <input class="form-control" type="text" name="nisn" placeholder="--Data NISN Lihat Di Form Siswa--">
                      </td>
                      <td>
                      <button class="btn btn-success" type="submit" name="cari">Cari</button>
                      </td>
                      </tr>

                      </table>
                      </form>
                <?php 
                if (isset($_GET['nisn']) && $_GET['nisn']!='') {
                  $query = mysqli_query($koneksi, "SELECT * FROM siswa WHERE nisn='$_GET[nisn]'");
                  $data = mysqli_fetch_array($query);
                  $nisn = $data['nisn'];
                
                ?>

                <h2>DATA SISWA</h2>
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th scope="col">NISN</th>
                      <th scope="col">NAMA SISWA</th>
                      <th scope="col">ID KELAS</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    <td><?php echo $data['nisn']; ?></td>
                    <td><?php echo $data['nama']; ?></td>
                    <td><?php echo $data['id_kelas']; ?></td>
                  </tbody>
                </table>

                <h2>DATA SPP SISWA</h2>
              <table class="table table-striped table-responsive">
                <thead> 
                  <tr>
                    <!-- <th scope="col">Id Pembayaran</th> -->
                <th scope="col">id petugas</th>
               <th scope="col"> NISN</th>
                <th scope="col">Tgl Bayar</th>
                <th scope="col">Bulan Bayar</th>
                <th scope="col">Tahun Bayar</th>
                <th scope="col">id spp</th>
                <th scope="col">Jumlah</th>
                
                  </tr>
                </thead>

                <tbody>
                  <?php 
                  $query = mysqli_query($koneksi,"SELECT * FROM pembayaran WHERE nisn='$data[nisn]' ORDER BY bulan_dibayar ASC");
                

                  while ($data=mysqli_fetch_array($query)) {
                    echo" <tr>
                          
                          <td>$data[id_petugas]</td>
                          <td>$data[nisn]</td>
                          <td>$data[tgl_bayar]</td>
                          <td>$data[bulan_dibayar]</td>
                          <td>$data[tahun_dibayar]</td>
                          <td>$data[id_spp]</td>
                          <td>$data[jumlah_bayar]</td>

                        </tr>";
                  }

                   ?>

                </tbody>

              </table>  
                
    <?php 
    }
    ?>      
        
        </div>
