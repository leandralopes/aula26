<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$bd = "bdplano";

$con = mysqli_connect($servidor,$usuario,$senha,$bd);

if(!$con){
    echo "não conectou ao bd";
}