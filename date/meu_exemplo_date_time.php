<?php
//Criando o objeto $dt apartir da classe DateTime
$dtime = new DateTime();

//Criando o objeto $tempo apartir da classe DateInterval com o arqumento "P20D" que representa um intervalo de 15 dias.
$tempo = new DateInterval("P20D");

//Mostra o objeto $dtime que acessa format e configura os valores em dia, mês, anos e horas
echo $dtime->format("d/m/Y  H:i:s") . "<br>";
echo "<br>";
//Objeto $dtime acessa o metodo add() e acrescenta 15 dias da variável $tempo
$dtime->add($tempo);

echo "<br>";
//Mostra formatando o objeto $dtime  
echo $dtime->format("d/m/Y  H:i:s")



?>