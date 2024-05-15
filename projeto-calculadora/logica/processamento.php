<?php
require_once "funcoesCalculo.php";

$result = "";
session_start();

if(isset($_POST['inputNum1']) && isset($_POST['inputNum2'])){
    $num1 = $_POST['inputNum1'];
    $num2 = $_POST['inputNum2'];
    switch($_POST['selectOperacoes']){
        case "adicao":
            $result = $num1 ." + ". $num2 . " = " . soma($num1,$num2);
            break;
        case "subtracao":
            $result = $num1 ." - ". $num2 . " = " . subtracao($num1,$num2);
            break;
        case "multiplicacao":
            $result = $num1 ." * ". $num2 . " = " . multiplicacao($num1,$num2);
            break;
        case "divisao":
            $result = $num1 ." / ". $num2 . " = " . divisao($num1,$num2);
            break;

    }

}

$_SESSION["resultado"] = $result;
header('location:../index.php');
die();
