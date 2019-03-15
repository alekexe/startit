<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>startit-php</title>
  </head>
  <body>
    
  <style>
    body{margin-top: 6em; font-weight: 700; background-color: #212529;}
    

    .int{color: red}
    .string{color: green}
    .float{color: blue}
    .bool{color: red}
    .array{color: green}


    .najmanji{color: green;}
    .najveci{color: blue;}
  </style>

<?php

    /* 
    Napraviti web stranicu koja sadrži definicije promeljnivih tipa: int, string, float, bool i array. Vrednosti promenljivih ispisati različitim bojama.


    Definisati funkciju koja prima dva parametra, prvi je tipa string i sadrži engleski naziv boje (red, blue ili green) a drugi parametar je niz sa brojevima. Funkcija treba da izračuna sumu tih brojeva i da je ispiše u boji koja je prosleđena preko prvog parametra. 


    Definiciju funkcije staviti u poseban fajl (functions.php) koji je potrebno uključiti u ovaj glavni fajl.
    */


    $int = 1234;
    $string = "string";
    $float = 1234.1234;
    $bool = true;


    
    $boja = "red";
    $array = array("Volvo","BMW","Toyota");

    $brojevi = array("1","3","5");
    
    include("funkcije.php");

?>
<main role="main" class="container">
  <div class="jumbotron">
    <h1>Stampanje varijabli</h1>
    <p class="int">Integer: <?php echo $int?></p>
    <p class="string">String: <?php echo $string?></p>
    <p class="float">Float: <?php echo $float?></p>
    <p class="bool">Boolean: <?php echo $bool?></p>
    <p class="array">Array: <?php echo implode( ", ", $array );?></p>
    <hr>
    <h1>Funkcije</h1>
    <?php
      suma($brojevi);
      a($boja,  $brojevi);
       najmanji($brojevi);
      najveci($brojevi);    
    ?>
  </div>
</main>


</body>
</html>
