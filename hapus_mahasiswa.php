<?php
    $nim =$_GET['nim'];
    $query=mysqli_query($koneksi,"SELECT * FROM tbl_mhs WHERE nim='$nim' ");
    $row=mysqli_fetch_array($query);

    $hapus=mysqli_query($koneksi, "DELETE FROM tbl_mhs WHERE nim='$nim' ");
        echo "<script>alert('Data Berhasil dihapus')</script>";
        echo "<script>location='index.php?hal=data_mahasiswa'</script>";
    ?>
    