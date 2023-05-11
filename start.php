<?php

session_start();


$_COOKIE['cart'] = json_decode($_COOKIE['cart'],1) ?? [];


if (isset($_GET['act']) && isset($_GET['id'])){

    $_COOKIE['cart'][] = $_GET['id'];
    setcookie('cart', json_encode($_COOKIE['cart']));

    header('Location: /index.php');
}




$db = new PDO('mysql:host=localhost;dbname=test', 'users', 'password');
$user = null;

if (isset($_COOKIE['user'])){
    $stmt = $db->prepare("SELECT * FROM `users` WHERE `id` = ?");
    $stmt->execute([$_COOKIE['user']]);
    while ($row = $stmt->fetch(PDO::FETCH_LAZY)) {
        $user = ['id'=>$row->id, 'name'=>$row->name];
    }
}

?>
<nav>
    <h1 style="color: white">
        <a href="/index.php">
            BookFast

        </a>
    </h1>
    <div style="display: flex; column-gap: 20px">
        <?php
        if (!empty($_COOKIE['cart'])){ ?>
        <a href="/buy.php">
            Корзина (<?=count($_COOKIE['cart'])?>)
        </a>
        <?php }
    if(!$user){ ?>
        <a href="/login.php" style="color: white">
            Войти
        </a>
        <a href="/reg.php" style="color: white">
            Регистрация
        </a>
    <?php     }else { ?>
        <a href="/acc.php"><?= $user['name']?></a>
    <?php } ?>
    </div>
</nav>

<style>
    body {
        font-family: 'Open Sans', 'sans-serif', 'FontAwesome';
    }
    nav {
        width: 100%;
        max-width: 992px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin: auto;
        margin-bottom: 4rem;
    }
    a {
        color: white;
        text-decoration: none;
    }
</style>
