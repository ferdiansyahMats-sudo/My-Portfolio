<?php
    // Variable Scope 
    // $x = 10;

    // function tampilX(){
    //     global $x; // <== untuk mengecek apakah ada var x
    //     echo $x;
    // }

    // tampilX();

    // SUPERGLOBAlS
    // variable global php punya
    // ini adalah Array Associative

    // $_GET
    // $_POST
    // $_REQUEST
    // $_SESSION
    // $_COOKIE
    // $_SERVER
    // $_ENV 


$buku = [
        [
            "gambar" => "jujutsu.jpg",
            "judul" => "Jujutsu Kaizen",
            "volume" => "Perfect Preparation",
            "pembuat" => "Gege Akutami",
            "rilis" => "October 4, 2021",
            "penerbit" => "Shueisha",
            "klasifikasi" => "Remaja",
            "isbn" => "978-4-08-882736-0"
        ],
        [
            "gambar" => "hxh.jpg",
            "judul" => "Hunter x Hunter",
            "volume" => "Regeneration / Saisei",
            "pembuat" => "Yoshihiro Togashi",
            "rilis" => "July 4, 2011",
            "penerbit" => "Shueisha",
            "klasifikasi" => "Remaja",
            "isbn" => "978-4-08-870326-8"
        ],
        [
            "gambar" => "death.jpg",
            "judul" => "Death Note",
            "volume" => "Hard Run / Gekisou",
            "pembuat" => "Tsugumi Ohba",
            "rilis" => "September 8, 2004",
            "penerbit" => "Shueisha",
            "klasifikasi" => "Remaja",
            "isbn" => "978-4-08-873652-5"
        ],
        [
            "gambar" => "vinland.jpg",
            "judul" => "Vinland Saga",
            "volume" => "End of the Prologue",
            "pembuat" => "Makoto Yukimura",
            "rilis" => "September 23, 2009",
            "penerbit" => "Kondasha",
            "klasifikasi" => "Dewasa",
            "isbn" => "978-4-06-314581-6"
        ],
        [
            "gambar" => "Vagabond.jpg",
            "judul" => "Vagabond",
            "volume" => "Toraware no Musashi",
            "pembuat" => "Takehiko Inoue",
            "rilis" => "November 27, 2008",
            "penerbit" => "Kodansha",
            "klasifikasi" => "Remaja",
            "isbn" => "978-6-23-002218-0"
        ],
]

 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Manga</title>
  <style>
        /* Pengaturan Dasar & Warna Abu Hangat */
        body {
            font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
            background-color: #f4f3f0; /* Abu-abu hangat/cream tipis */
            color: #4a4a4a; /* Abu-abu gelap, lebih lembut dari hitam murni */
            margin: 0;
            padding: 40px 20px;
            display: flex;
            justify-content: center;
        }

        /* Pembungkus agar judul dan list tersusun rapi ke bawah */
        .container {
            width: 100%;
            max-width: 1000px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        /* Desain Judul Paling Atas */
        .main-title {
            color: #4e443c; /* Warna hangat senada dengan teks kartu */
            font-size: 2.2rem;
            margin-bottom: 40px; /* Jarak antara judul dan daftar manga */
            text-align: center;
            font-weight: 700;
            letter-spacing: 1px;
            position: relative;
            padding-bottom: 10px;
        }

        /* Garis pemanis tipis di bawah judul */
        .main-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 4px;
            background-color: #eaddca;
            border-radius: 2px;
        }

        /* Mengubah List Menjadi Grid Kartu */
        ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); /* Lebar minimal kotak sedikit diperbesar */
            gap: 20px;
            width: 100%;
        }

        /* Desain Setiap Item / Kartu Manga */
        li {
            background-color: #eaddca; /* Abu-abu kecokelatan hangat */
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            transition: transform 0.2s ease, box-shadow 0.2s ease, background-color 0.2s ease;
            overflow: hidden;
            border: 1px solid #dcd6cd;
        }

        /* Efek Hover Saat Kursor Menyentuh Kartu */
        li:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
            background-color: #dfd4c3;
        }

        /* Desain Link Di Dalam Kartu (Teks Dibuat Lebih Besar & Tebal) */
        li a {
            display: block;
            padding: 30px 20px; /* Jarak atas-bawah kotak ditambah agar lebih lega */
            text-align: center;
            text-decoration: none;
            color: #4e443c;
            font-weight: 800; /* Mengubah ketebalan teks menjadi ekstra tebal */
            font-size: 1.4rem; /* Mengubah ukuran font menjadi lebih besar (gedé) */
            letter-spacing: 0.5px;
            height: 100%;
            box-sizing: border-box;
        }
    </style>

</head>
<body>
    <h1 class="main-title">Best Volume Manga yang saya baca</h1>
    <ul>
        <?php foreach($buku as $manga):?>
            <li>
                <a href="latihan2.php?gambar=<?= $manga["gambar"]; ?>&judul=<?= $manga["judul"]; ?>&pembuat=<?= $manga["pembuat"]; ?>&isbn=<?= $manga["isbn"]; ?>">
                    <?= $manga["judul"]; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>