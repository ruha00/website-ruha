<div class="container mt-4">
    <h3>Tambah Prodi</h3><hr>
    <div class="card shadow-lg p-3 mb-5">
        <div class="card-body">
            <form action="" method="POST">
                          
                <div class="form-group">
                    <label for="">Nama Prodi</label>
                    <input type="text" name="nama_prodi" class="form-control" placeholder="Masukkan Nama Prodi Anda">   
                </div>             
               
                 <br>
                 <button type="submit" name="simpan" class="btn btn-success">Simpan</button>                                           
            </form>
        </div>
    </div>
</div>

<?php
    if (isset($_POST['simpan'])) {
        $nama_prodi = $_POST['nama_prodi'];
       

        $query = mysqli_query($koneksi, "INSERT INTO tbl_prodi VALUES(NULL,'$nama_prodi')");
        if ($query) {
            echo "<script>alert('Data Berhasil Ditambahkan')</script>";
            echo "<script>location='index.php?hal=data_prodi'</script>";
        }else{
            echo "<script>alert('Data Gagal Ditambahkan')</script>";
            echo "<script>location='index.php?hal=tambah_prodi'</script>";
        }
    }
    ?>