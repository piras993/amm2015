<?php

$artista = $_POST['autore'];
include_once ("../provadatabase/Model.php");
$model=new Model();
$result=$model->trova_brani($artista);
include_once("../prova/brani_utente.php");


?>