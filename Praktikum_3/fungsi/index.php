<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <div class="container-fluid mt-2">
    <h3>Form Nilai Siswa</h3>
    <hr>
        <div class="row mt-2">
            <div class="col-md-6 offset-md-3">
                <form method="POST" action="hasil.php">
                    <div class="form-group row">
                        <label for="nama" class="col-4 col-form-label" require>Nama Lengkap</label> 
                        <div class="col-8">
                        <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
                        <div class="col-8">
                        <select id="matkul" name="matkul" class="custom-select" required>
                            <option value="">Pilih Mata Kuliah</option>
                            <option value="DDP">DDP</option>
                            <option value="PemWeb">PemWeb</option>
                            <option value="BasDat">BasDat</option>
                        </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="uts" class="col-4 col-form-label">Nilai UTS</label> 
                        <div class="col-8">
                        <input id="uts" name="uts" placeholder="Nilai UTS" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="uas" class="col-4 col-form-label">Nilai UAS</label> 
                        <div class="col-8">
                        <input id="uas" name="uas" placeholder="Nilai UAS" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tugas" class="col-4 col-form-label">Nilai Tugas</label> 
                        <div class="col-8">
                        <input id="tugas" name="tugas" placeholder="Nilai Tugas" type="text" class="form-control">
                        </div>
                    </div> 
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                        <button name="submit" type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>