<?php
require './data/db.php';

$movies = [];

$rambo = new Movie("Rambo", ["Action", "Adventure"], new DateTime(1992/18/12));
$movies[] = $rambo;

$trumanShow = new Movie("Truman Show", ["Drama", "Commedy"], new DateTime(1998/10/9));
$movies[] = $trumanShow;

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HTML 5 Boilerplate</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body class="bg-dark">
    <div class="container-fluid">
        <div class="container">
            <div class="row justify-content-center text-center py-5">
                <h1 class="text-danger">
                    MOVIES
                </h1>
            </div>
            <div class="row justify-content-center py-3">
            <?php foreach ($movies as $movie) { ?>
                    <div class="col-4">
                        <div class="card">
                            <div class="card-header bg-danger text-white">
                                <h4>
                                    <?php echo $movie->title; ?>
                                </h4>
                            </div>
                            <div class="card-body">
                                <p>Generes: <span class="badge bg-danger">
                                <?php echo implode(", ", $movie->genre); ?>
                                </span></p>
                                <p>Release Date: <?php echo $movie->releaseDate->format("Y-m-d"); ?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
  </body>
</html>