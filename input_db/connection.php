<?php

// Procedural
// Object -> MySQLi
// Object -> PDO

$db = new PDO('mysql:host=127.0.0.1;dbname=percobaan_xirplb;charset=utf8mb4','root','');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>