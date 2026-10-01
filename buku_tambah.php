<h1 class="mt-4">Tambah Buku</h1>
<div class="card">
    <div class="card-body">
    <div class="row">
        <div class="col-md-12">
            <form method="post">
                <?php
                    if(isset($_POST['submit'])) {
                        $katagori = $_POST['id_katagori'];
                        $judul = $_POST['judul'];
                        $penulis = $_POST['penulis'];
                        $penerbit = $_POST['penerbit'];
                        $tahun_terbit = $_POST['tahun_terbit'];
                        $deksripsi = $_POST['deksripsi'];
                        $query = mysqli_query($koneksi, "INSERT INTO buku(id_katagori,judul,penulis,penerbit,tahun_terbit,deksripsi) values('$katagori','$judul','$penulis','$penerbit','$tahun_terbit','$deksripsi')");

                        if($query) {
                            echo '<script>Swal.fire({title: "Successfully", text: "Buku Berhasil Ditambahkan!", icon: "success"}).then(() => {setTimeout(() => {location.href = "?page=buku";}, 500);});</script>';
                        }else{
                            echo '<script>Swal.fire({title: "Ops...", text: "Buku Gagal ditambahkan!", icon: "error"});</script>';
                        }
                    }
                ?>
                <div class="row mb-3">
                    <div class="col-md-2">kategori</div>
                    <div class="col-md-8">
                        <select name="id_katagori" class="form-control">
                            <?php
                                $kat = mysqli_query($koneksi, "SELECT * FROM katagori");
                                while($katagori = mysqli_fetch_assoc($kat)) {
                                  ?>
                                  <option value="<?php echo $katagori['id_katagori']; ?>"><?php echo $katagori['katagori']; ?></option>
                                  <?php
                                }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-2">Judul</div>
                    <div class="col-md-8"><input type="text" class="form-control" name="judul"></div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-2">Penulis</div>
                    <div class="col-md-8"><input type="text" class="form-control" name="penulis"></div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-2">Penerbit</div>
                    <div class="col-md-8"><input type="text" class="form-control" name="penerbit"></div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-2">Tahun Terbit</div>
                    <div class="col-md-8"><input type="text" class="form-control" name="tahun_terbit"></div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-2">Deskripsi</div>
                    <div class="col-md-8">
                        <textarea name="deksripsi" rows="5" class="from-control"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <button type="submit" class="btn btn-primary" name="submit" value="submit">Buat</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                        <a href="?page=katagori" class="btn btn-danger">Kembali</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>
</div>