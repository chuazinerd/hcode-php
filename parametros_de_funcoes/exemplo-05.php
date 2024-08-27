<?php
//$a recebe 10
$a = 10;
//Criando a função que retornará o valor da variável $a.
function trocaValor(&$a) {
//$a recebe somando com 50
//global $a; // Adcionando global, faz com que as alterações dentro da função afetem o escopo no codigo inteiro e não só apenas dentro da função.
        $a += 50;
//Return recebe 60.
        return $a;
}

//Mostrando o valor dentro da função = 60
echo trocaValor($a);
echo "<br>";
//Mostra o valor respectivo da variável sem a soma da função, porque o que é feito dentro da função fica dentro da função.
echo $a;
echo "<br>";
echo trocaValor($a);

?>