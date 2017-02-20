<?php
session_start();
include 'config.php';
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
	
	<title> View Orders</title>
			
            
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
                        <li><a href="onlinestore.php">Online Store </a></li>
                        <li><a href="news.php">News</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                    </ul>
                    
            
        </div><!--end of wrapper div-->    
	<div class="clear"></div> 
    
<!--========================================================================== Intro and FlexSlider =====================================================================================-->    

	<div class="wrapper">
 		
 	<div class="grid-16 grid grey">
 		
 		<h2>List of your all Orders</h2>
 		</div>
 		<div class="grid-6 grid">
 			<a href="log.php"><h4>
 				Back to Account Section
 			</h4></a>
 			
 		</div>
 		
 		
 		<?php
               
               $usrnm=$_SESSION['SESS_USER_ID'];
               
				   $qm=mysql_query("SELECT * FROM user_buying_info WHERE username='$usrnm'");
				$count=mysql_num_rows($qm);

if($count>=1){
echo '<table border="1">';
echo '<tr>';
echo '<th>Date</th>';
echo '<th>Order_Id</th>';
echo '<th>Product Code</th>';
echo '<th>Quantity</th>';
echo '<th>Total Price</th>';

echo '</tr>';
while ($r15=mysql_fetch_array($qm)) {
	$w1=$r15['date'];
	$w2=$r15['order_id'];
	$w3=$r15['product_code'];
	$w4=$r15['quantity'];
	$w5=$r15['total_price'];
	
	
	echo '<tr>';
echo '<td>'.$w1.'</td>';		
echo '<td>'.$w2.'</td>';
echo '<td>'.$w3.'</td>';
echo '<td>'.$w4.'</td>';
echo '<td>'.$w5.'</td>';

echo '</tr>';

}
echo '</table>';
				
             }
             else {
                 echo'<div class="grid-16 grid green"><h2>Sorry!! You Have No Orders :( </h2></div>';
             }
             
    	

			   
?>

 		
 		
 		
 		
 		
 		
 		
 		
		</div><!--end of wrapper-->

<!--========================================================================== Footer =====================================================================================-->     
		<div class="clear"></div>
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
    
    
        				
</body>
</html>