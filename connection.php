<?php

function getConnection()
{
    $servername = "cosc304.ok.ubc.ca";
    $username = "ewardle";
    $password = "38509121";
    $dbname = "db_ewardle";
    /*
    $servername = "daylog";
    $username = "dbuser";
    $password = "letmein";
    $dbname = "daylog";
     */

    $con = new mysqli($servername, $username, $password, $dbname);
    if ($con -> connect_error)
    {
        die("Connection failed: ".$con -> connect_error);
    }

            return $con;
}

?>
