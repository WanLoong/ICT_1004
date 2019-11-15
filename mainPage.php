<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->


<?php

if(isset($_GET['reset']))
{
    session_start();
    unset($_SESSION["user"]);
    if(isset($_SESSION['cart_array']))
    {
        unset($_SESSION['cart_array']);
    }
    session_destroy();
    header("location:mainPage");
}

session_start();
if(!isset($_SESSION['user']))
{
    session_destroy();
}
?>

<html>
    <head>
        <title>Welcome To Guilty Pleasures!</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width" initial-scale=1>
        
        <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 
        <script src="js/sideMenu.js"></script>
        <script src="js/modal.js"></script>

        <link href="css/main2.css" rel="stylesheet">

        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/bootstrap.css"/>
        <!--<link rel="stylesheet" href="css/mainPage.css"/>-->
        <link rel="stylesheet" href="css/modalcss.css"/>

    </head>
    <body>

        <?php
        //include "header.php";
        include 'headerLogin.php';
        
        ?>


        <img src="images/foodMain.jpg" id="mainPic"/>
        <div class="container-fluid">
            <div class="center">Got Cravings? Wait No More!</div>
        </div>


        <!--MainPage Footer-->
        <?php
        include "footer.php";
        ?>

    



    </body>
</html>
