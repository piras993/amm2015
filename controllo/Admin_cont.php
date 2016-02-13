<?php


class Admin_cont{
    
    
    public function init()
    {
        include_once ('prova/admin.php');
    }
    public function scelta_inserimento($insert){
        switch ($insert){
            case '1':    
                include_once("../provadatabase/Model.php");
                $modello = new Model();  
                $result = $modello->mostra_autori();
                include_once ('../prova/brani.php');
                break;
            case '0':    
                include_once ('../prova/autori.php');
                break;
            default :
                
                include_once ('../prova/admin.php');
            }
            
        }
        
    
    
    
}

?>