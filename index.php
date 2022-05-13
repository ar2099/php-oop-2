<?php
require __DIR__ . "/classi.php";
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php-oop-2</title>
</head>
<body>


 <?php
 $ShampooPeloFolto = new p_cura("shampoo per pelo folto", 45, 3, "bagno");
 
 echo "<h2>Articolo selezionato</h2>";
 echo "<p>Nome: " . $ShampooPeloFolto -> nome . ".</p>";
 echo "<p>Tipo articolo: " . $ShampooPeloFolto -> tipo . ".</p>";
 echo "<p>Prezzo a pezzo: " . $ShampooPeloFolto -> prezzo . "€.</p>";
 echo "<p>Quantità pezzi: " . $ShampooPeloFolto -> quantita . ".</p>";
 echo "<p>Giorni spedizione: " . $ShampooPeloFolto -> giorniSpedizione . " giorni.</p>";
 echo "<h3>-------------------------------------------</h3>";
 ?>
 
 
 <?php
    $miaRegistrazione = new registrazione("Andrea", "Bagigia");
    
 echo "<h2>Registrazione</h2>";
 echo "<p>Stato registrazione: " . $miaRegistrazione -> stato . ".</p>";
  echo "<p>Nome: " . $miaRegistrazione -> nome . ".</p>";
  echo "<p>Cognome: " . $miaRegistrazione -> cognome . ".</p>";
  echo "<h3>-------------------------------------------</h3>";
 ?>

 <?php
 $miaCarta = new cartaCredito("Andrea", "Bagigia", "01-06-2023");
 echo "<h2>Dati carta di credito</h2>";
 echo "<p>Nome: " . $miaCarta -> nome . ".</p>";
  echo "<p>Cognome: " . $miaCarta -> cognome . ".</p>";
  echo "<p>Numero carta: " . $miaCarta -> NumeroCarta . ".</p>";
  echo "<p>Data di scadenza: " . $miaCarta -> displayData() . ".</p>";
  echo "<p>Stato al giorno odierno: " . $miaCarta -> valida . ".</p>";
  echo "<h3>-------------------------------------------</h3>";
 ?>

 <?php
 echo "<h2>Procedura acquisto</h2>";
 if(($miaCarta -> nome) && ($miaRegistrazione -> nome) && ($miaCarta -> cognome) && ($miaRegistrazione -> cognome)){
     echo "<p>Corrispondenza nomi e cognomi di registrazione e carta: affermativa";
     $c_nomi = true; 
 } else {
     echo "<p>Corrispondenza nomi e cognomi di registrazione e carta: negativa";
      $c_nomi = false; 
 }
 if(($miaCarta -> valida == "valida")){
     echo "<p>Carta di credito: attiva";
     $c_carta = true; 
 } else {
     echo "<p>Carta di credito: scaduta";
      $c_carta = false; 
 }
 if(($c_carta == true) && ($c_nomi == true)){
     echo "<p>Requisiti sconto: superati. Sconto del 20%";
     $c_sconto = 0.8;
  
 } else {
     echo "<p>Requisiti sconto: non superati";
      $c_sconto = false;
 }
 $prezzoFinale = ($ShampooPeloFolto -> prezzo) * ($ShampooPeloFolto -> quantita) * $c_sconto;
 echo "<p>Prezzo totale: $prezzoFinale €</p>";
  echo "<h3>-------------------------------------------</h3>";
 ?>


</body>
</html>