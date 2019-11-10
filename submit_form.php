<?php

//submit_form.php
if (isset($_POST['contactFrmSubmit']) && !empty($_POST['name']) && !empty($_POST['email']) && (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) && !empty($_POST['password']) && !empty($_POST['confPassword'])&& !empty($_POST['userType'])) {

    // Submitted form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confPassword = $_POST['confPassword'];
    $type  = $_POST['userType'];
    $success = true;
    //$status = 'ok';
    define("DBHOST", "localhost");
    define("DBNAME", "guilty_pleasures");
    define("DBUSER", "root");
    define("DBPASS", "");
    
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
    $conn = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);
    // Check connection
    if ($conn->connect_error) {
        echo '<p>connection failed</p>';
        //$errorMsg = "Connection failed: " . $conn->connect_error;
        $success = false;
    } else {
        $sql = "INSERT INTO user (username, email, password, type)";
        $sql .= " VALUES ('$name', '$email', '$password', '$type')";
        $status = 'ok';
        //echo '<p>connection passed</p>';
        // Execute the query
        
        if (!$conn->query($sql)) {
            $errorMsg = "Database error: " . $conn->error;
            $success = false;
        }
    }
    $conn->close();
    
    echo $status;
    
    die;
}
