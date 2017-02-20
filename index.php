<?php 
session_start();
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
	
	<title>BISWAS HARDWARE STORES</title>
			
            
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
				  $(window).load(function() {
					$('.flexslider').flexslider({
						  animation: "slide",<!--you can also choose fade here-->
						  directionNav: false,<!--Attention: if you choose true here, the nav-buttons will also appear in the ticker! -->
						  keyboardNav: true,
						  mousewheel: true
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
                   
                   <!--These are just samples, use your own icons. If you use larger ones, make sure too change the css-file to fit them in.
                       Dont´t forget to place your links -->
                    <?php
                   if(!isset($_SESSION['SESS_USER_ID']) || (trim($_SESSION['SESS_USER_ID']) == '')) {
                   echo'<div class="social"><h5>Welcome Guest</h5>';
				   }
				   else {
					   echo'<div class="social"><h5>Welcome '.$_SESSION['SESS_FIRST_NAME'].'</h5>';
				   }
                   ?>
                    <div class="social">
                   
              
                    <a href="auth.php" title="Account"><img src="img/vcard.png" width="20" height="20" alt="Account"></a>
                    <a href="http://www.facebook.com/bhsplassey" title="Facebook Page"><img src="img/facebook.png" width="20" height="20" alt="facebook"></a>
                    <a href="https://plus.google.com/photos/100774442554721691678/albums/6000282560059532433?authkey=CJvjtZWIz9OzggE" title="Web Album"><img src="img/picasa.png" width="20" height="20" alt="picasa"></a>
                   
                    </div>
          
                 
                    
                    <ul id="nav" class="main">
                        <li><a href="index.php" class="active">Home</a></li>
                        <li><a href="products.php">Products</a></li>
                        <li><a href="onlinestore.php">Online Store </a></li>
                        <li><a href="news.php">News</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                    </ul>
                    
            
        </div><!--end of wrapper div-->    
	<div class="clear"></div> 
    
<!--========================================================================== Intro and FlexSlider =====================================================================================-->    

	<div class="wrapper">
 		<div class="grids top">
                <div class="grid-6 grid intro">
                 <h2>Introduction</h2>
                       <p>
                       	We deliver a good service throughout many districts of West Bengal since 1984.
                       	We are one of the best dealers of Chinese Diesel Engines,Shallow Pipe,Thaser,Power Genarater, Spare parts etc.
                       	Here You can find all hardware product in resoanable price." We always beilive in relation not MONEY. "
                       </p>
                                        
                 </div><!--end of slogan div-->
 
                 <div class="grid-10 grid"> 
                  <div class="flexslider"><!--http://flex.madebymufffin.com/-->
                  
                      <noscript>You have Javascript set to disabled. This slideshow runs with Javascript and will only be shown if you turn it on.<br />
                      Sie haben Javascript deaktiviert. Diese Slideshow wird nur vollständig angezeigt, wenn Sie Javascript aktivieren.</noscript> 

  						<ul class="slides">
                             
                            	<li>
                        				<a href="#"><img src="img/sl1.jpg" alt="demo-image" />
                                        <p class="flex-caption">Air Cool Z170F Diesel engine</p>
                                        </a>
                                </li>
                                <li>
                        				<a href="#"><img src="img/sl2.jpg" alt="demo-image" />
                                        <p class="flex-caption">Watercool R175A Diesel Engine</p>
                                        </a>
                                </li> 
                              
                                <li>                                  
                        				<a href="#"><img src="img/sl3.jpg" alt="demo-image" />
										<p class="flex-caption">Powerfull watercool diesel engine with selfstart</p>
                                        </a>
                                </li>
                               
                                <li>                                
                        				<a href="#"><img src="img/sl4.jpg" alt="demo-image" />
                                        <p class="flex-caption">WP 30K kerosene water pump</p>
                                        </a>
                                </li>
                                
                                <li>
                                    
                        				<a href="#"><img src="img/sl5.jpg" alt="demo-image" />
                                        <p class="flex-caption">Powerfull aircool Z185F diesel engine</p>
                                        </a>
                                   
                                </li>
							
                            </ul>
                            
						</div><!--end of div flexslider-->
					</div><!--end of div grid-10-->
            	</div><!--end of div grids-->
                <!--<span class="slidershadow"></span>-->
				
    		</div><!--end of div wrapper-->
    		<hr />
            
<!--========================================================================== Content Part 1 =====================================================================================-->             

    <div class="wrapper">
    
    		<div class="grids">

                  <div class="grid-10 grid">
                            <h2>About the Store!</h2>
                            <p>This store was founded by Mr. Kabindranath Biswas.It is located at Plassey,Nadia,West Bengal.It is a hardware store.
                            	Here you can find all agriculture related hardware machines and their spare sparts.Basically we are dealer of centrifugal diesel
                            	water pump sets.We import this engine from Minland,China and the water pumps are imported from Milton Pump Factory,Bangladesh.
                            	Beside this we have the dealership of MAYUR Shallow Pipes,Thaser,Household water motors,Power Genaretor etc.
                            </p>
                            
                            <p>We recently launch this official website of our store to deliver our services nationwide.Here is a Online store section where you can see our product and buy them online.
                            	To visit our online store click the "Visit Online Store" Button.</p>
                           
                            <a class="button" href="onlinestore.php">Visit Online Store</a>

          		</div><!--end of grid-10--> 
                
                
                <div class="grid-6 grid grey">
                            <h2>Our View!!</h2>
                            <p class="quote">A Business makes nothing but Money!! is a "POOR BUSINESS"..
                            </p>
            
                </div>
           
                
			</div><!--end of grids-->
           
		</div><!--end of wrapper-->
<hr /> 		

<!--========================================================================== Ticker =====================================================================================-->                    
                    
                    <!--If you don´t want to use the ticker just delete or comment it and uncomment this to use static text instead-->
					<!--<div class="intro">
                       <p class="text-center">
                       Hey, let your creativity flow and create something great!
                       </p>
                       </div>-->
                       
                   <!--This is FlexSlider and uses the same settings like the one at the top. If you change them, be aware that it is for both sliders!-->
                      
                      <div class=" grids flexslider intro ticker top"><!--http://flex.madebymufffin.com/-->
                      <noscript>You have Javascript set to disabled. This ticker runs with Javascript and will only be shown if you turn it on.<br />
                      Sie haben Javascript deaktiviert. Dieser Ticker wird nur vollständig angezeigt, wenn Sie Javascript aktivieren.</noscript> 

  						<ul class="slides">
                             
                            	<li>
                        				 <p class="text-center">
                                           Hey,No need to go outside!! Visit our Online Store...
                                         </p>		
                                </li>
                                <li>
                        				 <p class="text-center">
                                           All products with reasonable price!!
                                         </p>
                                </li> 
                                <li>
                        				 <p class="text-center">
                                           India and China's most popular diesel engines are available here!!
                                         </p>		
                                </li>
                              
                                <li>                                  
                        				 <p class="text-center">
                                           Need mechanical support ?? Call us @ 03474-262323 /(+91) 9735423539
                                         </p>
                                </li>
                               
                                <li>                                
                        				 <p class="text-center">
                                           100% Genuine Products!!
                                         </p>
                                </li>
                                
                                <li>
                        				 <p class="text-center">
                                           Over 30 years we deliver great services to many district of WB,INDIA..
                                         </p>  
                                </li>
							
                            </ul>
                            
						</div><!--end of div flexslider-->
		</div><!--end of wrapper-->

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
                                  <p>Contact Us <a href="contact.php" title="Contact me!">Here</a></p>
                                </div>
                                
                           </div><!--end of grids-->
                   </div><!--end of footer-->
		   </div><!--end of wrapper-->
    
    
        				<script type="text/javascript"> <!--Outdated browsers warning/message and link to Browser-Update. Comment or delete it if you don´t want to use it-->
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

</body>
</html>