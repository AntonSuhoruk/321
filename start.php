<?php

session_start();

$db = new PDO('mysql:host=localhost;dbname=test', 'users', 'password');
$user = null;

if (isset($_COOKIE['user'])){
    $stmt = $db->prepare("SELECT * FROM users WHERE `id` = ?");
    $stmt->execute([$_COOKIE['user']]);
    while ($row = $stmt->fetch(PDO::FETCH_LAZY)) {
        $user = $row;
    }
}
