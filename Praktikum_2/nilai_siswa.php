<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<table class="table table-bordered text-center mt-2">
        <thead>
        <thead class="thead-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Lengkap</th>
                <th scope="col">Mata Kuliah</th>
                <th scope="col">UTS</th>
                <th scope="col">UAS</th>
                <th scope="col">TUGAS</th>
                <th scope="col">NILAI AKHIR</th>
                <th scope="col">KETERANGAN</th>
                <th scope="col">GRADE</th>
                <th scope="col">PREDIKAT</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $nomor = 1;

                $nilaiuts = (30/100) * $_POST['uts'];
                $nilaiuas = (35/100) * $_POST['uas'];
                $nilaitugas = (35/100) * $_POST['tugas'];
                $nilaiakhir = $nilaiuts+$nilaiuas+$nilaitugas;

                
            ?>
                <tr>
                    <td>    <?= $nomor      ?>     </td>
                    <td>    <?= $_POST['nama'] ?>   </td>
                    <td>    <?= $_POST['matkul'] ?>   </td>
                    <td>    <?= $_POST['uts']?>   </td>
                    <td>    <?= $_POST['uas']?> </td>
                    <td>    <?= $_POST['tugas']?>  </td>
                    <td>    <?= $nilaiakhir?>  </td>

                    <?php 
                    if($nilaiakhir>55){
                        echo '<td> Lulus </td>';
                    } else{
                        echo '<td> Tidak Lulus </td>';
                    }
                    ?>

                    <?php 
                    if($nilaiakhir>=0 && $nilaiakhir<=35.99){
                        echo '<td>E</td>';
                    }elseif($nilaiakhir>=36 && $nilaiakhir<=55.99){
                        echo '<td>D</td>';
                    }elseif($nilaiakhir>=56 && $nilaiakhir<=69.99){
                        echo '<td>C/td>';
                    }elseif($nilaiakhir>=70 && $nilaiakhir<=84.99){
                        echo '<td>B</td>';
                    }elseif($nilaiakhir>=85 && $nilaiakhir<=100){
                        echo '<td>A</td>';
                    }else{
                        echo '<td>I</td>';
                    }
                    ?>

                    <?php
                    switch ($nilaiakhir){
                        case $nilaiakhir>=0 && $nilaiakhir<=35:
                            echo '<td>Sangat Kurang</td>';
                            break;
                        case $nilaiakhir>=36 && $nilaiakhir<=55:
                            echo '<td>Kurang</td>';
                            break;
                        case $nilaiakhir>=56 && $nilaiakhir<=69:
                            echo '<td>Cukup</td>';
                            break;
                        case $nilaiakhir>=70 && $nilaiakhir<=84:
                            echo '<td>Memuaskan</td>';
                            break;
                        case $nilaiakhir>=85 && $nilaiakhir<=100:
                            echo '<td>Sangat Memuaskan</td>';
                            break;
                        default:
                        echo '<td>Tidak Tersedia</td>';
                    }
                    ?>
                </tr>
           
            <?php
                $nomor++;
            ?>

        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>