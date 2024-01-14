<?php
class Movie
{
    public $Title;
    public $Director;
    public $Year;
    public $Genre;

    public function __construct($title, $director, $year, $genre)
    {
        $this->Title = $title;
        $this->Director = $director;
        $this->Year = $year;
        $this->Genre = $genre;
    }

    public function getMovieData()
    {
        $result = '';

        foreach ($this as $key => $value) {
            if (is_array($value)) {
                $result .= $key . ': ' . implode(', ', $value);
            } else {
                $result .= $key . ': ' . $value;
            }

            $result .= '<hr>';
        }

        return $result;
    }
}
