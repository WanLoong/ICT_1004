<?php
//if (isset($POST["rUserName"])) {
if (isset($_POST['retrieveFormSubmit']) && !empty($_POST['name'])) {

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
            
            $u_username = $row["username"];
            $u_email = $row["email"];
            $u_password = $row["password"];
            $u_userId = $row["userID"];
            //$u_

            /*$output .= '<div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label editLabel">Username:</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" id="ut_Username" type="text" value="'.$row["username"].'">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label editLabel">Email:</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" id="ut_email" type="email" value="'.$row["email"].'">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label editLabel">Password:</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" id="ut_password" type="text" value="'.$row["password"].'">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label editLabel">Confirm Password:</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" id="ut_confPassword" type="text" value="Enter new password..">
                                    </div>
                                </div>';*/
        }
        //echo $output;
        echo '{';
        echo $u_username;
        echo '}';
        echo $u_email;
        echo '[';
        echo $u_password;
        echo ']';
        echo $u_userId;
        echo '|';
        
    } 
}