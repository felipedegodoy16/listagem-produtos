<?php 

    class Produto{
        private string $nome;
        private string $descricao;
        private float $valor;
        private string $disp;

        // Getters and Setters
        public function getNome() {
            return $this->nome;
        }

        public function getDescricao() {
            return $this->descricao;
        }

        public function getValor() {
            return $this->valor;
        }

        public function getDisp() {
            return $this->disp;
        }

        public function setNome($nome) {
            $this->nome = $nome;
        }

        public function setDescricao($descricao) {
            $this->descricao = $descricao;
        }

        public function setValor($valor) {
            $this->valor = $valor;
        }

        public function setDisp($disp) {
            $this->disp = $disp;
        }
    }