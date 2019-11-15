<?php
session_start();

if(!isset($_SESSION['user']))
{
    session_destroy();
}?>


<html>
    <head>
        <title>Locate Us</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width" initial-scale=1>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/bootstrap.css"/>
        <link rel="stylesheet" href="css/modalcss.css"/>
        <link rel="stylesheet" href="css/main2.css"/>
        <link rel="stylesheet" href="css/locateus.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 
        <script src="js/sideMenu.js"></script>
        <script src="js/modal.js"></script>
        <script src="js/require.js"></script> 
        <script src="js/locateUs.js"></script>
    </head>
    <body>
        <?php
            include "headerLogin.php";
        ?>
        
            <?php
                $servername = "161.117.122.252";
                $username = "p5_6";
                $password = "BKDEzs6TDN";

                // Create connection
                $conn = new mysqli($servername, $username, $password);

                // Check connection
                if ($conn->connect_error) {
                    die("<h1>Connection failed: " . $conn->connect_error . "</h1>");
                }
            ?>
        
        <div id = "googleMaps"></div>
        <?php
            echo "<script async defer src='https://maps.googleapis.com/maps/api/js?key=AIzaSyBWYRpKSmZtBiBy8I1qVqsewYuDmG1AXGc&callback=myMap' type='text/javascript'></script>";
            $sql = "SELECT * FROM p5_6.location";
            $result = $conn->query($sql);
            $markers_script = "<script>function myMap() {
                                            var mapProp= {
                                                center:new google.maps.LatLng(1.3521,103.8198),
                                                zoom:11,
                                                mapTypeId: google.maps.MapTypeId.HYBRID
                                            };
                                            var map = new google.maps.Map(document.getElementById('googleMaps'),mapProp);";
            $index = 0;
            while($row = $result->fetch_assoc())
            {
                $markers_script = $markers_script .  "
                var marker". $index ."_co = new google.maps.LatLng(". $row['latitude'] . "," . $row['longitude'] .");
                var marker" . $index ."= new google.maps.Marker({position: marker". $index ."_co});

                marker". $index .".setMap(map);";
                            $index = $index + 1;

            //                echo "<script>add_marker(" . $row['latitude'] . "," . $row['longitude'] . ")</script>";
                        }
                        $markers_script = $markers_script . "google.maps.event.addDomListener(window, 'load', myMap);
            }</script>";

            echo $markers_script;
        ?>
        <br>
        <div class='container-fluid'>
            <h1 id="locationhead"><b>Our Locations</b></h1><hr><br>
            <?php
                $region_array = array("North", "South", "East", "West");
                foreach($region_array as &$region) {
                    echo "<div class='col-md-3 displaylocation'><h2>" . $region . "</h2><hr><ul>";

                    $sql = "SELECT * FROM p5_6.location WHERE region='" . $region . "'; ";
                    $result = $conn->query($sql);

                    while($row = $result->fetch_assoc()) {
                        echo "<li><th><h4>" . $row["location_name"] . "</h4></th></li>";
                        echo "<p>" . $row["address"] . "</p>";
                    }
                    echo "</div>";
                }
            ?>
        </div>
        
        
        <?php
            include "footer.php";
        ?>
    </body>
</html>
