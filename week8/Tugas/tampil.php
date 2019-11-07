
<html>
<head>
    <title>Add Data</title>
</head>
<body>
    <h3>Daftar Data Mahasiswa</h3>
    <?php
        $conn = mysqli_connect("localhost","root","");
        mysqli_select_db($conn,"mahasiswa");
        $hasil = mysqli_query($conn,"select * from mhs");
        $jumlah = mysqli_num_rows($hasil);
        echo "Jumlah Mahasiswa : $jumlah";
        $a=1;
        while($baris = mysqli_fetch_array($hasil)){
            echo "<br>";
            echo "Data : $a";
            echo "<br>";
            echo "NRP : ";
            echo $baris[0];
            echo "<br>";
            echo "Nama : ";
            echo $baris[1];
            echo "<br>";
            echo "Alamat : ";
            echo $baris[2];
            $a++;
        }
    ?>
    <br><br>
    <a href="utama.html"><b><i>Home</b></i></a>
</body>

</html>