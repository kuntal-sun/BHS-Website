<?php 
session_start();
if (isset($_SESSION['SESS_USER_ID'])) {
   session_destroy();
	echo '<p class="message success"> You have logged out successufuly!</p>';
	include 'index.php';
   
} 


 ?>