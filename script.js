$(document).ready(function() {

    $("#loginCard").hide().slideDown(800);


    $("#passwordEye").click(function() {
        if ($("#passwordEye").html() == "visibility_off") {
            $("#passwordEye").html("visibility");
            $("#passwordInput").attr('type', 'text');
        } else {
            $("#passwordEye").html("visibility_off");
            $("#passwordInput").attr('type', 'password');
        }

    });

    $("#confirmPasswordEye").click(function() {
        if ($("#confirmPasswordEye").html() == "visibility_off") {
            $("#confirmPasswordEye").html("visibility");
            $("#confirmPasswordInput").attr('type', 'text');
        } else {
            $("#confirmPasswordEye").html("visibility_off");
            $("#confirmPasswordInput").attr('type', 'password');
        }

    });




});