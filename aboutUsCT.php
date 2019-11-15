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
        <link rel="stylesheet" href="css/bootstrap.css"/>
        <link rel="stylesheet" href="css/main2.css"/>
        <link rel="stylesheet" href="css/modalcss.css"/>
        <link rel="stylesheet" href="css/aboutus.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 
        <script src="js/sideMenu.js"></script>
        <script src="js/modal.js"></script>
    </head>
    <body>
        <?php include 'headerLogin.php';?>
		<div class="jumbotron">
			<h1>About us</h1>
		</div>
		<br>
		<div class="container-fluid">
			<div class="jumbotron j1">
				<p>In 2019, 4 students from the Singapore Institute of Technology were exhausted after a long day of lectures, tutorials, and group discussions that lasted well into the night. None of them had had the time to have dinner and were starving. Instead of making the sensible decision to go to a fast food retaurant for the fifth night in a row, they decided to treat themselves by going to a popular Laksa store they've known about since their National Service days.</p>
			</div>
                        <div class="jumbotron j1">
                            <table>
                                <td class="">
                                        <p>Except, there was one problem. The store was on the other side of the island. They took the gamble and drove there as fast as they could, but alas, all that was there to greet them was a shuttered shop front and even emptier stomachs. Hunger and anticipation turned to frustration, which turned into an idea.</p>
                                </td>
                                <td>
                                        <img src='images/closed_shopfront.jpg' style="max-height: 100%; max-width: 100%; float: right;" />
                                </td>
                            </table>
                        </div>
			<div class="jumbotron j1">
				<p>And the rest is history.</p>
			</div>
                    	<div class="jumbotron j1">
                            <table>
                                <tr>
                                    <td>
                                        <img src="images/delivery_service.jpg" style="max-height: 100%; max-width: 100%; float: left;" />
                                    </td>
                                    <td>
                                        <p>Here at Guilty Pleasures, we strive to be the answer to be the answer to all your pressing mealtime needs. With over 1000 restaurants to choose from, from major chains to standalone family-run restaurants, you never have to worry about your fix of your favourite food when you need it most!</p>
                                    </td>
				</tr>
                            </table>
                        </div>
		</div>	
			
		<?php include "footer.php";?>
        
        
    </body>
</html>
