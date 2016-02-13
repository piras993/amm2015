<?php
$autore=$_POST['autore'];
include_once('../provadatabase/Model.php');
$modello = new Model();
$tran = $modello->cerca_id($autore);
$id=$tran['id'];
$titolo=$_POST['titolo'];
$modello1= new Model();
$end=$modello1->insert_brano($titolo, $autore, $id);
include_once ("../prova/admin_ok.php");

?>