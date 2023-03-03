<?php

session_start();

//Variables
$description = "None";
$keywords = "None";
$title = "Tableau de bord du panneau administrateur";

//Files
include('../Database/connexion.php');
include('./Conf/Template/head-html.php');
include('./Conf/Template/navbar.php')
?>




<?php

include('./Conf/Template/end-html.php');
?>