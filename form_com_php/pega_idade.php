    <h1> Preencha seus dados: </h1>
<form>
    
    <p>Digite seu nome: <input type="text" name="nome"></p>
    <p>Digite sua idade: <input type="date" name="Nascimento"> <input type="submit" value="ok"></p>
  
</form>

<?php 

if (isset($_GET)) {//O PHP Isset é um função nativa do PHP,
//que serve para saber se uma variável está definida.

    foreach ($_GET as $key => $value) {

        echo  $value;

        echo "<br>";
        
    }
}


?>