

    <?php
    //Start session
    session_start();
     


    include'config.php';
    
     
    //Array to store validation errors
    $errmsg_arr = array();
     
    //Validation error flag
    $errflag = false;
     
    //Function to sanitize values received from the form. Prevents SQL injection
    function clean($str) {
    $str = @trim($str);
    if(get_magic_quotes_gpc()) {
    $str = stripslashes($str);
    }
    return mysql_real_escape_string($str);
    }
     
    //Sanitize the POST values
    $username = clean($_POST['un']);
    $password = clean($_POST['ps']);
     
 
     
    //If there are input validations, redirect back to the login form
    if($errflag) {
    $_SESSION['ERRMSG_ARR'] = $errmsg_arr;
    session_write_close();
    header("location: login.php");
    exit();
    }
     
    //Create query
    $qk=mysql_query("SELECT * FROM registered_users WHERE user_name='$username' AND password='$password'");

     
    //Check whether the query was successful or not
    if($qk) {
    if(mysql_num_rows($qk) > 0) {
    //Login Successful
    
    session_regenerate_id();
    $member = mysql_fetch_array($qk);
    $_SESSION['SESS_USER_ID'] = $member['user_name'];
    $_SESSION['SESS_FIRST_NAME'] = $member['fname'];
    $_SESSION['SESS_LAST_NAME'] = $member['lname'];
	$_SESSION['SESS_PASS'] = $member['password'];
	session_write_close();
    echo '<p class="message success"> You have logged in successufuly!</p>';
    include 'index.php';
    exit();
    }else {
    //Login failed
    $errmsg_arr[] = 'User Name and Password not found';
    $errflag = true;
    if($errflag) {
    $_SESSION['ERRMSG_ARR'] = $errmsg_arr;
    session_write_close();
    header("location: login.php");
    exit();
    }
    }
    }else {
    die("Query failed");
    }
    ?>