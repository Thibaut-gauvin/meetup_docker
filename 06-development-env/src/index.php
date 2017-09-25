<?php

$bdd = new PDO('mysql:host=db;dbname=demo_meetup', 'root', 'root');

var_dump($bdd);

// try to visit http://localhost:8080
// you see an PDO object
