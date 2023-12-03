<div class="container mt-5">
    <h2>Data Prodi</h2> 
    <div class="container mt-5">
    <a href="index.php?hal=tambah_prodi" class="btn btn-success"> Tambah Data</a>
    <hr>
    <table id="example" class="table table-striped">
        <thead>
            <th> No </th>
            <th> Nama Prodi </th>
            <th>Aksi</th>
            
        </thead>
        <tbody>
        <?php
            $no=1; 
            $query = mysqli_query($koneksi, "SELECT * FROM tbl_prodi");
            while ($rows = mysqli_fetch_array($query)) {
        
             ?>
            <tr>
               <td><?= $no++; ?></td>
               <td><?= $rows['nama_prodi'] ?></td>
               <td>
                <a href="index.php?hal=edit_prodi&id_prodi=<?=$rows['id_prodi']?>" class="btn btn-warning btn-sm">Edit Data</a>
                <a onclick="return confirm ('Anda Yakin Hapus Data')" href="index.php?hal=hapus_prodi&id_prodi=<?=$rows['id_prodi']?>" 
                class="btn btn-danger btn-sm">Hapus Data</a>
               </td>

                
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>