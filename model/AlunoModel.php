<?php

    class AlunoModel{
       
        public $id, $nome, $cpf, $turma;

        public $rows;

        public function registerAluno(){
            include './DAO/AlunoDAO.php';

            $dao = new AlunoDAO();

            $dao->insert($this);
        }

        public function getAllAluno(){
            include './DAO/AlunoDAO.php';

            $dao = new AlunoDAO();

            $this->rows = $dao->select();
        }

        public function getById(int $id){
            include './DAO/AlunoDAO.php';

            $dao = new AlunoDAO();

            return $dao->selectById($id);
        }

        public function updateAluno(){
            include './DAO/AlunoDAO.php';
    
            $dao = new AlunoDAO();
    
            $dao->update($this);
        }

        public function delete(int $id){
            include './DAO/AlunoDAO.php';

            $dao = new AlunoDAO();

            $dao->delete($id);
        }
    }

    

?>