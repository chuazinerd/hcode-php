<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
    <?php
    //d/m/Y para mostrar a data 
    //Obs.: y minusculo retorna os ultimos dois digitos do ano
    //Y maiusculo retorna o valor inteiro
    //"H:i:s" para mostrar a hora
    //O "H" em letra maiscula(case/caixa alta) mostra em 24 hrs
    //O "h" em letra minuscula(case/caixa baixa) mostra em 12 hrs
    //Todas as funções em date podem ser acessadas em: https://www.php.net/manual/en/function.date.php
    echo date("d/m/Y H:i:s");//Usando o retorno do valor da função time() é possível travar a hora.
    
    echo "<br>";

    echo time() . " Quantidade de segundos desde 01/01/1970";

    echo "</br>";

    $timeStamp = strtotime("now");
    echo date("l, d/m/y", $timeStamp);
    ?>
</body>
</html>

