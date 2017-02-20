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
	
	<title>User Registration</title>
			
            
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
<link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.9.1.js"></script>
<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<link rel="stylesheet" href="/resources/demos/style.css">
<script>
$(function() {

$( "#datepicker" ).datepicker({ dateFormat: "yy-mm-dd" }).val()
$( "#datepicker1" ).datepicker({ dateFormat: "yy-mm-dd" }).val()
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
                        <li><a href="index.php" class="active" >Home</a></li>
                        <li><a href="products.php">Products</a></li>
                        <li><a href="onlinestore.php">Online Store </a></li>
                        <li><a href="news.php">News</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                    </ul>
                    
            
        </div><!--end of wrapper div-->    
	<div class="clear"></div> 
    
<!--========================================================================== Intro and FlexSlider =====================================================================================-->    

	<div class="wrapper">
		<?php include 'validate_reg_form.php'; ?>
		<div class="grid-16 grid grey"> 
			<h2>Registration Form</h2>
			<h5>Please Fill all the fields to Register in our Website !!</h5>
			</div>
		<div class="grid-12 grid green">
			
 	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
 		<table class="form"> 			
 		<tr>
 			<th>
 	      <label for="fname4">
                First Name                   
            </label>
 				
 			</th>
 			<td>
 			<input type="text" name="fname4" value="<?php echo $fname4;?>" required="required"/>
 			</td>
 		</tr>
 		
 				<tr>
 			<th>
 	      <label for="mname4">
               Middle Name                    
            </label>
 				
 			</th>
 			<td>
 			<input type="text" value="<?php echo $mname4;?>" name="mname4"/>
 			</td>
 		</tr>
 		
 				<tr>
 			<th>
 	      <label for="lname4">
               Last Name                    
            </label>
 				
 			</th>
 			<td>
 			<input type="text" name="lname4" value="<?php echo $lname4;?>" required="required"/>
 			</td>
 		</tr>
 		
 				<tr>
 			<th>
 	      <label for="usname4">
               User Name <br>
            (Alpha Numeric Only)                     
            </label>
 				
 			</th>
 			<td>
 			<input type="text" name="usname4" value="<?php echo $usname4;?>" required="required"/><span class="error"><?php echo $UsnameErr;?></span>
 			</td>
 		</tr>
 		
 				<tr>
 			<th>
 	      <label for="dob4">
              Date Of Birth                     
            </label>
 				
 			</th>
 			<td>
 			<input type="text" id="datepicker" name="dob4" value="<?php echo $dob4;?>" required="required"/>
 			</td>
 		</tr>
 		
 				<tr>
 			<th>
 	      <label for="gender4">
              Gender                     
            </label>
 				
 			</th>
 			<td>
 		<select name="gender4" required="required">
	<option value="<?php echo $gender4;?>">Select Gender</option>
    <option value="Male">Male</option>
    <option value="Female">Female</option>
    </select>
 			</td>
 		</tr>
 		
 				<tr>
 			<th>
 	      <label for="city4">
              City                     
            </label>
 				
 			</th>
 			<td>
 			<input type="text" name="city4" value="<?php echo $city4;?>" required="required"/>
 			</td>
 		</tr>
 		
 				<tr>
 			<th>
 	      <label for="email4">
              Email                     
            </label>
 				
 			</th>
 			<td>
 			<input type="email" id="email" name="email4" value="<?php echo $email4;?>" required="required"/><span class="error"><?php echo $EmailErr;?></span>
 			</td>
 		</tr>
 		
 				<tr>
 			<th>
 	      <label for="password4">
             Password  <br>
            (Alpha Numeric Only)                    
            </label>
 				
 			</th>
 			<td>
 			<input type="password" name="password4" value="<?php echo $password4;?>" required="required"/><span class="error"><?php echo $PassErr;?></span>
 			</td>
 		</tr>
 		
 				<tr>
 			<th>
 	      <label for="cnfpass4">
             Confirm Password                      
            </label>
 				
 			</th>
 			<td>
 			<input type="password" name="cnfpass4" required="required"/><span class="error"><?php echo $CpassErr;?></span>
 			</td>
 		</tr>
 		
 				
 		</table>
 		<p>
                                <input type="submit" name="submit" value="Register" class="float_left" />
                                <input type="reset" value="Reset" class="float_right">
                              </p>
                            </form>
 
 </div>
 <div class="grid-4 grid">
 	<a href="index.php"><h3>Back to Home</h3></a>
 		
 </div>
 		
 		
 		
 		<?php
if(isset($_POST['submit']) && $EmailErr==''&& $UsnameErr==''&& $PassErr==''&&$CpassErr==''){


   $confirm_code=md5(uniqid(rand())); 
   
   $qp=mysql_query("INSERT INTO temp_registered_users VALUES('$confirm_code','$_POST[fname4]','$_POST[mname4]','$_POST[lname4]','$_POST[usname4]','$_POST[dob4]','$_POST[gender4]','$_POST[city4]','$_POST[email4]','$_POST[password4]')");
   
   
   // if suceesfully inserted data into database, send confirmation link to email
if ($qp)
  {
  
   
   // Pear Mail Library
require_once "Mail.php";

$from = '<biswashardwarestores@gmail.com>';
$to = $_POST["email4"];
// Your subject
$subject="Your confirmation link here";

//$body = "Succesfully registered in our Websites..\nFrom BHS..Thank You...";
// Your message
$message="Your Comfirmation link \r\n";
$message.="Click on this link to activate your account \r\n";
$message.="http://localhost/bhswebsite/confirmation.php?passkey=$confirm_code";

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
	echo '<div class="grid-4 grid">';
	echo '<p class="message error">Cannot send Confirmation link to your e-mail address</p>';
    echo '<p class="message warning">' . $mail->getMessage() . '</p>';
	echo '</div>';
} 
else {
	echo '<div class="grid-4 grid">';
	echo '<p class="message success">Confirmation Link successfully sent to your email...</p>';
    echo '</div>';
   
}
}
}

?>
 		
 		
 		
 		
		</div><!--end of wrapper-->

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
    
    
        				
</body>
</html>