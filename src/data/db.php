<?php

class Movie {
    public string $title;
    public array $genre;
    public DateTime $releaseDate;

    public function __construct(string $title, array $genre, DateTime $releaseDate) {
        $this->title = $title;
        $this->genre = $genre;
        $this->releaseDate = $releaseDate;
    }

    public function updateTitle($newTitle) {
        $this -> title = $newTitle;
    }
}