<?php
$server = 'localhost';
$username = 'root';
$password = '';
$dbname = 'web23';

$conn = mysqli_connect($server, $username, $password, $dbname);

$rows = [];
$query = $conn->query('select * from track_kalori order by tanggal desc');
// var_dump($query);

// die();

if($query->num_rows > 0) {
    while ($row = $query->fetch_assoc()) {
        $rows[] = [
            'id' => $row['id'],
            'tanggal' => $row['tanggal'],
            'berat' => $row['berat'],
            'kalori' => $row['kalori'],
        ];
    }
}

$conn->close();

?>
<html>
    <head>
        <title>Page 1</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-md-12 mb-5">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="mb-0 d-flex justify-content-between align-items-center">
                                Riwayat Kalori
                                <a href="form.php" class="btn btn-primary">Tambah</a>
                            </h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Tanggal</th>
                                        <th>Berat Badan</th>
                                        <th>Kalori</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $counter = 0; ?>
                                    <?php foreach($rows as $row): ?>
                                        <?php $counter++; ?>
                                        <tr>
                                            <td><?= $counter ?></td>
                                            <td><?= $row['tanggal'] ?></td>
                                            <td><?= $row['berat'] ?></td>
                                            <td><?= $row['kalori'] ?></td>
                                            <td>
                                                <a class="btn btn-secondary">Edit</a>
                                                <button class="btn btn-danger">Hapus</button>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-md-12 mb-5">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Diagram</h4>
                        </div>
                        <div class="card-body">
                            <div id="chart-container" style="height: 400px;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script>
        // json = javascript object notation
        var mydata = <?php echo json_encode($rows) ?>;
        mydata = mydata.map((item) => {
            item.tanggal = Date.parse(item.tanggal);
            // item.tanggal = new Date(item.tanggal);
            item.berat = Number(item.berat);
            item.kalori = Number(item.kalori);
            return item;
        });
        console.log(mydata);
        
        Highcharts.chart('chart-container', {
            chart: {
                // type: 'column'
                type: 'area'
            },
            title: {
                text: 'Tren Berat Badan dan Kalori Harian',
                align: 'left'
            },
            // subtitle: {
            //     text:
            //         'Source: <a target="_blank" ' +
            //         'href="https://www.indexmundi.com/agriculture/?commodity=corn">indexmundi</a>',
            //     align: 'left'
            // },
            // xAxis: {
            //     categories: ['USA', 'China', 'Brazil', 'EU', 'India', 'Russia'],
            //     crosshair: true,
            //     accessibility: {
            //         description: 'Countries'
            //     }
            // },
            xAxis: {
                type: 'datetime',
                // categories: ['Berat', 'Kalori'],
                // categories: mydata.map((item) => item.tanggal)
            },
            yAxis: {
                min: 0,
                // title: {
                //     text: '1000 metric tons (MT)'
                // }
            },
            // tooltip: {
            //     valueSuffix: ' (1000 MT)'
            // },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [
                {
                    name: 'Berat Badan',
                    // data: [406292, 260000, 107000, 68300, 27500, 14500]
                    // data: mydata.map((item) => item.berat)
                    data: mydata.map((item) => [item.tanggal, item.berat])
                },
                {
                    name: 'Kalori',
                    // data: [51086, 136000, 5500, 141000, 107180, 77000]
                    // data: mydata.map((item) => item.kalori)
                    data: mydata.map((item) => [item.tanggal, item.kalori])
                }
            ]
        });
    </script>
</html>