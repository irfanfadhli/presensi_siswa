<<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Absensi Siswa</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <style>
    /* Gaya tampilan CSS */
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 20px;
      background-color: #b3ffff;
    }
    h1 {
      color: #333;
    }
    /* Tambahkan gaya tampilan lain sesuai kebutuhan Anda */
  </style>
</head>
<body>
  <h1>Absensi Siswa</h1>

  <form method="post">
    <label for="nama">Nama Siswa:</label>
    <input type="text" id="nama" name="nama"><br><br>

    <label for="nim">nim:</label>
    <input type="text" id="nim" name="nim"><br></br>

    <label for="kelas">Kelas:</label>
    <input type="text" id="kelas" name="kelas"><br><br>

    <input type="submit" value="Submit" name="submit">
  </form>

  <?php
  include'koneksi.php';
  if(isset($_POST['submit'])){
    $nama=$_POST['nama'];
    $nim=$_POST['nim'];
    $kelas=$_POST['kelas'];

    $sql="INSERT INTO absensi (nama,nim,kelas) VALUES ('$nama','$nim','$kelas')";

    $result=mysqli_query($koneksi,$sql);

    if ($result){
      header("Location: index.php");
    }


  }


  ?>
<br><br>
  <table class="">
  <thead>
  <tr>
  <th>#</th>
  <th>Nama</th>
  <th>Nim</th>
  <th>Kelas</th>
  <th>Tanggal</th>
  <tr>
  </thead>

  <?php
  $sql="SELECT * FROM absensi";
  $result=mysqli_query($koneksi,$sql);
  while($row=mysqli_fetch_assoc($result)){
?>
<tbody>
  <tr>
    <td>
      <?php echo $row['id'];?>
    </td>
    <td>
      <?php echo $row['nama'];?>
    </td>
    <td>
      <?php echo $row['nim'];?>
    </td>
    <td>
      <?php echo $row['kelas'];?>
    </td>
    <td>
      <?php echo $row['tanggal'];?>
    </td>
  </tr>
</tbody>
</tbody>
<?php
}
?>

  

  <script src="js/script.js"></script>
  <script type="fire base"></script>

</body>
</html>