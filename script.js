const root = 'https://api.coingecko.com/api/v3/';
const coins = ["bitcoin", "ethereum", "lcx", "lbk", "manna", "xshrap", "yummy"];

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


class Coin {
    constructor(id, symbol, name, image, price, percentage) {
        //data.id
        this.id = id;
        //data.symbol
        this.symbol = symbol;
        //data.name
        this.name = name;
        //data.image.small
        this.image = image;
        //data.market_data.current_price.czk
        this.price = price;
        //data.price_change_percentage_1h_in_currency
        this.percentage = percentage;
    }
}

var CoinList = [];

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

function GetCoin(coin) {
    $.ajax({
        url: root + "coins/" + coin,
        type: "GET",
        success: function(data, status) {
            //console.log(data);
            //console.log(data.id+"\n"+data.symbol+"\n"+data.name+"\n"+data.image.small+"\n"+data.market_data.current_price.czk+"\n"+data.market_data.price_change_percentage_1h_in_currency.czk);

            InsertCoin(new Coin(data.id, data.symbol, data.name, data.image.small, data.market_data.current_price.czk, data.market_data.price_change_percentage_1h_in_currency.czk));

        },
        error: function(data, status) {
            console.log("error occured during fetching data from api");
        }
    });
}

function GetCoins() {
    for (var i = 0; i < coins.length; i++) {
        GetCoin(coins[i]);
    }
}

function InsertCoin(coin) {
    /*
    <div class="col-xl-4 col-md-6 col-sm-12" >
                <div class="card shadow bg-body" style="border-radius: 13px;">
                    <div class="d-flex justify-content-between">
                        <h5 class="card-title ps-3 pt-3">Ethereum</h5>
                        <h7 class="card-title pe-3 pt-3 text-danger">-0.0123%</h7>
                    </div>
                    <div class="card-body">
                        <div class="d-flex flex-row">
                            <div class="box-icon mx-2">
                                <img style="border:solid grey 1px; border-radius: 50%;" src="https://assets.coingecko.com/coins/images/279/small/ethereum.png?1595348880">
                            </div>
                            <div class="text-left">
                                <div>
                                    <b>BTC</b>/USDT
                                </div>
                                <div class="coin-price">27387.23
                                    <span style="font-size: x-small; font-weight: 700; padding-left: 3px;">USDT</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div id="chartContainer" style="height: 100px; width:100%;"></div>
                    </div>
                </div>
            </div>
        */

    let divCol = $('<div class="col-xl-4 col-md-6 col-sm-12"></div>');
    let divCard = $('<div class="card shadow bg-body" style="border-radius: 13px;"></div>');
    let div1 = $('<div class="d-flex justify-content-between"></div>');
    let h5 = $('<h5 class="card-title ps-3 pt-3"></h5>');
    let h7 = $('<h7 class="card-title pe-3 pt-3"></div>'); //add text-success or text-danger
    let divCardBody = $('<div class="card-body"></div>');
    let div2 = $('<div class="d-flex flex-row"></div>');
    let divIcon = $('<div class="box-icon mx-2"></div>');
    let img = $('<img style="border:solid grey 1px; border-radius: 50%;">');
}