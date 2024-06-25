<?php

require_once __DIR__ . "/Models/Movie.php";
require_once __DIR__ . "/Models/Actor.php";

$actors1 = [new Actor("John", "Travolta", 9), new Actor("Samuel L.", "Jackson", 7)];
$actors2 = [new Actor("Leonardo", "Di Caprio", 8)];

$movie1 = new Movie("Pulp Fiction", "Quentin Tarantino", ["Crime", "Thriller"], 1994, $actors1);
$movie2 = new Movie("Titanic", "James Cameron", ["Romance", "Adventure"], 1997, $actors2);

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
        <h1>MOVIES</h1>
        <div class="movie-list" style="display: flex; gap: 30px;">
            <?php foreach ($movies as $movie) : ?>
                <div class="card">
                    <h2><?php echo $movie->getTitle() ?></h2>
                    <h3><?php echo implode(", ", $movie->getGenres()) ?></h3>
                    <h4><?php echo $movie->getDirector() ?></h4>
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