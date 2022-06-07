<?php 

/* 
  ## Snack 7
  Creare un array contenente qualche alunno di un’ipotetica classe. 
  Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
  Stampare Nome, Cognome e la media dei voti di ogni alunno.
*/

$classe61 = [
  [
    'nome' => 'Sebastiano',
    'cognome' => 'Visco',
    'voti' => [4,8,5,10]
  ],

  [
    'nome' => 'Agostino',
    'cognome' => 'Pique',
    'voti' => [6,9,7,10]
  ],

  [
    'nome' => 'Silvia',
    'cognome' => 'Dugato',
    'voti' => [3,7,5,10]
  ],

  [
    'nome' => 'Manuel',
    'cognome' => 'Benini',
    'voti' => [6,8,5,10]
  ],
];

// var_dump($classe61);

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 7</title>
</head>
<body>

  <header>
    <h1>SNACK 7</h1>
  </header>

  <main>
    

      <?php 
        for ($i = 0; $i < count($classe61); $i++) {
            echo "<h3>Alunno: </h3>";
            echo "{$classe61[$i]['nome']}";
            echo "{$classe61[$i]['cognome']}";
            
            echo "<h3>Media Voti: </h3>";
            $media_voti = array_sum($classe61[$i]['voti']) / count($classe61[$i]['voti']);
            echo "{$media_voti}";
            echo "<hr>";
        }
      ?>
    
  </main>

  <h1></h1>
  
</body>
</html>