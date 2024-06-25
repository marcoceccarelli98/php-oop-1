<?php

require_once __DIR__ . "/Models/Movie.php";
require_once __DIR__ . "/Models/Actor.php";
require_once __DIR__ . "/Models/Genre.php";

$actors1 = [new Actor("John", "Travolta", 9), new Actor("Samuel L.", "Jackson", 7)];
$actors2 = [new Actor("Leonardo", "Di Caprio", 8)];


// GENRES
$crime = new Genre("Crime", false, "yellow");
$thriller = new Genre("Thriller", true, "orange");
$romance = new Genre("Romance", false, "pink");
$adventure = new Genre("Adventure", false, "green");
$action = new Genre("Action", false, "red");


// MOVIES
$movie1 = new Movie("Pulp Fiction", "Quentin Tarantino", [$crime, $thriller], 1994, $actors1);
$movie2 = new Movie("Titanic", "James Cameron", [$romance, $adventure], 1997, $actors2);

// testing set genre
$movie1->setGenre($action);

// testing set actor
$movie2->setActor(new Actor("Kate", "Winslet", 6));

// MOVIE LIST
$movies = [$movie1, $movie2];

try {
    $movie1->setYear(2020);
} catch (Exception $error) {
    echo $error->getMessage();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>

<body>
    <div class="container">
        <h1><?php echo Movie::getMovieTitle() ?></h1>
        <div class="movie-list" style="display: flex; gap: 30px;">
            <?php foreach ($movies as $movie) : ?>
                <div class="card">
                    <!-- TITLE -->
                    <h2><?php echo $movie->getTitle() ?></h2>

                    <!-- GENRES -->
                    <?php foreach ($movie->getGenres() as $genre) : ?>
                        <span style="color: <?php echo $genre->getTextColor() ?>">
                            <?php echo $genre->getName(); ?>
                        </span>
                    <?php endforeach; ?>

                    <!-- ART DIRECTOR -->
                    <h4><?php echo $movie->getDirector() ?></h4>

                    <!-- ACTORS -->
                    <?php foreach ($movie->getActors() as $actor) : ?>
                        <h5>
                            <?php echo $actor->getFirstName(); ?>
                            <?php echo $actor->getLastName(); ?>
                        </h5>
                    <?php endforeach; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>

</html>