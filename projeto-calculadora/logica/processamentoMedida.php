<?php
require_once "funcoesCalculo.php";

$result = "";
session_start();

if(isset($_GET['medida'])){
    $medida = $_GET['medida'];
    switch($_GET['selection']){
        case "cm":
            $result = $medida ." -> " . cmToMeters($medida);
            break;
        case "meters":
            $result = $medida ." -> " . metersToCm($medida);
            break;
        case "metersToKm":
            $result = $medida ." -> " . metersToKm($medida);
            break;
        case "km":
            $result = $medida ." -> " . KmToMeters($medida);
            break;

    }

}

$_SESSION["resultado"] = $result;
header('location:../medida.php');
die();
