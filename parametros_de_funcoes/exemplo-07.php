<?php

function soma(int ...$valores) {
    return array_sum($valores);
}

echo soma(2,3);
echo "<br>";
echo soma(1.5, 1.5, 1.5, 1.9);

?>