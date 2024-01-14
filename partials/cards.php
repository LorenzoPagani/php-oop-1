<?php
function printMovies()
{
    global $movies;
    echo '<div class="container">';
    echo '<div class="row">';

    foreach ($movies as $movie) {
        echo '<div class="col-6 my-2">';
        echo '<div class="card px-2 pt-2">';
        echo '<h2>' . $movie->getMovieData() . '</h2>';
        echo '</div>';
        echo '</div>';
    }

    echo '</div>';
    echo '</div>';
}
printMovies();
