<html>
<head>
    <title>Add Data</title>
</head>
<body>
    <h2>Add Data Mahasiswa</h2>
    <?php
    $nrp = $_POST["nrp"];
    $nama = $_POST["nama"];
    $alamat = $_POST["alamat"];
    $id_jur = $_POST["id_jur"];
    $conn = mysqli_connect("localhost","root","") or die("koneksi gagal");
    mysqli_select_db($conn,"mahasiswa");
    $sqlstr = "insert into mhs(nrp,nama,alamat,id_jur) values ('$nrp','$nama','$alamat','$id_jur')";
    $hasil = mysqli_query($conn,$sqlstr);
    mysqli_select_db($conn,"mahasiswa");
    $hasil = mysqli_query($conn,"select nama from jurusan where id_jur='$id_jur'");
    $row = mysqli_fetch_array($hasil);
    $id_jur = $row[0];
    echo "NRP : $nrp <br>";
    echo "Nama : $nama <br>";
    echo "Alamat : $alamat <br>";
    echo "Jurusan : $id_jur <br>";
    ?>
    <a href="utama.html"><b><i>Home</b></i></a>
    <a href="tampil.php"><b><i>Data Mahasiswa</b></i></a>
</body>

</html>