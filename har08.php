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
    <h1>Harjutus 8</h1>

    <h2>kuupaev ja kellaaeg</h2>
        <?php

            /*

            Ül 8
            Mirko Kohava
            12.02.2024

            */

            $formaat = 'd.m.Y H:i';

            echo date($formaat);


        ?>
        <hr>
    <h2>vanuse kalk</h2>

            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                Sisestage oma sünniaasta: <input type="text" name="sunniaasta">
                <input type="submit" value="Kinnita">
            </form>

        <?php

            $taan = date("Y");

            function arvutaVanus($sunniaasta, $taan) {

                $vanus = $taan - $sunniaasta;
                return $vanus;
            }

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (is_numeric($_POST["sunniaasta"])) {
                    $sunniaasta = intval($_POST["sunniaasta"]);
                    
                    $vanus = arvutaVanus($sunniaasta, $taan);
                    
                    echo "Olete sel aastal $vanus aastane.";
                }
            }
        ?>
        <hr>
    <h2>pikkus aasta loppuni</h2>      
        <?php

            $kooliaasta_algus = strtotime('1 September ' . date('Y'));

            if (time() < $kooliaasta_algus) {
                $kooliaasta_algus = strtotime('1 September ' . (date('Y') - 1));
            }
            $kooliaasta_lopp = strtotime('31 May ' . (date('Y') + 1));

            if (time() > $kooliaasta_lopp) {
                $kooliaasta_lopp = strtotime('31 May ' . (date('Y') + 1));
            }

            $paevade_arv = ceil(($kooliaasta_lopp - time()) / (60 * 60 * 24));

            echo "kooliaasta lopuni on $paevade_arv päeva!";
        ?>
        <hr>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>