<?php
//Inicio: Pai
$hierarquia = array(//Inicio: array 1
    array(//Inicio: array 2
        'nome_cargo' => "CEO",
        'subordinados' => array( //Inicio: array 3
            //Inicio: Diretor Comercial
            array( //Inicio: array 4
                'nome_cargo' => 'Diretor Comercial',
                'subordinados' => array( //Inicio: array 5
                    //Inicio: Gerente de Vendas
                    array( //Inicio: array 6
                        'nome_cargo' => 'Gerente de Vendas'
                    )//Fim: array 6
                )//Fim: array 5
            ),//Fim: array 4
            //Inicio do array 7 irmão do array 4
            array(//Inicio: array 7
                'nome_cargo' => 'Diretor Financeiro',
                'subordinados' => array(//Inicio: array 8
                    //Inicio: Gerente de Contas a Pagar
                    array(//Inicio: array 9
                        'nome_cargo' => 'Gerente de Contas a Pagar',
                        'subordinados' => array(//Inicio: array 10
                            //Inicio: Supervisor de Pagamento
                            array(//Inicio: array 11
                                'nome_cargo' => 'Supervisor de Pagamento'
                            )//Fim: array 11
                        )//Fim: array 10
                    ),//Fim: array 9
                    //Inicio do array 12 irmão do array 9
                    array(//Inicio: array 12
                        'nome_cargo' => 'Gerente de Comprar',
                        'subordinados' => array(//Inicio: array 13
                            //Inicio: Supervisor de Suprimentos
                            array(//Inicio: array 14
                                'nome_cargo' => 'Supervisor de Suprimentos'
                            )//Fim: array 14     
                        ) //Fim: array 13
                    )//Fim: array 12
                )//Fim: array 8
            )//Fim: array 7
        )//Fim: array 3
    )//Fim: array 2
);//Fim: array 1




function exibe($cargos) {


    $html = '<ul>';

    foreach ($cargos as $cargo) {
 
        $html .= "<li>";

        $html .= $cargo['nome_cargo'];

        if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0) {
            $html .= exibe($cargo['subordinados']);
        }

        $html .= "</li>";

    }

    $html .= "</ul>";

    return $html;

}

echo exibe($hierarquia);

?>

