<?php 
    require_once __DIR__ . '/models/movie.php';
    require_once __DIR__ . '/models/genre.php';

    $movie1 = new Movie("avengers infinity war", "2010");
    
    $movie1->set_Duration(59);
    // creo istanza genere1 e e le assegno il nome azione
    $genre1 = new Genre();
    $genre1->set_genre_name("azione");

    // assegno a movie il genere istanza $genre1
    $movie1->set_genre($genre1);
    var_dump($movie1);

?>