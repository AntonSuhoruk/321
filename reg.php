<?php
global $db;
require 'start.php';

if (isset($_POST['name']) && isset($_POST['pass']) && isset($_POST['pass2'])) {

    if ($_POST['pass'] === $_POST['pass2']) {
        $query = "INSERT INTO `users` (`name`, `pass`) VALUES (:name, :pass)";
        $params = [
            ':name' => $_POST['name'],
            ':pass' => $_POST['pass'],
        ];
        $stmt = $db->prepare($query);
        $stmt->execute($params);
        header('Location: login.php');
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <link rel="stylesheet" href="/index1_2.css">
</head>
<body>
    <h1>Регистрация</h1>
<div id="wrapper">
	<form id="signin" method="POST" action="reg.php" autocomplete="off">
		<input type="text" id="user" name="name" placeholder="username" />
		<input type="password" id="pass" name="pass" placeholder="password" />
        <input type="password" id="pass2" name="pass2" placeholder="enter password" />
            <button type="submit">&#xf0da;</button>
		<p>Есть аккаунт? <a href="/login.php">Войти</a></p>
	</form>
</div>
</body>
</html>
