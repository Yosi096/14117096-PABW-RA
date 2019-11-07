<HTML>
<HEAD>
    <title>Search Data</title>
</HEAD>
<BODY>
    <?php
    $cari = $_GET['nama'];
    $conn = mysqli_connect("localhost","root","");
    mysqli_select_db($conn,"mahasiswa");
    $sqlstr = "select * from mhs where nama like '%$cari%'";
    $hasil = mysqli_query($conn,$sqlstr);
    $jumlah = mysqli_num_rows($hasil);
    echo "<h3>Data ditemukan : $jumlah</h3>";
    while ($a=mysqli_fetch_row($hasil)) {
        echo "<br>NRP : $a[0]<br>";
        echo "Nama : $a[1]<br>";
        echo "Alamat : $a[2]<br>";
        echo "ID_Jurusan : $a[3]<br>";
        $sqlstr = "select nama from jurusan where id_jur='$a[3]'";
        $hsl = mysqli_fetch_row(mysqli_query($conn, $sqlstr));
        echo "Jurusan : $hsl[0]<br><br>";
    }
    ?>
    <a href="utama.html">Home</a>
</BODY>
</HTML>