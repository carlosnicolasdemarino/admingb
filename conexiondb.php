<?php

function conexion_db(){

    $hostname="localhost";
	#$username="root";
	#$password="";
	$username="u666073011_gaston";
	$password="ns2b7bfqbf";
	$database="u666073011_gestion";

    $mysqli = new mysqli($hostname, $username,$password, $database);

    return $mysqli;

}


?>