<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
   	
    <meta name="description" content="Online hardware store of CHINESE diesel agricultural engines,Z170F,Z175F,MOTOR PUMPS,SHALLOW PIPES,SPARE PARTS" />
    <meta name="keywords" content="CHINESE DIESEL ENGINE,Z170F,R170A,SHALLOW PIPES,MOTOR PUMPS,BHS,BISWAS HARDWARE STORES,PLASSEY,NADIA,WEST BENGAL,INDIA,Online hardware stores" />
    <meta name="revisit-after" content="7 days" />
    <meta name="robots" content="index,follow" />
	
	<title>Product Specification </title>
			
            
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
		
<?php
session_start();
include_once 'config_bhsdb.php';

$npcat=$_SESSION['categ'];
echo '<p class="message success">You have added a new product successfully....</p><br>';

echo '<div class="grid-16 grid grey">';
echo '<h2>Enter Product Specification here..</h2>';
echo '</div>';

if ($npcat=='Machinery') {
	echo '<div class="machi-spec">';
	echo '<form action="admin_machi_speci_.php" name="machi-speci" method="post"><br><br>';
	echo'Model:                             <input type="text" name="model"><br><br>';
	echo'Type:                              <input type="text" name="type" ><br><br>';
	echo'Type of combustion chamber:        <input type="text" name="com_cham" ><br><br>';
	echo'Number of cylinders:               <input type="text" name="clyn_no" ><br><br>';
	echo'Bore¡ÁStroke (mm):                 <input type="text" name="bs" ><br><br>';
	echo'Total displacement (L):            <input type="text" name="td" ><br><br>';
	echo'Compression ratio:                 <input type="text" name="cr" ><br><br>';
	echo'1-hour rated power (Kw/r/min):     <input type="text" name="rp" ><br><br>';
	echo'T12-hour rated power (Kw/r/min):   <input type="text" name="p" ><br><br>';
	echo'Specific fuel consumption (g/Kw.h):<input type="text" name="spc" ><br><br>';
	echo'Colling method:                    <input type="text" name="cm" ><br><br>';
	echo'Lubrication method:                <input type="text" name="lm" ><br><br>';
	echo'Starting method:                   <input type="text" name="sm" ><br><br>';
	echo'Net weight (kg):                   <input type="text" name="nw" ><br><br>';
	echo'Overall dimensions(L¡ÁW¡ÁH) (mm):  <input type="text" name="od" ><br><br>';
	echo'Packing dimensions(L¡ÁW¡ÁH) (mm):  <input type="text" name="pd" ><br><br>';
	echo'<input type="submit" value="Add Specification">';
	echo '</form>';
	echo '</div>';
	
	}
	if ($npcat=='Suction Pipes') {
		echo '<div class="suc_pipe">';
		echo '<form action="admin_suc_pipe_speci.php" name="suc_pipe" method="post"><br><br>';
		echo 'Model Name:            <input type="text" name="model_name"><br><br>';
		echo 'Bore:                  <input type="text" name="bore"><br><br>';
		echo 'Wall Thickness (mm) :  <input type="text" name="thickness"><br><br>';
		echo 'Maximum Pressure (Bar):<input type="text" name="max_pres"><br><br>';
		echo 'Bend Radius (mm) :     <input type="text" name="b_rad"><br><br>';
		echo 'Maximum Temparature :  <input type="text" name="max_temp"><br><br>';
		echo'<input type="submit" value="Add Specification">';
		echo '</form>';
	    echo '</div>';
		
	}
if ($npcat=='Suction Pumps') {
	
	    echo '<div class="suc_pumps">';
		echo '<form action="admin_suc_pumps_speci.php" name="suc_pumps" method="post"><br><br>';
		echo 'Model Name :             <input type="text" name="model_name"><br><br>';
		echo 'Delivery size upto (mm) :<input type="text" name="del_size"><br><br>';
		echo 'Capacity up to (m3 /hr) :<input type="text" name="cap"><br><br>';
		echo 'Head up to (m) :        <input type="text" name="head"><br><br>';
		echo 'Temperature :           <input type="text" name="temp"><br><br>';
        echo'   <input type="submit" value="Add Specification"><br><br>';
		echo '</form>';
	    echo '</div>';
}
if ($npcat=='HYDRAULIC RAMS') {
	  
	   echo '<div class="hydraulic">';
		echo '<form action="admin_hydraulic_speci.php" name="hydraulic" method="post"><br><br>';
		echo 'Model Name :                         <input type="text" name="model_name"><br><br>';
		echo 'Closed centre pin hole to hole (mm) :<input type="text" name="ccph"><br><br>';
		echo 'Pin Hole dia (mm)  :                 <input type="text" name="phd"><br><br>';
		echo 'Ports :                              <input type="text" name="Ports"><br><br>';
		echo 'Max working pressure :               <input type="text" name="mwp"><br><br>';
		echo 'Test pressure :                      <input type="text" name="tp"><br><br>';
		echo 'Maximum speed :                      <input type="text" name="ms"><br><br>';
		echo 'Temperature :                        <input type="text" name="temp"><br><br>';
		echo 'Oil :                                <input type="text" name="oil"><br><br>';

        echo'   <input type="submit" value="Add Specification">';
		echo '</form>';
	    echo '</div>';
}
if ($npcat=='FUEL HOSE  PIPES') {
	 echo '<div class="hose_pipes">';
		echo '<form action="admin_hose_pipes_speci.php" name="hose_pipes" method="post"><br><br>';
		echo 'Model Name :          <input type="text" name="model_name"><br><br>';
		echo 'TUBE :                <input type="text" name="tube"><br><br>';
		echo 'REINFORCEMENT :           <input type="text" name="rfmnt"><br><br>';
		echo 'COVER  :              <input type="text" name="cover"><br><br>';
		echo 'APPLICATION :         <input type="text" name="app"><br><br>';
		echo 'MAX WORKING PRESSURE :<input type="text" name="mwp"><br><br>';
		echo 'TEMPERATURE RANGE :   <input type="text" name="temp"><br><br>';
		echo'   <input type="submit" value="Add Specification">';
		echo '</form>';
	    echo '</div>';
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