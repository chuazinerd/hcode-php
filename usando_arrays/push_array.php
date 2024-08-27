<pre>
<?php

$pkm = array();

array_push($pkm, array(

    'Nome' => 'Vaporeon',
    'Elemento' => 'Agua',
    'Lvl' => '32'

));

array_push($pkm, array(

    'Nome' => 'Golem',
    'Elemento' => 'Pedra',
    'Lvl' => '40'

));

//print_r($pkm);
//echo "<br>";
print_r($pkm[0]['Elemento']);
echo "</br>";
print_r($pkm[1]['Elemento']);

?>
</pre>
