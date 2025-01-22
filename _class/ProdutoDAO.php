<?php 

    include_once "ConnectionFactory.php";
    include_once "Produto.php";

    class ProdutoDAO {
        public Produto $produto;

        public function __construct($produto) {
            $this->produto = $produto;
        }

        // Methods
        public function inserir() {
            try {

                // Query SQL
                $sql = "INSERT INTO produtos VALUES 
                (DEFAULT, :nome, :descricao, :valor, :disponibilidade);";

                // Conectando o banco e preparando a query
                $stmt = ConnectionFactory::getConexao()->prepare($sql);
                $stmt->bindValue(":nome", $this->getProduto()->getNome(), PDO::PARAM_STR);
                $stmt->bindValue(":descricao", $this->getProduto()->getDescricao(), PDO::PARAM_STR);
                $stmt->bindValue(":valor", $this->getProduto()->getValor(), PDO::PARAM_STR);
                $stmt->bindValue(":disponibilidade", $this->getProduto()->getDisp(), PDO::PARAM_STR);

                // Executando a query no banco
                $stmt->execute() or die(print_r($stmt->errorInfo(), true));

                return;

            } catch(Exception $e) {
                
                echo "Exceção $e";
            
            }
        }

        public function listar() {
            try {

                // Query SQL
                $sql = "SELECT * FROM produtos WHERE disponibilidade = 'S' ORDER BY valor;";

                // Conectando o banco e preparando a query
                $stmt = ConnectionFactory::getConexao()->prepare($sql);

                // Executando a query no banco
                $stmt->execute() or die(print_r($stmt->errorInfo(), true));
                $dados = $stmt->fetchAll();

                if(count($dados) > 0) {
                    foreach($dados as $d) {
                        $produtos[] = array(
                            'nome' => $d['nome'],
                            'descricao' => $d['descricao'],
                            'valor' => number_format($d['valor'], 2, ',', '.'),
                            'disponibilidade' => $d['disponibilidade']
                        );
                    }
                }

                return $produtos;

            } catch(Exception $e) {
                
                echo "Exceção $e";
            
            }
        }

        // Getters and Setters
        public function getProduto() {
            return $this->produto;
        }

        public function setProduto($produto) {
            $this->produto = $produto;
        }
    }