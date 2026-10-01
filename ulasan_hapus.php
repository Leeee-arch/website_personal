<?php
$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM ulasan WHERE id_ulasan=$id");
?>
<script>Swal.fire({title: "Successfully", text: "Ulasan Berhasil dihapus!", icon: "success"}).then(() => {setTimeout(() => {location.href = "?page=buku";}, 500);});</script>