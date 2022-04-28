
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container border mt-5">
        <div class="row text-center bg-light">
            <div class="col-12 p-3">
                <h1>OOP - 2</h1>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12">
            <?php
                require_once 'index4.php';

                // Object 
                $k00 = new Kucing('Catman', 5, 70, 0);
                $k000 = new Kucing('CattyMan', 7, 55, 0);
                $k0000 = new Kucing('Catwoman', 9, 80, 0);



                // Print
                echo('<h3>Cetak Variabel</h3>');
                echo('<li>'. $k00->nama.' - Energi '. $k00->energi);
                echo('<li>'. $k000->nama.' - Energi '. $k000->energi);
                echo('<li>'. $k0000->nama.' - Energi '. $k0000->energi);
                echo('<hr>');
                echo('<h3>Cetak Method/Function</h3>');
                echo('<li>'. $k00->tidur());
                echo('<li>'. $k000->makan());
                echo('<li>'. $k0000->lari());
            ?>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>




