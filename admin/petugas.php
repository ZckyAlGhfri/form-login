<h5>Halaman Data Petugas</h5>
<a href="?url=tambah-petugas" class="btn btn-primary"> TAMBAH PETUGAS </a>
<hr>
<table class="table table-striped table-bordered">
    <tr class="fw-bold">
        <td>No.</td>
        <td>Username</td>
        <td>Password</td>
        <td>Nama Petugas</td>
        <td>Level</td>
        <td style="text-align: center;">Aksi</td>
    </tr>
    <?php
    include '../koneksi.php';
    $no = 1;
    $sql = "SELECT * FROM petugas ORDER BY id_petugas DESC";
    $query = mysqli_query($koneksi, $sql);
    foreach($query as $data){?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $data['username'] ?></td>
            <td><?= $data['password'] ?></td>
            <td><?= $data['nama_petugas'] ?></td>
            <td><?= $data['level'] ?></td>
            <td style="text-align: center;">
                <a href="?url=edit-petugas&id_petugas=<?= $data['id_petugas'] ?>" class='btn btn-warning'>EDIT</a>
                <a onclick="return confirm('Apakah anda Yakin?')" href="?url=hapus-petugas&id_petugas=<?= $data['id_petugas'] ?>" class='btn btn-danger'>HAPUS</a>
            </td>
        </tr>
    <?php } ?>
</table>