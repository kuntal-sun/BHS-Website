<?php
session_start();
$currency = 'र'; //Currency sumbol or code

$db_username = 'root';$currency = 'र';
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
	
	<title>Online Store</title>
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
            <link rel="stylesheet" href="css/cart.css" />
            
            <script src="js/respond-min.js" type="text/javascript"></script>
            <script src="js/jquery-1.11.0.min.js"></script>
            <script>window.jQuery || document.write('<script src="scripts/jquery164min.js">\x3C/script>')</script><!--local fallback for JQuery-->
			<script src="js/jquery.flexslider-min.js" type="text/javascript"></script>
            <link rel="stylesheet" href="css/flexslider.css" />
            

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
});</script>
               
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
 		<div class="grids top">
 			<div class="grid-16 grid grey"><h1 style="text-align: center;">Machinery</h1></div>
     	
     	 <div class="clear"></div> 
                                
                
                <div class="grid-10 grid grey">
                            <?php
    //current URL of the Page. cart_update.php redirects back to this URL
	$current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    
	$results = $mysqli->query("SELECT * FROM products WHERE category='Machinery' ORDER BY id ASC");
    if ($results) { 
	
        //fetch results set as object and output HTML
        while($obj = $results->fetch_object())
        {
			echo '<div class="grid-11 grid grey">';
			echo '<br>' ;
            echo '<form method="post" action="cart_update.php">';
			echo '<div style="float: left;"><img src="admin/fp/'.$obj->model_img.'" style="height:150px;width:200px;"></div>';
            echo '<div class="product-content"><h3>'.$obj->model_no.'</h3>';
            echo '<div class="product-desc">'.$obj->model_desc.'</div>';
            echo '<div class="product-info">';
			echo 'Price '.$currency.$obj->price.' | ';
            echo 'Qty <input type="text" name="product_qty" value="1" size="3" />';
			echo '<button class="add_to_cart">Add To Cart</button>';
			echo '</div></div>';
            echo '<input type="hidden" name="product_code" value="'.$obj->product_code.'" />';
            echo '<input type="hidden" name="type" value="add" />';
			echo '<input type="hidden" name="return_url" value="'.$current_url.'" />';
            echo '</form>';
            echo '</div>';
			
        }
    
    }
    ?>
    </div>
    <hr class="clear">
    <div class="grid-16 grid grey"><h1 style="text-align: center;">Suction Pipes</h1></div>
     	<hr class="clear">  
                                
                
                <div class="grid-11 grid grey">
                            <?php
    //current URL of the Page. cart_update.php redirects back to this URL
	$current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    
	$results = $mysqli->query("SELECT * FROM products WHERE category='Suction Pipes' ORDER BY id ASC");
    if ($results) { 
	
        //fetch results set as object and output HTML
        while($obj = $results->fetch_object())
        {
			echo '<div class="grid-11 grid grey">';
			echo '<br>' ;
            echo '<form method="post" action="cart_update.php">';
			echo '<div style="float: left;"><img src="admin/fp/'.$obj->model_img.'" style="height:150px;width:200px;"></div>';
            echo '<div class="product-content"><h3>'.$obj->model_no.'</h3>';
            echo '<div class="product-desc">'.$obj->model_desc.'</div>';
            echo '<div class="product-info">';
			echo 'Price '.$currency.$obj->price.' | ';
            echo 'Qty <input type="text" name="product_qty" value="1" size="3" />';
			echo '<button class="add_to_cart">Add To Cart</button>';
			echo '</div></div>';
            echo '<input type="hidden" name="product_code" value="'.$obj->product_code.'" />';
            echo '<input type="hidden" name="type" value="add" />';
			echo '<input type="hidden" name="return_url" value="'.$current_url.'" />';
            echo '</form>';
            echo '</div>';
			
        }
    
    }
    ?>
    </div>
    <hr class="clear">
    <div class="grid-16 grid grey"><h1 style="text-align: center;">Suction Pumps</h1></div>
     	<hr class="clear">  
                                
                
                <div class="grid-11 grid grey">
                            <?php
    //current URL of the Page. cart_update.php redirects back to this URL
	$current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    
	$results = $mysqli->query("SELECT * FROM products WHERE category='Suction Pumps' ORDER BY id ASC");
    if ($results) { 
	
        //fetch results set as object and output HTML
        while($obj = $results->fetch_object())
        {
			echo '<div class="grid-11 grid grey">';
			echo '<br>' ;
            echo '<form method="post" action="cart_update.php">';
			echo '<div style="float: left;"><img src="admin/fp/'.$obj->model_img.'" style="height:150px;width:200px;"></div>';
            echo '<div class="product-content"><h3>'.$obj->model_no.'</h3>';
            echo '<div class="product-desc">'.$obj->model_desc.'</div>';
            echo '<div class="product-info">';
			echo 'Price '.$currency.$obj->price.' | ';
            echo 'Qty <input type="text" name="product_qty" value="1" size="3" />';
			echo '<button class="add_to_cart">Add To Cart</button>';
			echo '</div></div>';
            echo '<input type="hidden" name="product_code" value="'.$obj->product_code.'" />';
            echo '<input type="hidden" name="type" value="add" />';
			echo '<input type="hidden" name="return_url" value="'.$current_url.'" />';
            echo '</form>';
            echo '</div>';
			
        }
    
    }
    ?>
    </div>
    <hr class="clear">
    <div class="grid-16 grid grey"><h1 style="text-align: center;">HYDRAULIC RAMS</h1></div>
     	<hr class="clear">  
                                
                
                <div class="grid-11 grid grey">
                            <?php
    //current URL of the Page. cart_update.php redirects back to this URL
	$current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    
	$results = $mysqli->query("SELECT * FROM products WHERE category='HYDRAULIC RAMS' ORDER BY id ASC");
    if ($results) { 
	
        //fetch results set as object and output HTML
        while($obj = $results->fetch_object())
        {
			echo '<div class="grid-11 grid grey">';
			echo '<br>' ;
            echo '<form method="post" action="cart_update.php">';
			echo '<div style="float: left;"><img src="admin/fp/'.$obj->model_img.'" style="height:150px;width:200px;"></div>';
            echo '<div class="product-content"><h3>'.$obj->model_no.'</h3>';
            echo '<div class="product-desc">'.$obj->model_desc.'</div>';
            echo '<div class="product-info">';
			echo 'Price '.$currency.$obj->price.' | ';
            echo 'Qty <input type="text" name="product_qty" value="1" size="3" />';
			echo '<button class="add_to_cart">Add To Cart</button>';
			echo '</div></div>';
            echo '<input type="hidden" name="product_code" value="'.$obj->product_code.'" />';
            echo '<input type="hidden" name="type" value="add" />';
			echo '<input type="hidden" name="return_url" value="'.$current_url.'" />';
            echo '</form>';
            echo '</div>';
			
        }
    
    }
    ?>
    </div>
    <hr class="clear">
    <div class="grid-16 grid grey"><h1 style="text-align: center;">FUEL HOSE PIPES</h1></div>
     	<hr class="clear">  
                                
                
                <div class="grid-11 grid grey">
                            <?php
    //current URL of the Page. cart_update.php redirects back to this URL
	$current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    
	$results = $mysqli->query("SELECT * FROM products WHERE category='FUEL HOSE  PIPES' ORDER BY id ASC");
    if ($results) { 
	
        //fetch results set as object and output HTML
        while($obj = $results->fetch_object())
        {
			echo '<div class="grid-11 grid grey">';
			echo '<br>' ;
            echo '<form method="post" action="cart_update.php">';
			echo '<div style="float: left;"><img src="admin/fp/'.$obj->model_img.'" style="height:150px;width:200px;"></div>';
            echo '<div class="product-content"><h3>'.$obj->model_no.'</h3>';
            echo '<div class="product-desc">'.$obj->model_desc.'</div>';
            echo '<div class="product-info">';
			echo 'Price '.$currency.$obj->price.' | ';
            echo 'Qty <input type="text" name="product_qty" value="1" size="3" />';
			echo '<button class="add_to_cart">Add To Cart</button>';
			echo '</div></div>';
			echo '<input type="hidden" name="model_no" value="'.$obj->model_no.'" />';
            echo '<input type="hidden" name="product_code" value="'.$obj->product_code.'" />';
            echo '<input type="hidden" name="type" value="add" />';
			echo '<input type="hidden" name="return_url" value="'.$current_url.'" />';
            echo '</form>';
            echo '</div>';
			
        }
    
    }
    ?>
    </div>
    <div class="clear"></div>

