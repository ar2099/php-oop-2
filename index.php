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

class prodotto {
    public $nome;
    public $prezzo;
    public $quantita;

    use spedizione;

    public function setNome($_nome){
        $this-> nome = $_nome;
    }
    public function getNome(){
        return $this-> nome;
    }
    public function setPrezzo($_prezzo){
        
        if((is_numeric($_prezzo) == true) && ($_prezzo > 0)){
            $this-> prezzo = $_prezzo;
        } else {
            throw new Exception('Non è un numero oppure è negativo o guale a 0');
        }
    }
    public function getPrezzo(){
        
        return $this-> prezzo;
    }
    public function setQuantita($_quantita){
        
        if((is_numeric($_quantita) == true) && ($_quantita > 0)){
            $this-> quantita = $_quantita;
        } else {
            throw new Exception('Non è un numero oppure è negativo o guale a 0');
        }
    }
    public function getQuantita(){
        
        return $this-> quantita;
    }

    public function __construct($_nome, $_prezzo, $_quantita){
        $this-> setNome($_nome);
        $this-> setPrezzo($_prezzo);
        $this-> setQuantita($_quantita);
    }
}
trait spedizione{
    public $giorniSpedizione;
    public function setSpedizione(){
        $this-> giorniSpedizione = rand(1, 3);
    }
    public function getSpedizione(){
        $this-> giorniSpedizione;
    }
}

class p_casa extends prodotto {
    use spedizione;
    public function __construct($_nome, $_prezzo, $_quantita){
        parent::__construct($_nome, $_prezzo, $_quantita);
       $this-> setSpedizione();
    }
}

class p_cura extends prodotto {
    use spedizione;
    public $tipo;
    public function setTipo($_tipo){
        if(($_tipo == "medicina") || ($_tipo == "bagno"))
        {$this-> tipo = $_tipo;}else {
        throw new Exception('tipo deve essere uguale o a medicina o a bagno');
    }
    } 
    public function getSpedizione(){
        $this-> tipo;
    }
    public function __construct($_nome, $_prezzo, $_quantita, $_tipo){
        parent::__construct($_nome, $_prezzo, $_quantita);
       $this-> setSpedizione();
       $this-> setTipo($_tipo);
    }

    trait datiPersonali{
    public $nome;
    public $cognome;
    public $dataNascita
    public function setSpedizione(){
        $this-> giorniSpedizione = rand(1, 3);
    }
    public function getSpedizione(){
        $this-> giorniSpedizione;
    }
}
}



$pippo =  new p_cura("pippo", 45, 67, "bagno");
var_dump($pippo);
?>






















</body>
</html>