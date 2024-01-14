<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.2/css/all.css">
    <link rel="stylesheet" href="style.css">
    <title>movies</title>
</head>
<?php
require __DIR__ . '\movies.php';
$batman = new Movie('Batman Begins', 'Christopher Nolan', 2005, ['superhero', 'drama']);
$lebowski = new Movie('the big lebowski', ['Joel Coen', 'Ethan Coen'], 1998, 'comedy');
var_dump($batman);
var_dump($lebowski);
?>

<body>
    <header class="text-center py-3">
        <h1>PHP Movies</h1>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2> <?php echo $batman->getMovieData() ?> </h2>
                </div>
                <div class="col">
                    <h2> <?php echo $lebowski->getMovieData() ?> </h2>
                </div>

            </div>

        </div>
    </main>
    <footer></footer>
    <script src="main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>