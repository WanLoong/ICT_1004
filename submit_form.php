<?php

//submit_form.php
if (isset($_POST['contactFrmSubmit']) && !empty($_POST['name']) && !empty($_POST['email']) && (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) && !empty($_POST['password']) && !empty($_POST['confPassword'])&& !empty($_POST['userType'])) {

    // Submitted form data
    $name =  $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $confPassword = $_POST['confPassword'];
    $type  = $_POST['userType'];
    $success = true;
    //$status = 'ok';
    //define("DBHOST", "161.117.122.252");
    //define("DBNAME", "p5_6");
    //define("DBUSER", "p5_6");
    //define("DBPASS", "BKDEzs6TDN");
    
    $serverName = "161.117.122.252";
    $usernameDB = "p5_6";
    $passwordDB = "BKDEzs6TDN";
    
    //$message= $_POST['message'];

    /*
     * Send email to admin
     */
    $to = 'admin@example.com';
    $subject = 'Contact Request Submitted';

    $htmlContent = '
    <h4>Contact request has submitted at tutorial101, details are given below.</h4>
    <table cellspacing="0" style="width: 300px; height: 200px;">
        <tr>
            <th>Name:</th><td>' . $name . '</td>
        </tr>
        <tr style="background-color: #e0e0e0;">
            <th>Email:</th><td>' . $email . '</td>
        </tr>
        <tr>
            <th>Message:</th><td>' . $password . '</td>
        </tr>
        <tr>
            <th>Message:</th><td>' . $confPassword . '</td>
        </tr>
      
    </table>';

    // Set content-type header for sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // Additional headers
    $headers .= 'From: tutorial101<sender@example.com>' . "\r\n";
    
    //global $name, $email, $password, $success, $status;
    // Create connection
    //$conn = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);
    //$conn = new mysqli(DBHOST, DBNAME, DBPASS);
    $conn = new mysqli($serverName, $usernameDB, $passwordDB);
    // Check connection
    if ($conn->connect_error) {
        header("location:dbError");
        //console.log("connection failed");
        //$errorMsg = "Connection failed: " . $conn->connect_error;
        $success = false;
    } else {
        $sql = "INSERT INTO p5_6.user_gp (username, password, email, type)";
        $sql .= " VALUES ('$name', '$password', '$email', '$type')";
        $status = 'ok';
        //echo '<p>connection passed</p>';
        // Execute the query
      //  $salt = substr(base_convert(sha1(uniqid(mt_rand())),16,36), 0, 14);
        if (!$conn->query($sql)) {
            $errorMsg = "Database error: " . $conn->error;
            $success = false;
        }
    }
    $result->free_result();
    unset($row);
    $conn->close();
    
    echo $status;
    
    die;
}
