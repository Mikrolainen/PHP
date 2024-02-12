<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
    <h1>Harjutus 6</h1>

    <h3>1. genereeri</h3>

    <?php

        /*

        Ül 6
        Mirko Kohava
        08.02.2024

        */

        for ($i = 1; $i <= 100; $i++) {
            echo $i . ". ";
            if ($i % 10 === 0) {
                echo "<br>";
            }
        }
    ?>

    <h3>2. rida</h3>

    <?php
        $pikkus = 10;
        for ($i = 0; $i < $pikkus; $i++) {
            echo "*";
        }
    ?>

    <h3>3.rida II</h3>

    <?php
        $pikkus2 = 10;

        for ($k = 0; $k < $pikkus2; $k++) {
            echo "*<br>";
        }
    ?>

    <h3>4. ruut</h3>

        <?php
            $suurus = 5;

            // Nested loop to generate the square
            for ($i = 0; $i < $suurus; $i++) {
                for ($j = 0; $j < $suurus; $j++) {
                    echo "* ";
                }
                echo "<br>";
            }
        ?>

    <h3>5. kahanev</h3>

    <?php
        for ($l = 10; $l >= 1; $l--) {
            echo $l . "<br>";
        }
    ?>

    <h3>6. kolmega jagunev</h3>

        <?php
            for ($i = 1; $i <= 100; $i++) {
                if ($i % 3 === 0) {
                    echo $i . ", ";
                }
            }
        ?>

    <h3>7.massiivid ja tsuklid</h3>

    <?php
        $tudrukud = array("Anna", "Emma", "Laura", "Maria", "Liisa");
        $poisid = array("Jaan", "Mart", "Andres", "Markus", "Kristjan");
        
        for ($i = 0; $i < count($tudrukud); $i++) {
            echo $poisid[$i] . " ja " . $tudrukud[$i] . "<br>";
        }
    ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>