<?php

require(__DIR__.'/start.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/index1.css">
</head>
<body>
<nav>
    <?php
        if(!$user){ ?>
            <a href="/login.php" style="color: white">
                Войти
            </a>
            <a href="/reg.php" style="color: white">
                Регистрация
            </a>
       <?php     }else { ?>
         <a href="/acc.php"><?=$user['name']?></a>
    <?php } ?>
</nav>

<div class="cards">
    <div>
    <div class="card">
        <div class="circle" style="--clr:#fd7015;">
            <img src="https://store.ridero.ru/images/w350?bucket=yc:store-raw-data.ridero.store&key=ridero/sku/2022-06/62973838c3ce252f142d0b6e/rev.2023-01-30T16:14:21.890Z/cover-front.png&format=original"
                 class="logo">
        </div>
        <div class="content">
            <h2>АКТРИСА НА ВСЮ ГОЛОВУ</h2>
            <p>
                Анна Илюшина
            </p>
            <a href="/cart.php?id=1">Заказать сейчас</a>
        </div>
        <img src="https://store.ridero.ru/images/w350?bucket=yc:store-raw-data.ridero.store&key=ridero/sku/2022-06/62973838c3ce252f142d0b6e/rev.2023-01-30T16:14:21.890Z/cover-front.png&format=original"
             class="product_img">
    </div>
</div>
    <div>

        <div class="card">
            <div class="circle" style="--clr:#fd7015;">
                <img src="https://cdn.book24.ru/v2/ITD000000000933557/COVER/cover13d__w410.webp" class="logo">
            </div>
            <div class="content">
                <h2>Волки из Мерси-Фоллз. Превращение</h2>
                <p>
                    Мэгги Стивотер
                </p>
                <a href="/cart.php?id=3">Заказать сейчас</a>
            </div>
            <img src="https://cdn.book24.ru/v2/ITD000000000933557/COVER/cover13d__w410.webp" class="product_img">
        </div>

    </div>
    <div>

        <div class="card">
            <div class="circle" style="--clr:#fd7015;">
                <img src="https://cdn.book24.ru/v2/ITD000000000964030/COVER/cover13d__w410.webp" class="logo">
            </div>
            <div class="content">
                <h2>Отражение. Опасность близко</h2>
                <p>С. К. Ренсом
                </p>
                <a href="/cart.php?id=2">Заказать</a>
            </div>
            <img src="https://cdn.book24.ru/v2/ITD000000000964030/COVER/cover13d__w410.webp" class="product_img">
        </div>
    </div>


</div>


</body>
</html>
