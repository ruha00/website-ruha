<div class="container mt-4">
    <h3>Edit Dosen</h3><hr>
    <div class="card shadow-lg p-3 mb-5">
        <div class="card-body">
            <?php
                $nidn = $_GET['nidn'];
                $query = mysqli_query($koneksi, "SELECT * FROM tbl_dosen WHERE nidn='$nidn'");
                $rows= mysqli_fetch_array($query);
            ?>
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-group">   
                    <label for="">NIDN</label>
                    <input type="text" name=nidn" value="<?=$rows['nidn'] ?>" class="form-control" placeholder="Masukkan NIDN" readonly>
                 </div>       
                <div class="form-group">
                    <label for="">Nama </label>
                    <input type="text" name="nama" value="<?=$rows['nama'] ?>" class="form-control" placeholder="Masukkan Nama Dosen">   
                </div>             
                <div class="form-group">
                    <label for="">Alamat</label>
                    <input type="text" name="alamat" value="<?=$rows['alamat'] ?>" class="form-control" placeholder="Masukkan Alamat">
                </div>
                <div class="form-group">
                    <label for="">Agama</label>
                    <input type="text" name="agama" value="<?=$rows['agama'] ?>" class="form-control" placeholder="Masukkan Agama">
                </div>
                <div class="form-group">
                    <label for="">Tanggal Lahir</label>
                    <input type="date" name="tgl_lahir" value="<?=$rows['tgl_lahir'] ?>" class="form-control" placeholder="Masukkan Tanggal Lahir">
                </div>
                <div class="form-group">
                    <label for="">Program Studi</label>
                    <select name="nama_prodi" id="" class="form-control">
                        <?php $no=1;
                        $query = mysqli_query($koneksi, "SELECT * FROM tbl_prodi");
                        while($prodi = mysqli_fetch_array($query)){
                            if ($prodi['id_prodi']==$rows['id_prodi']) {
                                echo "<option value='$prodi[id_prodi]' selected>$prodi[nama_prodi]</option>";
                            }else{
                                echo "<option value='$prodi[id_prodi]'>$prodi[nama_prodi]</option>";
                            }
                            
                          }

                        ?> 
                
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Mata Kuliah</label>
                    <select name="nama_mk" id="" class="form-control">
                        <?php $no=1;
                        $query = mysqli_query($koneksi, "SELECT * FROM tbl_mk");
                        while($a = mysqli_fetch_array($query)){
                            if ($a['id_mk']==$rows['id_mk']) {
                                echo "<option value='$a[id_mk]' selected>$a[nama_mk]</option>";
                            }else{
                                echo "<option value='$a[id_mk]'>$a[nama_mk]</option>"; 
                            }
                        }
                        ?> 

                    </select>
                 <br>
                 <button type="submit" name="simpan" class="btn btn-success">Simpan</button>                                           
            </form>
        </div>
    </div>
</div>

<?php
    if (isset($_POST['simpan'])) {
        $nim =$_POST['nidn'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $agama = $_POST['agama'];
        $tgl_lahir = $_POST['tgl_lahir'];
        $id_prodi = $_POST['id_prodi'];
        $id_mk = $_POST['id_mk'];
        {
            $query = mysqli_query($koneksi,"UPDATE tbl_dosen SET nama='$nama', alamat='$alamat',agama='$agama', tgl_lahir='$tgl_lahir', id_prodi='$id_prodi', id_mk='$id_mk', WHERE nim='$nim' ");
            if ($query) {
                echo "<script>alert('Data Berhasil Diedit')</script>";
                echo "<script>location='index.php?hal=data_dosen'</script>";
            }else{
                echo "<script>alert('Data Gagal Diedit')</script>";
                echo "<script>location='index.php?hal=data_dosen'</script>";
            }
        }
           

        }
    ?>
