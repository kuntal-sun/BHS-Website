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
	
	<title>User Info</title>
			
            
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
				alert("Are you sure want to remove this user?");
                }
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
                        <li><a href="user_info.php" class="active">User Info</a></li>
                        <li><a href="adm_e_store_page.php" >e-Store Control</a></li>
                    </ul>
                    
            
        </div><!--end of wrapper div-->    
	<div class="clear"></div> 
    
<!--========================================================================== Intro and FlexSlider =====================================================================================-->    

	<div class="wrapper">
		<div class="grid-16 grid grey">
			<h2>List of all Registered Users</h2>
		</div>
		<div class="grid-16 grid green">
		<form action="admin_index.php">
    	    <input type="submit"  value="Back to Home">
    	    </form>
    	   
    	   
		</div>

		 <?php
               
				   $qd=mysql_query("SELECT * FROM registered_users");
				$count=mysql_num_rows($qd);

if($count>=1){
echo '<table border="1">';
echo '<tr>';
echo '<th>First Name</th>';
echo '<th>Middle Name</th>';
echo '<th>Last Name</th>';
echo '<th>User Name</th>';
echo '<th>Date Of Birth</th>';
echo '<th>Gender</th>';
echo '<th>City</th>';
echo '<th>Email</th>';
echo '<th>Option</th>';
echo '</tr>';
while ($r15=mysql_fetch_array($qd)) {
	$w1=$r15['fname'];
	$w2=$r15['mname'];
	$w3=$r15['lname'];
	$w4=$r15['user_name'];
	$w5=$r15['dob'];
	$w6=$r15['gender'];
	$w7=$r15['city'];
	$w8=$r15['email'];

	
	echo '<tr>';
echo '<td>'.$w1.'</td>';		
echo '<td>'.$w2.'</td>';
echo '<td>'.$w3.'</td>';
echo '<td>'.$w4.'</td>';
echo '<td>'.$w5.'</td>';
echo '<td>'.$w6.'</td>';
echo '<td>'.$w7.'</td>';
echo '<td>'.$w8.'</td>';

echo'<td><form method="post" action="remove_user.php"  onsubmit="myChart()"> ';
echo '<input type="submit" value="Remove">';
echo'<input type="hidden" name="urname" value='.$w4.'>';
echo '</form>';
echo "</td>";
echo '</tr>';

}
echo '</table>';
				
             }
             
    	

			   
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