<?php 

/* echo "Revisando git"; 

///////////////////////////////////////////////////////////
//Variaveis pre definidas
$nome = $_GET["a"];

var_dump($nome);
/////////////////////////////
//Usando arrays pré definidas(arrays super globais)

$conta = (int)$_GET["a"];

var_dump($conta);

/////////////////////////////
//Pegando IP do usuario

$ip = $_SERVER["REMOTE_ADDR"];

echo $ip;

//////////////////////////////
//Pegando o nome do arquivo

$ip = $_SERVER["SCRIPT_NAME"];

echo $ip;
/////////////////////////////
//Escopo de variavies

$nome = "Tobias";//Criando variavel

function teste() {
    global $nome;//global permite que a variavel seja executada
    dentro do escopo da funcao teste()
    echo $nome;//Mostra a variavel
}

function teste2() {
    $nome = ", Jubileo";
    echo $nome . " agora no teste2";
}

teste();
teste2();



$nome = "Elidio";
function mostraNome() {
    global $nome;
   echo $nome;
}
mostraNome();

$nome = " Jose";
function mostraSNome() {
    global $nome;
    echo $nome . " ";
}

echo mostraSNome();

///////////////////////////////////////////////////////////
//Operadores compostos.
//Uso de maneira diferente.

$nome = "Programar é ";

$nome .= "Lo @--@ oL ";

echo $nome;
//////////////////////////////
//Fazendo varial acumular valores
$valor = 1500;//$valor recebeu 1500
echo $valor . "</br>";
$valor += 1500;//$valor acrescenta + 1500
echo $valor . "</br>";
$valor -= 1000;//$valor remove 1000
echo $valor . "</br>";
$valor /= 2;//$valor dividido por 2
echo $valor . "</br>";
$valor *= .5;
echo $valor . "</br>";
$valor2 = 2;
echo $valor ** $valor2;

/////////////////////////////
//Operador espace ship
$a = 50;
$b = 70;

var_dump($a <=> $b);Se $a for maior traga o valor 1.
Se $a e $b forem iguais retorna 0.
Se $b for maior que $a retorne -1

/////////////////////////////
//Operador de comparação
$a = NULL;
$b = 15;
$c = 10;
if($b == NUll) {
    $a ?? $b ?? $c; 
    echo $c ** $c;
} else {
    echo "Variavel Contem valor  $b ";
}
/*Mostre $a, mas se não existir ou for nulo, então me mostre $b e
caso o $b também seja nulo, mostre $c


/////////////////////////////
//Operadores em PHP
$a = 10; 
$a++;
echo $a;
$a--;
 echo "</br>";
echo $a;

/////////////////////////////
//Usando comparador com var_dump()
$resultado = (10 + 2) / 2 > 5 OR 10 + 5 < 3;

var_dump($resultado);
*/















?>