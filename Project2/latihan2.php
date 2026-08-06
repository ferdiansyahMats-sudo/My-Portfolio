<?php 
    // Tambahkan !isset($_GET["gambar"]) ke dalam pengecekan
    if(
        !isset($_GET["gambar"]) ||
        !isset($_GET["judul"]) ||
        !isset($_GET["pembuat"]) ||
        !isset($_GET["isbn"])
    ){
        // Jika salah satu data di atas tidak ada di URL, tendang kembali ke latihan1.php
        header("Location: latihan1.php");
        exit;
    }

    // Gunakan basename() untuk mencegah path traversal (keamanan folder)
    $nama_gambar = basename($_GET["gambar"]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Buku</title>
  <style>
        /* Pengaturan Dasar & Warna Abu Hangat */
        body {
            font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
            background-color: #f4f3f0; /* Latar abu-abu hangat */
            color: #4a4a4a;
            margin: 0;
            padding: 40px 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
            box-sizing: border-box;
        }

        /* Kartu Pembungkus Detail Manga */
        ul {
            list-style: none;
            padding: 30px;
            margin: 0;
            background-color: #eaddca; /* Abu-abu kecokelatan hangat */
            border-radius: 16px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            border: 1px solid #dcd6cd;
            max-width: 500px;
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            box-sizing: border-box;
        }

        /* Pengaturan Gambar Sampul */
        img {
            height: 320px;
            width: 220px;
            object-fit: cover;
            border-radius: 8px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
            margin-bottom: 25px;
        }

        /* Desain Item Teks Informasi */
        ul li {
            width: 100%;
            padding: 12px 0;
            font-size: 1.1rem;
            border-bottom: 1px solid rgba(78, 68, 60, 0.1); /* Garis pembatas tipis */
            color: #4e443c;
            text-align: center;
        }

        /* Menebalkan teks label depan (seperti Nama Judul, Pembuat, ISBN) */
        ul li:not(:first-child) {
            font-weight: 500;
        }

        /* Menghilangkan garis pembatas di item terakhir */
        ul li:last-child {
            border-bottom: none;
        }

        /* Desain Tombol Kembali */
        a {
            display: inline-block;
            margin-top: 25px;
            padding: 12px 24px;
            background-color: #4e443c; /* Warna gelap hangat */
            color: #f4f3f0;
            text-decoration: none;
            font-weight: 600;
            border-radius: 8px;
            transition: background-color 0.2s ease, transform 0.2s ease;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
        }

        /* Efek Hover Tombol Kembali */
        a:hover {
            background-color: #3d352f;
            transform: translateY(-2px);
        }
   </style>
</head>
<body>
        <ul>
            <li><img src="img/<?= $nama_gambar; ?>" alt="Cover Manga"></li>
            
            <li>Nama Judul: <?= htmlspecialchars($_GET["judul"]); ?></li>
            <li>Pembuat: <?= htmlspecialchars($_GET["pembuat"]); ?></li>
            <li>ISBN: <?= htmlspecialchars($_GET["isbn"]); ?></li>
        </ul>
        
        <br>
        <a href="latihan1.php">Balik ke Daftar Manga</a>
</body>
</html>