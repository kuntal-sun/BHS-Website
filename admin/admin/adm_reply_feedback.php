<?php 
include_once'config.php'; 
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
	
	<title>Reply Feedback</title>
			
            
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
                        <li><a href="admin_index.php" class="active">Home</a></li>
                        <li><a href="adm_manage_products_page.php">Manage Products</a></li>
                        <li><a href="adm_manage_stock_page.php">Manage Stocks</a></li>
                        <li><a href="show_chart_form.php">Statistics</a></li>
                        <li><a href="user_info.php">User Info</a></li>
                        <li><a href="adm_e_store_page.php">e-Store Control</a></li>
                    </ul>
                    
            
        </div><!--end of wrapper div-->    
	<div class="clear"></div> 
    
<!--========================================================================== Intro and FlexSlider =====================================================================================-->    

	<div class="wrapper">
		

<div class="grid-16 grid grey"	>
		<h2>
			Here you can Reply to your Feedbacks !!!
		</h2>
		</div>
		<div class="grid-16 grid green">
			<form action="admin_index.php">
				<input type="submit" value="Back to Home" />
			</form>
		</div>
		
	<div class="grid-10 grid green"	>
		<table class="form">
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<tr>
	<th>Enter Receipient Email</th>
	<td><input type="email" id="email" name="eml" required="required" size="52"></td>
	</tr>
	<tr>
	<th>Your Message</th>
	<td><textarea id="description" name="desc1" rows="8" cols="50" required="required" placeholder="Please write your reply message here."></textarea></td>
	
	</tr>
	</table>
	<input type="submit" name="submit" value="Reply">
	<input type="reset" name="reset" value="Reset">
</form>
</div>
<?php


               if(isset($_POST['submit'])){
               	$emal=$_POST['eml'];
				$mzg=$_POST['desc1'];
				
					require_once "Mail.php";

$from = '<biswashardwarestores@gmail.com>';
$to = $emal;
// Your subject
$subject="Reply of your feedback";
$message=$mzg;
$message.="\r\n";
$message.="\r\n";
$message.="Thanking you...Have a great day..\r\n";
$message.="\r\n";
$message.="----Biswas Hardware Stores";
$message.="\r\n";
$message.="\r\n";
$message.="THIS IS AN AUTO GENERATED EMAIL.PLEASE DO NOT REPLY!! \r\n";



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
				
				
				echo'<div class="grid-6 grid">';
               echo'<p class="message success">Reply successfully sent..</p>';
			   echo'</div>';
			   }
?>



</div>
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
		