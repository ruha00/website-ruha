<div class="container mt-5">
    <h2>Data Mahasiswa</h2> 
    <div class="container mt-5">
    <a href="index.php?hal=tambah_mahasiswa" class="btn btn-success"> Tambah Data</a>
    <hr>
    <table id="example" class="table table-striped">
        <thead>
            <th> No </th>
            <th> Nim </th>
            <th> Nama  </th>
            <th> Alamat </th>
            <th> Agama </th>
            <th> Tanggal Lahir </th>
            <th> Prodi </th>
            <th> Mata kuliah </th>
            <th> Aksi </th>
            
        </thead>
        <tbody>
        <?php
            $no=1;
            $query= mysqli_query($koneksi, "SELECT * FROM tbl_mhs INNER JOIN tbl_prodi ON tbl_prodi.id_prodi=tbl_mhs.id_prodi INNER JOIN tbl_mk ON tbl_mk.id_mk=tbl_mhs.id_mk");
            while($rows = mysqli_fetch_array($query)){
        
             ?>
            <tr>
               <td><?= $no++; ?></td>
                <td><?= $rows['nim'] ?></td>     
               <td><?= $rows['nama'] ?></td>
               <td><?= $rows['alamat'] ?></td>
               <td><?= $rows['agama'] ?></td>
               <td><?= $rows['tgl_lahir']?></td>
               <td><?= $rows['nama_prodi'] ?></td>
               <td><?= $rows['nama_mk'] ?></td>
               <td>
                <a href="index.php?hal=edit_mahasiswa&nim=<?=$rows['nim']?>" class="btn btn-warning btn-sm">Edit Data</a>
                <a href="index.php?hal=detail_mahasiswa&nim=<?=$rows['nim']?>" class="btn btn-info btn-sm">Detail</a>
                <a onclick="return confirm ('Anda Yakin Hapus Data')" href="index.php?hal=hapus_mahasiswa&nim=<?=$rows['nim']?>" 
                class="btn btn-danger btn-sm">Hapus Data</a>
               </td>

                
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>