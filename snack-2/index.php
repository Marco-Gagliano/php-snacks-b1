<?php 

/* 
  ## Snack 2
  Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) 
  che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. 
  Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
*/

$autorizzazione_accesso = true;


// verifico l'esistenza dei parametri necessari in $_GET
if(empty($_GET['name']) || empty($_GET['mail']) || empty($_GET['age'])){
  $autorizzazione_accesso = false;

}elseif(strlen($_GET['name']) < 3 ){  
  // verifico la lunghezza di name
  $autorizzazione_accesso = false;

}elseif(!strpos($_GET['mail'], '@') || !strpos($_GET['mail'], '.')){
  // verifico se sono presenti @ e .
  $autorizzazione_accesso = false;

}elseif(!is_numeric($_GET['age'])){
  // verifico che age sia un numero
  $autorizzazione_accesso = false;
}


if($autorizzazione_accesso ){
  $login = 'Accesso riuscito';
}else{
  $login = 'Accesso negato';
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 2</title>
</head>
<body>
  <header>
    <h1>Snack 2</h1>
  </header>

  <main>
    <h3> <?php echo $login ?> </h3>
  </main>
  
</body>
</html>