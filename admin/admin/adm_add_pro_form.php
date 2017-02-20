<?php 
include'config.php';
$err='';
if(isset($_POST['submit']))
{
	
	$prc1=$_POST['pro_code'];
	$r67=mysql_query("select * from products where product_code='$prc1'");
$count=mysql_num_rows($r67);
if ($count==1) 
{
	$err='___Given Product Code already exists.Please enter a new one.';
}
else {
$nxcat=$_POST['a_category'];
$np=$_POST['new_product'];

$md=$_POST['model_desc'];
$npr=$_POST['price'];
$qt=$_POST['qty'];
$_SESSION['pcode']=$prc1;
$_SESSION['categ']=$nxcat;
	$err='';
	$q11=mysql_query("INSERT INTO products (category,product_code,model_no,model_desc,price) VALUES ('$nxcat','$prc1','$np','$md','$npr')");
$q13=mysql_query("INSERT INTO stock_table (category,product_code,model_no,Qty) VALUES ('$nxcat','$prc1','$np','$qt')");
header("location: admin_manage_products.php");
}
}

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
	
	<title>Add Product Form</title>
			
            
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
                        <li><a href="admin_index.php">Home</a></li>
                        <li><a href="adm_manage_products_page.php"  class="active">Manage Products</a></li>
                        <li><a href="adm_manage_stock_page.php">Manage Stocks</a></li>
                        <li><a href="show_chart_form.php">Statistics</a></li>
                        <li><a href="user_info.php">User Info</a></li>
                        <li><a href="adm_e_store_page.php">e-Store Control</a></li>
                    </ul>
                    
            
        </div><!--end of wrapper div-->    
	<div class="clear"></div> 
    
<!--========================================================================== Intro and FlexSlider =====================================================================================-->    

	<div class="wrapper">
		
		
		<div class="add_pro">
		<div class="grid-16 grid grey"><h1 style="text-align: center;text-decoration: underline;color: blue;font-size: 25px">::ADD A NEW PRODUCT::</h1></div><br><br><br>
	<div class="grid-6 grid green">	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
				Select a category:<select name="a_category">
	<option value="">Select a category</option>
    <option value="Machinery">Machinery</option>
    <option value="Suction Pipes">Suction Pipes</option>
    <option value="Suction Pumps">Suction Pumps</option>
    <option value="HYDRAULIC RAMS">Hydraulic Rams</option>
    <option value="FUEL HOSE  PIPES">Fuel Hose Pipes</option>
    </select><br><br>
     Model No of<br>
     New Product:<input type="text" name="new_product" required="required"><br><br>
     Product Code:<input type="text" name="pro_code" required="required"><span class="error">  <?php echo $err;?></span><br><br>
     <label for="model_desc">
     Short<br>
     Description:<input type="textarea" rows="20" columns="20" name="model_desc" placeholder="Write short description here...." required="required"></label><br><br>
     Price:<input type="text" name="price" required="required"><br><br>
     Quantity:<input type="text" name="qty" required="required"><br><br>
     
     <input type="submit" name="submit" value="Add New Product">
     <input type="reset" value="Reset">
     </form>
     
     </div>	
     <div class="grid-10 grid grey"> 
     	<h1>Here you can ADD a NEW Product into your STORE....</h1><br>
     	<h4><a href="admin_index.php">Back to HOME!!!</a> </h4>
     	
     	</div>
		</div
		
		
		
	
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