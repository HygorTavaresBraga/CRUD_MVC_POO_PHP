<!-- Definição de Rotas -->
<?php

    require_once('./controller/AlunoController.php');

    $url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    
    switch ($url) {

        case '/PHP-CRUD-MVC/':
            AlunoController::showHome();
        break;

        case '/PHP-CRUD-MVC/home':
            AlunoController::showHome();
        break;

        case '/PHP-CRUD-MVC/lista':
            AlunoController::showList();
        break;

        case '/PHP-CRUD-MVC/edicao':
            AlunoController::showEdit();
        break;

        case '/PHP-CRUD-MVC/editar':
            AlunoController::edit();
        break;

        case '/PHP-CRUD-MVC/cadastro':
            AlunoController::showRegister();
        break;

        case '/PHP-CRUD-MVC/cadastrar':
            AlunoController::register();
        break;

        case '/PHP-CRUD-MVC/delecao':
            AlunoController::delete();
        break;
        
        default:
            
        break;
    }

?>