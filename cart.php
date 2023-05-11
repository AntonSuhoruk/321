<?php
require 'start.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Корзина</title>
    <link rel="stylesheet" href="/index_Z.css">
</head>
<body>
<div class="shopping-cart">
    <!-- Title -->
    <div class="title">
        Корзина
    </div>

    <!-- Товар #1 -->
    <?php
     if ($_GET['id'] == '1') {
    ?>
    <div class="item">
        <div class="buttons">
            <span class="delete-btn"></span>
            <span class="like-btn"></span>
        </div>

        <div class="image">
            <img height="100" src="https://store.ridero.ru/images/w350?bucket=yc:store-raw-data.ridero.store&key=ridero/sku/2022-06/62973838c3ce252f142d0b6e/rev.2023-01-30T16:14:21.890Z/cover-front.png&format=original" alt=""/>
        </div>

        <div class="description">
            <span>АКТРИСА НА ВСЮ ГОЛОВУ</span>
            <span>Анна Илюшина</span>
        </div>

        <div class="quantity">
            <button class="plus-btn" type="button" name="button">
                -
            </button>
            <input type="text" name="name" value="1">
            <button class="minus-btn" type="button" name="button">
                +
            </button>
        </div>

        <div class="total-price">1080 рублей</div>
    </div>
    <?php } ?>

    <!-- Товар #2 -->
    <?php
    if ($_GET['id'] == '2') {
    ?>
    <div class="item">
        <div class="buttons">
            <span class="delete-btn"></span>
            <span class="like-btn"></span>
        </div>

        <div class="image">
            <img height="100" src="https://cdn.book24.ru/v2/ITD000000000964030/COVER/cover13d__w410.webp" alt=""/>
        </div>

        <div class="description">
            <span>Отражение. Опасность близко</span>
            <span>С. К. Ренсом</span>
        </div>

        <div class="quantity">
            <button class="plus-btn" type="button" name="button">
                -
            </button>
            <input type="text" name="name" value="1">
            <button class="minus-btn" type="button" name="button">

                +            </button>
        </div>

        <div class="total-price">780 рублей</div>
    </div>
    <?php } ?>


    <!-- Товар #3 -->
    <?php
    if ($_GET['id'] == '3') {
    ?>
    <div class="item">
        <div class="buttons">
            <span class="delete-btn"></span>
            <span class="like-btn"></span>
        </div>

        <div class="image">
            <img src='https://cdn.book24.ru/v2/ITD000000000933557/COVER/cover13d__w410.webp' height="100" alt=""/>
        </div>

        <div class="description">
            <span>ВОЛКИ ИЗ МЕРСИ-ФОЛЛЗ. ПРЕВРАЩЕНИЕ</span>
            <span>Мэгги Стивотер</span>
        </div>

        <div class="quantity">
            <button class="plus-btn" type="button" name="button">
                -
            </button>
            <input type="text" name="name" value="1">
            <button class="minus-btn" type="button" name="button">
                +
            </button>
        </div>

        <div class="total-price">599 рублей</div>
    </div>
    <?php } ?>

    <div style="display: flex;flex-direction: row; justify-content: end">
        <button style="border: none; width:100px; padding: 12px; margin-left:auto;margin-right: 40px" onclick="window.location.href='/cart.php?act=add&id=<?=$_GET['id']?>'">
            Добавить
        </button>
        <button style="border: none; width:100px; padding: 12px; margin-right: 40px" onclick="window.location.href='/buy.php'">
            Оформить
        </button>
    </div>

</div>
<div>
    <button>
    </button>
</div>
</body>
</html>
