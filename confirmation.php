<?php
session_start();
include 'config.php';


// Passkey that got from link
$passkey=$_GET['passkey'];


// Retrieve data from table where row that match this passkey
$qy=mysql_query("SELECT * FROM temp_registered_users WHERE confirm_code ='$passkey'");


// If successfully queried
if($qy){
	

// Count how many row has this passkey
$count=mysql_num_rows($qy);

// if found this passkey in our database, retrieve data from table "temp_members_db"
if($count==1){

$rows=mysql_fetch_array($qy);
$fn=$rows['fname'];
$mn=$rows['mname'];
$ln=$rows['lname'];
$un=$rows['user_name'];
$db=$rows['dob'];
$gd=$rows['gender'];
$ct=$rows['city'];
$em=$rows['email'];
$pd=$rows['password'];




// Insert data that retrieves from "temp_members_db" into table "registered_members"
$qy4=mysql_query("INSERT INTO registered_users (fname,mname,lname,user_name,dob,gender,city,email,password) VALUES('$fn', '$mn', '$ln', '$un','$db','$gd','$ct','$em','$pd')");

}
if($qy4){
session_regenerate_id();
	$_SESSION['SESS_USER_ID'] = $un;
    $_SESSION['SESS_FIRST_NAME'] = $fn;
    $_SESSION['SESS_LAST_NAME'] = $ln;
	$_SESSION['SESS_PASS'] = $pd;
	session_write_close();	
	

 // Pear Mail Library
require_once "Mail.php";

$from = '<biswashardwarestores@gmail.com>';
$to = $em;
// Your subject
$subject="Registration Email";

//$body = "Succesfully registered in our Websites..\nFrom BHS..Thank You...";
// Your message
$message="You have successfully registered on our website \r\nThank you...\nBHS\n";
$message.="Click on this link to visit our website \r\n";
$message.="http://localhost/bhswebsite/index.php";


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


// Delete information of this user from table "temp_members_db" that has this passkey
$qy7=mysql_query("DELETE FROM temp_registered_users WHERE confirm_code = '$passkey'");

echo"<script>setTimeout(\"location.href='http://localhost/bhswebsite/index.php';\",3000); </script>";
echo "Your account has been activated...You will be redirected to our Home Page in a few seconds..Thank you for joining with us....BHS...HAVE A GREAT DAY..";
}


}
else {
echo "Wrong Confirmation code";
}
 

?>
