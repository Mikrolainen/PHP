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
    <h1>Harjutus 7</h1>

    <h3>tervitus</h3>
        <?php

            /*

            Ül 7
            Mirko Kohava
            08.02.2024

            */

            function tervita() {
                echo "Tere päiksekesekene!";
            }

            tervita();

        ?>
        <hr>
    <h3>Liitu uudiskirjaga</h3>
        <?php
            function genereeri_uudiskirja_vorm() {
                echo '
                <form action="#" method="post">
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Sisesta oma e-posti aadress" aria-label="Sisesta oma e-posti aadress" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-success" type="submit">Liitu uudiskirjaga</button>
                        </div>
                    </div>
                </form>';
            }
            genereeri_uudiskirja_vorm();
            
        ?>
        <hr>
    <h3>Kasutajanimi ja email</h3>
        <form method="post">
            <input type="text" name="täisnimi" required>
            <button type="submit">Edasi</button>
        </form>

        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $taisnimi = $_POST['täisnimi'];
                function loo_kasutaja_andmed($taisnimi) {

                    $kasutajanimi_vaike = strtolower($taisnimi);

                    $kasutajanimi_vaike = str_replace(' ', '.', $kasutajanimi_vaike);

                    $email = $kasutajanimi_vaike . "@" . "hkhk.edu.ee";

                    return $email;
                }

                function generateRandomPassword($length = 10) {

                    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%&';
                    $charactersLength = strlen($characters);
                    $randomPassword = '';

                    for ($i = 0; $i < $length; $i++) {
                        $randomPassword .= $characters[rand(0, $charactersLength - 1)];
                    }

                    return $randomPassword;

                }

                $email = loo_kasutaja_andmed($taisnimi);
                $randomPassword = generateRandomPassword();

                echo "<p>Loodud e-posti aadress: $email</p>";
                echo "Sinu juhuslik parool: " . $randomPassword;
            }
        ?>
        <hr>
    <h3>Arvud</h3>
        <form action="" method="post">
            <p>Algus: <input type="number" name="algus"></p>
            <p>Lopp: <input type="number" name="lopp"></p>
            <p>Samm: <input type="number" name="samm"></p>
            <input type="submit" name="submit" value="Genereeri">
        </form>

        <?php
            function genereeriArvud($algus, $lopp, $samm) {

                $aarvud = [];
                $current = $algus;

                for ($i = 0; $i < $samm; $i++) {
                    if ($current > $lopp) {
                        break;
                    }

                    $aarvud[] = $current;
                    $current += ($lopp - $algus) / ($samm - 1);

                }


                echo '<ul>';
                foreach ($aarvud as $aarv) {
                    echo "<li>$aarv</li>";
                }
                echo '</ul>';
            }

        ?>
        <hr>
    <h3>Ristküliku pindala</h3>
        <form method="post">
            <label for="pikkus">Pikkus:</label>
            <input type="number" name="pikkus" id="pikkus" required><br>
            <label for="laius">Laius:</label>
            <input type="number" name="laius" id="laius" required><br>
            <button type="submit">Arvuta pindala</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $pikkus = $_POST['pikkus'];
            $laius = $_POST['laius'];

            function ristkylikuPindala($pikkus, $laius) {
                
                $pindala = $pikkus * $laius;
                
                return $pindala;
            }

            $pindala = ristkylikuPindala($pikkus, $laius);
            echo "Ristküliku pindala on: $pindala m2";
        }
        ?>
        <hr>
    <h3>Isikukood</h3>

        <form method="post">
            <label for="isikukood">Sisesta oma isikukood:</label><br>
            <input type="text" id="isikukood" name="isikukood" maxlength="11" required><br>
            <input type="submit" value="Kinnita">
        </form>    

        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $isikukood = $_POST["isikukood"];

                if (strlen($isikukood) == 11 && is_numeric($isikukood)) {

                    $sugu = ($isikukood[0] % 2 == 0) ? "Naine" : "Mees";

                    $sunnikuupaev = substr($isikukood, 5, 2) . "." . substr($isikukood, 3, 2) . "." . substr($isikukood, 1, 2);

                    echo "Sugu: $sugu <br>";
                    echo "Sünnikuupäev: $sunnikuupaev";
                } else {
                    echo "Isikukood peab olema täpselt 11 numbrit pikk!";
                }
            }
        ?>
        <hr>
    <h3>head motted</h3>
        <?php

            function looLause($alus, $oeldis, $sihitis) {

                $valitudAlus = $alus[array_rand($alus)];
                $valitudOeldis = $oeldis[array_rand($oeldis)];
                $valitudSihitis = $sihitis[array_rand($sihitis)];

                $lause = ucfirst($valitudAlus) . " " . $valitudOeldis . " " . $valitudSihitis . ".";

                return $lause;
            }

            $alus = array("koer", "kass", "hunt", "mario", "lõvi");
            $oeldis = array("jookseb", "hüppab", "magab", "sööb", "mängib");
            $sihitis = array("aia taga", "metsas", "väljakul", "diivanil", "teel");

            $lause = looLause($alus, $oeldis, $sihitis);

            echo $lause;

        ?>
        <hr>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>