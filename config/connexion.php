<?php
require("var.php");

function connexion()
{

    // Première visite de la fonction
    static $dbc = null;

    if ($dbc == null) 
    {
        // Essaye le code ci-dessous
        try 
        {
            $dbc = new PDO("mysql:host=". HOST . '; port=3307; dbname='. DBNAME, USER, PWD, array(
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
                PDO::ATTR_PERSISTENT => true,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ));
            // Si une exception est arrivé
        } 
        catch (Exception $th) 
        {
            echo 'erreur : ' . $th->getMessage() . 'br />';
            echo 'N° '.$th->getCode();

            // Quitte le script et meurt
            die("Connexion failed");
        }
    }

    // Pas d'erreur, retourne un connecteur
    return $dbc;
}
?>