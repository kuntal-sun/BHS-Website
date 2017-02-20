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
	
	<title>Forgot Password</title>
			
            
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
                        <li><a href="index.php">Home</a></li>
                        <li><a href="products.php">Products</a></li>
                        <li><a href="onlinestore.php">Online Store </a></li>
                        <li><a href="news.php">News</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                    </ul>
                    
            
        </div><!--end of wrapper div-->    
	<div class="clear"></div> 
    
<!--========================================================================== Intro and FlexSlider =====================================================================================-->    

	<div class="wrapper">
 		<div class="grid-6 grid">
 			<a href="index.php"><h4>Back to Home</h4></a>
                </div>
<div class="clear"></div>

<?php 
$un1=$_POST['un'];
$em1=$_POST['em'];
$qg=mysql_query("SELECT * FROM registered_users WHERE user_name='$un1' AND email='$em1'");
$count=mysql_num_rows($qg);
if($count==1){
$row=mysql_fetch_array($qg);
	$pswd=$row['password'];
    $fn1=$row['fname'];
	
	require_once "Mail.php";

$from = '<biswashardwarestores@gmail.com>';
$to = $em1;
// Your subject
$subject="Forgot Password";

//$body = "Succesfully registered in our Websites..\nFrom BHS..Thank You...";
// Your message
$message="Hi";
$message.="\r\n";
$message.=$fn1;
$message.="\r\n";
$message.="Your User Name Is \r\n";
$message.=$un1;
$message.="\r\n";
$message.="Your Password Is \r\n";
$message.=$pswd;
$message.="\r\n";
$message.="Login with this password here \r\n";
$message.="http://localhost/bhswebsite/login.php";
$message.="\r\n";
$message.="Thanking you..\r\n....BHS....\r\n....Have a Great Day....";
$message.="\r\n";
$message.="\r\n";
$message.="\r\n";
$message.="This is an auto generated Email..Please don't reply!!";

$headers = array(
    'From' => $from,
    'To' => $to,
    'Subject' => $subject
);

$smtp = Mail::factory('smtp', array(
        'host' => 'ssl://smtp.gmail.com',
        'port' => '465',
        'auth' => true,
        'username' => 'biswashardwarestores@gmail.com',
        'password' => 'bhs741156'
    ));

$mail = $smtp->send($to, $headers, $message);

if (PEAR::isError($mail)) {
	echo '<div class="grid-10 grid">';
	echo '<p class="message error">Sorry!! Cannot send Password to your e-mail address</p>';
    echo '<p class="message warning">' . $mail->getMessage() . '</p>';
	echo '</div>';
	echo '<div class="grid-6 grid">';
echo '<a href="forgot_password.php"><h4>Forgot Password</h4></a>';
echo '</div>';
} 
else {
	echo '<div class="grid-10 grid">';
	echo '<p class="message success">Password has been successfully sent to your email...</p>';
    echo '</div>';
   
}

}

else {
	echo '<p class="message warning">Sorry!! User name and Email do not exist..</p>';
	echo '<div class="grid-6 grid">';
echo '<a href="forgot_password.php"><h4>Forgot Password</h4></a>';
echo '</div>';
}	
	
	



?>





</div>

<!--========================================================================== Footer =====================================================================================-->     
		<div class="clear"></div>
		<hr class="clear">
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