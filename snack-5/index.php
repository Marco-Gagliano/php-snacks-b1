<?php 

/* 
  ## Snack 5
  Prendere un paragrafo abbastanza lungo, contenente diverse frasi. 
  Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.
*/

$paragrafo = 'Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.';

$paragrafo_diviso = explode("." , $paragrafo);

var_dump($paragrafo_diviso)

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 5</title>
</head>
<body>
  <header>
    <h1>Snack 5</h1>
  </header>
  
  <main>
    <h2>Paragrafo lungo:</h2>
    <p><?php echo $paragrafo ?></p>

    <h2>Paragrafi divisi: </h2>
    <?php 
      // Il ciclo "foreach" scorre un blocco di codice per ogni elemento in un array (funziona solo su array).
      foreach($paragrafo_diviso as $value){
        echo "<p>{$value}<p>";
      }
    ?>

  </main>
</body>
</html>