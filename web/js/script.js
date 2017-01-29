/**
 * Created by User on 29.01.2017.
 */

$(function () {
    // setInterval(function () {
    //     $('#clock').click();
    // }, 1000);

    $("#city").keyup(function (e) {
        //console.log($(this).val());
        if ($(this).val().length >= 2) {
            $.ajax({
                url: '/ajax/get-data',
                method: 'POST',
                data: {'city': $(this).val()},
                success: function (data) {
                    $('#cities').empty();
                    for (let i = 0; i < data.length; i++) {
                        $('#cities').append("<option>" + data[i] + "</option>");
                    }
                }
            });
        }
    });

    $("#get").click(function (e) {
        $.get('/votes/1', function (e) {
            $("#out").text(e['lang'] + ": " + e['votes']);
        });
    });

    $("#vote").click(function (e) {
        $.ajax({
            url: '/votes/1',
            type: 'PUT',
            data: {'id': '1', 'votes': 1},
            success: function (e) {
                $("#out").text(e['lang'] + ": " + e['votes']);
            }
        });
    });
});