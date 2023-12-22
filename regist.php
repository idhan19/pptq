<?php 

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    // koneksi database
    include 'koneksi.php';
    
    // menangkap data yang di kirim dari form
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    // menginput data ke database
    mysqli_query($koneksi,"INSERT INTO user(email, password) values('$email','$password')");

    echo "<script>alert('Berhasil Register'); window.location.href='login.php';</script>";

}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Login</title>
    <link rel="stylesheet" href="login.css" />
  </head>
  <body>
    <div class="login-container">
      <div class="header">
      <img src="images/yayasan markaz.png" alt="Logo Instansi" class="logo" />
        <h2>Daftar akun</h2>
      </div>
      <form action="" method="POST">
        <div class="input-group">
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required />
        </div>
        <div class="input-group">
          <label for="password">Password:</label>
          <input type="password" id="password" name="password" required />
        </div>
        <div >
          <button class="logg" type="submit">Daftarkan</button>
        </div>

        <div class="regg">
          <a href="Login.php"> kembali ke Login</a>
        </div>
      </form>
    </div>
  </body>
</html>
