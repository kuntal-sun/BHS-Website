<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
   	
    <meta name="description" content="Online hardware store of CHINESE diesel agricultural engines,Z170F,Z175F,MOTOR PUMPS,SHALLOW PIPES,SPARE PARTS" />
    <meta name="keywords" content="CHINESE DIESEL ENGINE,Z170F,R170A,SHALLOW PIPES,MOTOR PUMPS,BHS,BISWAS HARDWARE STORES,PLASSEY,NADIA,WEST BENGAL,INDIA,Online hardware stores" />
    <meta name="revisit-after" content="7 days" />
    <meta name="robots" content="index,follow" />
	
	<title>Stats with Chart</title>
			
            
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
            
	<script type="text/javascript">
			function myChart(){
				alert("Are you sure to view this chart ?");
                }
</script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.9.1.js"></script>
<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<link rel="stylesheet" href="/resources/demos/style.css">
<script>
$(function() {

$( "#datepicker" ).datepicker({ dateFormat: "yy-mm-dd" }).val()
$( "#datepicker1" ).datepicker({ dateFormat: "yy-mm-dd" }).val()
});

</script>
 
               
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

<div class="grid-16 grid grey"><h1>Here you can FIND all SALES and STOCK related Statistics</h1></div>

<div class="grid-16 grid green">
   <div class="perdaysale">
 	<h3>Product-Quantity Sales Chart  (Date & Catagory-wise)</h3>
<form name="perdaysale" action="per_day_sale_category-wise_column_chart.php" method="post" style="font-size: 20px;font-family: Verdana;font-weight: medium;text-height: 10px;"  onsubmit="myChart()" >
       Choose your produts category:<select name="category" required="required">
	<option value="">Select Category</option>
    <option value="Machinery">Machinery</option>
    <option value="Suction Pipes">Suction pipe</option>
    <option value="Suction Pumps">Suction pump</option>
    <option value="HYDRAULIC RAMS">Hydraulic Rams</option>
    <option value="FUEL HOSE  PIPES">Fuel Hose Pipes</option>
    </select><br><br>
    DATE:<input type="text" id="datepicker" name="date" size="30" required="required">    
    <input type="submit" value="Show Chart">
    </form>
    </div></div>
    <hr class="clear" />
    
    <div class="grid-16 grid grey">
    <div class="totalsale">
    	<h3>Catagory-Quantity Sales Chart  (Date-wise)</h3>
    	<form name="totalsale" action="total_sales_pie_chart.php" method="post" style="font-size: 20px;font-family: Verdana;font-weight: medium;text-height: 10px;"  onsubmit="myChart()" >
      DATE:<input type="text" id="datepicker1" name="date" size="30" required="required">
    <input type="submit" value="Show Chart">
    </form>
    </div></div>
    <hr class="clear" />
    
    <div class="grid-16 grid green">
    <div class="stocks">
    	<h3> Total Stock Chart</h3>
    	<form name="stocks" action="stat_stocks_column_chart.php" method="post" style="font-size: 20px;font-family: Verdana;font-weight: medium;text-height: 10px;"onsubmit="myChart()" >
       Choose your produts category:<select name="category" required="required">
	<option value="">Select Category</option>
    <option value="Machinery">Machinery</option>
    <option value="Suction Pipes">Suction pipe</option>
    <option value="Suction Pumps">Suction pump</option>
    <option value="HYDRAULIC RAMS">Hydraulic Rams</option>
    <option value="FUEL HOSE  PIPES">Fuel Hose Pipes</option>
    </select><br><br>
    <input type="submit" value="Show Chart">
    </form>
    </div></div>
    <hr class="clear" />
    <div class="grid-16 grid grey">
    <div class="monthly_performance">
    	<h3> Monthly Performance Chart</h3>
    	<form name="monthly_performance" action="monthper_pie_chart.php" method="post" style="font-size: 20px;font-family: Verdana;font-weight: medium;text-height: 10px;" onsubmit="myChart()" >
       Choose a MONTH and YEAR to see our performance:<select name="month" required="required">
	<option value="">Select Month</option>
    <option value="1">January</option>
    <option value="2">February</option>
    <option value="3">March</option>
    <option value="4">April</option>
    <option value="5">May</option>
    <option value="6">June</option>
    <option value="7">July</option>
    <option value="8">August</option>
    <option value="9">September</option>
    <option value="10">October</option>
    <option value="11">November</option>
    <option value="12">December</option>
    </select>
    <select name="year" required="required">
	<option value="">Select Year</option>
    <option value="2005">2005</option>
    <option value="2006">2006</option>
    <option value="2007">2007</option>
    <option value="2008">2008</option>
    <option value="2009">2009</option>
    <option value="2010">2010</option>
    <option value="2012">2011</option>
    <option value="2012">2012</option>
    <option value="2013">2013</option>
    <option value="2014">2014</option>
    <option value="2015">2015</option>
    <option value="2016">2016</option>
    </select><br><br>
    <input type="submit" value="Show Chart">
    </form>
    </div></div>
    <hr class="clear" />
    
    
    </div><!--end of wrapper-->
    <div class="clear"></div>
	
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