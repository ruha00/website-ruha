<div class="container mt-5">
    <?php
        $nim = $_GET['nim'];
        $query = mysqli_query($koneksi, "SELECT * FROM tbl_mhs INNER JOIN tbl_prodi ON tbl_prodi.id_prodi=tbl_mhs.id_prodi INNER JOIN tbl_mk ON tbl_mk.id_mk=tbl_mk.id_mk WHERE nim='$nim'");
        $rows = mysqli_fetch_array($query);
    ?>
    <h3>Biodata <?= $rows['nama'] ?></h3><br></br>

    <div class="row">
        <div class="col-md-6">
            <table class="table">
                <tr>
                    <td>NIM</td>
                    <td>:</td>
                    <td><?=$rows['nim'] ?></td>
                </tr>
                <tr>
                    <td>Nama Mahasiswa</td>
                    <td>:</td>
                    <td><?=$rows['nama'] ?></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><?=$rows['alamat'] ?></td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>:</td>
                    <td><?=$rows['agama'] ?></td>
                </tr>
                <tr>
                    <td> Tanggal Lahir</td>
                    <td>:</td>
                    <td> <?= date('d M Y', strtotime($rows['tgl_lahir']))?></td>
                </tr>
                <tr>
                    <td>Program Studi</td>
                    <td>:</td>
                    <td><?=$rows['nama_prodi'] ?></td>
                </tr>
                <tr>
                    <td>Mata Kuliah</td>
                    <td>:</td>
                    <td><?=$rows['nama_mk'] ?></td>
                </tr>
            </table>
                <a href="index.php?hal=data_mahasiswa" class="btn btn-danger">kembali</a>
        </div>

    </div>

</div>