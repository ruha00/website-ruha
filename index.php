<?php
  include "koneksi.php";
  session_start();
  if (empty($_SESSION ['username'])) {
    echo "<script>location='login.php'</script>";
  }
 ?> 
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="shttps://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">

    <title>Welcome Siakad!</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar navbar-dark" style="background-color: #ab00df;">
  <div class="container">
    <a class="navbar-brand" href="#">SIAKAD</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php?hal=home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="index.php?hal=data_mahasiswa">Mahasiswa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="index.php?hal=data_prodi">Prodi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="index.php?hal=data_dosen">Dosen</a>
        </li>
         </li>
         <li class="nav-item">
          <a class="nav-link active" href="index.php?hal=data_mata_kuliah">Mata kuliah</a>
        </li>
         </li>
        <li class="nav-item">
          <a class="nav-link active"  href="login.php">Keluar</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


<?php
  if (isset($_GET['hal'])) {
    if($_GET['hal']=="home"){
      include "home.php";
    } elseif($_GET['hal']=="data_mahasiswa"){
      include "data_mahasiswa.php";
  } elseif($_GET['hal']=="data_prodi"){
    include "data_prodi.php";
  }elseif($_GET['hal']=="data_dosen"){
    include "data_dosen.php";
  
  }elseif($_GET['hal']=="tambah_dosen"){
    include "tambah_dosen.php";
  
  }elseif($_GET['hal']=="hapus_dosen"){
    include "hapus_dosen.php";
    
  }elseif($_GET['hal']=="edit_dosen"){
    include "edit_dosen.php";
  
  }elseif($_GET['hal']=="tambah_prodi"){
    include "tambah_prodi.php";

  }elseif($_GET['hal']=="detail_dosen"){
    include "detail_dosen.php";

  }elseif($_GET['hal']=="edit_prodi"){
    include "edit_prodi.php";

  }elseif($_GET['hal']=="hapus_prodi"){
    include "hapus_prodi.php";

   } elseif($_GET['hal']=="data_mata_kuliah"){
      include "data_mata_kuliah.php";
      
    } elseif($_GET['hal']=="tambah_mata_kuliah"){
    include "tambah_mata_kuliah.php";
    
  }elseif($_GET['hal']=="edit_mata_kuliah"){
    include "edit_mata_kuliah.php";

  }elseif($_GET['hal']=="hapus_mata_kuliah"){
    include "hapus_mata_kuliah.php";

  }elseif($_GET['hal']=="tambah_mahasiswa"){
    include "tambah_mahasiswa.php";

  }elseif($_GET['hal']=="hapus_mahasiswa"){
    include "hapus_mahasiswa.php";
  
  }elseif($_GET['hal']=="edit_mahasiswa"){
    include "edit_mahasiswa.php";
  
  }elseif($_GET['hal']=="detail_mahasiswa"){
    include "detail_mahasiswa.php";
  }

  }else{
    include "home.php";
  }
?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
    <script>
      $(document).ready(function () {
        $('#example').DataTable();
      });
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>