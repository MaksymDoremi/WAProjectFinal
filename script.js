const root = 'https://api.coingecko.com/api/v3/';
const coins = ["bitcoin","ethereum","lcx","lbk","manna","xshrap","yummy"]; 

class Coin(){
    constructor(id, price, image, ){

    }
}

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

    $("#oldPasswordEye").click(function() {
        if ($("#oldPasswordEye").html() == "visibility_off") {
            $("#oldPasswordEye").html("visibility");
            $("#oldPasswordInput").attr('type', 'text');
        } else {
            $("#oldPasswordEye").html("visibility_off");
            $("#oldPasswordInput").attr('type', 'password');
        }
    });

    $("#newPasswordEye").click(function() {
        if ($("#newPasswordEye").html() == "visibility_off") {
            $("#newPasswordEye").html("visibility");
            $("#newPasswordInput").attr('type', 'text');
        } else {
            $("#newPasswordEye").html("visibility_off");
            $("#newPasswordInput").attr('type', 'password');
        }
    });

    $("#confirmNewPasswordEye").click(function() {
        if ($("#confirmNewPasswordEye").html() == "visibility_off") {
            $("#confirmNewPasswordEye").html("visibility");
            $("#confirmNewPasswordInput").attr('type', 'text');
        } else {
            $("#confirmNewPasswordEye").html("visibility_off");
            $("#confirmNewPasswordInput").attr('type', 'password');
        }
    });


    //XHR for crypto coins
    $("#pingBtn").on("click", GetCoins);


});


function Ping() {
    $.ajax({
        url: root + "ping",
        type: "GET",
        success: function(data, status) { 
            console.log("super");
            return true;
        },
        error: function(data, status) {
            console.log(status);
            return false;
        }
    });
}

function GetCoin(coin){
    $.ajax({
        url: root+"coins/"+coin,
        type: "GET",
        success: function(data, status){
            console.log(data);
        },
        error: function(data, status){
            console.log("error occured during fetching data from api");
        }
    });
}

function GetCoins(){
    for(var i = 0; i < coins.length; i++){
        GetCoin(coins[i]);
    }
}

function InsertCoin(){

}


