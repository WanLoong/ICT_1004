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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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
        
        //$test = "hi";
        $errorMsg = "";
        
        if (isset($_POST['submit'])) {
             //echo "<script>console.log('test' );</script>";
           
 
            

             inputValidation();
             
           
             //test();
        } 
        
        function test(){
            echo 'test';
        }

        function inputValidation() {
            // put your code here
            //Register code testing
            //echo "<p>test</p>";
            $success = true;
            global $errorMsg;
              
            //echo $errorMsg = 'one';
            //$inputUsername = $errorMsg = "";
            //$lastName = $errorMsg = "";
            //$inputEmail = $errorMsg = "";
            //$inputPassword = $errorMsg = "";
            //$inputConfPassword = $errorMsg = "";
            //$success = true;
            // $successFN = true;
            //Validate FirstName
           // echo("<script>console.log('test');</script>");
            
            if (empty($_POST["inputUsername"])) {
                //$errorMsg .= "First Name is required.<br>";
                $success = false;
            } else {
                $inputUsername = sanitize_input($_POST["inputUsername"]);
            }


            if (empty($_POST["inputEmail"])) {
                //$errorMsg .= "Email is required.<br>";
                $success = false;
            } else {
                $inputEmail = sanitize_input($_POST["inputEmail"]);
                // Additional check to make sure e-mail address is well-formed.
                if (!filter_var($inputEmail, FILTER_VALIDATE_EMAIL)) {
                    $errorMsg = "Invalid email format.";
                    $success = false;
                }
            }


            if (empty($_POST["inputPassword"])) {
                //$errorMsg .= "Password is required.<br>";
                $success = false;
            } else {
                $inputPassword = sanitize_input($_POST["inputPassword"]);
            }


            if (empty($_POST["inputConfPassword"])) {
                //$errorMsg .= "Confirmation of password is required.<br>";
                $success = false;
            } else {
                $inputConfPassword = sanitize_input($_POST["inputConfPassword"]);
            }

            //if ($_POST['inputPassword'] != $_POST['inputConfPassword']) {
                //echo "<p>*Oops! The passwords did not match, please try again.*";
                //$errorMsg = 'Passwords do not match';
           // }

            if ($success) {
                //echo "<h1> Your Registration is successful!</h1>";
                //echo "<h4>Thank you for signing up, " . $lastName;
                //echo '</br>';
                //include 'buttonSuccess.php';
                $errorMsg = 'Registered Successfully';
            } else {
                //echo "<h1> Oops!</h1>";
                //echo "<h3> The following input errors were detected:</h3>";
                //echo "<p>"  . $errorMsg . "</p>";
                //echo "<button onclick= \"location.href='register.php'\">your buttons name goes here</button>" ;
                //include 'buttonFail.php';
                $errorMsg = 'Inputs are incomplete!';
            }
        }

//Helper function that checks input for malicious or unwanted content.
        function sanitize_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
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
                                        <!--<a id="messageSpan" data-toggle="modal" data-target="#modalRegisterForm" data-dismiss="modal"><span>No account? Sign Up Here</span></a>-->
                                        <a id="messageSpan" onclick="$('#modalRegisterForm').modal({'backdrop': 'static'});" data-dismiss="modal"><span>No account? Sign Up Here</span></a>
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
            <form method="post" name="formname">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header text-center">
                            <h4 class="modal-title w-100" style="color: #26bf83;">Sign up</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="modal-body mx-3">
                            <div class="md-form mb-2">
                                <i class="fas fa-user prefix grey-text"></i>
                                <input type="text" id="inputUsername" class="form-control validate" >
                                <label data-error="wrong" data-success="right" for="orangeForm-name">Your Username</label>
                            </div>
                            <div class="md-form mb-2">
                                <i class="fas fa-envelope prefix grey-text"></i>
                                <input type="email" id="inputEmail" class="form-control validate">
                                <label data-error="wrong" data-success="right" for="orangeForm-email">Your Email</label>
                            </div>
                            <div class="md-form mb-2">
                                <i class="fas fa-lock prefix grey-text"></i>
                                <input type="password" id="inputPassword" class="form-control validate">
                                <label data-error="wrong" data-success="right" for="orangeForm-pass">Your Password</label>
                            </div>
                            <div class="md-form mb-2">
                                <i class="fas fa-lock prefix grey-text"></i>
                                <input type="password" id="inputConfPassword" class="form-control validate">
                                <label data-error="wrong" data-success="right" for="orangeForm-pass">Confirm Password</label>
                            </div>
                            
                            <div class="md-form mb-2">
                                <!--<i class="fas fa-lock prefix grey-text"></i>-->

                                <p><?= $errorMsg ?></p>
                            </div>

                            <!--<form name="formname" onsubmit="return false" method="post">-->
                           
                                
                            
                           

                        </div>


                        <div class="modal-footer d-flex justify-content-center">


                        
                             

                            <!--<button class="btn" onclick="$('#modalRegisterForm').modal({'show');">test</button>-->
                            <input type="submit" name="submit" value="submit" >
                        

                        </div>
                        



                    </div>
                </div>
            </form>
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





    </body>
</html>
