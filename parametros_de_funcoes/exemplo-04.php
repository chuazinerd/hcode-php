<pre>
<?php

function ola() {

    $argumentos = func_get_args();

    return $argumentos;

}

//var_dump(ola/*Aqui -> 1 ou + args*/());
var_dump(ola( "arg1" , "arg3" , " + valor" , 10));
?>
</pre>