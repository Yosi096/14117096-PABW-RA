<html>
    <head>
        <title>Biodata</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href=" css/bootstrap.min.css">
        <script src="js/jquery.min.js"></script> 
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <form method="POST" action="TM_7hasil.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="nama">Nama: </label>
                    <input type="text" name="nama" class="form-control" id="nama" placeholder="Enter nama">
                </div>
                <br>
                <div class="form-group">
                    <label for="alamat">Alamat: </label>
                    <input type="text" name="alamat" class="form-control" id="almt" placeholder="Enter alamat">
                </div>
                <label for="jk" class="mr-5 mt-4 mb-4">Jenis Kelamin: </label> <br>
                <div class="form-check-inline">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="jk" value="Pria">Laki-laki<br>
                        <input type="radio" class="form-check-input" name="jk" value="Wanita">Perempuan
                    </label>
                </div>
                <br>
                <div class="form-group">
                    <label for="goldar">Golongan Darah: </label>
                    <select class="form-control" name="drh" id="drh">
                        <option value="O">O</option>
                        <option value="B">B</option>
                        <option value="A">A</option>
                        <option value="AB">AB</option>
                    </select>
                </div>
                <br>
                <label for="" class="mr-5 mt-4 ">Hobby: </label>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" value="bola" name="hobi[]">Bermain Bola Kaki
                    </label>
                </div>
                <br>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" value="roda" name="hobi[]">Bermain sepatu roda
                    </label>
                </div>
                <div class=" form-check">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" value="Bernyanyi" name="hobi[]">Bernyanyi
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" value="ngoding" name="hobi[]">Ngoding
                    </label>
                </div>
                <br>
                <div class="form-group">
                    <label for="keterangan">Keterangan: </label>
                    <textarea type="text" name="ket" class="form-control" id="ket"></textarea>
                </div>
                <button type="submit" class="btn btn-primary" name="submit">
                    Save
                </button>
            </form>
    </div>
    </body>
</html>