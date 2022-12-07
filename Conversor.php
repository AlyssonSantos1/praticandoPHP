
<?php
function FahrenheittoCelsius($temp){
    return ($temp-32)*5/9;
}
function CelsiustoFahrenheit($temp){
    return ($temp*9/5)+32;
}
$opt = $_GET['opt'];
$temp = $_GET['temp'];


if ($opt == 1)
    echo "a temperatura é $temp em fahrenheit e      em graus Celsius: " .FahrenheittoCelsius($temp);
elseif ($opt == 2)
    echo " a temperatura é  $temp em Celsius e        em graus Fahrenheit: " .CelsiustoFahrenheit($temp);
else
    echo "error mediçao";
?>