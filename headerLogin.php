<?php
if(isset($_SESSION['user']))
{
    $value = $_SESSION['user'];
    echo "<script type='text/javascript'>";
    if($_SESSION['user']== "administrator")
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



        <link rel="stylesheet" href="css/footer.css"/>
        <link rel="stylesheet" href="css/headerLogin.css"/>
        <link href="css/main2.css" rel="stylesheet">
        <script src="js/sideMenu.js"></script>
        <script src="js/headerLogin.js"></script>
    </head>
    
    <body onload="setDisplay()">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">

            <a id="head1" class="navbar-brand" href="#" onclick="openNav()"><i class="fa fa-bars bars" id="navMenuButton"></i>Guilty Pleasures</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="mainPage">Home <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
                <!--<form id="form1" class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search">
                    <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
                </form>-->
                <a href="cuisinesKQ"><button class="btn btn-outline-primary my-2 my-sm-0 bsbtn">Begin Shopping</button></a>


                <div class="dropdown show">
                    <!--<a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"                
                    </a>-->
                    <a id="loginButton" href="#" role="button" id="dropdownMenuLink"><i class="fas fa-user"></i> <span id="testOutput">Login</span></a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" id="dropdownMenu">
                        <!--<a class="dropdown-item" href="#">View Profile</a>-->
                        <a class="dropdown-item" href="" id="viewProfileButton" data-toggle="modal">View Profile</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#" id="logoutButton">Logout</a>

                    </div>
                </div>
                <?php
                if (isset($_SESSION["user"])) {
                    echo ' <a id="shoppingCartButton" href="shoppingCartNel" ><i class="fas fa-shopping-cart"></i></a>';
                }
                ?>
                <!-- Log In Modal -->
                <div id="myModal" class="modal fade" role="dialog">  
                    <div class="modal-dialog">
                        <div class="modal-content">      
                            <div id="mh1" class="modal-header">        
                                <button type="button" class="close" data-dismiss="modal">×</button>        
                                <h4 class="modal-title">Log in with your Account</h4>      
                            </div>

                            <div class="modal-body">
                                <form role="form">
                                    <p class="loginStatusMsg" id="loginStatusMsg"></p>
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
                                <h4 class="modal-title w-100"></h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="profileCloseButton">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body mx-3">
                                <div class="col-lg-12 push-lg-4" id="innerForm">
                                    <!--<ul class="nav nav-tabs">
                                        <li class="nav-item">
                                            <a href="#" data-target="#edit" data-toggle="tab" class="nav-link">Profile</a>
                                        </li>
                                    </ul>-->
                                    
                             
                                            <h4 class="m-y-2" id="editProfile">Edit Profile</h4>
                                            <form role="form">

                                                <p class="updateStatusMsg" id="updateStatusMsg"></p>

                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label form-control-label editLabel">Username:</label>
                                                    <div class="col-lg-9">
                                                        <input class="form-control" required="required" id="up_username" type="text" value="">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label form-control-label editLabel">Email:</label>
                                                    <div class="col-lg-9">
                                                        <input class="form-control" required="required" id="up_email" type="text" value="">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label form-control-label editLabel">Password:</label>
                                                    <div class="col-lg-9">
                                                        <input class="form-control" required="required" id="up_password" type="password" value="" placeholder="Enter new password">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label form-control-label editLabel">Confirm Password:</label>
                                                    <div class="col-lg-9">
                                                        <input class="form-control" required="required" type="password" value="" id="up_confPassword" placeholder="Confirm new password">
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
        
                </div>

                <!-- Admin profile Modal-->

                <div class="modal fade" id="adminProfileModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header text-center">
                                <h4 class="modal-title w-100"></h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="adminProfileCloseButton">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body mx-3">

                                <div class="col-lg-12 push-lg-4" id="innerForm">

                                    <div class="tab-content p-b-3">
                                            <h4 class="m-y-2" id="editProfile ">Edit Profile</h4>
                                            <form role="form">

                                                <p class="adminUpdateStatusMsg" id="adminUpdateStatusMsg"></p>

                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label form-control-label editLabel">Username:</label>
                                                    <div class="col-lg-9">
                                                        <input class="form-control" required="required" id="upA_username" type="text" value="">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label form-control-label editLabel">Email:</label>
                                                    <div class="col-lg-9">
                                                        <input class="form-control" required="required" id="upA_email" type="text" value="">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label form-control-label editLabel">Password:</label>
                                                    <div class="col-lg-9">
                                                        <input class="form-control" required="required" id="upA_password" type="password" value="" placeholder="Enter new password">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label form-control-label editLabel">Confirm Password:</label>
                                                    <div class="col-lg-9">
                                                        <input class="form-control" required="required" type="password" value="" id="upA_confPassword" placeholder="Confirm new password">
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
                        </div>
                    </div>
                </div>

                <!--Sign Up Modal-->
                <div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header text-center">
                                <h4 class="modal-title w-100">Sign up</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body mx-3">

                                <form role="form">
                                    <p class="statusMsg"></p>
                                    <div class="md-form mf1">
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
                                <button class="btn submitBtn mf1btn" id="signUpButton">Sign up!</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- successSignUpModal-->
                <div class="modal fade" id="modalSuccess">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header signup1">
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
               

            </div>
            
             <div id="mySidepanel" class="sidepanel">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
                    <a href="mainPage" class="sidemenu">Home</a>
                    <?php
                    if (isset($_SESSION["user"])) {
                        if ($_SESSION["user"] == 'administrator') {
                            echo'<a href="manageInventory" class="sidemenu" >Inventory</a>';
                            echo'<a href="aOrderTracking" class="sidemenu" >Track Orders</a>';
                        }
                        else
                        {
                            echo'<a href="order_tracking" class="sidemenu">Track Orders</a>';
                        } 
                    }
                    ?>
                    <a href="cuisinesKQ" class="sidemenu">Cuisines</a>
                    <a href="locateUs" class="sidemenu">Locations</a>
                    <a href="aboutUsCT" class="sidemenu">About Us</a>
                </div>
        </nav>
        <script src="js/headerLogin.js"></script>


    </body>
</html>
