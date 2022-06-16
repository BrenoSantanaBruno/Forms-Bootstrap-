<?php

use App\Model\Conexao;

require_once "App/Model/Conexao.php";
$conn = Conexao::getConn();

/** @var TYPE_NAME $sql */
$sql = "CREATE TABLE formulario.mensagem (email varchar(100) NOT NULL, whatsapp INTEGER NOT NULL, mensagem VARCHAR(255) NOT NULL)";
$stmt = Conexao::getConn()->prepare($sql);
$stmt->execute();

echo "inserido com sucesso";
?>
