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
        <h1>Harjutus 3</h1>

        <h3 class="mt-5">Trapetsi pindala</h3>
        <form>
            A cm pikkus <input type="text" name="t1"><br>
            B cm pikkus <input type="text" name="t2"><br>
            H cm Korgus <input type="text" name="t3"><br>
            <input type="submit" value="Saada" class="mb-3">
        </form>

        <?php

            /*

            Ül 3
            Mirko Kohava
            01.02.2024

            */

            /*
            Trapetsi pindala
            */
        
            $arv1 = $_GET['t1'];
            $arv2 = $_GET['t2'];
            $arv3 = $_GET['t3'];

            $trapets = $arv1 + $arv2;
            $trapets2 = $trapets / 2;
            $trapets3 = $trapets2 * $arv3;

            printf ("Trapetsi pindala on %.1f cm2", $trapets3);

            /*
            Rombi umbermoot
            */

            
        ?>

        <hr>
        <h3 class="mt-3">Rombi umbermoot</h3>

            <form>
                A cm pikkus <input type="text" name="t4"><br>
                <input type="submit" value="Saada">
            </form>

        <?php

            $arv5 = $_GET['t4'];

            $umbermoot = 4 * $arv5;

            printf ("Rombi umbermoot on %.1f cm", $umbermoot);


        ?>


    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>