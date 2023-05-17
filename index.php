<?php
$koneksi = mysqli_connect("localhost", "root", "", "datateman");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Competible" content="IE=edge">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.8.0/chart.min.js" integrity="sha512-sW/w8s4RWTdFFSduOTGtk4isV1+190E/GghVffMA9XczdJ2MDzSzLEubKAs5h0wzgSJOQTRYyaz73L3d6RtJSg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<title>Data Teman</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
<style type="text/css">
    .wrapper{
         width: 800px;
         margin: 0 auto;
     }
     .page-header h2{
         margin-top: 0;
     }
     table tr td:last-child a{
         margin-right: 15px;
     }
</style>
<script type="text/javascript">
     $(document).ready(function(){
         $(‘[data-toggle=”tooltip”]’).tooltip();
     });
</script>
</head>

<body>
<div class="wrapper">
     <div class="container-fluid">
         <div class="row">
             <div class="col-md-12">
                 <div class="page-header clearfix">
                     <h2 class="pull-middle">Data Teman</h2>
                     <a href="AddTeman.php" class="btn btn-success left">Tambah Baru</a>
                     <a href="download.php" class="btn btn-success pull-right">Download Data</a>
                 </div>

                 <?php
                 require_once "config.php";
                 $sql = "SELECT * FROM teman";
                 if($result = mysqli_query($conn, $sql)){
                     if(mysqli_num_rows($result) > 0){
                         echo "<table class='table table-bordered table-striped'>";
                             echo "<thead>";
                                 echo "<tr>";
                                     echo "<th>ID</th>";
                                     echo "<th width='260px'>Nama</th>";
                                     echo "<th>Jenis Kelamin</th>";
                                     echo "<th>Usia</th>";
                                     echo "<th width='60px' >Aksi</th>";
                                 echo "</tr>";
                             echo "</thead>";
                             echo "<tbody>";

                             while($row = mysqli_fetch_array($result)){

                                 echo "<tr>";
                                    echo "<td>" . $row['id'] . "</td>";
                                     echo "<td>" . $row['nama'] . "</td>";
                                     echo "<td>" . $row['jns_kel'] . "</td>";
                                     echo "<td>" . $row['usia'] . " Tahun</td>";
                                     echo "<td>";
                                         echo "<a href='HapusTeman.php?no=". $row['id'] ."' title='Delete Record' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
                                     echo "</td>";
                                 echo "</tr>";
                             }
                             echo "</tbody>";
                         echo "</table>";
                         mysqli_free_result($result);
                     } else{
                         echo "<p class='lead'><em>No records were found.</em></p>";
                     }
                 } else{
                     echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                 }
                 mysqli_close($conn);
                 ?>
             </div>
         </div>
     </div>
</div>

    <div class="wrapper">
        <canvas style="height:20vh; width:20vw; margin:0 auto;" id="myChart"></canvas>
    </div>

    <script>
    const data = {
        labels: [
            'LAKI-LAKI',
            'PEREMPUAN'
        ],
        datasets: [{
            label: 'My First Dataset',
            data: [
                <?php
                    $qry = $koneksi->query("SELECT jns_kel FROM teman WHERE jns_kel='LAKI-LAKI'");
                    $resF = $qry->num_rows;
                    echo $resF;
                ?>,
                <?php
                    $qry = $koneksi->query("SELECT jns_kel FROM teman WHERE jns_kel='PEREMPUAN'");
                    $resF = $qry->num_rows;
                    echo $resF;
                ?>
            ],
            backgroundColor: [
                'rgb(255, 205, 86)',
                'rgb(255, 99, 132)'
            ],
            hoverOffset: 4
        }]
    };
    const config = {
        type: 'pie',
        data: data,
    };
    const myChart = new Chart(
        document.getElementById('myChart'),
        config
    )
</script>
</body>
</html>