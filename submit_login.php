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
    define("DBHOST", "localhost");
    define("DBNAME", "guilty_pleasures");
    define("DBUSER", "root");
    define("DBPASS", "");
 
    
        $conn = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);
        // Check connection
        if ($conn->connect_error) {
            $errorMsg = "Connection failed: " . $conn->connect_error;
            //$success = false;
        } else {
            $sql = "SELECT * FROM user WHERE ";
            $sql .= "username='$name' AND password='$password'";
            
            // Execute the query
            $result = $conn->query($sql);
            
            
            if ($result->num_rows > 0) {
                // Note that email field is unique, so should only have
                // one row in the result set.
                $row = $result->fetch_assoc();
                
                $user_name = $row["username"];
                $user_type = $row["type"];
                
                //console_log($user_name);
        
                $statusLogin = 'ok';
             
                
                //$lname = $row["lname"];
                //$successMsg = "Login Successful";
                //$sMsg = "Welcome back, ";

            } else {
                
                $statusLogin = 'rejected';
            }
            $result->free_result();
           
        }
        $conn->close();
    
    echo $statusLogin;
    //echo $user_type;
    echo $user_name;
    
    
    //
    //console.log($username);
    //echo $username;
    
    die;
}

