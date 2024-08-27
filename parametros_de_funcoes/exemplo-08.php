<?php
/*
function soma(float ...$valores):float {
    return array_sum($valores);
}

echo var_dump(soma(2,2));
//Resultado int(4)
echo "<br>";
echo soma(2 , 1.5 , 1.6, 1.5);
//Resultado 6.6


echo "<br>";

*/

function somaDenovo(float ...$valores) {
    return array_sum($valores);
}

echo somaDenovo(1.5, 1.8);


?>