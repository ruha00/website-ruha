<div class="container mt-5">
    <h2>Data Mata Kuliah</h2><br>
    <a href="index.php?hal=tambah_mata_kuliah" class="btn btn-success">Tambah Data</a>
    <hr>
    <table id="example" class="table table-striped">
        <thead>
            <th> No </th>
            <th> Nama Mata Kuliah </th>
            <th>Jumlah sks</th>
            <th>Aksi</th>
            
        </thead>
        <tbody>
        <?php
            $no=1;
            $query = mysqli_query($koneksi, "SELECT * FROM tbl_mk");
            while($rows = mysqli_fetch_array($query)){
        
             ?>
            <tr>
                <td><?= $no++; ?></td>
               <td><?= $rows['nama_mk'] ?></td>
               <td><?= $rows['jml_sks'] ?></td>
               <td>
                <a href="index.php?hal=edit_mata_kuliah&id_mk=<?=$rows['id_mk']?>" class="btn btn-warning btn-sm">Edit Data</a>
                <a onclick="return confirm ('Anda Yakin Hapus Data')" href="index.php?hal=hapus_mata_kuliah&id_mk=<?=$rows['id_mk']?>" 
                class="btn btn-danger btn-sm">Hapus Data</a>
               </td>

                
            </tr>
            <?php 
            }
             ?>
        </tbody>
    </table>
</div>