<!-- Oggi pomeriggio provate ad immaginare quali sono le classi 
necessarie per creare uno shop online con le seguenti caratteristiche.
L'e-commerce vende prodotti per gli animali.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
L'utente potrà sia comprare i prodotti senza registrarsi,
 oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
Il pagamento avviene con la carta di credito, che non deve essere scaduta.
BONUS:
Alcuni prodotti (es. antipulci) avranno la caratteristica 
che saranno disponibili solo in un periodo particolare (es. da maggio ad agosto). -->




<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>oop 2</title>
</head>
<body>

<?php

class prodotti_animali {
    public  $prezzo;
    public  $codice;


    public function setPrezzo($_prezzo){
      $this-> prezzo = $_prezzo;
       return $this-> prezzo;
    }
    public function getPrezzo(){
      return $this-> prezzo;
    }
     public function setCodice($_codice){
      $this-> codice = $_codice;
      return $this-> codice;
    }
    public function getCodice(){
     return $this-> codice;
    }

    public function __construct($_prezzo, $_codice){
        $this-> setPrezzo($_prezzo);
        $this-> setCodice($_codice);
    }
};


?>






















</body>
</html>