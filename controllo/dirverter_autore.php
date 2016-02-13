<?php

$nome = $_POST['nome'];
include_once('../provadatabase/Model.php');
$modello = new Model();
$modello->insert_autore($nome);
include_once ("../prova/admin_ok.php");
?>