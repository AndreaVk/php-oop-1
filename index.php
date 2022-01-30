<?php

require_once __DIR__ ."/classes/Movies.php";

$Movies = [
    new Movies("Shutter Island", "Scorsese", "Di Caprio, Ruffalo, Kingsley", "138min", 2010)
    new Movies("La notte del giudizio (The Purge)", "De Monaco", "Hawke, Headey, Kane", "85min", 2013)
    new Movies("La maschera di cera", "Collet-Serra", "Padelecki, Murray, Hilton", "113min", 2005)
    new Movies("La ricerca della felicità ", "Muccino", "Will Smith, Jaden Smith", "117min", 2006)
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preferenze</title>
</head>
<body>
    <h1>Consigliati per te:</h1>
    <?php foreach ($Movies as $movie) { ?>
        <div>
            <h2>Titolo:<?php echo $movie->title ?></h2>
            <ul>
                <li>Regista: <?php echo $movie->director ?></li>
                <li>Cast: <?php echo $movie->cast ?></li>
                <li>Durata: <?php echo $movie->duration ?></li>
                <li>Anno di uscita: <?php echo $movie->release_year ?></li>
            </ul>
        </div>
    <?php } ?>

</body>
</html>