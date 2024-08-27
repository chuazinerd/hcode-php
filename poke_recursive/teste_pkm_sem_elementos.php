<?php

$pkm = array(
    array(
        'nome' => 'Ditto',
        'elemento' => 'normal',
        'filhos' => array( // Início do primeiro filho
            array( // Início do Cyndaquil, irmão da Chikorita
                'nome' => 'cyndaquil',
                'elemento' => 'fogo',
                'filhos' => array(
                    array( // Início do BlazeJ, irmão do Cyndaquil
                        'nome' => 'BlazeJ',
                        'elemento' => 'fogo-pedra',
                    ),// Fim do BlazeJ
                    array( // Início do Burning, filho de Cyndaquil
                        'nome' => 'Burning',
                        'elemento' => 'fogo',
                    ) // Fim do Burning
                )//Fim do array de filhos do Cyndaquil
            ), // Fim do Cyndaquil  
            array( // Início da Chikorita, irmã do Cyndaquil
                'nome' => 'Chikorita',
                'elemento' => 'planta',
                'filhos' => array(
                    array( // Início da Herb, irmã da Duda
                        'nome' => 'Herb',
                        'elemento' => 'planta',
                    ), // Fim da Herb
                    array( // Início da Vegetable, irmã da Herb
                        'nome' => 'Vegetable',
                        'elemento' => 'planta',
                        'filhos' => array(
                            array (
                                'nome' => 'Butterflower',
                                'elemento' => 'planta-voador',
                            )
                        )
                    ) // Fim da Vegetable
                ) // Fim do array de filhos da Chikorita
            ) // Fim da Chikorita
        ) // Fim do primeiro filho
    )
); // Fim do Ditto

///////////////////////////////////////////////////////////

function exibePkm($monstros) {

//$lista recebe <ul>(Lista desordenada)
    $lista = '<ul>';

//foreach retornará cada item de dentro do $pkm => array()
    foreach ($monstros as $monstro) {
//$lista recebe <li>(Lista dos Itens de um elemento)
        $lista .= "<li>";

        $lista .= $monstro['nome'] . ':' . ' tipo: ';
        $lista .= $monstro['elemento'];
//verifica se a chave filhos foi definida e se dentro do filhos existe mais de 0 itens
//Obr.: count conta quantos elementos tem dentro de uma chave de array
        if (isset($monstro['filhos']) && count($monstro['filhos']) > 0) {
            //Retorna cada filho de dentro do $pkm array
            $lista .= exibePkm($monstro['filhos']);
        
        }
        
        $lista .= "</li>";

    }

    $lista .= "</ul>";

    return $lista;

}

echo exibePkm($pkm);  

?>