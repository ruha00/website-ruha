<div class="container mt-4">
    <h2>Edit Mata Kuliah</h2><hr>
    <div class="card shadow-lg p-3 mb-5">
        <div class="card-body">
            <?php
                $id_mk = $_GET['id_mk'];
                $query = mysqli_query($koneksi,"SELECT * FROM tbl_mk WHERE id_mk='$id_mk'");
                $rows = mysqli_fetch_array($query);
            ?>
            <form action="" method="POST">
                <div class="form-group">
                    <label for="">Nama Mata kuliah</label>
                    <input type="text" name="nama_mk" value="<?=$rows['nama_mk'] ?>" class="form-control" placeholder="Masukkan Nama Agama">
                    <input type="hidden" nama='id_mk' value='<?=$rows['id_mk'] ?>'>               
                </div>  
                <br>
                <button type="Submit" name="simpan" class="btn btn-success">Simpan</button>              
            </form>
        </div>
    </div>
</div>

<?php
    if (isset($_POST['simpan'])){
        $nama_mk = $_POST['nama_mk'];

        $query = mysqli_query($koneksi, "UPDATE tbl_mk SET nama_mk='$nama_mk' WHERE id_mk = '$id_mk' ");
        
        if ($query){
            echo "<script>alert('Data Berhasil Diedit')</script>";
            echo "<script>location='index.php?hal=data_mata_kuliah'</script>";
        }else{
            echo "<script>alert('Data Gagal Diedit')</script>";
            echo "<script>location='index.php?hal=tambah_mata_kuliah'</script>";
        }

    }
?>