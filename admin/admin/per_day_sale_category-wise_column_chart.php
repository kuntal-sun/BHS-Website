<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
   	
    <meta name="description" content="Online hardware store of CHINESE diesel agricultural engines,Z170F,Z175F,MOTOR PUMPS,SHALLOW PIPES,SPARE PARTS" />
    <meta name="keywords" content="CHINESE DIESEL ENGINE,Z170F,R170A,SHALLOW PIPES,MOTOR PUMPS,BHS,BISWAS HARDWARE STORES,PLASSEY,NADIA,WEST BENGAL,INDIA,Online hardware stores" />
    <meta name="revisit-after" content="7 days" />
    <meta name="robots" content="index,follow" />
	
	<title> Product-Qty Sales Chart</title>
			
            
            <link rel="stylesheet" href="css/inuit.css" />
            <link rel="stylesheet" href="css/fluid-grid16-1100px.css" />
            <link rel="stylesheet" href="css/eve-styles.css" />
            <link rel="shortcut icon" href="icon.png" />
            <link rel="apple-touch-icon-precomposed" href="img/icon.png" />
            
            <script src="js/respond-min.js" type="text/javascript"></script>
            <script src="js/jquery-1.11.0.min.js"></script>
            <script>window.jQuery || document.write('<script src="scripts/jquery164min.js">\x3C/script>')</script><!--local fallback for JQuery-->
			<script src="js/jquery.flexslider-min.js" type="text/javascript"></script>
            <link rel="stylesheet" href="css/flexslider.css" />
            <script type="text/javascript" src="https://www.google.com/jsapi"></script>
            
     <script type="text/javascript" src="https://www.google.com/jsapi"></script>

  </head>
<!--===============================================================  Logo, social and menu =====================================================================================--> 

<body>
	<div class="wrapper">	
                    <a href="admin_index.php" id="logo"><img src="img/logo.png" alt="something" />
                      <h1 class="accessibility">BHS</h1></a>
                   
                   <!--These are just samples, use your own icons. If you use larger ones, make sure too change the css-file to fit them in.
                     
                     Dont´t forget to place your links -->
                    <div style="position: absolute;top:20px;right:280px;">
                    	<h2>BHS Admin Area</h2>
                    </div>
                    
                    
                    <div class="social">

                    <a href="#" title="vcard"><img src="img/vcard.png" width="20" height="20" alt="vcard"></a>
               
                    </div>
                 
                    
                   <ul id="nav" class="main">
                        <li><a href="admin_index.php">Home</a></li>
                        <li><a href="adm_manage_products_page.php" >Manage Products</a></li>
                        <li><a href="adm_manage_stock_page.php">Manage Stocks</a></li>
                        <li><a href="show_chart_form.php" class="active">Statistics</a></li>
                        <li><a href="user_info.php">User Info</a></li>
                        <li><a href="adm_e_store_page.php" >e-Store Control</a></li>
                    </ul>
                    
            
        </div><!--end of wrapper div-->    
	<div class="clear"></div> 
    
<!--========================================================================== Intro and FlexSlider =====================================================================================-->    

	<div class="wrapper">
		
		<?php include_once'config.php'; 


$td=$_POST['date'];

$ct13=$_POST['category'];

$q13=mysql_query("select * from order_summary where Date='$td' and Category='$ct13'");
$count=mysql_num_rows($q13);
if($count>=1){
$a13[]="['model_no','no_of_sales']";
while ($r13=mysql_fetch_array($q13)) {
	$model=$r13['Model_no'];
	$no=$r13['No_of_sales'];
	$a13[]="['".$model."',".$no."]";
   }

?>
 <script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
        	<?php echo(implode(",", $a13));?>
          
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
		
		
    <div id="chart_div" style="width: 900px; height: 500px;"></div>
    <div class="grid-5 grid green"><h5>Category :<?php echo $ct13;?></h5><h6>Date:<?php echo $td;?></h6></div>

    	<form action="show_chart_form.php">
    		<input type="submit"  value="Back to View Chart">
    	</form>
    	<?php 
    	}
	  
else {
	     echo '<p class="message error">Requested data not found in our database!!</p>';
	     echo '<form action="show_chart_form.php">';
    	 echo '<input type="submit"  value="Back to View Chart">';
    	 echo '</form>';
}
    	
    	?>
    
    
 </div><!--end of wrapper-->

<!--========================================================================== Footer =====================================================================================-->     
	<div class="clear"></div>
		<hr class="clear">
<!--========================================================================== Footer =====================================================================================-->     
	<div class="wrapper">
					<div id="footer">
            	
                
                			<div class="grids">
                                <div class="grid-5 grid text-center">
                                    <p>&copy; BHS 2014 </p>
                                </div>
                                <div class="grid-6 grid text-center">
                                    <p>Online Hardware Store</p>
                                </div>
                                
                                <div class="grid-5 grid text-center">
                                  <p>Devoloped by :<a href="https://www.facebook.com/kuntal.biswas.14?ref=tn_tnmn" title="Kuntal" target="_blank">Kuntal</a> & <a href="https://www.facebook.com/sayak.a.ghosh?fref=ts" title="Sayak" target="_blank">Sayak</a></p>
                                </div>
                                
                           </div><!--end of grids-->
                   </div><!--end of footer-->
		   </div><!--end of wrapper-->		
</body>
</html>