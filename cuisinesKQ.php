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
        // put your code here
        ?>

        <div id="mySidepanel" class="sidepanel">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
            <a href="aboutUsCT.php" style="font-family: Times, Times New Roman, serif">About Us</a>
            <a href="cuisinesKQ.php" style="font-family: Times, Times New Roman, serif">Cuisines</a>
            <!--<a href="#" style="font-family: Times, Times New Roman, serif">Locations</a>-->
            <a href="aboutUsCT.php" style="font-family: Times, Times New Roman, serif">Contact Us</a>
        </div>

        <?php
        include "header.php";
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
        <?php include "chineseCuisines.php";?>
        
        <?php include "muslimCuisines.php";?>

        
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


            document.getElementById("modalButton").onclick = function () {
                location.href = "shoppingCartNel.php";
            };
            document.getElementById("modalButton2").onclick = function () {
                location.href = "shoppingCartNel.php";
            };
            document.getElementById("modalButton3").onclick = function () {
                location.href = "shoppingCartNel.php";
            };
            document.getElementById("modalButton4").onclick = function () {
                location.href = "shoppingCartNel.php";
            };
            document.getElementById("modalButton5").onclick = function () {
                location.href = "shoppingCartNel.php";
            };
            document.getElementById("modalButton6").onclick = function () {
                location.href = "shoppingCartNel.php";
            };
            document.getElementById("modalButton7").onclick = function () {
                location.href = "shoppingCartNel.php";
            };
            document.getElementById("modalButton8").onclick = function () {
                location.href = "shoppingCartNel.php";
            };
            document.getElementById("modalButton9").onclick = function () {
                location.href = "shoppingCartNel.php";
            };
            document.getElementById("modalButton10").onclick = function () {
                location.href = "shoppingCartNel.php";
            };
            document.getElementById("modalButton11").onclick = function () {
                location.href = "shoppingCartNel.php";
            };
            document.getElementById("modalButton12").onclick = function () {
                location.href = "shoppingCartNel.php";
            };
            document.getElementById("modalButton13").onclick = function () {
                location.href = "shoppingCartNel.php";
            };
            document.getElementById("modalButton14").onclick = function () {
                location.href = "shoppingCartNel.php";
            };
            document.getElementById("modalButton15").onclick = function () {
                location.href = "shoppingCartNel.php";
            };
            document.getElementById("modalButton16").onclick = function () {
                location.href = "shoppingCartNel.php";
            };
            document.getElementById("modalButton17").onclick = function () {
                location.href = "shoppingCartNel.php";
            };
            document.getElementById("modalButton18").onclick = function () {
                location.href = "shoppingCartNel.php";
            };
            document.getElementById("modalButton19").onclick = function () {
                location.href = "shoppingCartNel.php";
            };
            document.getElementById("modalButton20").onclick = function () {
                location.href = "shoppingCartNel.php";
            };
            document.getElementById("modalButton21").onclick = function () {
                location.href = "shoppingCartNel.php";
            };
            document.getElementById("modalButton22").onclick = function () {
                location.href = "shoppingCartNel.php";
            };
            document.getElementById("modalButton23").onclick = function () {
                location.href = "shoppingCartNel.php";
            };
            document.getElementById("modalButton24").onclick = function () {
                location.href = "shoppingCartNel.php";
            };

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
