<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
   	
    <meta name="description" content="Online hardware store of CHINESE diesel agricultural engines,Z170F,Z175F,MOTOR PUMPS,SHALLOW PIPES,SPARE PARTS" />
    <meta name="keywords" content="CHINESE DIESEL ENGINE,Z170F,R170A,SHALLOW PIPES,MOTOR PUMPS,BHS,BISWAS HARDWARE STORES,PLASSEY,NADIA,WEST BENGAL,INDIA,Online hardware stores" />
    <meta name="revisit-after" content="7 days" />
    <meta name="robots" content="index,follow" />
	
	<title> Admin Remove Form</title>
			
            
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
                        <li><a href="admin_index.php">Home</a></li>
                        <li><a href="adm_manage_products_page.php" class="active" >Manage Products</a></li>
                        <li><a href="adm_manage_stock_page.php">Manage Stocks</a></li>
                        <li><a href="show_chart_form.php">Statistics</a></li>
                        <li><a href="user_info.php">User Info</a></li>
                        <li><a href="adm_e_store_page.php" >e-Store Control</a></li>
                    </ul>

                    
            
        </div><!--end of wrapper div-->    
	<div class="clear"></div> 
    
<!--========================================================================== Intro and FlexSlider =====================================================================================-->    

	<div class="wrapper">

         <div class="remove_pro">
         	<div class="grid-16 grid grey">
					<h1 style="text-align: center;text-decoration: underline;color: blue;font-size: 25px">::REMOVE AN EXISTING PRODUCT::</h1></div>
	<div class="grid-8 grid green">	<form name="remove_machi" action="admin_remove_machinery.php" method="post">
		<label for="machinery">MACHINERY</label> <br><br>	
	
     Enter<br>
     Product Code:<input type="text" name="rm_product" required="required"><br><br>
      <input type="submit" value="Remove Product">
     <input type="reset" value="Reset">
  </form></div>
  <div class="grid-8 grid grey">
    	<h3>Here You can Remove an Existing Product...</h3>
    	<h5><a href="admin_index.php">Back To Home!!!</a></h5>
     </div>
     
   <div class="grid-8 grid green"><form name="remove_suc_pipe" action="admin_remove_suc_pipe.php" method="post">
		<label for="suc_pipe">SUCTION PIPE</label><br><br>		
	
     Enter<br>
     Product Code:<input type="text" name="rsp_product" required="required"><br><br>
      <input type="submit" value="Remove Product">
     <input type="reset" value="Reset">
     </form></div><br><br><br>
     
     <div class="grid-8 grid green"><form name="remove_suc_pump" action="admin_remove_suc_pump.php" method="post">
		<label for="suc_pump">SUCTION PUMP</label><br><br>	
	
     Enter<br>
     Product Code:<input type="text" name="rspu_product" required="required"><br><br>
      <input type="submit" value="Remove Product">
     <input type="reset" value="Reset">
     </form></div>
     
  <div class="grid-8 grid green">   <form name="remove_hydraulic" action="admin_remove_hydraulic.php" method="post">
		<label for="hydraulic">HYDRAULIC RAMS</label><br><br>		
	
     Enter<br>
     Product Code:<input type="text" name="rhr_product" required="required"><br><br>
      <input type="submit" value="Remove Product">
     <input type="reset" value="Reset">
     </form></div><br><br><br>
     
      
    <div class="grid-8 grid green">  <form name="remove_hose" action="admin_remove_hose.php" method="post">
		<label for="hose">FUEL HOSE PIPES</label><br><br>		
	
     Enter<br>
     Product Code:<input type="text" name="rhp_product" required="required"><br><br>
      <input type="submit" value="Remove Product">
     <input type="reset" value="Reset">
    </form></div>
    
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