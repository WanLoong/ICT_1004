<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Welcome To Guilty Pleasures!</title>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/bootstrap.css"/>
        <link rel="stylesheet" href="css/main2.css"/>
        <!--<link rel="stylesheet" href="css/mainPage.css"/>-->
        <link rel="stylesheet" href="css/modalcss.css"/>

         <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 
        <script src="js/sideMenu.js"></script>
        <script src="js/modal.js"></script>
        <!--<style>
            #form {
                position: absolute;
                top: 100px;
                left: 80px; 

                padding: 5px;
                border: 2px solid black;


            }


            #innerForm {

                left: 200px;
                top: 10px;


            }

            #editProfile {

                font-weight: bold;
                //background: #fff6e6;
                background: #fffae4;
                margin-left: -15px;
                padding-left: 20px;
                padding-top: 10px;
                margin-top: 10px;
                padding-bottom: 10px;
                margin-top: 10px;

            }

            .editLabel {
                font-weight: bolder;

                background:#ffffffe6;
                text-decoration: underline;
            }

            #editUser {
                font-weight: bold;
                background: 
                    aliceblue;
                padding-left: 20px;
                padding-top: 10px;
                padding-bottom: 10px;
                margin-top: 10px;
            }

            #editNotifications {

                font-weight: bolder;
                
                margin-top: 10px;
                padding\ le: 20px;
                padding-left: 20px;
                padding-top: 10px;
                padding-bottom: azure;
                background: 

                    mistyrose;
                padding-bottom: 10px;
                

            }
            
            
#welcomeText {

    left: 23p;
    x: 10px;
    left: 240px;
    top: 5px;

}
        </style>-->
    </head>
    <body>
        <?php
        //include "header.php";
        include 'headerLogin.php';
        ?>
        <img src="images/foodMain.jpg" id="mainPic"/>
        <div class="container" id="form">
            <div class="row m-y-2">
                
                
                <div class="col-lg-12 push-lg-4" id="innerForm">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a href="" data-target="#profile" data-toggle="tab" class="nav-link active">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a href="" data-target="#messages" data-toggle="tab" class="nav-link">Messages</a>
                        </li>
                        <li class="nav-item">
                            <a href="" data-target="#edit" data-toggle="tab" class="nav-link">Edit</a>
                        </li>
                    </ul>
                    <div class="tab-content p-b-3">
                        <div class="tab-pane active" id="profile">
                            <h4 class="m-y-2" id="editUser">Welcome, kbk! To Guilty Pleasures!</h4>
                            <div class="row">
                                <div class="col-md-6" id="welcomeText">
                                    <h6>We are happy to have u join us, we hope you enjoy our service!</h6>
                                 
                                </div>
                              
                                <div class="col-md-12">
                                    <h4 class="m-t-2"><span class="fa fa-clock-o ion-clock pull-xs-right"></span> Recent Activity</h4>
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
                                            <tr>
                                                <td>
                                                    <strong>Kensington</strong> deleted MyBoard3 in <strong>`Discussions`</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>John</strong> deleted My Board1 in <strong>`Discussions`</strong>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>Skell</strong> deleted his post Look at Why this is.. in <strong>`Discussions`</strong>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!--/row-->
                        </div>
                        <div class="tab-pane" id="messages">
                            <h4 class="m-y-2" id="editNotifications">Notifications</h4>
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
                        <div class="tab-pane" id="edit">
                            <h4 class="m-y-2" id="editProfile">Edit Profile</h4>
                            <form role="form">
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label editLabel">First name</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="text" value="Jane">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label editLabel">Last name</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="text" value="Bishop">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label editLabel">Email</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="email" value="email@gmail.com">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label editLabel">Company</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="text" value="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label editLabel">Website</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="url" value="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label editLabel">Address</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="text" value="" placeholder="Street">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label editLabel"></label>
                                    <div class="col-lg-6">
                                        <input class="form-control" type="text" value="" placeholder="City">
                                    </div>
                                    <div class="col-lg-3">
                                        <input class="form-control" type="text" value="" placeholder="State">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label editLabel">Time Zone</label>
                                    <div class="col-lg-9">
                                        <select id="user_time_zone" class="form-control" size="0">
                                            <option value="Hawaii">(GMT-10:00) Hawaii</option>
                                            <option value="Alaska">(GMT-09:00) Alaska</option>
                                            <option value="Pacific Time (US &amp; Canada)">(GMT-08:00) Pacific Time (US &amp; Canada)</option>
                                            <option value="Arizona">(GMT-07:00) Arizona</option>
                                            <option value="Mountain Time (US &amp; Canada)">(GMT-07:00) Mountain Time (US &amp; Canada)</option>
                                            <option value="Central Time (US &amp; Canada)" selected="selected">(GMT-06:00) Central Time (US &amp; Canada)</option>
                                            <option value="Eastern Time (US &amp; Canada)">(GMT-05:00) Eastern Time (US &amp; Canada)</option>
                                            <option value="Indiana (East)">(GMT-05:00) Indiana (East)</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label editLabel">Username</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="text" value="janeuser">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label editLabel">Password</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="password" value="11111122333">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label editLabel">Confirm password</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="password" value="11111122333">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label editLabel"></label>
                                    <div class="col-lg-9">
                                        <input type="reset" class="btn btn-secondary" value="Cancel">
                                        <input type="button" class="btn btn-primary" value="Save Changes">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>



    </body>
</html>
