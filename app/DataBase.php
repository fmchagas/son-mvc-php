<?php

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule();

$capsule->addConnection([
    "driver"=>"mysql",
    "host"=>"localhost",
    "username"=>"fmchagas",
    "password"=>"fmchagas",
    "database"=>"galeria",
    "charset"=>"utf8",
    "collation"=>"utf8_general_ci",
    "prefix"=>""
]);

$capsule->bootEloquent();