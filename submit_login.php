<?php
//submit_form.php

if (isset($_POST['loginFrmSubmit']) && !empty($_POST['name']) && !empty($_POST['password'])) {

    // Submitted form data
    $name = $_POST['name'];
    //$email = $_POST['email'];
    $password = $_POST['password'];
    
    //$confPassword = $_POST['confPassword'];
    //$type  = $_POST['userType'];
    $success = true;
    //$status = 'ok';
    $serverName = "161.117.122.252";
    $usernameDB = "p5_6";
    $passwordDB = "BKDEzs6TDN";
 
    
        //$conn = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);
        $conn = new mysqli($serverName, $usernameDB, $passwordDB);
        // Check connection
        if ($conn->connect_error) {
            header("location:dbError");
            //$success = false;
        } else {
            $sql = "SELECT * FROM p5_6.user_gp WHERE ";
            $sql .= "username='$name'";
            
            // Execute the query
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) {
                // Note that email field is unique, so should only have
                // one row in the result set.
                $row = $result->fetch_assoc();
                if(password_verify($password, $row['password']))
                {
                    session_start();
                    $user_name = $row["username"];
                    $user_type = $row["type"];
                    $user_id = $row["userID"];
                    $email = $row["email"];
                    $_SESSION["user"] = $user_name;
                    $_SESSION["userID"] = $user_id;
                    $_SESSION["email"] = $email;
                //console_log($user_name);
                
                    $statusLogin = 'ok';
                }

                //$lname = $row["lname"];
                //$successMsg = "Login Successful";
                //$sMsg = "Welcome back, ";

            } else {
                
                $statusLogin = 'rejected';
            }
            $result->free_result();
            unset($row);
            }
        $conn->close();
    
    echo $statusLogin;
    echo $user_type;
    echo $user_name;
    
    //
    //console.log($username);
    //echo $username;
    
    die;
}

