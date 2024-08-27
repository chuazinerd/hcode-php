<?php
/*
$fn = function($a) { var_dump($a); };

$fn("teste");
*/

// Define uma função anônima com arrow function que aceita um parâmetro e usa var_dump para exibi-lo
$fn = fn($a) => var_dump($a);

// Chama a função anônima com o argumento 'teste'
$fn('teste');


?>