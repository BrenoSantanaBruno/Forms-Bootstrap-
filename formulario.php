<?php

use App\Model\Conexao;

require_once "App/Model/Conexao.php";
$conn = Conexao::getConn();

$email = $_POST['email'];
$celular = $_POST['celular'];
$mensagem = $_POST['mensagem'];

if (isset($_POST['send'])) {
    $sql = "INSERT INTO formulario (email, celular, mensagem) VALUES (:email, :celular, :mensagem)";
    $stmt = Conexao::getConn()->prepare($sql);
    $stmt->bindValue(':email', $email);
    $stmt->bindValue(':celular', $celular);
    $stmt->bindValue(':mensagem', $mensagem);
    $stmt->execute();
}





?>