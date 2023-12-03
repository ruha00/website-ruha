<div class="container mt-4">
    <h3>Tambah Mahasiswa</h3><hr>
    <div class="card shadow-lg p-3 mb-5">
        <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-group">   
                    <label for="">NIM</label>
                    <input type="text" name="nim" class="form-control" placeholder="Masukkan NIM">
                 </div>       
                <div class="form-group">
                    <label for="">Nama Lengkap</label>
                    <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Lengkap">   
                </div>             
                <div class="form-group">
                    <label for="">Alamat</label>
                    <textarea name="alamat" id="" cols="30" rows="3" class="form-control"></textarea>
                 </div>
                <div class="form-group">
                    <label for="">Agama</label>
                    <textarea name="agama" id="" cols="15" rows="1" class="form-control"></textarea>
                   
                </div>   
                <div class="form-group">
                    <label for="">Tanggal Lahir</label>
                    <input type="date" name="tgl_lahir" class="form-control" placeholder="Masukkan Tanggal Lahir">
                </div>
                <div class="form-group">
                    <label for="">Program Studi</label>
                    <select name="id_prodi" id="" class="form-control">
                        <?php $no=1;
                        $query = mysqli_query($koneksi, "SELECT * FROM tbl_prodi");
                        while($rows = mysqli_fetch_array($query)) {
                        ?> 
                        <option value="<?= $rows['id_prodi'] ?>"><?= $rows['nama_prodi'] ?>  </option>
                       <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Mata Kuliah</label>
                    <select name="id_mk" id="" class="form-control">
                        <?php $no=1;
                        $query = mysqli_query($koneksi, "SELECT * FROM tbl_mk");
                        while($rows = mysqli_fetch_array($query)) {
                        ?> 
                        <option value="<?= $rows['id_mk'] ?>"><?= $rows['nama_mk'] ?>  </option>
                       <?php } ?>
                    </select>
                </div>
                 <br>
                 <button type="submit" name="simpan" class="btn btn-success">Simpan</button>                                           
            </form>
        </div>
    </div>
</div>

<?php
    if (isset($_POST['simpan'])) {
        $nim =$_POST['nim'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $agama = $_POST['agama'];
        $tgl_lahir = $_POST['tgl_lahir'];
        $id_prodi = $_POST['id_prodi'];
        $id_mk = $_POST['id_mk'];
       
        

        $query = mysqli_query($koneksi, "INSERT INTO tbl_mhs VALUES('$nim','$nama','$alamat','$agama','$tgl_lahir','$id_prodi', '$id_mk')");
       
        if ($query) {
            echo "<script>alert('Data Berhasil Ditambahkan')</script>";
            echo "<script>location='index.php?hal=data_mahasiswa'</script>";
        }else{
            echo "<script>alert('Data Gagal Ditambahkan')</script>";
            echo "<script>location='index.php?hal=tambah_mahasiswa'</script>";
        }
    }
    ?>