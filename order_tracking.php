<!DOCTYPE html>
<?php session_start();?>
<html>
     <head>
        <title>Order Tracking</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width" initial-scale=1>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/bootstrap.css"/>
        <link rel="stylesheet" href="css/main2.css"/>
        <!--<link rel="stylesheet" href="css/mainPage.css"/>-->
        <link rel="stylesheet" href="css/modalcss.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 
        <script src="js/sideMenu.js"></script>
        <script src="js/modal.js"></script>

        <style>
            h1{
                text-align: center;
            }
            
            .center{
                position: absolute;
                top: 55%;
                left: 50%;
                transform: translate(-50%, -50%);
                z-index: 5;
                font-size: 90px;
                font-weight: bold;
                /*text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;*/
                text-shadow: -1px 0 , 0 1px #f2f2f2, 1px 0 #fff, 0 -1px black;
                border: 2px solid black;
                padding-left:25px;
                padding-right:9px;
                padding-top: 8px;
                padding-bottom: 10px;
                max-width: 100%;
                max-height: 100%;
            }

            @media screen and (max-width: 1260px) {
                .center{
                    position: relative;
                    top: -620px;
                    left: 50%;
                    transform: translate(-50%, -50%);
                    z-index: 5;
                    font-size: 60px;
                    font-weight: bold;
                    /*text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;*/
                    text-shadow: -1px 0 , 0 1px #f2f2f2, 1px 0 #fff, 0 -1px black;
                    border: 2px solid black;
                    padding-left:25px;
                    padding-right:9px;
                    padding-top: 8px;
                    padding-bottom: 10px;
                    max-width: 100%;
                    max-height: 100%;
                }
            }

            @media screen and (max-width: 1246px) {
                .center{
                    position: relative;
                    top: -560px;
                    left: 50%;
                    transform: translate(-50%, -50%);
                    z-index: 5;
                    font-size: 60px;
                    font-weight: bold;
                    /*text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;*/
                    text-shadow: -1px 0 , 0 1px #f2f2f2, 1px 0 #fff, 0 -1px black;
                    border: 2px solid black;
                    padding-left:25px;
                    padding-right:9px;
                    padding-top: 8px;
                    padding-bottom: 10px;
                    max-width: 100%;
                    max-height: 100%;
                }
            }
            @media screen and (max-width: 1172px) {
                .center{
                    position: relative;
                    top: -500px;
                    left: 50%;
                    transform: translate(-50%, -50%);
                    z-index: 5;
                    font-size: 60px;
                    font-weight: bold;
                    /*text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;*/
                    text-shadow: -1px 0 , 0 1px #f2f2f2, 1px 0 #fff, 0 -1px black;
                    border: 2px solid black;
                    padding-left:25px;
                    padding-right:9px;
                    padding-top: 8px;
                    padding-bottom: 10px;
                    max-width: 100%;
                    max-height: 100%;
                }
            }
            @media screen and (max-width: 1098px) {
                .center{
                    position: relative;
                    top: -420px;
                    left: 50%;
                    transform: translate(-50%, -50%);
                    z-index: 5;
                    font-size: 60px;
                    font-weight: bold;
                    /*text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;*/
                    text-shadow: -1px 0 , 0 1px #f2f2f2, 1px 0 #fff, 0 -1px black;
                    border: 2px solid black;
                    padding-left:25px;
                    padding-right:9px;
                    padding-top: 8px;
                    padding-bottom: 10px;
                    max-width: 100%;
                    max-height: 100%;
                }
            }


            @media screen and (max-width: 1024px) {
                .center{
                    position: relative;
                    top: -380px;
                    left: 50%;
                    transform: translate(-50%, -50%);
                    z-index: 5;
                    font-size: 60px;
                    font-weight: bold;
                    /*text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;*/
                    text-shadow: -1px 0 , 0 1px #f2f2f2, 1px 0 #fff, 0 -1px black;
                    border: 2px solid black;
                    padding-left:25px;
                    padding-right:9px;
                    padding-top: 8px;
                    padding-bottom: 10px;
                    max-width: 100%;
                    max-height: 100%;
                }
            }

            @media screen and (max-width: 950px) {
                .center{
                    /*position: absolute;*/
                    /*top: 40%;*/
                    position: relative;
                    top: -300px;
                    left: 50%;
                    transform: translate(-50%, -50%);
                    z-index: 5;
                    font-size: 50px;
                    font-weight: bold;
                    /*text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;*/
                    text-shadow: -1px 0 , 0 1px #f2f2f2, 1px 0 #fff, 0 -1px black;
                    border: 2px solid black;
                    padding-left:25px;
                    padding-right:9px;
                    padding-top: 8px;
                    padding-bottom: 10px;
                    max-width: 100%;
                    max-height: 100%;
                }
            }


            @media screen and (max-width: 650px) {

                .center{
                    /*position: absolute;*/
                    /*top: 40%;*/
                    position: relative;
                    top: -230px;
                    left: 50%;
                    /*transform: translate(-50%, -50%);*/
                    z-index: 5;
                    font-size: 40px;
                    font-weight: bold;
                    /*text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;*/
                    text-shadow: -1px 0 , 0 1px #f2f2f2, 1px 0 #fff, 0 -1px black;
                    border: 2px solid black;
                    padding-left:25px;
                    padding-right:9px;
                    padding-top: 8px;
                    padding-bottom: 10px;
                    max-width: 100%;
                    max-height: 100%;
                }
            }

            @media screen and (max-width: 480px) {
                .center{
                    position: relative;
                    top: -130px;
                    left: 50%;
                    /*transform: translate(-50%, -50%);*/
                    z-index: 5;
                    font-size: 30px;
                    font-weight: bold;
                    /*text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;*/
                    text-shadow: -1px 0 , 0 1px #f2f2f2, 1px 0 #fff, 0 -1px black;
                    border: 2px solid black;
                    padding-left:25px;
                    padding-right:9px;
                    padding-top: 8px;
                    padding-bottom: 10px;
                    max-width: 100%;
                    max-height: 100%;
                }
            }
        </style>
    </head>
    
    <body>
        <?php include "headerLogin.php" ?>
        <div class="container-fluid">
            <h1>Order Tracking</h1>
            <table>
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
                
                $sql = "SELECT DISTINCT order_id FROM p5_6.orders WHERE user_id=2;";
                $result = $conn->query($sql);
                while ($row = $result->fetch_assoc())
                {
                 $sql_order = "SELECT * FROM p5_6.orders where order_id=" . $row["order_id"] . ";";
                 
                 echo "<p>" . $row['order_id'] ."</p>"; 
                }
            ?>
            </table>
            
        </div>
        <?php include "footer.php" ?>
    </body>
    