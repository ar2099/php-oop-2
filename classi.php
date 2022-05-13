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

    
}

trait datiPersonali{
    public $nome;
    public $cognome;
    
    public function setNome($_nome){
        $this-> nome = $_nome;
    }
    public function getNome(){
        return $this-> nome;
    }
    public function setCognome($_cognome){
        $this-> cognome = $_cognome;
    }
    public function getCognome(){
        return $this-> cognome;
    }
}

class registrazione {
    use datiPersonali;
    public $stato;
    public function setStato($_nome, $_cognome){
        if(($_nome != "") && ($_cognome != "") && (strlen($_nome) > 3) && (strlen($_cognome) > 3)){
          $this -> stato = "registrazione effettuata";
        } else {
            $this -> stato = "registrazione non eseguita o sbagliata";
            //  throw new Exception('nome o cognome incompleto o troppo corto per essere vero'); 
        }
    }
    public function getStato(){
        return $this -> stato;
    }

    public function __construct($_nome, $_cognome){
        $this -> setNome($_nome);
        $this -> setCognome($_cognome);
        $this -> setStato($_nome, $_cognome);

    }
}

class cartaCredito{
    use datiPersonali;
    public $dataScadenza;
    public $valida;
    public $NumeroCarta;

    public function setData($_data){
     $this -> dataScadenza = new DateTime($_data);
    }
    public function getData(){
     return   $this -> dataScadenza;
    }
    
    public function displayData(){
     return $this -> dataScadenza ->format('l j F Y');
    }
    public function setValida($_data){
        $_grandezza = new DateTime($_data) ;
      $grandezza = $_grandezza ->format('U');
      $oggi = strtotime("now");
        if($grandezza >= $oggi){
            $this -> valida = "valida";
        } else {
            $this -> valida = "non valida";
        }
    }
    public function getValida(){
     return   $this -> dataScadenza;
    }

    public function setOggi($_data){
        $_Oggi = new DateTime($_data) ;
      $this -> Oggi = $_Oggi ->format('U');
    }
    public function getOggi(){
     return   $this -> dataScadenza;
    }
    public function setNumeroCarta(){
      $this -> NumeroCarta = rand(1, 1000000000) + 3000000000;
    }
    public function getNumeroCarta(){
        return $this -> NumeroCarta;
    }

    public function __construct($_nome, $_cognome, $_data){
        $this -> setNome($_nome);
        $this -> setCognome($_cognome);
        $this -> setData($_data);
        $this -> setValida($_data);
        $this -> setNumeroCarta();
    }
}


?>

