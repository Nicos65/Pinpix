<?php
 //On se connecte à la BDD
    $bdd = new PDO("mysql:host=localhost;dbname=pinpix", "root","",array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
?>