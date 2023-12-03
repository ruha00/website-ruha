<div class="container mt-4">
    <h3>Tambah Mata Kuliah</h3><hr>
    <div class="card shadow-lg p-3 mb-5">
        <div class="card-body">
            <form action="" method="POST">
                <div class="form-group">
                    <label for="">Nama Mata Kuliah</label>
                    <input type="text" name="nama_mk" class="form-control" placeholder="Masukkan Mata Kuliah ">
                 </div> 
                 <div class="form-group">
                    <label for="">Jumlah SKS</label>
                    <input type="text" name="jml_sks" class="form-control">
                 </div>          
                 <br>
                 <button type="submit" name="simpan" class="btn btn-success">Simpan</button>                                           
            </form>
        </div>
    </div>
</div>

<?php
    if (isset($_POST['simpan'])) {
        $nama_mk = $_POST['nama_mk'];
        $jml_sks = $_POST['jml_sks'];
       

        $query = mysqli_query($koneksi, "INSERT INTO tbl_mk VALUES(NULL,'$nama_mk','$jml_sks')");
        if ($query) {
            echo "<script>alert('Data Berhasil Ditambahkan')</script>";
            echo "<script>location='index.php?hal=data_mata_kuliah'</script>";
        }else{
            echo "<script>alert('Data Gagal Ditambahkan')</script>";
            echo "<script>location='index.php?hal=tambah_mata_kuliah'</script>";
        }
    }
    ?>