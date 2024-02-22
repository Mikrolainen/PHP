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
    <h1>Harjutus 9</h1>

<h2>nime tervitaja</h2>

    <form method="post">
        <label for="name">Sisesta oma nimi:</label><br>
        <input type="text" id="name" name="name"><br><br>
        <input type="submit" value="Saada">
    </form>


    <?php

        /*

        Ül 9
        Mirko Kohava
        13.02.2024

        */

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            function capitalize_name($name) {

                $name = strtolower($name);

                $name = ucfirst($name);
                return $name;
            }

            $name = $_POST["name"];
            $name = capitalize_name($name);

            echo "Tere, $name!";
        }
        ?>
        <hr>
<h2>nime tukeldaja</h2>

    <?php
        function lisa_punkt($text) {
            $kala = '';
            $text_pikkus = strlen($text);
            for ($i = 0; $i < $text_pikkus; $i++) {
                if ($i == $text_pikkus - 1) {
                    $kala .= $text[$i];
                } else {
                    $kala .= $text[$i] . '.';
                }
            }

            return $kala;
        }

        // VVVV muuda inputi texti et saada muu valjend
        $input_text = "Pineapple";

        $output_text = lisa_punkt($input_text);

        echo "Sisend: $input_text<br>";
        echo "Väljund: $output_text";
    ?>
    <hr>
<h2>paha sona</h2>

    <form method="post">
        <label for="message">Sisesta oma sõnum:</label><br>
        <textarea id="message" name="message" rows="4" cols="50"></textarea><br><br>
        <input type="submit" value="Saada">
    </form>
       
    <?php
        // Funktsioon, mis asendab ropud sõnad tärnidega
        function filter_pahhsonas($sonum, $pahhsonas) {
            foreach ($pahhsonas as $pahhsona) {
                // Loome asendatava sõna vastava pikkusega tärnide jada
                $replacement = str_repeat('*', strlen($pahhsona));
                // Asendame sõna tärnidega
                $sonum = str_ireplace($pahhsona, $replacement, $sonum);
            }
            return $sonum;
        }

        // Ropud sõnad
        $pahhsonas = array("noob", "loll", "idioot", "fuck", "shit", "taun");

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $kasutajasonum = $_POST["message"];
            $mittepahh = filter_pahhsonas($kasutajasonum, $pahhsonas);
            echo "Sisestatud sõnum: $mittepahh";
        }
    ?>
    <hr>

<h2>korralik email</h2>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="eesnimi">Sisesta oma eesnimi:</label><br>
        <input type="text" id="eesnimi" name="eesnimi"><br><br>
        <label for="viimanenimi">Sisesta oma perenimi:</label><br>
        <input type="text" id="viimanenimi" name="viimanenimi"><br><br>
        <input type="submit" value="Loo email">
    </form>

    <?php

        function convert_special_characters($text2) {
            $text2 = str_replace(array('ä', 'ö', 'ü', 'õ'), array('a', 'o', 'y', 'o'), $text2);
            return $text2;
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $eesnimi = $_POST["eesnimi"];
            $viimanenimi = $_POST["viimanenimi"];
            
            $eesnimi = convert_special_characters($eesnimi);
            $viimanenimi = convert_special_characters($viimanenimi);
            
            $email = $eesnimi . '.' . $viimanenimi . '@hkhk.edu.ee';

            $viimaneemail = strtolower($email);
            
            echo "email: $viimaneemail";
        }
    ?>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>