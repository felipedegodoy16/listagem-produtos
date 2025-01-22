<?php 

    include_once "../_class/ProdutoDAO.php";

    //  Criando o produto
    $produto = new Produto();

    $produto->setNome($_POST['nome']);
    $produto->setDescricao($_POST['desc']);
    $produto->setValor(str_replace(",", ".", $_POST['valor']));
    $produto->setDisp($_POST['options']);

    // Criando o produtoDAO
    $produtoDAO = new ProdutoDAO($produto);

    $produtoDAO->inserir();

    header('Location: ../index.php');