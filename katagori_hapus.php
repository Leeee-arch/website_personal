<?php
$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM katagori WHERE id_katagori=$id");
?>
<script>Swal.fire({title: "Successfully", text: "Katagori Berhasil dihapus!", icon: "success"}).then(() => {setTimeout(() => {location.href = "?page=katagori";}, 500);});</script>