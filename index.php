<?php 
    require_once __DIR__ . '/models/movie.php';
    require_once __DIR__ . '/models/genre.php';

    $movie1 = new Movie("Avengers", "2010");


    $movie1->set_Duration(59);
    var_dump($movie1);
?>