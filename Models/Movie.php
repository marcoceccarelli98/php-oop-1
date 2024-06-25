<?php

class Movie
{
    private string $title;
    private string $director;
    private array $genres;
    private int $year;
    private array $actors;

    public function __construct($_title, $_director, $_genres, $_year, array $actors)
    {
        $this->title = $_title;
        $this->director = $_director;
        $this->genres = $_genres;
        $this->year = $_year;
        $this->actors = $actors;
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
    public function getActors()
    {
        return $this->actors;
    }
}
