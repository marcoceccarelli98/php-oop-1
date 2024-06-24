
<?php

class Movie
{
    private string $title;
    private string $director;
    private array $genres;
    private int $year;

    public function __construct($_title, $_director, $_genres, $_year)
    {
        $this->title = $_title;
        $this->director = $_director;
        $this->genres = $_genres;
        $this->year = $_year;
    }

    public function setYear($_year)
    {
        if (is_int($_year)) {
            $this->year = $_year;
        } else {
            throw new Exception("Year must be an integer number!");
        }
    }

    public function getTitle()
    {
        return $this->title;
    }
    public function getDirector()
    {
        return $this->director;
    }
    public function getGenres()
    {
        return $this->genres;
    }
    public function getYear()
    {
        return $this->year;
    }
}

$movie1 = new Movie("Pulp Fiction", "Quentin Tarantino", ["Crime", "Thriller"], 1994);
$movie2 = new Movie("Titanic", "James Cameron", ["Romance", "Adventure"], 1997);

try {
    $movie1->setYear(2020);
} catch (Exception $error) {
    echo $error->getMessage();
}

// MOVIE 1
echo $movie1->getTitle() . "<br>";
echo  $movie1->getDirector() . "<br>";
echo implode(", ", $movie1->getGenres()) . "<br>";
echo $movie1->getYear() . "<br>";


echo $movie2->getTitle() . "<br>";
echo $movie2->getDirector() . "<br>";
echo implode(", ", $movie2->getGenres()) . "<br>";
echo $movie2->getYear() . "<br>";

?>