<html lang="en">
    <head>
        <title>Chose Your Color</title>
    </head>
    <body>
        <form method="GET" action="">
            <label for="nama">Nama: </label>
            <input type="text" name="nama">
            <br><br>
            <label for="warna">Warna: </label>
            <select name="warna" id="">
                <option value="red">Red</option>
                <option value="green">Green</option>
                <option value="yellow">Yellow</option>
                <option value="blue">Blue</option>
                <option value="pink">Pink</option>
                <option value="white"></option>
                <option value="purple"></option>
            </select>
            <br>
            <br>
            <input type="submit" name="submit" value="Submit">
        </form>

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
                return ((strlen($nama)*700);
            }
        }
        echo "<font color='$_GET['warna']'>Nama : . $_GET['nama']<br>";
        echo "<font color='$_GET['warna']'>Harga total bet = "chose(. $_GET['nama']);
        
        ?>
    </body>
</html>