<pre>
<?php
/*
$pessoa = array(
    'nome' => 'felipe',
    'idade' => 36,
    'hobby' => 'jogar'
);

foreach ($pessoa as $value) {
    echo $value . '<br>';
}

echo "<br>";

$pessoa1 = array(
    'nome' => "francine",
    'idade' => 38,
    'hobby' => 'andar de moto'
);

echo "<br>";

foreach ($pessoa1 as $value) {
    echo $value . '<br>';
}


$pessoa2 = array(
    'nome' => 'Lucas',
    'idade' => 30,
    'hobby' => 'turismo'
);

echo "<br>";

foreach ($pessoa2 as $value) {
    echo $value . "<br>";
}

echo "<br>";


*/

$pessoaN = array(

    'nome' => 'joao',
    'idade' => 20,
    'hobby' => 'musculação'

);



foreach ($pessoaN as $value) {
    
    if (gettype($value) === 'integer') $value += 10;

    echo $value . "<br>";

}

print_r($pessoaN);


echo "<br>";


$pessoaJ = array(

    'nome' => 'Julia',
    'idade' => 15

);
//////////////////com o &antes de $value &$value é possível fazer o valor 15 ser somado fora da função.
foreach ($pessoaJ as &$value) {
    if (gettype($value) === 'integer') $value += 15;
    echo $value . '<br>';
}

print_r($pessoaJ);










?>
</pre>