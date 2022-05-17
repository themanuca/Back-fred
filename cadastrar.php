<?php

include_once "conexao.php";

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if (empty($dados['nome'])) {
    $retorna = ['erro' => true, 'msg' => "ERRO"];

} elseif (empty($dados['categoria'])) {
    $retorna = ['erro' => true, 'msg' => "ERRO"];

} elseif (empty($dados['valor'])) {
    $retorna = ['erro' => true, 'msg' => "ERRO"];

} else {

    $query_produto = "INSERT INTO sistema_controle_estoque (sce_nome, sce_categoria, sce_valor) VALUES (:nome, :categoria, :valor)";

    $cad_produto = $conn->prepare($query_produto);
    $cad_produto->bindParam(':nome', $dados['nome']);
    $cad_produto->bindParam(':categoria', $dados['categoria']);
    $cad_produto->bindParam(':valor', $dados['valor']);

    $cad_produto->execute();

    if ($cad_produto->rowCount()) {
        $retorna = ['erro' => false, 'msg' => "<div class= 'alert alert-success' role='alert'> SUCESSO </div>"];
    } else {
        $retorna = ['erro' => true, 'msg' => "ERRO"];
    }
}


echo json_encode($retorna);
