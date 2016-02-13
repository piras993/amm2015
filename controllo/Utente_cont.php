<?php



class Utente_cont
{
    public function __construct(){
    }

    public function init()
    {
     include_once("../provadatabase/Model.php");
            $modello = new Model();  
            $result = $modello->mostra_autori();
            include_once("../prova/utente.php");

            
    }
}

?>