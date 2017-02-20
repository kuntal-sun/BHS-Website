<?php include_once'config.php'; 

date_default_timezone_set("Asia/Kolkata");
$td=date('Y-m-d');
echo $td;
$q1=mysql_query("select * from order_summary where Date='$td'");
$a1[]="['model_no','no_of_sales']";
while ($r1=mysql_fetch_array($q1)) {
	$model=$r1['Model_no'];
	$no=$r1['No_of_sales'];
	$a1[]="['".$model."',".$no."]";
	
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
        	<?php echo(implode(",", $a1));?>
          
        ]);

        var options = {
          title: 'Per Day Sale',
          hAxis: {title: 'Model No', titleTextStyle: {color: 'red'}}
          //vAxis: {title: 'Sales', titleTextStyle: {color: 'blue'}}
        };

        var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="chart_div" style="width: 900px; height: 500px;"></div>
  </body>
</html>