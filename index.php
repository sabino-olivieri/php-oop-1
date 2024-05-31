<?php 
    require_once __DIR__ . '/models/movie.php';
    require_once __DIR__ . '/models/genre.php';
    require_once __DIR__ . '/models/actor.php';

    $movie_avengers = new Movie("avengers infinity war", "2018");
    
    $movie_avengers->set_duration(149);
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

    $movie_avengers->set_country("Stati Uniti");
    $movie_avengers->set_language("English");

    $movie_will_hunting = new Movie("Will Hunting - Genio ribelle", "1997");
    $movie_will_hunting->set_duration(126);

    $genre_will_hunting = new Genre();
    $genre_will_hunting->set_genre_name("dramatic");

    $movie_will_hunting->set_genre($genre_will_hunting);

    $movie_will_hunting->set_director("Gus Van Sant");
    
    $actor3 = new Actor();
    $actor3->set_actor_name("Matt Damon");
    $actor3->set_actor_role("Will Hunting");

    $actor4 = new Actor();
    $actor4->set_actor_name("Robin Williams");
    $actor4->set_actor_role("Sean McGuire");

    $movie_will_hunting->set_cast($actor3);
    $movie_will_hunting->set_cast($actor4);

    $movie_will_hunting->set_country("Stati Uniti");
    $movie_will_hunting->set_language("English");

    var_dump($movie_avengers);
    echo "<hr>";
    var_dump($movie_will_hunting);

?>