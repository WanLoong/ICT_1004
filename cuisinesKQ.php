<?php

define("DBHOST", "161.117.122.252");
define("DBNAME", "p5_6");
define("DBUSER", "p5_6");
define("DBPASS", "BKDEzs6TDN");

$conn = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);
session_start();

if ($conn->connect_error)
{
    $_SESSION['dberror']=$conn->connect_error;
    header('Location:dbError.php');

}

if(isset($_POST["pid"]))
{
    $pid = sanitize_input($_POST["pid"]);
    $productName = sanitize_input($_POST["pname"]);
    $productDesc = sanitize_input($_POST["pdesc"]);
    $price = sanitize_input($_POST["price"]);

    $found = false;
    if(!isset($_SESSION["cart_array"])||count($_SESSION["cart_array"])<1)
    {
        $_SESSION["cart_array"]= array(0=>array("product_id"=>$pid,"productName"=>$productName,"productDesc"=>$productDesc,"price"=>$price));
    }
    else
    {
        foreach($_SESSION["cart_array"] as $eachitem)
        {
            while(list($key,$value)=each($eachitem))
            {
                if($key == "product_id" && $value == $pid)
                {
                    $found = true;
                }
            }
        }
        if($found == false)
        {
            array_push($_SESSION["cart_array"],array("product_id"=>$pid,"productName"=>$productName,"productDesc"=>$productDesc,"price"=>$price));
        }
    }
}

function sanitize_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Welcome To Guilty Pleasures!</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/bootstrap.css"/>
        <link rel="stylesheet" href="css/main2.css"/>
        <link rel="stylesheet" href="css/modalcss.css"/>
        <link rel="stylesheet" href="css/cusineMenu_1.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 
        <script src="js/sideMenu.js"></script>
    </head>
    <body>

        <?php
        include "headerLogin.php";
        ?>
    
        <!-- Header -->
        <header>
            <section class="whatsonmenu">
                <h1>What's on menu?</h1>
            </section>
        </header>
        <!--Menu Category Selection-->
        <section class="menu-theme">
            <div class="container">
                <div class="row">
                    <!-- Chinese selection-->
                    <div class="col-md-6">
                        <div class="ChineseMenu">
                            <h3 class="changecolor">Chinese</h3>   
                            <!-- set Max-width/Zoom in image -->
                            <div class='image-box'>
                                <!-- Clickable link -->
                                <a class="scroll" href="#chinesefood">
                                    <img onmouseover="textBold(0)" onmouseout="textNotBold(0)" src="images/Chinese.jpg" alt="Chinese Menu">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Halal Selection -->
                    <div class="col-md-6">
                        <div class="IMMenu">
                            <h3 class="changecolor">Halal</h3>
                            <!-- Set max-width/Zoom in Image-->
                            <div class='image-box'>
                                <a class = "scroll" href="#IMfood">
                                    <img onmouseover="textBold(1)" onmouseout="textNotBold(1)" src="images/IMCuisine1.jpg" alt="Indian Menu">
                                </a>    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
        </section>
        <?php 
        include "chineseCuisines.php";
        include "muslimCuisines.php";
        ?>
        <?php       
            include "footer.php";
        ?>
        <!--<footer class="page-footer font-small blue" style="background: white;margin-top: 30px">

    <div class="footer-copyright text-center py-3">© 2019 Copyright:
        <a href="https://mdbootstrap.com/education/bootstrap/">Guilty Pleasures!</a>
    </div>

</footer>-->

        <script>
            function textBold(x) {
                if (x == "0") {
                    document.getElementsByClassName("changecolor")[0].style.color = "black";
                } else if (x == "1")
                {
                    document.getElementsByClassName("changecolor")[1].style.color = "black"
                }
            }
            function textNotBold(x) {
                if (x == "0") {
                    document.getElementsByClassName("changecolor")[0].style.color = "#adadad";
                } else if (x == "1")
                {
                    document.getElementsByClassName("changecolor")[1].style.color = "#adadad";
                }
            }

            $(document).ready(function(){
                var scrollLink = $('.scroll');
                scrollLink.click(function(event){
                    event.preventDefault();
                    $('body,html').animate({
                        scrollTop: $(this.hash).offset().top
                    }, 1000);
                })
            })  
        </script>
    </body>


</html>