<div class="shopping-cart">
<h2>Your Shopping Cart</h2>
<?php
if(isset($_SESSION["products"]))
{
    $total = 0;
    echo '<ol>';
    foreach ($_SESSION["products"] as $cart_itm)
    {
    	 $fprice=$cart_itm["qty"]*$cart_itm["price"];
        echo '<li class="cart-itm">';
        echo '<span class="remove-itm"><a href="cart_update.php?removep='.$cart_itm["code"].'&return_url='.$current_url.'">&times;</a></span>';
        echo '<h3>'.$cart_itm["name"].'</h3>';
        echo '<div class="p-code">Product code : '.$cart_itm["code"].'</div>';
        echo '<div class="p-qty">Qty : '.$cart_itm["qty"].'</div>';
        echo '<div class="p-price">Price :'.$currency.$fprice.'</div>';
        echo '</li>';
        $subtotal = ($cart_itm["price"]*$cart_itm["qty"]);
        $total = ($total + $subtotal);
    }
    echo '</ol>';
    echo '<span class="check-out-txt"><strong>Total : '.$currency.$total.'</strong> <a href="show_cart.php">Check-out!</a></span>';
	echo '<span class="empty-cart"><a href="cart_update.php?emptycart=1&return_url='.$current_url.'">Empty Cart</a></span>';
}else{
    echo 'Your Cart is empty';
}
?>
</div>

      
                
           
                
			</div><!--end of grids-->
           
		</div><!--end of wrapper-->
		<div id="backtotop">Scroll to Top</div>
<hr /> 		


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