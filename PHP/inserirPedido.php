<?php
    require '..\PHP\config.php';
    require '..\PHP\connection.php';
    require '..\PHP\database.php';

$nomePedido = $_GET['NomePedido']; 
$valorPedido = $_GET['ValorPedido']; 

/*Falta ver o nome correto no banco de dados;*/ $table= "table-pedido";
 
    $dadosPedido = array (
        
        /*Falta ver o nome correto no banco de dados;*/ 'nome-pedido' => "$nomePedido",
        /*Falta ver o nome correto no banco de dados;*/ 'valor-pedido' => "$valorPedido"
        );
        
      DBCreate($table, $dadosClientes);

        
      $gravar = DBCreate($table, $dadosPedido);

    if($gravar){
        echo "Tudo certo!";
    }else{
        echo "algo deu Errado!";
    }

?>