/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

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
    //$("#modalRegisterForm").modal({"backdrop": "static"});
    console.log('ji');
    
});

$('#closeButton').click(function (e) {
    e.preventDefault();
    $('body').css('overflow-y', 'auto');
});

$('.close').click(function (e) {
    e.preventDefault();
    $('body').css('overflow-y', 'auto');
});

        function ajaxfunction(type)
        {//     console.log(elementValue);
            $(this).on('change',function() {
                var elementId = type.id;
                var elementValue = type.value;
                $.ajax({
                    type: 'POST',
                    url: 'processes',
                    data: 'updateStatus=1&elementId=' + elementId + '&elementValue=' + elementValue,
                    success: function(){
                        window.location.assign('aOrderTracking');
                    }
                });
            });
        }

