<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penerbangan | Fly High!</title>
    <link href="https://cdn.datatables.net/v/dt/dt-1.13.6/datatables.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <style>
        .main {
                background-image: url('https://wallpaperaccess.com/full/3101441.jpg'); /* Ganti dengan path gambar Anda */
                background-size: cover;
                background-position: center;
            }
        table {
            border-collapse: collapse;
            width: 100%;
            opacity: 0.8;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <div class="main w-80 d-flex align-items-center justify-content-center min-vh-100 text-light">
        <div class="container p-4">
            <table class="table" width="100%" id="table-jadwal">
                <thead class="table-dark">
                    <tr>
                        <th class="text-center">Airline</th>
                        <th class="text-center">Departure Airport</th>
                        <th class="text-center">Arrival Airport</th>
                        <th class="text-center">Base Price</th>
                        <th class="text-center">Tax</th>
                        <th class="text-center">Total Price</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $file = "data/data.json";
                    $dataJson = file_get_contents($file);
                    $all = json_decode($dataJson, true);

                    for ($i = 0; $i < count($all); $i++) {
                        echo "<tr class = 'tampilanRute'>";
                        echo "<td>" . $all[$i][0] . "</td>";
                        echo "<td style='text-align: center;'>" . $all[$i][1] . "</td>";
                        echo "<td style='text-align: center;'>" . $all[$i][2] . "</td>";
                        echo "<td style='text-align: center;'>" . $all[$i][3] . "</td>";
                        echo "<td style='text-align: center;'>" . $all[$i][4] . "</td>";
                        echo "<td style='text-align: center;'>" . $all[$i][5] . "</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
            <div class="button">
                <a href="index.php" class="btn btn-danger mb-4">Cancel</a>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/v/dt/dt-1.13.6/datatables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#table-jadwal').DataTable();
        });
    </script>
</body>
</html>
