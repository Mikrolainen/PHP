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
        <h1>Harjutus 4</h1>

        <h3 class="mt-5">Jagamine</h3>
        <form method="get" action="">
            A cm pikkus <input type="text" name="t1"><br>
            B cm pikkus <input type="text" name="t2"><br>
            <input type="submit" value="Saada" class="mb-3">
            
            <?php

            /*
                Mirko Kohava
                01.02.2024
                ul4
            */

            if (!empty($_GET['t1']) && !empty($_GET['t2'])) {
                $arv1 = $_GET['t1'];
                $arv2 = $_GET['t2'];
            

                if ($arv2 == 0) {
                    echo 'Jagamine 0-iga on väga paha';
                } else {
                    $jagam = $arv1 / $arv2;
                    echo "$jagam";
                }
            }
            ?>
        </form>

        <hr>

        <h3>Vanus</h3>
        <p>Year.Month.Day</p>

        <form method="get" action="">
            1 sunniaasta <input type="text" name="t3"><br>
            2 sunniaasta <input type="text" name="t4"><br>
            <input type="submit" value="Saada" class="mb-3">

            <?php

                /*
                    vanuse arvutaja
                */


                if (!empty($_GET['t3']) && !empty($_GET['t4'])) {
                    $arv1 = $_GET['t3'];
                    $arv2 = $_GET['t4'];

                    $tana = date("Y.m.d");

                    $vann = $tana - $arv1;

                    $vann2 = $tana - $arv2;

                    if ($vann == $vann2) {
                        echo "<br>Yuhuu! olete sama vanused!<br>";
                        echo "Olete: ";
                        echo intval($vann);
                        echo " aasta vanused";
                    } else {
                        echo "esimene vanus on: <br>";
                        echo intval($vann);
                        echo "<br>Teine vanus on: <br>";
                        echo intval($vann2);
                    }

                }

            ?>
        
        <hr>

        <h3>Kuju otsustaja 5000</h3>

        <form method="get" action="">
            1 number <input type="text" name="t5"><br>
            2 number <input type="text" name="t6"><br>
            <input type="submit" value="Saada" class="mb-3">


        <?php

            if (!empty($_GET['t5']) && !empty($_GET['t6'])) {
                $arv3 = $_GET['t5'];
                $arv4 = $_GET['t6'];

                if ($arv3 == $arv4) {
                    echo "Kuju otsustaja utleb et sellega saab teha RUUDU<br>";
                    $imageName = "ruud.jpg";
                    $imagePath = "http://127.0.0.1/php/images/" . $imageName;
                    
                    echo '<img src="' . $imagePath . '" alt="My Image">';
                } elseif ($arv3 != $arv4) {
                    echo "Kuju otsustaja utleb et sellega saab teha RISTKULIKU<br>";
                    $imageName = "rist.jpg";
                    $imagePath = "http://127.0.0.1/php/images/" . $imageName;
                    
                    echo '<img src="' . $imagePath . '" alt="My Image">';
                                }
                            
            }
        ?>

        <hr>

        <h3>Juubel</h3>

        <form method="get" action="">
            1 number <input type="text" name="t7"><br>
            <input type="submit" value="Saada" class="mb-3">

        <?php

            if (!empty($_GET['t7'])) {
                $arv5 = $_GET['t7'];

            $prgaasta = date("Y");

            if (($prgaasta-$arv5) % 5 == 0) {
                echo "Yuhu sul on juubel vana";
            } else {
                echo "sul pole juubelit veel mees, oota veel nats";
            }
            }
        ?>
            
        <hr>

        <h3>KT hinne</h3>
        
        <form method="get" action="">
            punktide arv: <input type="text" name="t8"><br>
            <input type="submit" value="Saada" class="mb-3">

        <?php

            if (isset($_GET['t8'])) {
                $arv6 = $_GET['t8'];

                switch($arv6) {
                case ($arv6>10): echo "SUPER!";
                break;
                case ($arv6>=5): echo "rahuldav";
                break;
                case ($arv6<5): echo "kukkusid valja";
                break;
                default: echo "sisesta oma punktid mongol";
                }
            }
        ?>




    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>