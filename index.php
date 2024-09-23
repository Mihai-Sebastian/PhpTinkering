<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Demo PHP</title>
    </head>
    <body>
        <h1>
            <?php
                $greeting = "Hola";
                echo $greeting . "World!<br>";
                $a =3;
                $b = 2;
                echo $a + $b . "<br>";
//                $films= [
//                        "Dune",
//                    "Star wars",
//                    "Blade Runner 2049",
//                    "Mad Max: Fury road",
//                    "Avatar",
//                    "Club de los poetas muertos"
//                ];
                $films = [
                    [
                            "name" => "Dune",
                            "director" => "Denis Villeneuve",
                            "year" => "2020",
                    ], [
                            "name" => "Star Wars",
                            "director" => "George Lucas",
                            "year" => "1977",
                    ], [
                            "name" => "Blade Runner 2049",
                            "director" => "Denis Villeneuve",
                            "year" => "2017",
                    ], [
                            "name" => "Mad Max: Fury road",
                            "director" => "George Miller",
                            "year" => "2015",
                    ], [
                            "name" => "Avatar",
                            "director" => "James Cameron",
                            "year" => "2009",
                    ], [
                            "name" => "2001: a space odyssey",
                            "director" => "Stanley Kubrick",
                            "year" => "1968",
                    ]];
                var_dump($films);
                function filterByDirector($films, $director){
                    $filterByDirectors = [];
                    foreach ($films as $film){
                        if ($film["director"] === $director){
                            $filterByDirectors[] = $film;
                        }
                    }
                    return $filterByDirectors;
                }
               function filterByYear($films, $year)
               {
                   $filterByYears = [];
                   foreach ($films as $film){
                       if ($film["year"] >= $year){
                           $filterByYears[] = $film;
                       }
                   }
                   return $filterByYears;
               }
               $filteredFilms = array_filter($films, function ($film) {
                   return $film["year"] >= 2010 && $film["year"] <= 2020;
               });
            ?>
        </h1>
        <p>Llista de pelis de Denis Villeneuve </p>
        <ul>
            <?php foreach ($films as $film) : ?>
                <?php if ($film["director"] === "Denis Villeneuve") : ?>
                    <li><?= $film['name'] ?>(<?=$film ['year'] ?>) - By <?=$film['director'] ?></li>
                <?php endif?>
            <?php endforeach; ?>
        </ul>
        <p>Llista de pelis de George Miller </p>
        <ul>
            <?php foreach ($films as $film) : ?>
                <?php if ($film["director"] === "George Miller") : ?>
                    <li><?= $film['name'] ?>(<?=$film ['year'] ?>) - By <?=$film['director'] ?></li>
                <?php endif?>
            <?php endforeach; ?>
        </ul>
        <p>Llista de pelis de James Cameron </p>
        <ul>
            <?php foreach (filterByDirector($films, "James Cameron") as $film) : ?>
                    <li><?= $film['name'] ?>(<?=$film ['year'] ?>) - By <?=$film['director'] ?></li>
            <?php endforeach; ?>
        </ul>
        <p>Llista de pelis de Stanley Kubrick </p>

        <ul>
            <?php foreach (filterByDirector($films, "Stanley Kubrick") as $film) : ?>
                    <li><?= $film['name'] ?>(<?=$film ['year'] ?>) - By <?=$film['director'] ?></li>
            <?php endforeach; ?>
        </ul>
        <p>Agafem la peli 3: <?= $films[2]['name'] . " (" . $films[2]['year'] . ") " . $films[2]['director'] ?></p>
        <br><p>Pelis a partir del 2000</p>
        <ul>
            <?php foreach (filterByYear($films, "2000") as $film) : ?>
                <li><?= $film['name'] ?>(<?=$film ['year'] ?>) - By <?=$film['director'] ?></li>
            <?php endforeach; ?>
        </ul>
        <br><p>Pelis entre 2010 i 2020</p>
        <ul>
            <?php foreach ($filteredFilms as $film) : ?>
                <li><?= $film['name'] ?>(<?=$film ['year'] ?>) - By <?=$film['director'] ?></li>
            <?php endforeach; ?>
        </ul>
    </body>
</html>