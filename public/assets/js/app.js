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

    $(".program_delete").click(function () {
        id = $(this).attr("id");
        if (confirm("Do you want to delete this program!")) {
            $.ajax({
                type: 'post',
                url: '/program/delete',
                data: {
                    id: id
                },
                success: function () {
                    location.reload()
                }
            });
          } else {
          }
        console.log(id)
    })
});