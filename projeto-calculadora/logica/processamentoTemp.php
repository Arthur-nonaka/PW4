<?php
require_once "funcoesCalculo.php";

$result = "";
session_start();

if(isset($_POST['temp'])){
    $temp = $_POST['temp'];
    switch($_POST['selection']){
        case "celcius":
            $result = $temp ." -> " . ConvertToFahrenheit($temp);
            break;
            case "fahrenheit":
            $result = $temp ." -> " . ConvertToCelcius($temp);
            break;

    }

}

$_SESSION["resultado"] = $result;
header('location:../temperatura.php');
die();
