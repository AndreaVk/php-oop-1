<?php

class Movies {
    public $title;
    public $director;
    public $cast;
    public $duration;
    public $release_year;

    public function __construct($_title, $_director, $_cast, $_duration, $_release_year)
    {
        $this->title = $_title;
        $this->director = $_director;
        $this->cast = $_cast;
        $this->duration = $_duration;
        $this->release_year = $_release_year;
    }
}
    ?>