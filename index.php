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
class p_animali {
    public $iscrizione;
    public $cartaCredito;
    public $prezzo;

    function __construct($_prezzo, $_cartaCredito, $_iscrizione) {
    $this -> setCredito($_cartaCredito);
    $this -> setIscrizione($_iscrizione);
    $this -> setPrezzo($cartaCredito, $iscrizione, $_prezzo );
    }



    public function setCredito($_cartaCredito){
        if(($_cartaCredito =! "no") && (date($_cartaCredito) >= date(DATE_RFC2822))){
           return $this -> cartaCredito = "valida"; 
        } elseif(($_cartaCredito =! "no") && (date($_cartaCredito) < date(DATE_RFC2822))){
            return $this -> cartaCredito = "scaduta";
        } else {
            return $this -> cartaCredito = "valore non valido o assente";
        }
    }

    public function setIscrizione($_iscrizione){
        if(($_iscrizione == "si") || ($_iscrizione == true)){
           return $this -> iscrizione = "iscritto"; 
        } else {
            return $this -> iscrizione = "non iscritto";
        }
    }

    public function setPrezzo($cartaCredito, $iscrizione, $_prezzo ){
        if(($cartaCredito == "valida") && ($iscrizione == "iscritto") && (is_numeric($_prezzo) == true)){
           return $this -> prezzo = $_prezzo*0.8;
        } elseif((is_numeric($_prezzo) == true) && (($cartaCredito != "valida") || ($iscrizione != "iscritto"))){
             return $this -> prezzo = $_prezzo;
        } else {
            return $this -> prezzo = "valore del prezzo inserito non valido";
        }
    }
    
    public function getPrezzo(){
        return $this -> prezzo;
    }
    public function getCartaCredito(){
        return $this -> cartaCredito;
    }
    public function getIscrizione(){
        return $this -> iscrizione;
    }
}



class casa extends p_animali{
   public $nome; 
   public $tipo;

   public function setNome($_nome){
   return $this -> nome = $_nome;
   }
   public function setTipo(){
   return $this -> tipo = "casa";
   }
   public function getNome(){
   return $this -> nome;
   }
   public function getTipo(){
   return $this -> tipo;
   }
   function __construct($_nome, $_prezzo, $_cartaCredito, $_iscrizione) {
    $this -> setNome($_nome);
    $this -> setTipo();
    parent::__construct($_prezzo, $_cartaCredito, $_iscrizione);
    }
};

class cibo extends p_animali{
   public $nome; 
   public $tipo;

   public function setNome($_nome){
   return $this -> nome = $_nome;
   }
   public function setTipo(){
   return $this -> tipo = "cibo";
   }
   public function getNome(){
   return $this -> nome;
   }
   public function getTipo(){
   return $this -> tipo;
   }
   function __construct($_nome, $_prezzo, $_cartaCredito, $_iscrizione) {
    $this -> setNome($_nome);
    $this -> setTipo();
    parent::__construct($_prezzo, $_cartaCredito, $_iscrizione);
    }
}

class cura extends p_animali{
   public $nome; 
   public $tipo;

   public function setNome($_nome){
   return $this -> nome = $_nome;
   }
   public function setTipo(){
   return $this -> tipo = "cura";
   }
   public function getNome(){
   return $this -> nome;
   }
   public function getTipo(){
   return $this -> tipo;
   }
   function __construct($_nome, $_prezzo, $_cartaCredito, $_iscrizione) {
    $this -> setNome($_nome);
    $this -> setTipo();
    parent::__construct($_prezzo, $_cartaCredito, $_iscrizione);
    }
}

class cucce extends casa{
   public $peso;
   public $costoSpedizione;
   public $prezzoTotale;

    function __construct($_nome, $_prezzo, $_cartaCredito, $_iscrizione, $_peso) {
    parent::__construct($_nome, $_prezzo, $_cartaCredito, $_iscrizione);
    $this -> setPeso($_peso);
    $this -> setCostoSpedizione($_peso);
    $this -> setPrezzoTotale($prezzo, $costoSpedizione);
    }
   public function setPeso($_peso){
       return $this -> peso = $_peso;
   }
   public function setCostoSpedizione($_peso){
       if( ($_peso > 0) && ($_peso < 10)){
           return $this -> costoSpedizione = 10;
       } elseif((10 <= $_peso) && ($_peso < 25)){
           return $this -> costoSpedizione = 20;
       } else {
           return $this -> costoSpedizione = 30;
       }
   }
   public function setPrezzoTotale($prezzo, $costoSpedizione){
    return $this -> prezzoTotale = $prezzo + $costoSpedizione;
   }

  public function getPeso(){
       return $this -> peso;
  }

  public function getCostoSpedizione(){
       return $this -> costoSpedizione;
  }

  public function getPrezzoTotale(){
       return $this -> prezzoTotale;
  }

   
}
$pippo = new cucce("pippo", 50, DATE_RFC2822, "si", 10);
var_dump($pippo);
?>






















</body>
</html>