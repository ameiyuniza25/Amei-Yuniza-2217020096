<?php
// $mahasiswa = [
//     [
//         "nama" => "Amei Yuniza",
//         "nip" => "22170209096",
//         "email" => "ameiyuniza@gmail.com"
//     ],
//     [
//         "nama" => "Budi Santoso",
//         "nip" => "22170209097",
//         "email" => "budi.santoso@gmail.com"
//     ],
// ];

$dbh = new PDO('mysql:host=localhost;dbname=phpdasar', 'root', '');
$db = $dbh->prepare('SELECT * FROM mahasiswa');
$db->execute();
$mahasiswa = $db->fetchAll(PDO ::FETCH_ASSOC);

$data = json_encode($mahasiswa);
echo $data;
?>
