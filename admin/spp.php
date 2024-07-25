<h5>Halaman Data SPP</h5>
<a href="?url=tambah-spp" class="btn btn-primary"> TAMBAH SPP </a>
<hr>
<table class="table table-striped table-bordered">
    <tr class="fw-bold">
        <td>No.</td>
        <td width="500px">Tahun</td>
        <td width="500px">Nominal</td>
        <td style="text-align: center;">Aksi</td>
    </tr>
    <?php
    include '../koneksi.php';
    $no = 1;
    $sql = "SELECT * FROM spp ORDER BY id_spp DESC";
    $query = mysqli_query($koneksi, $sql);
    foreach($query as $data){?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $data['tahun'] ?></td>
            <td><?= $data['nominal'] ?></td>
            <td style="text-align: center;">
                <a href="?url=edit-spp&id_spp=<?= $data['id_spp'] ?>" class='btn btn-warning'>EDIT</a>
                <a onclick="return confirm('Apakah anda Yakin?')" href="?url=hapus-spp&id_spp=<?= $data['id_spp'] ?>" class='btn btn-danger'>HAPUS</a>
            </td>
        </tr>
    <?php } ?>
</table>