<html>
    <head>
        <title>Koneksi Database MySQL</title>
    </head>
    <body>
        <h1>Demo Koneksi Database</h1>
        <?php
            $conn=mysqli_connect("localhost","root","");
            if($conn){
                echo "Terkoneksi";
            }else{
                "Server not connected";
            }
        ?>
    </body>
</html>