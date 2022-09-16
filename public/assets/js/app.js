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
});