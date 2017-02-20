<?php include_once'config.php'; 

$q2=mysql_query("select * from monthly_order_summary where Date='2014-03-31'");
$a2[]="['model_no','no_of_sales']";
while ($r2=mysql_fetch_array($q2)) {
	$category=$r2['Category'];
	$tno=$r2['Total_sale'];
	$a2[]="['".$category."',".$tno."]";	
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
        	<?php echo(implode(",", $a2));?>
         
        ]);

        var options = {
          title: 'My Daily Performance by category',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
  </body>
</html>