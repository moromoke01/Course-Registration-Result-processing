$(document).ready(function () {
    $("#scoretable").hide();

    $("#requestform")
    .unbind("submit")
    .on("submit", function () {
        $("#scoretable").show();

    });
    
});