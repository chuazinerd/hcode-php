<pre>
<?php
/*
function ola($texto , $periodo = "bom dia") {
    return "Olá $texto $periodo </br>";
}

echo ola("");
echo ola("" , "Boa noite");
echo ola("Robson" , "Boa semana");
echo ola("Pedro" , "");
*/
//Parametros que não tem um valor padrão coloque sempre a esquerda
function ola($texto = "mundo" , $periodo = "bom dia") {
    return "Olá $texto $periodo </br>";
}

echo ola("2" , "3");
echo ola("" , "Craudinho");
echo ola("Jubileo" , "feliz aniversario");
echo ola("Matias" , "");

?>
</pre>