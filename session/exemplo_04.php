<pre>> 
<?php
//Para recuperar a session_id
session_id('bvmmc6ee5di0soa4k01hvs7e7uarray');

//Chama o arquivo config.php.
require_once "config.php";

//Gera novamente a session_id da sessão.
session_regenerate_id();
//Mostra o session_id que foi gerado.
echo session_id();

//Para visualizar todo o array super global da sessão.
var_dump($_SESSION);


?>
</pre