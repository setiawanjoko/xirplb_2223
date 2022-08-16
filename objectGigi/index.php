<?php
require_once "User.php";
require_once "Dokter.php";

use Gigi\Dokter;
use Gigi\User;

$user = new User("Joko", "joko@gmail.com");

var_dump($user);

$dokter = new Dokter("Joko", "dokter@gmail.com", "D600");

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
    Username : <?php echo $dokter->username ?> <br>
    Email : <?php echo $dokter->email ?> <br>
    No. Reg : <?php echo $dokter->no_reg ?> <br>
</body>
</html>