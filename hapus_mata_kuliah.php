<?php
    $id_mk =$_GET['id_mk'];
    $query=mysqli_query($koneksi,"DELETE FROM tbl_mk WHERE id_mk='$id_mk'");
    if ($query) {
        echo "<script>alert('Data Berhasil dihapus')</script>";
        echo "<script>location='index.php?hal=data_mata_kuliah'</script>";
    }