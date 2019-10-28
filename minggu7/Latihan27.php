<?php
    if(isset($_GET['submit'])){
        $na=$_GET['nama'];
        $wa=$_GET['warna'];
    }

    function chose($nama){
        if(strlen($nama=1 && $nama<=10)){
            return ((strlen($nama))*300);
        }elseif(strlen($nama=11 && $nama<=20)){
            return ((strlen($nama))*500);
        }else{
            return ((strlen($nama>20))*700);
        }
    }
      echo "<font color='$_GET['warna']'>Nama : . $_GET['nama']<br>";
      echo "<font color='$_GET['warna']'>Harga total bet = "chose(. $_GET['nama']);
      
?>