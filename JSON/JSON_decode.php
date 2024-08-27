<pre>
<?php 
//$json recebe no formato json.
$json = '[{"Nome":"Vaporeon","Elemento":"Agua","Lvl":"32"},{"Nome":"Golem","Elemento":"Pedra","Lvl":"40"}]';
//$data retorna o que tem dentro do $json,
//em formato de array.     
$data = json_decode($json, true);
//Obs.: se colocar false no lugar de true,
//ele retorna no formato de objeto.

//Mostra o retorno do $json guardado,
//na variável $data.
var_dump($data);

?>
</pre>