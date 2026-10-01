<h1 class="mt-4">Kategori Buku</h1>
<div class="row">
    <div class="col-md-12">
        <a href="?page=katagori_tambah" class="btn btn-primary">+ Tambah Data</a>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <tr>
                <th>No</th>
                <th>Nama Kategori</th>
                <th>Aksi</th>
            </tr>
            <?php
            $i = 1;
                $query = mysqli_query($koneksi, "SELECT*FROM katagori");
                while($data = mysqli_fetch_array($query)){
                    ?>
                    <tr>
                        <td><?php echo $i++; ?></td>
                        <td><?php echo $data['katagori']; ?></td>
                        <td>
                            <a href="?page=katagori_ubah&&id=<?php echo $data['id_katagori']; ?>" class="btn btn-info">Ubah</a>
                            <a onclick="return confirm('Apakah anda yakin menghapus Katagori ini?');" href="?page=katagori_hapus&&id=<?php echo $data['id_katagori']; ?>" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <?php
                }
            ?>
        </table>
    </div>
</div>
