<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->


<?php
session_start();
if (!isset($_SESSION['user'])) {
    unset($_SESSION['user']);
    session_destroy();
}
?>

<html>
    <head>
        <title>Welcome To Guilty Pleasures!</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width" initial-scale=1>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 
        
        <script src="js/modal.js"></script>
        <!--<link href="css/main2.css" rel="stylesheet">-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/bootstrap.css"/>
        <!--<link rel="stylesheet" href="css/mainPage.css"/>-->
        <link rel="stylesheet" href="css/modalcss.css"/>



<?php
//include "header.php";
include 'headerLogin.php';
?>


        <div class="center">Got Cravings? Wait No More!</div>


        <!--MainPage Footer-->
<?php
include "footer.php";
?>


        <script>
            $('#loginButton').click(function (e) {
                e.preventDefault();
                $('body').css('overflow-y', 'hidden');

            });

            $('#messageSpan').click(function (e) {
                e.preventDefault();
                $('body').css('overflow-y', 'hidden');
            });

            $('#signUpButton').click(function (e) {
                e.preventDefault();
                $('body').css('overflow-y', 'hidden');
                //$("#modalRegisterForm").modal({"backdrop": "static"});
                console.log('ji');

            });

            $('#closeButton').click(function (e) {
                e.preventDefault();
                $('body').css('overflow-y', 'auto');
            });

            $('.close').click(function (e) {
                e.preventDefault();
                $('body').css('overflow-y', 'auto');
            });

        </script>

    </body>
</html>
