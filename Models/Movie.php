<?php

class Movie
{
    public $title;
    public $genre;
    public $year;

    public function __construct($title, $genre, $year)
    {
        $this->title = $title;
        $this->genre = $genre;
        $this->year = $year;
    }

    public function getMovieDetails()
    {
        return "Title: $this->title, Genre: $this->genre, Year: $this->year";
    }
}
