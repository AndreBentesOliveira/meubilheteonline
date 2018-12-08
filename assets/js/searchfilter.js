$(document).ready(function(){
    //$("#seta").fadeOut(0);
    $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#mytable button").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});