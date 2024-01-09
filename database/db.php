<?php

require_once __DIR__ . "/../Models/Movie.php";
require_once __DIR__ . "/../Models/Genre.php";

$action = new Genre("Action");
$comedy = new Genre("Comody");
$tragicomic = new Genre("Tragicomic");


$movies = [
    new Movie("The Matrix", [$action, $comedy], "1990"),
    new Movie("Forrest Gump", [$action, $tragicomic], "1992")
];

var_dump($movies);

