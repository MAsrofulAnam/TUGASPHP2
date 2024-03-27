<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Diri</title>

    <link rel="stylesheet" href="./csstugas/styletugas1.css">
</head>
<body align="center" bgcolor="#FBF3D5">

    <!-- DISINI SAYA MEMBUAT SEDIKIT NAVBAR DI ATAS JUDUL -->
<div class="navbar" align="left">
        <a href="https://www.instagram.com/nmm._21/">instagram</a>
        <a href="https://www.youtube.com/@UniversitasBantenJaya">youtube</a>
    </div>

    <?php 
        // Variabel untuk data diri
        $nama = "M.Asroful Anam";
        $email = "rabilalmaghribi01@gmail.com";
        $TTL = "Pandeglang, 12 - 09 - 2002";
        $nomor_telepon = "085283230064";
        $alamat = "serang. banten";
        $tinggi = "170 cm ";
        $berat = "60 kg";
        
    ?>
    <!-- DISINI SAYA MEMBUAT JUDUL -->
    <h1>Tentang Saya</h1>

    <!-- DISINI SAYA MENAMBAHKAN GAMBAR UNTUK PROFIL SAYA -->
    <img src="gambartugas/anam.jpg" alt="Gambar Profil" width="200">
    <h2>M.Asroful Anam</h2>

    <!-- DISINI SAYA MEMBUAT SEBUAH CERITA TEXT AGAR FRAME LEBIH TERLIHAT BANYAK -->
    <p>Hallo...!!! salam kenal semuanya ,nama saya M.Asroful Anam , saya tinggal di daerah serang provinsi banten, saya adalah anak tunggal,
        saya adalah mahasiswa Universitas Banten Jaya
        dan saya sedang mengikuti kegiantan kampus merdeka di Mitra NF Academy
        dan saya di sini dapat berkenalan dengan teman teman baru 
        dan juga mendapatkan ilmu di luar kampus yang luas ,
        dan juga saya disini bertemu dengan mentor mentor yang tentunya berkualitas dan memiliki pengalaman yang banyak,
        dan cara pengajarannya cukup dimengerti.
    </p>


        <!-- DISINI SAYA MEMBUAT TABLE UNTUK VARIABLE PHP DI ATAS  -->
    <table border="1" cellpadding="5" cellspacing="0" align = "center">
        <thead>
            <tr> 
                <th colspan="3">Biodata</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><?php echo $nama; ?></td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td><?php echo $email; ?></td>
            </tr>
            <tr>
                <td>TTL</td>
                <td>:</td>
                <td><?php echo $TTL; ?></td>
            </tr>
            <tr>
                <td>Nomor Telepon</td>
                <td>:</td>
                <td><?php echo $nomor_telepon; ?></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><?php echo $alamat; ?></td>
            </tr>
            <tr>
                <td>Tinggi Badan</td>
                <td>:</td>
                <td><?php echo $tinggi ?></td>
            </tr>
            <tr>
                <td>Berat Badan</td>
                <td>:</td>
                <td><?php echo $berat; ?></td>
            </tr>
        </tbody>
    </table>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <footer>
        <div class="footer-content" size = "3">
            <p>&copy; 2024 - Data Diri M.Asroful Anam</p>
        </div>
    </footer>
</body>
</html>