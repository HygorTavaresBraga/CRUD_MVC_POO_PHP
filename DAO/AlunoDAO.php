<?php

    class AlunoDAO{

        private $connection;

        public function __construct()
        {            
            $dsn = "mysql: host=localhost; dbname=php_crud_mvc";
            $this->connection = new PDO($dsn, 'root', '');

            //dsn = Data Source Name;
            //PDO = PHP Data Objects;
        }

        public function insert(AlunoModel $model){
            $sql = "INSERT INTO alunos (nomeAluno, cpfAluno, turmaAluno) VALUES (?, ?, ?)";

            $stmt = $this->connection->prepare($sql);

            $stmt->bindValue(1, $model->nome);
            $stmt->bindValue(2, $model->cpf);
            $stmt->bindValue(3, $model->turma);

            $stmt->execute();

            //? = marcadores de posição dos valores;
            //sql = Standard Query Language (Linguagem padrão para realizar queries).
            // stmt = statement (Prepara uma declaração SQL para execução).
        }

        public function select(){
            $sql = "SELECT * FROM alunos";

            $stmt = $this->connection->prepare($sql);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_CLASS);

            //fetchAll = retorna todas as linhas (retorna um array associativo caso não tenha parâmetros);
            //PDO::FETCH_CLASS = organiza o return em array de objetos;
        }

        public function selectById(int $id){

            include_once './model/AlunoModel.php';

            $sql = "SELECT * FROM alunos WHERE id = ?";

            $stmt = $this->connection->prepare($sql);
            $stmt->bindValue(1, $id);
            $stmt->execute();

            return $stmt->fetchObject("AlunoModel");
        }

        public function update(AlunoModel $model){
            $sql = "UPDATE alunos SET nomeAluno=?, cpfAluno=?, turmaAluno=? WHERE id=?";

            $stmt = $this->connection->prepare($sql);

            $stmt->bindValue(1, $model->nome);
            $stmt->bindValue(2, $model->cpf);
            $stmt->bindValue(3, $model->turma);
            $stmt->bindValue(4, $model->id);

            $stmt->execute();
        }

        public function delete(int $id){
            $sql = "DELETE FROM alunos WHERE id = ?";

            $stmt = $this->connection->prepare($sql);
            $stmt->bindValue(1, $id);
            $stmt->execute();
        }
    }

?>