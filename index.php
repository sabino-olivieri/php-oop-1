<?php 
    require_once __DIR__ . '/models/movie.php';
    require_once __DIR__ . '/models/genre.php';
    require_once __DIR__ . '/models/actor.php';

    $movie_avengers = new Movie("avengers infinity war", "2018");
    
    $movie_avengers->set_Duration(59);
    // creo istanza genere1 e e le assegno il nome azione
    $genre_avengers = new Genre();
    $genre_avengers->set_genre_name("azione");

    // assegno al genere di movie l'istanza $genre_avengers
    $movie_avengers->set_genre($genre_avengers);

    $movie_avengers->set_director("Anthony e Joe Russo");

    //creo istanza actor1
    $actor1 = new Actor();
    $actor1->set_actor_name("Robert Downey Jr.");
    $actor1->set_actor_role("Tony Stark - Iron Man");

    $actor2 = new Actor();
    $actor2->set_actor_name("Chris Evans");
    $actor2->set_actor_role("Steve Rogers - Captain America");

    $movie_avengers->set_cast($actor1);
    $movie_avengers->set_cast($actor2);

    var_dump($movie_avengers);

?>