<?php
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
	
	<title>Order Details</title>
			
            
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
			function myChart(){
				alert("Are you sure to view this chart?" );
                }
</script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.9.1.js"></script>
<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<link rel="stylesheet" href="/resources/demos/style.css">

               
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
                        <li><a href="admin_index.php">Home</a></li>
                        <li><a href="adm_manage_products_page.php">Manage Products</a></li>
                        <li><a href="adm_manage_stock_page.php">Manage Stocks</a></li>
                        <li><a href="show_chart_form.php">Statistics</a></li>
                        <li><a href="user_info.php">User Info</a></li>
                        <li><a href="adm_e_store_page.php" class="active">e-Store Control</a></li>
                    </ul>

                    
            
        </div><!--end of wrapper div-->    
	<div class="clear"></div> 
    
<!--========================================================================== Intro and FlexSlider =====================================================================================-->    

	<div class="wrapper">
	<div class="grid-16 grid grey">
		<h2>Order Details and Shipping Address :</h2>	
		
</div>
<?php
$ord99=$_POST['ordr'];

echo '<div class="grid-16 grid green">'; 
echo '<h4 style="text_align:center">Order Id :'.$ord99.'</h4>';
echo '<form action="osswald.php">';
    		echo '<input type="submit"  value="Back to View Orders">';
    	echo '</form>';
echo '</div>';
echo '<div class="grid-6 grid grey">'; 
echo '<h5 style="text_align:center">Order Details</h5>';
 $qz1=mysql_query("SELECT * FROM user_buying_info WHERE order_id='$ord99';");
				$count=mysql_num_rows($qz1);

if($count>=1){
echo '<table border="1">';
echo '<tr>';
echo '<th>Product Code</th>';
echo '<th>Quantity</th>';
echo '</tr>';

while ($r14=mysql_fetch_array($qz1)) {
	$prcd=$r14['product_code'];
	$qnty=$r14['quantity'];
	$trpr=$r14['total_price'];
	
	echo '<tr>';
echo '<td>'.$prcd.'</td>';		
echo '<td>'.$qnty.'</td>';
echo'</tr>';

}
echo '</table>';
}
echo '</div>';
echo '<div class="grid-6 grid grey">';
echo '<h3>Total Price :'.$trpr.'</h3>';
echo '</div>';

         
    	


echo '<div class="grid-10 grid green">'; 
echo '<h5 style="text_align:center">Shipping Address</h5>';
$qz2=mysql_query("SELECT * FROM shipping_add WHERE order_id='$ord99'");
			$count9=mysql_num_rows($qz2);

if($count9==1){
	
echo '<table border="1">';
while ($r15=mysql_fetch_array($qz2)) {
	$pq1=$r15['date'];
	$pq2=$r15['fname'];
	$pq3=$r15['email'];
	$pq4=$r15['phone'];
	$pq5=$r15['address'];
	$pq6=$r15['pincode'];
	$pq7=$r15['landmark'];

	
echo '<tr>';
echo '<th>Date</th>';		
echo '<td>'.$pq1.'</td>';
echo'</tr>';

echo '<tr>';
echo '<th>Order Id</th>';		
echo '<td>'.$ord99.'</td>';
echo'</tr>';

echo '<tr>';
echo '<th>Name</th>';		
echo '<td>'.$pq2.'</td>';
echo'</tr>';

echo '<tr>';
echo '<th>Email</th>';		
echo '<td>'.$pq3.'</td>';
echo'</tr>';

echo '<tr>';
echo '<th>Contact</th>';		
echo '<td>'.$pq4.'</td>';
echo'</tr>';

echo '<tr>';
echo '<th>Address</th>';		
echo '<td>'.$pq5.'</td>';
echo'</tr>';

echo '<tr>';
echo '<th>Pincode</th>';		
echo '<td>'.$pq6.'</td>';
echo'</tr>';

echo '<tr>';
echo '<th>Landmark</th>';		
echo '<td>'.$pq7.'</td>';
echo'</tr>';

}}
echo '</table>';

echo '</div>';



?>

</div><!--end of wrapper-->
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