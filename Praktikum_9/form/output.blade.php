<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hasil</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
    <h1 class="mx-5 my-4">Hasil Input</h1>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 mx-2">
                <ul>
                    <li>Nama : {{ $nama }}</li>
                    <li>Email : {{ $email }}</li>
                    <li>Lokasi : {{ $lokasi }}</li>
                    <li>Jenis Kelamin : {{ $jns_kelamin }}</li>
                    <li>Skill : @foreach ($skill as $selectedSkill)
                                    {{ $selectedSkill }}
                                @endforeach       
                    </li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>