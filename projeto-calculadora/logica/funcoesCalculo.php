<?php
function soma($num1, $num2){
    return ($num1 + $num2);
}
function subtracao($num1, $num2){
    return ($num1 - $num2);
}
function multiplicacao($num1, $num2){
    return ($num1 * $num2);
}
function divisao($num1, $num2){
    return ($num1 / $num2);
}
function ConvertToFahrenheit($temp) {
    return (($temp * 1.8) + 32);
}
function ConvertToCelcius($temp) {
    return (($temp - 32) / 1.8);
}
function cmToMeters($comprimento) {
    return ($comprimento/100);
}
function metersToCm($comprimento) {
    return ($comprimento * 100);
}
function metersToKm($comprimento) {
    return ($comprimento / 1000);
}
function KmToMeters($comprimento) {
    return ($comprimento * 1000);
}