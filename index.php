<?php
require_once __DIR__ . '/database/db.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies List</title>
</head>
<body>
    <?php foreach ($movies as $movie) { 
        echo '<p>' . $movie->getMovieDetails() . '</p>';
    } ?>
</body>
</html>