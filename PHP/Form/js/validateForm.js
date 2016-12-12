
$('#validate_form').on({
        mouseout: submit_validate = function(){
    //flag return?????
        var valid= true;
        if($('#name').val().trim()=='') {
        $('#name').next('div').removeClass('hidden-xl-down');
        $('#name').next('div').text('* is empty');
        valid=false;
    }  else $('#name').next('div').addClass('hidden-xl-down');
//validate date
    if($('#date').val().trim()=='') {
        $('#date').next('div').text('* is empty');
        $('#date').next('div').removeClass('hidden-xl-down');
        valid=false;
    }  else $('#date').next('div').addClass('hidden-xl-down');
//validate phone number
//    check empty
    if($('#phone').val().trim()=='') {
        $('#phone').next('div').text('* is empty');
        $('#phone').next('div').removeClass('hidden-xl-down');
        valid=false;
    }   else $('#phone').next('div').addClass('hidden-xl-down');

    //validate phone
    if(($('#phone').val().match(/^([0-9])+$/)==null)||($('#phone').val()[0] != 0)||(($('#phone').val().length != 10)&&($('#phone').val().length != 11))) {
        $('#phone').next('div').text('* is not a phone number');
        $('#phone').next('div').removeClass('hidden-xl-down');
        valid=false;
    }   else $('#phone').next('div').addClass('hidden-xl-down');

//validate address
    if($('#address').val().trim()=='') {
        $('#address').next('div').text('* is empty');
        $('#address').next('div').removeClass('hidden-xl-down');
        valid=false;
    }  else $('#address').next('div').addClass('hidden-xl-down');

//validate gender
    //validate gender

    if($('input[name="sex"]:checked').val() == undefined) {
        $('#female').siblings('div').text('* Choose gender');
        $('#female').siblings('div').removeClass('hidden-xl-down');
        valid=false;
    }  else $('#female').siblings('div').addClass('hidden-xl-down');


//validate email
    //empty check
    //if($('#email').val().trim()=='') {
    //    $('#email').next('div').text('* is empty');
    //    $('#email').next('div').removeClass('hidden-xl-down');
    //    valid=false;
    //} else $('#email').next('div').addClass('hidden-xl-down');
    //mail type check
    if($('#email').val().match(/^[-a-z0-9~!$%^&*_=+}{\'?]+(\.[-a-z0-9~!$%^&*_=+}{\'?]+)*@([a-z0-9_][-a-z0-9_]*(\.[-a-z0-9_]+[a-z][a-z])|([0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}))(:[0-9]{1,5})?$/i)==null) {
        $('#email').next('div').text('* is not a email type');
        $('#email').next('div').removeClass('hidden-xl-down');
        valid=false;
    }  else $('#email').next('div').addClass('hidden-xl-down');
//validate facebook address
//    //empty check
//    if($('#facebook').val().trim()=='')
//    {   $('#facebook').next('div').text('* is empty');
//        $('#facebook').next('div').removeClass('hidden-xl-down');
//        valid=false;
//    }   else $('#facebook').next('div').addClass('hidden-xl-down');
    //validate facebook
    if (/^(https?:\/\/)?((w{3}\.)?)facebook.com\/.*/i.test($('#facebook').val())==false)
    {   $('#facebook').next('div').text('* not a facebook url');
        $('#facebook').next('div').removeClass('hidden-xl-down');
        valid=false;
    }   else $('#facebook').next('div').addClass('hidden-xl-down');


    //validate password
    if($('#password').val().trim()=='') {
        $('#password').next('div').text('* is empty');
        $('#password').next('div').removeClass('hidden-xl-down');
        valid=false; $('#confirm_password')
    }  else $('#password').next('div').addClass('hidden-xl-down');

    //confirm password
    if($('#password').val() != $('#confirm_password').val()) {
        $('#confirm_password').next('div').text('Password not match');
        $('#confirm_password').next('div').removeClass('hidden-xl-down');
        valid=false;
    }  else $('#confirm_password').next('div').addClass('hidden-xl-down');


            return valid;
},
    //submit event
    submit: function () {
        return submit_validate();
    }

});

