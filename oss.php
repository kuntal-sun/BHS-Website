<?php
session_start();
	@mysql_connect("localhost","root","cryptic") or die("Demo is not available, please try again later");
	@mysql_select_db("bhsdb") or die("Demo is not available, please try again later");
	date_default_timezone_set("Asia/Kolkata");
	$mobile99=$_POST['mobile'];
	$dt=date("Y-m-d");

	$mnt=date("m");
	$yr=date("Y");
	$totalpr=$_POST['totalp'];
	$bob=$_SESSION['SESS_USER_ID'];
	
	$ordr_id= substr(number_format(time() * rand(),0,'',''),0,11);
	if(isset($_SESSION["products"]))
    {
	  foreach ($_SESSION["products"] as $cart_itm)
        {
           
           $product_code = $cart_itm["code"];
		   $results = mysql_query("SELECT * FROM products WHERE product_code='$product_code'");
		   $row44=mysql_fetch_array($results);
		   
		   $model=$row44['model_no'];
		   $qty=$cart_itm["qty"];
		   $cate=$row44['category'];
		   
		    
	
	$result=mysql_query("select * from order_summary where Model_no='$model'AND Date='$dt'"); 
			
			$count=mysql_num_rows($result);
		
			if($count==1){
				while($row=mysql_fetch_array($result)){
				$qty2=$row['No_of_sales'];
				$qty3=$qty+$qty2;
				
                $r1=mysql_query("UPDATE order_summary SET No_of_sales='$qty3' WHERE Model_no='$model' AND Date='$dt'");
				
                }
			}
			
			else{
				$r5=mysql_query("INSERT INTO order_summary (Category,Date,Model_no,No_of_sales) VALUES ('$cate','$dt','$model','$qty')");
			
			}
			
		$q1=mysql_query("select * from monthly_category_sales where category='$cate'AND month='$mnt'AND year='$yr'");	
		$count=mysql_num_rows($q1);
			if($count==1){
				while($row=mysql_fetch_array($q1)){
				$qty5=$row['total_sale'];
				$qty6=$qty5+$qty;
				$q2=mysql_query("UPDATE monthly_category_sales SET total_sale='$qty6' WHERE category='$cate'AND month='$mnt'AND year='$yr'");
				}}
				else{
				$q3=mysql_query("INSERT INTO monthly_category_sales (month,year,category,total_sale)VALUES ('$mnt','$yr','$cate','$qty')");
			
			}
//(month,year,category,total_sales)
$q4=mysql_query("select * from stock_table where category='$cate'AND model_no='$model'");	
		
				while($row=mysql_fetch_array($q4)){
				
				$qty7=$row['Qty'];
				$qty8=$qty7-$qty;
				$q5=mysql_query("UPDATE stock_table SET Qty='$qty8' WHERE category='$cate'AND model_no='$model'");
				}
	$result88=mysql_query("select * from monthly_order_summary where Category='$cate' AND Date='$dt'"); 
			
			$count=mysql_num_rows($result88);
		
			if($count==1){
				while($row=mysql_fetch_array($result88)){
				$qty71=$row['Total_sale'];
				$qty77=$qty+$qty71;
				
                $r88=mysql_query("UPDATE monthly_order_summary SET Total_sale='$qty77' WHERE Category='$cate' AND Date='$dt'");
				
                }
			}
			
			else{
				$r55=mysql_query("INSERT INTO monthly_order_summary (Date,Category,Total_sale) VALUES ('$dt','$cate','$qty')");
			
			}
			
			$r68=mysql_query("INSERT INTO user_buying_info (date,username,order_id,product_code,quantity,total_price) VALUES ('$dt','$bob','$ordr_id','$product_code','$qty','$totalpr')");
			
			
		
				
	}}
		$result122=mysql_query("select * from datewise_catagory_sellingprice where  date='$dt'"); 
			
			$count=mysql_num_rows($result122);
		
			if($count==1){
				while($row=mysql_fetch_array($result122)){
				$pr87=$row['total_price'];
				$pr86=$totalpr+$pr87;
				
                $r122=mysql_query("UPDATE datewise_catagory_sellingprice SET total_price='$pr86' WHERE  date='$dt'");
				
                }
			}
			
			else{
				$r123=mysql_query("INSERT INTO datewise_catagory_sellingprice (date,total_price) VALUES ('$dt','$totalpr')");
			
			}
$q6=mysql_query("INSERT INTO shipping_add(date,order_id,fname,email,phone,address,pincode,landmark) VALUES ('$dt','$ordr_id','$_POST[fname]','$_POST[email]','$mobile99','$_POST[address]','$_POST[pincode]','$_POST[landmark]')");

require_once "Mail.php";

$from = '<biswashardwarestores@gmail.com>';
$to = $_POST['email'];
// Your subject
$subject="Order Placed";

//$body = "Succesfully registered in our Websites..\nFrom BHS..Thank You...";
// Your message
$message="Hi $_POST[fname]\r\n";  
$message.="Your order has been successfully placed.Your Invoice no. is $ordr_id\r\n";
$message.="\r\n";
$message.="\r\n";
$message.="Your Shipping address is :\r\n";
$message.="$_POST[fname] \r\n";
$message.="$_POST[address] \r\n";
$message.="$_POST[landmark] \r\n";
$message.="$_POST[pincode] \r\n";
$message.="$mobile99 \r\n";
$message.="\r\n";
$message.="\r\n";
$message.="Your order will be delivered within 4-5 business days.For any queries call 03474-262323/9735423539 (10 AM to 8 PM).Please keep the invoice before calling. \r\n";
$message.="Thank for shopping with us. Have a GREAT day!! \r\n";
$message.="\r\n";
$message.="Thank You---BHS \r\n";
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
	
	<title>Purchase Info</title>
			
            
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
                    <div class="social">
                    <a href="#" title="Log In"><img src="img/vcard.png" width="20" height="20" alt="vcard"></a>
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
		<div class="grid-16 grid grey"><h1 style="text-align: center;">Your order has been successfully placed.</h1></div>
 	<div class="grid-9 grid grey"><p style="text-align: center;">Click Invoice to get your billing invoice</div>

 	 		<form action="invoice.php" method="post">
<input type="hidden" name="inv" value="<?php echo $ordr_id;?>">
<input type="hidden" name="fn" value="<?php echo $_POST['fname'];?>">
<input type="hidden" name="em" value="<?php echo $_POST['email'];?>">
<input type="hidden" name="mob" value="<?php echo $_POST['mobile'];?>">
<input type="hidden" name="add" value="<?php echo $_POST['address'];?>">
<input type="hidden" name="pin" value="<?php echo $_POST['pincode'];?>">
<input type="hidden" name="land" value="<?php echo $_POST['landmark'];?>">

<input type="submit" value="Invoice">
</form>
<div class=grid-9 grid grey>
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


