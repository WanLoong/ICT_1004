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
var aUsername = '';



$("#loginButton").click(function () {
    $(this).data('clicked', true);
    //      console.log(state);

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
        window.location.assign('processes?reset=1');
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
        window.location.assign('processes?reset=1');
        document.getElementById('loginStatusMsg').style.display = 'none';
        state = 'false';
    }



    //alert('hi');
    //submitContactForm(type);
    //processLogin();
    //type = 'admin';
    //alert(type);

});

$("#viewProfileButton").click(function () {
    checkTypeUser = sessionStorage.getItem("admin_type");
    if (checkTypeUser == 'admin') {
        $(this).data('clicked', true);
        $("#adminProfileModal").modal();
        var menuState = document.getElementById('dropdownMenu');
        menuState.style.visibility = 'hidden';
        retrieveAdminProfile();
        //retrieveMainProfile();
        //retrieveProfile();



    } else if (checkTypeUser != 'admin') {
        $(this).data('clicked', true);
        $("#profileModal").modal();
        var menuState = document.getElementById('dropdownMenu');
        menuState.style.visibility = 'hidden';
        retrieveMainProfile();
        retrieveProfile();

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

$("#adminUpdateButton").click(function () {
    $(this).data('clicked', true);
    //alert('hi');
    //submitContactForm(type);
    //updateContactForm(type);
    //update();
    updateAdminContactForm();

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
                //                 console.log(msg);
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
    //   console.log(userId);
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
    } else if ((password_validate(password.trim())) != "ok") {
        alert(password_validate(password));
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
                //             console.log(msg);
                if (msg == 'ok') {
                    $('#up_username').val('');
                    $('#up_email').val('');
                    $('#up_password').val('');
                    $('#up_confPassword').val('');
                    document.getElementById('updateStatusMsg').style.display = 'block';
                    $('.updateStatusMsg').html('<span style="color:green;">Updated Successfully!</p>');
                    logoutAfterUpdate();
                } else {
                    document.getElementById('updateStatusMsg').style.display = 'block';
                    $('.statusMsg').html('<span style="color:red;">Some problem occurred, please try again.</span>');
                }
                $('.submitBtn').removeAttr("disabled");
                $('.modal-body').css('opacity', '');

            }
        });
    }
}

