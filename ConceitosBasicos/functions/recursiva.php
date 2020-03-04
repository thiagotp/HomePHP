<?php

$hierarquia = array(
    array(
        "nome_cargo"=>"CEO",
        "subordinados"=>array(
            //Início Diretor Comercial
            array(
                "nome_cargo"=>"Diretor Comercial",
            "subordinados"=>array(
                //Início Gerente de Vendas
                array(
                   "nome_cargo"=> 'Gerente de Vendas'
                )
                //Termino Gerente de Vendas
            )
        ),
            //Termino do array
            
            //Inicio diretor financeiro
            array(
                "nome_cargo"=>"Diretor Financeiro",
                "subordinados"=>array(
                    //Inicio Gerente de contas a pagar
                    array(
                        "nome_cargo"=>"Gerente de contas a pagar",
                        "subordinados"=>array(
                            //inicio do Supervisor
                                array(
                                    "nome_cargo"=>"Supervisor de pagamentos"
                                )
                            //Termino do Supervisor
                        )
                                ),
                    //termino gerente de contas a pagar
                    //inicio gerente de compras
                    array(
                        "nome_cargo"=>"gerente de compras",
                        "subordinados"=>array(
                            "nome_cargo"=>"Supervisor Teste",
                            "subordinados"=>array(
                                "nome_cargo"=>"teste"
                            )
                        )
                    )
                )
            )
            //termino do diretor financeiro
        )
    )
);

function exibe($cargos){
    $html = "<ul>";

    foreach ($cargos as $key => $cargo) {
        $html .="<li>";

        $html .= $cargo["nome_cargo"];

        //Verificando se existem subordinados "ISSET" e se é maior que zero "COUNT"
        if(isset($cargo["subordinados"]) && count($cargo["subordinados"]) > 0){

            $html .= exibe($cargo["subordinados"]);

        }

        $html .= "</li>";
    }

    $html .= "</ul>";

    return $html;
}

echo exibe($hierarquia);
echo "</br>";

?>