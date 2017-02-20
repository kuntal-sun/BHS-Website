<?php 
include_once'config.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
   	
    <meta name="description" content="Online hardware store of CHINESE diesel agricultural engines,Z170F,Z175F,MOTOR PUMPS,SHALLOW PIPES,SPARE PARTS" />
    <meta name="keywords" content="CHINESE DIESEL ENGINE,Z170F,R170A,SHALLOW PIPES,MOTOR PUMPS,BHS,BISWAS HARDWARE STORES,PLASSEY,NADIA,WEST BENGAL,INDIA,Online hardware stores" />
    <meta name="revisit-after" content="7 days" />
    <meta name="robots" content="index,follow" />
	
	<title>Home</title>
			
            
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
            
            
               
                    <!--Hide the hr img because of ugly borders in IE7. You can change the color of border-top to display a line -->
                    <!--[if lte IE 7]>

                        <style>
                    		hr { display:block; height:1px; border:0; border-top:1px solid #fff; margin:1em 0; padding:0; }
                            .grid-4{ width:22% }
                        </style>
                    <![endif]-->

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
                        <li><a href="admin_index.php" class="active">Home</a></li>
                        <li><a href="adm_manage_products_page.php">Manage Products</a></li>
                        <li><a href="adm_manage_stock_page.php">Manage Stocks</a></li>
                        <li><a href="show_chart_form.php">Statistics</a></li>
                        <li><a href="user_info.php">User Info</a></li>
                        <li><a href="adm_e_store_page.php">e-Store Control</a></li>
                    </ul>
                    
            
        </div><!--end of wrapper div-->    
	<div class="clear"></div> 
    
<!--========================================================================== Intro and FlexSlider =====================================================================================-->    

	<div class="wrapper">
		
		<?php 
		date_default_timezone_set("Asia/Kolkata");

	$dtd=date("Y-m-d");

	$mnth=date("m");
	$yer=date("Y");
	
	$q10=mysql_query("select * from monthly_category_sales where month='$mnth' and year='$yer'");
$count=mysql_num_rows($q10);

if($count>=1){
$a10[]="['category','total_sale']";
	
while ($r10=mysql_fetch_array($q10)) {
	$cate=$r10['category'];
	$nos=$r10['total_sale'];
	$a10[]="['".$cate."',".$nos."]";	
   }}

?>

    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
        	<?php echo(implode(",", $a10));?>
         
        ]);

        var options = {
          title: 'Performance Of This Month  by Category',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d1'));
        chart.draw(data, options);
      }
    </script>
  

  	 <div id="piechart_3d1" style="height: 300px;" ></div><br>
    
		
	<div class="grid-5 grid green">
		<h2>News Section</h2>
		<a href="adm_add_news.php" target="_blank"><h4>Want to Add News ?</h4></a>
		<a href="adm_remove_news.php" target="_blank"><h4>Want to View & Remove News ?</h4></a>
		
	</div>
			
	<div class="grid-6 grid green">
		<h2>Feedback Section</h2>
		<a href="adm_view_feedback.php" target="_blank"><h4>View Feedback</h4></a>
		<a href="adm_reply_feedback.php" target="_blank"><h4>Reply Feedback</h4></a>
		
	</div>
	
					
<div class="grid-5 grid green">
	<?php
	$qv=mysql_query("SELECT * FROM datewise_catagory_sellingprice WHERE date='$dtd'");
	$row99=mysql_fetch_array($qv);
	$tprce=$row99['total_price'];
	?>
	<h3 style="text-align: center;">Today's Sale:</h3>
	<h2 style="text-align: center;"><?php echo $tprce;?>र</h2>
	</div>
	
 	
 		
 		
 		
 		
 		
 		
 		
 				
		</div><!--end of wrapper-->
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