<?php

require_once "connection.php";
require_once "User.php";

use Product\User;

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $insertQuery = $db->prepare('INSERT INTO users(`name`, `email`, `password`) VALUES(?, ?, ?)');
    $insertQuery->execute([$name, $email, $password]);
}

$getQuery = $db->prepare('SELECT * FROM users');
$getQuery->execute();
$result = array();
while($row = $getQuery->fetch(PDO::FETCH_ASSOC)){
    array_push($result, new User($row['id'], $row['name'], $row['email'], $row['password'], $row['permission']));
}
var_dump($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="name">Nama</label>
        <input type="text" name="name" id="name"><br>
        <label for="email">E-Mail</label>
        <input type="email" name="email" id="email"><br>
        <label for="password">Kata Sandi</label>
        <input type="password" name="password" id="password"><br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>