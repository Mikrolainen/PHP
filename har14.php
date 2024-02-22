<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap demo</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <style>
            .thumbnail {
                width: 30%; /* Kohandage pisipiltide laiust vastavalt soovile */
                margin: 10px;
                float: left;
            }
            #mainImage {
                max-width: 100%; /* Kuvatava suure pildi maksimaalne laius */
            }
        </style>
    </head>
  <body>
    <div class="container">
        <h1>Harjutus 14</h1>
    
    <h3>random pilt</h3>

        <?php

            /*

            Ül 1
            Mirko Kohava
            01.02.2024

            */

            $failasukoht = 'images';

            $valmis = glob($failasukoht . '/*.jpg');

            if ($valmis) {

                $randomFail = array_rand($valmis);
                $random = $valmis[$randomFail];
                
                echo '<img src="' . $random . '" alt="">';
            } else {
                echo 'Kataloogis pole pilte.';
            }
        ?>
    <h3>pisipilt</h3>

        <?php

            $failasukoht2 = 'images';
            $failid = glob($failasukoht2 . '/*.jpg'); 




            $columns = 2;




            if (isset($_GET['columns']) && is_numeric($_GET['columns'])) {
                $columns = (int)$_GET['columns'];
            }

            $veerud = array_chunk($failid, ceil(count($failid) / $columns));

            foreach ($veerud as $veerg) {
                echo '<div style="display: inline-block; vertical-align: top;">';
                foreach ($veerg as $image) {
                    echo '<a href="' . $image . '" target="_blank"><img src="' . $image . '" alt="Pisipilt"></a>';
                    break;
                }
                echo '</div>';
            }
        ?>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>