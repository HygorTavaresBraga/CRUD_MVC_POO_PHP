<?php

    class AlunoController{


        public static function showHome(){
            include 'view/templates/navbar.html';
            include 'view/home.html';
            include 'view/templates/footer.html';
        }

        public static function showList(){            
            include './model/AlunoModel.php';
            $model = new AlunoModel();
            $model->getAllAluno();
            
            include 'view/templates/navbar.html';            
            include 'view/modules/Aluno/ListAluno.php';
            include 'view/templates/footer.html';
        }

        public static function showRegister(){
            include 'view/templates/navbar.html';   
            include 'view/modules/Aluno/registerAluno.php';
            include 'view/templates/footer.html';
        }

        public static function register(){
            include './model/AlunoModel.php';

            $model = new AlunoModel();

            $model->nome = $_POST['nomeAluno'];
            $model->cpf = $_POST['cpfAluno'];
            $model->turma = $_POST['turmaAluno'];
            $model->registerAluno();

            header('Location: /PHP-CRUD-MVC/lista');
        }

        public static function showEdit(){
            include './model/AlunoModel.php';

            $model = new AlunoModel();
            $modelView = $model->getById( (int) $_GET['id'] );

            include './view/templates/navbar.html';
            include 'view/modules/Aluno/editAluno.php';
            include './view/templates/footer.html';

        }

        public static function edit(){
            
            include './model/AlunoModel.php';

            $model = new AlunoModel();

            $model->id = $_POST['id'];
            $model->nome = $_POST['nomeAluno'];
            $model->cpf = $_POST['cpfAluno'];
            $model->turma = $_POST['turmaAluno'];
            $model->updateAluno();

            header('Location: /PHP-CRUD-MVC/lista');
        }

        public static function delete(){
            include './model/AlunoModel.php';

            $model = new AlunoModel();

            $model->delete( (int) $_GET['id'] );

            header('Location: /PHP-CRUD-MVC/lista');
        }


    }

?>