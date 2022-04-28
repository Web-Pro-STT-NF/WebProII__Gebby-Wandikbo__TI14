<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai POST - Praktikum 0.3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <div class="container card mt-3">
        <div class="row">
            <div class="col-12 bg-dark text-light text-center">
                <p><b><h3>Method POST</h3></b></p>
            </div>
        </div>
        <div class="row pt-3">
            <div class="col-12">
                <p>Form Nilai Siswa</p>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form method="POST" action="index2.1.php">
                    <div class="form-group row ">
                        <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
                        <div class="col-5">
                        <input id="nama" name="nama" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
                        <div class="col-5">
                        <select id="matkul" name="matkul" class="custom-select">
                            <option value="Dasar - Dasar Pemogrraman">Dasar - Dasar Pemogrraman</option>
                            <option value="Pemograman Web">Pemograman Web</option>
                            <option value="Jaringan Komputer">Jaringan Komputer</option>
                        </select>
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label> 
                        <div class="col-5">
                        <input id="nilai_uts" name="nilai_uts" type="number" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label> 
                        <div class="col-5">
                        <input id="nilai_uas" name="nilai_uas" type="number" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas</label> 
                        <div class="col-5">
                        <input id="nilai_tugas" name="nilai_tugas" type="number" class="form-control">
                        </div>
                    </div> 
                    <div class="form-group row ">
                        <div class="offset-4 col-5">
                        <button name="proses" type="submit" class="btn btn-dark outline-light">Kirim</button>
                        </div>
                    </div>
                </form>




                



            </div>
        </div>
        <div class="row">
            <div class="col-12 bg-dark text-light pt-3 text-left">
                <p>Develop by Mahasiswa STT-NF</p>
            </div>
        </div>
    </div>
</body>
</html>