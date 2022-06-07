<?php 

/* 
  ## Snack 4
  Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
*/

$arrayNumeri = [];
$nItem = 15;

// creo un ciclo while con "count" che conta tutti gli elementi nell'array "arrayNumeri",
// fino a che non minore/uguale di "nItem"
while (count($arrayNumeri) <= $nItem) {

  // creo una variabile in cui genero dei numeri da 1 a 100
  $num = rand(1, 100);

  //creo una condizione in cui verifico se il numero non è presente nell'array; 
  if (!in_array($num, $arrayNumeri)) {

    // in caso positivo lo pusho
    $arrayNumeri[] = $num;
  }
}

var_dump($arrayNumeri)

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 4</title>
</head>
<body>


</body>
</html>