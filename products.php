<?php
session_start();
include_once("config.php");
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
	
	<title>Products Page</title>
	<style>
		
		
#backtotop {
	cursor : pointer;
	display : none;
	margin : 0px 0px 0px 370px;
	position : fixed;
	bottom : 10px;
	right :20px;
	font-size : 90%;
	padding	: 10px;
	width : 100px;
	text-align : center;
	background-color : #000;
	border-radius : 8px;
	-webkit-border-radius : 8px;
	-moz-border-radius : 8px;
	filter : alpha(opacity=60);
	-khtml-opacity : 0.6;
	-moz-opacity : 0.6;
	opacity	: 0.6;
	color : #FFF;
	font-size : 14px;
	z-index	: 1000;
}
#backtotop:hover
{
	filter : alpha(opacity=90);
	-khtml-opacity : 0.9;
	-moz-opacity : 0.9;
	opacity	: 0.9;
}
	</style>
	
			
            
            <link rel="stylesheet" href="css/inuit.css" />
            <link rel="stylesheet" href="css/fluid-grid16-1100px.css" />
            <link rel="stylesheet" href="css/eve-styles.css" />
            <link rel="shortcut icon" href="icon.png" />
            <link rel="apple-touch-icon-precomposed" href="img/icon.png" />
            
            <script src="js/respond-min.js" type="text/javascript"></script>
            <script src="js/jquery-1.11.0.min.js"></script>
            <script>window.jQuery || document.write('<script src="scripts/jquery164min.js">\x3C/script>')</script><!--local fallback for JQuery-->
            
				
