<?php include_once'config.php'; 

$query=mysql_query("select * from order_summary order by Date DESC");
$array[]="['date',model_no','no_of_sales']";
while ($row=mysql_fetch_array($query)) {
	$date=$row['Date'];	
	$model=$row['Model_no'];
	$no=$row['No_of_sales'];
	$array[]="['".$date."',".$model."',".$no."]";
	
}
print_r($array);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title>
      Google Visualization API Sample
    </title>
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load('visualization', '1', {packages: ['corechart']});
    </script>
    <script type="text/javascript">
      function drawVisualization() {
        // Some raw data (not necessarily accurate)
        var data = google.visualization.arrayToDataTable([
          <?php echo(implode(",", $array));?>
        ]);

        var options = {
          title : 'Monthly Selling',
          vAxis: {title: "NO of Sales"},
          hAxis.format:{format:'MMM d, y'},
          //hAxis: { ticks: [$array[0], {v:$array[2], f:"$array[1]"] },
          seriesType: "bars",
          series: {: {type: "line"}}
        };

        var chart = new google.visualization.ComboChart(document.getElementById('chart_div_combo'));
        chart.draw(data, options);
      }
      google.setOnLoadCallback(drawVisualization);
    </script>
  </head>
  <body>
    <div id="chart_div_combo" style="width: 1000px; height: 900px;"></div>
  </body>
</html>