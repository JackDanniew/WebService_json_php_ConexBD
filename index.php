<?php
	
error_reporting(E_ALL);
ini_set('display_errors', 1);

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

require_once "conexao_bd.php";

$banco = new DB();

$sql = "SELECT * FROM pessoas";
$banco->query($sql);
$result['listaPessoas'] = $banco->resultSet($sql);

// foreach ($result['listaPessoas'] as $item) {
//     echo "
//         <strong>Id: </strong>".$item['id']."<br>
//         <strong>Nome: </strong>".$item['nome']."<br>
//         <strong>Data de Nascimento: </strong>".$item['data_nascimento']."<br><br>
//     ";
// }

echo json_encode($result);

?>