<?php

$server   = "localhost";
$user     = "root";
$password = "123456";
$dbname   = "oo";

$pdo = new PDO(
    'mysql:host='.$server.';dbname='.$dbname, $user, $password);
	
// execução da query
$statement = $pdo->query("SUA QUERY STRING");
$CadastroTime   = $stmt->fetch();

$table  = <table border="1">;
$table .= '<thead>';
$table .= '<caption> Campeonato de  Sinuca </caption>';
$table .= '<tr>';
$table .= '<td></td>';
$table .= '<td>NomeTime</td>';
$table .= '<td>Jogador 1</td>';
$table .= '<td>Jogador 2</td>';
$table .= '</tr>';
$table .= '</thead>';
$table .= '<tbody>';
$table .= '<tfoot>';
$table .= '<tr><td>Descrição 1º=Troféu - 2º=Troféu </tr></td>';
$table .= '</tfoot>';
$table .= '</table>';

// laço de repetição para inclusão dos dados na tabela
foreach($CadastroTime as $CadastroTime){
    $table .= '<tr>';
        $table .= "<td><input type='checkbox' value='{$cadastroTime->nometime}'></td>";
        $table .= "<td>{$CadastroTime->nometime}</td>";
        $table .= "<td>{$CadastroTime->jogador1}</td>";
        $table .= "<td>{$CadastroTime->jogador2}</td>";
    $table .= '</tr>';
}

// fecahamento do html
$table .= '</tbody>';
$table .= '</table>';

// exibição na tela
echo $table;