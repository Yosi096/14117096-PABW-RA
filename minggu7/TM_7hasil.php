<?php
if (isset($_POST["submit"])) {
    $nama = $_POST["nama"];
    $alamat = $_POST["almt"];
    $jk = $_POST["jk"];
    $goldar = $_POST["drh"];
    $hobi = $_POST["hobi"];
    $keterangan = $_POST["ket"];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Isi Formulir</title>
</head>
<h1>Isi Formulir</h1>

<body>
    <table class="table" border="1" cellspacing="0">
        <tbody>
            <tr>
                <td width="147px">Nama</td>
                <td><?= $nama; ?></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td><?= $jk; ?></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><?= $almt; ?></td>
            </tr>
            <tr>
                <td>Golongan Darah</td>
                <td><?= $drh; ?></td>
            </tr>
            <tr>
                <td>Hobi</td>
                <td><?php foreach ($hobi as $hb) {
                        echo "$hb, ";
                    } 
                    ?></td>
            </tr>
            <tr>
                <td>Keterangan</td>
                <td><?= $ket; ?></td>
            </tr>
        </tbody>
    </table>
</body>

</html>