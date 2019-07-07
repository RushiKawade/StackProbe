<?php 

$tech1=strtolower($_POST['tech1']);
$tech2=strtolower($_POST['tech2']); 

 $connect = mysqli_connect("localhost", "root", "", "sp");  
 $query = "SELECT klabel,kvalue FROM stackprobedb WHERE klabel IN ('$tech1', '$tech2')";  
 $result = mysqli_query($connect, $query);  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Comparision beetween 2 Techs</title>  
           <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['Techs', 'Ques'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["klabel"]."', ".$row["kvalue"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Percentage of no of questions asked ',  
                      is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                chart.draw(data, options);  
           }  
           </script>  
      </head>  
      <body>  
           <br /><br />  
           <div style="width:900px;">  
                <h3 align="center">Comparison beetween two technology</h3>  
                <br />  
                <div id="piechart" style="width: 900px; height: 500px;"></div>  
           </div>  
      </body>  
 </html>  
