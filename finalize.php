<?php
session_start();
$currency = 'र'; //Currency sumbol or code

$db_username = 'root';
$db_password = 'cryptic';
$db_name = 'bhsdb';
$db_host = 'localhost';
$mysqli = new mysqli($db_host, $db_username, $db_password,$db_name);
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
	
	<title>Place Order</title>
			
            
            <link rel="stylesheet" href="css/inuit.css" />
            <link rel="stylesheet" href="css/fluid-grid16-1100px.css" />
            <link rel="stylesheet" href="css/eve-styles.css" />
            <link rel="shortcut icon" href="icon.png" />
            <link rel="apple-touch-icon-precomposed" href="img/icon.png" />
            <link rel="stylesheet" href="css/cart.css" />
            
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
 		
 		
 		<?php
				$nam=$_POST['name'];
				$em=$_POST['email'];
				$phne=$_POST['phn'];
				$add=$_POST['adrs'];
				$pncde=$_POST['pin'];
				$landmk=$_POST['lndmrk'];
									
			    ?>
				
				 <div class="grid-8 grid grey">
                 <h3 style="text-align: center;">Your Shipping Information</h3>
                 <p style="text-align: center;font-size: 16px;">
                 	<?php echo $nam;?><br>
                 	<?php echo $em;?><br>
                 	<?php echo $phne;?><br>
                 	<?php echo $add;?><br>
                 	<?php echo $pncde;?><br>
                 	<?php echo $landmk;?><br>
                 	             	
                 	</p>
                 	
				
				</div>
 		
 		 		<div class="grid-8 grid grey">
 	
                          <h2 style="text-align: center;">Your Shopping Information :</h2>
 		
 	<?php	
 	if(isset($_SESSION["products"]))
    {
	    $total = 0;
		
		echo '<ul>';
		
 	 		
foreach ($_SESSION["products"] as $cart_itm)
        {
           $product_code = $cart_itm["code"];
		   $results = $mysqli->query("SELECT model_img,model_no,model_desc,price FROM products WHERE product_code='$product_code' LIMIT 1");
		   $obj = $results->fetch_object();
		   $fprice=$cart_itm["qty"]*$obj->price;
		   
		    echo '<li class="cart-itm">';
			echo '<div class="product-thumb"><img src="admin/fp/'.$obj->model_img.'" style="height:80px;width:120px;"></div>';
			echo '<div class="p-price">Price :'.$currency.$fprice.'</div>';
            echo '<div class="product-info">';
			echo '<h6>'.$obj->model_no.' (Code :'.$product_code.')</h6> ';
            echo '<div class="p-qty">Quantity : '.$cart_itm["qty"].'</div>';
            echo '<div>'.$obj->model_desc.'</div>';
			echo "<br>";
			echo '</div>';
            echo '</li>';
			echo'<hr>';
			$subtotal = ($cart_itm["price"]*$cart_itm["qty"]);
			$total = ($total + $subtotal);

			
                }
    	echo '</ul>';
   		echo '<span class="check-out-txt"><strong>Total : '.$currency.$total.'</strong> </span>';
		
		
    }else{
		echo 'Your Cart is empty';
	} ?>
 		
 		<form action="oss.php" method="post">
                 
                 	<input type="hidden" name="fname" value="<?php echo $nam;?>" >
                 	<input type="hidden" name="email" value="<?php echo $em;?>" >
                 	<input type="hidden" name="mobile" value="<?php echo $phne;?>" >
                 	<input type="hidden" name="address" value="<?php echo $add;?>" >
                 	<input type="hidden" name="pincode" value="<?php echo $pncde;?>" >
                 	<input type="hidden" name="landmark" value="<?php echo $landmk;?>" >
                 	<input type="hidden" name="totalp" value="<?php echo $total;?>" >
				    <input type='submit' value='Place Order' />
 	<a href="onlinestore.php"><b>Back to Store</b></a>
 	
 		
 		
		</div><!--end of wrapper-->
		<hr class="clear" />

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