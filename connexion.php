<?php

$dbHost="";
$dbName="";
$dbUser="";
$dbPassword="";

$strConnex = "host=$dbHost dbname=$dbName user=$dbUser password=$dbPassword";

        $cnx = pg_connect($strConnex);
        if(!$cnx){
            echo " Erreur de connexion à votre base de donnée!<br>";
        }else{
            echo "";
        }

?>
