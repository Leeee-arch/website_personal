<h1 class="mt-4">Tambah Buku</h1>
<div class="card">
    <div class="card-body">
    <div class="row">
        <div class="col-md-12">
            <form method="post">
                <?php
                    $id = $_GET['id'];
                    if(isset($_POST['submit'])) {
                        $katagori = $_POST['id_katagori'];
                        $judul = $_POST['judul'];
                        $penulis = $_POST['penulis'];
                        $penerbit = $_POST['penerbit'];
                        $tahun_terbit = $_POST['tahun_terbit'];
                        $deksripsi = $_POST['deksripsi'];
                        $query = mysqli_query($koneksi, "UPDATE buku SET id_katagori='$katagori', judul='$judul', penulis='$penulis', penerbit='$penerbit', tahun_terbit='$tahun_terbit', deksripsi='$deksripsi' WHERE id_buku=$id");

                        if($query) {
                            echo '<script>Swal.fire({title: "Successfully", text: "Buku Berhasil Diubah!", icon: "success"}).then(() => {setTimeout(() => {location.href = "?page=buku";}, 500);});</script>';
                        }else{
                            echo '<script>Swal.fire({title: "Ops...", text: "Buku Gagal Diubah!", icon: "error"});</script>';
                        }
                    }
                    $query = mysqli_query($koneksi, "SELECT*FROM buku WHERE id_buku=$id");
                    $data = mysqli_fetch_array($query);
                ?>
                <div class="row mb-3">
                    <div class="col-md-2">kategori</div>
                    <div class="col-md-8">
                        <select name="id_katagori" class="form-control">
                            <?php
                                $kat = mysqli_query($koneksi, "SELECT * FROM katagori");
                                while($katagori = mysqli_fetch_assoc($kat)) {
                                  ?>
                                  <option <?php if($katagori['id_katagori'] == $data['id_katagori']) echo 'Selected'; ?> value="<?php echo $katagori['id_katagori']; ?>"><?php echo $katagori['katagori']; ?></option>
                                  <?php
                                }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-2">Judul</div>
                    <div class="col-md-8"><input type="text" value="<?php echo $data['judul']; ?>" class="form-control" name="judul"></div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-2">Penulis</div>
                    <div class="col-md-8"><input type="text" value="<?php echo $data['penulis']; ?>" class="form-control" name="penulis"></div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-2">Penerbit</div>
                    <div class="col-md-8"><input type="text" value="<?php echo $data['penerbit']; ?>" class="form-control" name="penerbit"></div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-2">Tahun Terbit</div>
                    <div class="col-md-8"><input type="text" value="<?php echo $data['tahun_terbit']; ?>" class="form-control" name="tahun_terbit"></div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-2">Deskripsi</div>
                    <div class="col-md-8">
                        <textarea name="deksripsi" rows="5" class="from-control"><?php echo $data['deksripsi']; ?></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <button type="submit" class="btn btn-primary" name="submit" value="submit">Ubah</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                        <a href="?page=buku" class="btn btn-danger">Kembali</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>
</div>