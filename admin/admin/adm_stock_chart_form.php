<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
   	
    <meta name="description" content="Online hardware store of CHINESE diesel agricultural engines,Z170F,Z175F,MOTOR PUMPS,SHALLOW PIPES,SPARE PARTS" />
    <meta name="keywords" content="CHINESE DIESEL ENGINE,Z170F,R170A,SHALLOW PIPES,MOTOR PUMPS,BHS,BISWAS HARDWARE STORES,PLASSEY,NADIA,WEST BENGAL,INDIA,Online hardware stores" />
    <meta name="revisit-after" content="7 days" />
    <meta name="robots" content="index,follow" />
	
	<title> View Stock Chart</title>
			
            
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
				alert("Are you sure to view this chart?" );
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
                        <li><a href="adm_manage_stock_page.php"  class="active">Manage Stocks</a></li>
                        <li><a href="show_chart_form.php">Statistics</a></li>
                        <li><a href="user_info.php">User Info</a></li>
                        <li><a href="adm_e_store_page.php" >e-Store Control</a></li>
                    </ul>
                    
            
        </div><!--end of wrapper div-->    
	<div class="clear"></div> 
    
<!--========================================================================== Intro and FlexSlider =====================================================================================-->    

	<div class="wrapper">
		
	<div class="grid-16 grid grey"><h3>You can View Your Stock List through this Chart.</h3></div>
	<div class="grid-8 grid green">
		<div class="stocks">
    	<h1 style="font-family: Verdana;text-align: center;color: blue"> Total Stock Chart:</h1>
    	<form name="stocks" action="stocks_column_chart.php" method="post" style="font-size: 20px;font-family: Verdana;font-weight: medium;text-height: 10px;"onsubmit="myChart()" >
       Choose your produts category:<select name="category">
	<option value="">Select Category</option>
    <option value="Machinery">Machinery</option>
    <option value="Suction Pipes">Suction pipe</option>
    <option value="Suction Pumps">Suction pump</option>
    <option value="HYDRAULIC RAMS">Hydraulic Rams</option>
    <option value="FUEL HOSE  PIPES">Fuel Hose Pipes</option>
    </select><br><br><br>
    <input type="submit" value="Show Chart">
    </form>
    </div>
	</div>
	<div class="grid-6 grid">
     	<form action="adm_manage_stock_page.php">
    	 <input type="submit"  value="Back to Manage Stock">
    	   </form>
     </div>
		




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