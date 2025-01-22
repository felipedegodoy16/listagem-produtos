<?php 

    include_once "../_class/ProdutoDAO.php";

    $produto = new Produto();

    $produto->setNome($_POST['nome']);
    $produto->setDescricao($_POST['desc']);
    $produto->setValor(str_replace(",", ".", $_POST['valor']));
    $produto->setDisp($_POST['options']);

    var_dump($produto);