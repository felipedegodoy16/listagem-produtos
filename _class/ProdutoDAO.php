<?php 

    include_once "Produto.php";

    class ProdutoDAO {
        public Produto $produto;

        public function __construct($produto) {
            $this->produto = $produto;
        }

        // Getters and Setters
        public function getProduto() {
            return $this->produto;
        }

        public function setProduto($produto) {
            $this->produto = $produto;
        }
    }