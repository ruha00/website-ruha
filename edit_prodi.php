<div class="container mt-4">
    <h2>Edit Prodi</h2><hr>
    <div class="card shadow-lg p-3 mb-5">
        <div class="card-body">
            <?php
                $id_prodi = $_GET['id_prodi'];
                $query = mysqli_query($koneksi,"SELECT * FROM tbl_prodi WHERE id_prodi='$id_prodi'");
                $rows = mysqli_fetch_array($query);
            ?>
            <form action="" method="POST">
                <div class="form-group">
                    <label for="">Nama Prodi</label>
                    <input type="text" name="nama_prodi" value="<?=$rows['nama_prodi'] ?>" class="form-control" placeholder="Masukkan Nama Prodi">
                </div>  
                <br>
                <button type="Submit" name="simpan" class="btn btn-success">Simpan</button>              
            </form>
        </div>
    </div>
</div>

<?php
    if (isset($_POST['simpan'])){
        $nama_prodi = $_POST['nama_prodi'];

        $query = mysqli_query($koneksi, "UPDATE tbl_prodi SET nama_prodi='$nama_prodi' WHERE id_prodi = '$id_prodi' ");
        
        if ($query){
            echo "<script>alert('Data Berhasil Diedit')</script>";
            echo "<script>location='index.php?hal=data_prodi'</script>";
        }else{
            echo "<script>alert('Data Gagal Diedit')</script>";
            echo "<script>location='index.php?hal=tambah_prodi'</script>";
        }

    }
?>