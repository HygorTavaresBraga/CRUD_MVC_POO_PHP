<style>
    .container-edit{
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    form{
        margin-top: 20px;
        display: flex;
        flex-direction: column;
        width: 20%;
        gap: 10px;
        text-align: center;
    }

    input{
        padding: 5px 0 5px 0;
        border-radius: 5px;
    }

    button{
        margin: 0 auto;
        cursor: pointer;
        padding: 3px;
    }

</style>

<div class="container-edit">
    <h1>Edição de Alunos</h1>

    <form action="editar" method="post">
        <label for="nome">Nome</label>
        <input id="nomeAluno" name="nomeAluno" type="text" value="<?= $modelView->nomeAluno ?>"/>

        <label for="cpf">CPF</label>
        <input id="cpfAluno" name="cpfAluno" type="text" value="<?= $modelView->cpfAluno ?>"/>

        <label for="turma">Turma</label>
        <input id="turmaAluno" name="turmaAluno" type="number" value="<?= $modelView->turmaAluno ?>"/>

        <input id="id" name="id" type="number" hidden value="<?= $modelView->id ?>">

        <button id="edit" name="edit" type="submit">Salvar</button>
    </form>
</div>
