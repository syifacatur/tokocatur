<?php
//koneksi ke database
include 'koneksi.php';
session_start(); // Pastikan session dimulai

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <!-- Meta Tags untuk SEO -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Dapatkan solusi terbaik untuk [masalah] dengan [Nama Produk/Jasa]. Temukan manfaat, harga terbaik, dan promo eksklusif hanya di sini!">
    <meta name="keywords" content="Produk terbaik, Jasa profesional, Harga terjangkau, Solusi terbaik">
    <meta name="author" content="Nama Brand">
    <meta name="robots" content="index, follow"> <!-- Mengizinkan Google untuk mengindeks halaman -->

    <!-- Open Graph Meta Tags (untuk Social Media) -->
    <meta property="og:title" content="Nama Produk - Solusi Terbaik untuk Anda">
    <meta property="og:description" content="Cari solusi untuk [masalah]? [Nama Produk] adalah pilihan terbaik dengan kualitas premium dan harga terjangkau.">
    <meta property="og:image" content="https://example.com/gambar-produk.jpg">
    <meta property="og:url" content="https://example.com">
    <meta property="og:type" content="website">

    <title>Toko Laptop - Solusi Terbaik untuk Memilih Banyak Kategori Laptop</title>

    <!-- Schema Markup JSON-LD (Google Rich Results) -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Product",
      "name": "Nama Produk",
      "image": "https://example.com/gambar-produk.jpg",
      "description": "Produk terbaik untuk mengatasi [masalah].",
      "brand": {
        "@type": "Brand",
        "name": "Nama Brand"
      },
      "offers": {
        "@type": "Offer",
        "url": "https://example.com",
        "priceCurrency": "IDR",
        "price": "199000",
        "itemCondition": "https://schema.org/NewCondition",
        "availability": "https://schema.org/InStock"
      }
    }
    </script>

    <!-- CSS Styling -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }
        .container {
            width: 80%;
            margin: auto;
            padding: 20px;
        }
        h1, h2, h3 {
            color: #333;
        }
        .cta {
            background: #007bff;
            color: white;
            padding: 15px;
            display: block;
            text-align: center;
            text-decoration: none;
            font-size: 18px;
            margin-top: 20px;
            border-radius: 5px;
        }
        .cta:hover {
            background: #0056b3;
        }
        .footer {
            background: #333;
            color: white;
            text-align: center;
            padding: 10px 0;
            margin-top: 20px;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Toko Laptop - Solusi Terbaik untuk anda yang kebingungan mencari laptop</h1>
        <p>Selamat datang di halaman resmi <strong>store catur</strong>. Jika Anda mencari solusi terbaik untuk mencari jenis laptop, maka Anda berada di tempat yang tepat!</p>

        <h2>Kenapa Harus Memilih <span style="color: #007bff;">storecatur</span>?</h2>
        <ul>
            <li><strong>Kualitas Premium:</strong> Dibuat dengan material terbaik.</li>
            <li><strong>Harga Terjangkau:</strong> Dapatkan harga terbaik untuk produk berkualitas.</li>
            <li><strong>Garansi Resmi:</strong> Jaminan keaslian dan kepuasan pelanggan.</li>
            <li><strong>Pengiriman Cepat:</strong> Produk dikirim dengan aman dan tepat waktu.</li>
        </ul>

        <h2>Testimoni Pelanggan</h2>
        <blockquote>
            "Saya sangat puas dengan <strong>store catur</strong>, kualitasnya luar biasa dan harganya sangat terjangkau!" <?= $_SESSION['pelanggan']['nama_pelanggan']; ?>
        </blockquote>

        <a href="index.php" class="cta">Dapatkan Sekarang!</a>
    </div>

    <div class="footer">
        &copy; 2024 Nama Brand | <a href="https://example.com">Website Resmi</a>
    </div>

</body>
</html>
