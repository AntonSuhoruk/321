<?php

require 'start.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/index_Z1.css">
</head>
<body>
<div class="row">
    <div class="col-75">
        <div class="container">
            <form action="/action_page.php">

                <div class="row">
                    <div class="col-50">
                        <h3>Заказ</h3>
                        <label for="adr"><i class="fa fa-address-card-o"></i> Адрес </label>
                        <input type="text" id="adr" name="address" placeholder="д 14 кв 1">
                        <label for="city"><i class="fa fa-institution"></i> Город</label>
                        <input type="text" id="city" name="city" placeholder="Оренбург">

                        <div class="col-50">
                            <label for="zip">Индекс</label>
                            <input type="text" id="zip" name="zip" placeholder="46000">
                        </div>
                    </div>
                </div>

                <label for="cname">Держатень карты</label>
                <input type="text" id="cname" name="cardname" placeholder="Sukhoruk Anton">
                <label for="ccnum">Номер карты</label>
                <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
                <label for="expmonth">Дата выдачи</label>
                <input type="text" id="expmonth" name="expmonth" placeholder="11/31">


                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="555">
        </div>
    </div>
</div>

</div>
<input type="submit" value="Оплатить" class="btn">
</form>
</div>
</div>
</body>