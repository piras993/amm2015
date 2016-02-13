<?php

class Controllo
{
    // attributo per un oggetto Modello
    

    public function __construct()
    {
      
    }

    public function invoke()
    {
      
       include_once("prova/homepage.php");

    }
}
      /*$comando = isset($_REQUEST["comando"])?
                 $_REQUEST["comando"] : "homepage";

      
      
      if ($comando == "homepage")
      {
         // passo il controllo alla vista "paginainziale.php"
         include_once("prova/homepage.php");
      }
      
      
      elseif ($comando == "login")
      {
          $errore ='';      
          include_once("prova/login.php");
      }elseif ($comando== "admin"){
          
          if($_POST["pass"]==NULL){
              $errore='(Inserire la password)';
              include_once("prova/login.php");
        } elseif($_POST["pass"]=='password'){
            include_once('Admin_cont.php');
            $role = new Admin_cont();  
            $role->init();
        }else {
            $errore='(Password errata)';
            include_once("prova/login.php");
        }
      }
      elseif ($comando== "utente"){
          if($_POST["pass"]==NULL){
              $errore='(Inserire la password)';
              include_once("prova/login.php");
        } elseif($_POST["pass"]=='password'){
            include_once("Utente_cont.php");
            $role = new Utente_cont();  
            $role->init();
        }else {
            $errore='(Password errata)';
            include_once("prova/login.php");
        }
      }else{
          $errore='';
          include_once ("prova/login.php");
      }
    }
    public function login(){
        echo 'ciao';
    }
}
?>*/