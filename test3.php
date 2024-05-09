<?php
include("vendor/autoload.php");

use Libs\Database\MySQL;
use Libs\Database\UsersTable;

$mysql = new MySQL;
$table = new UsersTable($mysql);

$id = $table->insert([
    "name" => "Alice",
    "email" => "alice@gmail.com",
    "phone" => "23890428",
    "address" => "Some Address",
    "password" => "password",
]);
echo $id;