<?php 

    include_once "_class/ProdutoDAO.php";

    $produto = new Produto();

    $produtoDAO = new ProdutoDAO($produto);

    $produtos = $produtoDAO->listar();