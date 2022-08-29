<style>
    .container-register{
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

<div class="container-register">
    <h1>Registro de Alunos</h1>

    <form action="cadastrar" method="post">
        <label for="nome">Nome</label>
        <input id="nomeAluno" name="nomeAluno" type="text"/>

        <label for="cpf">CPF</label>
        <input id="cpfAluno" name="cpfAluno" type="text"/>

        <label for="turma">Turma</label>
        <input id="turmaAluno" name="turmaAluno" type="number"/>

        <button id="register" name="register" type="submit">Registrar</button>
    </form>
</div>
