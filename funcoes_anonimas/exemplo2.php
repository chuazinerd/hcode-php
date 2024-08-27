<pre>
<?php

// Define um array com nomes completos
$cdfs = ["Gabriel Froez", "Vanessa Web"];

// Usa a função array_map para aplicar uma função anônima a cada elemento do array $cdfs
$firstNames = array_map(function($item) {
    // Dentro da função anônima, divide a string $item em um array usando o espaço como delimitador
    // e retorna o primeiro elemento (o primeiro nome) do array resultante
    return explode(" ", $item)[0];
}, $cdfs);

// Exibe o array resultante $firstNames no formato legível
print_r($firstNames);

?>
</pre>