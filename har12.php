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
        <h1>Harjutus 12</h1>

    <h2>soiduaeg</h2>

    <form method="post">
        <label for="algusaeg">Stardi aeg (hh:mm):</label><br>
        <input type="text" id="algusaeg" name="algusaeg" maxlength="5"><br><br>
        <label for="loppaeg">Lõppaeg (hh:mm):</label><br>
        <input type="text" id="loppaeg" name="loppaeg" maxlength="5"><br><br>
        <input type="submit" value="Leia sõiduaeg">
    </form>

        <?php

            /*

            Ül 12
            Mirko Kohava
            14.02.2024

            */

                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['algusaeg'], $_POST['loppaeg'])) {

                    $algusaeg = $_POST['algusaeg'];
                    $loppaeg = $_POST['loppaeg'];
                
                    $algusaeg2 = strtotime($algusaeg);
                    $loppaeg2 = strtotime($loppaeg);
                
                    if ($algusaeg2 !== false && $loppaeg2 !== false) {

                        $ajavahe = $loppaeg2 - $algusaeg2;

                        $tund = floor($ajavahe / 3600);
                        $minut = floor(($ajavahe % 3600) / 60);
                
                        echo "Auto sõiduaeg: $tund tundi ja $minut minutit.";
                    } else {
                        echo "Sisestatud ajad on vigased.";
                    }
                }
        ?>
        <hr>
<h2>Palga vahe</h2>

    <?php

        $allikas = 'tootajad.csv';
        $minu_csv = fopen($allikas, 'r') or die('Ei leia faili!');
        $faili_sisu = file_get_contents($allikas);
       
        $mehedpalk = array();
        $naisedpalk = array();

        $jrk = 1;

        while(!feof($minu_csv)){
            $rida = fgetcsv($minu_csv, filesize($allikas),';');

            if ($rida[1] == "m") {
                array_push($mehedpalk, $rida[2]);
            }

            if ($rida[1] == "n") {
                array_push($naisedpalk, $rida[2]);
            }

        }

        $average = array_sum($mehedpalk) / count($mehedpalk);
        $keskmine = round($average, 2);
        $meestesuurim = max($mehedpalk);
        echo "Meeste keskmine palk on: $keskmine €<br>";
        echo "Meeste suurim palk on: $meestesuurim €<br>";

        $average2 = array_sum($naisedpalk) / count($naisedpalk);
        $keskmine2 = round($average2, 2);
        $naistesuurim = max($naisedpalk);
        echo "naiste keskmine palk on: $keskmine2 €<br>";
        echo "naiste suurim palk on: $naistesuurim €<br>";

        if ($keskmine >= $keskmine2) {
            echo "Meeste palk on suurem!!!!!!!!!!!!!!!!!!!!";
        } else {
            echo "Naised vingusid liiga palju ja saavad nuud rohkem raha kui mehed. D:";
        }

    ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>