<?php
$tech1='chart';
$tech2='charset';
$db = mysqli_connect("localhost","root","","sp");

// fetching data from database
$q = mysqli_query($db, "SELECT klabel,kvalue FROM stackprobedb WHERE klabel=$tech1 OR klabel=$tech2");
echo 'ho';


if($q){
    $chart_data[] = ["klabel", "kvalue"];
    while($pie_data = mysqli_fetch_assoc($q)){
        //settype($pie_data["value"], "int");
       $chart_data [] = [$pie_data["klabel"], $pie_data["kvalue"]];
    }
    echo json_encode($chart_data);
}else{
    echo "Fail";
}

?>


<html>
<head>
<style>
 .chart {
  width: 100%; 
  min-height: 450px;
}
</style>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!--  <script src="https://www.google.com/jsapi"></script>--->
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

            var data = google.visualization.arrayToDataTable(/*[
                ['Task', 'Hours per Day'],
                ['Work',     50],
                ['Eat',      2],
                ['Commute',  2],
                ['Watch TV', 2],
                ['Sleep',    7]
            ]*/ <?php echo json_encode($chart_data); ?>   );

            var options = {
                title: 'Fruits Data',
                is3D: true
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart'));

            chart.draw(data, options);
        }
    
    $(window).resize(function(){
          drawChart();
        });
    
    </script>
</head>
<body>
<div id="piechart" class="chart"></div>
</body>
</html>
