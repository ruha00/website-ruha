<?php
    $id_prodi =$_GET['id_prodi'];
    $query=mysqli_query($koneksi,"DELETE FROM tbl_prodi WHERE id_prodi='$id_prodi'");
    if ($query) {
        echo "<script>alert('Data Berhasil dihapus')</script>";
        echo "<script>location='index.php?hal=data_prodi'</script>";
    }