$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$(document).ready(function () {

    $(".logout_btn").click(function () {
        $.ajax({
            type: 'get',
            url: '/logout'
        });
    });

    $(".reg1_btn").click(function () {
        if ($("#reg1_name").val() == '') {
            $(".reg1_name").focus();
            alert("Please input your Name!");
            return;
        }
        if ($("#reg1_hid").val() == '') {
            $(".reg1_hid").focus();
            alert("Please input your Herbal Live Id!");
            return;
        }
        if ($("#reg1_ic").val() == '') {
            $(".reg1_ic").focus();
            alert("Please input your Ic Number!");
            return;
        }
        if ($("#reg1_phone").val() == '') {
            $(".reg1_phone").focus();
            alert("Please input your Phone Number!");
            return;
        }
        if ($("#reg1_add").val() == '') {
            $(".reg1_add").focus();
            alert("Please input your Address!");
            return;
        }
        if ($("#reg1_gmail").val() == '') {
            $(".reg1_gmail").focus();
            alert("Please input your Gmail!");
            return;
        }
        if ($("#reg1_uname").val() == '') {
            $(".reg1_uname").focus();
            alert("Please input your Username!");
            return;
        }
        if ($("#reg1_pswd").val() == '') {
            $(".reg1_pswd").focus();
            alert("Please input your Password!");
            return;
        }
        if ($("#reg1_pswd").val() != $("#reg1_conf").val()) {
            $(".reg1_conf").focus();
            alert("Please retype your password correctly!");
            return;
        }
        $.ajax({
            type: 'POST',
            url: '/register_coach',
            data: {
                'name': $("#reg1_name").val(),
                'hid': $("#reg1_hid").val(),
                'ic': $("#reg1_ic").val(),
                'phone': $("#reg1_phone").val(),
                'add': $("#reg1_add").val(),
                'gmail': $("#reg1_gmail").val(),
                'uname': $("#reg1_uname").val(),
                'pswd': $("#reg1_pswd").val(),
            },
            success: function (data) {
                $("#regModal1").modal('hide');
            }
        });
    });
    $(".reg2_btn").click(function () {
        if ($("#reg2_name").val() == '') {
            $(".reg1_name").focus();
            alert("Please input your Name!");
            return;
        }
        if ($("#reg2_ic").val() == '') {
            $(".reg2_ic").focus();
            alert("Please input your Ic Number!");
            return;
        }
        if ($("#reg2_age").val() == '') {
            $(".reg2_age").focus();
            alert("Please input your Age!");
            return;
        }
        if ($("#reg2_phone").val() == '') {
            $(".reg2_phone").focus();
            alert("Please input your Phone Number!");
            return;
        }
        if ($("#reg2_add").val() == '') {
            $(".reg2_add").focus();
            alert("Please input your Address!");
            return;
        }
        if ($("#reg2_gmail").val() == '') {
            $(".reg2_gmail").focus();
            alert("Please input your Gmail!");
            return;
        }
        if ($("#reg2_coach").val() == '') {
            $(".reg2_coach").focus();
            alert("Please select your Coach!");
            return;
        }
        if ($("#reg2_uname").val() == '') {
            $(".reg2_uname").focus();
            alert("Please input your Username!");
            return;
        }
        if ($("#reg2_pswd").val() == '') {
            $(".reg2_pswd").focus();
            alert("Please input your Password!");
            return;
        }
        if ($("#reg2_pswd").val() != $("#reg2_conf").val()) {
            $(".reg2_conf").focus();
            alert("Please retype your password correctly!");
            return;
        }
        $.ajax({
            type: 'POST',
            url: '/register_coachee',
            data: {
                'name': $("#reg2_name").val(),
                'ic': $("#reg2_ic").val(),
                'age': $("#reg2_age").val(),
                'phone': $("#reg2_phone").val(),
                'add': $("#reg2_add").val(),
                'gmail': $("#reg2_gmail").val(),
                'coach': $("#reg2_coach").val(),
                'uname': $("#reg2_uname").val(),
                'pswd': $("#reg2_pswd").val(),
            },
            success: function (data) {
                $("#regModal2").modal('hide');
            }
        });
    });
});