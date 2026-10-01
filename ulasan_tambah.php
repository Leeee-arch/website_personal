<h1 class="mt-4">Tambahkan Ulasan</h1>
<div class="card">
    <div class="card-body">
    <div class="row">
        <div class="col-md-12">
            <form method="post">
                <?php
                    if(isset($_POST['submit'])) {
                        $buku = $_POST['id_buku'];
                        $users = $_SESSION['user']['id_user'];
                        $ulasan = $_POST['ulasan'];
                        $rating = $_POST['rating'];
                        $query = mysqli_query($koneksi, "INSERT INTO ulasan(id_buku,id_user,ulasan,rating) values('$buku','$users','$ulasan','$rating')");

                        if($query) {
                            echo '<script>Swal.fire({title: "Successfully", text: "Ulasan Berhasil Ditambahkan!", icon: "success"}).then(() => {setTimeout(() => {location.href = "?page=ulasan";}, 500);});</script>';
                        }else{
                            echo '<script>Swal.fire({title: "Ops...", text: "Katagori Gagal ditambahkan!", icon: "error"});</script>';
                        }
                    }
                ?>
                <div class="row mb-3">
                    <div class="col-md-2">Buku</div>
                    <div class="col-md-8">
                        <select name="id_buku" class="form-control">
                            <?php
                                $buk = mysqli_query($koneksi, "SELECT*FROM buku");
                                while($buku = mysqli_fetch_array($buk)) {
                                    ?>
                                    <option value="<?php echo $buku['id_buku']; ?>"><?php echo $buku['judul']; ?></option>
                                    <?php
                                }
                            ?>
                        </select>
                    </div>
                <div class="row mb-3">
                    <div class="col-md-2">Ulasan</div>
                    <div class="col-md-8">
                        <textarea name="ulasan" rows="5" class="from-control"></textarea>
                    </div>
                <div class="row mb-3">
                    <div class="col-md-2">Rating</div>
                    <div class="col-md-8">
                        <select name="rating" class="form-control">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>10</option>
                        </select>
                    </div>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <button type="submit" class="btn btn-primary" name="submit" value="submit">Tambahkan</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                        <a href="?page=katagori" class="btn btn-danger">Kembali</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>
</div>