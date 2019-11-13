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
                    <a class="nav-link" href="mainPage">Home <span class="sr-only">(current)</span></a>
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
                    <!--<a class="dropdown-item" href="#">View Profile</a>-->
                    <a class="dropdown-item" href="" id="viewProfileButton" data-toggle="modal" data-target="#profileModal" onclick="menuProfileClicked()">View Profile</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#" id="logoutButton">Logout</a>

                </div>
            </div>
            <?php
            if (isset($_SESSION["user"])) {
                echo ' <a id="shoppingCartButton" href="shoppingCartNel" style="padding-left: 10px; padding-right: 10px; color: gray;"><i class="fas fa-shopping-cart"></i></a>';
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

            <!--Profile Modal-->
            <div class="modal fade" id="profileModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header text-center">
                            <h4 class="modal-title w-100" style="color: #26bf83;"></h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="profileCloseButton">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body mx-3">

                            <div class="col-lg-12 push-lg-4" id="innerForm">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a href="" data-target="#profile" data-toggle="tab" class="nav-link active">Profile</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="" data-target="#messages" data-toggle="tab" class="nav-link">Notifications</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="" data-target="#edit" data-toggle="tab" class="nav-link">Edit</a>
                                    </li>
                                </ul>
                                <div class="tab-content p-b-3">
                                    <div class="tab-pane active tabContent" id="profile">
                                        <div id="welcomeProfile" style="margin-top:15px;">

                                        </div>
                                        <!--<h4 class="m-y-2" id="editUser" style="font-weight:bold;">Welcome, kbk! To Guilty Pleasures!</h4>-->
                                        <div class="row">
                                            <div class="col-md-12" id="welcomeText" style="margin-top:10px;">
                                                <h6>Thanks for joining guilty pleasures!</h6>

                                            </div>

                                            <div class="col-md-12" style="margin-top: 20px;color: #3a99ff;"> 
                                                <h4 class="m-t-2" style="margin-left: -4px;margin-bottom: 10px;"><span class="fa fa-clock-o ion-clock pull-xs-right"></span> Recent Activity</h4>
                                                <table class="table table-hover table-striped">
                                                    <tbody>                                    
                                                        <tr>
                                                            <td>
                                                                <strong>Abby</strong> joined ACME Project Team in <strong>`Collaboration`</strong>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <strong>Gary</strong> deleted My Board1 in <strong>`Discussions`</strong>
                                                            </td>

                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <!--/row-->
                                    </div>
                                    <div class="tab-pane tabContent" id="messages">
                                        <h4 class="m-y-2" id="editNotifications" style="font-weight:bold;margin-top:15px;">Notifications</h4>
                                        <div class="alert alert-info alert-dismissable">
                                            <a class="panel-close close" data-dismiss="alert">×</a> This is an <strong>.alert</strong>. Use this to show important messages to the user.
                                        </div>
                                        <table class="table table-hover table-striped">
                                            <tbody>                                    
                                                <tr>
                                                    <td>
                                                        <span class="pull-xs-right font-weight-bold">3 hrs ago</span> Here is your a link to the latest summary report from the..
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="pull-xs-right font-weight-bold">Yesterday</span> There has been a request on your account since that was..
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="pull-xs-right font-weight-bold">9/10</span> Porttitor vitae ultrices quis, dapibus id dolor. Morbi venenatis lacinia rhoncus. 
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="pull-xs-right font-weight-bold">9/4</span> Vestibulum tincidunt ullamcorper eros eget luctus. 
                                                    </td>
                                                </tr>
                                            </tbody> 
                                        </table>
                                    </div>
                                    <div class="tab-pane tabContent" id="edit">
                                        <h4 class="m-y-2" id="editProfile" style="margin-bottom:20px;font-weight: bold;margin-top:15px;">Edit Profile</h4>
                                        <form role="form">

                                            <p class="updateStatusMsg" style="margin-top:12px;" id="updateStatusMsg"></p>

                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label form-control-label editLabel">Username:</label>
                                                <div class="col-lg-9">
                                                    <input class="form-control" id="up_username" type="text" value="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label form-control-label editLabel">Email:</label>
                                                <div class="col-lg-9">
                                                    <input class="form-control" id="up_email" type="text" value="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label form-control-label editLabel">Password:</label>
                                                <div class="col-lg-9">
                                                    <input class="form-control" id="up_password" type="password" value="" placeholder="Enter new password">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label form-control-label editLabel">Confirm Password:</label>
                                                <div class="col-lg-9">
                                                    <input class="form-control" type="password" value="" id="up_confPassword" placeholder="Confirm new password">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label form-control-label editLabel"></label>
                                                <div class="col-lg-9">
                                                    <input type="reset" class="btn btn-secondary" value="Cancel">
                                                    <input type="button" class="btn btn-primary" id="updateButton" value="Save Changes">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--<div class="modal-footer d-flex justify-content-center">
                            <button class="btn submitBtn" id="signUpButton" style="background: lightgray;margin-bottom: 4px;">Sign up!</button>
                        </div>-->
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
                                    <input type="text" required="required" id="inputUsername" class="form-control" >
                                    <label for="inputUsername">Your Username</label>
                                </div>
                                <div class="md-form">
                                    <i class="fas fa-envelope prefix grey-text"></i>
                                    <input type="email" required="required" id="inputEmail" class="form-control">
                                    <label for="inputEmail">Your Email</label>
                                </div>
                                <div class="md-form">
                                    <i class="fas fa-lock prefix grey-text"></i>
                                    <input type="password" required="required" id="inputPassword" class="form-control">
                                    <label for="inputPassword">Your Password</label>
                                </div>
                                <div class="md-form">
                                    <i class="fas fa-lock prefix grey-text"></i>
                                    <input type="password" required="required" id="inputConfPassword" class="form-control">
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
                <?php
                if (isset($_SESSION["user"])) {
                    if ($_SESSION["user"] == 'kq') {
                        echo'<a href="manageInventory" style="font-family: Times, Times New Roman, serif">Inventory</a>';
                        echo'<a href="#" style="font-family: Times, Times New Roman, serif">Orders</a>';
                    } else {
                        echo'<a href="#" style="font-family: Times, Times New Roman, serif">Orders</a>';
                    }
                }
                ?>
                <a href="aboutUsCT" style="font-family: Times, Times New Roman, serif">About Us</a>
                <a href="cuisinesKQ" style="font-family: Times, Times New Roman, serif">Cuisines</a>
                <a href="locateUs" style="font-family: Times, Times New Roman, serif">Locations</a>
                <a href="aboutUsCT" style="font-family: Times, Times New Roman, serif">Contact Us</a>

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
        var status = '';



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
                alert("logged out successfully!");
                window.location.assign('mainPage?reset=1');
                //alert("logged out successfully!");         
                document.getElementById('loginStatusMsg').style.display = 'none';
                state = 'false';



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
                window.location.assign('mainPage?reset=1');
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

        $("#updateButton").click(function () {
            $(this).data('clicked', true);
            //alert('hi');
            //submitContactForm(type);
            //updateContactForm(type);
            //update();
            updateContactForm(type)

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
            } else if ((password_validate(password.trim())) != "ok") {
                alert(password_validate(password));
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
        function update() {

            if (confirm("Do you want to proceed without changing your password?")) {
                status = 'ok';
                updateContactForm(type);
                //txt = "You pressed OK!";
            } else {
                //txt = "You pressed Cancel!";
                status = 'all';
            }

        }

        function updateContactForm(type) {
            var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
            var name = $('#up_username').val();
            var email = $('#up_email').val();
            var password = $('#up_password').val();
            var confPassword = $('#up_confPassword').val();
            var userType = type;
            var userId = u_userID;
            //var test = ''
            //alert(userType);
            console.log(userId);
            if (name.trim() == '') {
                alert('Please Enter Your Username.');
                $('#up_username').focus();
                //test = $('#ut_username').val();
                return false;
            } else if (email.trim() == '') {
                alert('Please Enter Your Email.');
                $('#up_email').focus();
                return false;
            } else if (email.trim() != '' && !reg.test(email)) {
                alert('Please Enter Valid Email.');
                $('#up_email').focus();
                return false;
            } else if (password.trim() == '') {
                alert('Please Enter Your Password.');
                $('#up_password').focus();
                return false;
            } else if (confPassword.trim() == '') {
                alert('Please Confirm Your Password.');
                $('#up_confPassword').focus();
                return false;
            } else if (confPassword != password) {
                alert('Your Passwords Do Not Match.');
                //$('#inputConfPassword').focus();
                return false;
            } else {
                $.ajax({
                    type: 'POST',
                    url: 'updateForm.php',
                    //data: 'contactFrmSubmit=1&name='+name+'&email='+email+'&password='+password+'$confPassword='+confPassword,
                    data: 'updateFrmSubmit=1&name=' + name + '&email=' + email + '&password=' + password + '&confPassword=' + confPassword + '&userType=' + userType + '&userId=' + userId,
                    beforeSend: function () {
                        $('.submitBtn').attr("disabled", "disabled");
                        $('.modal-body').css('opacity', '.5');
                    },
                    success: function (msg) {
                        console.log(msg);
                        if (msg == 'ok') {
                            $('#up_username').val('');
                            $('#up_email').val('');
                            $('#up_password').val('');
                            $('#up_confPassword').val('');
                            document.getElementById('updateStatusMsg').style.display = 'block';
                            $('.updateStatusMsg').html('<span style="color:green;">Updated Successfully!</p>');
                            logoutAfterUpdate();
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
                        console.log("here" + statusMsg);
                        typeUser = msgLogin.substring(2, 7);
                        console.log(typeUser)
                        if (typeUser == 'admin') {
                            user_name = msgLogin.substring(7, msgLogin.length);
                            console.log(user_name);
                            //userDisplay = "Welcome, " + user_name;
                            //document.getElementById('testOutput').innerHTML = userDisplay;
                            sessionStorage.setItem("admin_display", user_name);
                            sessionStorage.setItem("admin_type", typeUser);
                            window.location.assign('manageInventory');
                        } else if (typeUser != 'admin') {
                            user_name = msgLogin.substring(6, msgLogin.length);
                            sessionStorage.setItem("r_username", user_name);
                            console.log(user_name);
                            userDisplay = "Welcome, " + user_name;
                            //console.log(user_name);
                            if (statusMsg == 'ok') {
                                $('#usernameTextBox').val('');
                                $('#passwordTextBox').val('');
                                document.getElementById('loginStatusMsg').style.display = 'block';
                                $('.loginStatusMsg').html('<span style="color:green;">Login Successful!</p>');
                                document.getElementById('testOutput').innerHTML = userDisplay;
                                sessionStorage.setItem("user_display", userDisplay);
                                $('#myModal').modal('hide');
                                $('body').css('overflow-y', 'auto');
                                state = 'true';
                                window.location.assign('cuisinesKQ');
                                //$('.dropdown-menu').toggleClass('show');
                                //var us = username;
                                //console.log(us);
                            } else {
                                document.getElementById('loginStatusMsg').style.display = 'block';
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

        function retrieveProfile() {
            console.log('rcalled');
            if (user_name != '') {
                $.ajax({
                    type: 'POST',
                    url: 'retrieveProfile.php',
                    data: 'retrieveFormSubmit=1&name=' + user_name,
                    //data: ({user_name:user_name}),
                    success: function (dataString) {
                        console.log(dataString);
                        u_username = dataString.split('{').pop().split('}')[0];
                        console.log(u_username);
                        u_email = dataString.split('}').pop().split('[')[0];
                        console.log(u_email);
                        u_password = dataString.split('[').pop().split(']')[0];
                        console.log(u_password);
                        u_userID = dataString.split(']').pop().split('|')[0];
                        $('#up_username').val(u_username);
                        $('#up_email').val(u_email);
                        //$('#up_password').val(u_password);

                        //$('#userDetail').html(data);
                    }
                });
            } else {
                rUserName = sessionStorage.getItem("r_username");
                console.log(rUserName);
                $.ajax({
                    type: 'POST',
                    url: 'retrieveProfile.php',
                    data: 'retrieveFormSubmit=1&name=' + rUserName,
                    //data: ({user_name:user_name}),
                    success: function (dataString) {
                        console.log(dataString);
                        u_username = dataString.split('{').pop().split('}')[0];
                        console.log(u_username);
                        u_email = dataString.split('}').pop().split('[')[0];
                        console.log(u_email);
                        u_password = dataString.split('[').pop().split(']')[0];
                        console.log(u_password);
                        u_userID = dataString.split(']').pop().split('|')[0];
                        $('#up_username').val(u_username);
                        $('#up_email').val(u_email);
                        //$('#up_password').val(u_password);

                        // $('#userDetail').html(data);
                    }
                });
            }



        }

        function retrieveMainProfile() {
            console.log('rcalled');
            console.log(user_name);
            if (user_name != '') {
                $.ajax({
                    type: 'POST',
                    url: 'retrieveMainProfile.php',
                    data: 'retrieveMainFormSubmit=1&name=' + user_name,
                    //data: ({user_name:user_name}),
                    success: function (data) {
                        console.log(data);
                        $('#welcomeProfile').html(data);
                    }
                });
            } else {
                rUserName = sessionStorage.getItem("r_username");
                console.log(rUserName);
                $.ajax({
                    type: 'POST',
                    url: 'retrieveMainProfile.php',
                    data: 'retrieveMainFormSubmit=1&name=' + rUserName,
                    //data: ({user_name:user_name}),
                    success: function (data) {
                        console.log(data);
                        $('#welcomeProfile').html(data);
                    }
                });
            }



        }


        function logoutAfterUpdate() {

            document.getElementById('testOutput').innerHTML = "Login";
            //var menuState = document.getElementById('dropdownMenu');
            //menuState.style.visibility = 'hidden';
            sessionStorage.clear();
            //$('.dropdown-menu').toggleClass('hide');
            //$('body').css('overflow-y', 'auto');
            //$('body').css('overflow-x', 'hidden');
            //alert("logged out successfully!");
            //document.getElementById('loginStatusMsg').style.display = 'none';            
            document.getElementById('loginStatusMsg').style.display = 'none';
            state = 'false';
            alert("Updated Successfully. Please re-login.");
            window.location.assign('mainPage?reset=1');
        }

        function menuProfileClicked() {

            console.log("test");
            //$('.dropdown-menu').toggleClass('hide');
            var menuState = document.getElementById('dropdownMenu');
            menuState.style.visibility = 'hidden';
            retrieveMainProfile();
            retrieveProfile();

        }


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



        function password_validate(password) {

            var letter_lower = 'abcdefghijklmnopqrstuvwxyz';
            console.log(letter_lower);
            var letter_upper = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
            var numbers = '0123456789';
            var spchr = '~`!@#$%^&*()+=_-{}[]\|:;”’?/<>,.';
            var upperCount = 0;
            var lowerCount = 0;
            var numCount = 0;
            var spchrCount = 0;
            var valid = true;

            var pass_err = "Your password is not strong enough! The following errors were found:\n";

            for (var i = 0; i < password.length; i++) {
                if (letter_upper.includes(password[i])) {
                    upperCount += 1;
                }
                if (letter_lower.includes(password[i])) {
                    lowerCount += 1;
                }
                if (numbers.includes(password[i])) {
                    numCount += 1;
                }
                if (spchr.includes(password[i])) {
                    spchrCount += 1;
                }
            }

            if (password.length < 8) {
                pass_err = pass_err.concat("-Password must be at least 8 characters.\n");
                valid = false;
            }

            if (upperCount < 1) {
                pass_err = pass_err.concat("-No uppercase letters.\n");
                valid = false;
            }

            if (lowerCount < 1) {
                pass_err = pass_err.concat("-No lowercase letters.\n");
                valid = false;
            }

            if (spchrCount < 1) {
                pass_err = pass_err.concat("-No special letters.\n");
                valid = false;
            }

            if (!valid) {
                return pass_err;
            } else {
                return "ok";
            }

        }

        $('#profileCloseButton').click(function (e) {
            e.preventDefault();
            $('body').css('overflow-y', 'auto');
            document.getElementById('updateStatusMsg').style.display = 'none';


        });









    </script>

</body>

