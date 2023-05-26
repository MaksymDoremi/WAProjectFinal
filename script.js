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
    let divCol = $('<div class="col-xl-4 col-md-6 col-sm-12"></div>');
        let divCard = $('<div class="card shadow bg-body" style="border-radius: 13px;"></div>');
            let div1 = $('<div class="d-flex justify-content-between"></div>');
                let h5 = $('<h5 class="card-title ps-3 pt-3"></h5>');
                let h7 = $('<h7 class="card-title pe-3 pt-3"></div>'); //add text-success or text-danger
            let divCardBody = $('<div class="card-body"></div>');
                let div2 = $('<div class="d-flex flex-row"></div>');
                    let divIcon = $('<div class="box-icon mx-2"></div>');
                        let img = $('<img style="border:solid grey 1px; border-radius: 50%;">');
                    let divTextLeft = $('<div class="text-left"></div>');
                        let div3 = $('<div></div>');//<b>coin.symbol to uppper case</b>/CZK
                        let divPrice = $('<div></div>');
                            let span = $('<span style="font-size: x-small; font-weight: 700; padding-left: 3px;">CZK</span>'); //czk napevno
            let div4 = $('<div class="container"></div>');
                let divChart = $('<div id="chartContainer" style="height: 100px; width:100%;"></div>');

    div4.append(divChart);
    divPrice.html(coin.price);
    divPrice.append(span);
    div3.html('<b>'+coin.symbol.toUpperCase()+'</b>/CZK');
    divTextLeft.append(div3);
    divTextLeft.append(divPrice);
    img.attr('src', coin.image);
    divIcon.append(img);
    div2.append(divIcon);
    div2.append(divTextLeft);
    divCardBody.append(div2);
    h5.append(coin.name);
    h7.append(coin.percentage);
    if(parseFloat(coin.percentage) < 0){
        h7.addClass('text-danger');
    }else{
        h7.addClass('text-success');
    }
    div1.append(h5);
    div1.append(h7);
    divCard.append(div1);
    divCard.append(divCardBody);
    divCard.append(div4);
    divCol.append(divCard);

    $('#currencyPlace').append(divCol);

}