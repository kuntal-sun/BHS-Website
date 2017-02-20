<?php
session_start();
 
?>
<!DOCTYPE html>
<html lang="de"><!-- use class="debug" here if you develope a template and want to check-->
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
    <meta name="description" content="put a short description in here" />
    <meta name="keywords" content="put your important keywords in here" />
    <meta name="revisit-after" content="7 days" />
    <meta name="robots" content="index,follow" />
	
	<title>BHS Contact Page</title>
			
            <style>
            	
            	#map-canvas {
        height: 280px;
        width:390px;
        margin: 0px;
        padding: 0px;

            </style>
            <link rel="stylesheet" href="css/inuit.css" />
            <link rel="stylesheet" href="css/fluid-grid16-1100px.css" />
            <link rel="stylesheet" href="css/eve-styles.css" />
            <link rel="stylesheet" href="css/formalize.css" /><!--include that only on pages with forms-->
            <link rel="shortcut icon" href="icon.png" />
            <link rel="apple-touch-icon-precomposed" href="img/icon.png" />
            
            <script src="js/respond-min.js" type="text/javascript"></script>
           <script src="js/jquery-1.11.0.min.js"></script>
            <script>window.jQuery || document.write('<script src="scripts/jquery164min.js">\x3C/script>')</script><!--local fallback for JQuery-->
            <script src="js/jquery.formalize.min.js" type="text/javascript"></script><!--include that only on pages with forms-->
			 <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <script>
function initialize() {
  var myLatlng = new google.maps.LatLng(23.777287,88.284056);
  var mapOptions = {
    zoom: 16,
    center: myLatlng
  }
  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

  var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      title: 'Biswas Hardware Stores'
  });
}

google.maps.event.addDomListener(window, 'load', initialize);

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
                   
                   <!--These are just samples, use your own icons. If you use larger ones, make sure too change the css-file to fit them in-->
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
                        <li><a href="onlinestore.php">Online Stores</a></li>
                        <li><a href="news.php">News</a></li>
                        <li><a href="contact.php" class="active">Contact Us</a></li>
                    </ul>
                        
        </div><!--end of wrapper div--> 
           
	<div class="clear"></div>    

<!--===============================================================  Left content, address =====================================================================================-->    
     <div class="wrapper">
    
    		<div class="grids top">

                <div class="grid-6 grid">
                            <h2>Address</h2>
                             <div>   
                                <p class="bottom">
                                M/S Biswas Hardware Stores<br />
                                Prop: Kabindranath Biswas<br />
                                Mira Netaji Market<br />
                                Plassey , Nadia , West Bengal<br />
                                India<br><br>
                                Phone: 03474-262323<br />
                                Mob: (+91) 9735423539<br />
                                Email: biswashardwarestores@gmail.com
                              </p>
                             </div>
                             
                             
                             <div class="green bottom">   
                                <h3>Locate Us</h3>
                             </div>    
                             
                             <div id="map-canvas">   
                               
                             </div>   
						</div> 		
                
<!--===============================================================  Contact form =====================================================================================-->                 
                  <div class="grid-10 grid">
                           <h2>Contact us</h2>

					<!--An example for a contact form from formalize.me, table in use.</h6>-->
                                  
                       <form  action="sendcontactinfo.php" method="post" enctype="multipart/form-data" >
                              <table class="form">
                                <tr>
                                  <th>
                                    <label for="name">
                                      Name
                                    </label>
                                  </th>
                                  <td>
                                    <input class="input_full" type="text" id="name" name="name" required="required" />
                        
                                  </td>
                                </tr>
                                <tr>
                                  <th>
                                    <label for="email">
                                      Email
                                    </label>
                                  </th>
                                  <td>
                        
                                    <input class="input_full" type="email" id="email" name="email" required="required" />
                                  </td>
                                </tr>
                               
                                <tr>
                        
                                  <th>
                                    <label for="tel">
                                      Phone
                                    </label>
                                  </th>
                                  <td>
                                    <input class="input_full" type="tel" id="tel" name="tel" required="required" />
                                  </td>
                                </tr>
                        
                                <tr>
                                  <th>
                                    <label for="url">
                                      URL
                                    </label>
                                  </th>
                                  <td>
                                    <input class="input_full" type="text" id="url" name="url" placeholder="http://" />
                                  </td>
                        
                                </tr>
                                <tr>
                                  <th>
                                    <label for="subject">
                                      Subject
                                    </label>
                                  </th>
                                  <td>
                                    <select class="input_full" id="subject" name="subject">
                        
                                      <option value="">Choose subject...</option>
                                      
                                        <option value="Question">Question</option>
                                        <option value="Project">Project</option>
                                        <option value="Feedback">Feedback</option>
                                        <option value="Other">Other</option>
                        
                                    </select>
                                  </td>
                                </tr>
                                <tr>
                        
                                  <th>
                                    <label for="priority_normal">
                                      Priority
                                    </label>
                                  </th>
                                  <td>
                                    <input type="radio" name="priority" id="priority_urgent" value="Urgent">
                                    <label for="priority_urgent">
                                      Urgent
                                    </label>
                        
                                    &nbsp;
                                    &nbsp;
                                    <input type="radio" name="priority" id="priority_normal" value="Normal" checked="checked">
                                    <label for="priority_normal">
                                      Normal
                                    </label>
                                    &nbsp;
                                    &nbsp;
                                    <input type="radio" name="priority" id="priority_low" value="Low">
                        
                                    <label for="priority_low">
                                      Low
                                    </label>
                                  </td>
                                </tr>
                                <tr>
                                  <th>
                        
                                    <label for="description">
                                      Your<br />
                                      message
                                    </label>
                                  </th>
                                  <td>
                                    <textarea id="description" name="description" rows="8" required="required" placeholder="Please write your message here."></textarea>
                                  </td>
                        
                                </tr>
                                 <tr>
                                  <th>
                                    <label for="cc">
                                      <abbr title="Courtesy Copy">Note :</abbr>
                                    </label>
                        
                                  </th>
                                  <td>
                                    
                                    <label for="cc">
                                     ( A copy of this feedback will be send to your email )
                                    </label>
                                  </td>
                                </tr>
                              </table>
                        
                              <p>
                                <input type="submit" value="Send" class="float_left" />
                                <input type="reset" value="Reset" class="float_right">
                              </p>
                            </form>
                            
                     
                </div><!--end of grid-10--> 
			</div><!--end of grids-->
           
	</div><!--end of wrapper-->
    
<!--===============================================================  Footer =====================================================================================-->     
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