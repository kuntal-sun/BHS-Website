<?php
include 'auth1.php';

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
	
	<title>Shipping Address</title>
			
            
            <link rel="stylesheet" href="css/inuit.css" />
            <link rel="stylesheet" href="css/fluid-grid16-1100px.css" />
            <link rel="stylesheet" href="css/eve-styles.css" />
            <link rel="stylesheet" href="css/formalize.css" /><!--include that only on pages with forms-->
            <link rel="shortcut icon" href="icon.png" />
            <link rel="apple-touch-icon-precomposed" href="img/icon.png" />
            
            <script src="js/respond-min.js" type="text/javascript"></script>
           <script src="js/jquery-1.11.0.min.js"></script>
            <script>window.jQuery || document.write('<script src="scripts/jquery164min.js">\x3C/script>')</script><!--local fallback for JQuery-->
            <script src="js/jquery.formalize.min.js" type="text/javascript"></script><!--include that only on pages with forms-->
			
            
                           
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
                        <li><a href="products.php">Products</a></li>
                        <li><a href="onlinestore.php" class="active">Online Store </a></li>
                        <li><a href="news.php">News</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                    </ul>
                    
            
        </div><!--end of wrapper div-->    
	<div class="clear"></div> 
    
<!--========================================================================== Intro and FlexSlider =====================================================================================-->    

	<div class="wrapper">
 			 <div class="grid-10 grid">  
                                <h3>Shipping Address</h3>
                             

                                  
                     
 		
 		<form  action="finalize.php" method="post" >
                              <table class="form">
                                <tr>
                                  <th>
                                    <label for="name">
                                     Full Name
                                    </label>
                                  </th>
                                  <td>
                                    <input class="input_full" type="text" id="name" name="name" required="required" />
                        
                                  </td>
                                </tr>
                                <tr>
                                  <th>
                                    <label for="email">
                                      Email
                                    </label>
                                  </th>
                                  <td>
                        
                                    <input class="input_full" type="email" id="email" name="email" required="required" />
                                  </td>
                                </tr>
                               
                                <tr>
                        
                                  <th>
                                    <label for="tel">
                                      Phone
                                    </label>
                                  </th>
                                  <td>
                                    <input class="input_full" type="text" name="phn" required="required" />
                                  </td>
                                </tr>
                        
                                
                                <tr>
                                  <th>
                        
                                    <label for="description">
                                      Address
                                    </label>
                                  </th>
                                  <td>
                                    <textarea id="description" name="adrs" rows="8" required="required" placeholder="Please write your address here."></textarea>
                                  </td>
                        
                                </tr>
                                 <tr>
                        
                                  <th>
                                    <label for="pincode">
                                      Pin Code
                                    </label>
                                  </th>
                                  <td>
                                    <input class="input_full" type="text" id="pincode" name="pin" required="required" />
                                  </td>
                                </tr>
                                  <tr>
                        
                                  <th>
                                    <label for="land">
                                      Landmark
                                    </label>
                                  </th>
                                  <td>
                                    <input class="input_full" type="text" id="land" name="lndmrk" required="required" />
                                  </td>
                                </tr>
                              </table>
                        
                              <p>
                                <input type="submit" value="Submit" class="float_left" />
                                <input type="reset" value="Reset" class="float_right">
                              </p>
                            </form>
                            <a href="onlinestore.php"><b>Back to Store</b></a>

 	</div>
 		
 		<hr class="clear"> 
 		
 		
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