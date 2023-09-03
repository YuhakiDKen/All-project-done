<html>
<head>
  <title>Peduli Diri Apps</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="beranda">
  <div class="container">
    <br><br><br><br><br>
    <div class="row">
      <div class="col">  
      </div>
      <div class="col-5 bg-primary rounded text-white">
        <form method="post" action="">
          <div class="mb-3">
            <br><br>
            <h1 class="text-light">Peduli Diri Apps</h1><hr>
            <p>Ujian Kompetensi Kejuruan - Rekayasa Perangkat Lunak<br><b>SMK Ma'arif Batu</b></p>
            <hr>
            <label class="form-label">NIK</label>
            <input type="text" class="form-control" name="nik">
          </div>
          <div class="mb-3">
           <label class="form-label">Nama Lengkap</label>
           <input type="text" class="form-control" name="namalengkap">
         </div>
         <input type="submit" value="Saya Pengguna Baru" name="sayapengguna" class="btn btn-dark">
         <input type="submit" value="Masuk" name="masuk" class="btn btn-success">
       </form>
     </div>
     <div class="col">

     </div>
   </div>
 </div>

 <script src="background1.png" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>

<?php 

if(isset($_POST['masuk'])){

  include 'koneksi.php';
  $nik = $_POST['nik'];
  $namalengkap = $_POST['namalengkap'];


  $sql = mysqli_query ($koneksi, "select * from pengguna where nik='$nik' and namalengkap='$namalengkap'");
  $cek = mysqli_num_rows($sql);

  if ($cek==0){
    echo '<script language="javascript">';
    echo 'alert("Mohon maaf data tidak tersedia di database, silahkan daftar pengguna baru.")';
    echo '</script>';
  }
  else{
    session_start();
    $_SESSION['ink'] = $nik;
    $SESSION['status'] = "login";
   header("location:home.php");
 } 

}

if(isset($_POST['sayapengguna'])){

  include 'koneksi.php';
  $nik = $_POST['nik'];
  $namalengkap = $_POST['namalengkap'];

  $ceknik = mysqli_num_rows (mysqli_query($koneksi, "SELECT nik FROM pengguna WHERE nik='$_POST[nik]'"));
  
  if($ceknik > 0) {
    echo '<script language="javascript">';
    echo 'alert("Mohon maaf data sudah ada silahkan login.")';
    echo '</script>';
  }
  
  else{
    mysqli_query($koneksi,"insert into pengguna values('','$nik','$namalengkap')");
    echo '<script language="javascript">';
    echo 'alert("Data berhasil tersimpan. Silahkan masuk dengan pengguna yang telah didaftarkan.")';
    echo '</script>';
  }


}
?>




