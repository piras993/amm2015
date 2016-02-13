<?php

include ('Admin_cont.php');
$insert=$_POST['insert'];
$prova= new Admin_cont();
$prova->scelta_inserimento($insert);


?>