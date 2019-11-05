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
        
        <!-- Bootstrap Modal -->
        <div id="myModal" class="modal fade" role="dialog">  
            <div class="modal-dialog">
                <div class="modal-content">      
                    <div class="modal-header" style="display:inline;">        
                        <button type="button" class="close" data-dismiss="modal">×</button>        
                        <h4 class="modal-title">Log in with your Username</h4>      
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
                                        <span id="messageSpan"></span>              
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
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>    
                    </div> 


                </div>
            </div>
        </div>

        
    </div>
</nav>
