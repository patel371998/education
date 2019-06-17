<?php
    //Start session
    session_start();

    //Include database connection details
    require_once('dbconnect.php');

    //Array to store validation errors
    $errmsg_arr = array();

    //Validation error flag
    $errflag = false;

    //Connect to mysql server
   
   

    //Select database


    //Function to sanitize values received from the form. Prevents SQL injection
    function clean($str) {
        $str = @trim($str);
        if(get_magic_quotes_gpc()) {
            $str = stripslashes($str);
        }
        return mysql_real_escape_string($str);
    }

    //Sanitize the POST values
    $user_email = clean($_POST['user_email']);
    $pwd = clean($_POST['password']);

    //Input Validations
    if($user_email == '') {
        $errmsg_arr[] = 'Login ID missing';
        $errflag = true;
    }
    if($pwd == '') {
        $errmsg_arr[] = 'Password missing';
        $errflag = true;
    }

    //If there are input validations, redirect back to the login form
    if($errflag) {
        $_SESSION['ERRMSG_ARR'] = $errmsg_arr;
        session_write_close();
        header("location: admin.php");
        exit();
    }

    //Create query
    $qry="SELECT * FROM customer WHERE user_email='$user_email' AND password='$pwd' ";

    if ($user_email= )

    $result=mysql_query($qry);

    //Check whether the query was successful or not
    if($result) {
        if(mysql_num_rows($result) == 1) {
            //Login Successful
            session_regenerate_id();
            $customer = mysql_fetch_assoc($result);
            $_SESSION['SESS_id'] = $customer['id'];
            $_SESSION['SESS_fname'] = $customer['first_name'];
            $_SESSION['SESS_lname'] = $customer['last_name'];
            session_write_close();
            header("location: member-index.php");
            exit();
        }else {
            //Login failed
            header("location: login-failed.php");
            exit();
        }
    }else {
        die("Query failed");
    }
?>