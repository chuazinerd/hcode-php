<?php
$pkm = array(//Inicio: do Ditto
    'nome' => 'Ditto',
    'elemento' => 'normal',
    'filhos' => array(//Inicio do primeiro filho
        array(//inicio do Cyndaquil irmão da Chikorita
            'nome' => 'cyndaquil',
            'elemento' => 'fogo',
            'filhos' => array(
                array(//Inicio do BlazeJ irmão do Cyndaquil 
                    'nome' => 'BlazeJ',
                    'elemento' => 'pedra'
                ),//Fim do BlazeJ
                array (//Inicio do Burning filho de Cyndaquil
                    'nome' => 'Burning',
                    'elemento' => 'fogo'
                )//Fim do Burning
            )//Fim: array 4
                //Inicio do array burning irmão do BlazeJ
        ), //Fim do Cyndaquil
        array (//Inicio da Chikorita irmã do Cyndaquil
            'nome' => 'Chikorita',
            'elemento' => 'planta',
            'filhos' => array(
                array(//Inicio da Herb irmã da Duda
                    'nome' => 'Herb',
                    'elemento' => 'planta'
                ),//Fim da Herb
                array (//Inicio da Duda irmã da Herb
                    'nome' => 'Duda',
                    'elemento' => 'Vegetable'  
                )//Fim da Duda
            )//Fim do filhos
        )//Fim da Chikorita
    )//fim do primeiro filho
);//fim do Ditto

function exibe($monstros) {


    $html = '<ul>';

    foreach ($monstros as $monstro) {
 
        $html .= "<li>";

        $html .= $monstro['nome'];

        if (isset($monstro['filhos']) && count($monstro['filhos']) > 0) {
            $html .= exibe($monstro['filhos']);
        }

        $html .= "</li>";

    }

    $html .= "</ul>";

    return $html;

}

echo exibe($pkm);


?>
