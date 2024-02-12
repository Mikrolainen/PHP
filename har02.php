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
        <h1>Harjutus 2</h1>

        <?php
            /*
            Ül 2
            Mirko Kohava
            01.02.2024
            */


            /*
            Matemaatika
            */

            $i = 8;
            $j = 5.5;
            $h = 4;
            $k = $i + $j;
            $l = $k * $h;
            $p = $l - $i;
            $o = $p / $i;
            $u = $o % $k;

            echo "$i + $j = $k<br>";
            echo "$i * $j = $l<br>";
            echo "$i - $j = $p<br>";
            echo "$i / $j = $o<br>";
            echo "$o % $k = $u<br>";

            /*
            MM teisendamine
            */

            $kokku = 2400;
            $jaga = 10;
            $jaga2 = 100;
            $cm = $kokku / $jaga;
            $m = $cm / $jaga2;

            Echo "Kokku MM on $kokku<br>";
            Echo "$kokku / $jaga = $cm<br>";
            Echo "$cm / $jaga = $m<br>";
            Echo "Kokku cm on $cm cm<br>";
            Echo "Kokku m on $m m<br>";

            /*
            Pindala ja umbermoot
            */

            $KNall = 10;
            $KNkald = 13;
            $KNkulg = 5;

            $umber = $KNall + $KNkald;
            $umber2 = $umber  + $KNkulg;
            $pindala = $KNall * $KNkulg / 2;

            echo "Kolmnurga alumine osa on $KNall cm pikk<br>Kolmnurga kulg on $KNkulg cm pikk<br>Kolmnurga kald on $KNkald cm pikk<br>";
            echo "Kolmnurga umbermoot on $umber2 cm pikk<br>";
            Echo "Kolmnurga pindala on $pindala cm2 pikk";

        ?>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>