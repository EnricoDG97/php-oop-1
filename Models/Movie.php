<?php

class Movie
{
    public $title;
    // genres sarà un array e non più una stringa unica
    public $genres;
    public $year;

    public function __construct($_title, $_genres, $_year)
    {
        $this->title = $_title;
        $this->genres = $_genres;
        $this->year = $_year;
    }

    public function getMovieDetails()
    {
        // trasformo l'array in stringa, lo popolo aggiungendo le , concatenate
        $genres_string = "";
        foreach($this->genres as $key => $genre) {
            $genres_string .= $genre->name;
            if($key < count($this->genres) - 1) {
                $genres_string .= ', ';
            }
        }
        return "Title: $this->title, Genre: $genres_string, Year: $this->year";
    }
}