function updateAdminContactForm() {
    //          console.log('here');
    var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
    var name = $('#upA_username').val();
    var email = $('#upA_email').val();
    var password = $('#upA_password').val();
    var confPassword = $('#upA_confPassword').val();
    var userType = 'admin';
    var userId = u_userID;
    //var test = ''
    //alert(userType);
    //         console.log(userId);
    if (name.trim() == '') {
        alert('Please Enter Your Username.');
        $('#upA_username').focus();
        //test = $('#ut_username').val();
        return false;
    } else if (email.trim() == '') {
        alert('Please Enter Your Email.');
        $('#upA_email').focus();
        return false;
    } else if (email.trim() != '' && !reg.test(email)) {
        alert('Please Enter Valid Email.');
        $('#upA_email').focus();
        return false;
    } else if (password.trim() == '') {
        alert('Please Enter Your Password.');
        $('#upA_password').focus();
        return false;
    } else if (confPassword.trim() == '') {
        alert('Please Confirm Your Password.');
        $('#upA_confPassword').focus();
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
            url: 'updateForm.php',
            //data: 'contactFrmSubmit=1&name='+name+'&email='+email+'&password='+password+'$confPassword='+confPassword,
            data: 'updateFrmSubmit=1&name=' + name + '&email=' + email + '&password=' + password + '&confPassword=' + confPassword + '&userType=' + userType + '&userId=' + userId,
            beforeSend: function () {
                $('.submitBtn').attr("disabled", "disabled");
                $('.modal-body').css('opacity', '.5');
            },
            success: function (msg) {
                //         console.log(msg);
                if (msg == 'ok') {
                    $('#upA_username').val('');
                    $('#upA_email').val('');
                    $('#upA_password').val('');
                    $('#upA_confPassword').val('');
                    document.getElementById('updateStatusMsg').style.display = 'block';
                    $('.adminUpdateStatusMsg').html('<span style="color:green;">Updated Successfully!</p>');
                    logoutAfterUpdate();
                } else {
                    document.getElementById('updateStatusMsg').style.display = 'block';
                    $('.adminUpdateStatusMsg').html('<span style="color:red;">Some problem occurred, please try again.</span>');
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
    //         console.log(name);
    //var email = $('#inputEmail').val();
    var password = $('#passwordTextBox').val();
    //       console.log(password);
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
                //             console.log(msgLogin);
                statusMsg = msgLogin.substring(0, 2);
                //            console.log("here" + statusMsg);
                typeUser = msgLogin.substring(2, 7);
                //          console.log(typeUser)
                if (typeUser == 'admin') {
                    user_name = msgLogin.substring(7, msgLogin.length);
                    //sessionStorage.setItem("a_username", user_name);
                    //            console.log(user_name);
                    //userDisplay = "Welcome, " + user_name;
                    //document.getElementById('testOutput').innerHTML = userDisplay;
                    sessionStorage.setItem("admin_display", user_name);
                    sessionStorage.setItem("admin_type", typeUser);
                    window.location.assign('manageInventory');
                } else if (typeUser != 'admin') {
                    user_name = msgLogin.substring(6, msgLogin.length);
                    sessionStorage.setItem("r_username", user_name);
                    //             console.log(user_name);
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
    //         console.log('rcalled');
    if (user_name != '') {
        $.ajax({
            type: 'POST',
            url: 'retrieveProfile.php',
            data: 'retrieveFormSubmit=1&name=' + user_name,
            //data: ({user_name:user_name}),
            success: function (dataString) {
                //                   console.log(dataString);
                u_username = dataString.split('{').pop().split('}')[0];
                //                 console.log(u_username);
                u_email = dataString.split('}').pop().split('[')[0];
                //               console.log(u_email);
                u_password = dataString.split('[').pop().split(']')[0];
                //             console.log(u_password);
                u_userID = dataString.split(']').pop().split('|')[0];
                $('#up_username').val(u_username);
                $('#up_email').val(u_email);
                //$('#up_password').val(u_password);

                //$('#userDetail').html(data);
            }
        });
    } else {
        rUserName = sessionStorage.getItem("r_username");
        //             console.log(rUserName);
        $.ajax({
            type: 'POST',
            url: 'retrieveProfile.php',
            data: 'retrieveFormSubmit=1&name=' + rUserName,
            //data: ({user_name:user_name}),
            success: function (dataString) {
                //                   console.log(dataString);
                u_username = dataString.split('{').pop().split('}')[0];
                //                 console.log(u_username);
                u_email = dataString.split('}').pop().split('[')[0];
                //               console.log(u_email);
                u_password = dataString.split('[').pop().split(']')[0];
                //             console.log(u_password);
                u_userID = dataString.split(']').pop().split('|')[0];
                $('#up_username').val(u_username);
                $('#up_email').val(u_email);
                //$('#up_password').val(u_password);

                // $('#userDetail').html(data);
            }
        });
    }



}

function retrieveAdminProfile() {
    //      console.log('rcalled');
    //     console.log(checkTypeUser);

    if (checkTypeUser == 'admin') {
        aUsername = sessionStorage.getItem("admin_display");
        //       console.log(aUsername);
        $.ajax({
            type: 'POST',
            url: 'retrieveProfile.php',
            data: 'retrieveFormSubmit=1&name=' + aUsername,
            //data: ({user_name:user_name}),
            success: function (dataString) {
                //console.log(dataString);
                u_username = dataString.split('{').pop().split('}')[0];
                //             console.log(u_username);
                u_email = dataString.split('}').pop().split('[')[0];
                //           console.log(u_email);
                u_password = dataString.split('[').pop().split(']')[0];
                //         console.log(u_password);
                u_userID = dataString.split(']').pop().split('|')[0];
                $('#upA_username').val(u_username);
                $('#upA_email').val(u_email);
                //$('#up_password').val(u_password);

                //$('#userDetail').html(data);
            }
        });
    }



}

function retrieveMainProfile() {
    //  console.log('rcalled');
    // console.log(user_name);
    if (user_name != '') {
        $.ajax({
            type: 'POST',
            url: 'retrieveMainProfile.php',
            data: 'retrieveMainFormSubmit=1&name=' + user_name,
            //data: ({user_name:user_name}),
            success: function (data) {
                //           console.log(data);
                $('#welcomeProfile').html(data);
            }
        });
    } else {
        rUserName = sessionStorage.getItem("r_username");
        // console.log(rUserName);
        $.ajax({
            type: 'POST',
            url: 'retrieveMainProfile.php',
            data: 'retrieveMainFormSubmit=1&name=' + rUserName,
            //data: ({user_name:user_name}),
            success: function (data) {
                //          console.log(data);
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
    window.location.assign('processes?reset=1');
}

function menuProfileClicked() {

    //    console.log("test");
    //$('.dropdown-menu').toggleClass('hide');
    var menuState = document.getElementById('dropdownMenu');
    menuState.style.visibility = 'hidden';
    retrieveMainProfile();
    retrieveProfile();

}


function setDisplay() {
    //alert('hi');
    //console.log("loaded");
    //    sid = document.getElementById("session_value").value;
    //   console.log(sid);
    //    sessionStorage.setItem("user_display", sid);
    Display = sessionStorage.getItem("user_display");
    //   console.log(Display);
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
    //    console.log(adminDisplay);
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
    //     console.log(letter_lower);
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

$('#adminProfileCloseButton').click(function (e) {
    e.preventDefault();
    $('body').css('overflow-y', 'auto');
    document.getElementById('updateStatusMsg').style.display = 'none';



});

$('#cancelButton').click(function (e) {
    e.preventDefault();
    $('body').css('overflow-y', 'auto');
    document.getElementById('updateStatusMsg').style.display = 'none';



});
