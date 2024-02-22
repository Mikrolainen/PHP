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

        <h1>Harjutus 10</h1>

            <ul>
                <li><a href="http://127.0.0.1/php/har10.php?page=1">avaleht</a></li>
                <li><a href="http://127.0.0.1/php/har10.php?page=2">tooted</a></li>
                <li><a href="http://127.0.0.1/php/har10.php?page=3">kontakt</a></li>
                <li><a href="http://127.0.0.1/php/har10.php?page=4">galerii</a></li>
                <li><a href="http://127.0.0.1/php/har10.php?page=5">test</a></li>
            </ul>

            <?php

                /*

                Ül 10
                Mirko Kohava
                14.02.2024

                */

                $esimene = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas non, a cumque autem corrupti iusto velit quis excepturi quasi ad deleniti quam aliquam vel ducimus, fugiat minima alias aut eum?";
                $teine = "aaaaaaaaaaaaaaaaLorem ipsum dolor sit amet, consectetur adipisicing elit. Quas non, a cumque autem corrupti iusto velit quis excepturi quasi ad deleniti quam aliquam vel ducimus, fugiat minima alias aut eum?";
                $kolmas = "fffffffffffffffffLorem ipsum dolor sit amet, consectetur adipisicing elit. Quas non, a cumque autem corrupti iusto velit quis excepturi quasi ad deleniti quam aliquam vel ducimus, fugiat minima alias aut eum?";
                $neljas = "eeeeeeeeeeeeeeeeeeeeLorem ipsum dolor sit amet, consectetur adipisicing elit. Quas non, a cumque autem corrupti iusto velit quis excepturi quasi ad deleniti quam aliquam vel ducimus, fugiat minima alias aut eum?";

                if (isset($_GET['page']) && is_numeric($_GET['page'])) {

                    $lehekuljenr = intval($_GET['page']);
                    
                    if ($lehekuljenr >= 0 && $lehekuljenr <= 5) {

                        if ($lehekuljenr == 1) {

                            echo "<h1>Avaleht</h1><br>";
                            echo $esimene;

                        } elseif($lehekuljenr == 2) {

                            echo "<h1>tooted</h1><br>";
                            echo $teine;    

                        } elseif($lehekuljenr == 3) {

                            echo "<h1>kontakt</h1><br>";
                            echo $kolmas;    

                        } elseif($lehekuljenr == 4) {

                            echo "<h1>galerii</h1><br>";
                            echo $neljas;  

                        } else {
                            echo "Lehekulje sisu pole veel lisatud!!!";
                        }
                    } else {
                        echo "<h1>Lehte ei eksisteeri</h1>";
                    }
                } else {
                    echo "<h1>Lehekülge ei leitud</h1>";
                }
                
            ?>

        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>