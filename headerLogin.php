<?php
if(isset($_SESSION['user']))
{
    $value = $_SESSION['user'];
    echo "<script type='text/javascript'>";
    if($_SESSION['user']== "kq")
    {
    echo "sessionStorage.setItem('admin_display', '".$value."');";
    echo "sessionStorage.setItem('admin_type', 'admin');";
    }
    else
    {
        echo "sessionStorage.setItem('r_username', '".$value."');";
    }
        echo "userDisplay = 'Welcome, ' + '".$value ."';";
      //  echo "console.log('". $value ."');";
        echo 'sessionStorage.setItem("user_display", userDisplay);';
        echo "state=true;";
        echo "$('body').css('overflow-y', 'auto');";
        echo "</script>";   
}?>

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
                    <a class="dropdown-item" href="" id="viewProfileButton" data-toggle="modal">View Profile</a>
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
                                                <!--img id="loadingImg" src="loading.gif" /-->              
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
                                    <!--<div class="tab-pane tabContent" id="messages">
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
                                    </div>-->
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

                                                    <input type="button" class="btn btn-secondary" data-dismiss="modal" value="Cancel">

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
            
            <!-- Admin profile Modal-->
            
            <div class="modal fade" id="adminProfileModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header text-center">
                            <h4 class="modal-title w-100" style="color: #26bf83;"></h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="adminProfileCloseButton">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body mx-3">

                            <div class="col-lg-12 push-lg-4" id="innerForm">
                               
                                <div class="tab-content p-b-3">
                                    
                                   
                                  
                                        <h4 class="m-y-2" id="editProfile" style="margin-bottom:20px;font-weight: bold;margin-top:15px;">Edit Profile</h4>
                                        <form role="form">

                                            <p class="adminUpdateStatusMsg" style="margin-top:12px;" id="adminUpdateStatusMsg"></p>

                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label form-control-label editLabel">Username:</label>
                                                <div class="col-lg-9">
                                                    <input class="form-control" id="upA_username" type="text" value="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label form-control-label editLabel">Email:</label>
                                                <div class="col-lg-9">
                                                    <input class="form-control" id="upA_email" type="text" value="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label form-control-label editLabel">Password:</label>
                                                <div class="col-lg-9">
                                                    <input class="form-control" id="upA_password" type="password" value="" placeholder="Enter new password">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label form-control-label editLabel">Confirm Password:</label>
                                                <div class="col-lg-9">
                                                    <input class="form-control" type="password" value="" id="upA_confPassword" placeholder="Confirm new password">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label form-control-label editLabel"></label>
                                                <div class="col-lg-9">
                                                    <input type="button" class="btn btn-secondary" data-dismiss="modal" value="Cancel">
                                                    <input type="button" class="btn btn-primary" id="adminUpdateButton" value="Save Changes">
                                                </div>
                                            </div>
                                        </form>
                                    
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
                        echo'<a href="order_tracking" style="font-family: Times, Times New Roman, serif">Orders</a>';
                    }
                    else
                    {
                        echo'<a href="order_tracking" style="font-family: Times, Times New Roman, serif">Orders</a>';
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
    
    <script src="js/headerLogin.js"></script>
</body>

