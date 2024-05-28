<style>
        body{
            display:flex;
            justify-content:center;
            flex-direction:column;
        }
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Motor</title>
</head>
<body>
    <center>
        <h1>Rental Motor</h1><br><br>
        <form method="post" action="">
            <label for="nama">Nama Pelanggan : </label>
            <input type="text" name="nama" required>

            <label for="waktu">Lama Waktu Rental (Per Hari) :</label>
            <input type="text" name="waktu" required>

            <label for="jenis">Jenis Motor :</label>
            <select name="jenis">
                <option value="CBR RR">CBR RR</option>
                <option value="Ninja RR">Ninja RR</option>
                <option value="Fiz R">Fiz R</option>
                <option value="Shogun">Shogun</option>
            </select><br><br>
            <input type="submit" name="kirim">
        </form>
        </center>
</body>
</html>



<?php

include 'ProsesRentalMotor.php';

$proses = new Rental();
$proses->setHarga(110000, 100000, 150000, 90000);

if (isset($_POST['kirim'])) {
    $proses->Nama = $_POST['nama'];
    $proses->Waktu = $_POST['waktu'];
    $proses->Jenis = $_POST['jenis'];

    $proses->CetakRental();
}
?>