<html>
    <head>
        <title>Faktorial</title>
    </head>
    <body>
        <h1>Menghitung Faktorial</h1>
        <form name="" method="POST">
            <table>
                <tr>
                    <td>Masukkan Angka : </td>
                    <td><input type="text" name="angka" size="8"></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" name="hasil" value="Hasil"></td>
                </tr>
            </table>

            <?php
                error_reporting(0);
                if($_POST['hasil']!=''){
                    $a=$_POST['angka'];

                    function faktorial($a){
                        if($a<=1){
                            $a=1;
                            return $a;
                        }elseif($a>1){
                            for($b=0;$b<=$a;$b++){
                                $hasil=$a*faktorial($a-1);
                            }
                            return $hasil;
                        }
                    }
                    echo "Maka Faktorial dari " . "" . $a . "" . "adalah : " . "" . faktorial($a);
                }
            ?>
        </form>
    </body>
</html>