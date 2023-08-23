<?php 
$file = "./data/data.json";
$dataJson = file_get_contents($file);
$all = json_decode($dataJson, true);

// array
$BandaraAsal = [
    'Soekarno-Hatta (CGK)', 
    'Husein Sastranegara (BDO)', 
    'Abdul Rachman Saleh (MLG)', '
    Juanda (SUB)'
];

$BandaraTujuan = [
    'Ngurah Rai (DPS)', 
    'Hasanuddin (UPG)', 
    'Inanwatan (INX)', 
    'Sultan Iskandar Muda (BTJ)'
];

$pajakBandaraAsal = [
    'Soekarno-Hatta (CGK)'      => 50000, 
    'Husein Sastranegara (BDO)' => 30000,
    'Abdul Rachman Saleh (MLG)' => 40000,
    'Juanda (SUB)'              => 40000
];

$pajakBandaraTujuan = [
    'Ngurah Rai (DPS)'              => 80000,
    'Hasanuddin (UPG)'              => 70000,
    'Inanwatan (INX)'               => 90000,
    'Sultan Iskandar Muda (BTJ)'    => 70000
];

// fungsi menghitung pajak bandara
function hitungPajak($BandaraAsal, $BandaraTujuan) {

    global $pajakBandaraAsal, $pajakBandaraTujuan;

    //pajak bandara awal
    foreach ($pajakBandaraAsal as $taxdeparture => $departure_value){
        if($BandaraAsal == $taxdeparture){
            $value1 = $departure_value;
        }
    }

    //pajak bandara tujuan
    foreach($pajakBandaraTujuan as $taxdestinate => $destinate_value){
        if($BandaraTujuan == $taxdestinate){
            $value2 = $destinate_value;
        }
    }

    return $value1 + $value2;

    // $totalPajak = $pajakBandaraAsal[$BandaraAsal] + $pajakBandaraTujuan[$BandaraTujuan];
    // return $totalPajak;
}

// fungsi menghitung total biaya penerbangan
function totalBiaya($hitungPajak, $hargaTiket){
    return $hitungPajak + $hargaTiket;
}

// check request method
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = [];
    $data['maskapai']       = $_POST['maskapai'];
    $data['departure']      = $_POST['departure'];
    $data['destinate']      = $_POST['destinate'];
    $data['harga']          = $_POST['harga'];
    $data['totalPajak']     = hitungPajak($data['departure'], $data['destinate']);
    $data['totalHarga']     = $data['totalPajak'] + $data['harga'];

    // membaca data dari file json
    $existData = [];
    $file = './data/data.json';

    // cek file data.json
    if (file_exists($file)) {
        $existData = json_decode(file_get_contents($file), true);
    }

    // menambahkan data baru ke dalam array data yang sudah ada
    $existData[] = $data;

    // menyimpan kembali data ke dalam berkas JSON
    file_put_contents($file, json_encode($existData, JSON_PRETTY_PRINT));
}

?>



<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Daftar | Fly High!</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <style>
            .main {
                background-image: url('https://wallpaperaccess.com/full/3101441.jpg'); /* Ganti dengan path gambar Anda */
                background-size: cover;
                background-position: center;
            }
        </style>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </head>
    <body>
        <div class="main w-80 d-flex align-items-center justify-content-center min-vh-100">
            <div class="container w-50 text-center">

                <h1 class="text-center text-light">
                    Fly High!
                </h1>
                <h5 class="text-center fst-italic mb-4 text-light">
                    Jadwalkan Penerbanganmu menggapai masa depan
                </h5> 
                
                <div class="card text-bg-light bg-opacity-75">
                    <h5 class="card-header">Pendaftaran Penumpang</h5>
                    <div class="row p-2">
                        <div class="card-body">
                            <form action="daftar.php" method="post" id="flight-form">
                                <div class="row">
                                    <div class="col-md-6">

                                        <!-- Pilih Bandara Awal -->
                                        <div class="mb-3 text-start">
                                            <label for="exampleInputDeparture" class="form-label">Bandara Awal</label>
                                            <select class="form-select" name="departure" aria-label="Default select example" required>
                                                <option value="" selected>Pilih Bandara Awal</option>
                                                <?php foreach ($BandaraAsal as $departure) {
                                                    echo "<option value='" . $departure . "'>" . $departure . "</option>";
                                                    }
                                                ?>
                                            </select>
                                        </div>

                                        <!-- Bandara Tujuan -->
                                        <div class="mb-3 text-start">
                                            <label for="exampleInputDestination" class="form-label">Bandara Tujuan</label>
                                            <select class="form-select" name="destinate" aria-label="Default select example" required>
                                                <option value="" selected>Pilih Bandara Tujuan</option>
                                                <?php foreach ($BandaraTujuan as $arrival) {
                                                    echo "<option value='" . $arrival . "'>" . $arrival . "</option>";
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">

                                        <!-- Pilih Maskapai -->
                                        <div class="mb-3 text-start">
                                            <label for="exampleInputPlane" class="form-label">Maskapai</label>
                                            <select class="form-select" aria-label="Default select example" name="maskapai" required>
                                                <option selected>Pilih Maskapai</option>
                                                <option value="Adam Air">Adam Air</option>
                                                <option value="Batik Air">Batik Air</option>
                                                <option value="Citilink">Citilink</option>
                                                <option value="Garuda Indonesia">Garuda Indonesia</option>
                                            </select>
                                        </div>

                                        <!-- Harga Tiket -->
                                        <div class="mb-3 text-start">
                                            <label for="exampleInputTiket" class="form-label">Harga Tiket</label>
                                            <select class="form-select" aria-label="Default select example" name="harga" required>
                                                <option selected>Pilih Kelas</option>
                                                <option value="500000">Ekonomi &#40; Rp500.000 &#41;</option>
                                                <option value="700000">Bisnis &#40; Rp700.00 &#41;</option>
                                                <option value="1000000">First Class &#40; Rp1.000.000 &#41;</option>
                                            </select>
                                            <!-- <input type="text" class="form-control" id="exampleInputTiket" name="harga" aria-describedby="tiketHelp"> -->
                                        </div>

                                    </div>
                                </div>

                                <div class="button">
                                    <a href="index.php" class="btn btn-danger mb-4">Cancel</a>
                                    <button type="submit" name="submit" class="btn btn-primary mb-4" id="fly-button">Let's Fly!</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- create data -->
        <?php 
        if (isset($_POST['submit'])) {
            $maskapai = $_POST['maskapai'];
            $departure = $_POST['departure'];
            $destinate = $_POST['destinate'];
            $hargaTiket = $_POST['harga'];
            $totalTax = hitungPajak($departure, $destinate);
            $totalTiket = totalBiaya($totalTax, $hargaTiket) ;

            $rutePenerbangan = [$maskapai, $departure, $destinate, $hargaTiket, $totalTax, $totalTiket];
            array_push($all, $rutePenerbangan);
            array_multisort($all, SORT_ASC);
            $dataJson = json_encode($all, JSON_PRETTY_PRINT);
            file_put_contents($file, $dataJson);
        }
        ?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            $('#fly-button').on('click', function(){
                Swal.fire(
            'Datamu sudah masuk!',
            '<a href="jadwal.php">Cek Penerbanganmu</a>',
            'success'
            )
            })
        </script>
    </body>
</html>