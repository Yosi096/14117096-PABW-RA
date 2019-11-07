<HTML>

<HEAD>
    <title>Delete Data</title>
</HEAD>

<BODY>
    <h2>Delete Data Mahasiswa</h2>
    <?php
    $del = $_POST['nrp'];
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn,"mahasiswa");
    $sqlstr = "delete from mhs where nrp='$del'";
    $hasil = mysqli_query($conn, $sqlstr) or die(mysqli_error());
    echo "<h3>Data dengan NRP : $del terhapus</h3>";
    ?>
    <a href="utama.html"><b><i>Home</b></i></a>
    <a href="tampil.php"><b><i>Data Mahasiswa</b></i></a>
</BODY>

</HTML>