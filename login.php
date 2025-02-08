<?php
session_start();

//koneksi ke database
include 'koneksi.php';




// jika tombol login ditekan
if(isset($_POST['login'])){

  $email = $_POST['email'];
  $password = $_POST['password'];

  // Melakukan query pada tabel pelanggan
  $ambil = $koneksi->query("SELECT * FROM pelanggan WHERE email_pelanggan='$email' AND password_pelanggan='$password'");

  // Mengecek akun yang cocok (email & password)
  $akunyangcocok = $ambil->num_rows;

  // Jika ada akun yang cocok
  if($akunyangcocok == 1){
    // Mendapatkan aku dalam bentuk array
    $akun = $ambil->fetch_assoc();

    // Simpan di session
    $_SESSION["pelanggan"] = $akun;
    echo "<div class='alert alert-success'>Login sukses</div>";

    // Jika sudah belanja
    if(isset($_SESSION['keranjang']) OR !empty($_SESSION['keranjang'])){
      echo "<meta http-equiv='refresh' content='1;url=checkout.php'>";
    }
    else{
      echo "<meta http-equiv='refresh' content='1;url=riwayat.php'>";
    }
  }
  else{
    // echo "<script>alert('Gagal login')</script>";
    // echo "<script>location='login.php';</script>";
    echo "<div class='alert alert-danger'>Login gagal!</div>";
		echo "<meta http-equiv='refresh' content='1;url=login.php'>";
  }
}
?>

<style>
body {
  background: url('https://source.unsplash.com/1600x900/?technology,abstract') no-repeat center center fixed;
  background-size: cover;
}
.login-container {
  min-height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
}
.login-card {
  background: rgba(255, 255, 255, 0.9);
  padding: 30px;
  border-radius: 10px;
  box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
}
.btn-primary {
  background: #007bff;
  border: none;
  transition: 0.3s;
}
.btn-primary:hover {
  background: #0056b3;
}
</style>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Pelanggan</title>
  <link rel="stylesheet" href="admin/assets/css/bootstrap.css">
</head>
<body>

<?php include 'templates/navbar.php'; ?>

<div class="container login-container">
  <div class="col-md-4">
    <div class="login-card">
      <h3 class="text-center mb-4">Login Pelanggan</h3>
      <form action="" method="post">
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" name="email" required>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" name="password" required>
        </div>
        <button type="submit" name="login" class="btn btn-primary w-100">Login</button>
      </form>
    </div>
  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  
</body>
</html>