<?php

include("vendor/autoload.php");

use Libs\Database\MySQL;
use Libs\Database\UsersTable;
use Faker\Factory as Faker;

$mysql = new MySQL;
$table = new UsersTable($mysql);
$faker = Faker::create();

echo "Starting... <br>";
for ($i = 0; $i < 20; $i++) {
    $table->insert([
        "name" => $faker->name,
        "email" => $faker->email,
        "phone" => $faker->phonenumber,
        "address" => $faker->address,
        "password" => "password",

    ]);
}

echo "Done. <br>";
