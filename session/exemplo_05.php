<?php

require_once "config.php";

//Mostra o caminho da session_id.
echo session_save_path(); echo "</br>";

var_dump(session_status()); echo "</br>";

switch(session_status()) {
    case PHP_SESSION_DISABLED:
    echo "Se as sessões estiverem desabilitadas";
    break;
    case PHP_SESSION_NONE:
    echo "Se as sessoões estivere habilitadas, mas nenhuma existir";
    break;
    case PHP_SESSION_ACTIVE:
    echo "Se as sessões estiverem habilitadas, e uma exisitir";
}


?>