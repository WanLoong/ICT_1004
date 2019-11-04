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
        ?>

        <!-- Log In Modal -->
        <div id="myModal" class="modal fade" role="dialog">  
            <div class="modal-dialog">
                <div class="modal-content">      
                    <div class="modal-header" style="display:inline;">        
                        <button type="button" class="close" data-dismiss="modal">×</button>        
                        <h4 class="modal-title">Log in with your Account</h4>      
                    </div>

                    <div class="modal-body">        
                        <table>          
                            <tbody>            
                                <tr>              
                                    <td>                
                                        <input type="text" id="userNameTextBox" placeholder="Username" />              
                                    </td>            
                                </tr>            
                                <tr>              
                                    <td>                
                                        <span id="userNamSpan"></span>              
                                    </td>            
                                </tr>            
                                <tr>              
                                    <td>                
                                        <input type="text" id="passwordTextBox" placeholder="Password" />              
                                    </td>            
                                </tr>            
                                <tr>              
                                    <td>                
                                        <span id="passwordSpan"></span>              
                                    </td>            
                                </tr>            
                                <tr>              
                                    <td>                
                                        <input type="button" id="submitButton" value="Login" />              
                                    </td>            
                                </tr>            
                                <tr>              
                                    <td>                
                                        <a id="messageSpan" data-toggle="modal" data-target="#modalRegisterForm" data-dismiss="modal"><span>No account? Sign Up Here</span></a>             
                                    </td>            
                                </tr>            
                                <tr>              
                                    <td>                
                                        <img id="loadingImg" src="loading.gif" />              
                                    </td>           
                                </tr>          
                            </tbody>        
                        </table>      
                    </div>
                    <div class="modal-footer">      
                        <button type="button" class="btn btn-default" data-dismiss="modal" id="bottomCloseButton">Close</button>    
                    </div> 


                </div>
            </div>
        </div>

        <!--Sign Up Modal-->
        <div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h4 class="modal-title w-100" style="color: #26bf83;">Sign up</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body mx-3">
                        <p class="statusMsg"></p>
                        <form role="form">
                            <div class="md-form">
                                <i class="fas fa-user prefix grey-text"></i>
                                <input type="text" id="inputUsername" class="form-control" >
                                <label for="inputUsername">Your Username</label>
                            </div>
                            <div class="md-form">
                                <i class="fas fa-envelope prefix grey-text"></i>
                                <input type="email" id="inputEmail" class="form-control">
                                <label for="inputEmail">Your Email</label>
                            </div>
                            <div class="md-form">
                                <i class="fas fa-lock prefix grey-text"></i>
                                <input type="password" id="inputPassword" class="form-control">
                                <label for="inputPassword">Your Password</label>
                            </div>
                            <div class="md-form">
                                <i class="fas fa-lock prefix grey-text"></i>
                                <input type="password" id="inputConfPassword" class="form-control">
                                <label for="inputConfPassword">Confirm Password</label>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer d-flex justify-content-center">
                        <button class="btn submitBtn" id="signUpButton" style="background: lightgray;margin-bottom: 4px;" onclick="submitContactForm()">Sign up!</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- successSignUpModal-->
        <div class="modal fade" id="modalSuccess">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="display:inline;">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title">Welcome!</h4>
                    </div>
                    <div class="modal-body">
                        <p>Start your Guilty Pleasures Journey Now!<strong> Log In!</strong></p>
                    </div>
                    <div class="modal-footer">

                        <button id="closeButton" type="button" class="btn btn-primary" data-dismiss="modal" class="close">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!--MainPage SideMenu-->
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
                $('body').css('overflow-y', 'hidden');

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

        <script>
            function submitContactForm() {
                var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
                var name = $('#inputUsername').val();
                var email = $('#inputEmail').val();
                var password = $('#inputPassword').val();
                var confPassword = $('#inputConfPassword').val();

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
                    alert('Your Passwords Do Not Match!');
                    //$('#inputConfPassword').focus();
                    return false;
                } else {
                    $.ajax({
                        type: 'POST',
                        url: 'submit_form.php',
                        //data: 'contactFrmSubmit=1&name='+name+'&email='+email+'&password='+password+'$confPassword='+confPassword,
                        data:'contactFrmSubmit=1&name='+name+'&email='+email+'&password='+password+'&confPassword='+confPassword,
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
        </script>






    </body>
</html>
