<h5>Halaman Data Kelas</h5>
<a href="?url=tambah-kelas" class="btn btn-primary"> TAMBAH KELAS </a>
<hr>
<table class="table table-striped table-bordered">
    <tr class="fw-bold">
        <td>No.</td>
        <td width="500px">Nama Kelas</td>
        <td width="500px">Kompetensi Keahlian</td>
        <td style="text-align: center;">Aksi</td>
    </tr>
    <?php
    include '../koneksi.php';
    $no = 1;
    $sql = "SELECT * FROM kelas ORDER BY id_kelas DESC";
    $query = mysqli_query($koneksi, $sql);
    foreach($query as $data){?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $data['nama_kelas'] ?></td>
            <td><?= $data['kompetensi_keahlian'] ?></td>
            <td style="text-align: center;">
                <a href="?url=edit-kelas&id_kelas=<?= $data['id_kelas'] ?>" class='btn btn-warning'>EDIT</a>
                <a onclick="return confirm('Apakah anda Yakin?')" href="?url=hapus-kelas&id_kelas=<?= $data['id_kelas'] ?>" class='btn btn-danger'>HAPUS</a>
            </td>
        </tr>
    <?php } ?>
</table>