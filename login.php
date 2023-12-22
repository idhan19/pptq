<?php 

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    // koneksi database
    include 'koneksi.php';
    
    // menangkap data yang di kirim dari form
    $email = $_POST['email'];
    $password = $_POST['password'];
    // mengambil data dari database
    $data_user = mysqli_query($koneksi,"SELECT email FROM user WHERE email = '$email' AND password = '$password'");

    if(mysqli_num_rows($data_user) > 0){
        session_start();

        // ambil data user dari hasil query
        $user = mysqli_fetch_assoc($data_user);

        // set session
        $_SESSION['email'] = $user['email'];
        $_SESSION['status'] = 'login';

        echo "<script>alert('Berhasil Login'); window.location.href='index.php';</script>";
    }else{
        echo "<script>alert('Email atau Password salah, silahkan coba lagi');</script>";
    }
    
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
        <h2>PPTQ AL-MUSTAQIMIYYAH</h2>
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
          <button class="logg" type="submit">Login</button>
        </div>

        <div class="regg">
          <a href="regist.php">Daftar Akun</a>
        </div>
      </form>
    </div>
  </body>
</html>
