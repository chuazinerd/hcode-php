<?php

// Define uma função chamada 'test' que aceita um parâmetro '$callback'
function test($callback) {
    // Executa o parâmetro '$callback', que é uma função
    $callback();
}

// Chama a função 'test' e passa uma função anônima (closure) como argumento
test(function(){
    // Dentro da função anônima, imprime a string "terminou" na tela
    echo "terminou";
});

?>