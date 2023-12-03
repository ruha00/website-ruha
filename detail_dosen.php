<div class="container mt-5">
    <?php
        $nidn = $_GET['nidn'];
        $query = mysqli_query($koneksi, "SELECT * FROM tbl_dosen INNER JOIN tbl_prodi ON tbl_prodi.id_prodi=tbl_dosen.id_prodi INNER JOIN tbl_mk ON tbl_mk.id_mk=tbl_mk.id_mk WHERE nidn='$nidn'");
        $rows = mysqli_fetch_array($query);
    ?>
    <h3>Biodata <?= $rows['nama'] ?></h3><br></br>

    <div class="row">
        <div class="col-md-6">
            <table class="table">
                <tr>
                    <td>nidn</td>
                    <td>:</td>
                    <td><?=$rows['nidn'] ?></td>
                </tr>
                <tr>
                    <td>Nama Dosen</td>
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
                <a href="index.php?hal=data_dosen" class="btn btn-danger">kembali</a>
        </div>

    </div>

</div>