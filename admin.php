<?php
require __DIR__.'/start.php';
global $user;


if ($user['name'] !== 'admin')
    header('Location: index.php');

?>

<h2>
    Товары
</h2>
<div class="tov">
    <div class="t">
        <div class="col">
            <img src="https://store.ridero.ru/images/w350?bucket=yc:store-raw-data.ridero.store&key=ridero/sku/2022-06/62973838c3ce252f142d0b6e/rev.2023-01-30T16:14:21.890Z/cover-front.png&format=original" alt="">
        </div>
        <div class="col2">
            <h3>
                АКТРИСА НА ВСЮ ГОЛОВУ
            </h3>
            <p>
                Анна Илюшина
            </p>
            <p>
                1080 рублей
            </p>
            <div class="buttons">
                <button>
                    Удалить
                </button>
                <button>
                    Редактировать
                </button>
            </div>
        </div>
    </div>
    <div class="t">
        <div class="col">
            <img src="https://cdn.book24.ru/v2/ITD000000000964030/COVER/cover13d__w410.webp" alt="">

        </div>
        <div class="col2">
            <h3>
                Отражение. Опасность близко
            </h3>
            <p>С. К. Ренсом</p>
            <p>
                780 рублей
            </p>
            <div class="buttons">
                <button>
                    Удалить
                </button>
                <button>
                    Редактировать
                </button>
            </div>
        </div>
    </div>
    <div class="t">
        <div class="col">
            <img src="https://cdn.book24.ru/v2/ITD000000000933557/COVER/cover13d__w410.webp" alt="">

        </div>
        <div class="col2">
            <h3>
                ВОЛКИ ИЗ МЕРСИ-ФОЛЛЗ. ПРЕВРАЩЕНИЕ
            </h3>
            <p>Мэгги Стивотер</p>
            <p>
                599 рублей
            </p>
            <div class="buttons">
                <button>
                    Удалить
                </button>
                <button>
                    Редактировать
                </button>
            </div>
        </div>
    </div>
</div>


<style>
    body {
        color: white;
        background: #151515;
    }
    .tov {
        display: flex;
        flex-direction: column;
        row-gap: 20px;
    }
    .t {
        display: flex;
        flex-direction: row;
        column-gap: 20px;
    }
    h3 {
        margin-top: 0;
    }
    img {
        max-width: 100px;
        width: 100%;
    }
    button {
        border: none;
        background: white;
        padding: 12px;
        font-weight: bold;
    }
</style>