<!DOCTYPE html>
<html lang="en">
<head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['', 'Comenzi acceptate', 'Comenzi anulate', 'Total comenzi'],
          ['',  0, 0, 0],
          ['',  0, 0, 0],
          ['',  4, 1, 5],
          ['',  1, 1, 4],
          ['',  2, 0, 3],
          ['',  1, 0, 1],
          ['',  10, 0, 10],
          ['',  6, 6, 0],
          ['',  0, 0, 0],
          ['',  0, 0, 0],
          ['',  4, 3, 5],
          ['',  3, 3, 3],
          ['',  1, 0, 1],
          ['',  0, 0, 0],
          ['',  0, 0, 0],
          ['',  0, 0, 0],


        ]);

        var options = {
          curveType: 'function',
          legend: { position: 'top' },
          colors: ['#00D814', '#CB0D0D', '#000000'],
          
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>
    <?php require_once "design/dependecies.php"; ?>
</head>
<body>
<?php require_once "design/nav.php";?>
<section class="chart-container padding-all flex column not-fullscreen">
    <h2 class="title">Analytics</h2>
    <div id="curve_chart" style="width: 100%; height: 100%; min-height: 700px"></div>
</section>

<section class="analytics-promovare padding-all not-fullscreen">
    <h2 class="title">Analytics Promovare</h2>
    <div class="box-up flex row">
        <div class="box flex column">
            <span class="blue-color margin20">persoane care ti-au accesat profilul</span>
            <span class="title blue-color">12</span>
        </div>
        <div class="box flex column">
            <span class="blue-color margin20">vizualizări în pagină</span>
            <span class="title blue-color">87</span>
        </div>
        <div class="box flex column">
            <span class="blue-color margin20">persoane care te-au contactat</span>
            <span class="title blue-color">4</span>
        </div>
        <div class="box flex column">
            <span class="blue-color margin20">zile rămase de promovare</span>
            <span   class="title blue-color">2</span>
        </div>
    </div>
</section>
<?php require_once "design/footer-not.php";?>
</body>
</html>