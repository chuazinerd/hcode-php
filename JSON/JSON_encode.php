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

echo json_encode($pkm);

?>
</pre>
