<?php
global $db;
require 'start.php';

if (isset($_POST['name']) && isset($_POST['pass'])) {

    $query = "SELECT * from `users` where `name` = :name and `pass` = :pass ";
    $params = [
        ':name' => $_POST['name'],
        ':pass' => $_POST['pass'],
    ];
    $stmt = $db->prepare($query);
    $stmt->execute($params);
    while ($row = $stmt->fetch(PDO::FETCH_LAZY)) {
        $user = $row;

        setcookie('user', $row->id);
    }
    header('Location: index.php');
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход</title>
    <link rel="stylesheet" href="/index1_3.css">
</head>
<body>
<h1>Вход</h1>
<div id="wrapper">
    <form id="signin" method="post" autocomplete="off">
        <input type="text" id="user" name="name" placeholder="username"/>
        <input type="password" id="pass" name="pass" placeholder="password"/>
        <button type="submit">&#xf0da;</button>
        <p>Забыли пароль? <a href="#">Сюда</a></p>
    </form>
</div>
</body>
</html>
