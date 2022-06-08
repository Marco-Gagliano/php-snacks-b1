<?php 

/* 
  ## Snack 1
  Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
  Olimpia Milano - Cantù | 55-60
*/

$incontri = [
  [
    'squadraCasa' => 'Slipknot',
    'squadraOspite' => 'Korn',
    'puntiCasa' => '180',
    'puntiOspite' => '176',
  ],
  
  [
    'squadraCasa' => 'Limp Bizkit',
    'squadraOspite' => 'Linkin Park',
    'puntiCasa' => '90',
    'puntiOspite' => '115',
  ],

  [
    'squadraCasa' => 'Architects',
    'squadraOspite' => 'Parkway Drive',
    'puntiCasa' => '86',
    'puntiOspite' => '71',
  ],

  [
    'squadraCasa' => 'Rammstein',
    'squadraOspite' => 'Spiritbox',
    'puntiCasa' => '160',
    'puntiOspite' => '80',
  ],

  [
    'squadraCasa' => 'Blood Youth',
    'squadraOspite' => 'Machine Head',
    'puntiCasa' => '94',
    'puntiOspite' => '98',
  ],
];

// var_dump($incontri);

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 1</title>
</head>
<body>
  <h1>Snack 1</h1>
  
  <ul>
    <?php for($i = 0; $i < count($incontri); $i++): ?>
      <!-- il codice HTML verrà ciclato -->
      <li>
        <?php echo $incontri[$i]['squadraCasa'] ?> -
        <?php echo $incontri[$i]['squadraOspite'] ?> |
        <?php echo $incontri[$i]['puntiCasa'] ?> -
        <?php echo $incontri[$i]['puntiOspite'] ?> 
      </li>
    <?php endfor; ?>
  </ul>

</body>
</html>