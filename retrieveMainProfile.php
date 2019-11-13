<?php
//if (isset($POST["rUserName"])) {
if (isset($_POST['retrieveMainFormSubmit']) && !empty($_POST['name'])) {

    $serverName = "161.117.122.252";
    $usernameDB = "p5_6";
    $passwordDB = "BKDEzs6TDN";
    $name = $_POST['name'];
    $output = '';
    //console_log($name);

    //$conn = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);
    $conn = new mysqli($serverName, $usernameDB, $passwordDB);
    // Check connection
    if ($conn->connect_error) {
        $errorMsg = "Connection failed: " . $conn->connect_error;
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

            $output .= '<h4 class="m-y-2" id="editUser" style="font-weight:bold;">Welcome, '.$row["username"].' ! To Guilty Pleasures!</h4>';
        }
        echo $output;
        
    } 
}