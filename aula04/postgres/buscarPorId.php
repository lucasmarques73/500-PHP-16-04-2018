<?php 

//Buscando informações do banco
require 'conexao.php';

$id = 2;

$query = "SELECT * FROM usuarios WHERE id={$id}";

echo $query;

echo '<br>';
$result = pg_query($con,$query);
// Para mais de um registro
$data = pg_fetch_assoc($result);
// print_r($data);

echo $data['email'];
