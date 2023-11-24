<!DOCTYPE html>
<html >
<head>
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="warna1.css">
</head>
<body>
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
          <form action="daftarup.php" method="post">
            <input type="text" class="fadeIn second" name="nama" placeholder="nama">
            <input type="text" class="fadeIn third" name="sekolah" placeholder="sekolah">
            <input type="text" class="fadeIn third" name="no_telpon" placeholder="no.telpon">
            <select class="fadeIn third" style="width: 85%; text-align: center; padding: 15px 32px;" name="lomba">
              <option>PILIH LOMBA</option>
              <option>VOLLY</option>
              <option>FUTSAL</option>
              <option>MATH</option>
              <option>SPELLING BEE</option>
              <option>MOBILE LEGENDS</option>
              <option>FREE FIRE</option>
              <option>PUBG</option>
            </select>
            <!-- <input type="text" id=s""> -->
            <!-- <input type="submit" class="fadeIn fourth" value="Log In"> -->
            <button class="my-button" name="submit" type="submit">Daftar</button>
          </form>
      
        </div>
      </div>
</body>
</html>