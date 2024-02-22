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
    <h1>Harjutus 13</h1>

<h2>Ainult JPG voi JPEG fail!!!</h2>

    <form action="" method="post" enctype="multipart/form-data">
        Valige pilt<br>
        <input type="file" name="file" accept=".jpg, .jpeg">
        <input type="submit" name="submit" value="Lae ules">
    </form>

    <?php

        /*
        
        Ül 13
        Mirko Kohava
        14.02.2024

        */
        
      if (isset($_POST['submit'])) {

          $lubatud = ['image/jpeg', 'image/jpg'];

          if (in_array($_FILES['file']['type'], $lubatud)) {

              $upload = 'images';
              $uploadpilt = $upload . "/ " . basename($_FILES['file']['name']);
              $finishpilt = str_replace(' ', '', $uploadpilt);
              
              if (move_uploaded_file($_FILES['file']['tmp_name'], $finishpilt)) {
                  echo "Pilt on edukalt üles laetud.<br>";
                  echo '<img src="' . $finishpilt . '" alt="Uploaded Image">';
              } else {
                  echo "pildi üleslaadimine ebaõnnestus.";
              }
          } else {
              echo "ainult JPG ja JPEG failitüübid on lubatud.";
          }

      }
      ?>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>