<script type="text/javascript">
$(function() {
	$(window).scroll(function() {
		if($(this).scrollTop() != 0) {
			$('#backtotop').fadeIn();	
		} else {
			$('#backtotop').fadeOut();
		}
	});
 
	$('#backtotop').click(function() {
		$('body,html').animate({scrollTop:0},800);
	});	
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
                     <a href="index.php" id="logo"><img src="img/logo.png" alt="something" />
                      <h1 class="accessibility">BHS</h1></a>
                   
                   <!--These are just samples, use your own icons. If you use larger ones, make sure too change the css-file to fit them in-->
                      <?php
                   if(!isset($_SESSION['SESS_USER_ID']) || (trim($_SESSION['SESS_USER_ID']) == '')) {
                   echo'<div class="social"><h5>Guest</h5>';
				   }
				   else {
					   echo'<div class="social"><h5>'.$_SESSION['SESS_FIRST_NAME'].'</h5>';
				   }
                   ?>
                    <div class="social">
                   
              
                    <a href="auth.php" title="Account"><img src="img/vcard.png" width="20" height="20" alt="Account"></a>
                    <a href="http://www.facebook.com/bhsplassey" title="Facebook Page"><img src="img/facebook.png" width="20" height="20" alt="facebook"></a>
                    <a href="https://plus.google.com/photos/100774442554721691678/albums/6000282560059532433?authkey=CJvjtZWIz9OzggE" title="Web Album"><img src="img/picasa.png" width="20" height="20" alt="picasa"></a>
                   
                    </div>
                 
                    
                    <ul id="nav" class="main">
                        <li><a href="index.php" >Home</a></li>
                        <li><a href="products.php" class="active">Products</a></li>
                        <li><a href="onlinestore.php">Online Store </a></li>
                        <li><a href="news.php">News</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                    </ul>
                        
        </div><!--end of wrapper div--> 
           
	<div class="clear"></div>    
<!--===============================================================  Intro =====================================================================================--> 
	<div class="wrapper">
 		<div class="grids">
                <div class="grid-16 grid intro green">
                 
                       <p>Here you can see all products and their specification .To buy it please go to <a href="onlinestore.php">"Online Store"</a> section</p>
                                        
                 </div><!--end of slogan div-->
 
          </div><!--end of div grids-->
	
    </div><!--end of div wrapper-->    

<!--===============================================================  Green box (sidebar) =====================================================================================-->     
      
     <div class="wrapper">
     	<div class="grid-16 grid grey"><h1 style="text-align: center;">Machinery</h1></div>
     	<hr class="clear">  
     	<?php
			$result=mysql_query("select * from products where category='Machinery'") or die("select * from products"."<br/><br/>".mysql_error());
			while($row=mysql_fetch_array($result)){
				$model=$row['model_no'];
				//$uid=$row['uqid'];
		?>
    
    		<div class="grids">

               <div class="grid-4 grid green">
                          <h3 style="text-align: center;"><a id="<?php echo $row['uqid']?>"><?php echo $row['model_no']?></a></h3>
                            
              </div>
              </div>
                
                
                  <?php $t1=md5(uniqid(rand()));
				  $t2=md5(uniqid(rand())); ?>
                      
                            <ul class="tabs">
                                    <li><a href="#<?php echo $t1;?>">Product</a></li>
                                    <li><a href="#<?php echo $t2;?>">Specification</a></li>
                      
                                </ul>
                                
                                <div class="tab_container">
                                    <div id="<?php echo $t1;?>" class="tab_content">
                                        <img src="admin/fp/<?php echo $row['model_img']?>" style="height: 200px;width: 250px;float:left;">
                                       <div style="height: 80px;width: 260px;float: right;" ><?php echo $row['model_desc']?></div>
                                    </div>
                                   <div id="<?php echo $t2;?>" class="tab_content">
<?php 
$result1=mysql_query("select * from mach_spec where model='$model'") or die("select * from products"."<br/><br/>".mysql_error());
			while($row1=mysql_fetch_array($result1)){
				?>
				
				<table border="1">
					<tr>
						<th>Model</th>
						<td><?php echo $row1['model']?></td>
					</tr>
					<tr>
						<th>Type</th>
						<td><?php echo $row1['type']?></td>
					</tr>
					<tr>
						<th> Type of combustion chamber</th>
						<td><?php echo $row1['com_cham']?></td>
					</tr>
					<tr>
						<th>Number of cylinders</th>
						<td><?php echo $row1['clyn_no']?></td>
					</tr>
					<tr>
						<th>Bore¡ÁStroke (mm)</th>
						<td><?php echo $row1['bs']?></td>
					</tr>
					<tr>
						<th>Total displacement (L)</th>
						<td><?php echo $row1['td']?></td>
					</tr>
					<tr>
						<th>Compression ratio</th>
						<td><?php echo $row1['cr']?></td>
					</tr>
					<tr>
						<th>1-hour rated power (Kw/r/min)</th>
						<td><?php echo $row1['1rp']?></td>
					</tr>
					<tr>
						<th>12-hour rated power (Kw/r/min)</th>
						<td><?php echo $row1['12p']?></td>
					</tr>
					<tr>
						<th> Specific fuel consumption (g/Kw.h)</th>
						<td><?php echo $row1['spc']?></td>
					</tr>
					<tr>
						<th>Colling method</th>
						<td><?php echo $row1['cm']?></td>
					</tr>
					<tr>
						<th>Lubrication method</th>
						<td><?php echo $row1['lm']?></td>
					</tr>
					<tr>
						<th>Starting method</th>
						<td><?php echo $row1['sm']?></td>
					</tr>
					<tr>
						<th> Net weight (kg)</th>
						<td><?php echo $row1['nw']?></td>
					</tr>
					<tr>
						<th> Overall dimensions(L¡ÁW¡ÁH)  (mm)</th>
						<td><?php echo $row1['od']?></td>
					</tr>
					<tr>
						<th>Packing dimensions(L¡ÁW¡ÁH)  (mm)</th>
						<td><?php echo $row1['pd']?></td>
					</tr>
					
				</table>
				
				
				
			
			
<?php } ?>
                                    </div>
                                   </div>
                                <?php } ?>
<hr class="clear">  
                                
                                     	<div class="grid-16 grid grey"><h1 style="text-align: center;">Suction Pipes</h1></div>
                                     	<hr class="clear">  
     	<?php
			$result7=mysql_query("select * from products where category='Suction Pipes'") or die("select * from products"."<br/><br/>".mysql_error());
			while($row7=mysql_fetch_array($result7)){
				$model=$row7['model_no'];
				//$uid=$row['uqid'];
		?>
    
    		<div class="grids">

               <div class="grid-10 grid green">
                          <h3 style="text-align: center;"><a id="<?php echo $row7['uqid']?>"><?php echo $row7['model_no']?></a></h3>
                            
              </div>
              </div>
                
                
                  <?php $t1=md5(uniqid(rand()));
				  $t2=md5(uniqid(rand())); ?>
                      
                            <ul class="tabs">
                                    <li><a href="#<?php echo $t1;?>">Product</a></li>
                                    <li><a href="#<?php echo $t2;?>">Specification</a></li>
                      
                                </ul>
                                
                                <div class="tab_container">
                                    <div id="<?php echo $t1;?>" class="tab_content">
                                        <img src="admin/fp/<?php echo $row7['model_img']?>" style="height: 200px;width: 250px;float:left;">
                                       <div style="height: 80px;width: 260px;float: right;" ><?php echo $row7['model_desc']?></div>
                                    </div>
                                   <div id="<?php echo $t2;?>" class="tab_content">

								  
								  <?php 
$result2=mysql_query("select * from suc_pipe where model_name='$model'") or die("select * from products"."<br/><br/>".mysql_error());
			while($row2=mysql_fetch_array($result2)){
				?>
				<table border="1">
					<tr>
						<th>Model Name :</th>
						<td><?php echo $row2['model_name']?></td>
					</tr>
					<tr>
						<th>Bore :</th>
						<td><?php echo $row2['bore']?></td>
					</tr>
					<tr>
						<th>Wall Thickness (mm) :</th>
						<td><?php echo $row2['thickness']?></td>
					</tr>
					<tr>
						<th>Maximum Pressure (Bar):</th>
						<td><?php echo $row2['max_pres']?></td>
					</tr>
					<tr>
						<th>Bend Radius (mm) :</th>
						<td><?php echo $row2['b_rad']?></td>
					</tr>
					
					<tr>
						<th>Maximum Temparature :</th>
						<td><?php echo $row2['max_temp']?></td>
					</tr>
				
				
				
				</table>
				<?php } ?>
								  
								  </div>
								  </div>
								  <?php } ?>
								  
								  <hr class="clear">  
                                
                                     	<div class="grid-16 grid grey"><h1 style="text-align: center;">Suction Pumps</h1></div>
                                     	<hr class="clear">  
     	<?php
			$result8=mysql_query("select * from products where category='Suction Pumps'") or die("select * from products"."<br/><br/>".mysql_error());
			while($row=mysql_fetch_array($result8)){
				$model=$row['model_no'];
				//$uid=$row['uqid'];
		?>
    
    		<div class="grids">

               <div class="grid-5 grid green">
                          <h3 style="text-align: center;"><a id="<?php echo $row['uqid']?>"><?php echo $row['model_no']?></a></h3>
                            
              </div>
              </div>
                
                
                  <?php $t1=md5(uniqid(rand()));
				  $t2=md5(uniqid(rand())); ?>
                      
                            <ul class="tabs">
                                    <li><a href="#<?php echo $t1;?>">Product</a></li>
                                    <li><a href="#<?php echo $t2;?>">Specification</a></li>
                      
                                </ul>
                                
                                <div class="tab_container">
                                    <div id="<?php echo $t1;?>" class="tab_content">
                                        <img src="admin/fp/<?php echo $row['model_img']?>" style="height: 200px;width: 250px;float:left;">
                                       <div style="height: 80px;width: 260px;float: right;" ><?php echo $row['model_desc']?></div>
                                    </div>
                                   <div id="<?php echo $t2;?>" class="tab_content">

								  
								  <?php 
$result3=mysql_query("select * from suc_pumps where model_name='$model'") or die("select * from products"."<br/><br/>".mysql_error());
			while($row3=mysql_fetch_array($result3)){
				?>
				<table border="1">
					<tr>
						<th>Model Name :</th>
						<td><?php echo $row3['model_name']?></td>
					</tr>
					<tr>
						<th>Delivery size upto (mm) :</th>
						<td><?php echo $row3['del_size']?></td>
					</tr>
					<tr>
						<th>Capacity up to (m3 /hr) :</th>
						<td><?php echo $row3['cap']?></td>
					</tr>
					<tr>
						<th>Head up to (m) :</th>
						<td><?php echo $row3['head']?></td>
					</tr>
					<tr>
						<th>Temperature :</th>
						<td><?php echo $row3['temp']?></td>
					</tr>
					
								
			
				</table>
				<?php } ?>
								  
								  
								  </div>
								  </div>
								  <?php } ?>
								  
								  <hr class="clear">  
                                
                                     	<div class="grid-16 grid grey"><h1 style="text-align: center;">HYDRAULIC RAMS</h1></div>
                                     	<hr class="clear">  
     	<?php
			$result9=mysql_query("select * from products where category='HYDRAULIC RAMS'") or die("select * from products"."<br/><br/>".mysql_error());
			while($row=mysql_fetch_array($result9)){
				$model=$row['model_no'];
				//$uid=$row['uqid'];
		?>
    
    		<div class="grids">

               <div class="grid-10 grid green">
               
                          <h3 style="text-align: center;"><a id="<?php echo $row['uqid']?>"><?php echo $row['model_no']?></a></h3>
                            
              </div>
              </div>
                
                
                  <?php $t1=md5(uniqid(rand()));
				  $t2=md5(uniqid(rand())); ?>
                      
                            <ul class="tabs">
                                    <li><a href="#<?php echo $t1;?>">Product</a></li>
                                    <li><a href="#<?php echo $t2;?>">Specification</a></li>
                      
                                </ul>
                                
                                <div class="tab_container">
                                    <div id="<?php echo $t1;?>" class="tab_content">
                                        <img src="admin/fp/<?php echo $row['model_img']?>" style="height: 200px;width: 250px;float:left;">
                                       <div style="height: 80px;width: 260px;float: right;" ><?php echo $row['model_desc']?></div>
                                    </div>
                                   <div id="<?php echo $t2;?>" class="tab_content">

								  
								    <?php 
$result4=mysql_query("select * from hydraulic where model_name='$model'") or die("select * from products"."<br/><br/>".mysql_error());
			while($row4=mysql_fetch_array($result4)){
				?>
				<table border="1">
					<tr>
						<th>Model Name :</th>
						<td><?php echo $row4['model_name']?></td>
					</tr>
					<tr>
						<th>Closed centre pin hole to hole (mm) :</th>
						<td><?php echo $row4['ccph']?></td>
					</tr>
					<tr>
						<th>Pin Hole dia (mm) :</th>
						<td><?php echo $row4['phd']?></td>
					</tr>
					<tr>
						<th>Ports :</th>
						<td><?php echo $row4['Ports']?></td>
					</tr>
					<tr>
						<th>Max working pressure :</th>
						<td><?php echo $row4['mwp']?></td>
					</tr>
					<tr>
						<th>Test pressure :</th>
						<td><?php echo $row4['tp']?></td>
					</tr>
					<tr>
						<th>Maximum speed :</th>
						<td><?php echo $row4['ms']?></td>
					</tr>
					<tr>
						<th>Temperature :</th>
						<td><?php echo $row4['temp']?></td>
					</tr>
					<tr>
						<th>Oil :</th>
						<td><?php echo $row4['oil']?></td>
					</tr>
					
					
					
								
			
				</table>
				<?php } ?>
								  
								  </div>
								  </div>
								  <?php } ?>
								  
								  
								  
								  <hr class="clear">  
                                
                                     	<div class="grid-16 grid grey"><h1 style="text-align: center;">FUEL HOSE  PIPES</h1></div>
                                     	<hr class="clear">  
     	<?php
			$result6=mysql_query("select * from products where category='FUEL HOSE  PIPES'") or die("select * from products"."<br/><br/>".mysql_error());
			while($row6=mysql_fetch_array($result6)){
				$model=$row6['model_no'];
				//$uid=$row['uqid'];
		?>
    
    		<div class="grids">

               <div class="grid-6 grid green">
                          <h3 style="text-align: center;"><a id="<?php echo $row6['uqid']?>"><?php echo $row6['model_no']?></a></h3>
                            
              </div>
              </div>
                
                
                  <?php $t1=md5(uniqid(rand()));
				  $t2=md5(uniqid(rand())); ?>
                      
                            <ul class="tabs">
                                    <li><a href="#<?php echo $t1;?>">Product</a></li>
                                    <li><a href="#<?php echo $t2;?>">Specification</a></li>
                      
                                </ul>
                                
                                <div class="tab_container">
                                    <div id="<?php echo $t1;?>" class="tab_content">
                                        <img src="admin/fp/<?php echo $row6['model_img']?>" style="height: 200px;width: 250px;float:left;">
                                       <div style="height: 80px;width: 260px;float: right;" ><?php echo $row6['model_desc']?></div>
                                    </div>
                                   <div id="<?php echo $t2;?>" class="tab_content">

								    <?php 
$result5=mysql_query("select * from hose_pipes where model_name='$model'") or die("select * from products"."<br/><br/>".mysql_error());
			while($row5=mysql_fetch_array($result5)){
				?>
		
				<table border="1">
					<tr>
						<th>Model Name :</th>
						<td><?php echo $row5['model_name']?></td>
					</tr>
					<tr>
						<th>TUBE :</th>                                    
						<td><?php echo $row5['tube']?></td>
					</tr>
					<tr>
						<th>REINFORCEMENT :</th>
						<td><?php echo $row5['rfmnt']?></td>
					</tr>
					<tr>
						<th>COVER :</th>
						<td><?php echo $row5['cover']?></td>
					</tr>
					<tr>
						<th>APPLICATION :</th>
						<td><?php echo $row5['app']?></td>
					</tr>
					<tr>
						<th>MAX WORKING PRESSURE :</th>
						<td><?php echo $row5['mwp']?></td>
					</tr>
					<tr>
						<th>TEMPERATURE RANGE :</th>
						<td><?php echo $row5['temp']?></td>
					</tr>
					
								
			
				</table>
				<?php } 

	
				
				?>
								  </div>
								  </div>
								  <?php } ?>

								   </div>
                                 
							<div id="backtotop">Scroll to Top</div>
                                
      <hr class="clear">                         
                                
                               <!--===============================================================  Footer =====================================================================================-->  
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
                                  <p>Contact Us <a href="contact.php" title="Contact me!">Here</a></p>
                                </div>
                                
                           </div><!--end of grids-->
                   </div><!--end of footer-->
		   </div><!--end of wrapper-->
    
    
        	<script type="text/javascript";> <!--Outdated browsers warning/message and link to Browser-Update. Comment or delete it if you don´t want to use it-->
						var $buoop = {} 
						$buoop.ol = window.onload; 
						window.onload=function(){ 
						 try {if ($buoop.ol) $buoop.ol();}catch (e) {} 
						 var e = document.createElement("script"); 
						 e.setAttribute("type", "text/javascript"); 
						 e.setAttribute("src", "http://browser-update.org/update.js"); 
						 document.body.appendChild(e); 
						} 
			</script> 
                        
			 <script type="text/javascript">  <!--Javascript for Tabs by Sohtanaka, include it on pages where you use tabs, else delete it-->                     
                        $(document).ready(function() {
							
							 //When page loads...
							 $(".tab_content").hide(); //Hide all content
							 $("ul.tabs li:first").addClass("active").show(); //Activate first tab
							 $(".tab_content:first").show(); //Show first tab content
							
							 //On Click Event
							 $("ul.tabs li").click(function() {
							
							  $("ul.tabs li").removeClass("active"); //Remove any "active" class
							  $(this).addClass("active"); //Add "active" class to selected tab
							  $(".tab_content").hide(); //Hide all tab content
							
							  var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
							  $(activeTab).fadeIn(); //Fade in the active ID content
							  return false;
							 });
							
							});
			</script>
</body>
</html>