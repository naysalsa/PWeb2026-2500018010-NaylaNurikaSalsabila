<!DOCTYPE html>
<html>
<head>
    <title>Aplikasi Nilai Mahasiswa</title>
    <style>
        body{
            font-family: Arial, sans-serif;
            background:#f4f4f4;
            margin:40px;
        }
        table{
            border-collapse:collapse;
            width:500px;
            background:white;
        }
        th,td{
            border:1px solid #ccc;
            padding:10px;
            text-align:center;
        }
        th{
            background: #ff00b3;
            color:white;
        }
        h2{
            color:#333;
        }
    </style>
</head>
<body>

<?php
$mahasiswa = [
    "Anca" => 96,
    "Naye" => 95,
    "Lintang" => 90,
    "Bunga" => 78,
    "Alea" => 88
];

function grade($nilai){
    if($nilai >= 85){
        return "A";
    }elseif($nilai >= 70){
        return "B";
    }elseif($nilai >= 60){
        return "C";
    }else{
        return "D";
    }
}

function rataRata($data){
    return array_sum($data) / count($data);
}

function nilaiTertinggi($data){
    return max($data);
}

function nilaiTerendah($data){
    return min($data);
}

?>

<h2>Data Nilai Mahasiswa</h2>

<table>
<tr>
    <th>Nama</th>
    <th>Nilai</th>
    <th>Grade</th>
</tr>

<?php
foreach($mahasiswa as $nama => $nilai){
    echo "<tr>";
    echo "<td>$nama</td>";
    echo "<td>$nilai</td>";
    echo "<td>".grade($nilai)."</td>";
    echo "</tr>";
}
?>

</table>

<?php

echo "<h3>Statistik Nilai</h3>";

echo "Jumlah Mahasiswa : ".count($mahasiswa)."<br>";
echo "Rata-rata Nilai : ".number_format(rataRata($mahasiswa),2)."<br>";
echo "Nilai Tertinggi : ".nilaiTertinggi($mahasiswa)."<br>";
echo "Nilai Terendah : ".nilaiTerendah($mahasiswa)."<br>";

echo "<h3>Ranking Mahasiswa</h3>";

arsort($mahasiswa);

echo "<table>";
echo "<tr>
        <th>Peringkat</th>
        <th>Nama</th>
        <th>Nilai</th>
      </tr>";

$no=1;
foreach($mahasiswa as $nama=>$nilai){
    echo "<tr>";
    echo "<td>$no</td>";
    echo "<td>$nama</td>";
    echo "<td>$nilai</td>";
    echo "</tr>";
    $no++;
}

echo "</table>";

?>

</body>
</html>
