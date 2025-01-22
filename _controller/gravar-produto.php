<?php 

    include_once "../_class/Produto.php";

    $produto = new Produto();

    $produto->setNome($_POST['nome']);
    $produto->setDescricao($_POST['desc']);
    $produto->setValor($_POST['valor']);
    if($_POST['options'] === 'Sim') {
        $produto->setDisp(true);
    } else {
        $produto->setDisp(false);
    }

    var_dump($produto);
    
?>