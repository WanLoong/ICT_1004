<?php ?>

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
        
        <a id="loginButton" href="#" style="padding-right: 10px; color: gray;" data-toggle="modal" data-target="#myModal"><i class="fas fa-user"></i> Login</a>
        <a id="shoppingCartButton" href="shoppingCartNel.php" style="padding-left: 10px; padding-right: 10px; color: gray;"><i class="fas fa-shopping-cart"></i>Shopping Cart</a>
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
            <!--<a href="#" style="font-family: Times, Times New Roman, serif">Locations</a>-->
            <a href="aboutUsCT.php" style="font-family: Times, Times New Roman, serif">Contact Us</a>
        </div>
        
    </div>
</nav>
