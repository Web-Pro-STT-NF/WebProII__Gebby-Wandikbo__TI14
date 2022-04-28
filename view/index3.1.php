
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
        <div class="row bg-light text-center p-3">
            <div class="col-12">
            <h1>OOP - 1</h1>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
            <?php
                include_once 'index3.php';

                // Object
                $k_one = new Anjing('Pitbul', '12 Bulan', 'Brown', 1341);
                $k_two = new Anjing('Husky', '2 Tahun', 'Black', 2631);
                $k_three = new Anjing('Wolvy', '10 Bulan', 'White', 8192);
                $k_four = new Anjing('Helder', '4 Tahun', 'Silver', 6192);
                

                // Cetak
                echo('<h3>Cetak Variabel</h3>');
                echo('<li>'. $k_one->nama);
                echo('<li>'. $k_two->nama);
                echo('<li>'. $k_three->nama);
                echo('<li>'. $k_four->nama);
                echo('<hr>');
                echo('<h3>Cetak Method/Function</h3>');
                echo('<li>'. $k_one-> getMakan());
                echo('<li>'. $k_two-> getTidur());
                echo('<li>'. $k_three-> getFvckin());
                echo('<li>'. $k_four-> getTawuran());   
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