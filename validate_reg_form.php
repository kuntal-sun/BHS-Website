<?php
include'config.php';
$UsnameErr= $EmailErr =$PassErr=$CpassErr="";
$email4=$fname4=$mname4=$lname4=$usname4=$dob4=$gender4=$city4=$password4='';


if ($_SERVER["REQUEST_METHOD"] == "POST")
{
   	 
     $fname4 = test_input($_POST["fname4"]);
	 $mname4 = test_input($_POST["mname4"]);
	 $lname4 = test_input($_POST["lname4"]);
	 $dob4 = $_POST["dob4"];
	 
	 $city4 = test_input($_POST["city4"]);
	 $password4 =$_POST["password4"];
	 $usname4 = test_input($_POST["usname4"]);
  if (ctype_alnum($_POST["usname4"]) != true)
{
    
    $UsnameErr = "____Username must be alpha numeric";
}
else {
		$us1name=$_POST['usname4'];
	$r77=mysql_query("select * from registered_users where user_name='$us1name'");
$count=mysql_num_rows($r77);
if ($count==1) 
{
	$UsnameErr='____Given User Name already exists.Enter a new one.';
}
}


  
     
     $email4 = test_input($_POST["email4"]);
     // check if e-mail address syntax is valid
     if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email4))
       {
       $EmailErr = "____Invalid email format";
       }
     
    
    
    
 
if (ctype_alnum($_POST["password4"]) != true)
{
          $PassErr= "____Password must be alpha numeric";
}
		
		
		
		
		if($_POST["cnfpass4"] != $_POST["password4"])
		 {
			$CpassErr="____Confirm password mismatch";
		}
   
}

function test_input($data)
{
     $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
     return $data;
}
?> 