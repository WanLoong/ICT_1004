<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
if(isset($_GET["logcount"]))
{
    echo '<script type="text/javascript">';
    echo '  alert("You are not logged in to admin.")';
    echo '</script>';
}
?>



<?php
if(isset($_GET["logcount"]))
{
    echo '<script type="text/javascript">';
    echo '  alert("You are not logged in to admin.")';
    echo '</script>';
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

        <style>
            
            .center{
                position: absolute;
                top: 55%;
                left: 50%;
                transform: translate(-50%, -50%);
                z-index: 5;
                font-size: 91px;
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


            .mb-5 {
                margin-bottom: 1.5rem;
            }
            
           

        </style>

        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/bootstrap.css"/>
        <link rel="stylesheet" href="css/main2.css"/>
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


        <script>
            $('#loginButton').click(function (e) {
                e.preventDefault();
                //$('body').css('overflow-y', 'hidden');

            });

            $('#messageSpan').click(function (e) {
                e.preventDefault();
                $('body').css('overflow-y', 'hidden');
            });

            $('#signUpButton').click(function (e) {
                e.preventDefault();
                $('body').css('overflow-y', 'hidden');
            });

            $('#closeButton').click(function (e) {
                e.preventDefault();
                $('body').css('overflow-y', 'auto');
            });

            $('#bottomCloseButton').click(function (e) {
                e.preventDefault();
                $('body').css('overflow-y', 'auto');
            });

            $('.close').click(function (e) {
                e.preventDefault();
                $('body').css('overflow-y', 'auto');
            });



        </script>

        <!--<script>
            
            
            function submitContactForm(type) {
                var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
                var name = $('#inputUsername').val();
                var email = $('#inputEmail').val();
                var password = $('#inputPassword').val();
                var confPassword = $('#inputConfPassword').val();
                var userType = type;
                //alert(userType);

                if (name.trim() == '') {
                    alert('Please Enter Your Username.');
                    $('#inputName').focus();
                    return false;
                } else if (email.trim() == '') {
                    alert('Please Enter Your Email.');
                    $('#inputEmail').focus();
                    return false;
                } else if (email.trim() != '' && !reg.test(email)) {
                    alert('Please Enter Valid Email.');
                    $('#inputEmail').focus();
                    return false;
                } else if (password.trim() == '') {
                    alert('Please Enter Your Password.');
                    $('#inputPassword').focus();
                    return false;
                } else if (confPassword.trim() == '') {
                    alert('Please Confirm Your Password.');
                    $('#inputConfPassword').focus();
                    return false;
                } else if (confPassword != password) {
                    alert('Your Passwords Do Not Match.');
                    //$('#inputConfPassword').focus();
                    return false;
                } else {
                    $.ajax({
                        type: 'POST',
                        url: 'submit_form.php',
                        //data: 'contactFrmSubmit=1&name='+name+'&email='+email+'&password='+password+'$confPassword='+confPassword,
                        data:'contactFrmSubmit=1&name='+name+'&email='+email+'&password='+password+'&confPassword='+confPassword+'&userType='+userType,
                        beforeSend: function () {
                            $('.submitBtn').attr("disabled", "disabled");
                            $('.modal-body').css('opacity', '.5');
                        },
                        success:function(msg) {
                            if (msg == 'ok') {
                                $('#inputUsername').val('');
                                $('#inputEmail').val('');
                                $('#inputPassword').val('');
                                $('#inputConfPassword').val('');
                                $('.statusMsg').html('<span style="color:green;">Registered Successfully!</p>');
                            } else {
                                $('.statusMsg').html('<span style="color:red;">Some problem occurred, please try again.</span>');
                            }
                            $('.submitBtn').removeAttr("disabled");
                            $('.modal-body').css('opacity', '');
                        }
                    });
                }
            }
        </script>-->






    </body>
</html>
