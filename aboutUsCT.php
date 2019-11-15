<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php session_start();
if(!isset($_SESSION["user"]))
{
    session_destroy();
}

?>
<html>
     <head>
        <title>Welcome To Guilty Pleasures!</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width" initial-scale=1>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
        <!--link rel="stylesheet" href="css/main2.css"/-->
        <link rel="stylesheet" href="css/mainPage.css" type="text/css">
        <link rel="stylesheet" href="css/modalcss.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 
        <script src="js/sideMenu.js"></script>
        <script src="js/modal.js"></script>
        <link rel="stylesheet" type="text/css" href="{{ url_for('static', filename='css/about_us.css') }}">

        <style>

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
            
/*            p {
                font-size: 2vw;
            }
            
            p.entireWidth {
                width: 100%;
                text-align: center;
            }
            
            h1 {
                font-size: 4vw;
            }
            
            h2 {
                font-size: 3vw;
            }*/
        </style>

    </head>
    <body>
        <?php include 'headerLogin.php';?>
        <!--<nav class="navbar navbar-expand-lg navbar-light bg-light">

            <a class="navbar-brand" href="#" onclick="openNav()" style="font-family: Snell Roundhand, cursive; font-size: 29px;"><i class="fa fa-bars bars" id="navMenuButton"></i>Guilty Pleasures</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="mainPage.php">Home <span class="sr-only">(current)</span></a>
                    </li>

                </ul>
                <form class="form-inline my-2 my-lg-0" style="padding-right: 40px;">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search">
                    <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>

                </form>
                <a href="#" style="padding-right: 10px; color: gray;" data-toggle="modal" data-target="#myModal"><i class="fas fa-user"></i> Login</a>


            </div>
        </nav>-->
		<div class="jumbotron" style="background-image: url(images/foodMain.jpg); background-size: 100%; background-repeat: no-repeat; background-position: top;">
			<h1>About us</h1>
		</div>
		<br>
		<div class="container-fluid">
			<div class="jumbotron">
                            <div>
                                 <p class="entireWidth">In 2019, 4 students from the Singapore Institute of Technology were exhausted after a long day of lectures, tutorials, and group discussions that lasted well into the night. None of them had had the time to have dinner and were starving. Instead of making the sensible decision to go to a fast food restaurant for the fifth night in a row, they decided to treat themselves by going to a popular Laksa store they've known about since their National Service days.</p>
                            </div>
                        </div>
			<table style="table-layout: fixed; width: 100%;">
				<tr class="jumbotron">
					<td style="width: 50%; padding-left: 50px;">
						<p>Except, there was one problem. The store was on the other side of the island. They took the gamble and drove there as fast as they could, but alas, all that was there to greet them was a shuttered shop front and even emptier stomachs. Hunger and anticipation turned to frustration, which turned into an idea.</p>
					</td>
					<td style="width: 50%;">
						<img src='images/closed_shopfront.jpg' style="max-height: 100%; max-width: 100%; float: right;" />
					</td>
				</tr>
			</table>
                        <br>
			<div class="jumbotron">
                            <div>
				<p class="entireWidth">And the rest is history.</p>
                            </div>
                        </div>    
			<table style="table-layout: fixed; width: 100%;">
                            <tr class="jumbotron">
                                <td style="width: 50%;">
                                    <img src="images/delivery_service.jpg" style="max-height: 100%; max-width: 100%; float: left;" />
                                </td>
                                <td style="width: 50%; padding-left: 50px;">
                                    <p>Here at Guilty Pleasures, we strive to be the answer to be the answer to all your pressing mealtime needs. With many dishes over many different types of cuisines, you never have to worry about your fix of your favourite food when you need it most!</p>
                                </td>
                            </tr>
			</table>
                        <br>
			<h2>Contact Us</h2>
			<table style="table-layout: fixed;width: 7%;height: 7%;margin: 0">
				<tr>
                                    <td><a href=""><img src="images/facebook.png" style="width: 95%;"/></a></td>
                                    <td><a href=""><img src="images/twitter.png" style="width: 95%;" /></a></td>
                                    <td><a href=""><img src="images/instagram.png" style="width: 95%;" /></a></td>
				</tr>
			</table>
		
			<p style="font-size: 1.25vw;">42 Barker Street,<br>#09-09, WestWay Industrial Park,<br>Singapore 00000000</p>
		</div>	
			
	<?php include "footer.php"; ?>
        
        
    </body>
</html>
