<!DOCTYPE html>
<html>
<head>
    <title>Form Pemesanan Jasa Edit Video</title>
</head>
<body>

<h2>Form Pemesanan Jasa Edit Video</h2>

<form method="post" enctype="multipart/form-data">

    <label>Nama:</label><br>
    <input type="text" name="nama"><br><br>

    <label>Email:</label><br>
    <input type="text" name="email"><br><br>

    <label>Nomor WhatsApp:</label><br>
    <input type="text" name="wa"><br><br>

    <label>Jenis Video:</label><br>
    <input type="radio" name="jenis_video" value="YouTube"> YouTube<br>
    <input type="radio" name="jenis_video" value="TikTok/Reels"> TikTok/Reels<br>
    <input type="radio" name="jenis_video" value="Short Movie"> Short Movie<br>
    <input type="radio" name="jenis_video" value="Video Promosi"> Video Promosi<br><br>

    <label>Paket Editing:</label><br>
    <select name="paket">
        <option value="Basic">Basic</option>
        <option value="Standard">Standard</option>
        <option value="Premium">Premium</option>
    </select>
    <br><br>

    <label>Tambahan Layanan:</label><br>
    <input type="checkbox" name="layanan[]" value="Subtitle"> Subtitle<br>
    <input type="checkbox" name="layanan[]" value="Motion Graphic"> Motion Graphic<br>
    <input type="checkbox" name="layanan[]" value="Color Grading"> Color Grading<br><br>

    <label>Deskripsi Proyek:</label><br>
    <textarea name="deskripsi" rows="5" cols="40"></textarea>
    <br><br>

    <label>Deadline:</label><br>
    <input type="date" name="deadline">
    <br><br>

    <label>Upload Contoh Video / Referensi:</label><br>
    <input type="file" name="video">
    <br><br>

    <input type="submit" name="submit" value="Pesan Sekarang">
    <input type="reset" value="Reset">

</form>

<?php

if(isset($_POST['submit'])){

    echo "<hr>";
    echo "<h3>Detail Pesanan</h3>";

    echo "Nama : " . $_POST['nama'] . "<br>";
    echo "Email : " . $_POST['email'] . "<br>";
    echo "WhatsApp : " . $_POST['wa'] . "<br>";
    echo "Jenis Video : " . $_POST['jenis_video'] . "<br>";
    echo "Paket Editing : " . $_POST['paket'] . "<br>";

    if(isset($_POST['layanan'])){
        echo "Tambahan Layanan : ";
        echo implode(", ", $_POST['layanan']);
        echo "<br>";
    } else {
        echo "Tambahan Layanan : Tidak ada<br>";
    }

    echo "Deskripsi Proyek : " . $_POST['deskripsi'] . "<br>";
    echo "Deadline : " . $_POST['deadline'] . "<br>";

    if(isset($_FILES['video']) && $_FILES['video']['name'] != ""){
        echo "File Video : " . $_FILES['video']['name'] . "<br>";
    } else {
        echo "File Video : Belum dipilih<br>";
    }
}

?>

</body>
</html>