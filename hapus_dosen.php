<?php
    $nidn =$_GET['nidn'];
    $query=mysqli_query($koneksi,"DELETE FROM tbl_dosen WHERE nidn='$nidn'");
    if ($query) {
        echo "<script>alert('Data Berhasil dihapus')</script>";
        echo "<script>location='index.php?hal=data_dosen'</script>";
    }