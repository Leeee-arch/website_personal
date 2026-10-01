<?php
$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM buku WHERE id_buku=$id");
?>
<script>Swal.fire({title: "Successfully", text: "Buku Berhasil dihapus!", icon: "success"}).then(() => {setTimeout(() => {location.href = "?page=buku";}, 500);});</script>