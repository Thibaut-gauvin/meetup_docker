<?php

$env = [
    'MYSQL_DATABASE' => getenv('MYSQL_DATABASE'),
    'MYSQL_USER' => getenv('MYSQL_USER'),
    'MYSQL_PASSWORD' => getenv('MYSQL_PASSWORD'),
];

echo 'Getting env var using getenv()';
echo "\n";
var_dump($env);

$bdd = new PDO('mysql:host=db;dbname='.$env['MYSQL_DATABASE'], $env['MYSQL_USER'], $env['MYSQL_PASSWORD']);

var_dump($bdd);

// try to visit http://localhost:8080
// you see an PDO object
