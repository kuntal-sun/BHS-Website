<?php include_once'config.php'; 

$query=mysql_query("select * from order_summary order by Date DESC");
$array[]="['model_no','no_of_sales']";
while ($row=mysql_fetch_array($query)) {
	$date=$row['Date'];	
	$model=$row['Model_no'];
	$no=$row['No_of_sales'];
	$array[]="['".$date."',".$no."',".$model."]";
}
?>
<html>
  <head>
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          <?php echo(implode(",", $array));?>
        ]);

        var options = {
          title: 'Monthly Performance'
        };

        var chart = new google.visualization.LineChart(document.getElementById('chart_div_line'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="chart_div_line" style="width: 900px; height: 500px;"></div>
  </body>
</html>