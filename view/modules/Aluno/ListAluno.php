<style>

    .container-list{
        margin: 20px 0 20px 0;
        display: flex;
        flex-direction: column;
        text-align: center;
        align-items: center;
    }

    h1{
        text-transform: uppercase;
        text-align: center;
    }

    table{
        margin-top: 10px;
        border: solid #000 1px;
    }

    th,td{
        border: solid #000 1px;
        padding: 5px;
    }

    a{
        color: #000;
    }

    #delete{
        color:#fff;
        background-color: red;
        border: solid 1px red;
        border-radius: 5px;
        padding: 3px;
        text-decoration: none;
    }

</style>

<div class="container-list">
    <h1>Lista de Alunos</h1>
    <table>
        <tr>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Turma</th>
                    <th style="color:red;">EXCLUIR</th>
                </tr>
            </thead>
        </tr>

        <tr>
            <tbody>
                <?php foreach($model->rows as $item): ?>
                    
                <tr>
                    <td><?= $item->id ?></td>
                    <td>
                        <a href="/PHP-CRUD-MVC/edicao?id=<?=$item->id?>"><?= $item->nomeAluno ?></a>
                    </td>
                    <td><?= $item->cpfAluno ?></td>
                    <td><?= $item->turmaAluno ?></td>
                    <td>
                        <a id="delete" href="/PHP-CRUD-MVC/delecao?id=<?=$item->id?>">X</a>
                    </td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </tr>

    </table>
</div>