<div class="container mt-5">
    <h2>Data Dosen</h2><br>
    <a href="index.php?hal=tambah_dosen" class="btn btn-success"> Tambah Data</a>
    <hr>
    <table id="example" class="table table-striped">
        <thead>
            <th> No </th>
            <th> NIDN </th>
            <th> Nama Dosen</th>
            <th> Alamat </th>
            <th> agama</th>
            <th> Tanggal Lahir </th>
            <th>  Prodi</th>
            <th>Mata kuliah </th>
            <th>Aksi</th>
            
        </thead>
        <tbody>
        <?php
            $no=1;
            $query= mysqli_query($koneksi, "SELECT * FROM tbl_dosen INNER JOIN tbl_prodi ON tbl_prodi.id_prodi=tbl_dosen.id_prodi INNER JOIN tbl_mk ON tbl_mk.id_mk=tbl_dosen.id_mk");
            while($rows = mysqli_fetch_array($query)){
        
             ?>
            <tr>
               <td><?= $no++; ?></td>
               <td><?= $rows['nidn'] ?></td>
               <td><?= $rows['nama'] ?></td>
               <td><?= $rows['alamat'] ?></td>
               <td><?= $rows['agama'] ?></td>
               <td><?= $rows['tgl_lahir'] ?></td>
               <td><?= $rows['nama_prodi'] ?></td>
               <td><?= $rows['nama_mk'] ?></td>
               <td>
                <a href="index.php?hal=edit_dosen&nidn=<?=$rows['nidn']?>" class="btn btn-warning btn-sm">Edit Data</a>
                <a href="index.php?hal=detail_dosen&nidn=<?=$rows['nidn']?>" class="btn btn-info btn-sm">Detail</a>
                <a onclick="return confirm ('Anda Yakin Hapus Data')" href="index.php?hal=hapus_dosen&nidn=<?=$rows['nidn']?>" 
                class="btn btn-danger btn-sm">Hapus Data</a>
               </td>

                
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>