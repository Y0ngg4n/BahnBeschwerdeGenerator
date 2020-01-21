$(function () {
    $('#zustiegszeit').datetimepicker({
        locale: 'de',
    });
    $('#ausstiegszeit').datetimepicker({
        useCurrent: false,
        locale: 'de',
    });

    $("#zustiegszeit").on("change.datetimepicker", function (e) {
        $('#ausstiegszeit').datetimepicker('minDate', e.date);
    });
    $("#ausstiegszeit").on("change.datetimepicker", function (e) {
        $('#zustiegszeit').datetimepicker('maxDate', e.date);
    });

    $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
});