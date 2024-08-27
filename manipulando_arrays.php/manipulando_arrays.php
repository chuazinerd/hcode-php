<?php
/*
///////////////////////////////////////////////////////////
//Uso de Strings 
$formato = "bola basquete";
$formato2 = 'bola de futebol';

//var_dump($formato, $formato2);
echo "Bola vazia $formato $formato2";//Aspas duplas verifica o que tem dentro
//antes de mostrar.
echo "</br>";
echo 'Bola vazia $formato $formato2';//Aspas simples retorna tudo como texto

/////////////////////////////
//Upcase com PHP
$nome = "felipe figueiredo";
echo strtoupper($nome) . "</br>";//Caixa alta
echo strtolower($nome) . "</br>";//Caixa baixa
echo ucwords($nome) . "</br>";//Caixa alta para a primeira letra de cada palavra
echo ucfirst($nome);//Caixa alta apenas na primeira letra da primeira palavra

/////////////////////////////
//Trocando valores de dentro de uma string

$alunos = array("Edson", "Shirley", "Maite");
$cursos = ["PHP", "MySQL", "HTML", "CSS"];
$ficha = [10, "Edson Maia", 39, 1.76, true];
$bebidas = [
    "sucos" => ["Acerola", "Cupuacu"],
    "refri" => ["Pepsi", "Coca Cola"],
    "cafes" => ["Expresso", "Cappuccino"]
];

$categorias = [];
$categorias[0] = "Programacao";
$categorias[1] = "Design";

echo "<pre>";
    print_r($alunos);
    echo "<hr>";
    print_r($cursos);
    echo "<hr>";
    print_r($ficha);
    echo "<hr>";
    print_r($bebidas);
echo "</pre>";    

$trocaNome = "A B C D E";
$trocaNome = str_replace("E", "ED", $trocaNome);
$trocaNome = str_replace("D", "DC", $trocaNome);
$trocaNome = str_replace("C", "CB", $trocaNome);
$trocaNome = str_replace("B", "BA", $trocaNome);
$trocaNome = str_replace("A", "A1", $trocaNome);

echo $trocaNome . "</br>";


$trocafilho = "DRACULA";
$trocafilho = str_replace("D", "", $trocafilho);
$trocafilho = str_replace("R", "", $trocafilho);
$trocafilho = str_replace("A", "D", $trocafilho);
$trocafilho = str_replace("C", `A`, $trocafilho);
$trocafilho = str_replace("U", "R", $trocafilho);
$trocafilho = str_replace("L", "A", $trocafilho);
$trocafilho = str_replace("A", "D", $trocafilho);
//ALUCARD
echo $trocafilho;

echo "</br>" . "Teste";

//Serve para encontra a primeira posição de um caractere específico
//em uma string. É possível usar, nessa função,
//toda uma string como parâmetro, e não apenas uma
//única posição.
$frase = "A repetição é a mãe da retenção.";
$q = strpos($frase, "mãe");
//$q = strpo($frase, "mãe"); retornará
//"A repetição é a mãe"  com int(19)
var_dump($q);

$texto = "Nem tudo é o que parece";
$engano = strpos($texto, "parece");
var_dump($engano); 

/////////////////////////////

// A string original
$originalString = "Ola, mundo!";

// Letra que você deseja substituir
$letraAntiga = "O";
$letraAntiga2 = "a";

// Letra pela qual você deseja substituir
$letraNova = "L";
$letraNova2 = "4";

// preg_replace(): Permite usar expressões regulares para fazer substituições.
// O parâmetro 1 no final da função indica que apenas a primeira ocorrência deve ser substituída.
$stringModificada = preg_replace('/'.preg_quote($letraAntiga, '/').'/', $letraNova, $originalString, 1);
$stringModificada = preg_replace('/'.preg_quote($letraAntiga2, '/').'/', $letraNova2, $originalString, 1);
// Exibindo a string modificada
echo $stringModificada; // Saída... Ol4, mundo!
Obs: Descobrir depois como trocar duas letras em uma String apontando qual ocorrencia deseja modificar.


/////////////////////////////
$lugar = "Japao é vida";

$letraAntiga = "a";
$letraOcorrenciaN4 = "o";

$letraNova = "L";
$novaLetraOcorrenciaN4 = "3";

$lugar = preg_replace('/'.preg_quote($letraAntiga, '/').'/', $letraNova, $lugar, 1);
$lugar = str_replace("J" , "6", $lugar);
$lugar = preg_replace('/'.preg_quote($letraOcorrenciaN4, '/').'/', $novaLetraOcorrenciaN4, $lugar, 1);

var_dump($lugar);

//        ///2
$frase = "A repetição é mãe da retenção";
$q = strpos($frase, "r");
var_dump($q);
echo "</br>";
//////////012...///////////////...28
//Obs.: os caracteres especiais andam duas casas e caracteres uma casa.
$frase = "O repetição é mãe da retxnção";
$q = strpos($frase, "x");
var_dump($q);
echo "</br>";


//$frase recebe String "A... retenção"
$frase = "A repetição é a mãe da retenção";
//$palavra recebe mãe
$palavra = "mãe";
//$q por meio da função strpos recebe toda a frase e "mãe"
$q = strpos($frase, $palavra);
//$text por meio da função substr recebe toda a frase,
//recebe 3 que serve para começar do terceiro caractere,
//e recebe também $q e o retorno de sua função
$texto = substr($frase, 0, $q);
//Var_dump irá mostrar o que tem dentro de texto.
var_dump($texto);

$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));
echo "</br>";
var_dump($texto2);
*/





















?>