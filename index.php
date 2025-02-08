<?php
session_start();
//koneksi ke database
include 'koneksi.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tokoku</title>
  <link rel="stylesheet" href="admin/assets/css/bootstrap.css">
</head>
<body>

<?php include 'templates/navbar.php'; ?>

<!-- konten   -->
<section class="content">
  <div class="container">
    <h1>Produk Terbaru</h1>
    <div class="row">
      <?php
      $ambil = $koneksi->query("SELECT * FROM produk");
      while($perproduk = $ambil->fetch_assoc()):
      ?>
      <div class="col-md-3">
        <div class="thumbnail">
          <img src="foto_produk/<?= $perproduk['foto_produk']; ?>">
          <div class="caption">
            <h3><?= $perproduk['nama_produk']; ?></h3>
            <h5>Rp. <?= number_format($perproduk['harga_produk']); ?>,-</h5>
            <a href="beli.php?id=<?= $perproduk['id_produk']; ?>" class="btn btn-primary">beli</a>
            <a href="detail.php?id=<?= $perproduk['id_produk']; ?>" class="btn btn-default">detail</a>
          </div>
        </div>
      </div>
      <?php endwhile; ?>
    </div>
  </div>
</section>

<footer class="footer">
  <div class="container">
    <div class="row">
      <!-- Kolom Visi -->
      <div class="col-md-4">
        <h4 class="footer-title">Visi</h4>
        <p>"Menjadi platform terbaik dalam memberikan layanan belanja online yang cepat, aman, dan terpercaya."</p>
      </div>

      <!-- Kolom Misi -->
      <div class="col-md-4">
        <h4 class="footer-title">Misi</h4>
        <ul>
          <li>Memberikan layanan pelanggan yang responsif dan berkualitas.</li>
          <li>Menjamin keamanan transaksi dengan sistem yang canggih.</li>
          <li>Menyediakan produk berkualitas dengan harga terbaik.</li>
          <li>Mengembangkan inovasi teknologi untuk pengalaman belanja yang lebih baik.</li>
        </ul>
      </div>

      <!-- Kolom Keunggulan Produk -->
      <div class="col-md-4">
        <h4 class="footer-title">Keunggulan Produk</h4>
        <ul>
          <li>Kualitas Terbaik: Produk kami dibuat dari bahan pilihan yang terjamin kualitasnya.</li>
          <li>Harga Kompetitif: Nikmati harga bersaing dengan kualitas terbaik.</li>
          <li>Pengiriman Cepat: Pesanan Anda akan sampai dengan cepat dan aman.</li>
          <li>Garansi Resmi: Setiap produk dilengkapi dengan garansi resmi.</li>
        </ul>
      </div>
    </div>
    <hr>
    <p class="text-center">&copy; 2024 Toko Online | All Rights Reserved</p>
  </div>
</footer>

<!-- CSS -->
<style>
.footer {
  background: #343a40;
  color: white;
  padding: 40px 0;
}
.footer-title {
  font-size: 20px;
  font-weight: bold;
  margin-bottom: 15px;
}
.footer ul {
  padding-left: 20px;
  list-style-type: none; /* Hilangkan bullet point */
}
.footer ul li {
  margin-bottom: 10px; /* Jarak antar item */
}
.footer ul li strong {
  color: #f8d210; /* Warna teks keunggulan */
}
.footer hr {
  border-color: rgba(255, 255, 255, 0.2);
}
</style>

  
</body>
</html>