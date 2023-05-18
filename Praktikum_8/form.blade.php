<!DOCTYPE html>
<html>
<head>
    <title>Form Pemeriksaan Kesehatan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <h1 class="mx-4">Form Pemeriksaan Kesehatan</h1>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 mx-2">
            <form>
                <div class="form-group row">
                    <label for="text" class="col-4 col-form-label">Nama</label> 
                    <div class="col-8">
                    <input id="text" name="text" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tgl_periksa" class="col-4 col-form-label">Tanggal pemeriksaan</label> 
                    <div class="col-8">
                    <input id="tgl_periksa" name="tgl_periksa" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tgl_lahir" class="col-4 col-form-label">Tanggal lahir/usia</label> 
                    <div class="col-8">
                    <input id="tgl_lahir" name="tgl_lahir" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-4">Jenis Kelamin</label> 
                    <div class="col-8">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="jns_kelamin" id="jns_kelamin_0" type="radio" class="custom-control-input" value="laki-laki"> 
                        <label for="jns_kelamin_0" class="custom-control-label">Laki-laki</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="jns_kelamin" id="jns_kelamin_1" type="radio" class="custom-control-input" value="perempuan"> 
                        <label for="jns_kelamin_1" class="custom-control-label">Perempuan</label>
                    </div>
                    </div>
                </div> 
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Jenis Tes</th>
                            <th scope="col">Hail Pemeriksaan</th>
                            <th scope="col">Normal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Tekanan darah</td>
                            <td></td>
                            <td>120/80 mmhg</td>
                        </tr>
                        <tr>
                            <td>Asam urat</td>
                            <td></td>
                            <td>Pria : < 7 mg/dl | Wanita: < 6 mg/dl</td>
                        </tr>
                        <tr>
                            <td>Kolesterol total</td>
                            <td></td>
                            <td>< 200 mg/dl</td>
                        </tr>
                        <tr>
                            <td>Gula darah</td>
                            <td></td>
                            <td>Puasa: 70-110 mg/dl
                                <br>2 jam setelah makan: 100-150 mg/dl
                                <br>Sewaktu/acak : 70-125 mg/dl</td>
                        </tr>
                    </tbody>
                </table>
            </form>
            </div>
        </div>
    </div>
</body>
</html>