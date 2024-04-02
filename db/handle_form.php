<?php
function myPost($key)
{
    if(isset($_POST[$key]))
    {
        return $_POST[$key];
    }
    return '';
}

$tanggal = myPost('tanggal');
$berat = myPost('berat');
$kalori = myPost('kalori');

$server = 'localhost';
$username = 'root';
$password = '';
$dbname = 'web23';

$conn = mysqli_connect($server, $username, $password, $dbname);

if(empty($conn->error) == false)
{
    echo "kesalahan koneksi ke database, " . $conn->connect_error;
    die();
}

// $conn->query("insert into track_kalori (tanggal,berat,kalori) values(" . $tanggal . "," . $berat);

$stmt = $conn->prepare("insert into track_kalori (tanggal,berat,kalori) values(?,?,?)");
$stmt->bind_param("sss", $tanggal, $berat, $kalori);

// $tanggal = myPost('tanggal');
// $berat = myPost('berat');
// $kalori = myPost('kalori');

$stmt->execute();

$stmt->close();
$conn->close();

// echo "data berhasil disimpan";
// redirect ke halaman index.php
header('location: index.php');
// 
