  
<style>
    .nav-tabs .nav-link.active{
        background-color: #f9f9f9;

    }
    .md-form {
        margin-bottom: 8px;
    }

</style>
<body onload="setDisplay()">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">

        <a class="navbar-brand" href="#" onclick="openNav()" style="font-family: Snell Roundhand; font-size: 29px;"><i class="fa fa-bars bars" id="navMenuButton"></i>Guilty Pleasures</a>

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


            <div class="dropdown show">
                <!--<a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"                
                </a>-->
                <a id="loginButton" href="#" style="padding-right: 10px; color: gray;" role="button" id="dropdownMenuLink"><i class="fas fa-user"></i> <span id="testOutput">Login</span></a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" id="dropdownMenu">
                    <a class="dropdown-item" href="#">View Profile</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#" id="logoutButton">    Logout</a>
                </div>
            </div>
            
            <?php if(isset($_SESSION['user']))
            {
                echo '<a id="shoppingCartButton" href="shoppingCartNel.php" style="padding-left: 10px; padding-right: 10px; color: gray;"><i class="fas fa-shopping-cart"></i></a>';
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
                            <form role="form">
                                <p class="loginStatusMsg" style="margin-top:12px;margin-left: 15px;" id="loginStatusMsg"></p>
                                <table>          
                                    <tbody>            
                                        <tr>              
                                            <td>                
                                                <input type="text" id="usernameTextBox" placeholder="Username" />              
                                            </td>            
                                        </tr>            
                                        <tr>              
                                            <td>                
                                                <span id="userNamSpan"></span>              
                                            </td>            
                                        </tr>            
                                        <tr>              
                                            <td>                
                                                <input type="password" id="passwordTextBox" placeholder="Password" />              
                                            </td>            
                                        </tr>            
                                        <tr>              
                                            <td>                
                                                <span id="passwordSpan"></span>              
                                            </td>            
                                        </tr>            
                                        <tr>              
                                            <td>                
                                                <input type="button" id="loginSubmitButton" value="Login"/>              
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
                            </form>
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

                            <form role="form">
                                <!--<ul class="nav nav-tabs nav-justified" id="myTab" role="tablist" style="margin-top:0px;">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="user-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">User</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="admin-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Admin</a>
                                    </li>
                                </ul>-->
                                <p class="statusMsg" style="margin-top:12px;"></p>
                                <div class="md-form" style="margin-top:-8px;">
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
                            <button class="btn submitBtn" id="signUpButton" style="background: lightgray;margin-bottom: 4px;">Sign up!</button>
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
                            <p>Start your Guilty Pleasures Journey Now!!<strong> Log In!</strong></p>
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
                <a href="locateUs.php" style="font-family: Times, Times New Roman, serif">Locations</a>
                <a href="aboutUsCT.php" style="font-family: Times, Times New Roman, serif">Contact Us</a>
            </div>

        </div>
    </nav>
    <script>

        var statusMsg = '';
        var user_name = '';
        var userDisplay = '';
        var Display = '';
        var state = 'false';
        var typeUser = '';
        var adminDisplay = '';
        var checkTypeUser = '';
        //var menuState;



        $("#loginButton").click(function () {
            $(this).data('clicked', true);
            console.log(state);

            if (state == 'true') {
                //$('body').css('overflow-y', 'auto');
                $('.dropdown-menu').toggleClass('show');
                var menuState = document.getElementById('dropdownMenu');
                menuState.style.visibility = 'visible';
                $('body').css('overflow-y', 'auto');
                //$('#myModal').modal('hide');
                //$('body').css('overflow-y', 'hidden');
            } else if (state == 'false') {
                $('.dropdown-menu').toggleClass('hide');
                var menuState = document.getElementById('dropdownMenu');
                menuState.style.visibility = 'hidden';
                $('body').css('overflow-y', 'hidden');
                $('#myModal').modal('show');
            }



            // console.log('menuopen');

        });
        
        $("#logoutButton").click(function () {
            checkTypeUser = sessionStorage.getItem("admin_type");
            if (checkTypeUser == 'admin') {
                $(this).data('clicked', true);
                document.getElementById('testOutput').innerHTML = "Login";
                var menuState = document.getElementById('dropdownMenu');
                menuState.style.visibility = 'hidden';
                sessionStorage.clear();
                //$('.dropdown-menu').toggleClass('hide');
                $('body').css('overflow-y', 'auto');
                $('body').css('overflow-x', 'hidden');
                window.location.assign('mainPage.php');
                alert("logged out successfully!");         
                document.getElementById('loginStatusMsg').style.display = 'none';
                state = 'false';
                <?php unset($_SESSION['user']);?>
                <?php session_destroy();?>            
                
            } else if (checkTypeUser != 'admin') {
                $(this).data('clicked', true);
                document.getElementById('testOutput').innerHTML = "Login";
                var menuState = document.getElementById('dropdownMenu');
                menuState.style.visibility = 'hidden';
                sessionStorage.clear();
                //$('.dropdown-menu').toggleClass('hide');
                $('body').css('overflow-y', 'auto');
                $('body').css('overflow-x', 'hidden');
                alert("logged out successfully!");
                document.getElementById('loginStatusMsg').style.display = 'none';
                state = 'false';
            }



            //alert('hi');
            //submitContactForm(type);
            //processLogin();
            //type = 'admin';
            //alert(type);

        });


        $("#loginSubmitButton").click(function () {
            $(this).data('clicked', true);
            //alert('hi');
            //submitContactForm(type);
            processLogin();
            //type = 'admin';
            //alert(type);

        });


        var type = 'user';

        $("#admin-tab").click(function () {
            $(this).data('clicked', true);
            //alert('hi');
            type = 'admin';
            //alert(type);

        });

        $("#user-tab").click(function () {
            $(this).data('clicked', true);
            //alert('hi');
            type = 'user';
            //alert(type);

        });

        $("#signUpButton").click(function () {
            $(this).data('clicked', true);
            //alert('hi');
            submitContactForm(type);
            //type = 'admin';
            //alert(type);

        });


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
                    data: 'contactFrmSubmit=1&name=' + name + '&email=' + email + '&password=' + password + '&confPassword=' + confPassword + '&userType=' + userType,
                    beforeSend: function () {
                        $('.submitBtn').attr("disabled", "disabled");
                        $('.modal-body').css('opacity', '.5');
                    },
                    success: function (msg) {
                        console.log(msg);
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

        function processLogin() {

            //var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
            var name = $('#usernameTextBox').val();
            console.log(name);
            //var email = $('#inputEmail').val();
            var password = $('#passwordTextBox').val();
            console.log(password);
            //var confPassword = $('#inputConfPassword').val();
            //var userType = type;
            //alert(userType);

            if (name.trim() == '') {
                alert('Please Enter Your Username.');
                $('#usernameTextBox').focus();
                return false;
            } else if (password.trim() == '') {
                alert('Please Enter Your Password.');
                $('#passwordTextBox').focus();
                return false;
            } else {
                $.ajax({
                    type: 'POST',
                    url: 'submit_login.php',
                    //data: 'contactFrmSubmit=1&name='+name+'&email='+email+'&password='+password+'$confPassword='+confPassword,
                    data: 'loginFrmSubmit=1&name=' + name + '&password=' + password,
                    beforeSend: function () {
                        $('.submitBtn').attr("disabled", "disabled");
                        $('.modal-body').css('opacity', '.5');
                    },
                    success: function (msgLogin) {
                        console.log(msgLogin);
                        statusMsg = msgLogin.substring(0, 2);
                        //console.log(statusMsg);
                        typeUser = msgLogin.substring(2, 7);
                        console.log(typeUser)
                        if (typeUser == 'admin') {
                            user_name = msgLogin.substring(7, msgLogin.length);
                            console.log(user_name);
                            //userDisplay = "Welcome, " + user_name;
                            //document.getElementById('testOutput').innerHTML = userDisplay;
                            sessionStorage.setItem("admin_display", user_name);
                            sessionStorage.setItem("admin_type", typeUser);
                            window.location.assign('manageInventory.php');
                        } else if (typeUser != 'admin') {
                            user_name = msgLogin.substring(6, msgLogin.length);
                            console.log(user_name);
                            userDisplay = "Welcome, " + user_name;
                            //console.log(user_name);
                            if (statusMsg == 'ok') {
                                $('#usernameTextBox').val('');
                                $('#passwordTextBox').val('');
                                $('.loginStatusMsg').html('<span style="color:green;">Login Successful!</p>');
                                document.getElementById('testOutput').innerHTML = userDisplay;
                                sessionStorage.setItem("user_display", userDisplay);
                                $('#myModal').modal('hide');
                                $('body').css('overflow-y', 'auto');
                                state = 'true';
                                //$('.dropdown-menu').toggleClass('show');
                                //var us = username;
                                //console.log(us);
                            } else {
                                $('.loginStatusMsg').html('<span style="color:red;">Login Unsuccessful, please try again.</span>');
                            }
                            $('.submitBtn').removeAttr("disabled");
                            $('.modal-body').css('opacity', '');
                        }

                        //user_name = user;
                        //console.log(user_name);
                    }
                });
            }
        }

        /*function processLogin() {
         //var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
         var name = $('#usernameTextBox').val();
         console.log(name);
         //var email = $('#inputEmail').val();
         var password = $('#passwordTextBox').val();
         console.log(password);
         //var confPassword = $('#inputConfPassword').val();
         //var userType = type;
         //alert(userType);
         
         if (name.trim() == '') {
         alert('Please Enter Your Username.');
         $('#usernameTextBox').focus();
         return false;
         } else if (password.trim() == '') {
         alert('Please Enter Your Password.');
         $('#passwordTextBox').focus();
         return false;
         } else {
         $.ajax({
         type: 'POST',
         url: 'submit_login.php',
         //data: 'contactFrmSubmit=1&name='+name+'&email='+email+'&password='+password+'$confPassword='+confPassword,
         data: 'loginFrmSubmit=1&name=' + name + '&password=' + password,
         beforeSend: function () {
         $('.submitBtn').attr("disabled", "disabled");
         $('.modal-body').css('opacity', '.5');
         },
         success: function (msgLogin) {
         console.log(msgLogin);
         statusMsg = msgLogin.substring(0, 2);
         //console.log(statusMsg);
         user_name = msgLogin.substring(2, msgLogin.length);
         userDisplay = "Welcome, " + user_name;
         //console.log(user_name);
         if (statusMsg == 'ok') {
         $('#usernameTextBox').val('');
         $('#passwordTextBox').val('');
         $('.loginStatusMsg').html('<span style="color:green;">Login Successful!</p>');
         document.getElementById('testOutput').innerHTML = userDisplay;
         sessionStorage.setItem("user_display", userDisplay);
         $('#myModal').modal('hide');
         $('body').css('overflow-y', 'auto');
         state = 'true';
         //$('.dropdown-menu').toggleClass('show');
         
         
         //var us = username;
         //console.log(us);
         
         } else {
         $('.loginStatusMsg').html('<span style="color:red;">Login Unsuccessful, please try again.</span>');
         }
         $('.submitBtn').removeAttr("disabled");
         $('.modal-body').css('opacity', '');
         //user_name = user;
         //console.log(user_name);
         }
         });
         }
         }*/

        //toggleLogin();

        function setDisplay() {
            //alert('hi');
            //console.log("loaded");
            Display = sessionStorage.getItem("user_display");
            console.log(Display);
            if (Display == null) {
                document.getElementById('testOutput').innerHTML = "Login";
                state = 'false';
                //$("#myModal").modal('show');
                //openModal();

            } else if (Display != null) {
                document.getElementById('testOutput').innerHTML = Display;
                state = 'true';
                //openPopup();

            }
            setAdminDisplay();

        }

        function setAdminDisplay() {
            //alert('hi');
            //console.log("loaded");
            adminDisplay = sessionStorage.getItem("admin_display");
            console.log(adminDisplay);
            if (adminDisplay != null) {
                document.getElementById('testOutput').innerHTML = "Welcome, " + adminDisplay;
                state = 'true';
                //$("#myModal").modal('show');
                //openModal();
            }
        }

        function openModal() {
            $("#loginButton").click(function () {
                $(this).data('clicked', true);
                //alert('hi');
                //submitContactForm(type);
                //processLogin();
                $('.dropdown-menu').toggleClass('hide');
                $('#myModal').modal('show');
                //type = 'admin';
                //alert(type);

            });

        }

        function openPopup() {
            $("#loginButton").click(function () {
                $(this).data('clicked', true);

                $('.dropdown-menu').toggleClass('show');
                $('#myModal').modal('hide');
                //console.log('menuopen');

            });

        }











    </script>

</body>

