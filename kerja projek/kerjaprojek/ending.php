<!DOCTYPE html>
<html>
<head>
    <title>PELAJARAN</title>
    <link rel="stylesheet" type="text/css" href="warna1.css">
<style>
    .container div {
     height: 200px;
    width: 100px;
    color: rgba(255, 174, 23, 0.672);
		}
</style>
</head>
<body> 
  <header class="showcase">
    <div class="showcase-top">
      <a href="kerjaprojek.php" class="btn btn-rounded">HOME</a>
    </div>
    <div class="showcase-content">
      <h1>TERIMA KASIH TELAH MENDAFTAR</h1>

      <div class="wrapper fadeInDown">
        <div id="formContent">
          <!-- Tabs Titles -->
          <a href="" style="text-decoration: none;"><h2 class="inactive underlineHover">daftar </h2></a>
          <h2 class=""></h2>
      
          <!-- Icon -->
          <div class="fadeIn first">
            <img src="telkom.png" id="icon" alt="User Icon" />
          </div>

          <!-- Login Form -->
          <form>
            <?php
              include("config.php");
              $nama = $_GET["nama"];
              if ($nama) {
                $sql = "SELECT * FROM tc WHERE nama='$nama' LIMIT 1";
                $result = $conn->query($sql);

                 while ($row = $result->fetch_array()) {
                   echo "
                   <input type='text' class='fadeIn second' name='nama' placeholder='nama' value='".$row['nama']."'>
                   <input type='text' class='fadeIn third' name='sekolah' placeholder='sekolah' value='".$row['sekolah']."'>
                   <input type='text' class='fadeIn third' name='no.telpon' placeholder='no.telpon' value='".$row['no_telpon']."'>
                   <input type='text' class='fadeIn third' name='lomba' placeholder='lomba' value='".$row['lomba']."'>
                   ";
                 }

              //   while ($row = $result->fetch_array()) {
              //     echo "
              //     <p>Nama: " . $row['nama'] . "</p>
              //     <p>Sekolah: " . $row['sekolah'] . "</p>
              //     <p>No. Telepon: " . $row['no_telpon'] . "</p>
              //     <p>Lomba: " . $row['lomba'] . "</p>
              //     ";
              // }
              

              }
            ?>
          </form>

        </div>
        <p>SETELAH MENDAFTAR SILAHKAN SECREEN SHOOT BUKTI DI ATAS INI !!!</p>
  </header>
</body>
</html>